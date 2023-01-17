<?php

namespace App\Http\Livewire\Partner;

use Livewire\Component;

class Delete extends Component
{
    public $partner;

    public function mount($partner)
    {
        $this->partner = $partner;
    }

    public function delete()
    {
        try {
            $this->partner->delete();
            session()->flash('success', 'Parceiro deletado com sucesso!');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao deletar o parceiro!');
        }
        return redirect()->route('leads.partner.index');
    }

    public function render()
    {
        return view('livewire.partner.delete');
    }
}
