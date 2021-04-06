@extends("front.master")

@section("content")

<div class="modal fade" id="mymodel" 
style="padding-right: 17px;
    display: block;
    position: absolute;
    top: 157px;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info lg">
        <h5 class="modal-title" >Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
      	@foreach($f as $s)
        
        
			    <h3 class="lead" style="font-style: oblique;"><img src="https://www.rgpv.ac.in/Images/new_icon_blink.gif">&nbsp;&nbsp;{{$s->message}}</h3>
			

		@endforeach

      </div>
    </div>
  </div>
</div>

<!-- home-section 
			================================================== -->
		<section id="home-section">
			<div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1" style="background-color:#000000;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
				<div id="rev_slider_202_1" class="rev_slider" data-version="5.1.1RC">
					<ul>
						<!-- SLIDE  -->
			@foreach($d as $s)
	<li data-index="rs-672" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="upload/slider/slider-image-1.jpg" data-rotate="0" data-saveperformance="off" data-title="unique" data-description="">
							<!-- MAIN IMAGE -->
	<img src="{{url('/banner/'.$s->banner_image)}}" style="height: 110px; width: 110px; border-radius: 100%;" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
   <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
	id="slide-672-layer-1" 
    data-x="['left','left','left','left']" 
	data-hoffset="['0','0','0','0']" 
	data-y="['top','top','top','top']" 
	data-voffset="['130','130','130','130']" 
	data-width="['530','530','430','420']" 
	data-height="330" 
	data-whitespace="nowrap" 
	data-transform_idle="o:1;" 
	data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
	data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
	data-start="500" 
	data-responsive_offset="on" 
	style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
	</div>

	<!-- LAYER NR. 2 -->
	<div class="tp-caption Woo-TitleLarge tp-resizeme" 
	id="slide-672-layer-2" 
	data-x="['left','left','left','left']" 
	data-hoffset="['40','40','40','35']" 
    data-y="['top','top','top','top']" 
	data-voffset="['170','170','170','170']" 
	data-width="450" 
	data-height="none" 
	data-whitespace="normal" 
	data-transform_idle="o:1;" 
	data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
	data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
	data-start="700" 
	data-splitin="none" 
	data-splitout="none"							 
	data-responsive_offset="on" 
	style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">{{$s->banner_title}}
	</div>

   <!-- LAYER NR. 3 -->
   <div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
	id="slide-672-layer-3" 
	data-x="['left','left','left','left']" 
	data-hoffset="['0','0','0','0']" 
    data-y="['top','top','top','top']" 
	data-voffset="['165','165','165','165']" 
	data-width="['3','3','3','3']" 
	data-height="100" 
	data-whitespace="nowrap" 
	data-transform_idle="o:1;" 
	data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
	data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
	data-start="700" 
	data-responsive_offset="on" 
	style="z-index: 6;">
	</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption Woo-Rating tp-resizeme" 
								id="slide-672-layer-4" 
								data-x="['left','left','left','left']" 
								data-hoffset="['40','40','40','35']" 
								data-y="['top','top','top','top']" 
								data-voffset="['286','286','286','286']" 
								data-width="450" 
								data-height="none" 
								data-whitespace="normal" 
								data-transform_idle="o:1;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="800" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
								{{$s->banner_description}}
							</div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption tp-resizeme"
								id="slide-672-layer-5" 
								data-x="['left','left','left','left']" 
								data-hoffset="['407','407','407','407']" 
								data-y="['top','top','top','top']" 
								data-voffset="['337','337','337','337']" 
								data-width="120" 
								data-height="none" 
								data-whitespace="normal" 
								data-transform_idle="o:1;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1100" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								style="z-index: 10; min-width: 100px; max-width: 100px; white-space: normal; text-align:center;">
								
							</div>

							<!-- LAYER NR. 6 -->
							<a class="tp-caption Woo-ProductInfo rev-btn tp-resizeme" 
								href="http://server.local/revslider/product/premium-computer-hardware/" 
								target="_self" 
								id="slide-672-layer-6" 
								data-x="['left','left','left','left']" 
								data-hoffset="['40','40','40','35']" 
								data-y="['top','top','top','top']" 
								data-voffset="['370','370','370','370']" 
								data-width="none" 
								data-height="none" 
								data-whitespace="nowrap" 
								data-transform_idle="o:1;" 
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;" 
								data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1100" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions='' 
								data-responsive_offset="on">
								Learn More
							</a>


	@endforeach
						</li>
						<!-- SLIDE  -->
					

					</ul>


					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>

			</div>
			<!-- END REVOLUTION SLIDER -->

		</section>

		<!-- End home section -->

		<!-- feature-section 
			================================================== -->
		<section class="feature-section">
			<div class="container">
				<div class="feature-box">
					<div class="row">
						@foreach($k as $g)
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder">
									<img src="{{ url('/icon/'.$g->icon) }}" style="height: 110px; width: 110px; border-radius: 100%;">
								</div>
								<div class="feature-content">
									<h2>
										{{$g->title}}
									</h2>
									<p>{{$g->description}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- End feature section -->

		<!-- collection-section 
			================================================== -->
		<section class="collection-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Categories</span>
						<h1>Trending Collection</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Courses</a>
					</div>
				</div>
				<!--  -->
				<div class="collection-box">
					<div class="row">
						<?php $i=1; ?>
						@foreach ($j as $t)
							@if($i==1)
							<div class="col-lg-6 col-md-12">
								<div class="collection-post">
									<div class="inner-collection">
										<img src="{{ url('/catagory/'.$t->c_image) }}"  alt="" >
										<a href="{{url('front/course_catagory/'.$t->id)}}" class="hover-post" >
											<span class="title">{{$t->c_name}}</span>
											<span class="numb-courses">3 Courses</span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
							@elseif($i==2)
								<div class="collection-post">
									<div class="inner-collection">
										<img src="{{ url('/catagory/'.$t->c_image) }}" style="    height: 140px;" alt="">
										<a href="{{url('front/course_catagory/'.$t->id)}}" class="hover-post">
											<span class="title">{{$t->c_name}}</span>
											<span class="numb-courses">2 Courses</span>
										</a>
									</div>
								</div>
							@elseif($i==3)
								<div class="collection-post">
									<div class="inner-collection">
										<img src="{{ url('/catagory/'.$t->c_image) }}"  style="    height: 140px;" alt="">
										<a href="{{url('front/course_catagory/'.$t->id)}}" class="hover-post">
											<span class="title">{{$t->c_name}}</span>
											<span class="numb-courses">3 Courses</span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
							@elseif($i==4)
								<div class="collection-post">
									<div class="inner-collection">
										<img src="{{ url('/catagory/'.$t->c_image) }}" style="    height: 140px;" alt="">
										<a href="{{url('front/course_catagory/'.$t->id)}}" class="hover-post">
											<span class="title">{{$t->c_name}}</span>
											<span class="numb-courses">3 Courses</span>
										</a>
									</div>
								</div>
							@elseif($i==5)
								<div class="collection-post">
									<div class="inner-collection">
										<img src="{{ url('/catagory/'.$t->c_image) }}" style="    height: 140px;" alt="">
										<a href="{{url('front/course_catagory/'.$t->id)}}" class="hover-post">
											<span class="title">{{$t->c_name}}</span>
											<span class="numb-courses">3 Courses</span>
										</a>
									</div>
								</div>
							</div>
							@endif
							<?php $i++; ?>
						@endforeach
					</div>
				</div>
				<!--  -->
			</div>
		</section>
		<!-- End collection section -->

	<hr>
		<!-- popular-courses-section 
			================================================== -->
		<section class="popular-courses-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Education</span>
						<h1>Popular Courses</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Courses</a>
					</div>
				</div>
			
				<div class="popular-courses-box">
					<div class="row">
@foreach($c as $p)
						<div class="col-lg-3 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
<a href="{{url('course_details/'.$p->id)}}">
										<img src="{{ url('/upload/'.$p->course_image) }}" style=" width: 124%;height: 195px">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h2 class="course-title">
<a href="{{url('course_details/'.$p->id)}}" style="color: blue">{{$p->course_name}}</a>
				<hr>						</h2>
	{{$p->course_description}}
	<hr>
	<h2 class="text-danger" style="float: right;">Rs.{{$p->course_price}}</h2>									

										
									</div>
								</div>
							</div>

						</div>
@endforeach

					</div>
				</div>
		
				
			</div>

			
		</section>

		<!-- End popular-courses section -->

		<!-- events-section 
			================================================== -->
		

		<!-- news-section 
			================================================== -->
		

		<!-- testimonial-section 
			================================================== -->
		<section class="testimonial-section">
			<div class="container">
				<div class="testimonial-box owl-wrapper">
					
					<div class="owl-carousel" data-num="1">
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="uploadss/testimonials/testimonial-avatar-1.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="uploadss/testimonials/testimonial-avatar-2.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="uploadss/testimonials/testimonial-avatar-3.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="uploadss/testimonials/testimonial-avatar-4.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End testimonial section -->
@endsection