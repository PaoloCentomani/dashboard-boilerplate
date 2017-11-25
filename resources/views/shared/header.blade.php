<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        {{-- Branding Image --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name') }}
        </a>

        {{-- Collapsed Hamburger --}}
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="{{ trans('app.toggle_navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            {{-- Left Side Of Navbar --}}
            <ul class="navbar-nav">
                &nbsp;
            </ul>

            {{-- Right Side Of Navbar --}}
            <ul class="navbar-nav ml-auto">
                {{-- Authentication Links --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="app-navbar-user" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            <img class="float-left mr-2 rounded-circle gravatar" src="{{ Auth::user()->gravatar }}" width="28" height="28">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="app-navbar-user">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>