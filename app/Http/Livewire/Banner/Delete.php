<?php

namespace App\Http\Livewire\Banner;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $banner;

    public function mount(\App\Models\Banner $banner)
    {
        $this->banner = $banner;
    }

    public function delete()
    {
        if (!$this->banner->delete()) session()->flash('error', 'Não foi possível remover este banner');
        Storage::disk('public')->delete($this->banner->image);
        Storage::disk('public')->delete($this->banner->image_mobile);
        session()->flash('success', 'Banner excluído com sucesso!');
        return redirect()->route('banner.index');
    }

    public function render()
    {
        return view('livewire.banner.delete');
    }
}
