@include('admin_dashboard.header')



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Service Content Edit
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
                        <h3 class="card-title">Edit About Content</h3>
                    </div>
                    <div class="card-body">


<form action="{{ url('service-content/update/'.$service_content_edit->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="footer_text">Footer Text</label>
            <textarea name="footer_text" class="form-control" rows="5" placeholder="Enter footer text" required>{{ $service_content_edit->info }}</textarea>
        </div>
    </div>

    <!-- Panel Image -->
    <div class="form-group">
        <label for="panal_img">Panel Image</label>
        <input type="file" name="panal_img" class="form-control-file">
        <div class="mt-2">
          <img src="{{ asset($service_content_edit->panal_img) }}" alt="Current Panel Image" class="img-thumbnail" style="height: 250px; width: 100%;">

        </div>
    </div>

    <!-- Card Images -->
    <div class="row">
        <div class="form-group col-md-4 text-center">
            <label for="card_img1">Card Image 1 Size: W1370 , H768</label>
            <input type="file" name="card_img1" class="form-control-file">
            <div class="mt-2">
                <img src="{{ asset($service_content_edit->card_1) }}" class="img-thumbnail" style="height: 150px;">
            </div>
        </div>

        <div class="form-group col-md-4 text-center">
            <label for="card_img2">Card Image 1 Size: W1370 , H768</label>
            <input type="file" name="card_img2" class="form-control-file">
            <div class="mt-2">
                <img src="{{ asset($service_content_edit->card_2) }}" class="img-thumbnail" style="height: 150px;">
            </div>
        </div>

        <div class="form-group col-md-4 text-center">
            <label for="card_img3">Card Image 1 Size: W1370 , H768</label>
            <input type="file" name="card_img3" class="form-control-file">
            <div class="mt-2">
                <img src="{{ asset($service_content_edit->card_3) }}" class="img-thumbnail" style="height: 150px;">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Update</button>
  <a href="{{ url('service/content') }}" class="btn btn-dark mt-3">Back</a>

</form>



                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>


@include('admin_dashboard.footer')












 