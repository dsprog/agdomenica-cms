<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class View extends Component
{
    public $post;
    public $slug;

    public function mount(\App\Models\Post $post)
    {
        $this->post = $post->where('slug', $this->slug)->first();
    }

    public function render()
    {
        return view('livewire.post.view')
            ->extends('layouts.site');
    }
}
