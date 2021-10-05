<?php

namespace App\Http\Livewire\Images;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class View extends Component
{
    public $images;
    public $event;
    public $test;

    protected $listeners = ['removeImage'];

    public function removeImage($key)
    {
        $image = $this->event->images[$key];
        $image->delete();

        $this->images = $this->event->images;
    }

    public function mount()
    {
        $this->images = $this->event->images;
    }

    public function render()
    {
        return view('livewire.images.view');
    }
}
