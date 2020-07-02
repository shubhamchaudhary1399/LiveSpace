
<nav class="my-navbar navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="material-icons md-36" style="color: #e74e4b;">home</i>
            <span class="mt-aside">{{ config('app.name', 'LiveSpace') }}</span>
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="outline: none;">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

        <form style="width:70%;" class="form-inline my-2 my-lg-0 form-row" id="nav_search_id" action="/search" method="post" role="search">
            @csrf
            <ul class="navbar-nav w-100">
                <li class="text-center w-100">
                    <div class="w-100" id="nav-search-box">
                        <input id="nav-search-input" type="search" name="q" placeholder="Search PG name" aria-label="Search">
                        <button id="nav-search-btn" type="submit">
                            <span class="material-icons" id="scope-search">search</span>
                        </button>
                    </div>
                </li>
            </ul>
        </form>
                    <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

            <li class="nav-item">
                    
            </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="material-icons">exit_to_app</i>
                        <span class="mt-aside">{{ __('Login') }}</span>
                    </a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="material-icons">exit_to_app</i>
                            <span class="mt-aside">{{ __('Register') }}</span>
                    </a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <div class="btn-group dropleft">
                        <img id="navbarDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre src="/uploads/{{ Auth::user()->userImg }}" class="img-fluid rounded-circle" style="max-height: 40px;">

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  style="min-width:250px;" href='/user/profile' class="dropdown-item custom-head">

                            <img style='max-height:45px;margin-right:10px;' class='img-fluid rounded-circle' src='/uploads/{{ Auth::user()->userImg }}'>
                            <div style="padding-right: 10px;">
                            <span>Hello, {{ Auth::user()->name }}</span>
                            <br>
                            <span style='font-size:14px;font-weight:400;padding-right: 35px;'>
                            {{ Auth::user()->email }}</span>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/home" class="dropdown-item"> <i class="material-icons md-18">home</i> <span>Home</span> </a>
                        <a href="/" class="dropdown-item"> <i class="material-icons md-18">book</i> <span>Book Rooms</span> </a>
                        <a href="#" class="dropdown-item"> <i class="material-icons md-18">home</i> <span>Pending Bookings</span> </a>
                        <a href="/admin/dashboard" class="dropdown-item"> <i class="material-icons md-18">dashboard</i> <span>Room Panel</span> </a>




                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">exit_to_app</i>
                            <span class="mt-aside">{{ __('Logout') }}</span>  
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
            @endguest
            </ul>
        </div>
    </div>
</nav>