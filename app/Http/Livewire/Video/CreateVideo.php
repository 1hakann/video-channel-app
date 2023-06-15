<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;

class CreateVideo extends Component
{
    public $name = "Hakan";

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.video.create-video', ['name' => $this->name]);
    }
}
