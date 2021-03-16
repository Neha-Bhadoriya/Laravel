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
class AddToCartController extends Controller
{
    public function add_to_cart(Request $a)
    {
    	// echo "neha";
    	//print_r($a->all());

    	$r=new Cart;
    	$r->course_id=$a->course_id;
    	$r->course_name=$a->course_name;
    	$r->course_price=$a->course_price;
    	$r->image=$a->course_image;
    	$r->save();
    	if($r)
    	{
    		return redirect('cart');//route name
    	}
    }
  public function cart()
  {

  	  $u= Navbar::all();
  	  $cart=Cart::all();
  	return view('front.add_to_cart',compact('u','cart'));
  }
}
