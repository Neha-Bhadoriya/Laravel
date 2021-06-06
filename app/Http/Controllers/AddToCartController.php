<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Banner;
use App\Navbar;
use App\Courses;
use App\Catagory;
use App\Bottom;
use App\User;
use Session;
use DB;
use Auth;
class AddToCartController extends Controller
{
    public function add_to_cart(Request $a)
    {
      Session::forget('coupanAmount');
        Session::forget('coupanCode');
    	// echo "neha";
    	//print_r($a->all());
      if(Auth::check())
      {
$session_id=Session::getId();
// print_r($session_id);
// die;
$session_id=Session::getId();
$user_email=Auth::User()->email;
    	$r=new Cart;
    	$r->course_id=$a->course_id;
    	$r->course_name=$a->course_name;
    	$r->course_price=$a->course_price;
    	$r->image=$a->course_image;
      $r->session_id=$session_id;
    	$r->save();
      
    	if($r)
    	{
    		return redirect('cart');//route name
    	}
    }
    else
    {
      $session_id=Session::getId();
// print_r($session_id);
// die;

      $r=new Cart;
      $r->course_id=$a->course_id;
      // print_r($r);
      // die;
      $r->course_name=$a->course_name;
      $r->course_price=$a->course_price;
      $r->image=$a->course_image;
      $r->session_id=$session_id;
      $r->save();
      // print_r($r);
      // die;
      if($r)
      {
        return redirect('cart');//route name
      }
    }
  }
  public function cart()
  {
$session_id=Session::getId();
// print_r($session_id);
// die;
  	  $u= Navbar::all();

  	  //$cart=Cart::where('session_id',$session_id)->get();
      // $user_email=Auth::User()->email;
      // print_r($user_email);
      // die;

      if(Auth::check())
      {
       $user_email=Auth::User()->email; 
       $cart=Cart::where('user_email',$user_email)->get();
      }
      else{
        $session_id=Session::getId();
      $cart=Cart::where('session_id',$session_id)->get();
      // print_r($cart);
      // die;
    }
  	return view('front/add_to_cart',compact('u','cart'));
  }

  public function quantity_update($id=null,$course_quantity=null)
  {
    Session::forget('coupanAmount');
        Session::forget('coupanCode');
    // echo $id;
    // echo $course_quantity;
    DB::table('carts')->where('id',$id)->increment('course_quantity',$course_quantity);
    return redirect('cart')->with('message','Product Quantity has been added');

  }
}
