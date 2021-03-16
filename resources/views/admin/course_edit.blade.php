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
      <form action="{{url('admin/course_update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$edit->id}}">
          <br>
        <h2><label class="lead">Course Name</label></h2>
        <input type="text" name="course_name" class="form-control" placeholder="Enter Course Name" value="{{$edit->course_name}}">

        <h2><label class="lead">Course Description</label></h2>
        <input class="form-control" name="course_description" placeholder="Enter Course Description" value="{{$edit->course_description}}">

        <h2><label class="lead">Course Price</label></h2>
        <input class="form-control" type="text" name="course_price" placeholder="Enter Course Price" value="{{$edit->course_price}}">

        <h2><label class="lead">Course Detail</label></h2>
        <input class="form-control" name="course_detail" placeholder="Enter Course Detail" value="{{$edit->course_detail}}">

        <h2><label class="lead">Course Includes</label></h2>
        <input class="form-control" name="course_includes" placeholder="Enter Course Includes" value="{{$edit->course_includes}}">

        <h2><label class="lead">Course Content</label></h2>
        <input class="form-control" name="course_content" placeholder="Enter Course Content" value="{{$edit->course_content}}">

        <h2><label class="lead">course_image</label></h2>
        <input class="form-control" type="file" name="course_image" value="{{$edit->course_image}}">

        <img src="{{ url('/upload/'.$edit->course_image) }}" style="height: 110px; width: 110px; border-radius: 100%;">
        <br>
        <h2><label class="lead">Catagory</label></h2>
        <select class="form-control" name="course_catagory">
          <option>Select Catagory</option>
          @foreach($c as $s)
          <option value="{{$s->c_name}}"
            @if($edit->course_catagory=='{{$s->c_name}}')
            selected @endif>{{$s->c_name}}
          </option>
          @endforeach
        </select>
        <br><br>
        <input type="submit" class="btn btn-info" name="course_update" value="course_update" style="float: right;">
     </form>
     </div><!-- card header -->
   </div><!-- card -->
 </div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fulid -->

@endsection