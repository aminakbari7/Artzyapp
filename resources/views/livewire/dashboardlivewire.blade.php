<div class="card-header bg-transparent">
    <form class="form-inline" wire:submit="addpost">
        <div class="input-group w-100">
            <textarea wire:model="body" type="text" name="message" id="message" placeholder="Message"class="form-control form-control-md">
            </textarea>
            <br>
        </div>
        <div class="input-group" style="margin-top: 10px">
            <div class="custom-file">
              <input wire:model="image" type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          <button class="btn btn-success" type="submit" style="margin-left: 150px;margin-top:10px">send</button>
    </form>
    @foreach ($posts as $post )
    <hr>
    <div class="card-body">
        <div class="media">
            <img src="{{ asset('assets/img/avatar-dhg.png') }}" alt="img" width="55px" height="55px"
                class="rounded-circle mr-3">

            <div class="media-body">

                <h5>{{auth()->user()->name  }}</h5>
                <p class="card-text text-justify">{{ $post->body }}</p></a>
                <div class="row no-gutters mb-3">
                    <a href="" data-lightbox="id"><img
                        src="{{asset('storage/images/'.$post->image)}}" alt=""
                        class="img-fluid shadow-sm img-thumbnail">
                    </div>
                <a href="{{URL('showpost',$post)}}">
                show post</a>


            </div>
            <small>5min</small>
        </div>
    </div>
    @endforeach


</div>
