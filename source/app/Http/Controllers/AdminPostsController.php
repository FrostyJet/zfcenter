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


        $posts = $posts->orderBy('id', 'desc')->simplePaginate(10);

        return view('admin.posts.index', [
            'posts' => $posts,
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
        Post::find($id)->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $title = $request->post('title');
        $body = $request->post('body');



        $p = new Post();
        $p->title = $title;
        $p->slug = Str::slug($title, '-');
        $p->body = $body;
        $p->date_created = date('Y-m-d H:i:s');
        $p->save();

        $mediaTypes = [
            Media::TYPE_VIDEO => 'videos',
            Media::TYPE_IMAGE => 'images'
        ];

        $id = $p->id;

        foreach ($mediaTypes as $type => $name) {
            if ($request->hasFile($name)) {
                $files = $request->file($name);

                foreach ($files as $file) {
                    try {
                        $m = new Media();
                        $m->path = $file->store('public/media');
                        $m->type = $type;
                        $m->post_id = $id;
                        $m->save();
                    } catch (\Exception $e) {
                    }
                }
            }
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

        $mediaTypes = [
            Media::TYPE_VIDEO => 'videos',
            Media::TYPE_IMAGE => 'images'
        ];

        foreach ($mediaTypes as $type => $name) {
            if ($request->hasFile($name)) {
                $files = $request->file($name);

                foreach ($files as $file) {
                    try {
                        $m = new Media();
                        $m->path = $file->store('public/media');
                        $m->type = $type;
                        $m->post_id = $id;
                        $m->save();
                    } catch (\Exception $e) {
                    }
                }
            }
        }

        return redirect()->route('admin.posts.edit', ['id' => $p->id]);
    }
}
