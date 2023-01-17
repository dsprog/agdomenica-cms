<?php

namespace App\Http\Livewire\Product;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Delete extends Component
{
    public $product;

    public function mount(\App\Models\Product $product)
    {
        $this->product = $product;
    }

    public function delete()
    {
        if (!$this->product->delete()) session()->flash('error', 'Não foi possível remover este produto');
        Storage::disk('public')->delete($this->product->capa);
        Storage::disk('public')->delete($this->product->image);
        $this->product->infos()->detach();
        $this->delete_gallery();

        session()->flash('success', 'Produto excluído com sucesso!');
        return redirect()->route('products.index');
    }

    public function delete_gallery()
    {
        foreach ($this->product->product_gallery as $image) {
            Storage::disk('public')->delete($image->image);
        }
        \App\Models\ProductGallery::where('product_id', $this->product->id)->delete();
    }

    public function render()
    {
        return view('livewire.product.delete');
    }
}
