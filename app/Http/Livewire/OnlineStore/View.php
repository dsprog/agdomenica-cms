<?php

namespace App\Http\Livewire\OnlineStore;

use Livewire\Component;

class View extends Component
{
    public $onlinestores;

    public function mount(\App\Models\OnlineStore $onlinestores)
    {
        $this->onlinestores = $onlinestores->orderBy('name', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.online-store.view');
    }
}
