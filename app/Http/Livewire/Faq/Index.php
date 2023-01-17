<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $faqs = \App\Models\Faq::paginate(10);
        return view('livewire.faq.index', ['faqs' => $faqs]);
    }
}
