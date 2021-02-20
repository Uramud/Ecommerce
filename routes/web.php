<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});

Route::view('/adduser','register');

Route::view("index","index");

Route::post("/login",[UserController::class,'login']);

Route::post("/register",[UserController::class,'register']);

Route::get("/",[ProductController::class,'index']);

Route::get("detail/{id}",[ProductController::class,'detail']);

Route::get("search",[ProductController::class,'search']);

Route::post("add_to_cart",[ProductController::class,'addToCart']);

Route::get("cartlist",[ProductController::class,'cartlist']);

Route::get("delete_cart_item/{id}",[ProductController::class,'delete_cart_item']);

Route::get("orderNow",[ProductController::class,'orderNow']);

Route::post("orderplace",[ProductController::class,'orderPlace']);

Route::get("orderlist",[ProductController::class,'orderList']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
