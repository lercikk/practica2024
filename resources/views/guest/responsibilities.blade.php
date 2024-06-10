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
                            <a class="nav-link header-description active text-black mx-4" href="{{ route('guest.responsibilities') }}">Responsibilities</a>
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

<div class="container mt-5">
    <div class="text-center mb-5">
        <img src="{{ asset('assets/images/img.jpg') }}" alt="Our services" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
           
            <div class="row">
                <div class="col-md-6">
                    <div class="responsibilities-text">
                        <h4>Responsibilities</h4>
                        <p class="text-secondary">Provide comprehensive information to students and their guardians regarding universities in Australia.</p>

                        <p class="text-secondary">Prepare and submit applications for admission to partner universities, managing all necessary formalities with university admission offices.</p>

                        <p class="text-secondary">Offer thorough assistance throughout the documentation and student visa processing procedures.</p>

                        <p class="text-secondary">Collaborate within a team to ensure exceptional client service delivery.</p>

                        <p class="text-secondary">Maintain regular communication with assigned client groups.</p>

                        <p class="text-secondary">Report to the account manager on a regular basis.</p>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="responsibilities-text">
                        <h4>Requirements</h4>
                        <p class="text-secondary">Education: Minimum Bachelor's degree or higher (candidates with foreign degrees will be given preference).</p>

                        <p class="text-secondary">Excellent oral and written communication skills in English.</p>

                        <p class="text-secondary">Pleasant personality with outstanding communication skills.</p>

                        <p class="text-secondary">Demonstrated traits of politeness, patience, honesty, and loyalty to work.</p>

                    </div>
                </div>
                
            </div>
            <div class="interactive-section mt-5">
                <h4 class="text-center mb-4">Discover More About Our Responsibilities</h4>
                <div class="accordion" id="responsibilitiesAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Comprehensive Information
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#responsibilitiesAccordion">
                            <div class="accordion-body">
                                We ensure that students and their guardians receive detailed and accurate information about various universities, programs, and application processes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Application Preparation
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#responsibilitiesAccordion">
                            <div class="accordion-body">
                                Our team assists in preparing and submitting applications, ensuring all formalities are completed efficiently and correctly.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Visa Processing
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#responsibilitiesAccordion">
                            <div class="accordion-body">
                                We provide comprehensive support throughout the visa application process, ensuring students meet all requirements and deadlines.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <p class="lead">We are dedicated to guiding you through every step of your educational journey, ensuring you have all the support you need to succeed.</p>
            </div>
        </div>
    </div>
</div>
