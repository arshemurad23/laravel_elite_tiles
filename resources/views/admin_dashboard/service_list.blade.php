@include('admin_dashboard.header')

  @if (session('service_deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('service_deleted') }}
    </div>
@endif


  @if (session('service_added'))
    <div class="alert alert-success" role="alert">
        {{ session('service_added') }}
    </div>
@endif



  @if (session('service_updated'))
    <div class="alert alert-success" role="alert">
        {{ session('service_updated') }}
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
              <li class="breadcrumb-item active">Service List
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="card-title">Service List</h3>
                        <a href="{{ url('service/add') }}" class="btn btn-success float-right">Add New Service</a>
                    </div>
                    <div class="card-body table-responsive">
                                                <table class="table table-bordered table-striped text-center align-middle">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Info</th>
                                    <th>Number</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($service_list as $list)
                                    <tr>
                                        <td>{{ $list->id }}</td>
                                        <td>{{ $list->name }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($list->info, 50) . 'more' }}</td>

                                        <td>{{ $list->number }}</td> <!-- info -->
                                       
                                      <td>
  <a href="{{ url('service/edit/' . $list->id) }}" class="btn btn-info">Edit</a>
</td>
<td>
  <a href="{{ url('service/delete/' . $list->id) }}" class="btn btn-danger">Drop</a>
</td>


                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-muted">No tiles found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





















@include('admin_dashboard.footer')

