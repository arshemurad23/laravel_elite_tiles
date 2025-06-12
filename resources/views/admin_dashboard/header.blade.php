<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts and Icons -->
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/jqvmap/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/plugins/summernote/summernote-bs4.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <div class="user-panel mt-2 d-flex">
        <div class="image">
          <img src="{{ asset('admin-assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ session('admin')['user_name'] }}</a>
        </div>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{URL::to('dashboard')}}" class="brand-link">
      <img src="{{ asset('admin-assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panal</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview menu-open">
            <a href="{{URL::to('dashboard')}}" class="nav-link">
            <i class="fa-solid fa-house-user"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-header">Products</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-brands fa-product-hunt"></i>
              <p>
                Add Tiles & View
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('tile/list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Tiles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('tile/form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Tiles</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">Categories</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-table-list"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('categorie')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories Add & View</p>
                </a>
              </li>
            </ul>
          </li>



            <li class="nav-header">Service</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-table-list"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="{{ URL::to('service/list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>








          <li class="nav-header">Customer Retention</li>
          <li class="nav-item">
            <a href="{{ URL::to('leads')}}" class="nav-link">
              <i class="fa-solid fa-pencil"></i>
              <p>Leads</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('masg/list')}}" class="nav-link">
              <i class="fa-solid fa-envelope-open-text"></i>
              <p>Messages</p>
            </a>
          </li>


                    <!-- pages -->
          <li class="nav-header">Pages</li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-pen-nib"></i>
              <p>
                 Categories Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              
            
            <li class="nav-item">
                <a href="{{ URL::to('content/form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Make Content</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ URL::to('content/view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Content</p>
                </a>
              </li>

            </ul>
          </li>


     <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
           <i class="fa-regular fa-address-card"></i>
              <p>
                About Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              
            
       

              <li class="nav-item">
                <a href="{{ URL::to('about-content/view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Content</p>
                </a>
              </li>

            </ul>
          </li>




               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa-brands fa-usps"></i>
              <p>
                Services Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              
            
       

              <li class="nav-item">
                <a href="{{ URL::to('service/content') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Content</p>
                </a>
              </li>

            </ul>
          </li>




               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fa-solid fa-id-badge"></i>
              <p>
                Contact Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              
            
              <li class="nav-item">
                <a href="{{ URL::to('contact-content/view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Content</p>
                </a>
              </li>

            </ul>
          </li>





          <!-- Admin Actions -->
          <li class="nav-header">Admin Actions</li>


          <li class="nav-item">
            <a href="{{URL::to('change_password')}}" class="nav-link">
              <i class="fa-solid fa-dice-five"></i>
              <p>Change Password</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('logout')}}" class="nav-link">
              <i class="fa-solid fa-right-from-bracket"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <div class="content-header">