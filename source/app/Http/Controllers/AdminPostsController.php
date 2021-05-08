<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Media;
use Illuminate\Support\Str;

class AdminPostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $filters = [];
        $title = $request->get('title');
        $id = $request->get('id');

        $posts = new Post();

        if (!empty($title)) {
            $posts = $posts->where('title', 'like', '%' . $title . '%');
            $filters['title'] = $title;
        }

        if (!empty($id)) {
            $posts = $posts->where('id', $id);
            $filters['id'] = $id;
        }


        $posts = $posts->orderBy('id', 'desc')->paginate(10);

        return view('admin.posts.index', [
            'posts'   => $posts,
            'filters' => $filters,
        ]);
    }

    public function create()
    {
        return view('admin.posts.create-update', [
            'post' => new Post()
        ]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.create-update', [
            'post' => $post
        ]);
    }

    public function delete($id)
    {
        $post = Post::find($id);

        if (!empty($post)) $post->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $title = $request->post('title');
        $body = $request->post('body');
        $attachmentIds = $request->post('attachmentIds');

        $p = new Post();
        $p->title = $title;
        $p->slug = Str::slug($title, '-');
        $p->body = $body;
        $p->date_created = date('Y-m-d H:i:s');
        $p->save();

        if (!empty($attachmentIds)) {
            Media::whereIn('id', $attachmentIds)
                ->update(['post_id' => $p->id]);
        }

        return redirect()->route('admin.posts.edit', ['id' => $p->id]);
    }

    public function update($id, Request $request)
    {
        $title = $request->post('title');
        $body = $request->post('body');

        $p = Post::findOrFail($id);
        $p->title = $title;
        $p->slug = Str::slug($title, '-');
        $p->body = $body;
        $p->date_updated = date('Y-m-d H:i:s');

        if (empty($p->date_created)) {
            $p->date_created = $p->date_updated;
        }

        $p->save();

        return redirect()->route('admin.posts.edit', ['id' => $p->id]);
    }
}
