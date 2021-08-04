<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PostController;

use App\Http\Controllers\Backend\RoomController;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\UserController;
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

Route::get('/',[ HomeController::class,'home']);
Route::get('/contact',[ HomeController::class,'contact']);
Route::get('/posts',[ PostController::class,'list'])->name('post.list');
Route::get('/rooms',[ RoomController::class,'quantity'])->name('room.quantity');
Route::get('/categories',[ CategoryController::class,'list'])->name('category.list');
Route::post('/categories/store',[ CategoryController::class,'store'])->name('category.store');

Route::get('/users',[ UserController::class,'list'])->name('user.list');
Route::post('/users/store',[ UserController::class,'store'])->name('user.store');
