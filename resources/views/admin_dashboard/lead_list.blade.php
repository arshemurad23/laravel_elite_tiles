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
              <li class="breadcrumb-item active">Leads
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
                        <h3 class="card-title">Lead List</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Tile ID</th>
                                    <th>Tile Name</th>
                                    <th>Category</th>
                                    <th>User Name</th>
                                    <th>Quantity</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($lead_list as $lead)
                                    <tr>
                                        <td>{{ $lead->id }}</td>
                                        <td>{{ $lead->tile_id }}</td>
                                        <td>{{ $lead->tile_name }}</td>
                                        <td>{{ $lead->categorie }}</td>
                                        <td>{{ $lead->user_name }}</td>
                                        <td>{{ $lead->quantity }}</td>
                                        <td>{{ $lead->phone_number }}</td>
                                        <td>{{ $lead->masg }}</td>
                                        <td><a href="{{ url('lead-delete/'.$lead->id) }}" class="btn btn-danger">Delete</a> </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">No leads found.</td>
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

