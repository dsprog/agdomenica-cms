<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $faqs = \App\Models\Faq::all();
        return view('livewire.faq.faq', compact('faqs'));
    }
}
