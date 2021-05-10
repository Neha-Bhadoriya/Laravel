@extends("front.master")
@section("content")
@if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>
		     	
		@endif
		 <!-- Table row -->
		 <!-- info row -->
		 <br>
		 <div class="container">
		 <cener><p class="lead text-info">Hello {{Auth::user()->name}},<br><br> Your Full Profile With Account Details Here..... <br>You can also <b class="text-success lead">Update Your Password</b><br> As Well As <b class="text-danger lead">Cancel The Course Order Details....</b></p></div></cener>
		 <br>
<center><h1>User Profile Details</h1></center>
		 <div class="container bg-light">
          <div class="row">
               <div class="col-md-4 invoice-col">
               <br>
              
                  @foreach($corder as $a)
                  
                  <address>
                    <strong>Name:</strong><br>{{$a->name}}<br>
                   <strong> Phone:</strong><br> {{$a->phone}}
                   <br>
                    <strong>Email:</strong><br> {{$a->user_email}}
                </div>
                <div class="col-md-4 ">
                <br>
                   <strong>Address:</strong><br>{{$a->address}}
                   <br>
                    <strong>City:</strong><br>{{$a->city}}  
                    <br>  
                    <strong>Country:</strong><br>{{$a->state}}
                    <br>
                    </div>
                  </address>
                 
                  @endforeach
                </div> </div>
                  
		 <br><br>
		 <center>
              	<h1>Your Course Order Details</h1>
              </center>
		 <div class="container">
              <div class="row">

                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>S.No.#</th>
                      <th>Username</th>
                      <th>Course Name</th>
                      <th>Course Qty</th>
                      <th>Course Price</th>
                      <th>Course Image</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1;?>
                    	<?php $total_amount=0;?>
@foreach($cart as $c)
<td>{{$i}}</td>
<td>{{Auth::user()->name}}</td>
<td >{{$c->course_name}}</td>
<td> {{$c->course_quantity}}</td>
<td>{{$c->course_price}}</td>
<td><img src="{{ url('/upload/'.$c->image) }}" style="height: 110px; width: 110px; border-radius: 100%;"></td>
<?php $total_amount=$total_amount+($c->course_price*$c->course_quantity);?>
<td>{{$c->course_price*$c->course_quantity}}</td>
</tr>
<?php $i++;?>

    
	@endforeach

</tr></tbody></table></div></div></div>
		<center>
			<br>
			
	<p>You Can Reset Your Password</p>

  
		<button><a href="{{url('front/resetpass')}}" class="btn btn-success">Reset Password</a></button>
		
		<br><br>
	<p>You Can Cancel your Order</p>
		<button><a href="" class="btn btn-danger">Cancel Order</a></button>
	</center>
	<br><br>
	
		@endsection