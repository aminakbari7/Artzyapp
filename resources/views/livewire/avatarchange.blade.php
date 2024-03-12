<div class="card card-left1 mb-4">
    <img src="{{ asset('assets/img/photo-1455448972184-de647495d428.jpg') }}" alt=""
        class="card-img-top img-fluid">
    <div class="card-body text-center ">
        <img src="{{asset('storage/images/'.$user->avatar)}}" alt="img" width="120px" height="120px"
            class="rounded-circle mt-n5">
        <h5 class="card-title">{{ $user->name }}</h5>
        @if($keyupdate==-1)
        <p class="card-text text-justify mb-2">I wish i was a little bit taller, wish i was a
            baller, wish i had a girl… also.</p>
        <ul class="list-unstyled nav justify-content-center">
                <li class="nav-item" >
                    <p class="card-text" style="margin-left: -20px"> <i class="fas fa-home mr-2"></i> Live in <a href="#"
                        class="text-decoration-none">{{$user->address  }}</a></p>
                </li>
                <li class="nav-item">
                <p class="card-text"> <i class="fas fa-calendar-week mr-2"></i> born <a href="#"
                    class="text-decoration-none">{{$user->birthday  }}</a></p>
                </li>
                <button wire:click="update()" class="btn btn-warning">
                   change avatar
                </button>
        </ul>
        @endif
        @if($keyupdate==1)
        <div class="input-group" style="margin-top: 10px">
            <div class="custom-file">
              <input wire:model="newimage" type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          <button wire:click="save" class="btn btn-success">
                save
          </button>
        @endif
    </div>
</div>
