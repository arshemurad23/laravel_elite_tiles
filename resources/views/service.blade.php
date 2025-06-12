
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
      <img src="{{ asset($service_content->panal_img) }}" alt="About Image" 
        style="filter: blur(1px); 
               width: 100%; 
               height: 50vh; 
               object-fit: cover;" 
        class="w-100">

      <div class="container position-absolute top-50 start-50 translate-middle text-white ">
        <h1 class=" display-1"><b>Services</b></h1>
        <p class="display-6">The Elite Tiles / <span class="text-primary">Other Services</span></p>
      </div>
    </div>
  </div>
</section>
<!-- panel end -->





 <section id="about-us" class="m-5">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">About Services</h3>
      <div class="row align-items-start mt-3 mt-lg-5">
        <div class="col-lg-6">
          <div class="p-5">
            <p>{{ $service_content->info }}</p>
           
          </div>
          <img src="{{ asset( $service_content->card_1 ) }}" alt="img" class="img-fluid rounded-4 mt-4">
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0">
          <img src="{{ asset($service_content->card_2) }}" alt="img" class="img-fluid rounded-4">
          <img src="{{ asset($service_content->card_3) }}" alt="img" class="img-fluid rounded-4 mt-4">

        </div>
      </div>
    </div>
  </section>







    <section id="services" class="">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">Explore Our services </h3>
      <div class="row mt-5">


        @foreach($service_list as $service )
        <div class="col-md-6 col-xl-4">
  <div class="service mb-4 text-center rounded-4 p-5">
    <div class="position-relative">
      <svg class="color" width="70" height="70">
        <use xlink:href="#meditation"></use>
      </svg>
      <img src="{{ asset('assets/images/pattern2.png') }}" alt="img"
        class="position-absolute top-100 start-50 translate-middle z-n1 pe-5">
    </div>
    <h4 class="display-6 fw-normal my-3">{{$service->name}}</h4>
    <p>{{$service->info}}</p>
    

  <p>{{$service->number}}</p>


  </div>


</div>
@endforeach

   

    
      </div>
    </div>
  </section>






<div class="mt-5"></div>










@include('footer')
