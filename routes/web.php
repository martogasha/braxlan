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
Route::get('password/reset/{token}','ResetPasswordController@showResetForm');
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
Route::resource('poster','PosterController');
Route::get('posterView','PosterController@poster');
Route::post('PosterEdit/{id}','PosterController@update');
Route::resource('cart','CartController');
Route::post('cartDelete/{id}','CartController@delete');
Route::resource('checkout','CheckoutController');
Route::post('placeOrder','CheckoutController@placeOrder');
Route::resource('success','OrderController');
Route::get('orders','OrderController@orders');
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

Route::get('supermarket','CategoryController@supermarket');
Route::get('homestead','CategoryController@homestead');
Route::get('saftey','CategoryController@saftey');
Route::get('drinks','CategoryController@drinks');
Route::post('buyNow','OrderController@buyNow');




















Route::view('dashboard','customer.dashboard');
Route::view('shop','customer.shop');

Route::resource('productDetail','ProductDetailController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
