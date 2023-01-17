<?php

namespace App\Http\Livewire\Sac;

use Livewire\Component;

class Delete extends Component
{
    public $sac;

    public function mount(\App\Models\Sac $sac)
    {
        $this->sac = $sac;
    }

    public function delete()
    {
        try {
            $this->sac->delete();
            session()->flash('success', 'Sac deletado com sucesso!');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao deletar o sac!');
        }
        return redirect()->route('leads.sac.index');
    }

    public function render()
    {
        return view('livewire.sac.delete');
    }
}
