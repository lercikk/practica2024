@extends('layouts.guest') 

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
                            <a class="nav-link header-description text-black mx-4" href="{{ route('guest.services') }}">Our services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-description text-black mx-4" href="{{ route('guest.responsibilities') }}">Responsibilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-description text-black mx-4" href="{{ route('guest.country') }}">Country</a>
                        </li>
                    </ul>
                    <a class="btn btn-border header-description text-black mx-4 px-4 py-2 me-3" href="{{ route('guest.apply') }}">Apply</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container mt-5">
    <div class="text-center mb-4">
        <img src="{{ asset('assets/images/university.png') }}" alt="Career Counselling" >
    </div>
    <h1 class="text-gray text-center mb-5 text-bold">University Admissions</h1>
    <div class="row mb-4">
           <div class="col-12">
                        <a href="{{ route('guest.index') }}" class="btn btn-outline-dark">
                            <i class="fa-solid fa-arrow-left"></i> Back to Home
                        </a>
                    </div>
    </div>
    <div class="row mb-5" data-aos="fade-up" >
        <div class="col-md-6" >
            <h4 >Discover Your Path</h4>
            <p class="text-secondary">At Executive Study Abroad, our career counselling services are designed to help you uncover your true potential and align your academic pursuits with your career aspirations. Whether you're a high school student exploring your options or a university graduate looking to pivot into a new field, our experienced counsellors are here to guide you every step of the way.</p>
        </div>
        <div class="col-md-6">
            <h4 >Personalized Guidance</h4>
            <p class="text-secondary">At Executive Study Abroad, our career counselling services are designed to help you uncover your true potential and align your academic pursuits with your career aspirations. Whether you're a high school student exploring your options or a university graduate looking to pivot into a new field, our experienced counsellors are here to guide you every step of the way.</p>
        </div>
    </div>
    <div class="row mb-5" data-aos="fade-up" >
        <div class="col-md-6">
            <h4 >Interactive Workshops</h4>
            <p class="text-secondary">At Executive Study Abroad, our career counselling services are designed to help you uncover your true potential and align your academic pursuits with your career aspirations. Whether you're a high school student exploring your options or a university graduate looking to pivot into a new field, our experienced counsellors are here to guide you every step of the way.</p>
        </div>
        <div class="col-md-6">
            <h4 >Virtual Career Fairs</h4>
            <p class="text-secondary">At Executive Study Abroad, our career counselling services are designed to help you uncover your true potential and align your academic pursuits with your career aspirations. Whether you're a high school student exploring your options or a university graduate looking to pivot into a new field, our experienced counsellors are here to guide you every step of the way.</p>
        </div>
    </div>
    <div class="row mb-5" data-aos="fade-up" >
        <div class="col-md-6">
            <h4 >Success Stories</h4>
            <p class="text-secondary">At Executive Study Abroad, our career counselling services are designed to help you uncover your true potential and align your academic pursuits with your career aspirations. Whether you're a high school student exploring your options or a university graduate looking to pivot into a new field, our experienced counsellors are here to guide you every step of the way.</p>
        </div>
        <div class="col-md-6">
            <h4 >Resources and Tools</h4>
            <p class="text-secondary">At Executive Study Abroad, our career counselling services are designed to help you uncover your true potential and align your academic pursuits with your career aspirations. Whether you're a high school student exploring your options or a university graduate looking to pivot into a new field, our experienced counsellors are here to guide you every step of the way.</p>
        </div>
    </div>
</div>
@endsection

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
@endsection
