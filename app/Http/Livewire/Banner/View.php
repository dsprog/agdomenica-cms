<?php

namespace App\Http\Livewire\Banner;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class View extends Component
{
    public $banners;

    public function mount(\App\Models\Banner $banners)
    {
        $this->banners = $banners->whereRaw('(expire is NULL OR expire >= CURDATE())')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->get();
    }

    public function render()
    {
        return view('livewire.banner.view');
    }
}
