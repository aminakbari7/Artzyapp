<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\comment;
use GuzzleHttp\Promise\Create;

class Commentlivewire extends Component
{
    public $post;
    public $comments;
    public $newbody=0;

    public function addcomment()
    {
     comment::Create([
        'body'=>$this->newbody,
        'user_id'=>auth('')->user()->id,
        'post_id'=>$this->post->id,
        ]);
        $this->newbody='';
     $this->mount($this->post);
    }
    public function mount( $post)
    {
      $this->post = $post;
      $this->comments = Comment::where('post_id',$post->id)->get();
    }
    public function render()
    {
        return view('livewire.commentlivewire');
    }
}
