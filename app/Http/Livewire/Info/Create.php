<?php

namespace App\Http\Livewire\Info;

use App\Models\Info;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $title, $image;

    protected $rules = [
        'title' => 'required|max:100|unique:infos',
        'image' => 'required|image'
    ];

    protected $validationAttributes = [
        'title' => 'título',
        'image' => 'imagem'
    ];

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('info', $fileNameSlug, 'public') : null;
    }

    public function store()
    {
        $this->validate();
        $image = $this->imageUploaded($this->image);

        Info::create([
            'title' => $this->title,
            'image' => $image
        ]);

        session()->flash('success', 'Modo de preparo criado com sucesso!');
            return redirect()->route('info.index');
    }

    public function render()
    {
        return view('livewire.info.create');
    }
}
