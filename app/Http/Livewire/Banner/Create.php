<?php

namespace App\Http\Livewire\Banner;

use Illuminate\Support\Str;
use Livewire\{
    Component,
    WithFileUploads
};

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $image_mobile;
    public $expire;
    public $status = 1;

    protected $rules = [
        'name' => 'required',
        'image' => 'image|dimensions:width=1920,height=700',
        'image_mobile' => 'image|dimensions:width=800,height=400',
        'expire' => 'nullable|date'
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'image' => 'imagem',
        'image_mobile' => 'imagem mobile',
        'expire' => 'data de expiração'
    ];

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('banner', $fileNameSlug, 'public') : null;
    }

    public function store()
    {
        $this->validate();

        $image = $this->imageUploaded($this->image);
        $image_mobile = $this->imageUploaded($this->image_mobile);

        \App\Models\Banner::create([
            'name' => $this->name,
            'image' => $image,
            'image_mobile' => $image_mobile,
            'expire' => $this->expire,
            'status' => $this->status
        ]);

        session()->flash('success', 'Banner cadastrado com sucesso!');
        return redirect()->route('banner.index');
    }

    public function render()
    {
        return view('livewire.banner.create');
    }
}
