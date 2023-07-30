<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Channel;

class VideoController extends Controller
{
    public function create(Video $video)
    {
        $user = Auth::user();
        $channel = Channel::find($user->channel->id);
        return view('video.create', compact('video','channel'));
    }

    public function edit(Channel $channel, Video $video)
    {
        $user = Auth::user();
        $channel = Channel::find($user->channel->id);
        return view('video.edit', compact('video','channel'));
    }
}
