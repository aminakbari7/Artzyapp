<div>
    <div class="media">
        <img src="{{asset('storage/images/'.$post->image)}}" alt="img" width="55px" height="55px"
            class="rounded-circle mr-3">
        <div class="media-body">
            <h5>{{$postowner->name  }}</h5>
            <p class="text-justify">{{ $post->body }}</p>
            <a href="{{asset('storage/images/'.$post->image)}}" data-lightbox="id"><img
                    src="{{asset('storage/images/'.$post->image)}}" alt=""
                    class="img-fluid shadow-sm img-thumbnail"> </a>
        </div>
        <small class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s')}}</small>
    </div>
    @if($comments->count()>0)
    <hr>
    @foreach ($comments as $comment )
    @foreach ($users as $user )
    @if($user->id==$comment->user_id)
    <hr>
         <div class="media mb-3" style="margin-left: -10px">
            <img src="{{ asset('assets/img/avatar-dhg.png')}}" alt="img" width="45px" height="45px" class="rounded-circle mr-2">

            <div class="media-body">
              <small algin="right"  class="text-muted">{{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y H:i:s')}}</small>

                <p class="card-text text-justify">{{ $user->name }}:</p>
                <p class="card-text text-justify">{{ $comment->body }}</p>
                @if(auth()->user()->id==$comment->user_id)
                <a wire:click="deletecomment({{ $comment->id }})" class="active">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                  </svg>
                </a>
                  @endif
         </div>
        </div>
        @break
        @endif
        @endforeach
        @endforeach
    @endif
    <hr>
    <form class="form-inline" wire:submit="addcomment()">
        <div class="input-group w-100">
            <textarea wire:model="newbody" type="text" name="message" id="message" placeholder="Message"class="form-control form-control-md">
            </textarea>
            <br>
        </div>
          <button class="btn btn-success" type="submit" style="margin-left: 150px;margin-top:10px ;width:40%">send</button>
    </form>
</div>
