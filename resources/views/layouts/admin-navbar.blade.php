@if (Auth::guest())
@else
<nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #ffffff;">
    <div class="container">
        <a class="navbar-brand">
            <img class="img-fluid" src="{{ asset('assets/img/hun.png') }}" alt="" width="60rem">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto fw-bold">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/dashboard"><i class="bi bi-house-door-fill"></i></a>
                </li>

                @if(Auth::user()->role == 'superadmin' || Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="/admin-news">News</a>
                </li>
                @else
                @endif

                @if(Auth::user()->role == 'superadmin' || Auth::user()->role == 'admin' || Auth::user()->role == 'advisor')
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seminar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/seminars">Attendance</a></li>
                        <li><a class="dropdown-item" href="/qrcode">QR Code</a></li>
                    </ul>
                </li>
                @else
                @endif

                @if(Auth::user()->role == 'superadmin' || Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/vendors">Vendor</a>
                </li>
                @else
                @endif

                @if(Auth::user()->role == 'superadmin')
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark active" href="/users">User</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/seminars">Administrator</a></li>
                        <li class="nav-item dropright">
                            <a class="nav-link fw-normal text-dark dropdown-toggle ml-5" href="#" id="subDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Apps User
                            </a>
                            <ul class="dropdown-menu ml-5" aria-labelledby="subDropdown">
                                <li><a class="dropdown-item" href="">Member</a></li>
                                <li><a class="dropdown-item" href="">Non-Member</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @else
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto fw-bold">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

<script>
    document.addEventListener("DOMContentLoaded", function(){
    // make it as accordion for smaller screens
    if (window.innerWidth > 992) {

        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

            everyitem.addEventListener('mouseover', function(e){

                let el_link = this.querySelector('a[data-bs-toggle]');

                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }

            });
            everyitem.addEventListener('mouseleave', function(e){
                let el_link = this.querySelector('a[data-bs-toggle]');

                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }


            })
        });

    }
    // end if innerWidth
    }); 
</script>
@endif
