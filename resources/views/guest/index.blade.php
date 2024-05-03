@extends('layouts.guest')

@section('content')
<!-- Header -->
<div class="container">
        <nav class="navbar navbar-expand-lg" >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
                </a>
                
                    <div class="navbar-nav">
                        <a class="nav-link active text-black" aria-current="page" href="#">Home</a>
                        <a class="nav-link active text-black" href="#">Abaut us</a>
                        <a class="nav-link active text-black" href="#">Our services</a>
                        <a class="nav-link active text-black" href="#">Responsibilities</a>
                        <a class="nav-link active text-black" href="#">Country</a>

                        <a class="btn btn-border text-black" href="#">
                            Apply
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
<header>
<div class="container d-flex align-items-center bg-site-image">
        <div class="col-lg-6">
            <h1 class="text-center text-lg-start text-black mb-5 header-title">
            We Help to 
            <span class="text-site-gradient">Build</span> <br>
            Your dream 
            </h1>
            <p class="text-secondary mb-5 text-center text-lg-start header-description">
            We are  always availed to consult on taking your higher education to the next
             level so you can stay competitive in the global world. We welcome the 
             opportunity to work with you "today" for "tomorrow's" better career solutions.
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start mb-5">
                <a href="#" class="btn btn-purple px-4 py-2 me-3">
                    
                    Apply Online <i class="fa-solid fa-arrow-right"></i>
                </a>
               
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <i class="fa-brands fa-facebook-f"></i>
               <span class="icon-space"></span>
               <i class="fa-brands fa-twitter"></i>
               <span class="icon-space"></span>
               <i class="fa-brands fa-instagram"></i>
            </div>

        </div>
    </div>
</header>
<!-- End Header -->

<!-- sectia2 -->
<section class="news my-5 py-5 ">
<h2 class="text-black text-center mb-5">Our Services</h2>
<p class="text-secondary text-center mb-5  ">Executive Trade International is an University Application Centre, guiding Bangladeshi <br>
    students to Australian, British, Canadian and Irish universities!</p>

    <div class="container ">
        <div class="row ">
            <div class="col-md-4">
            <div class="card bg-card ">

                <div class=" bg-card header-description-1 ">
                    <div class="card-body">
                    <div class="d-flex flex-wrap">
                    <img src="{{ asset('assets/images/img1.png') }}" class="card-img-top img-fluid float-left" style="max-width: 100px;">
                    </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-0">Career Counselling</h5>
                                    <p class="text-secondary mb-0">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
            <div class="card bg-card ">
                <div class=" bg-card header-description-1 ">
                    <div class="card-body">
                    <div class="d-flex flex-wrap">
                    <img src="{{ asset('assets/images/img2.png') }}" class="card-img-top img-fluid float-left" style="max-width: 100px;">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-0">University Admissions</h5>
                                    <p class="text-secondary mb-0">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
            </div>
     </div>

         <div class="col-md-4">
            <div class="card bg-card ">
                <div class="bg-card header-description-1 ">
                    <div class="card-body">
                    <div class="d-flex flex-wrap">
                    <img src="{{ asset('assets/images/img3.png') }}" class="card-img-top img-fluid float-left" style="max-width: 100px;">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-0">Visa Consultancy</h5>
                                    <p class="text-secondary mb-0">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                                </div>
                            </div>  
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
<div class="container ">
        <div class="row">
            <div class="col-md-4 ">
            <div class="card bg-card">
                <div class="bg-card header-description-1 ">
                    <div class="card-body">
                    <div class="d-flex flex-wrap">
                    <img src="{{ asset('assets/images/home.png') }}" class="card-img-top img-fluid float-left" style="max-width: 100px;">
                    </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-0">Accommodation</h5>
                                    <p class="text-secondary mb-0">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-4">
            <div class="card bg-card">
                <div class="bg-card header-description-1 ">
                    <div class="card-body">
                    <div class="d-flex flex-wrap">
                    <img src="{{ asset('assets/images/plane.png') }}" class="card-img-top img-fluid float-left" style="max-width: 100px;">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-0">Pre-Departure Briefing</h5>
                                    <p class="text-secondary mb-0">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<!-- News -->
<section class="news my-5 py-5 bg-gray">
  <h2 class="text-black text-center mb-5">News</h2>
  <p class="text-secondary text-center mb-5">Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae <br>
     praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
  
  
  <div class="container">
  <div class="row">
      @foreach($news as $new)
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="d-flex images">
            @foreach($new->images()->limit(1)->get() as $image)
              <img src="{{ asset(env('UPLOADS_IMAGE') . "/" . $image->name) }}" class="w-60 p-2 ">
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
