<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Media;

class AdminMediaController extends Controller
{
    public function delete($id)
    {
        Media::find($id)->delete();

        return redirect()->back();
    }
}
