<?php

namespace App\Http\Livewire\Sections;

use App\Models\Sponsor as ModelsSponsor;
use Livewire\Component;

class Sponsor extends Component
{
    public $sponsors;

    public function mount()
    {
        $this->sponsors = ModelsSponsor::organizationSponsors()->get();
    }

    public function render()
    {
        return view('livewire.sections.sponsor');
    }
}
