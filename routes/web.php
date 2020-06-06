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

Route::get('/h', function () {
    return view('welcome');
});
Route::view('/','customer.index');
Route::view('dashboard','customer.dashboard');
Route::view('shop','customer.shop');


Route::view('productDetail','customer.productDetail');

Route::view('cart','customer.cart');
Route::view('checkout','customer.checkout');
Route::view('success','customer.orderSuccess');



