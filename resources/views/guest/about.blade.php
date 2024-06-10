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
                            <a class="nav-link header-description active text-black mx-4" href="{{ route('guest.about') }}">About us</a>
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
<h2 class="text-gray text-center mb-5 text-bold"data-aos="fade-up" >Study Abroad! Plan with a team who knows the way and cares for you.</h2>
    <div class="text-center mb-5">
        <img src="{{ asset('assets/images/study.jpg') }}" alt="Our services" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-4" >
                <h1 class="display-4 text-site-gradient">Welcome to Executive Study Abroad</h1>
                <p class="lead">A trusted destination for those who aspire to study abroad and develop their educational and professional prospects. Founded with a vision to open doors to global opportunities for young people from Moldova, Executive Study Abroad offers high-quality educational programs and personalized support for students.</p>
            </div>
            <div class="row bg-gray">

            <div class="col-md-6 ">
            <h2 class="text-gray">22 Years of Proven Excellence</h2>
            <p class="lead mb-5">Since 2001, Executive Trade International has been inspiring students to excel in their higher education aspirations by helping them choose the right university abroad. </p>
            <p class="lead mb-5 " data-aos="fade-up">Being an award-winning education consultant, we are the official representative in Bangladesh for a wide range of well-reputed universities in Australia, Canada, Malaysia, UK and USA.</p>
        </div>
        <div class="col-md-6 text-center mb-5">
        <img src="{{ asset('assets/images/about.jpg') }}" alt="Study Abroad" style="height: 400px; width: auto;">
        </div>
            </div>
            <div class="values ">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <h3 class="text-gray">Excellence</h3>
                        <p class="text-secondary">We are committed to providing high-quality services and exceeding our clients' expectations in every aspect of our operations.</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <h3 class="text-gray">Integrity</h3>
                        <p class="text-secondary">We always adhere to the highest ethical standards and act with honesty and transparency in all our interactions.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <h3 class="text-gray">Innovation</h3>
                        <p class="text-secondary">We are innovation-driven and constantly seek new ways to improve and adapt to the changing needs and requirements of the market.</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <h3 class="text-gray">Commitment</h3>
                        <p class="text-secondary">We are dedicated to supporting the success and well-being of our students, providing them with the support and resources they need to achieve their academic and professional goals.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <p class="lead">At Executive Study Abroad, we are passionate about transforming lives and are committed to contributing to the development of a generation of global leaders and innovators from Moldova.</p>
            </div>
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


