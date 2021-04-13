<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckOut;
use App\Navbar;
use App\Cart;
use App\CourseOrder;
use Auth;
use App\CourseOrderProduct;
use DB;
class CheckOutController extends Controller
{
    public function checkout()
    {
    	if(Auth::check())
    	{
    		$user_email=Auth::User()->email;
    	
    	$cart=Cart::where('user_email',$user_email)->get();
    }
    	 $u= Navbar::all();
         	return view('front.checkout',compact('u','cart'));
    }


    public function ordersave(Request $a)
    {
    	$t=new CourseOrder;
    	$t->user_id=$a->user_id;
    	$t->user_email=$a->email;
    	$t->name=$a->name;
    	$t->country=$a->country;
    	$t->address=$a->address;
    	$t->city=$a->city;
    	$t->state=$a->state;
    	$t->pincode=$a->pincode;
    	$t->phone=$a->phone;
    	$t->order_notes=$a->order_notes;
    	$t->order_status=$a->order_status;
    	$t->payment_method=$a->payment_method;
    	$t->coupon_code=$a->coupon_code;
    	$t->coupon_amount=$a->coupon_amount;
    	$t->total=$a->total;
    	$t->save();
    	$order_id=DB::getPdo()->lastinsertID();
// print_r($order_id);
// die;
$cartproduct=DB::table('carts')->where(['user_email'=>$a->email])->get();
  	// print_r($cartproduct);
   //  	die;
       foreach ($cartproduct as $c ) {
    	$cp=new CourseOrderProduct;
    	$cp->course_order_id=$order_id;
    	$cp->user_id=$a->user_id;
    	$cp->course_id=$c->course_id;
    	$cp->course_name=$c->course_name;
    	$cp->image=$c->image;
    	$cp->course_price=$c->course_price;
    	$cp->course_quantity=$c->course_quantity;
    	$cp->save();
    
    }
    // print_r($cartproduct);


    	if($t)
    	{
    		return redirect('front/thanks');
    	}



    }

public function thanks()
{
    $u=Navbar::all();
    $user_email=Auth::user()->email;
    DB::tanh('carts')->where('user_email',$user_email)->delete();
return view('front/thanks',compact('u'));
}

}
