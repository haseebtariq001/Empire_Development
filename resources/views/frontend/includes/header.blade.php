<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark px-0 py-4">

        <div class="container-xl">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('start') }}">
                <img src="{{ asset('assets/front_assets/img/logo-white-v2.png') }}" alt="" class="img-fluid w-75">
            </a>
            <!-- Navbar toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Nav -->
                <div class="navbar-nav ms-lg-auto">
                    <a class="nav-item nav-link {{ (url()->current() == route('start')) ? 'active': '' }}" href="{{ route('start') }}">Home</a>
                    <a class="nav-item nav-link {{ (url()->current() == route('about_us')) ? 'active': '' }}" href="{{ route('about_us') }}">About us</a>
                    <a class="nav-item nav-link {{ (url()->current() == route('frontend_projects')) ? 'active': '' }}" href="{{ route('frontend_projects') }}">Projects</a>
                    <a class="nav-item nav-link {{ (url()->current() == route('contact')) ? 'active': '' }}" href="{{ route('contact') }}">Contact us</a>
                </div>
                <div class="navbar-nav me-lg-auto">
                    <a class="nav-item nav-link" href="#"><i class="bi bi-search"></i></a>
                </div>
                <!-- Right navigation -->
                <div class="navbar-nav ms-lg-2">
                    <a class="btn-gradient-gold" href="{{ route('login') }}">Login</a>
                </div>
                <!-- Action -->
                <div class="navbar-nav ms-lg-2">
                    <a href="{{ route('register') }}" class="btn-gradient-gold">
                        Register Broker
                    </a>
                </div>
            </div>

        </div>

    </nav>
</header>
