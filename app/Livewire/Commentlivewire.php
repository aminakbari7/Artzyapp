<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\comment;
use GuzzleHttp\Promise\Create;
class Commentlivewire extends Component
{
    public $post;
    public $postowner;
    public $users;
    public $comments;
    public $newbody="";
    public function deletepost()
    {
        $this->post->active='0';
        $this->post->save();
    }
    public function deletecomment($id)
    {
    $com=comment::find($id);
    $com->active=0;
    $com->save();
    $this->comments = Comment::where('post_id',$this->post->id)->where('active','1')->orderByDesc('created_at')->get();
    $this->mount($this->post);
    }
    public function addcomment()
    {
     $com=comment::Create([
        'body'=>$this->newbody,
        'post_id'=>$this->post->id,
        'user_id'=>auth()->user()->id,
        'active'=>1,
        ]);
        $this->newbody='';
     $this->mount($this->post);
    }
    public function mount( $post)
    {
      $this->post = $post;
      $this->postowner=user::find($this->post->user_id);
      $this->comments = Comment::where('post_id',$post->id)->where('active','1')->orderByDesc('created_at')->get();
      $this->users=user::find($this->comments->pluck('user_id')->toArray());

    }
    public function render()
    {
        return view('livewire.commentlivewire');
    }
}
