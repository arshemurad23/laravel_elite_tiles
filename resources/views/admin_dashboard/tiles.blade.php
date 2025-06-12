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
              <li class="breadcrumb-item active">Tile List
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
                        <h3 class="card-title">Tile List</h3>
                        <a href="{{ url('tile/form') }}" class="btn btn-success float-right">Add New Tile</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Material</th>
                                    <th>Finish</th>
                                    <th>Usage</th>
                                    <th class="text-center">Description</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($tiles as  $tile)
                                    <tr>
                                        <td>{{ $tile->id }}</td>
                                        <td><img src="{{ url($tile->img1)}}" alt="Tile Image" width="100"></td>
                                        <td>{{ $tile->name }}</td>
                                        <td>{{ $tile->categorie }}</td>
                                        <td>{{ $tile->size }}</td>
                                        <td>{{ $tile->material }}</td>
                                        <td>{{ $tile->finish }}</td>
                                        <td>{{ $tile->usage }}</td>
                                        <td style="width: 430px;">{{ $tile->description }}</td>


                                        <td class="text-center"><a href="{{ url('tile-edit/'.$tile->id) }}" class="btn btn-sm btn-info">Edit</a></td>

                                         <td class="text-center"><a href="{{ url('tile-delete/'.$tile->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this tile?')">Delete</a></td>
                                  
                                        </tr>
                               
                                     @endforeach
                            </tbody>
                        </table>

                        @if($tiles->isEmpty())
                            <div class="text-center text-muted mt-4">No tiles found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>















@include('admin_dashboard.footer')

