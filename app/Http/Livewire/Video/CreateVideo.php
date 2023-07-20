<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Channel;
use App\Models\Video;

class CreateVideo extends Component
{
    use WithFileUploads;

    public Channel $channel;
    public Video $video;
    public $videoFile;

    protected $rules = [
        'videoFile' => 'required|mimes:mp4|max:1228800'
    ];

    public function mount(Channel $channel)
    {
        $this->channel = $channel;
    }

    public function uploadVideo()
    {
        $this->validate([
            'videoFile' => 'required|mimes:mp4|max:1228800',
        ]);
    }

    public function fileCompleted()
    {
        $this->validate();

        $path = $this->videoFile->store('videos-temp');

        $this->video = $this->channel->videos()->create([
            'title' => 'untitled',
            'description' => 'none',
            'uid' => uniqid(true),
            'visibility' => 'private',
            'channel_id' => $this->channel->id,
            'path' => explode('/', $path)[1]
        ]);

        return redirect()->route('video.edit', [
            'channel' => $this->channel,
            'video' => $this->video,
        ]);
    }

    public function render()
    {
        return view('livewire.video.create-video')->extends('layouts.app');
    }
}
