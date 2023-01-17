<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class GalleryDelete extends Component
{
    public $gallery;

    public function mount(\App\Models\ProductGallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function delete()
    {
        if (!$this->gallery->delete()) session()->flash('error', 'Não foi possível remover este produto');
        Storage::disk('public')->delete($this->gallery->image);
        session()->flash('success', 'Produto excluído com sucesso!');
        return redirect()->route('products.gallery', $this->gallery->product_id);
    }

    public function render()
    {
        return view('livewire.product.gallery-delete');
    }
}
