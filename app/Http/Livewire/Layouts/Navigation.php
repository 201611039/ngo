<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class Navigation extends Component
{
    public $links;
    public $segment;

    public function mount()
    {
        $this->segment = request()->segment(1);
    }

    public function render()
    {
        $this->links = [
            [
                'title' => 'Home',
                'url' => url('/'),
            ], [
                'title' => 'About',
                'url' => route('about'),
            ], [
                'title' => 'Events',
                'url' => route('events'),
            ], [
                'title' => 'Contact Us',
                'url' => route('contact'),
            ], [
                'title' => 'Portal',
                'url' => route('dashboard'),
            ]
        ];

        return view('livewire.layouts.navigation');
    }
}
