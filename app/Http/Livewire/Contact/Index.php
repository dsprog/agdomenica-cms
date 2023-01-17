<?php

namespace App\Http\Livewire\Contact;

use Livewire\{Component, WithPagination};

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $contacts = \App\Models\Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.contact.index', compact('contacts'));
    }
}
