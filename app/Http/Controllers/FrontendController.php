<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Banner;
use App\Navbar;
use App\Courses;
use App\Catagory;
use App\Bottom;
use App\User;
use App\OurTeam;
use App\Placement;
use App\Intern;
use App\Contact;
use App\Notification;
use App\CourseOrder;
use App\CourseOrderProduct;
use Session;
use App\Cart;
use Illuminate\Support\Facades\Hash;
class FrontendController extends Controller
{
  public function index()
  {
  	    $d=Banner::all();
  	    $u=Navbar::all();
  	    $c=Courses::all();
  	    $j=Catagory::all();
  	    $k=Bottom::all();
        $f=Notification::all();
  return view('front.index',compact('d','u','c','j','k','f'));
  	
  }

public function courses()
  {
        $d=Banner::all();
        $u=Navbar::all();
        $c=Courses::all();
        $j=Catagory::all();
        $k=Bottom::all();
  return view('front.courses',compact('d','u','c','j','k'));
}
public function course_catagory($id)
  {
       
        $u=Navbar::all();
        $c=Courses::all();
        $j=Catagory::find($id);
        
  return view('front.course_catagory',compact('u','c','j'));
}

public function signup()
{       $u=Navbar::all();
  return view('front/signup',compact('u'));
}

public function signupsave(Request $a)
{
  $this->validate($a,[
        "name"=>"required",
        "email"=>"required",
        "password"=>"required",
    ]);  

  $r=new User;
  $r->name=$a->name;
  $r->email=$a->email;
  $r->password=Hash::make($a->password);
  $r->save();
  if($a)
  {
    return redirect('front/login')->with('message','signup successfully now you can login');;
  }
}

public function login()
{       $u=Navbar::all();
  return view('front/login',compact('u'));
}
public function loginsave(Request $b)
{
//   // print_r($l->all());
  // $d=User::where('email',$l->email)->where('password',$l->password)->get()->first();
//   //print_r($d);
//   if($d)
//   {
//     return redirect('front/signup');
//   }
//   else{
//     return redirect('front/login');
//   }
// }
 $this->validate($b,[
        "email"=>"required",
        "password"=>"required",
        
    ]);  

$session_id=Session::getId();
  $data=$b->all();
if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
{
Cart::where('session_id',$session_id)->update(['user_email'=>$data['email']]);
return redirect("cart")->with('message','Login Successfully');
        }
else{
  return redirect("front/login")->with('message','Login Unsuccessfully please try again and check the login details again');
    }  
}

public function our_team()
{       $u=Navbar::all();
        $m=OurTeam::all();
  return view('front/our_team',compact('u','m'));
}

public function placement()
{       $u=Navbar::all();
        $p=Placement::all();
        
  return view('front/placement',compact('u','p'));
}
public function intern()
{       $u=Navbar::all();
        $n=Intern::all();
        
  return view('front/intern',compact('u','n'));
}

public function contact()
{       $u=Navbar::all();
        $a=Contact::all();
        
  return view('front/contact',compact('u','a'));
}

public function contactsave(Request $c)
{  
  // form validate
      $this->validate($c,[
      "name"=>"required", 
      "email"=>"required", //rules
      "phone"=>"required",
      "message"=>"required", 
       
]);
      // insert form
  

        $y=new Contact;
        $y->name=$c->name;
        $y->email=$c->email;
        $y->phone=$c->phone;
        $y->message=$c->message;
        $y->save();
        if($y)
        {
         return redirect('front/contact');
        }


}


public function front_logout(Request $request)
 {
        Auth::logout();
        return redirect('front/login');
     }


public function account()
{       $u=Navbar::all();
        $cart=Cart::all();
        $corder=CourseOrder::all();
  return view('front/account',compact('u','cart','corder'));
}
   

   public function resetpass()

 {
  $u=Navbar::all();
    return view('front/resetpass',compact('u'));
     }
 }
      

  
