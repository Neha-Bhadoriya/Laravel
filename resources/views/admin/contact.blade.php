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
      <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Contact</a>
     </div>
     <br><br>

<table class="table table-bordered">
<tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Icon</th>
        <th>Telephone</th>
        <th>Company Email</th>
        <th>Company Address</th>
        <th>company Time</th>
        <th>Action</th>
</tr>
<?php $i=1;?>
@foreach($a as $s)
<tr class="text-secondary">
  <td>{{$i}}</td>
  <td>{{$s->title}}</td>
  <td>{{$s->description}}</td>
  <td><img src="{{ url('/contact/'.$s->icon) }}" style="height: 110px; width: 110px; border-radius: 100%;"></td>
  <td>{{$s->tel}}</td>
  <td>{{$s->ad_email}}</td>
  <td>{{$s->ad_address}}</td>
  <td>{{$s->open}}</td>
  <td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      <form action="{{url('admin/contact_save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <br>
        <h2><label class="lead">Title</label></h2>
        <input type="text" name="title" class="form-control" placeholder="Enter title">

        <h2><label class="lead"> Description</label></h2>
        <textarea class="form-control" name="description" placeholder="Enter Company Description"></textarea>

        <h2><label class="lead">icon</label></h2>
      <input class="form-control" type="file" name="icon">

<h2><label class="lead">Telephone</label></h2>
        <input type="text" name="tel" class="form-control" placeholder="Enter Telephone">

        <h2><label class="lead">Company Email</label></h2>
        <input class="form-control" name="ad_email" placeholder="Enter Company Email">

        <h2><label class="lead">Company Address</label></h2>
        <textarea class="form-control" name="ad_address" placeholder="Enter Company Address"></textarea>

        <h2><label class="lead">Company Time</label></h2>
     <input  class="form-control" name="open" type="text" placeholder="Enter start and end time">

        
        <br>
        <input type="submit" class="btn btn-info" name="Add Contact" value="Add contact" style="float: right;">
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