<?php

namespace App\Http\Livewire\Info;

use App\Models\Info;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
    public $info, $image;

    protected function rules()
    {
        return [
            'info.title' => 'required|max:100|unique:infos,title,'.$this->info->id,
            'image' => 'nullable|image'
        ];
    }

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

    public function mount(Info $info)
    {
        $this->info = $info;
    }

    public function update()
    {
        $this->validate();
        $this->info->image = $this->info->image;

        if($this->image) {
            Storage::disk('public')->delete($this->info->image);
            $this->info->image = $this->imageUploaded($this->image);
        }
        $this->info->save();

        session()->flash('success', 'Modo de preparo atualizado com sucesso!');
            return redirect()->route('info.index');
    }

    public function render()
    {
        return view('livewire.info.edit');
    }
}
