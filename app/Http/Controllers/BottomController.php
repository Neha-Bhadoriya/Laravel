<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bottom;
class BottomController extends Controller
{

	public function bottom()
  {
  	  $d= Bottom::all();
  	return view('admin.bottom',compact('d'));
  }
    
    public function bottom_save(Request $a)
    {
       $this->validate($a,[
       	"title"=>"required",
       	"description"=>"required",
       	"icon"=>"required",
       	
       ]);

    	$file=$a->file('icon');
    $filename='icon'.time().'.'.$a->icon->extension();
    	$file->move("icon/",$filename);
    	$r=new Bottom;
    	$r->title=$a->title;
    	$r->description=$a->description;
    	$r->icon=$filename;
    	
    	$r->save();
    	if($r)
        {
         return redirect('admin/bottom');
        }

    }
}
