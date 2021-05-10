@extends("front.master")
@section("content")
<div class="container">
<br><br>

<form action="{{url('front/password')}}" method="post">
	@csrf
	@if(session('error'))
	<div>
	{{session('error')}}
</div>
	@endif

	@csrf
	@if(session('success'))
	<div>
	{{session('success')}}
</div>
	@endif
	<input type="email" name="email">
	<input type="submit" class="btn btn-info" name="submit" value="submit">

</form>
</div>
<br>
@endsection