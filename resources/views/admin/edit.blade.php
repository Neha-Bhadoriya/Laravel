@extends("admin.master")
@section("title"," Edit | Catagories ")
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
      <form action="{{url('admin/update')}}" method="post" enctype="multipart/form-data">
          @csrf
      <h3 class="card-title">Edit Catagory</h3>
      <br>
      <input type="hidden" name="id" value="{{$edit->id}}">

<hr>
        <label class="lead">Enter Catagory Name</label>
        <input type="text" name="c_name" class="form-control" value="{{$edit->c_name}}">

        <label class="lead">c_image</label>
        <input type="file" name="c_image" class="form-control" value="{{$edit->c_image}}">
        <img src="{{ url('/catagory/'.$edit->c_image) }}" style="height: 110px; width: 110px; border-radius: 100%;">

        <br><br>
        <input type="submit" class="btn btn-info" name="update" value="update" style="float: right;">
     </form>
     </div><!-- card header -->
   </div><!-- card -->
 </div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fulid -->

@endsection