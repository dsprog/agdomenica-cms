<?php

namespace App\Http\Livewire\Partner;

use Livewire\{
    Component,
    WithPagination
};

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $partners = \App\Models\Partner::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.partner.index', compact('partners'));
    }
}
