<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckOut;
use App\Navbar;
class CheckOutController extends Controller
{
    public function checkout()
    {
    	 $u= Navbar::all();
         $c= CheckOut::all();
      return view('front.checkout',compact('u','c'));
    }
}
