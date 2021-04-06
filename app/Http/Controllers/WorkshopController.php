<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
use App\Navbar;
class WorkshopController extends Controller
{
    public function workshop()
  {
  	  $w= Workshop::all();
  	return view('admin.workshop',compact('w'));
  }
  public function workshop_save(Request $a)
  {
  	  $this->validate($a,[
       	"title"=>"required",
       	"workshop_image"=>"required",
       ]);

    	$file=$a->file('workshop_image');
    $filename='workshop_image'.time().'.'.$a->workshop_image->extension();
    	$file->move("workshop/",$filename);
    	$r=new Workshop;
    	$r->title=$a->title;
    	$r->workshop_image=$filename;
    	$r->save();
    	if($r)
        {
         return redirect('admin/workshop');
        }

    
  }

  public function workshop_edit($id)
    {
      $edit=Workshop::find($id);
      return view('admin.workshop_edit',compact('edit'));
    }


   // update
    public function workshop_update(Request $a)
    {
      $file=$a->file('workshop_image');
$filename='workshop_image'.time().'.'.$a->workshop_image->extension();
      $file->move("workshop/",$filename);
      $r=Workshop::find($a->id);
      $r->title=$a->title;
      $r->workshop_image=$filename;
      $r->save();
      if($r)
        {
         return redirect('admin/workshop');
        }
      else
      {
     $r =Workshop::find($a->id);
     $r->title=$a->title;
     $r->save();
   }
        if($r)
        {
        return redirect('admin/workshop');//direct reach to display page...
        }
      

    }
  public function Xiaomi_workshop()
  {
  	$u=Navbar::all();
  	  $w= Workshop::where('title','Xiaomi Mi Company ')->get();
  	return view('front.xiaomi',compact('w','u'));
  }

  public function Bentchair_workshop()
  {
  	$u=Navbar::all();
  	  $w= Workshop::where('title','Bentchair Company')->get();
  	return view('front.mpct',compact('w','u'));
  }

  public function Mpct_workshop()
  {
  	$u=Navbar::all();
  	  $w= Workshop::where('title','Mpct College')->get();
  	return view('front.mpct',compact('w','u'));
  }
  
  public function Rjit_workshop()
  {
  	$u=Navbar::all();
  	  $w= Workshop::where('title','Rjit College')->get();
  	return view('front.rjit',compact('w','u'));
  }
  
}
