<?php

namespace App\Http\Livewire\OnlineStore;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\{
    Component,
    WithFileUploads
};

class Edit extends Component
{

    use WithFileUploads;

    public $onlinestore;
    public $name;
    public $url;
    public $logo;
    public $order;

    protected $rules = [
        'onlinestore.name' => 'required',
        'onlinestore.url' => 'required:url',
        'logo' => 'nullable|image|dimensions:width=244,height=132'
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'url' => 'url',
        'logo' => 'logo'
    ];

    public function mount(\App\Models\OnlineStore $onlinestore)
    {
        $this->onlinestore = $onlinestore;
    }

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().rand(0,9).'.'.$ext;

        return $file->storeAs('online-store', $fileNameSlug, 'public');
    }

    public function update()
    {
        $this->validate();
        try{
            $this->onlinestore->logo = $this->onlinestore->logo;
            if ($this->logo) {
                Storage::disk('public')->delete($this->onlinestore->logo);
                $this->onlinestore->logo = $this->imageUploaded($this->logo);
            }
            $this->onlinestore->save();
            session()->flash('success', 'Loja online atualizada com sucesso!');
            return redirect()->route('online-store.index');
        }
        catch(\Exception $e)
        {
            session()->flash('error', 'Erro ao editar a loja!');
        }
    }

    public function render()
    {
        return view('livewire.online-store.edit');
    }
}
