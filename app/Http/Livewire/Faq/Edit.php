<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;

class Edit extends Component
{
    public $question;
    public $answer;
    public $faq_id;
    public $faq;

    protected $rules = [
        'faq.question' => 'required|min:5',
        'faq.answer' => 'required|min:5',
    ];

    protected $validationAttributes = [
        'question' => 'pergunta',
        'answer' => 'resposta',
    ];

    public function mount(\App\Models\Faq $faq)
    {
        $this->faq = $faq;
    }

    public function updateFaq()
    {
        $this->validate();
        try {
            $this->faq->save();
            session()->flash('success', 'Faq atualizado com sucesso!');
            return redirect()->route('faq.index');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao editar o faq!');
        }
    }

    public function render()
    {
        return view('livewire.faq.edit');
    }
}
