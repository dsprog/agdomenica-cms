<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    public $category;
    public $name;
    public $parent_id;

    protected $rules = [
        'category.name' => 'required'
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'parent_id' => 'categoria principal'
    ];

    public function mount(\App\Models\Category $category)
    {
        $this->category = $category;
    }

    public function update()
    {
        $this->validate();
        try {
            $this->category['slug'] = Str::slug($this->category['name']);
            $this->category->save();
            session()->flash('success', 'Categoria atualizada com sucesso!');
            return redirect()->route('products.categories.index');
        }catch(\Exception $e){
            session()->flash('error', 'Erro ao editar o categoria!');
        }
    }

    public function render()
    {
        $categories = \App\Models\Category::with('subCategories')->whereNull('parent_id')->get();
        return view('livewire.category.edit', compact('categories'));
    }
}
