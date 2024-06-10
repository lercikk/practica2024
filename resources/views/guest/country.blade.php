@extends('layouts.guest') 

@section('title', 'About Us')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('guest.index') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav" id="myNavbar">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link header-description text-black mx-4" aria-current="page" href="{{ route('guest.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-description  text-black mx-4" href="{{ route('guest.about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-description  text-black mx-4" href="{{ route('guest.services') }}">Our services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-description text-black mx-4" href="{{ route('guest.responsibilities') }}">Responsibilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-description active text-black mx-4" href="{{ route('guest.country') }}">Country</a>
                        </li>
                    </ul>
                    <a class="btn btn-border header-description text-black mx-4 px-4 py-2 me-3" href="{{ route('guest.apply') }}">Apply</a>
                </div>
            </div>
        </div>
    </nav>
</div>

@section('scripts')
<script>
    function activateLink(element) {
        var links = document.querySelectorAll('.nav-link');
        links.forEach(function(link) {
            link.classList.remove('active');
        });
        element.classList.add('active');
    }
</script>

<script>
    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        var navbarCollapse = document.querySelector('.navbar-collapse');
        navbarCollapse.classList.toggle('show');
    });
</script>
<section class="news my-5 py-5 bg-gray">
    <h2 class="text-gray text-center mb-5 text-bold">Country</h2>
    <p class="text-secondary text-center mb-5 section-description" data-aos="fade-up">
        Executive Trade International is a University Application Centre, guiding Moldovan
        students to Australian, British, Canadian, and Irish universities!
    </p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/austria.png') }}" alt="Study in Austria" class="img-fluid">
                        <h5 class="text-gray mt-3">Study in Austria</h5>
                        <p class="text-secondary">Explore top universities and exceptional educational opportunities in Austria.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/canada.png') }}" alt="Study in Canada" class="img-fluid">
                        <h5 class="text-gray mt-3">Study in Canada</h5>
                        <p class="text-secondary">Discover a world-class education system and vibrant cultural life in Canada.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/uk.png') }}" alt="Study in UK" class="img-fluid">
                        <h5 class="text-gray mt-3">Study in UK</h5>
                        <p class="text-secondary">Benefit from prestigious universities and rich historical heritage in the UK.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/malaysia.png') }}" alt="Study in Malaysia" class="img-fluid">
                        <h5 class="text-gray mt-3">Study in Malaysia</h5>
                        <p class="text-secondary">Experience high-quality education and multicultural diversity in Malaysia.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/usa.png') }}" alt="Study in USA" class="img-fluid">
                        <h5 class="text-gray mt-3">Study in USA</h5>
                        <p class="text-secondary">Enjoy cutting-edge research facilities and a dynamic academic environment in the USA.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/ireland.png') }}" alt="Study in Ireland" class="img-fluid">
                        <h5 class="text-gray mt-3">Study in Ireland</h5>
                        <p class="text-secondary">Immerse yourself in Ireland's rich cultural traditions and outstanding education.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
