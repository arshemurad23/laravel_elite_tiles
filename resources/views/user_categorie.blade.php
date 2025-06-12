
        @php
    $parts = explode(' ', $contact_list->web_name);
    $lastWord = array_pop($parts); // Tiles
    $firstPart = implode(' ', $parts); // Elite
@endphp




  @include('header')



    <!-- panal start -->
  <section id="slider" data-aos="fade-up">
    <div class="container-fluid padding-side">
      <div class="d-flex rounded-5"
        style="background-image: url({{ asset($content->panal_img) }}); background-size: 100%100%;  background-repeat: no-repeat; height: 65vh; background-position: center;">
       
        <div class="row align-items-center m-auto pt-5 px-4 px-lg-0">
          <div class="text-start col-md-6 col-lg-5 col-xl-6">
           <h2 class="display-1 fw-normal text-light ">{{ $content->panal_text }}</h2>
           
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- panal end -->



  
  <section id="about-us" class="m-5">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">{{ $content->heading }}</h3>
      <div class="row align-items-start mt-3 mt-lg-5">
      
      <div class="col-lg-6">
          <div class="p-5">
            <h1></h1>
            <p>{{ $content->text }}</p>
           
          </div>
          <img src="{{ asset($content->card_img1) }}" alt="img" class="img-fluid rounded-4 mt-4">
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0">
          <img src="{{ asset($content->card_img2) }}" alt="img" class="img-fluid rounded-4">
          <img src="{{ asset($content->card_img3) }}" alt="img" class="img-fluid rounded-4 mt-4">

        </div>
      </div>
    </div>
  </section>


<section id="services" class="padding-medium">
  <div class="container-fluid padding-side" data-aos="fade-up">
    <h3 class="display-3 fw-normal text-center">{{ $content->explore_text }}</h3>

    <div class="row mt-5 room-wrapper">
      <!-- Repeatable Room Item START -->
      <!-- Example: Add as many as you want, this is repeated -->
      


  @foreach($tiles as $tile)
  <div class="col-md-6 col-xl-4">
    <div class="swiper-slide">
      <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
        <img src="{{ asset($tile->img1) }}" class="post-image img-fluid rounded-4" alt="img" />
        
        <div class="product-description position-absolute p-5 text-start">
          <h4 class="display-6 fw-normal text-white">{{ $tile->name }}</h4>
          <table>
            <tbody>
              <tr class="text-white">
                <td class="pe-2">Finish:</td>
                <td>{{ $tile->finish }}</td>
            </tr>
            </tbody>
          </table>

          <a href="{{ url('home/categorie/' . $tile->name . '/info' ) }}" class="btn-arrow">
            <p class="text-decoration-underline text-white m-0 mt-2">
              <span>
                More Details
                <svg width="18" height="18">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </span>
            </p>
          </a>
        </div>
      </div>

      <div class="room-content text-center mt-3" style="padding: 30px;">
        <p><span class="text-primary fs-4">Size:</span> {{ $tile->size }}</p>
      </div>
    </div>
  </div>
@endforeach



      <!-- Repeatable Room Item END -->
    </div>

    <!-- Preloader (your existing loader) -->
     <!-- <div class="preloader">
    <div class="loader"></div>
  </div> -->

    <!-- Load More Button -->
    <div class="text-center mt-4">

     <button id="loadMore" class="btn btn-arrow btn-primary text-center mt-3">
          <span>Explore More<svg width="18" height="18">
              <use xlink:href="#arrow-right"></use>
            </svg></span>
        </button>
    </div>






     



  </div>
</section>








  @include('footer')