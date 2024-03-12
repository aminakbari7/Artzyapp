<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Storage;
class Avatarchange extends Component
{
    use WithFileUploads;
    public $user;
    public $keyupdate=-1;
    public $newimage='';
    public function update()
    {
        $this->keyupdate=1;
    }
    public function save()

    {   $namei = md5($this->newimage . microtime()).'.'.$this->newimage->extension();
        $this->newimage->storeAs('images', $namei,'public');
        $this->user->avatar = $namei;
        $this->user->save();
        $this->keyupdate=-1;
        $this->mount();
    }
    public function mount()
    {
        $this->user=User::find(auth()->user()->id);
    }
    public function render()
    {
        return view('livewire.avatarchange');
    }
}
