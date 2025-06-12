
        @php
    $parts = explode(' ', $contact_list->web_name);
    $lastWord = array_pop($parts); // Tiles
    $firstPart = implode(' ', $parts); // Elite
@endphp




@include('header')

@if(session('addLead'))
  <div class="container mt-4">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('addLead') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
@endif


<!-- Panel Start -->
<section id="slider" data-aos="fade-up">
    <div class="container-fluid padding-side p-0 m-0">
        <div class="d-flex rounded-1"
             style="background-image: url({{ asset($tiles_info->img1) }}); background-size: 100% 100%; height: 50vh; width: 100%; background-position: center;">
        </div>
    </div>
</section>
<!-- Panel End -->

<section id="about-us" class="m-5">
    <div class="container-fluid padding-side" data-aos="fade-up">
        <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">Complete Tile Info At a Glance.</h3>

        <div class="row align-items-start mt-3 mt-lg-5">
            <!-- Left Column -->
            <div class="col-lg-6 mt-5">
                <p><span class="h2">{{ $tiles_info->name }}</span></p>

                <div class="card mb-4 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <p class="text-muted mb-1">Size:</p>
                                <p class="fw-semibold fs-6">{{ $tiles_info->size }}</p>
                            </div>
                            <div class="col-md-3 mb-3">
                                <p class="text-muted mb-1">Finish:</p>
                                <p class="fw-semibold fs-6">
                                    <i class="fas fa-circle me-2" style="color: #fdd8d2;"></i>{{ $tiles_info->finish }}
                                </p>
                            </div>
                            <div class="col-md-3 mb-3">
                                <p class="text-muted mb-1">Usage:</p>
                                <p class="fw-semibold fs-6">{{ $tiles_info->usage }}</p>
                            </div>
                            <div class="col-md-3 mb-3">
                                <p class="text-muted mb-1">Material:</p>
                                <p class="fw-semibold fs-6">
                                    <i class="fas fa-circle me-2" style="color: #fdd8d2;"></i>{{ $tiles_info->material }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="card mb-5">
                    <div class="card-body p-4">
                        <p class="small text-muted mb-4 pb-2">Description:</p>
                        <p class="lead fw-normal mb-0">{{ $tiles_info->description }}</p>
                    </div>
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-start">
                    <a class="btn btn-arrow btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#personalInfoModal">
                        <span>Personal Info
                            <svg width="18" height="18"><use xlink:href="#arrow-right"></use></svg>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img src="{{ asset($tiles_info->img2) }}" class="blog-img img-fluid rounded-4" alt="Tile Information Image">
            </div>
        </div>
    </div>
</section>

<!-- Modal Start -->
<div class="modal fade" id="personalInfoModal" tabindex="-1" aria-labelledby="personalInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title display-5" id="personalInfoLabel">Personal Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ url('leads-add') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" value="{{ $tiles_info->id }}" name="tile_id">
                    <input type="hidden" value="{{ $tiles_info->name }}" name="tile_name">
                    <input type="hidden" value="{{ $tiles_info->categorie }}" name="categorie">

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                    </div>

                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" pattern="[0-9]{10,15}" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
                        <div class="form-text">Enter digits only, 10–15 characters.</div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Additional details or requests"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Submit Order</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal End -->

@include('footer')
