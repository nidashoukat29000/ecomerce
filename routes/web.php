<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/login','frontend.auth.login');
Route::view('/register','frontend.auth.login');
Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
Route::post('logout',[AuthController::class,'logout']);


Route::view('/carts','frontend.cart');
Route::view('/checkouts','frontend.checkout');
Route::view('/product-detail','frontend.product-detail');
Route::view('/whishlist','frontend.wishlish');
Route::view('/my-account', 'frontend.my-account');
Route::view('/order', 'frontend.order');
Route::view('/404','frontend.404');
