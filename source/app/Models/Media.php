<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    public $timestamps = false;

    const TYPE_VIDEO = 'video';
    const TYPE_IMAGE = 'image';
}
