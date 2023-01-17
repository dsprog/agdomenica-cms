<?php

namespace App\Http\Livewire\Banner;

use Livewire\{Component, WithPagination};

class Index extends Component
{
    public function render()
    {
        $banners = \App\Models\Banner::paginate(10);
        return view('livewire.banner.index', compact('banners'));
    }
}
