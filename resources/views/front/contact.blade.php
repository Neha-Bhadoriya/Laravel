@extends("front.master")
@section("title","Display | Course")
@section("content")

		<!-- map section -->
		<div id="map"></div>
		<!-- end map section -->

		<!-- contact-section 
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="contact-box">
					@foreach($a as $s)
					<h1>{{$s->title}}</h1>
					<p>{{$s->description}}</p>
					@endforeach
					<form id="contact-form" method="post" action="{{url('front/contactsave')}}">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<label for="name" >Your Name (required)</label>
								<input name="name" id="name" type="text">
							</div>
							<div class="col-md-6">
								<label for="mail">Your Email (required)</label>
								<input name="email" id="mail" type="text">
							</div>
						</div>
						<label for="tel-number">Your Phone Number</label>
						<input name="phone" id="tel-number" type="text">
						<label for="comment">Your Message (required)</label>
						<textarea name="message" id="comment"></textarea>
						<input type="submit" name="submit" value="submit" class="btn btn-danger">
						<div id="msg" class="message"></div>
					</form>
				</div>
			</div>
		</section>
		<!-- End contact section -->

		<!-- contact-info-section 
			================================================== -->
		<section class="contact-info-section">
			<div class="container">
				<div class="contact-info-box">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="info-post">
								<div class="icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="info-content">
									<p>
										Tel: +1 (420) 899 4400 <br>
										E-Mail: <a href="#">hello@codebean.co</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="info-post">
								<div class="icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="info-content">
									<p>
										6100 Wilshire Blvd 2nd Floor Los <br>
										Angeles CA
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="info-post">
								<div class="icon">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="info-content">
									<p>
										Our office is open:<br>
										Mon to Fri from 8am to 6pm
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End contact-info section -->
@endsection