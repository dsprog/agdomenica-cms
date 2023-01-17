<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Delete extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function delete()
    {
        if (!$this->user->delete()) session()->flash('error', 'Não foi possível remover este usuario');
        session()->flash('success', 'Usuario excluído com sucesso!');
            return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.delete');
    }
}
