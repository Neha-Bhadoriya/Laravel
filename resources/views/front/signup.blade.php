@extends("front.master")

@section("content")
<div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
   </ul>
   </div>
   @endif

<div class="card shadow" style="position: relative;
    left: 316px;">
	<div class="card-body">
<form action="{{url('front/signupsave')}}" method="post">
	@csrf
	
	@if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>
		     	
		@endif
	Name
	<div class="form-group">
<input type="text" name="name" class="form-control">
Email
<div class="form-group">
<input type="email" name="email" class="form-control">
password
<div class="form-group">
<input type="password" name="password" class="form-control">
<br>
<input type="submit" name="Signup" value="Signup" class="btn btn-primary">
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</form>
@endsection