@extends("admin.master")
@section("title","Display | order")
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
      <div class="card-body" style="overflow-x: scroll;">
      <div class="card-tools">
      
     </div>
     <br><br>

<table class="table table-bordered">
  <tr>
<tr>
        <th>S.No.</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Address</th>
        <th>User City</th>
        <th>User Pincode</th>
        <th>User Phone</th>
        <th>Course Name</th>
        <th>Course Price</th>
        <th>Course Quantity</th>
        <th>Course Image</th>
        <th>Action</th>
</tr>
<?php $i=1;?>
@foreach($users as $s)
<tr class="text-secondary">
  <td>{{$i}}</td>
  <td>{{$s->name}}</td>
  <td>{{$s->user_email}}</td>
  <td>{{$s->address}}</td>
  <td>{{$s->city}}</td>
  <td>{{$s->pincode}}</td>
  <td>{{$s->phone}}</td>
  <td>{{$s->course_name}}</td>
  <td>{{$s->course_price}}</td>
  <td>{{$s->course_quantity}}</td>
  <td>
    <img src="{{ url('/upload/'.$s->image) }}" style="height: 110px; width: 110px; border-radius: 100%;">
  </td>
<td>
  <button class="btn btn-danger btn-sm"><a class="text-white" href="{{url('admin/invoice/' .$s->id)}}">Invoice</a></button>
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

    
  <!-- /.content-wrapper -->
@endsection