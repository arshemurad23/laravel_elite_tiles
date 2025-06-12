@include('admin_dashboard.header')



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">About Page Content Edit
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

<form action="{{ url('about-update/'.$about_edit->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-row">
     

      


           <div class="form-group col-md-12">
            <label for="heading">Heading</label>
            <input type="text" value="{{ $about_edit->heading }}" name="heading" class="form-control" placeholder="Enter heading" required>
        </div>



    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="text_1">Text 1</label>
            <textarea name="text_1" class="form-control" rows="8" placeholder="Enter Text 1" required>{{ $about_edit->text_1 }}</textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="text_2">Text 2</label>
            <textarea name="text_2" class="form-control" rows="8" placeholder="Enter Text 2" required>{{ $about_edit->text_2 }}</textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="happy_customer">Happy Customer</label>
            <input type="text" value="{{ $about_edit->happy_customer }}" name="happy_customer" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="dealership">Dealership</label>
            <input type="text" value="{{ $about_edit->dealership }}" name="dealership" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="total_members">Total Members</label>
            <input type="text" value="{{ $about_edit->total_members }}" name="total_members" class="form-control" required>
        </div>
    </div>

    <!-- Images come last -->
    <div class="form-row mt-3">
        <div class="form-group col-md-6">
            <label for="panal_img">Panel Image</label>
            <input type="file" name="panal_img" class="form-control-file">
            @if($about_edit->panal_img)
                <img src="{{ url($about_edit->panal_img) }}" alt="Current Panel Image" width="120" class="mt-2">
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="card_img">Card Image Size: Width 552 Height 517 PX</label>
            <input type="file" name="card_img" class="form-control-file">
            @if($about_edit->card_img)
                <img src="{{ url($about_edit->card_img) }}" alt="Current Card Image" width="120" class="mt-2">
            @endif
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>

                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>


@include('admin_dashboard.footer')












 