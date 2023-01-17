<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $post;

    public function mount(\App\Models\Post $post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        if (!$this->post->delete()) session()->flash('error', 'Não foi possível remover esta matéria');
        Storage::disk('public')->delete($this->post->image);
        session()->flash('success', 'Matéria excluída com sucesso!');
        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.delete');
    }
}
