<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $posts = \App\Models\Post::where('publish_at', '<=', date('Y-m-d'))
            ->where('status', 1)
            ->orderBy('publish_at', 'DESC')
            ->paginate(6);

        return view('livewire.post.blog', compact('posts'));
    }
}
