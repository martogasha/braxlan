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
Route::post('Login','LoginCustomController@login')->name('loginCustom');
Route::post('Register','RegisterCustomController@register')->name('registerCustom');

Route::view('admin','admin.index');
Route::view('privacy','privacy');

Route::view('productList','admin.productList');
Route::view('addProduct','admin.addProduct');
Route::view('l','auth.l');
Route::view('r','auth.r');






Route::get('/','ProductController@index')->name('customer');
Route::post('add','ProductController@store')->name('add');
Route::resource('poster','PosterController');
Route::get('posterView','PosterController@poster');
Route::post('PosterEdit/{id}','PosterController@update');
Route::resource('cart','CartController');
Route::post('cartDelete/{id}','CartController@delete');
Route::resource('checkout','CheckoutController');
Route::post('placeOrder','CheckoutController@placeOrder');
Route::resource('success','OrderController');
Route::get('orders','OrderController@orders');
Route::get('ajax','OrderController@getOrderDetails');
Route::resource('completeOrder','CompleteOrderController');
Route::get('trackOrder','OrderController@trackOrder');













Route::view('dashboard','customer.dashboard');
Route::view('shop','customer.shop');

Route::resource('productDetail','ProductDetailController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
