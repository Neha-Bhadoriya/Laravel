@extends("front.master")

@section("content")

<div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
<div class="card shadow" style="position: relative;
    left: 316px;">
	<div class="card-body">
		
<form action="{{url('front/loginsave')}}" method="post">
	@csrf
	
Email
<div class="form-group">
<input type="email" name="email" class="form-control">
<div class="form-group">
password
<input type="password" name="password" class="form-control">
<br>
<input type="submit" name="Login" value="Login" class="btn btn-info">

</div>
</div>
</div>
</div>
</div>

</div>
</div>
</form>
@endsection