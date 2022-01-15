{{-- 
    <nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ asset('assets/img/hun.png') }}" alt="" width="20%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item">
                        <a class="nav-link text-dark active" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/preface">Preface</a></li>
                          <li><a class="dropdown-item" href="#">Introduction</a></li>
                          <li><a class="dropdown-item" href="#">Organizational Chart</a></li>
                          <li><a class="dropdown-item" href="#">Vision & Mision</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/media">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning text-dark fw-bold" href="/register">Register</a>
                    </li>
                    {{-- </li><li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li> --}}
                    <!-- Default dropstart button -->
                    {{-- <div class="btn-group dropstart">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu"> --}}
                        <!-- Dropdown menu links -->
                            {{-- <li>
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-warning" type="submit">Search</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('assets/img/hun.png') }}" alt="" width="20%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> 
