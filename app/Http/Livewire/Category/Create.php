<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;
    public $parent_id;

    protected $rules = [
        'name' => 'required'
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'parent_id' => 'categoria principal'
    ];

    public function store()
    {
        $this->validate();
        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'parent_id' => $this->parent_id
        ]);
        session()->flash('success', 'Categoria cadastrada com sucesso!');
        return redirect()->route('products.categories.index');
    }

    public function render()
    {
        $categories = \App\Models\Category::with('subCategories')->whereNull('parent_id')->get();
        return view('livewire.category.create', compact('categories'));
    }
}
