<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;

use App\Http\Controllers\Frontend\RoomController as FrontendRoom;

use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\UserController as BackendUser;

use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\BookingController as FrontendBooking;

use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\RoomtypeController;

use App\Http\Controllers\Backend\BookingController;

use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\CategoryController;

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

//Route::get('/', function () {
  //  return view('backend.layouts.home');
//});

//Route::get('/contact', function () {
  //  return view('backend.layouts.contact');
//});
//admin panel routes

Route::get('/',[FrontendHome::class,'home'])->name('home');
Route::get('/about',[FrontendHome::class,'about'])->name('about');


// frontend booking
Route::get('/booking/{id}',[FrontendBooking::class,'booking'])->name('booking');
Route::post('/booking/store',[FrontendBooking::class,'bookingformpost'])->name('booking.store');



// frontend room
Route::get('/room',[FrontendRoom::class,'room'])->name('room');
Route::get('/room/{id}/details',[FrontendRoom::class,'details'])->name('room.details');
Route::get('/allroom/{id}',[FrontendRoom::class,'allroomview'])->name('allroom');

// search
Route::post('/date-range-search',[SearchController::class,'dateSearch'])->name('date.search');

// frontend login
Route::get('/login',[UserController::class,'login'])->name('guest.login');
Route::post('/login/post',[UserController::class,'doLogin'])->name('guest.do.login');

// frontend signup
Route::get('/signup',[UserController::class,'signupform'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupformpost'])->name('user.signup.store');

Route::group(['prefix'=>'customer','middleware'=>'auth'],function (){

  
  Route::get('/logout',[UserController::class,'logout'])->name('guest.logout');
});




// backend

Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

  Route::group(['middleware'=>'role'],function (){

Route::get('/contact',[ HomeController::class,'contact']);
Route::get('/posts',[ PostController::class,'list'])->name('post.list');

Route::get('/hotel',[ HotelController::class,'info'])->name('hotel.info');
Route::post('/hotel/store',[ HotelController::class,'store'])->name('hotel.store');

Route::get('/rooms',[ RoomController::class,'quantity'])->name('room.quantity');
Route::post('/rooms/store',[ RoomController::class,'store'])->name('room.store');

Route::get('/categories',[ CategoryController::class,'list'])->name('category.list');
Route::post('/categories/store',[ CategoryController::class,'store'])->name('category.store');



Route::get('/bookings',[ BookingController::class,'list'])->name('booking.list');
Route::get('/bookings/delete/{id}',[ BookingController::class,'delete'])->name('booking.delete');


// roomtype
Route::get('/roomtype',[ RoomtypeController::class,'list'])->name('roomtype.list');
Route::get('/roomtype/delete/{id}',[ RoomtypeController::class,'delete'])->name('roomtype.delete');
Route::get('/roomtype/edit/{id}',[ RoomtypeController::class,'edit'])->name('roomtype.edit');
Route::put('/roomtype/update/{id}',[ RoomtypeController::class,'update'])->name('roomtype.update');
Route::post('/roomtype/store',[ RoomtypeController::class,'store'])->name('roomtype.store');
Route::get('/roomtype/{id}/room',[RoomtypeController::class,'allRoom'])->name('roomtype.room');


Route::get('/reports',[ ReportController::class,'list'])->name('report.list');


Route::get('/payments',[ PaymentController::class,'list'])->name('payment.list');

Route::get('/guests',[BackendUser::class,'guestList'])->name('guest.list');
Route::get('/users',[BackendUser::class,'userList'])->name('user.list');

});

// Route::group(['prefix'=>'manager','middleware'=>'manager'],function (){

//   Route::get('/hotel',[ HotelController::class,'info'])->name('hotel.info');

//   Route::get('/rooms',[ RoomController::class,'quantity'])->name('room.quantity');

// Route::post('/rooms/store',[ RoomController::class,'store'])->name('room.store');

// Route::get('/bookings',[ BookingController::class,'list'])->name('booking.list');

// Route::get('/roomtype',[ RoomtypeController::class,'list'])->name('roomtype.list');
// Route::post('/roomtype/store',[ RoomtypeController::class,'store'])->name('roomtype.store');

// Route::get('/guests',[BackendUser::class,'guestList'])->name('guest.list');

// });

Route::get('/',[ HomeController::class,'home'])->name('dashboard');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');
});