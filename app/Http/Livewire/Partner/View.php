<?php

namespace App\Http\Livewire\Partner;

use Livewire\Component;

class View extends Component
{
    public $partner;

    public function mount()
    {
        $this->partner = \App\Models\Partner::findOrFail($this->partner);
    }
    public function render()
    {
        return view('livewire.partner.view');
    }
}
