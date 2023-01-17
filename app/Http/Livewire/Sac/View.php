<?php

namespace App\Http\Livewire\Sac;

use Livewire\Component;

class View extends Component
{
    public $sac;

    public function mount()
    {
        $this->sac = \App\Models\Sac::findOrFail($this->sac);
    }

    public function render()
    {
        return view('livewire.sac.view');
    }
}
