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
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center mb-5">
                <h1 class="display-4">Responsibilities</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="responsibilities-text">
                        <h4>Commitment to Excellence</h4>
                        <p class="text-secondary">At Executive Study Abroad, we hold ourselves to the highest standards of excellence. Our primary responsibility is to ensure that every student receives the best possible guidance and support throughout their educational journey. We are committed to providing accurate, up-to-date information and personalized advice tailored to each student's unique goals and aspirations.</p>

                        <h4>Ethical Practices</h4>
                        <p class="text-secondary">Integrity and transparency are at the core of our operations. We are dedicated to maintaining ethical practices in all our interactions with students, educational institutions, and partners. We ensure that all our advice and recommendations are unbiased, honest, and in the best interest of the students we serve.</p>

                        <h4>Student Support</h4>
                        <p class="text-secondary">We take our role as mentors and advisors seriously. Our responsibility is to support students from the moment they contact us until they achieve their educational and career goals. This includes providing comprehensive counseling, helping with application processes, and offering continuous support during their studies abroad.</p>

                        <h4>Cultural Sensitivity</h4>
                        <p class="text-secondary">Understanding and respecting cultural diversity is a fundamental responsibility at Executive Study Abroad. We strive to create an inclusive environment where students from all backgrounds feel welcomed and valued. We provide cultural orientation sessions to help students adapt to new environments and foster cross-cultural understanding.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="responsibilities-text">
                        <h4>Collaboration with Educational Institutions</h4>
                        <p class="text-secondary">We maintain strong partnerships with a wide range of educational institutions worldwide. Our responsibility is to facilitate smooth communication and collaboration between students and these institutions, ensuring that students have access to the best educational opportunities available.</p>

                        <h4>Continuous Improvement</h4>
                        <p class="text-secondary">In our quest to provide the best services, we constantly seek to improve our processes and offerings. We are committed to professional development, staying informed about the latest trends in international education, and adopting innovative practices to enhance our services.</p>

                        <h4>Environmental Responsibility</h4>
                        <p class="text-secondary">We recognize the importance of sustainability and are committed to reducing our environmental impact. We incorporate eco-friendly practices into our operations and encourage students and partners to consider the environmental implications of their actions.</p>

                        <h4>Community Engagement</h4>
                        <p class="text-secondary">We believe in giving back to the community. Executive Study Abroad is actively involved in various community initiatives and encourages students to engage in volunteer work and social projects that make a positive impact.</p>

                        <h4>Accountability</h4>
                        <p class="text-secondary">We are accountable to our students, their families, and our partners. We take responsibility for our actions and decisions, and we are always open to feedback to ensure we are meeting the needs and expectations of those we serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>