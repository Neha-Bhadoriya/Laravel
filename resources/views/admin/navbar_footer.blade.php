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

      <div class="card shadow">
      <div class="card-body" >
      <div class="card-tools">
      <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Navbar/Footer</a>
     </div>
     <br><br>

<table class="table table-bordered">
<tr>
        <th>S.No.</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Logo</th>
        <th>Description</th>
        <th>Address</th>
        <th>Action</th>
</tr>
<?php $i=1;?>
@foreach($d as $s)
<tr class="text-secondary">
  <td>{{$i}}</td>
  <td>{{$s->number}}</td>
  <td>{{$s->email}}</td>
  <td><img src="{{ url('/logo/'.$s->logo) }}" style="height: 110px; width: 110px; border-radius: 100%;"></td>
  <td>{{$s->description}}</td>
  <td>{{$s->address}}</td>
  <td>
    <button class="btn btn-primary btn-sm"><a class="text-white" href="{{url('admin/nav_edit/'.$s->id)}}">Edit</a></button>
    
    <button class="btn btn-danger btn-sm"><a class="text-white"href="{{url('admin/nav_delete/'.$s->id)}}">Delete</a></button>
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
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Navbar/Footer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      <form action="{{url('admin/navbar_footer_save')}}" method="post" enctype="multipart/form-data">
          @csrf
         
        <h2><label class="lead">Phone Number</label></h2>
        <input type="text" name="number" class="form-control" placeholder="Enter Phone Number">

        <h2><label class="lead">Email</label></h2>
       <input class="form-control" name="email" placeholder="Enter Email">

        <h2><label class="lead">logo</label></h2>
        <input type="file" name="logo" class="form-control">
         
         <h2><label class="lead">Description</label></h2>
       <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>

       <h2><label class="lead">Address</label></h2>
       <input class="form-control" name="address" placeholder="Enter Address">


        <br>
        <input type="submit" class="btn btn-info" name="Add Navbar/Footer" value="Add Navbar/Footer" style="float: right;">
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