<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;

class navbarController extends Controller
{
    public function navbar_footer()
  {
  	  $d= Navbar::all();
  	return view('admin.navbar_footer',compact('d'));
  }


  public function navbar_footer_save(Request $a)
    {
       $this->validate($a,[
       	"number"=>"required",
       	"email"=>"required",
       	"logo"=>"required",
       	"description"=>"required",
       	"address"=>"required",
       ]);

    	$file=$a->file('logo');
    $filename='logo'.time().'.'.$a->logo->extension();
    	$file->move("logo/",$filename);
    	$r=new Navbar;
    	$r->number=$a->number;
    	$r->email=$a->email;
    	$r->logo=$filename;
    	$r->description=$a->description;
    	$r->address=$a->address;
    	$r->save();
    	if($r)
        {
         return redirect('admin/navbar_footer');
        }

    }
    public function nav_edit($id)
    {
      $edit=Navbar::find($id);
      return view('admin.nav_edit',compact('edit'));
    }


   // update
    public function nav_update(Request $a)
    {
      if ($a->hasFile('logo'))
      {
$file = $a->file('logo');
$filename = 'logo'. time().'.'.$a->logo->extension();
$file->move("logo/",$filename);

     $r =Navbar::find($a->id);
     $r->number=$a->number;
      $r->email=$a->email;
      $r->logo=$filename;
      $r->description=$a->description;
      $r->address=$a->address;
     $r->save();
        if($r)
        {
        return redirect('admin/navbar_footer');//direct reach to display page...
        }
      }
      else
      {
     $r =Navbar::find($a->id);
     $r->number=$a->number;
      $r->email=$a->email;
     
      $r->description=$a->description;
      $r->address=$a->address;
    
     $r->save();
   }
        if($r)
        {
        return redirect('admin/navbar_footer');//direct reach to display page...
        }
      

    }
   public function nav_delete($id)
    {
    $d=Navbar::find($id);
    $delete=$d->delete();   
      if($delete)
      {
      return redirect('admin/navbar_footer'); //direct reach to display page...
      }
    }

}
