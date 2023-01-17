<?php

namespace App\Http\Livewire\Post;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\{Component, WithFileUploads};

class Edit extends Component
{
    use WithFileUploads;

    public $post;
    public $title;
    public $resume;
    public $content;
    public $image;
    public $publish_at;
    public $status;

    protected $rules = [];

    public function rules()
    {
        return [
            'post.title' => 'required|max:255|unique:posts,title,' . $this->post->id,
            'post.resume' => 'required',
            'post.content' => 'required',
            'image' => 'nullable|image|dimensions:width=480,height=570',
            'post.publish_at' => 'required|date',
            'post.status' => 'required'
        ];
    }

    protected $validationAttributes = [
        'title' => 'título',
        'resume' => 'resumo',
        'content' => 'conteúdo',
        'image' => 'imagem',
        'publish_at' => 'data de publicação',
        'status' => 'ativo'
    ];

    public function imageUploaded($file)
    {
        $ext = $file->getClientOriginalExtension();
        $fileName = substr($file->getClientOriginalName(), 0, -4);
        $fileNameSlug = Str::slug($fileName, '-').'-'.time().'.'.$ext;

        return $file ? $file->storeAs('post', $fileNameSlug, 'public') : null;
    }

    public function mount(\App\Models\Post $post)
    {
        $this->rules = $this->rules();
        $this->post = $post;
    }

    public function update()
    {
        $this->validate();
        $this->post->image = $this->post->image;
        if($this->image) {
            Storage::disk('public')->delete($this->post->image);
            $this->post->image = $this->imageUploaded($this->image);
        }
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        session()->flash('success', 'Máteria atualizada com sucesso!');
        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.edit');
    }
}
