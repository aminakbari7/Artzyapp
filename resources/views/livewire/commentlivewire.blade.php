<div>
    <div class="media">
        <img src="{{asset('storage/images/'.$post->image)}}" alt="img" width="55px" height="55px"
            class="rounded-circle mr-3">
        <div class="media-body">
            <h5>Mark Otto</h5>
            <p class="text-justify">{{ $post->body }}</p>
            <a href="{{asset('storage/images/'.$post->image)}}" data-lightbox="id"><img
                    src="{{asset('storage/images/'.$post->image)}}" alt=""
                    class="img-fluid shadow-sm img-thumbnail"> </a>
        </div>
        <small class="text-muted">10 min</small>
    </div>
    @if($comments->count()>0)
    @foreach ($comments as $comment )
    <hr>
    <div class="media mb-3" style="margin-left: -10px">
        <img src="{{ asset('assets/img/avatar-dhg.png')}}" alt="img" width="45px" height="45px" class="rounded-circle mr-2">
        <div class="media-body">
                <p class="card-text text-justify">Jacon Thornton: {{ $comment->body }}</p>

        </div>
    </div>
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
