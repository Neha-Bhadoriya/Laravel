<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Courses;
use App\Catagory;
use App\Navbar;
class CoursesController extends Controller
{
   public function course()
   {
   	 $d= Catagory::all();
     $u=Courses::all();
     return view('admin.course',compact('d','u'));
   }

   // save
    public function insert(Request $a)
    {
      // form validate
      $this->validate($a,[
      "course_name"=>"required", //rules
      "course_description"=>"required",
      "course_price"=>"required",
      "course_detail"=>"required",
      "course_includes"=>"required",
      "course_content"=>"required",
      "course_image"=>"required",
      "course_catagory"=>"required",
       
]);
    //print_r($a->all());
      // insert form
     $file = $a->file('course_image');
    $filename = 'course_image'. time().'.'.$a->course_image->extension();
    $file->move("upload/",$filename);

        $r=new Courses;
        $r->course_name=$a->course_name;
        $r->course_description=$a->course_description;
        $r->course_price=$a->course_price;
        $r->course_detail=$a->course_detail;
        $r->course_includes=$a->course_includes;
        $r->course_content=$a->course_content;
        $r->course_image=$filename;
        $r->course_catagory=$a->course_catagory;
        $r->save();
        if($r)
        {
         return redirect('admin/course');//courses is method name not file name
        }

    }

    public function show($id)
    {  $t= Courses::find($id);
       return view('admin.show',compact('t'));
    }
  
    public function course_edit($id)
       {
         $c=Catagory::all();
         $edit=Courses::find($id);
         return view('admin.course_edit',compact('edit','c'));
        }

    public function course_update(Request $a)
      {
       if ($a->hasFile('course_image'))
      {
     $file = $a->file('course_image');
     $filename = 'course_image'. time().'.'.$a->course_image->extension();
     $file->move("upload/",$filename);


        $r=Courses::find($a->id);
        $r->course_name=$a->course_name;
        $r->course_description=$a->course_description;
        $r->course_price=$a->course_price;
        $r->course_detail=$a->course_detail;
        $r->course_includes=$a->course_includes;
        $r->course_content=$a->course_content;
        $r->course_image=$filename;
        $r->course_catagory=$a->course_catagory;
        $r->save();
        if($r)
        {
            return redirect('admin/course');
        }

        }

       else
       {
         $r =Courses::find($a->id);
        $r->course_name=$a->course_name;
        $r->course_description=$a->course_description;
        $r->course_price=$a->course_price;
        $r->course_detail=$a->course_detail;
        $r->course_includes=$a->course_includes;
        $r->course_content=$a->course_content;

        $r->course_catagory=$a->course_catagory;
        $r->save();  

       }
        if($r)
        {
            return redirect('admin/course');
        }


      }



    public function course_delete($id)
    {
        $d=Courses::find($id);
        $delete=$d->delete();   
        if($delete)
        {
        return redirect('admin/course'); //direct reach to display page...
        }
     }



     //frontend course details

     public function course_details($id)
     {$u=Navbar::all();
      $c=Courses::find($id);
      return view('front.course_details',compact('u','c'));
     }
}

