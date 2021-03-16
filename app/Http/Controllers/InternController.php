<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Intern;
class InternController extends Controller
{
   public function intern()
  {
  	  $d= Navbar::all();
  	  $n=Intern::all();
  	return view('admin.intern',compact('d','n'));
  }
  public function intern_save(Request $a)
    {
      // form validate
      $this->validate($a,[
      "name"=>"required", //rules
      "company_name"=>"required",
      "designation"=>"required",
      "intern_image"=>"required",
       
]);
      // insert form
  $file = $a->file('intern_image');
  $filename = 'intern_image'. time().'.'.$a->intern_image->extension();
  $file->move("intern/",$filename);

        $r=new Intern;
        $r->name=$a->name;
        $r->company_name=$a->company_name;
        $r->designation=$a->designation;
        $r->intern_image=$filename;
        $r->save();
        if($r)
        {
         return redirect('admin/intern');
        }

    }
    public function intern_edit($id)
    {
      $edit=Intern::find($id);
      return view('admin.intern_edit',compact('edit'));
    }


   // update
    public function intern_update(Request $a)
    {
      if ($a->hasFile('intern_image'))
      {
     $file = $a->file('intern_image');
  $filename = 'intern_image'. time().'.'.$a->intern_image->extension();
  $file->move("intern/",$filename);


        $r =Intern::find($a->id);
        $r->name=$a->name;
        $r->company_name=$a->company_name;
        $r->designation=$a->designation;
        $r->intern_image=$filename;
        $r->save();
        if($r)
        {
         return redirect('admin/intern');
        }
         }
      else
      {
      $r =Intern::find($a->id);
        $r->name=$a->name;
        $r->company_name=$a->company_name;
        $r->designation=$a->designation;
  
        $r->save();
      }
        if($r)
        {
        return redirect('admin/intern');//direct reach to display page...
        }
  }
public function intern_delete($id)
    {
        $d=Intern::find($id);
        $delete=$d->delete();   
        if($delete)
        {
        return redirect('admin/intern'); //direct reach to display page...
        }
     }
}
