<?php

namespace App\Http\Livewire\Product;

use Livewire\{Component, WithPagination};

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $products = \App\Models\Product::paginate(10);
        return view('livewire.product.index', compact('products'));
    }
}
