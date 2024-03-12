<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\comment;
class Comments extends Component
{
    public $comments;
    public function mount()
    {
        $this->comments = comment::all();
    }
    public function render()
    {
        return view('livewire.admin.comments');
    }
}
