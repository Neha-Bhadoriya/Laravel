@extends("admin.master")
@section("title","Display | Catagories")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Catagory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Catagory</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- data table -->
  
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- Default box -->
     
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
   </ul>
   </div>
   @endif

    <div class="card">
      <div class="card-header">

      <form action="{{url('admin/workshop_update')}}" method="post" enctype="multipart/form-data">
          @csrf
         
        <h2><label class="lead">Workshop title</label></h2>
        <input type="text" name="title" class="form-control" placeholder="Enter Workshop Title" value="{{$edit->title}}">

        
        <h2><label class="lead">workshop_image</label></h2>
        <input type="file" name="workshop_image" class="form-control" value="{{$edit->workshop_image}}">
         <img src="{{url('/workshop/'.$edit->workshop_image)}}" style="height: 110px; width: 110px; border-radius: 100%;">
        <br>
        <input type="submit" class="btn btn-info" name="Edit Workshop" value="Edit Workshop" style="float: right;">
      </form>
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
   <!-- end data table -->
    <!-- Main content -->
    
  <!-- /.content-wrapper -->
@endsection