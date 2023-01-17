<?php

namespace App\Http\Livewire\Info;

use App\Models\Info;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $infos = Info::paginate();
            return view('livewire.info.index', compact('infos'));
    }
}
