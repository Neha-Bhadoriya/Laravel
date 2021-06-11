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
	@if(session('message'))

         <p class ="alert alert-danger">
          {{session('message')}}
         </p>
          
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
   </ul>
   </div>
   @endif

   <input type="hidden" name="role" value="1">
Email
<div class="form-group">
<input type="email" name="email" class="form-control">
<div class="form-group">
password
<input type="password" name="password" class="form-control">
<br>
<input type="submit" class="btn btn-info" name="Login" value="Login">
<a href="{{ route('password.update') }}" class="btn btn-info">Forgot Password</a>
<a href="{{url('front/signup')}}" class="btn btn-info">Create an Account</a>

<!-- <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block"><strong>Login With Google</strong></a> -->

<a href="{{ url('auth/google') }}" class="btn btn-info">Login With Google</a>


</div>
</div>
</div>
</div>
</div>

</div>
</div>
</form>
@endsection