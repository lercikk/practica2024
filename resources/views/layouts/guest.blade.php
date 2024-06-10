<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>@yield('title', 'Career Counselling')</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<footer style="background-color: #717CFF; color: white; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="height: 60px;">
            </div>
            <div class="col-md-3">
                <h5>Menu</h5>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="{{ route('guest.index') }}" style="color: white; text-decoration: none;">Home</a></li>
                    <li><a href="{{ route('guest.about') }}" style="color: white; text-decoration: none;">About Us</a></li>
                    <li><a href="{{ route('guest.services') }}" style="color: white; text-decoration: none;">Our Services</a></li>
                    <li><a href="{{ route('guest.responsibilities') }}" style="color: white; text-decoration: none;">Responsibilities</a></li>
                    <li><a href="{{ route('guest.country') }}" style="color: white; text-decoration: none;">Country</a></li>
                    <li><a href="{{ route('guest.apply') }}" style="color: white; text-decoration: none;">Apply</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contact</h5>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i> +373 1234 5678 <br>
                    <i class="fa fa-envelope" aria-hidden="true"></i> info@executivestudyabroadcahul.md
                </p>
            </div>
            <div class="col-md-3">
                <h5>Address</h5>
                <p>36, Dunării Cahul 3909 <br> Republica Moldova</p>
                <h5>Follow Us</h5>
                <div class="social-icons">
    <a href="https://www.facebook.com/valeria.sinigur.1?locale=ru_RU" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
    <span class="icon-space"></span>
    <a href="https://twitter.com/?lang=rur" target="_blank"><i class="fa-brands fa-twitter"></i></a>
    <span class="icon-space"></span>
    <a href="https://www.instagram.com/_georgiyevna/?next=%2F" target="_blank"><i class="fa-brands fa-instagram"></i></a>
</div>
                
            </div>
        </div>
        <div class="text-center ">
                &copy; {{ \Carbon\Carbon::now()->year }} Toate drepturile rezervate
        </div>
    </div>
</footer>

</body>
</html>