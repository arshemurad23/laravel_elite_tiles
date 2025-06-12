@include('admin_dashboard.header')

  @if (session('tileadded'))
    <div class="alert alert-success" role="alert">
        {{ session('tileadded') }}
    </div>
@endif


  @if (session('tileupdate'))
    <div class="alert alert-success" role="alert">
        {{ session('tileupdate') }}
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
              <li class="breadcrumb-item active">Service Edit
 </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h3 class="card-title mb-0">Add New Services</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('service/update/' . $service_edit->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Services Name</label>
                                <input type="text" value="{{ $service_edit->name }}" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                            </div>

                            <!-- Number -->
                            <div class="mb-3">
                                <label for="number" class="form-label fw-bold">Laber Number</label>
                                <input type="text" value="{{ $service_edit->number }}" name="number" id="number" class="form-control" placeholder="Enter Number" required>
                            </div>

                            <!-- Info -->
                            <div class="mb-3">
                                <label for="info" class="form-label fw-bold">Services Info</label>
                                <textarea name="info"  id="info" class="form-control" rows="8" placeholder="Enter Info" required>{{ $service_edit->info }}</textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary px-4">Update</button>
                                <a href="{{URL::to('service/list')}}" class="btn btn-dark px-4">Back</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>


















@include('admin_dashboard.footer')

