<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link active" href="#">Explore</a>
                        <a class="nav-link active" href="#">Pages</a>
                        <a class="nav-link active" href="#">Contact us</a>
                        <a class="btn btn-bg-light text-white" href="#">
                            <i class="fa-solid fa-wallet me-1"></i>
                            Connect Wallet
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="mt-5 p-5 text-white d-flex align-center justify-content-center bg-card">
        <p class="my-5">
            &copy; {{ \Carbon\Carbon::now()->year }} Toate drepturile rezervate
        </p>
    </footer>
</body>
</html>
