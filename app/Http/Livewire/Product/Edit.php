<?php

namespace App\Http\Livewire\Product;

use App\Models\Info;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\{
    Component,
    WithFileUploads
};

class Edit extends Component
{
    use WithFileUploads;

    public $product;
    public $infos;
    public $category_id;
    public $capa;
    public $image;
    public $menu;
    public $selectedInfo = [];

    protected $rules = [
        'product.category_id' => 'required',
        'product.name' => 'required',
        'product.code' => 'required',
        'capa' => 'nullable|image|dimensions:width=650,height=650',
        'image' => 'nullable|image|dimensions:width=650,height=650',
        'product.info1' => 'nullable',
        'product.info1_text' => 'nullable',
        'product.info2' => 'nullable',
        'product.info2_text' => 'nullable',
        'product.info3' => 'nullable',
        'product.info3_text' => 'nullable',
        'product.status' => 'nullable',
        'product.menu' => 'nullable'
    ];

    protected $validationAttributes = [
        "product.category_id" => "categoria",
        'product.name' => 'produto',
        'product.code' => 'código',
        'capa' => 'capa',
        'image' => 'imagem'
    ];

    public function mount(\App\Models\Product $product, Info $info)
    {
        $this->product = $product;
        $this->infos = $info->with('products')->get();
        $this->selectedInfo = $this->product->infos()->pluck('id')->map(
            function($group) {
                return strval($group);
            })->toArray();
    }

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().rand(0,9).'.'.$ext;

        return $file->storeAs('product', $fileNameSlug, 'public');
    }

    public function update()
    {
        $this->validate();
        try{

            $this->product->capa = $this->product->capa;
            if ($this->capa) {
                Storage::disk('public')->delete($this->product->capa);
                $this->product->capa = $this->imageUploaded($this->capa);
            }

            $this->product->image = $this->product->image;
            if ($this->image) {
                Storage::disk('public')->delete($this->product->image);
                $this->product->image = $this->imageUploaded($this->image);
            }
            $this->product->slug = Str::slug($this->product->name);
            $this->product->save();
            $this->product->infos()->detach();
            $this->product->infos()->attach($this->selectedInfo);
            session()->flash('success', 'Produto atualizado com sucesso!');
            return redirect()->route('products.index');
        }
        catch(\Exception $e)
        {
            session()->flash('error', 'Erro ao editar o produto!');
        }
    }

    public function render()
    {
        $categories = \App\Models\Category::with('subCategories')->whereNull('parent_id')->get();
        //$infos = Info::all();
        return view('livewire.product.edit', compact('categories'));
    }
}
