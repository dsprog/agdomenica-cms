<?php

namespace App\Http\Livewire\Product;

use App\Models\Info;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\{
    Component,
    WithFileUploads
};

class Create extends Component
{
    use WithFileUploads;

    public $category_id;
    public $name;
    public $code;
    public $info1;
    public $info1_text;
    public $info2;
    public $info2_text;
    public $info3;
    public $info3_text;
    public $capa;
    public $image;
    public $status = 1;
    public $menu;
    public $info_id = [];

    protected $rules = [
        "category_id" => "required|exists:categories,id",
        'name' => 'required',
        'code' => 'required',
        'capa' => 'image|dimensions:width=650,height=650',
        'image' => 'image|dimensions:width=650,height=650',

    ];

    protected $validationAttributes = [
        "category_id" => "categoria",
        'name' => 'produto',
        'code' => 'código',
        'capa' => 'capa',
        'image' => 'imagem',
        'info_id' => 'informações'
    ];

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('product', $fileNameSlug, 'public') : null;
    }

    public function store()
    {
        $this->validate();

       // $capa = $this->imageUploaded($this->capa);
       // $image = $this->imageUploaded($this->image);

        Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'code' => $this->code,
            'info1' => $this->info1,
            'info1_text' => $this->info1_text,
            'info2' => $this->info2,
            'info2_text' => $this->info2_text,
            'info3' => $this->info3,
            'info3_text' => $this->info3_text,
            'status' => $this->status,
            'menu' => $this->menu,
            'capa' => '$capa',
            'image' => '$image',
        ])->infos()->attach($this->info_id);

        $this->reset(['category_id', 'name', 'code', 'info1', 'info1_text', 'info2', 'info2_text', 'info3', 'info3_text', 'capa', 'image', 'status', 'menu']);
        $this->capa = null;
        $this->image = null;

        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect()->route('products.index');
    }

    public function render()
    {
        $categories = \App\Models\Category::with('subCategories')->whereNull('parent_id')->get();
        $infos = Info::all();
        return view('livewire.product.create', compact('categories', 'infos'));
    }
}
