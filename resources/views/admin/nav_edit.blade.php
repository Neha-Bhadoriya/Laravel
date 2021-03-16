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
      <form action="{{url('admin/nav_update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$edit->id}}">
          <br>
        <h2><label class="lead">Phone Number</label></h2>
        <input type="text" name="number" class="form-control" placeholder="Enter Phone Number" value="{{$edit->number}}">

        <h2><label class="lead">Email</label></h2>
       <input class="form-control" name="email" placeholder="Enter Email" value="{{$edit->email}}">

        <h2><label class="lead">logo</label></h2>
        <input type="file" name="logo" class="form-control" value="{{$edit->logo}}">
        <img src="{{ url('/logo/'.$edit->logo) }}" style="height: 110px; width: 110px; border-radius: 100%;">
         
         <h2><label class="lead">Description</label></h2>
       <input class="form-control" name="description" placeholder="Enter Description" value="{{$edit->description}}">

       <h2><label class="lead">Address</label></h2>
       <input class="form-control" name="address" placeholder="Enter Address" value="{{$edit->address}}">
        </select>
        <br><br>
        <input type="submit" class="btn btn-info" name="nav_update" value="nav_update" style="float: right;">
     </form>
     </div><!-- card header -->
   </div><!-- card -->
 </div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fulid -->

@endsection