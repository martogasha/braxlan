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
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm');
Route::post('password/email','ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset','ResetPasswordController@reset');
Route::view('rrr','customer.forgetPassword');



Route::get('admin','AdminController@admin')->name('admin');
Route::view('privacy','privacy');

Route::get('productList','AdminController@productList');
Route::get('getProductList','AdminController@getProductList');

Route::get('vendorProduct','AdminController@vendorProduct');

Route::view('addProduct','admin.addProduct');
Route::view('l','auth.l');
Route::view('r','auth.r');






Route::get('/','ProductController@index')->name('customer');
Route::get('getCProduct','ProductController@getCProduct');

Route::post('add','ProductController@store')->name('add');
Route::post('deleteProduct','ProductController@deleteProduct');
Route::post('editProduct','ProductController@edit');
Route::resource('poster','PosterController');
Route::get('posterView','PosterController@poster');
Route::post('PosterEdit/{id}','PosterController@update');
Route::resource('cart','CartController');
Route::resource('updateCart','CartController');
Route::post('cartDelete/{id}','CartController@delete');
Route::resource('checkout','CheckoutController');
Route::post('placeOrder','CheckoutController@placeOrder');
Route::resource('success','OrderController');
Route::get('orders','OrderController@orders');
Route::get('order/{id}','OrderController@getEachOrder');

Route::post('deleteOrder/{id}','OrderController@deleteOrder');


Route::get('ajax','OrderController@getOrderDetails');
Route::get('ajax1','AdminController@getVendorProduct');
Route::post('transferVendorProduct','AdminController@transferVendorProduct');


Route::resource('completeOrder','CompleteOrderController');
Route::get('trackOrder','OrderController@trackOrder');

Route::resource('vendor','VendorController');
Route::get('vProductList','VendorController@productList');
Route::get('vOrders','VendorController@order');
Route::get('vTransaction','VendorController@transaction');
Route::get('vAdd','VendorController@Product');
Route::post('vAddProduct','VendorController@addProduct');

Route::get('whisky','CategoryController@whisky');
Route::get('getWhisky','CategoryController@getWhisky');

Route::get('beer','CategoryController@beer');
Route::get('getBeer','CategoryController@getBeer');

Route::get('vodka','CategoryController@vodka');
Route::get('getVodka','CategoryController@getVodka');

Route::get('rum','CategoryController@rum');
Route::get('getRum','CategoryController@getRum');

Route::get('wine','CategoryController@wine');
Route::get('getWine','CategoryController@getWine');

Route::get('softDrinks','CategoryController@soft');
Route::get('getSoft','CategoryController@getSoft');

Route::get('extras','CategoryController@extra');
Route::get('getExtra','CategoryController@getExtra');

Route::get('gin','CategoryController@gin');
Route::get('getGin','CategoryController@getGin');

Route::get('mostSold','CategoryController@mostSold');
Route::get('under1000','CategoryController@under1000');

Route::post('buyNow','OrderController@buyNow');
Route::get('sendSms','SmsController@sendSms');
Route::post('editUserDetail','UserController@editUser');
Route::post('eProduct','ProductController@eProduct');
Route::get('editProductDetails/{id}','ProductController@editProductDetails');

























Route::view('dashboard','customer.dashboard');
Route::post('shopping','ProductController@shop');
Route::get('newTrending','ProductController@trending');
Route::get('shop','ProductController@Shopping');
Route::get('getShopDetails','ProductController@shopDetails');



Route::resource('productDetail','ProductDetailController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
