<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\OurTeam;
class OurTeamController extends Controller
{
    public function ourteam()
  {
  	  $d= Navbar::all();
$m=OurTeam::all();
  	return view('admin.ourteam',compact('d','m'));
  }

  
   public function team_save(Request $a)
    {
      // form validate
      $this->validate($a,[
      "name"=>"required", //rules
      "description"=>"required",
      "team_image"=>"required",
       
]);
      // insert form
  $file = $a->file('team_image');
  $filename = 'team_image'. time().'.'.$a->team_image->extension();
  $file->move("team/",$filename);

        $r=new OurTeam;
        $r->name=$a->name;
        $r->description=$a->description;
        $r->team_image=$filename;
        $r->save();
        if($r)
        {
         return redirect('admin/ourteam');
        }

    }
public function team_edit($id)
    {
      $edit=OurTeam::find($id);
      return view('admin.team_edit',compact('edit'));
    }


   // update
    public function team_update(Request $a)
    {
      if ($a->hasFile('team_image'))
      {
     $file = $a->file('team_image');
     $filename = 'team_image'. time().'.'.$a->team_image->extension();
     $file->move("team/",$filename);

     $r =OurTeam::find($a->id);
     $r->name=$a->name;
     $r->description=$a->description;
     $r->team_image=$filename;
     $r->save();
        if($r)
        {
        return redirect('admin/ourteam');//direct reach to display page...
        }
         }
      else
      {
        $r =OurTeam::find($a->id);
        $r->name=$a->name;
        $r->description=$a->description;
  
        $r->save();
      }
        if($r)
        {
        return redirect('admin/ourteam');//direct reach to display page...
        }
  }

public function team_delete($id)
    {
        $d=OurTeam::find($id);
        $delete=$d->delete();   
        if($delete)
        {
        return redirect('admin/ourteam'); //direct reach to display page...
        }
     }

}
