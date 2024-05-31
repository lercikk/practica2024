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

<section class="news my-5 py-5 bg-gray">
    <h2 class="text-gray text-center mb-5 text-bold">News</h2>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row mb-4">
                    <div class="col-12">
                        <a href="{{ route('guest.index') }}" class="btn btn-outline-dark mb-4">
                            <i class="fa-solid fa-arrow-left"></i> Back to Home
                        </a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                    <img src="{{ asset(env('UPLOADS_IMAGE') . '/' . $news->images()->first()->name) }}" >
                        <p class="text-secondary mb-2"><i class="fa-regular fa-calendar"></i> {{ $news->created_at->format('F j, Y') }}</p>
                        <h5 class="card-title mb-3">{{ $news->title }}</h5>
                        <p class="card-text mb-4">{{ $news->description }}</p>
                        <p class="text-secondary">by: {{ $news->user->name }}</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


