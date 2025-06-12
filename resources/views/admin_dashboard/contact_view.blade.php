@include('admin_dashboard.header')




@if (session('contact_edit'))
    <div class="alert alert-success" role="alert">
        {{ session('contact_edit') }}
    </div>
@endif



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact  page Content
            </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




<section class="content">
  <div class="container-fluid">
    <div class="row mt-3">
      @forelse($contact_list as $contact)
        <div class="col-12 mb-4">
          <div class="card shadow-sm w-100">
            <div class="card-header bg-primary text-white">
              <h5 class="mb-0">Contact  page Content</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <ul class="list-unstyled mb-3">
                    <li><strong>Address:</strong> {{ $contact->address }}</li>
                    <li><strong>Email:</strong> {{ $contact->email }}</li>
                    <li><strong>Shop #:</strong> {{ $contact->shop_number }}</li>
                    <li><strong>Phone #:</strong> {{ $contact->phone_number }}</li>
                    <li><strong>Website Name:</strong> {{ $contact->web_name }}</li>
                    <li><strong>Definition:</strong> {{ \Illuminate\Support\Str::limit($contact->definition, 200) }}</li>
                    <li><strong>Footer Text:</strong> {{ $contact->footer_text }}</li>
                  </ul>
                </div>
                <div class="col-md-4">
                  @if($contact->panal_img)
                    <img src="{{ url($contact->panal_img) }}" alt="Panel Image" class="img-fluid rounded shadow-sm w-100 mb-2" />
                  @else
                    <div class="text-muted">No Image Available</div>
                  @endif
                </div>
              </div>
            </div>
            <div class="card-footer text-center">
              <a class="btn btn-sm btn-info" href="{{ url('contact-content/edit/'.$contact->id) }}">Edit Contact</a>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center text-muted mt-4">No contact data found.</div>
      @endforelse
    </div>
  </div>
</section>


@include('admin_dashboard.footer')
