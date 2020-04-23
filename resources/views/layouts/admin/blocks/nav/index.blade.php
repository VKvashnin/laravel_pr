<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
    <!--
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- config('app.name', 'HomePage') --}}
        </a>
        -->
        <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto h4">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        @lang('nav.main')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('admin.users.index') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                        @lang('nav.users')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('admin.countries.index') ? 'active' : '' }}" href="{{ route('admin.countries.index') }}">
                        @lang('nav.countries')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('admin.genres.index') ? 'active' : '' }}" href="{{ route('admin.genres.index') }}">
                        @lang('nav.genres')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('admin.years.index') ? 'active' : '' }}" href="{{ route('admin.years.index') }}">
                        @lang('nav.years')
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('login') ? 'active' : '' }}" href="{{ route('login') }}">@lang('nav.login')</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('register') ? 'active' : '' }}" href="{{ route('register') }}">@lang('nav.register')</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->login }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                @lang('nav.logout')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
