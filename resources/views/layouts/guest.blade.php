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
  

    @yield('content')

    <footer class="mt-5 p-5 text-dark d-flex align-center justify-content-center bg-card">
        <p class="my-5">
            &copy; {{ \Carbon\Carbon::now()->year }} Toate drepturile rezervate
        </p>
    </footer>
</body>
</html>