<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{  //class start


  // index
  public function index()
    {
    	return view('admin.index');
    }

} //class end




