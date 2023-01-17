<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class Delete extends Component
{
    public $category;

    public function mount(\App\Models\Category $category)
    {
        $this->category = $category;
    }

    public function delete()
    {
        if (!$this->category->delete()) session()->flash('error', 'Não foi possível remover esta categoria');
        session()->flash('success', 'Categoria excluída com sucesso!');
        return redirect()->route('products.categories.index');
    }

    public function render()
    {
        return view('livewire.category.delete');
    }
}
