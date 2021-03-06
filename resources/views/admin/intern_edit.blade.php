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
      <form action="{{url('admin/intern_update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$edit->id}}">
          <br>
       <h2><label class="lead">Name</label></h2>
        <input type="text" name="name" class="form-control" placeholder="Enter Team Name" value="{{$edit->name}}">

        <h2><label class="lead">company name
        </label></h2>
        <input class="form-control" name="company_name" placeholder="Enter OurTeam Description" value="{{$edit->company_name}}">

        <h2><label class="lead">Designation
        </label></h2>
        <input class="form-control" name="designation" placeholder="Enter OurTeam Description" value="{{$edit->designation}}">

        <h2><label class="lead">placement_image</label></h2>
        <input class="form-control" type="file" 
        name="intern_image" value="{{$edit->intern_image}}">

        <img src="{{ url('/intern/'.$edit->intern_image) }}" style="height: 110px; width: 110px; border-radius: 100%;"></td>
        <br><br>
        <input type="submit" class="btn btn-info" name="intern_update" value="intern_update" style="float: right;">
     </form>
     </div><!-- card header -->
   </div><!-- card -->
 </div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fulid -->

@endsection