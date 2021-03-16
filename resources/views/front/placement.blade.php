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
					<div class="row">
						@foreach($p as $k)
						<div class="col-lg-3 col-md-6">
							<div class="teacher-post">
								<a href="#">
<img src="{{ url('/placement/'.$k->placement_image) }}" style=" width: 100%; "></a>
	<div class="hover-post">
		<h2>{{$k->name}}</h2>
	<span>{{$k->company_name}}</span>
										<span>{{$k->designation}}</span>
										
									</div>
								</a>
							</div>
						</div>
						
					</div>
					@endforeach
					</div>
				</div>	
			</div>
		</section>
		<!-- End teachers section -->
@endsection