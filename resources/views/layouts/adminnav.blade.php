<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">
    <a href="index.html" class="navbar-brand"><img src="{{ asset('assets/img/brand-white.png') }}" alt="logo"
            class="img-fluid" width="80px" height="100px"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span
            class="navbar-toggler-icon"></span></button>

    @auth
    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">
            <li class="nav-item"><a href="{{ route('showusers') }}" class="nav-link">users</a></li>
            <li class="nav-item"><a href="{{ route('showposts') }}" class="nav-link">posts</a></li>
            <li class="nav-item"><a href="{{ route('showcomments') }}" class="nav-link">comments</a></li>

            <li class="nav-item"><a href="{{route('profile.edit')}}" class="nav-link">profile</a></li>
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
