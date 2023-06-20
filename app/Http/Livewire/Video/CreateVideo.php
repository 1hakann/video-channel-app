<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;
use App\Models\Channel;
use App\Models\Video;

class CreateVideo extends Component
{
    public Channel $channel;
    public Video $video;
    public $videoFile;

    public function mount($channel)
    {
        $this->channel = $channel;
    }

    public function upload()
    {
        $this->validate([
            'videoFile' => 'required|mimes:mp4|max:10240',
        ]);
    }

    public function fileCompleted()
    {

    }

    public function render()
    {
        return view('livewire.video.create-video', ['name' => $this->name]);
    }
}
