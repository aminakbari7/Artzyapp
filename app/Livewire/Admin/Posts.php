<?php

namespace App\Livewire\Admin;
use App\Models\post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Posts extends Component
{
    use WithPagination;
    public function render()
    {
        $posts = post::select()->orderByDesc('created_at')->paginate(5);

        return view('livewire.admin.posts',['posts'=> $posts]);
    }
}
