@extends("front.master")

@section("content")
		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Teachers</h1>
				<ul class="page-depth">
					<li><a href="index.html">Studiare</a></li>
					<li><a href="teachers.html">Teachers</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- teachers-section 
			================================================== -->
		<section class="teachers-section">
			<div class="container">

				<div class="teachers-box">
					@foreach($m as $c)
					<div class="row">
						
						<div class="col-lg-3 col-md-6">
							<div class="teacher-post">
								<a href="#">
			<img src="{{ url('/team/'.$c->team_image) }}" style=" width: 100%; ">
								<div class="hover-post">
									<h2>{{$c->name}}</h2>
										<span>{{$c->description}}

										</span>
</div>
</a>
</div>

</div>

</div>
@endforeach
</div>
</div>
</section>

							
							

							
		

		<!-- End teachers section -->
@endsection