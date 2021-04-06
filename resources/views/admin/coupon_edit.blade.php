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
      <form action="{{url('admin/coupon_update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$edit->id}}">
          <br>
        <h2><label class="lead">Coupon Code</label></h2>
        <input type="text" name="coupon_code" class="form-control" placeholder="Enter Coupon Code" 
        value="{{$edit->coupon_code}}">

         <h2><label class="lead">Amount</label></h2>
        <input type="text" name="amount" class="form-control" placeholder="Enter Amount" 
        value="{{$edit->amount}}">

         <h2><label class="lead">Amount Type</label></h2>
       <select class="form-control" name="amount_type"  >
                        <option>Select Amount Type</option>
                        <option value="percentage" 
                      @if($edit->amount_type=='percentage') selected @endif>percentage
                       </option>
                       <option value="fixed"@if($edit->amount_type=='fixed') selected @endif>fixed
                       </option>
                    </select><br>


       <h2><label class="lead"> Expiry Date</label></h2>
         <input class="form-control" type="date" name="expiry_date" placeholder="Enter Expiry Date"  value="{{$edit->expiry_date}}"><br>

        <input type="submit" class="btn btn-info" name="coupon_update" value="coupon_update" style="float: right;">
     </form>
     </div><!-- card header -->
   </div><!-- card -->
 </div><!-- col-md-12 -->
</div><!-- row -->
</div><!-- container-fulid -->

@endsection