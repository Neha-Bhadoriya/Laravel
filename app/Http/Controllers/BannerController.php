<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{
    public function banner()
    {
    	$d=Banner::all();
    	return view('admin.banner',compact('d'));
    }


    public function banner_save(Request $a)
    {
       $this->validate($a,[
       	"banner_title"=>"required",
       	"banner_description"=>"required",
       	"banner_image"=>"required",
       ]);

    	$file=$a->file('banner_image');
    $filename='banner_image'.time().'.'.$a->banner_image->extension();
    	$file->move("banner/",$filename);
    	$r=new Banner;
    	$r->banner_title=$a->banner_title;
    	$r->banner_description=$a->banner_description;
    	$r->banner_image=$filename;
    	$r->save();
    	if($r)
        {
         return redirect('admin/banner');
        }

    }

    public function banner_edit($id)
       {
         $edit=Banner::find($id);
         return view('admin.banner_edit',compact('edit'));
        }

    public function banner_update(Request $a)
      {
       if ($a->hasFile('banner_image'))
      {
      $file = $a->file('banner_image');
$filename = 'banner_image'. time().'.'.$a->banner_image->extension();
     $file->move("banner/",$filename);


        $r=Banner::find($a->id);
        $r->banner_title=$a->banner_title;
        $r->banner_description=$a->banner_description;
        $r->banner_image=$filename;
        $r->save();
        if($r)
        {
            return redirect('admin/banner');
        }

        }

       else
       {
         $r =Banner::find($a->id);
        $r->banner_title=$a->banner_title;
        $r->banner_description=$a->banner_description;
        $r->save();  

       }
        if($r)
        {
        return redirect('admin/banner');
        }
    }


    public function banner_delete($id)
    {
    $d=Banner::find($id);
    $delete=$d->delete();   
      if($delete)
      {
      return redirect('admin/banner'); //direct reach to display page...
      }
    }
   
}
