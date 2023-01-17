<?php

namespace App\Http\Livewire\OnlineStore;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Delete extends Component
{
    public $onlineStore;

    public function mount(\App\Models\OnlineStore $onlineStore)
    {
        $this->onlineStore = $onlineStore;
    }

    public function delete()
    {
        if (!$this->onlineStore->delete()) session()->flash('error', 'Não foi possível remover este loja');
        Storage::disk('public')->delete($this->onlineStore->logo);
        session()->flash('success', 'Loja excluído com sucesso!');
        return redirect()->route('online-store.index');
    }

    public function render()
    {
        return view('livewire.online-store.delete');
    }
}
