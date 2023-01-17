<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSend;

class Form extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $subject = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:10',
        'phone' => 'required|min:10',
        'subject' => 'required|min:5',
        'message' => 'required|min:5',
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'email' => 'email',
        'phone' => 'telefone',
        'subject' => 'assunto',
        'message' => 'mensagem'
    ];

    public function send()
    {
        $this->validate();
        try {
            $data = \App\Models\Contact::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subject' => $this->subject,
                'message' => $this->message,
            ]);
            Mail::to('dsprog@gmail.com')->send(new ContactSend($data));
            $this->reset('name', 'email', 'phone', 'subject', 'message');
            session()->flash('success', 'Mensagem enviada com sucesso!');
        }catch (\Exception $e) {
            session()->flash('error', 'Erro ao enviar mensagem!');
        }
    }

    public function render()
    {
        return view('livewire.contact.form');
    }
}
