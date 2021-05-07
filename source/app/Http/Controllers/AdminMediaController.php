<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminMediaController extends Controller
{
    public function delete($id)
    {
        Media::find($id)->delete();

        return redirect()->back();
    }

    public function upload(Request $request)
    {
        $isDone = @$_REQUEST['isDone'] == 'true';
        $filename = @$_REQUEST['filename'];
        $type = @$_REQUEST['type'];
        $postId = intval(@$_REQUEST['postId']);

        $nameParts = explode('.', $filename);
        $ext = array_pop($nameParts);

        $filename = implode($nameParts);

        $file = $request->file('file');
        $chunksDir = Storage::disk('local')->path("chunks");
        $path = $chunksDir . "/{$filename}";

        if ($isDone == true) {
            $filename = uniqid();
            File::move($path, storage_path("/app/public/media/{$filename}.{$ext}"));

            $m = new Media();
            $m->type = $type;
            if (!empty($postId)) $m->post_id = $postId;
            else $m->post_id = -1;
            $m->path = "media/{$filename}.{$ext}";
            $m->save();

            echo json_encode([
                'path' => $m->path,
                'id'   => $m->id,
            ]);
            exit;
        } else {
            if (!file_exists($chunksDir)) {
                mkdir($chunksDir, 777);
            }

            File::append($path, $file->get());
        }

        echo json_encode([
            'filename' => $filename,
            'isDone'   => $isDone,
        ]);
        exit;
    }
}
