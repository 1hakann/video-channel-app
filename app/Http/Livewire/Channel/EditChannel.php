<?php

namespace App\Http\Livewire\Channel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Channel;

class EditChannel extends Component
{
    use AuthorizesRequests;
    
    public $channel;

    protected function rules()
    {
        return [
            'channel.name' => 'required|max:40|unique:channels,name,' .$this->channel->id,
            'channel.slug' => 'required|max:40|unique:channels,slug,' .$this->channel->id,
            'channel.description' => 'required|max:255',
        ];
    }

    public function mount(Channel $channel)
    {
        $this->channel = $channel;
    }

    public function update()
    {
        $this->authorize('update', $this->channel);
        $this->validate();

        $this->channel->update([
            'name' => $this->channel->name,
            'slug' => $this->channel->slug,
            'description' => $this->channel->description,
        ]);

        session()->flash('message', 'Kanal Bilgileri Güncellendi.');
        return redirect()->route('channel.edit',$this->channel->name);
    }

    public function render()
    {
        return view('livewire.channel.edit-channel');
    }
}
