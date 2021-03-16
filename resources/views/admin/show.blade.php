@extends("admin.master")
@section("title","Show | Course")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Show Courses</h1>
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
     <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
    <h1>SHOW</h1>
 <br>
<i><h2 class="text-secondary">Course Name:-{{$t->course_name}}</h2>
<h2 class="text-secondary">Course Description:-{{$t->course_description}}
</h2>
<h2 class="text-secondary">Course Price:-{{$t->course_price}}</h2>
<h2 class="text-secondary">Course Detail:-{{$t->course_detail}}</h2>
<h2 class="text-secondary">Course Includes:-{{$t->course_includes}}</h2>
<h2 class="text-secondary">Course Content:-{{$t->course_content}}</h2>
<h2 class="text-secondary">Course Image:-<img src="{{ url('/upload/'.$t->course_image) }}" style="height: 110px; width: 110px; border-radius: 100%;">
  <h2 class="text-secondary">Course Catagory:-{{$t->course_catagory}}</h2>
</h2>
</i>
</div>
</div>
</div>
</div>
</div>
</div>
  @endsection