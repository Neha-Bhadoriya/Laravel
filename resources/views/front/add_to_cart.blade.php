@extends("front.master")
@section("content")
@if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>
		     	
		@endif
<section class="page-banner-section">
			<div class="container">
				<h1>Cart</h1>
				<ul class="page-depth">
					<li><a href="index.html">Studiare</a></li>
					<li><a href="cart.html">Cart</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- cart-section 
			================================================== -->
		<section class="cart-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="cart-box">
							<table class="shop_table table-responsive">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
<?php $total_amount=0;?>
@foreach($cart as $c)
										<td class="product-remove">
											<a href="#" class="remove">×</a>
										</td>

								<td class="product-thumbnail">

								<a href="#"><img src="{{url('/upload/'.$c->image)}}" alt=""></a>
										</td>
										<td class="product-name">
											<a href="#">{{$c->course_name}}</a>
										</td>
										<td class="product-price">
											{{$c->course_price}}
										</td>
<td class="product-quantity">
<a href="{{url('cart/quantity_update/'.$c->id.'/1')}}">+</a>
<input type="text" name="course_quantity" value="{{$c->course_quantity}}">
<a href="{{url('cart/quantity_update/'.$c->id.'/-1')}}">-</a>
										</td>
										<td class="product-subtotal">{{$c->course_price*$c->course_quantity}}</td>
<?php $total_amount=$total_amount+($c->course_price*$c->course_quantity);?>
									</tr>
						@endforeach
									<form method="post" action="{{url('front/cart/apply-coupan')}}">
									@csrf
									<tr class="coupon-line"> 
										<td colspan="6" class="actions">
											<input type="text" name="coupan_code" placeholder="Coupon code">
											<button type="submit">Apply Coupon</button>
										</td>
									</tr>
									</form>
								</tbody>
							</table>
						</div>
					</div>
<div class="col-lg-4">
	<div class="sidebar">
	<div class="widget cart-widget">
<h2>Cart Totals</h2>
	<table>
@if(!empty(Session::get('coupanAmount')))
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><?php echo $total_amount; ?></td>
										</tr>
										<tr class="cart-subtotal">
											<th>Coupan Discount</th>
											<td><?php echo Session::get('coupanAmount'); ?></td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td><?php echo $total_amount - Session::get('coupanAmount'); ?></td>
										</tr>
								    </tbody>
								    @else
								    <tbody>
								        <tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><?php echo $total_amount; ?></td>
										</tr>
								        <tr class="order-total">
											<th>Total</th>
											<td><?php echo $total_amount; ?></td>
										</tr>
									</tbody>
									@endif
</table>

<!-- <a href="{{url('front/checkout')}}" class="checkout-button">Proceed to checkout</a> -->

@if(Auth::check())
<a href="{{url('front/checkout')}}" class="checkout-button">Proceed to checkout</a>
@else
<a href="{{url('front/login')}}" class="checkout-button">Proceed to checkout</a>
	
@endif
	
</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End cart section -->
		@endsection