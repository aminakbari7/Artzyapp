<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\comment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Comments extends Component
{
    use WithPagination;

    public function render()
    {
        $comments = comment::select()->orderByDesc('created_at')->paginate(10);
        return view('livewire.admin.comments',['comments'=> $comments]);
    }
}
