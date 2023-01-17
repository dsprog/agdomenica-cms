<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = \App\Models\Category::with('subCategories')->whereNull('parent_id')->get();
        return view('livewire.category.index', compact('categories'));
    }
}
