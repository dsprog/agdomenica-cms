<?php

namespace App\Http\Livewire\Banner;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\{
    Component,
    WithFileUploads
};

class Edit extends Component
{
    use WithFileUploads;

    public $banner;
    public $name;
    public $image;
    public $image_mobile;
    public $expire;
    public $status;

    protected $rules = [
        'banner.name' => 'required',
        'image' => 'nullable|image|dimensions:width=1920,height=700',
        'image_mobile' => 'nullable|image|dimensions:width=800,height=400',
        'banner.expire' => 'nullable|date',
        'banner.status' => 'required'
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'image' => 'imagem',
        'image_mobile' => 'imagem mobile',
        'expire' => 'data de expiração',
        'status' => 'ativo'
    ];

    public function mount(\App\Models\Banner $banner)
    {
        $this->banner = $banner;
    }

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('banner', $fileNameSlug, 'public') : null;
    }

    public function update()
    {
        $this->validate();

        $this->banner->image = $this->banner->image;
        if($this->image) {
            Storage::disk('public')->delete($this->banner->image);
            $this->banner->image = $this->imageUploaded($this->image);
        }

        $this->banner->image_mobile = $this->banner->image_mobile;
        if($this->image_mobile) {
            Storage::disk('public')->delete($this->banner->image_mobile);
            $this->banner->image_mobile = $this->imageUploaded($this->image_mobile);
        }

        $this->banner->expire = $this->banner->expire ? $this->banner->expire : null;

        $this->banner->save();
        session()->flash('success', 'Banner atualizado com sucesso!');
        return redirect()->route('banner.index');
    }

    public function render()
    {
        return view('livewire.banner.edit');
    }
}
