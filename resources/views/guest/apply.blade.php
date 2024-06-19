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
                            <a class="nav-link header-description text-black mx-4" href="{{ route('guest.country') }}">Country</a>
                        </li>
                    </ul>
                    <a class="btn btn-border header-description active text-black mx-4 px-4 py-2 me-3" href="{{ route('guest.apply') }}">Apply</a>
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
<section class="my-5 py-5 bg-gray">
    <div class="container mt-3">
        <h2 class="text-gray text-center mb-5 text-bold" data-aos="fade-up">Get started with a free consultation today!</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-card border-0 shadow">
                    <div class="card-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6671.1052633687505!2d28.19126598084531!3d45.89088306879642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65c87aa8b8c59%3A0xed199321915a2ea8!2sIulia%20Ha%C8%99deu%20College!5e0!3m2!1sru!2s!4v1718796623503!5m2!1sru!2s"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
    <div class="row">
        <div class="col-md-6">
            <h2 class="mt-5 text-site-gradient " >Contact Us</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label" >Name</label>
                    <input type="text" class="form-control"  id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label" >Message</label>
                    <textarea class="form-control" id="message"  name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom" >Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="mt-5 text-site-gradient" >Location</h2>
            <p><i class="fa-solid fa-house fa-bounce text-site-gradient" ></i> <strong class="text-site-gradient" >36, Dunării Cahul 3909<br>
            <i class="fa-solid fa-globe fa-bounce "></i> Republica Moldova</strong></p>

            <h2 class=" text-site-gradient" data-aos="fade-up">Contact</h2>
            <p class="text-secondary" data-aos="fade-up">For any questions or assistance, please do not hesitate to contact:</p>
            <p><i class="fa-solid fa-phone fa-bounce text-site-gradient" data-aos="fade-up"></i> <strong class="text-site-gradient" data-aos="fade-up">Phone: +373 1234 5678<br>
            <i class="fa-solid fa-envelope fa-bounce"></i> Email: info@executivestudyabroadcahul.md</strong></p>
            <p class="text-secondary" data-aos="fade-up">Our dedicated team is available to provide support and additional information about our study abroad programs and how we can help you achieve your academic and professional goals.</p>
            <p class="text-secondary"data-aos="fade-up">We look forward to welcoming, where we will open doors to new educational and cultural opportunities!</p>
        </div>
    </div>
</div>

</section>