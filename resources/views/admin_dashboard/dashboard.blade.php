




@include('admin_dashboard.header')


  @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
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
              <li class="breadcrumb-item active">Dashboard </li>
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
    <div class="d-flex flex-wrap justify-content-between gap-3">
      
      <div class="small-box bg-info text-white p-3" style="width: 19%;">
        <div class="inner">
          <h3>{{ $tilescount }}</h3>
          <p>Total Products</p>
        </div>
        <div class="icon">
          <i class="fa-brands fa-product-hunt"></i>
        </div>
        <a href="{{ URL::to('tile/list') }}" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>

      <div class="small-box bg-success text-white p-3" style="width: 19%;">
        <div class="inner">
          <h3>{{ $categorie_count }}</h3>
          <p>Total Categories</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-table-list"></i>
        </div>
        <a href="{{ URL::to('categorie') }}" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>


            <div class="small-box bg-warning text-white p-3" style="width: 19%;">
        <div class="inner">
          <h3>{{$lead_count}}</h3>
          <p>Total Leads</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-pencil"></i>
        </div>
        <a href="{{ URL::to('leads') }}" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>

      
      <div class="small-box bg-danger text-white p-3" style="width: 19%;">
        <div class="inner">
          <h3>{{$masg_count}}</h3>
          <p>Users Message</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-envelope-open-text"></i>
        </div>
        <a href="{{ URL::to('masg/list') }}" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>



        <div class="small-box bg-dark text-white p-3" style="width: 19%;">
        <div class="inner">
          <h3>{{ $service_count }}</h3>
          <p>Total Services</p>
        </div>
        <div class="icon">
          <i class="fa-brands fa-servicestack"></i>
        </div>
        <a href="{{ URL::to('service/list') }}" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>


    </div>
  </div>
</section>




    @include('admin_dashboard.footer')