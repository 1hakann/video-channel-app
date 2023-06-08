<?php

namespace App\Http\Livewire\Channel;

use Livewire\Component;
use App\Models\Channel;

class EditChannel extends Component
{
    public $channel;

    public function mount(Channel $channel)
    {
        $this->channel = $channel;
    }

    public function render()
    {
        return view('livewire.channel.edit-channel');
    }
}
