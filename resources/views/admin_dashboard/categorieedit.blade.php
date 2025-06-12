@include('admin_dashboard.header')


      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categorie Edit </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <section class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <!-- Left Column: Form Card -->
          <div class="col-md-6">
            <div class="card shadow-lg">
              <div class="card-header text-dark">
                <h4>Edit Categorie</h4>
              </div>
              <div class="card-body">
               
                <form action=" {{ URL::to('categorie/update/' . $categorieedit->categorie_id )}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="name">Categorie Name</label>
                    <input type="text" value="{{ $categorieedit->categories }}" name="categorie" id="name" class="form-control" placeholder="Enter category name" required>
                  </div>
                <button type="submit" class="btn btn-info mt-3">Update</button>
                <a href="{{ URL::to('categorie')}}" class="btn btn-dark mt-3">Cancel</a>

                </form>
             
              </div>
            </div>
          </div>
          <!-- End Form Column -->
        </div>
      </div>
    </section>

  
@include('admin_dashboard.footer')