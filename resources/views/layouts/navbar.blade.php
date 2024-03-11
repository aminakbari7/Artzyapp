<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">
    <a href="index.html" class="navbar-brand"><img src="{{ asset('assets/img/brand-white.png') }}" alt="logo"
            class="img-fluid" width="80px" height="100px"></a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span
            class="navbar-toggler-icon"></span></button>
            @if (Route::has('login'))
                 @auth
                      @else
                      <div class="collapse navbar-collapse" id="responsive" dir="rtl">
                        <div class="text-left" style="font-size: 18px">
                        <ul class="navbar-nav mr-auto text-capitalize">
                             <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">login</a></li>

                              @if (Route::has('register'))
                             <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">register</a></li>
                            @endif
                        </ul>
                        </div>
                      </div>
                @endauth
            @endif
    @auth
    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">
            <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link">dashboard</a></li>

            <li class="nav-item"><a href="{{route('profile.edit')}}" class="nav-link">profile</a></li>
            <li class="nav-item"><a href="#modalview" class="nav-link" data-toggle="modal">messages</a></li>
           <li class="nav-item"> <form action="" class="nav-link" style="margin-left: 20px">
                <input type="text" name="search" id="search" placeholder="Search"
                    class="form-control form-control-sm">
            </form></li>
        </ul>
            <button class="btn btn-danger active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <span class="" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                </span>
                </form>
            </button>

    </div>
    @endauth

</nav>
