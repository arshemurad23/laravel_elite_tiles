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
              <li class="breadcrumb-item active">User Messages List
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
                    
                  
                <div class="card-body table-responsive">
                
                <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>WhatsApp Number</th>
                  <th>Masg</th>
                  <th>Date</th>

                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
                @foreach($add_list as $msg)
                <tr>
                  <td>{{ $msg->id }}</td>
                  <td>{{ $msg->name }}</td>
                  <td>{{ $msg->number }}</td>
                  <td>{{ $msg->masg }}</td>
                  <td>{{ $msg->date }}</td>

                  <td><a href="{{ URL::to('delete-masg/' . $msg->id )}}" class="btn btn-danger">Delete</a></td>

                </tr>
                @endforeach
              </tbody>
            </table>

            @if($add_list->isEmpty())
              <div class="text-center text-muted mt-4">No messages found.</div>
            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>















@include('admin_dashboard.footer')





