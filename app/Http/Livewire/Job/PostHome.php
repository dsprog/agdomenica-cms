<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class PostHome extends Component
{
    public function render()
    {
        $posts = \App\Models\Post::where('publish_at', '<=', date('Y-m-d'))
            ->where('status', 1)
            ->orderBy('publish_at', 'DESC')
            ->limit(3)
            ->get();

        return view('livewire.post.post-home', compact('posts'));
    }
}
