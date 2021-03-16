<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catagory; //Model name

class CatagoriesController extends Controller
{
  
	// contructor calling
	public function __construct()
    {
        $this->middleware('auth');
    }
    
  

  // save
   public function save(Request $a)
    {
      // form validate
      $this->validate($a,[
      "c_name"=>"required", //rules
      "c_image"=>"required",
       
]);
      // insert form
  $file = $a->file('c_image');
$filename = 'c_image'. time().'.'.$a->c_image->extension();
  $file->move("catagory/",$filename);

        $r=new Catagory;
        $r->c_name=$a->c_name;
        $r->c_image=$filename;
        $r->status=1;
        $r->save();
        if($r)
        {
         return redirect('admin/catagory');
        }

    }

   // catagory display
    public function catagory()
    {
    $d= Catagory::all();
      return view('admin.catagory',compact('d'));
    }

   // edit
    public function edit($id)
    {
      $edit=Catagory::find($id);
      return view('admin.edit',compact('edit'));
    }


   // update
    public function update(Request $a)
    {
      if ($a->hasFile('c_image'))
      {
     $file = $a->file('c_image');
$filename = 'c_image'. time().'.'.$a->c_image->extension();
  $file->move("catagory/",$filename);

     $r =Catagory::find($a->id);
     $r->c_name=$a->c_name;
     $r->c_image=$filename;
     $r->save();
        if($r)
        {
        return redirect('admin/catagory');//direct reach to display page...
        }
      }
      else
      {
     $r =Catagory::find($a->id);
     $r->c_name=$a->c_name;
    
     $r->save();
   }
        if($r)
        {
        return redirect('admin/catagory');//direct reach to display page...
        }
      

    }


   // delete
    public function delete($id)
    {
    $d=Catagory::find($id);
    $delete=$d->delete();   
      if($delete)
      {
      return redirect('admin/catagory'); //direct reach to display page...
      }
    }

}
