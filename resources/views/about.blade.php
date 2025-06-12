        @php
    $parts = explode(' ', $contact_list->web_name);
    $lastWord = array_pop($parts); // Tiles
    $firstPart = implode(' ', $parts); // Elite
@endphp



@include('header')




<!-- panel start -->
<section id="slider" data-aos="fade-up">
  <div class="container-fluid p-0 m-0">
    <div class="position-relative overflow-hidden">
      <img src="{{ url($about->panal_img) }}" alt="About Image" 
        style="filter: blur(4px); 
               width: 100%; 
               height: 50vh; 
               object-fit: cover;" 
        class="w-100">

      <div class="container position-absolute top-50 start-50 translate-middle text-white ">
        <h1 class=" display-1"><b>About</b></h1>
        <p class="display-6">The {{$contact_list->web_name}} / <span class="text-primary">About</span></p>
      </div>
    </div>
  </div>
</section>
<!-- panel end -->






   <section id="about-us" class="my-5">
  <div class="container">
    <div class="row py-5 align-items-center">


        <!-- Text Column -->
      <div class="col-lg-6 text-lg-start text-center">
        <p class="text-muted mb-2">About The {{$contact_list->web_name}}</p>
        <h1 class="fw-bold">{{ $about->heading }}</h1>
        <p>{{$about->text_1}}</p>

        <p class="mt-5">{{$about->text_1}}</p>

    </div>


      <!-- Image Column -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-center">
        <img src="{{  url($about->card_img)  }}" alt="About Us Image" class="img-fluid rounded-5 shadow">
      </div>

      

    </div>
  </div>
</section>





  
  <section id="info">
    <div class="container" data-aos="fade-up">
  <div class="row justify-content-center text-center">
  <div class="col-md-2 mb-4">
    <h3 class="display-1 fw-normal text-primary position-relative">
      {{$about->happy_customer}}
      <span class="position-absolute top-50 end-50 translate-middle z-n1 ps-lg-4 pt-lg-4">
        <img src="{{ asset('assets/images/pattern1.png') }}" alt="pattern" class="img-fluid">
      </span>
    </h3>
    <p class="text-capitalize">Happy Customer</p>
  </div>

 
  <div class="col-md-2 mb-4">
    <h3 class="display-1 fw-normal text-primary position-relative">
      {{$about->dealership}}
      
      <span class="position-absolute top-100 pb-5 translate-middle z-n1">
        <img src="{{ asset('assets/images/pattern1.png') }}" alt="pattern" class="img-fluid">
      </span>
    </h3>
    <p class="text-capitalize">Dealership</p>
  </div>


   <div class="col-md-2 mb-4">
    <h3 class="display-1 fw-normal text-primary position-relative">
      {{ $categorie_count }}
      <span class="position-absolute top-50 translate-middle z-n1">
        <img src="{{ asset('assets/images/pattern1.png') }}" alt="pattern" class="img-fluid">
      </span>
    </h3>
    <p class="text-capitalize">Categories</p>
  </div>


  <div class="col-md-2 mb-4">
    <h3 class="display-1 fw-normal text-primary position-relative">
      {{$service_count}}
      <span class="position-absolute top-50 end-50 pb-lg-4 pe-lg-2 translate-middle z-n1">
        <img src="{{ asset('assets/images/pattern1.png') }}" alt="pattern" class="img-fluid">
      </span>
    </h3>
    <p class="text-capitalize">Total Services</p>
  </div>

  <div class="col-md-2 mb-4">
    <h3 class="display-1 fw-normal text-primary position-relative">
      {{$about->total_members}}
      <span class="position-absolute top-50 end-50 pb-lg-4 pe-lg-2 translate-middle z-n1">
        <img src="{{ asset('assets/images/pattern1.png') }}" alt="pattern" class="img-fluid">
      </span>
    </h3>
    <p class="text-capitalize">Total Members</p>
  </div>
</div>

    </div>
  </section>




<div class="mt-5"></div>





@include('footer')