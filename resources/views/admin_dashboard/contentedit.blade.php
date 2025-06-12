@include('admin_dashboard.header')



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Categorie Page Content Edit    
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
                        <h3 class="card-title">Create New Content</h3>
                    </div>
                    <div class="card-body">
                      <form action="{{ url('content/update/' . $content_edit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="categorie">Category</label>
                                    <select name="categorie" class="form-control" >
                                        <option value="{{$content_edit->categorie}}">{{$content_edit->categorie}}</option>
                                     
                                        @foreach($categories as $categorie)
                                            <option value="{{$categorie->categories}}">{{$categorie->categories}}</option>
                                        @endforeach
                                    
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="panal_img">Panel Image</label>
                                    <input type="file" name="panal_img" class="form-control-file" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="panal_text">Panel Text</label>
                                <input type="text" value="{{ $content_edit->panal_text}}" name="panal_text" class="form-control" placeholder="Enter panel text" required>
                            </div>

                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" value="{{ $content_edit->heading}}" name="heading" class="form-control" placeholder="Enter heading" required>
                            </div>

                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea name="text" class="form-control" rows="3" placeholder="Enter description text" required>{{ $content_edit->text }}</textarea>
                            </div>

                              <div class="form-group">
                                <label for="explore_text">Explore Text</label>
                                <input type="text" value="{{ $content_edit->explore_text }}" name="explore_text" class="form-control" placeholder="Enter explore text" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="img1">Card Image 1 <span>Size: W1370  , H768</span></label>
                                    <input type="file" name="card_img1" class="form-control-file" >
                                </div>
                                <div class="form-group col-md-4">
                                     <label for="img1">Card Image 2 <span>Size: W1370  , H768</span></label>
                                    <input type="file" name="card_img2" class="form-control-file" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img1">Card Image 3 <span>Size: W1370  , H768</span></label>
                                    <input type="file" name="card_img3" class="form-control-file" >
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












 