<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\UserController as BackendUser;

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
Route::get('/signup',[UserController::class,'signupform'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupformpost'])->name('user.signup.store');




Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');

Route::group(['prefix'=>'admin'],function(){

Route::get('/',[ HomeController::class,'home']);
Route::get('/contact',[ HomeController::class,'contact']);
Route::get('/posts',[ PostController::class,'list'])->name('post.list');

Route::get('/hotel',[ HotelController::class,'info'])->name('hotel.info');
Route::post('/hotel/store',[ HotelController::class,'store'])->name('hotel.store');

Route::get('/rooms',[ RoomController::class,'quantity'])->name('room.quantity');
Route::post('/rooms/store',[ RoomController::class,'store'])->name('room.store');

Route::get('/categories',[ CategoryController::class,'list'])->name('category.list');
Route::post('/categories/store',[ CategoryController::class,'store'])->name('category.store');



Route::get('/bookings',[ BookingController::class,'list'])->name('booking.list');
Route::get('/roomtype',[ RoomtypeController::class,'list'])->name('roomtype.list');
Route::post('/roomtype/store',[ RoomtypeController::class,'store'])->name('roomtype.store');
Route::get('/roomtype/{id}/room',[RoomtypeController::class,'allRoom'])->name('roomtype.room');


Route::get('/reports',[ ReportController::class,'list'])->name('report.list');


Route::get('/payments',[ PaymentController::class,'list'])->name('payment.list');

Route::get('/guests',[BackendUser::class,'guestList'])->name('guest.list');
Route::get('/users',[BackendUser::class,'userList'])->name('user.list');

});