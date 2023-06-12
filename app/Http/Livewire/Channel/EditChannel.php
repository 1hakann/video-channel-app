<?php

namespace App\Http\Livewire\Channel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Channel;
use Livewire\WithFileUploads;
use Image;

class EditChannel extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public $channel;
    public $image;

    protected function rules()
    {
        return [
            'channel.name' => 'required|max:40|unique:channels,name,' .$this->channel->id,
            'channel.slug' => 'required|max:40|unique:channels,slug,' .$this->channel->id,
            'channel.description' => 'required|max:255',
            'image' => 'nullable|image|max:8192',
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

        // check if image is submitted
        if($this->image) {
            $image = $this->image->storeAs('images', $this->channel->uid . '.' . $this->image->extension());
            $cropImage = explode('/', $image)[1];
            $img = Image::make(storage_path() . '/app/' . $image)
                ->encode('png')
                ->fit(80, 80, function($constraint) {
                    $constraint->upsize();
                })->save();

            $this->channel->update([
                'image' => $cropImage
            ]);
        }

        session()->flash('message', 'Kanal Bilgileri Güncellendi.');
        return redirect()->route('channel.edit', $this->channel->name);
    }

    public function render()
    {
        return view('livewire.channel.edit-channel');
    }
}
