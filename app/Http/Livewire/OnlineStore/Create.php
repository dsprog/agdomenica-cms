<?php

namespace App\Http\Livewire\OnlineStore;

use Illuminate\Support\Str;
use Livewire\{
    Component,
    WithFileUploads
};

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $url;
    public $logo;
    public $order;

    protected $rules = [
        'name' => 'required',
        'url' => 'required:url',
        'logo' => 'image|dimensions:width=244,height=132'
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'url' => 'url',
        'logo' => 'logo'
    ];

    public function orderFinalListCount()
    {
        return \App\Models\OnlineStore::count();
    }

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('online-store', $fileNameSlug, 'public') : null;
    }

    public function store()
    {
        $this->validate();

        $image = $this->imageUploaded($this->logo);
        $order = $this->orderFinalListCount() + 1;

        \App\Models\OnlineStore::create([
            'name' => $this->name,
            'url' => $this->url,
            'logo' => $image,
            'order' => $order
        ]);

        session()->flash('success', 'Loja online cadastrada com sucesso!');
        return redirect()->route('online-store.index');
    }

    public function render()
    {
        return view('livewire.online-store.create');
    }
}
