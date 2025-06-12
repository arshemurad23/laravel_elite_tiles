
   @php
    $parts = explode(' ', $contact_list->web_name);
    $lastWord = array_pop($parts); // Tiles
    $firstPart = implode(' ', $parts); // Elite
@endphp


@include('header')












<!-- Slider Section -->
<section id="slider" data-aos="fade-up" class="p-0 m-0">
  <div class="w-100 p-0 m-0">
    <div class="slider-image" style="
      background-image: url('{{ asset($contact_list->panal_img) }}');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 60vh;
      width: 100%;
    ">
    </div>
  </div>
</section>






<!-- Contact Section -->
<section id="contact" class="my-5">
  <div class="container">
    <div class="row py-5 align-items-center">
      
      <!-- Contact Info -->
      <div class="col-12 col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
        <h2 class="fw-bold mb-3">Contact Us</h2>
        <p class="text-muted">We'd love to hear from you...</p>
       <ul class="list-unstyled mt-4">
  <!-- Address -->
  <li class="mb-2 d-flex align-items-center justify-content-center justify-content-lg-start">
    <svg class="me-2" width="20" height="20"><use xlink:href="#location"></use></svg>
    {{ $contact_list->address }}
  </li>

  <!-- Shop Number -->
  <li class="mb-2 d-flex flex-column">
    <span class="mt-3 fw-bold">Shop No</span>
    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
      <svg class="me-2" width="20" height="20"><use xlink:href="#phone"></use></svg>
      {{ $contact_list->shop_number }}
    </div>
  </li>

  <!-- Phone Number -->
  <li class="mb-2 d-flex flex-column">
    <span class="mt-3 fw-bold">Phone No</span>
    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
      <svg class="me-2" width="20" height="20"><use xlink:href="#phone"></use></svg>
      {{ $contact_list->phone_number }}
    </div>
  </li>

  <!-- Email -->
  <li class="mb-2 mt-3 d-flex align-items-center justify-content-center justify-content-lg-start">
    <svg class="me-2" width="20" height="20"><use xlink:href="#email"></use></svg>
    {{ $contact_list->email }}
  </li>
</ul>

      </div>

      <!-- Contact Form -->
      <div class="col-12 col-lg-6">
        <h4 class="display-6 fw-normal mb-3">Request Our Catalog</h4>
        <p>Enter your details and we'll send you our latest catalog.</p>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ url('add/masg') }}" method="POST" class="position-relative">
          @csrf
          <input type="text" name="uname" class="form-control px-4 py-3 mb-3" placeholder="Enter Your Full Name" required>
          <input type="number" name="number" class="form-control px-4 py-3 mb-3" placeholder="WhatsApp Number" required>
          <input type="text" name="masg" class="form-control px-4 py-3 mb-3" placeholder="Preferred Product Category" required>

          <div class="d-grid">
            <button type="submit" class="btn btn-arrow btn-primary mt-3">
              <span>Send Now <svg width="18" height="18"><use xlink:href="#arrow-right"></use></svg></span>
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>











<!-- Footer Start -->
<section id="footer">
  <div class="container-fluid padding-side padding-small pt-0" data-aos="fade-up">
    <footer class="row">
      
      <!-- Brand Info -->
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                 <h1>{{ $firstPart }} <span class="text-primary">{{ $lastWord }}</span></h1>
          <p class="mt-3"> {{$contact_list->footer_text}}  </p>
        <ul class="social-links d-flex flex-wrap list-unstyled mt-4 mb-0">
          <li><a href="#"><svg class="social me-4" width="20" height="20"><use xlink:href="#facebook"></use></svg></a></li>
          <li><a href="#"><svg class="social me-4" width="20" height="20"><use xlink:href="#twitter"></use></svg></a></li>
          <li><a href="#"><svg class="social me-4" width="20" height="20"><use xlink:href="#linkedin"></use></svg></a></li>
          <li><a href="#"><svg class="social me-4" width="20" height="20"><use xlink:href="#instagram"></use></svg></a></li>
          <li><a href="#"><svg class="social me-4" width="20" height="20"><use xlink:href="#youtube"></use></svg></a></li>
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <h4 class="display-6 fw-normal">Quick Links</h4>
        <ul class="nav flex-column">
 <li class="nav-item px-3">
                  <a class="nav-link p-0" href="{{ URL::to('/') }}">home</a>
                </li>


               <li class="nav-item px-3">
                  <a class="nav-link p-0" href="{{ URL::to('home/about') }}">About</a>
                </li>
                 <li class="nav-item px-3">
                  <a class="nav-link p-0" href="{{ URL::to('home/service') }}">Services</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link p-0" href="{{ URL::to('home/contact') }}">Contact</a>
                </li>      
        </ul>
      </div>

    <!-- Services -->
<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
  <h4 class="display-6 fw-normal">Services</h4>
  <ul class="nav flex-column">
    @foreach($service_list->take(4) as $service_name)
      <li class="nav-item">
        <a href="#" class="p-0">{{ $service_name->name }}</a>
      </li>
    @endforeach
  </ul>

  <!-- Explore Button (outside the <ul>) -->
  
  <a href="{{URL::to('home/service') }}" class=" mt-3">More</a>

</div>

    </footer>

    <hr class="text-black">
    <footer class="row">
      <div class="col-md-12 text-center">
        <p class="m-0">© Copyright 2025 Elite Tiles.</p>
        <p>
          Information Website : <a href="{{ URL::to('/') }}">Tiles</a><br>
         Developer By:  <a href="https://www.linkedin.com/in/arsh-e-murad-266592250/" target="_blank">arshemurad</a>
        </p>
      </div>
    </footer>
  </div>
</section>
<!-- Footer End -->

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>
