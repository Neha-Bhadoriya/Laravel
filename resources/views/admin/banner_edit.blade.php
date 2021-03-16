@extends("admin.master")
@section("title"," Edit | Banner ")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Catagory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Catagory</a></li>
        
            <li class="breadcrumb-item active"><a href="#">Edit Catagory </a></li>
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
      <form action="{{url('admin/banner_update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$edit->id}}">
          <h2><label class="lead">Banner title</label></h2>
        <input type="text" name="banner_title" class="form-control" placeholder="Enter Banner Title" value="{{$edit->banner_title}}">

        <h2><label class="lead">Banner Description</label></h2>
       <input class="form-control" name="banner_description" placeholder="Enter Banner Description" value="{{$edit->banner_description}}">

        <h2><label class="lead">banner_image</label></h2>
        <input type="file" name="banner_image" class="form-control" value="{{$edit->banner_image}}" >
        <img src="{{url('/banner/'.$edit->banner_image)}}" style="height: 110px; width: 110px; border-radius: 100%;">
        <br>
        <input type="submit" class="btn btn-info" name="banner_update" value="banner_update" style="float: right;">
     </div><!-- card header -->
   </div><!-- card -->
 </div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fulid -->

@endsection