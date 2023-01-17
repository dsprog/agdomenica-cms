<?php

namespace App\Http\Livewire\Partner;

use Livewire\Component;
use App\Mail\PartnerSend;
use Illuminate\Support\Facades\Mail;

class Form extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $uf = '';
    public $city = '';
    public int $type = 0;
    public $note = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:10',
        'phone' => 'required|min:10',
        'uf' => 'required|min:2',
        'city' => 'required|min:3',
        'type' => 'required|in:1,2,3,4',
        'note' => 'nullable|min:10',
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'email' => 'email',
        'phone' => 'telefone',
        'uf' => 'uf',
        'city' => 'cidade',
        'type' => 'assunto',
        'note' => 'observação'
    ];

    public function send()
    {
        $this->validate();
        try {
            $data = \App\Models\Partner::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'uf' => $this->uf,
                'city' => $this->city,
                'type' => $this->type,
                'note' => $this->note,
            ]);
            Mail::to('dsprog@gmail.com')->send(new PartnerSend($data));

            $this->reset('name', 'email', 'phone', 'uf', 'city', 'type', 'note');
            session()->flash('success', 'Parceria enviada com sucesso!');

        } catch (\Exception $e) {
            session()->flash('error', 'Erro ao enviar o cadastro de parceria!');
        }
    }

    public function render()
    {
        return view('livewire.partner.form');
    }
}
