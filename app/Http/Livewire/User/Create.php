<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $password;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email|unique:users',
        'password' => 'required|password'
    ];
    protected $validationAttributes = [
        'name' => 'nome',
        'password' => 'senha'
    ];

    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        session()->flash('success', 'Usuario criado com sucesso!');
            return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
