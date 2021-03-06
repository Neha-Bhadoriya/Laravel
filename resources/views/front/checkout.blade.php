@extends("front.master")
@section("content")
	<!-- page-banner-section 
			================================================== -->
			@if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>
		     	
		@endif
		<section class="page-banner-section">
			<div class="container">
				<h1>Checkout</h1>
				<ul class="page-depth">
					<li><a href="index.html">Studiare</a></li>
					<li><a href="checkout.html">Checkout</a></li>
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
							<h2>Billing details</h2>
<form class="billing-details" method="post" action="{{url('front/ordersave')}}">
	@csrf
						
<div class="row">
<div class="col-lg-6">
<label for="first-name">Name*</label>
<input  name="name" type="text" id="first-name" / value="{{Auth::user()->name }}">
</div>
</div>
								
<label for="country">Country*</label>
<select id="country" name="country">
<option>Country...</option>
<option value="Albania">Albania</option>
<option value="USA">USA</option>									
									<option value="Canada">Canada</option>
									<option value="Brazil">Brazil</option>
									<option value="Germany">Germany</option>
									<option value="England">England</option>
									<option value="France">France</option>
									<option value="Italy">Italy</option>
									<option value="Australia">Australia</option>
</select>								
								<label for="street-name">Address *</label>
								<input type="text" id="street-name"  name="address" placeholder="House number and street name" />
								
								<label for="city-name">Town / City*</label>
								<input type="text" id="city-name" name="city" />
								<label for="state-name">State*</label>
								<input type="text" id="state-name" / name="state">
								<label for="postcode-name">Postcode / Zip*</label>
								<input type="text" id="postcode-name" / name="pincode">
								<label for="phone-name">Phone*</label>
								<input type="text" id="phone-name" / name="phone">
								<label for="email-address">Email Address*</label>
								<input type="text" id="email-address" / name="email" value="{{Auth::user()->email }}">
								<input type="hidden" name="user_id" value="{{Auth::user()->id}}">

								
								<h2>Payment Methods</h2>

<input class="cod" type="radio" name="payment_method" value="cod">CASH on Delivery
<br>
<input class="Paytm" type="radio" name="payment_method" value="Paytm">Paytm
<br>
<input class="Paypal" type="radio" name="payment_method" value="Paypal">Paypal
<br>
<input class="GooglePay" type="radio" name="payment_method" value="GooglePay">GooglePay
<br>
<input class="Phonepay" type="radio" name="payment_method" value="Phonepay">Phonepay
								
							
						</div>
					</div>								
					<div class="col-lg-4">
						<div class="sidebar">
							<div class="widget cart-widget">
								<h2>Your order</h2>
								<table>
									<tbody>
	<tr>

											<td>Product</td>
											<td>Total</td>
										</tr>
	<?php $total_amount=0;?>									
										<tr>
@foreach($cart as $c)

<td class="name-pro">{{$c->course_name}}
x {{$c->course_quantity}}</td>
<?php $total_amount=$total_amount+($c->course_price*$c->course_quantity);?>
<td>{{$c->course_price*$c->course_quantity}}</td>
</tr>
@endforeach
@if(!empty(Session::get('coupanAmount')))
					                      <tr class="order-total">
											<th>Subtotal</th>
											<td><?php echo $total_amount; ?></td>
										</tr>
										<tr class="order-total">
											<th>Coupan Discount</th>
											<td><?php echo Session::get('coupanAmount'); ?></td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td class="total-price"><?php echo $total_amount - Session::get('coupanAmount'); ?>
											<input type="hidden" name="total" value="<?php echo $total_amount - Session::get('coupanAmount'); ?>" />
											<input type="hidden" name="coupon_amount" value="<?php echo Session::get('coupanAmount'); ?>" />
											<input type="hidden" name="coupon_code" value="<?php echo Session::get('coupanCode'); ?>" />
											</td>
										</tr>
@else
										<tr class="order-total">
											<th>Subtotal</th>
											<td><?php echo $total_amount; ?></td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td class="total-price"><?php echo $total_amount; ?>
											<input type="hidden" name="total" value="<?php echo $total_amount; ?>" />
											</td>
										</tr>
@endif</tbody></table>
<!-- <a href="#" class="checkout-button">Proceed to complete</a> -->
<input type="submit" name="submit" value="Proceed to complete" class="btn btn-warning" onclick="return selectpayment_method();">


</div>
</div>
</div>
				</div>
				</form>
			</div>
		</section>
		<!-- End cart section -->
@endsection