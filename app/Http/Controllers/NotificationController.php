<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Navbar;

class NotificationController extends Controller
{
    public function notification()
    {
    	$u=Navbar::all();
    	$f=Notification::all();
    	return view('admin/notification',compact('u','f'));
    }


    public function not_save(Request $a)
    {
    	$this->validate($a,[
       	"message"=>"required",
       	"start_date"=>"required",
       	"end_date"=>"required",
       
       ]);

    	$r=new Notification;
    	$r->message=$a->message;
    	$r->start_date=$a->start_date;
    	$r->end_date=$a->end_date;
    	$r->save();
    	if($r)
    	{
    		return redirect('admin/notification');
    	}
    }

    public function not_edit($id)
    {
    	$edit=Notification::find($id);
    	return view('admin/not_edit',compact('edit'));
    }

    public function not_update(Request $a)
    {
    	$r=Notification::find($a->id);

    	$r->message=$a->message;
    	$r->start_date=$a->start_date;
    	$r->end_date=$a->end_date;
    	$r->save();
    	if($r)
    	{
    		return redirect('admin/notification');
    	}

    }
     public function not_delete($id)
    {
        $d=Notification::find($id);
        $delete=$d->delete();   
        if($delete)
        {
        return redirect('admin/notification'); //direct reach to display page...
        }
     }
}
