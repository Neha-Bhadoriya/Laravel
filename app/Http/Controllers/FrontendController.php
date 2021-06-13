<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
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
use App\Rating;
use App\Coupon;
use Illuminate\Support\Facades\Hash;
class FrontendController extends Controller
{
  public function index()
  {
    $cart=Cart::all();
  	    $d=Banner::all();
  	    $u=Navbar::all();
  	    $c=Courses::all();
  	    $j=Catagory::all();
  	    $k=Bottom::all();
        $f=Notification::all();
  return view('front.index',compact('d','u','c','j','k','f','cart'));
  	
  }

public function courses()
  {
    $cart=Cart::all();
        $d=Banner::all();
        $u=Navbar::all();
        $c=Courses::all();
        $j=Catagory::all();
        $k=Bottom::all();
  return view('front.courses',compact('d','u','c','j','k','cart'));
}
public function course_catagory($id)
  {
       
        $u=Navbar::all();
        $c=Courses::all();
        $j=Catagory::find($id);
        $cart=Cart::all();
        
  return view('front.course_catagory',compact('u','c','j','cart'));
}

public function signup()
{   
$cart=Cart::all();   
 $u=Navbar::all();
  return view('front/signup',compact('u','cart'));
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
  $r->role=1;
  $r->save();
  if($a)
  {
    return redirect('front/login')->with('message','signup successfully now you can login');;
  }
}

public function login()
{ 
$cart=Cart::all();
      $u=Navbar::all();
  return view('front/login',compact('u','cart'));
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
  $check_role=User::where('email',$data['email'])->first();
if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>$data['role']]))
{
  if($check_role->role==0)
  {
    return redirect('/admin');

  }
  elseif($check_role->role==1)
  {
    Session::put('neha',$data['email']);
Cart::where('session_id',$session_id)->update(['user_email'=>$data['email']]);
return redirect("cart")->with('message','Login Successfully');

  }
  else
  {

  }}
        
else{
   return redirect()->back();
  // return redirect("front/login")->with('message','Login Unsuccessfully please try again and check the login details again');
    }  
}

public function our_team()

{ 
$cart=Cart::all();
      $u=Navbar::all();
        $m=OurTeam::all();
  return view('front/our_team',compact('u','m','cart'));
}

public function placement()
{
$cart=Cart::all();
       $u=Navbar::all();
        $p=Placement::all();
        
  return view('front/placement',compact('u','p','cart'));
}
public function intern()

{ 
  $cart=Cart::all();
      $u=Navbar::all();
        $n=Intern::all();
        
  return view('front/intern',compact('u','n','cart'));
}

public function contact()
{   
$cart=Cart::all();
    $u=Navbar::all();
        $a=Contact::all();
        
  return view('front/contact',compact('u','a','cart'));
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
  Session::forget('neha');
        Auth::logout();
        return redirect('front/login');
     }


// public function account()
// {       $u=Navbar::all();
//         $cart=Cart::all();
//         $corder=CourseOrder::all();
//   return view('front/account',compact('u','cart','corder'));
// }
public function account()
    {

        $u=Navbar::all();
        $cart=Cart::all();
        $data= DB::table('course_orders')->join('course_order_products','course_orders.user_id','course_order_products.user_id')->get();
        return view('front/account',compact('u','data','cart'));
    }

    public function user_order_data()
    {
        $u= Navbar::all();
        $cart=Cart::all();
        $data= DB::table('course_orders')->join('course_order_products','course_orders.user_id','course_order_products.user_id')->get();
        return view('front.user_order_data',Compact('u','data','cart'));
    }
   

   public function resetpass()

 {
  $u=Navbar::all();
  $cart=Cart::all();
    return view('front/resetpass',compact('u','cart'));
     }


 public function search_course(Request $request)
    {
      $u=Navbar::all();
     $cart=Cart::all();
      $search= $request->get('search');
      //print($search);
      $result= DB::table('courses')->where('course_name','like', '%'.$search.'%')->get();

      return view('front.search_page',Compact('u','result','cart'));
      
    }  


    public function insert_rating(Request $a)
    {
        $ir = new Rating();
        $ir->user_id=$a->user_id;
        $ir->course_id=$a->course_id;
        $ir->rating=$a->rating;
        $ir->message=$a->message;
        $ir->save();
        if($ir)
        {
            return redirect()->back()->with('message','Rating successfully Given');
        }
    } 


    public function applyCoupan(Request $request)
    {
        Session::forget('coupanAmount');
        Session::forget('coupanCode');
      if($request->isMethod('post'))
      {
        $data = $request->all();
        // echo "<pre>";
        // print_r($data);
        // die;
        $coupancount= Coupon::where('coupon_code',$data['coupan_code'])->count();
        if($coupancount==0)
        {
            return redirect()->back()->with('message','Coupon Code does not exists');
        }
        else
        {
            // echo "success";die;
            $coupanDetails = Coupon::where('coupon_code',$data['coupan_code'])->first();
            $expiry_date = $coupanDetails->expiry_date;
            $current_date = date('Y-m-d');
            if($expiry_date < $current_date)
            {
              return redirect()->back()->with('message','Coupon Code is Expired');  
            }
            //Coupan is ready for discount
            $session_id = Session::getId();
            $userCart = Cart::where('session_id',$session_id)->get();
            $total_amount = 0;
            foreach($userCart as $item)
            {
                $total_amount = $total_amount + ($item->course_price*$item->course_quantity);
            }
            //check if counpon amount is fixed or percentage
            if($coupanDetails->amount_type=="fixed")
            {
                $coupanAmount = $coupanDetails->amount;
                // print_r($coupanAmount);
                // die;
                //Add coupan Code in session
            Session::put('coupanAmount',$coupanAmount);
            Session::put('coupanCode',$data['coupan_code']);
            // echo Session::get('coupanAmount');die;
            return redirect()->back()->with('message','Coupon Code is Successfully Applied. You are Availing Discount');
            }
            else
            {
              $coupanAmount = $total_amount * ($coupanDetails->amount/100);  
              //Add coupan Code in session
            Session::set('coupanAmount',$coupanAmount);
            Session::set('coupanCode',$data['coupan_code']);
            return redirect()->back()->with('message','Coupon Code is Successfully Applied. You are Availing Discount');
            }
        }
      }
    }
 }
      

  
