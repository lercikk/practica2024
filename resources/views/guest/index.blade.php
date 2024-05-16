@extends('layouts.guest')

@section('content')
<!-- Header -->
<div class="container">
        <nav class="navbar navbar-expand-lg" >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
                </a>
               <div class="navbar-nav" id="myNavbar">
                    <a class="nav-link active text-black mx-4" aria-current="page" href="#" onclick="activateLink(this)">Home</a>
                    <a class="nav-link  text-black mx-4" href="#" onclick="activateLink(this)">About us</a>
                    <a class="nav-link  text-black mx-4" href="#" onclick="activateLink(this)">Our services</a>
                    <a class="nav-link text-black mx-4" href="#" onclick="activateLink(this)">Responsibilities</a>
                    <a class="nav-link  text-black mx-4" href="#" onclick="activateLink(this)">Country</a>
                    <a class="btn btn-border text-black mx-4" href="#">Apply</a>
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
   
    
<header>
<div class="container d-flex align-items-center bg-site-image">
        <div class="col-lg-6">
            <h1 class="text-center text-lg-start text-black mb-4 header-title">
            We Help to 
            <span class="text-site-gradient">Build</span> <br>
            Your dream 
            </h1>
            <p class="text-secondary mb-4 text-center text-lg-start ">
            We are  always availed to consult on taking your higher education to the next <br>

             level so you can stay competitive in the global world. We welcome the <br>

             opportunity to work with you "today" for "tomorrow's" better career solutions. <br>
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start mb-5">
                <a href="#" class="btn btn-purple px-4 py-2 me-3">
                    
                    Apply Online <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                   <a href="https://www.facebook.com/valeria.sinigur.1?locale=ru_RU" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                   <span class="icon-space"></span>
                   <a href="https://twitter.com/?lang=rur" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                   <span class="icon-space"></span>
                   <a href="https://www.instagram.com/_georgiyevna/?next=%2F" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Section 2 -->
<section >
<h2 class="text-black text-center mb-5">Our Services</h2>
<p class="text-secondary text-center mb-5  header-description ">Executive Trade International is an University Application Centre, guiding Bangladeshi <br>
    students to Australian, British, Canadian and Irish universities!</p>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                <div class="circle-icon-violet  text-black d-flex align-items-center justify-content-center ">
                <i class="fa-solid fa-satellite-dish" style="font-size: 2rem;"></i>
                </div>
                    <h5 class="text-black mt-3">Career Counselling</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. 
                        Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. 
                        Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a href="#" class="learn-more">
                     Learn More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-card border-0 shadow">
                <div class="card-body ">
                <div class="circle-icon-red text-black d-flex align-items-center justify-content-center ">
                <i class="fa-solid fa-book" style="font-size: 2rem;"></i>
                </div>
                    <h5 class="text-black mt-3">University Admissions</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. 
                        Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. 
                        Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a href="#" class="learn-more">
                     Learn More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                <div class="circle-icon-green  text-black d-flex align-items-center justify-content-center " >
                <i class="fa-regular fa-square-check" style="font-size: 2rem;"></i>
                </div>                   
                     <h5 class="text-black mt-3">Visa Consultancy</h5>
                     <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. 
                        Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. 
                        Iure et consectetur dolorem dicta accusantium fugiat.</p>
                     <a href="#" class="learn-more">
                     Learn More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-card border-0 shadow">
                <div class="card-body ">
                <div class="circle-icon-blue text-black d-flex align-items-center justify-content-center " >
                <i class="fa-solid fa-house" style="font-size: 2rem;"></i>
                </div>
                    <h5 class="text-black mt-3">Accommodation</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. 
                        Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. 
                        Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a href="#" class="learn-more">
                     Learn More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                <div class="circle-icon-pink text-black d-flex align-items-center justify-content-center " >
                <i class="fa-solid fa-plane" style="font-size: 2rem;"></i>
                </div> 
                     <h5 class="text-black mt-3">Pre-Departure Briefing</h5>
                     <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. 
                        Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. 
                        Iure et consectetur dolorem dicta accusantium fugiat.</p>
                     <a href="#" class="learn-more">
                     Learn More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    </div>
            </div>
        </div>
    </div>
</div>
</section>



<!-- News -->
<section class="news my-5 py-5 bg-gray">
  <h2 class="text-black text-center mb-5">News</h2>
  <p class="text-secondary text-center mb-5  header-description">Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae <br>
     praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
  
  
  <div class="container">
  <div class="row">
      @foreach($news as $new)
      <div class="col-md-4">
        <div class="card" style="width: 20rem;">
          <div class="d-flex images">
            @foreach($new->images()->limit(1)->get() as $image)
              <img src="{{ asset(env('UPLOADS_IMAGE') . "/" . $image->name) }}" class="w-65  ">
            @endforeach
          </div>
            <div class="card-body">
                  <p class="text-secondary "><i class="fa-regular fa-calendar"></i>  {{ $new->created_at->format('F j, Y') }}</p>
                  <h5 class="text-black mb-0">{{ $new->description }}</h5>
            </div>
          
        </div>
    </div>
    @endforeach
    
</section>

<div class="d-flex justify-content-center ">
  <button type="button" class="btn btn-purple px-4 py-2 me-3">Join Here <i class="fa-solid fa-arrow-right"></i></button>
</div>
