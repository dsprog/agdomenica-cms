<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;

class Delete extends Component
{
    public $faq;

    public function mount(\App\Models\Faq $faq)
    {
        $this->faq = $faq;
    }

    public function delete()
    {
        try {
            $this->faq->delete();
            session()->flash('success', 'Faq deletado com sucesso!');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao deletar o faq!');
        }
        return redirect()->route('faq.index');
    }

    public function render()
    {
        return view('livewire.faq.delete');
    }
}
