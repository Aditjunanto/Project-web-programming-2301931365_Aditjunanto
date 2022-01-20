<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E5E4E2;">
    <div class="container">
        <!-- Logo and name -->
        <a class="navbar-brand" href="#">
        <img src="/assets/happy.png" alt="" width="40" height="40" class="d-inline-block">
        <strong>MY</strong>EOU
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Search -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <form class="d-flex ms-auto my-2 my-lg-0" action="/news">
            <input class="form-control me-2" type="text" placeholder="Search.." aria-label="Search" name="search" value="{{ request('search')  }}">
            <button class="btn" type="submit"><img src="/assets/loupe.png" alt="" width="20" height="20" class="d-inline-block"></button>
        </form>
        <!-- Menu -->
        <ul class="navbar-nav ms-auto">
            <!-- Home -->
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <!-- Store -->
            <li class="nav-item">
            <a class="nav-link" href="/store">Store</a>
            </li>
            <!-- EO -->
            <li class="nav-item">
            <a class="nav-link" href="/eo">EO</a>
            </li>
            <!-- News -->
            <li class="nav-item">
            <a class="nav-link" href="/categories">News</a>
            </li>
            <!-- About -->
            <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
            </li>
            <!-- Checklist -->
            <li class="nav-item">
            <a class="nav-link" href="/checklist">Checklist</a>
            </li>
            <!-- Category -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/categories">News Category</a></li>
                <li><a class="dropdown-item" href="#">Type 2</a></li>
                <li><a class="dropdown-item" href="#">Type 3</a></li>
            </ul>
            </li>
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <a class="dropdown-item">Logout</a></li>
                                </button>
                            </form>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
                </li> 
            @endauth
            
        </ul>
        </div>
    </div>
    </nav>