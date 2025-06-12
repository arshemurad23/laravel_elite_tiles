@include('admin_dashboard.header')




@if (session('about_content'))
    <div class="alert alert-success" role="alert">
        {{ session('about_content') }}
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
              <li class="breadcrumb-item active">About page Content
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
      @forelse($about_list as $list)
        <div class="col-12 mb-4">
          <div class="card shadow-sm w-100">
            <div class="card-header bg-primary text-white">
                <h5>About page Content</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">

  <ul class="list-unstyled mb-3">
               <li><strong>Heading</strong> {{ $list->heading }}</li>

                <p class="mt-3"><strong>Text 1:</strong> {{ \Illuminate\Support\Str::limit($list->text_1, 200) }}</p>
                  <p><strong>Text 2:</strong> {{ \Illuminate\Support\Str::limit($list->text_2, 200) }}</p>
                
                    <li><strong>Happy Customers:</strong> {{ $list->happy_customer }}</li>
                    <li><strong>Dealerships:</strong> {{ $list->dealership }}</li>
                    <li><strong>Total Members:</strong> {{ $list->total_members }}</li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-6">
                      <img src="{{ url($list->panal_img) }}" alt="Panel Image" class="img-fluid rounded shadow-sm mb-2 w-100" />
                    </div>
                    <div class="col-6">
                      <img src="{{ url($list->card_img) }}" alt="Card Image" class="img-fluid rounded shadow-sm mb-2 w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-center">
              <a href="{{ url('about-content/edit/' . $list->id) }}" class="btn btn-sm btn-info">About Page Edit</a>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center text-muted mt-4">No content found.</div>
      @endforelse
    </div>
  </div>
</section>


@include('admin_dashboard.footer')
