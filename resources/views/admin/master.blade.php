<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield("title")</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('backend/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <!--  <data table link> -->
  <link rel="stylesheet" href="{{url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- <end link data table> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed" >

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p class="text-danger">{{Auth::user()->name}}</p>
        </a>
       </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

<aside class="main-sidebar elevation-4" style="background-color: #1c595a;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('backend/dist/img/v.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Admin Panel</span>
    </a>
<hr class="bg-white">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('backend/dist/img/tt.jpg')}}" class="img-circle elevation-2 " alt="User Image" style="height: 42px;width: 67px;">
        </div>
        <div class="info">
          <a href="#" class="d-block text-white">{{Auth::user()->name}}</a>
        </div>
      </div>
     <hr class="bg-white">
      <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
             <a href="{{url('admin')}}" class="nav-link active bg-dark" style="border-style: double;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard</p>
            </a>

            <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/catagory')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Catagories</p>
            </a>

            <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/course')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Courses</p>
            </a>
            
            <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/banner')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Banners</p>
            </a>
            
            <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/navbar_footer')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Navbar/Footer</p>
            </a>
            
            <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/bottom')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Bottom</p>
            </a>

             <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/ourteam')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>OurTeam</p>
            </a>

             <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/placement')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Placement</p>
            </a>

             <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/intern')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Intern</p>
            </a>

  <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/contact')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Contact Bottom</p>
            </a>

            <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/contact_form')}}" class="nav-link active bg-secondary" style="border-style: double;border-block-color: #1c595a;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Contact Form</p>
            </a>

            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('logout') }}" class="nav-link active bg-danger" style="border-style: double;" 
            onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-tachometer-alt"></i>
          
          {{ __('Logout') }}
          <!--  <p>Lo*+gout</p> --></a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
  </form>
  </li>
  </ul>
  </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

@section("content")



@show
  <!-- Content Wrapper. Contains page content -->
</div>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022<a href=""> PN-EDUCATION </a> 
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('backend/dist/js/demo.js')}}"></script>

<!-- <data tble script> -->
<script src="{{url('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
  <!-- <end script> -->
</body>
</html>
