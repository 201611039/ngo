<?php

namespace App\Http\Livewire\Sections;

use App\Models\About;
use Livewire\Component;

class DonationTab extends Component
{

    public $about;
    public $missionToogle = true;
    public $visionToogle = false;
    public $valueToogle = false;

    public function mount()
    {
        $this->about = About::byBranch();
    }

    public function render()
    {
        return view('livewire.sections.donation-tab');
    }

    public function toogleTab($tab)
    {
        $this->missionToogle = false;
        $this->visionToogle = false;
        $this->valueToogle = false;

        if ($tab === 1) {
            $this->missionToogle = true;
        } elseif($tab === 2) {
            $this->visionToogle = true;
        } elseif ($tab === 3) {
            $this->valueToogle = true;
        }

    }
}
