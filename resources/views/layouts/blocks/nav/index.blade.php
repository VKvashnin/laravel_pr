<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('nav.toggle_nav')">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Жанр</a>
                    <div class="dropdown-menu">
                        @foreach($genres as $genre)
                            <a class="dropdown-item {{ Route::currentRouteNamed('sort.genre'.$genre->id) ? 'active' : '' }}" href="{{ route('sort.genre', $genre->id) }}">
                                {{ $genre->name }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Страна</a>
                    <div class="dropdown-menu">
                        @foreach($countries as $country)
                            <a class="dropdown-item {{ Route::currentRouteNamed('sort.country'.$country->id) ? 'active' : '' }}" href="{{ route('sort.country', $country->id) }}">
                                {{ $country->name }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Год</a>
                    <div class="dropdown-menu">
                        @foreach($years as $year)
                            <a class="dropdown-item {{ Route::currentRouteNamed('sort.year'.$year->id) ? 'active' : '' }}" href="{{ route('sort.year', $year->id) }}">
                                {{ $year->year }}
                            </a>
                        @endforeach
                    </div>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
                        @lang('nav.profile')
                    </a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        @lang('nav.about')
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












