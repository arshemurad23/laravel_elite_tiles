@include('admin_dashboard.header')



      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Page Content Edit 
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
<form action="{{ url('contact-update/'.$contact_edit->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="address">Address</label>
            <input type="text" value="{{ $contact_edit->address }}" name="address" class="form-control" placeholder="Enter address" required>
        </div>

        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" value="{{ $contact_edit->email }}" name="email" class="form-control" placeholder="Enter email" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="shop_number">Shop Number</label>
            <input type="text" value="{{ $contact_edit->shop_number }}" name="shop_number" class="form-control" required>
        </div>

        <div class="form-group col-md-4">
            <label for="phone_number">Phone Number</label>
            <input type="text" value="{{ $contact_edit->phone_number }}" name="phone_number" class="form-control" required>
        </div>

        <div class="form-group col-md-4">
            <label for="web_name">Web Name</label>
            <input type="text" value="{{ $contact_edit->web_name }}" name="web_name" class="form-control" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="definition">Definition</label>
            <textarea name="definition" class="form-control" rows="5" placeholder="Enter definition" required>{{ $contact_edit->definition }}</textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="footer_text">Footer Text</label>
            <textarea name="footer_text" class="form-control" rows="5" placeholder="Enter footer text" required>{{ $contact_edit->footer_text }}</textarea>
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="form-group col-md-6">
            <label for="panal_img">Panel Image</label>
            <input type="file" name="panal_img" class="form-control-file">
            @if($contact_edit->panal_img)
                <img src="{{ url($contact_edit->panal_img) }}" alt="Current Panel Image" width="120" class="mt-2">
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












 