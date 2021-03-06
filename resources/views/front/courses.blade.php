@extends("front.master")

@section("content")
		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Courses</h1>
				<ul class="page-depth">
					<li><a href="index.html">Home</a></li>
					<li><a href="courses.html">Courses</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- courses-section 
			================================================== -->
<section class="courses-section">
	<div class="container">
	   <div class="row">
<div class="col-lg-8">
<div class="courses-top-bar">
<div class="courses-view">
<a href="courses.html" class="grid-btn active">
<i class="fa fa-th-large" aria-hidden="true"></i>
</a>
<a href="courses-list.html" class="grid-btn">
<i class="fa fa-bars" aria-hidden="true"></i>
</a>
<span>Showing all 4 results</span>
</div>
<form class="search-course">
<input type="search" name="search" id="search_course" placeholder="Search Courses..." />
<button type="submit">
<i class="material-icons">search</i>
</button>
</form>
</div>

<div class="row">
@foreach($c as $r)
 <div class="col-lg-4 col-md-6 col-sm-6">
<div class="course-post">
<div class="course-thumbnail-holder">
<a href="{{url('course_details/'.$r->id)}}">
<img src="{{ url('/upload/'.$r->course_image) }}" style="">
</a>
</div>
<div class="course-content-holder">
<div class="course-content-main">
<h2 class="course-title">
<a href="{{url('course_details/'.$r->id)}}">
	{{$r->course_name}}</a>
</h2>
<div class="course-rating-teacher">
<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
<span style="width:100%">

</span>
</div>
<a href="{{url('course_details/'.$r->id)}}" class="course-loop-teacher">{{$r->course_description}}</a>
</div>
</div>
<div class="course-content-bottom">
<div class="course-students">

</div>
<div class="course-price">
<span>{{$r->course_price}}</span>
</div>
</div>
</div>
</div></div>
@endforeach
</div>
					
	</div>
<div class="col-lg-4">

<div class="sidebar">
<div class="category-widget widget">
<h2>Product categories</h2>
	@foreach($j as $e)
<ul class="category-list">
<li><a href="#">{{$e->c_name}}</a>
</li>
@endforeach
</ul>
</div>
<div class="products-widget widget">
<h2>Products</h2>
	@foreach($c as $r)
<ul class="products-list">

<li>

<a href="{{url('course_details/'.$r->id)}}">
<img src="{{ url('/upload/'.$r->course_image) }}" style=""></a>
<div class="list-content">
<h3><a href="{{url('course_details/'.$r->id)}}">	
	{{$r->course_name}}</a>
</h3>
<span>{{$r->course_price}}</span>
</div>
</li>
@endforeach	
</ul>		
	</div></div></div></div></div>
</section>
		<!-- End courses section -->
@endsection