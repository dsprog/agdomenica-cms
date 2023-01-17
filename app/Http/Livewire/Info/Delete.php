<?php

namespace App\Http\Livewire\Info;

use App\Models\Info;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Delete extends Component
{
    public $info;

    public function delete()
    {
        if (!$this->info->delete()) session()->flash('error', 'Não foi possível remover este modo de preparo');
        Storage::disk('public')->delete($this->info->image);
        $this->info->products()->detach();
        session()->flash('success', 'Modo de preparo excluído com sucesso!');
            return redirect()->route('info.index');
    }

    public function render()
    {
        return view('livewire.info.delete');
    }
}
