<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $posts = \App\Models\Post::orderBy('publish_at', 'Desc')->paginate(10);
        return view('livewire.post.index', compact('posts'));
    }
}
