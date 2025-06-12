




@include('admin_dashboard.header')


  @if (session('service_content_updated'))
    <div class="alert alert-success" role="alert">
        {{ session('service_content_updated') }}
    </div>
@endif



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service Content </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow rounded-3 h-100">

         


            <div class="panal mt-3">
                <img src="{{ asset($content->panal_img) }}" class="card-img-top" style="height: 300px; object-fit: cover;">
            </div>

    <div class="card-footer bg-white">
    <div class="d-flex justify-content-between text-center">
        <div style="width: 30%;">
            <img src="{{ asset($content->card_1) }}" class="img-thumbnail mb-2" style="width: 100%;">
            <div>Card 1</div>
        </div>
        <div style="width: 30%;">
            <img src="{{ asset($content->card_2) }}" class="img-thumbnail mb-2" style="width: 100%;">
            <div>Card 2</div>
        </div>
        <div style="width: 30%;">
            <img src="{{ asset($content->card_3) }}" class="img-thumbnail mb-2" style="width: 100%;">
            <div>Card 3</div>
        </div>
    </div>
</div>


        <div class="card-body">
    <div class="mb-3">
        <h6 class="text-secondary text-uppercase fw-bold mb-1">Page Text</h6>
        <p class="mb-0">{{ $content->info }}</p>
    </div>

    

       <div>
        <a href="{{ url('service-content/edit/'.$content->id) }}" class="btn btn-sm btn-warning">Update</a>



   
      </div>
  
</div>

           
        </div>
    </div>
</div>








        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 



    @include('admin_dashboard.footer')