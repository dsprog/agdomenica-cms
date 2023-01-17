<?php

namespace App\Http\Livewire\OnlineStore;

use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $onlinestores = \App\Models\OnlineStore::all();
        return view('livewire.online-store.index', compact('onlinestores'));
    }
}
