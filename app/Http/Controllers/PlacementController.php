<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Placement;
class PlacementController extends Controller
{
   public function placement()
  {
  	  $d= Navbar::all();
  	  $p=Placement::all();
  	  return view('admin.placement',compact('d','p'));
  }

  public function placement_save(Request $a)
    {
      // form validate
      $this->validate($a,[
      "name"=>"required", //rules
      "company_name"=>"required",
      "designation"=>"required",
      "placement_image"=>"required",
       
]);
      // insert form
  $file = $a->file('placement_image');
  $filename = 'placement_image'. time().'.'.$a->placement_image->extension();
  $file->move("placement/",$filename);

        $r=new Placement;
        $r->name=$a->name;
        $r->company_name=$a->company_name;
        $r->designation=$a->designation;
        $r->placement_image=$filename;
        $r->save();
        if($r)
        {
         return redirect('admin/placement');
        }

    }

public function placement_edit($id)
    {
      $edit=Placement::find($id);
      return view('admin.placement_edit',compact('edit'));
    }


   // update
    public function placement_update(Request $a)
    {
      if ($a->hasFile('placement_image'))
      {
    $file = $a->file('placement_image');
  $filename = 'placement_image'. time().'.'.$a->placement_image->extension();
  $file->move("placement/",$filename);

        $r =Placement::find($a->id);
        $r->name=$a->name;
        $r->company_name=$a->company_name;
        $r->designation=$a->designation;
        $r->placement_image=$filename;
        $r->save();
        if($r)
        {
         return redirect('admin/placement');
        }
         }
      else
      {
      $r =Placement::find($a->id);
        $r->name=$a->name;
        $r->company_name=$a->company_name;
        $r->designation=$a->designation;
  
        $r->save();
      }
        if($r)
        {
        return redirect('admin/placement');//direct reach to display page...
        }
  }
public function placement_delete($id)
    {
        $d=Placement::find($id);
        $delete=$d->delete();   
        if($delete)
        {
        return redirect('admin/placement'); //direct reach to display page...
        }
     }

}
