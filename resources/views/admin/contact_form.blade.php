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
     
    
      
     <br><br>

<table class="table table-bordered">
<tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Messsage</th>
        <th>Action</th>
</tr>
<?php $i=1;?>
@foreach($a as $s)
<tr class="text-secondary">
  <td>{{$i}}</td>
  <td>{{$s->name}}</td>
  <td>{{$s->phone}}</td>
  <td>{{$s->email}}</td>
  <td>{{$s->message}}</td>
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


@endsection