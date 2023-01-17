<?php

namespace App\Http\Livewire\Product;

use Illuminate\Support\Str;
use Livewire\{Component, WithFileUploads};

class Gallery extends Component
{
    use WithFileUploads;

    public $fileimages = [];
    public $product_id;
    public $list;

    protected $rules = [
        'fileimages.*' => 'image|dimensions:width=650,height=650',
    ];

    protected $validationAttributes = [
        'fileimages.*' => 'imagem'
    ];

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('product_gallery', $fileNameSlug, 'public') : null;
    }

    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->list = \App\Models\ProductGallery::where('product_id', $product_id)->get();
    }

    public function save()
    {
        $this->validate();

        foreach ($this->fileimages as  $key => $image) {
            $imageName = $this->imageUploaded($image);
            \App\Models\ProductGallery::create([
                'product_id' => $this->product_id,
                'image' => $imageName,
            ]);
        }
        $this->fileimages = null;
        session()->flash('success', 'Loja online cadastrada com sucesso!');
        return redirect()->route('products.gallery', $this->product_id);
    }

    public function render()
    {
        // dd($this->list);
        return view('livewire.product.gallery');
    }
}
