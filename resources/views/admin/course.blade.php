@extends("admin.master")
@section("title","Display | Course")
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

      <div class="card shadow">
      <div class="card-body" >
      <div class="card-tools">
      <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Course</a>
     </div>
     <br><br>

<table class="table table-bordered">
<tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Detail</th>
        <th>Includes</th>
        <th>Content</th>
        <th>Image</th>
        <th>Catagory</th>
        <th>Action</th>
</tr>
<?php $i=1;?>
@foreach($u as $s)
<tr class="text-secondary">
  <td>{{$i}}</td>
  <td>{{$s->course_name}}</td>
  <td>{{$s->course_description}}</td>
  <td>{{$s->course_price}}</td>
  <td>{{$s->course_detail}}</td>
   <td>{{$s->course_includes}}</td>
  <td>{{$s->course_content}}</td>
  <td><img src="{{ url('/upload/'.$s->course_image) }}" style="height: 110px; width: 110px; border-radius: 100%;"></td>
  <td>{{$s->course_catagory}}</td>
  <td>
    <button class="btn btn-success btn-sm"><a class="text-white"href="{{url('admin/show/'.$s->id)}}">Show</a></button>

    <button class="btn btn-primary btn-sm"><a class="text-white" href="{{url('admin/course_edit/'.$s->id)}}">Edit</a></button>
    
    <button class="btn btn-danger btn-sm"><a class="text-white"href="{{url('admin/course_delete/'.$s->id)}}">Delete</a></button>
  </td>
</tr>
<?php $i++;?>
@endforeach
</table>
</div><!-- card tools -->
</div><!-- card-body -->
</div><!-- card shadow -->
</div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fluid -->

<!-- <modal form> -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      <form action="{{url('admin/insert')}}" method="post" enctype="multipart/form-data">
          @csrf
          <br>
        <h2><label class="lead">Course Name</label></h2>
        <input type="text" name="course_name" class="form-control" placeholder="Enter Course Name">

        <h2><label class="lead">Course Description</label></h2>
        <textarea class="form-control" name="course_description" placeholder="Enter Course Description"></textarea>

        <h2><label class="lead">Course Price</label></h2>
        <input class="form-control" type="text" name="course_price" placeholder="Enter Course Price">

        <h2><label class="lead">Course Detail</label></h2>
        <textarea class="form-control" name="course_detail" placeholder="Enter Course Detail"></textarea>

        <h2><label class="lead">Course Includes</label></h2>
        <textarea class="form-control" name="course_includes" placeholder="Enter Course Includes"></textarea>

        <h2><label class="lead">Course Content</label></h2>
        <textarea class="form-control" name="course_content" placeholder="Enter Course Content"></textarea>

        <h2><label class="lead">course_image</label></h2>
        <input class="form-control" type="file" name="course_image">

        <h2><label class="lead">Catagory</label></h2>
        <select class="form-control" name="course_catagory">
          <option>Select Catagory</option>
          @foreach($d as $s)
          <option>{{$s->c_name}}</option>
          @endforeach
          
        </select>
        <br>
        <input type="submit" class="btn btn-info" name="Add Course" value="Add Course" style="float: right;">
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