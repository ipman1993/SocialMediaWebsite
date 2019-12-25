<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('dashboard')}}" class="navbar-brand">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user() != null)
                    <li>
                        <a href="{{route('my_wall')}}">
                            <img style="width: 40px; height: 40px; border-radius: 60px; float: left; margin-right: 10px; margin-top: -8px;" src="{{route('account.image', ['filename' => Auth::user()->first_name . '-' . Auth::user()->id . '.jpg'])}}" alt="Profile Image">My Wall
                        </a>
                    </li>
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    @endif
                    <li><a href="{{route('account')}}">Account</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>