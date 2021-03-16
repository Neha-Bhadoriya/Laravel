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
      <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Catagory</a>
     </div>
     <br><br>

<table class="table table-bordered">
<tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
</tr>
<?php $i=1;?>
  @foreach($d as $s)
<tr class="text-secondary">
    <td>{{$i}}</td>
    <td>{{$s->c_name}}</td>
     <td><img src="{{ url('/catagory/'.$s->c_image) }}" style="height: 110px; width: 110px; border-radius: 100%;"></td>

    <td><input type="checkbox" name="status[]" value="1"  
        @if(strpos($s->status,'1')!== false)
        checked @endif>
    </td>
      
    <td>
    <button class="btn btn-primary btn-sm"><a class="text-white" href="{{url('admin/edit/'.$s->id)}}">Edit</a></button>
    
    <button class="btn btn-danger btn-sm"><a class="text-white"href="{{url('admin/delete/'.$s->id)}}">Delete</a></button>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Catagory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      <form action="{{url('admin/save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <br>
        <h2><label class="lead">Enter Catagory Name</label></h2>
        <input type="text" name="c_name" class="form-control" placeholder="Name">
        <h2><label class="lead">c_image</label></h2>
        <input type="file" name="c_image" class="form-control">
        <br>
        <input type="submit" class="btn btn-info" name="Add" value="Add" style="float: right;">
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