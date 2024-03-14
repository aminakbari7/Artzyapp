<?php

namespace App\Livewire\Admin;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class Users extends Component
{
    use WithPagination;


    public function render()
    {
        $users = User::select()->orderByDesc('created_at')->paginate(5);

        return view('livewire.admin.users',['users'=> $users]);
    }
}
