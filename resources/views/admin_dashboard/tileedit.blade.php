@include('admin_dashboard.header')



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Tile Edit 
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
        <div class="row mt-3">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h3 class="card-title">Add New Tile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('tile-update/'.$tile_edit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Tile Name</label>
                                    <input type="text" name="name" value="{{$tile_edit->name}}" class="form-control" placeholder="Enter tile name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="categorie">Category</label>
                                    <select name="categorie" class="form-control">
                                        
                                    <option value="">{{$tile_edit->categorie }}</option>
                                     
                                        @foreach($categories as $categorie)
                                        <option value="{{$categorie->categories}}">{{$categorie->categories}}</option>
                                     @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="size">Size</label>
                                    <input type="text" name="size" class="form-control" value="{{$tile_edit->size}}" placeholder="e.g. 12x12" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="finish">Finish</label>
                                    <input type="text" name="finish" class="form-control" value="{{$tile_edit->finish}}" placeholder="e.g. Glossy, Matte" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="usage">Usage</label>
                                    <input type="text" name="usage" class="form-control" value="{{$tile_edit->usage}}" placeholder="e.g. Wall, Floor" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="material">Material</label>
                                    <input type="text" name="material" class="form-control" value="{{$tile_edit->material}}" placeholder="e.g. Ceramic, Porcelain" required>
                                </div>
                            </div>

                           <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" rows="3" placeholder="Enter tile description" required>{{$tile_edit->description}}</textarea>
</div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="img1">Tile Image 1  Size: W768 , H814</label>
                                    <input type="file" name="img1" class="form-control-file">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="img2">Tile info Image Size: W1178 , H771</label>
                                    <input type="file" name="img2" class="form-control-file">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>


@include('admin_dashboard.footer')
