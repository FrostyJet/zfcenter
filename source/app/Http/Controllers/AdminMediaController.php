<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    public function delete($id)
    {
        Media::find($id)->delete();

        return redirect()->back();
    }

    public function uploadStart(Request $request)
    {
        $ext = '.jpg';
        $ext = '.mp4';

        
        #$file = $request->file('file');
        #$file->storeAs('public/media', 'fucker');

        $x = Storage::append('public/media/' . 1 . $ext, file_get_contents($_FILES['file']['tmp_name']));

        dd($_FILES);
        return;


       

        $fileId = uniqid();

        echo $fileId;
        exit;
    }

    public function uploadChunk(Request $request)
    {
        #$postId = $_GET['id'];
        #$fileId = $_GET['patch'];

        $totalSize = $request->header('upload-length');
        $filename = $request->header('upload-name');
        $offset = $request->header('upload-offset');

        $ext = explode('.', $filename);
        $ext = '.' . array_pop($ext);

        Storage::append('public/media/' . 1 . $ext, $input);

        return response()->json([
            'status' => 200,
            'offset' => $offset,
            'totalSize' => $totalSize,
        ]);
    }
}
