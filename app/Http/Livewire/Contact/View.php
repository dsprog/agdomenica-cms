<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class View extends Component
{
    public $contact;

    public function mount()
    {
        $this->contact = \App\Models\Contact::findOrFail($this->contact);
    }

    public function render()
    {
        return view('livewire.contact.view');
    }
}
