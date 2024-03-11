<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Storage;
class Dashboardlivewire extends Component
{
    use WithFileUploads;

    public $image="" ;
    public $body="";
    public $posts;
    public function addpost()
    {
        if($this->image=="" & $this->body!="")
        {
        post::Create([
            'body'=>$this->body,
            'image'=>'0',
            'user_id'=>auth()->user()->id,
            ]);
            Session()->flash('msg', 'اضافه شد!');
        }
        if($this->image!="" & $this->body!="")
        {
            $namei = md5($this->image . microtime()).'.'.$this->image->extension();
            $this->image->storeAs('images', $namei,'public');
            post::Create([
            'body'=>$this->body,
            'image'=>$namei,
            'user_id'=>auth()->user()->id,
            ]);
            Session()->flash('msg', 'اضافه شد!');
        }

        $this->body="";
        $this->image="";
        $this->render();

    }

    public function render()
    {

        $this->posts=post::select()->where('user_id', auth()->user()->id)->where('active','1')->orderByDesc('created_at')->get();
        return view('livewire.dashboardlivewire');
    }
}
