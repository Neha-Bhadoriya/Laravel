<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' =>['auth']],function(){

//admin 
Route::get('admin','AdminController@index');

//catagories
Route::get('admin/catagory','CatagoriesController@catagory');
Route::post('admin/save','CatagoriesController@save');
Route::get('admin/edit/{id}','CatagoriesController@edit');
Route::post('admin/update','CatagoriesController@update');
Route::get('admin/delete/{id}','CatagoriesController@delete');

//courses
Route::get('admin/course','CoursesController@course');
Route::post('admin/insert','CoursesController@insert');
Route::get('admin/show/{id}','CoursesController@show');
Route::get('admin/course_delete/{id}','CoursesController@course_delete');
Route::get('admin/course_edit/{id}','CoursesController@course_edit');
Route::post('admin/course_update','CoursesController@course_update');


//banner

Route::get('admin/banner','BannerController@banner');
Route::post('admin/banner_save','BannerController@banner_save');
Route::get('admin/banner_delete/{id}','BannerController@banner_delete');
Route::get('admin/banner_edit/{id}','BannerController@banner_edit');
Route::post('admin/banner_update','BannerController@banner_update');


//navbar &footer
Route::get('admin/navbar_footer','NavbarController@navbar_footer');
Route::post('admin/navbar_footer_save','NavbarController@navbar_footer_save');
Route::get('admin/nav_edit/{id}','NavbarController@nav_edit');
Route::post('admin/nav_update','NavbarController@nav_update');
Route::get('admin/nav_delete/{id}','NavbarController@nav_delete');

//Bootom

Route::get('admin/bottom','BottomController@bottom');
Route::post('admin/bottom_save','BottomController@bottom_save');

//our team
Route::get('admin/ourteam','OurTeamController@ourteam');
Route::post('admin/team_save','OurTeamController@team_save');
Route::get('admin/team_edit/{id}','OurTeamController@team_edit');

Route::post('admin/team_update','OurTeamController@team_update');

Route::get('admin/team_delete/{id}','OurTeamController@team_delete');

//placement
Route::get('admin/placement','PlacementController@placement');
Route::post('admin/placement_save','PlacementController@placement_save');

Route::get('admin/placement_edit/{id}','PlacementController@placement_edit');

Route::post('admin/placement_update','PlacementController@placement_update');

Route::get('admin/placement_delete/{id}','PlacementController@placement_delete');


//intern
Route::get('admin/intern','InternController@intern');

Route::post('admin/intern_save','InternController@intern_save');

Route::get('admin/intern_edit/{id}','InternController@intern_edit');

Route::post('admin/intern_update','InternController@intern_update');

Route::get('admin/intern_delete/{id}','InternController@intern_delete');

//contact
Route::get('admin/contact','ContactController@contact');
Route::get('admin/contact_form','ContactController@contact_form');
Route::post('admin/contact_save','ContactController@contact_save');

//notification
Route::get('admin/notification','NotificationController@notification');
Route::post('admin/not_save','NotificationController@not_save');
Route::get('admin/not_edit/{id}','NotificationController@not_edit');
Route::post('admin/not_update','NotificationController@not_update');
Route::get('admin/not_delete/{id}','NotificationController@not_delete');

//workshop
Route::get('admin/workshop','WorkshopController@workshop');
Route::post('admin/workshop_save','WorkshopController@workshop_save');

Route::get('admin/workshop_edit/{id}','WorkshopController@workshop_edit');
Route::post('admin/workshop_update','WorkshopController@workshop_update');

//coupon
Route::get('admin/coupon','CouponController@coupon');
Route::post('admin/coupon_save','CouponController@coupon_save');
Route::get('admin/coupon_edit/{id}','CouponController@coupon_edit');
Route::post('admin/coupon_update','CouponController@coupon_update');
Route::get('admin/coupon_delete/{id}','CouponController@coupon_delete');
//course frontended
Route::get('course_details/{id}','CoursesController@course_details');

// workshopMPct front
Route::get('front/xiaomi','WorkshopController@Xiaomi_workshop');
Route::get('front/bentchair','WorkshopController@Bentchair_workshop');
Route::get('front/mpct','WorkshopController@Mpct_workshop');
Route::get('front/rjit','WorkshopController@Rjit_workshop');
});//middleware close
//add to cart
Route::post('add_to_cart','AddToCartController@add_to_cart');
Route::get('cart','AddToCartController@cart');
Route::get('cart/quantity_update/{id}/{course_quantity}','AddToCartController@quantity_update');


//front
Route::get('front','FrontendController@index');

Route::get('front/courses','FrontendController@courses');

Route::get('front/course_catagory/{id}','FrontendController@course_catagory');

Route::get('front/signup','FrontendController@signup');

Route::post('front/signupsave','FrontendController@signupsave');

Route::get('front/login','FrontendController@login');

Route::post('front/loginsave','FrontendController@loginsave');


Route::get('front/our_team','FrontendController@our_team');
Route::get('front/placement','FrontendController@placement');
Route::get('front/intern','FrontendController@intern');

Route::get('front/contact','FrontendController@contact');

Route::post('front/contactsave','FrontendController@contactsave');
//front security
Route::group(['middleware' =>['FrontLogin']],function(){
//Account
Route::get('front/account','FrontendController@account');
//user order data
Route::get('front/user_order_data','FrontendController@user_order_data');
Route::get('front/resetpass','FrontendController@resetpass');
});//end security


//checkout
Route::get('front/checkout','CheckOutController@checkout');
Route::post('front/ordersave','CheckOutController@ordersave');

//invoice

Route::get('admin/invoice/{id}','CheckOutController@invoice');

//order

Route::get('admin/order','CheckOutController@order');
//thanks
Route::get('front/thanks','CheckOutController@thanks');
//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//logout front
Route::get('front/logout','FrontendController@front_logout');

//Bill

Route::get('admin/invoice/{id}','NavbarController@bill');
//paytm route

Route::post('/paytm-callback', 'CheckOutController@paytmCallback');

//search

Route::post('front/search','FrontendController@search_course');

//rating
//Rating Route Work
Route::post('front/review-rating/insert','FrontendController@insert_rating');


//Coupan Route WorK
Route::post('front/cart/apply-coupan','FrontendController@applyCoupan');

//google
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');


//chache

Route::get('/clear', function() { 
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear'); 
        return "Cleared!"; 
    });