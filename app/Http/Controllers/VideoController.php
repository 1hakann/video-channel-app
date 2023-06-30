<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function create(Video $video)
    {
        return view('video.create', compact('video'));
    }
}
