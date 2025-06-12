@include('admin_dashboard.header')



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Categorie Add & List </li>
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
        <div class="row mt-3">

            <!-- Left Column: Form Card -->
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-dark">
                        <h4>New Categorie</h4>
                    </div>
                    <div class="card-body">
                        <form action="categorie/add" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Categorie Name</label>
                                <input type="text" name="categorie" id="name" class="form-control" placeholder="Enter category name" required>
                            </div>
                            <button type="submit" class="btn btn-info mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Column: Table Card -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header  text-dark">
                        <h5>Categorie Table</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Categorie Name</th>
                                    <th>Created At</th>
                                <th class="text-center" colspan="2">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example row -->
                                 @foreach($categorie as $data)
                                <tr>
                                    <td>{{$data->categorie_id}}</td>
                                    <td>{{$data->categories}}</td>
                                    <td>{{$data->create_date}}</td>
                                    <td class="text-center">
                                        <a  href="categorie/edit/{{$data->categorie_id}}" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="categorie/drop/{{$data->categorie_id}}" class="btn btn-sm btn-danger">Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                                <!-- More rows go here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>
<!-- /.content -->

@include('admin_dashboard.footer')
