<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="/">EronMan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" aria-current="page" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'authors' ? 'active' : '' }}" aria-current="page" href="/authors">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" aria-current="page" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class=" navbar-nav ms-auto">

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>

                            </form>
                        </li>
                    </ul>
                </li>

                @else
                <li class="nav-item">
                    <a href="/login" class="text-decoration-none text-white {{ $active === 'login' ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>

                @endauth

            </ul>
        </div>

    </div>
</nav>
