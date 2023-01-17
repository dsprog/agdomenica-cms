<?php

namespace App\Http\Livewire\Post;

use Illuminate\Support\Str;
use Livewire\{Component, WithFileUploads};

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $resume;
    public $content;
    public $image;
    public $publish_at;
    public $status = 1;

    protected $rules = [
        'title' => 'required|unique:posts|max:255',
        'resume' => 'required',
        'content' => 'required',
        'image' => 'image|dimensions:width=480,height=570',
        'publish_at' => 'required|date'
    ];

    protected $validationAttributes = [
        'title' => 'título',
        'resume' => 'resumo',
        'content' => 'conteúdo',
        'image' => 'imagem',
        'publish_at' => 'data de publicação'
    ];

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('post', $fileNameSlug, 'public') : null;
    }

    public function store()
    {
        $this->validate();

        $image = $this->imageUploaded($this->image);

        \App\Models\Post::create([
            'title' => $this->title,
            'resume' => $this->resume,
            'slug' => Str::slug($this->title, '-'),
            'image' => $image,
            'content' => $this->content,
            'publish_at' => $this->publish_at,
            'status' => $this->status
        ]);

        session()->flash('success', 'Matéria cadastrada com sucesso!');
        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
