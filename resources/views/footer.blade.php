  <section id="footer">
    <div class="container-fluid padding-side padding-small pt-0" data-aos="fade-up">
      <footer class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <h1>{{ $firstPart }} <span class="text-primary">{{ $lastWord }}</span></h1>

          <p class="mt-3"> {{$contact_list->footer_text}}  </p>
          <ul class="social-links d-flex flex-wrap list-unstyled mt-4 mb-0">
            <li>
              <a href="#">
                <svg class="social me-4" width="20" height="20">
                  <use xlink:href="#facebook"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="social me-4" width="20" height="20">
                  <use xlink:href="#twitter"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="social me-4" width="20" height="20">
                  <use xlink:href="#linkedin"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="social me-4" width="20" height="20">
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="social me-4" width="20" height="20">
                  <use xlink:href="#youtube"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
          <h4 class="display-6 fw-normal">Request Our Catalog</h4>
          <p>Enter your details and we'll send you our catalog.</p>
      


            {{-- Success Message --}}
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    


      
          <form action="{{ url('add/masg') }}" method="post" class=" position-relative">
            @csrf
           <input type="text" name="uname" class="form-control px-4 py-3 bg-transparent mb-3" placeholder="Enter Your Full Name" required>
           <input type="number" name="number" class="form-control px-4 py-3 bg-transparent mb-3" placeholder="WhatsApp Number" required> 
           <input type="text" name="masg" class="form-control px-4 py-3 bg-transparent" placeholder="Preferred Product Category" required>

            <div class="d-grid">
              <button href="#" class="btn btn-arrow btn-primary mt-3">
                <span>Send Now<svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </button>
            </div>
          </form>
       
       
        </div>
        <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
          <h4 class="display-6 fw-normal">Our Info</h4>
          <ul class="nav flex-column">
            <li class="location text-capitalize d-flex align-items-center">
              <svg class="color me-1" width="20" height="20">
                <use xlink:href="#location"></use>
              </svg>
              {{$contact_list->address}}

              </li>
          
              
              <li class="phone text-capitalize d-flex align-items-center mt-2">
              <svg class="color me-1" width="20" height="20">
                <use xlink:href="#phone"></use>
              </svg>{{$contact_list->shop_number}}
            </li>

              <li class="phone text-capitalize d-flex align-items-center mt-2">
              <svg class="color me-1" width="20" height="20">
                <use xlink:href="#phone"></use>
              </svg>{{$contact_list->phone_number}}
            </li>


            <li class="email text-capitalize d-flex align-items-center mt-2">
              <svg class="color me-1" width="20" height="20">
                <use xlink:href="#email"></use>
              </svg>{{$contact_list->email}}
            </li>
          </ul>
        </div>
      </footer>
       </div>
      <!-- footer end -->



   
    <hr class="text-black">
    <div class="container-fluid padding-side padding-small" data-aos="fade-up">
      <footer class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <h4 class="display-6 fw-normal">Quick links</h4>
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
        <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
          <h4 class="display-6 fw-normal">Services</h4>
          <ul class="nav flex-column">
          
       @foreach($service_list->take(4) as $service_name)
    <li class="nav-item"><a href="#" class="p-0"> {{$service_name->name}} </a></li>
@endforeach

          </ul>


             <a href="{{URL::to('home/service') }}" class=" mt-3">More</a>


        </div>
        <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
          <p class="m-0">© Copyright 2025 Elite Tiles. </p>
          <p>Information Website :<a href="{{ URL::to('/') }} " class="text-decoration-underline"
              >Tiles</a><br> Developer By: <a href="https://www.linkedin.com/in/arsh-e-murad-266592250/" class="text-decoration-underline"
            target="blank">arshemurad</a></p>
        </div>
      </footer>
    </div>
  </section>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>

<!-- Bootstrap Bundle -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Main Script -->
<script src="{{ asset('assets/js/script.js') }}"></script>

<!-- Iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>