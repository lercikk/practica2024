<!-- resources/views/guest/about.blade.php -->
@extends('layouts.guest') <!-- Assuming you have a main layout file named app.blade.php -->

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
                            <a class="nav-link header-description active text-black mx-4" href="{{ route('guest.services') }}">Our services</a>
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

<section class=" my-5 py-5 bg-gray">


<div class="container mt-3">
<h2 class="text-gray text-center mb-5 text-bold"data-aos="fade-up" >Services for Students</h2>
    <div class="text-center" >
        <img src="{{ asset('assets/images/banner.jpg') }}" alt="Our services" class="img-fluid w-100" style="height: 400px;  object-fit: cover;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="values">
            <div class="row mb-5">

        <div class="col-md-6">
            <h2 class="mt-5 text-site-gradient " >Student Counselling</h2>
            <p class="text-secondary  mb-5  section-description ">We at Executive help you plan and simplify your study abroad aspirations with personalized consultations. Executive aims to give all students accurate facts and guidelines to help make informative decisions. </p>

            <p class="text-secondary  mb-5  section-description " data-aos="fade-up">We have partnered up with over 200 educational institutions from Australia, Canada, Malaysia, UK, and USA. Our counselors will evaluate your achieved results, financial budget and other factors to help you select a suitable university.</p>
        </div>
        <div class="col-md-6 bg-gray  mb-5">
            <h2 class="mt-5 text-gray" >What We Discuss</h2>

            <h5  class="text-gray mt-3"><i class="fa-solid fa-book-open-reader"></i>   Academic Assessment</h5>      
            <p class="text-secondary">We will assess students’ academic background and career interest.</p>
           
            <h5 class="text-gray mt-3"><i class="fa-solid fa-school-flag"></i>   Chose a Suitable University</h5>      
            <p class="text-secondary" data-aos="fade-up">Based on your preferences and requirements, we will help you select the right university.</p>

            <h5 class="text-gray mt-3"> <i class="fa-solid fa-hand-holding-dollar"></i>   Scholarship Opportunities</h5>      
            <p class="text-secondary" data-aos="fade-up">We will guide you to find and apply for scholarships based on academic achievements.</p>

            <h5 class="text-gray mt-3"><i class="fa-solid fa-sack-dollar"></i>   Financial Planning</h5>      
            <p class="text-secondary" data-aos="fade-up">We will advise the right institution that meet your financial budget. Also, assist you understand and plan the financial investment towards your education.</p>
        </div>

            <div class="col-md-6 mb-4" data-aos="fade-right">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-site-gradient">Educational Consulting</h3>
                                <p class="text-secondary">Our team of educational consultants will guide you through the process of selecting and applying to foreign universities. We will identify the right educational institutions for your interests and goals, and assist you in completing admission applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-left">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title  text-site-gradient">Admission Preparation</h3>
                                <p class="text-secondary">We offer intensive preparation courses for admission exams, including TOEFL, IELTS, SAT, and GRE. Our team of experienced instructors will help you strengthen your linguistic and academic skills to ensure success in the admission process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-right">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-site-gradient">Academic Counseling</h3>
                                <p class="text-secondary">We provide personalized academic counseling to help you plan your academic path and make informed decisions regarding your specialization and university program. We will be with you throughout your academic journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-left">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-site-gradient">Visa and Travel Assistance</h3>
                                <p class="text-secondary">Our team will assist you in the process of obtaining a study visa and provide you with helpful advice and information for preparing for your journey abroad. We ensure that you have all the necessary documents and are prepared for the study experience in a new country.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-right">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-site-gradient">Continuous Support</h3>
                                <p class="text-secondary">It doesn't end here! Once you are accepted to your desired university, we will provide you with continuous support during your studies. From academic counseling and language support to social and professional integration, we are here to support you at every stage of your study abroad journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-right">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-site-gradient">Continuous Support</h3>
                                <p class="text-secondary">It doesn't end here! Once you are accepted to your desired university, we will provide you with continuous support during your studies. From academic counseling and language support to social and professional integration, we are here to support you at every stage of your study abroad journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
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