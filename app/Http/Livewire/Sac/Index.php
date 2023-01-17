<?php

namespace App\Http\Livewire\Sac;

use Livewire\{
    Component,
    WithPagination
};

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $sacs = \App\Models\Sac::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.sac.index', compact('sacs'));
    }

}
