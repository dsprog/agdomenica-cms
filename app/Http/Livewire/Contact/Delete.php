<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Delete extends Component
{
    public $contact;

    public function mount(\App\Models\Contact $contact)
    {
        $this->contact = $contact;
    }

    public function delete()
    {
        try {
            $this->contact->delete();
            session()->flash('success', 'Contato deletado com sucesso!');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao deletar o contato!');
        }
        return redirect()->route('leads.contact.index');
    }

    public function render()
    {
        return view('livewire.contact.delete');
    }
}
