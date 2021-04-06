<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
class CouponController extends Controller
{
   
    public function coupon()
   {
   	 $d= Coupon::all();
     return view('admin.coupon',compact('d'));
   }

   public function coupon_save(Request $a)
   {
   	$r=new Coupon;
   	$r->coupon_code=$a->coupon_code;
   	$r->amount=$a->amount;
   	$r->amount_type=$a->amount_type;
   	$r->status=1;
   	$r->expiry_date=$a->expiry_date;
   	$r->save();
   if($r)
        {
         return redirect('admin/coupon');//courses is method name not file name
        }
}

    
    public function coupon_edit($id)
    {
      $edit=Coupon::find($id);
      return view('admin.coupon_edit',compact('edit'));
    }


   // update
    public function coupon_update(Request $a)
    {
     

     $r =Coupon::find($a->id);
     $r->coupon_code=$a->coupon_code;
   	$r->amount=$a->amount;
   	$r->amount_type=$a->amount_type;
   	$r->status=1;
   	$r->expiry_date=$a->expiry_date;
     $r->save();
        if($r)
        {
        return redirect('admin/coupon');//direct reach to display page...
        }
     }
      


   // delete
    public function coupon_delete($id)
    {
    $d=Coupon::find($id);
    $delete=$d->delete();   
      if($delete)
      {
      return redirect('admin/coupon'); //direct reach to display page...
      }
    }
}
