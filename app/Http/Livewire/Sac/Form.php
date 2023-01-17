<?php

namespace App\Http\Livewire\Sac;

use App\Mail\SacSend;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Form extends Component
{

    public $name = '';
    public $email = '';
    public $phone = '';
    public int $type = 0;
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:10',
        'phone' => 'required|min:10',
        'type' => 'required|in:1,2,3,4,5',
        'message' => 'required|min:10',
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'email' => 'email',
        'phone' => 'telefone',
        'type' => 'assunto',
        'message' => 'mensagem'
    ];

    public function send()
    {
        $this->validate();
        try {
            $data = \App\Models\Sac::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'type' => $this->type,
                'message' => $this->message,
            ]);
            Mail::to('dsprog@gmail.com')->send(new SacSend($data));

            $this->reset('name', 'email', 'phone', 'type', 'message');
            session()->flash('success', 'Mensagem enviada para o sac com sucesso!');

        } catch (\Exception $e) {
            session()->flash('error', 'Erro ao enviar mensagem para o sac!');
        }
    }

    public function render()
    {
        return view('livewire.sac.form');
    }
}
