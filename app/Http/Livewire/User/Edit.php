<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $user;

    protected function rules()
    {
        return [
            'user.name' => 'required|min:2',
            'user.email' => 'required|email|unique:users,email,'.$this->user->id,
        ];
    }
    
    protected $validationAttributes = [
        'name' => 'nome',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function update()
    {
        $this->validate();
        
        User::findOrFail($this->user->id)->update([
            'name' => $this->user->name,
            'email' => $this->user->email
        ]);
        session()->flash('success', 'Usuario alterado com sucesso!');
            return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
