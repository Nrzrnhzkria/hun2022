<nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #ffffff;">
    <div class="container">
        <a class="navbar-brand">
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
                    <a class="btn btn-warning text-dark fw-bold" href="/registration">Register</a>
                </li>
                {{-- </li><li class="nav-item">
                    <a class="nav-link text-dark" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </li> --}}
                <!-- Default dropstart button -->
                <div class="btn-group dropstart">
                    <a class="nav-link text-dark" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                        <li>
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
</nav>

