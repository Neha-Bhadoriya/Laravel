<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Navbar;
class ContactController extends Controller
{
	public function contact()
  {
  	  $d= Navbar::all();
  	  $a=Contact::all();
  	return view('admin.contact',compact('d','a'));
  }
  
  public function contact_form()
  {
  	  $d= Navbar::all();
  	  $a=Contact::all();
  	return view('admin.contact_form',compact('d','a'));
  }

    public function contact_save(Request $c)
    {

    $file = $c->file('icon');
    $filename = 'icon'. time().'.'.$c->icon->extension();
    $file->move("contact/",$filename);

    	$r=new Contact;
    	$r->title=$c->title;
    	$r->description=$c->description;
    	$r->icon=$filename;
    	$r->tel=$c->tel;
    	$r->ad_email=$c->ad_email;
    	$r->ad_address=$c->ad_address;
    	$r->open=$c->open;
    	$r->save();
    	if($r)
    	{
    		return redirect('admin/contact');
    	}
    }

}
