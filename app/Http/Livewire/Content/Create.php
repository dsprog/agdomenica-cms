<?php

namespace App\Http\Livewire\Content;

use Illuminate\Support\Str;
use Livewire\{
    Component,
    WithFileUploads
};

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $body;
    public $type;
    public $cover;

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'description' => 'required|min:10',
        'type' => 'required',
        'cover' => 'nullable|image',
    ];

    public function saveContent()
    {
        $this->validate();

        $image = $this->cover ? $this->cover->store('covers', 'public') : null;

        \App\Models\Content::create([
            'title' => $this->title,
            'body' => $this->body,
            'cover' => $image,
            'description' => $this->description,
            'type' => $this->type,
            'slug' => Str::slug($this->title)
        ]);

        $this->reset('title', 'body', 'description', 'type', 'cover');

        session()->flash('success', 'Conteúdo criado com sucesso!');
        return redirect()->route('content.index');

    }

    public function render()
    {
        return view('livewire.content.create');
    }
}
