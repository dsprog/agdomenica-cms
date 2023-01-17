<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;

class Create extends Component
{
    public $question;
    public $answer;

    protected $rules = [
        'question' => 'required|min:5',
        'answer' => 'required|min:5',
    ];

    protected $validationAttributes = [
        'question' => 'pergunta',
        'answer' => 'resposta',
    ];

    public function store()
    {

        $this->validate();

        try{
            \App\Models\Faq::create([
                'question' => $this->question,
                'answer' => $this->answer,
            ]);
            $this->reset('question', 'answer');
            session()->flash('success', 'Faq criado com sucesso!');
            return redirect()->route('faq.index');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao criar Faq!');
        }
    }

    public function render()
    {
        return view('livewire.faq.create');
    }

}
