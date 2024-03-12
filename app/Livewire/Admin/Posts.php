<?php

namespace App\Livewire\Admin;
use App\Models\post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;
    public function mount()
    {
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('livewire.admin.posts');
    }
}
