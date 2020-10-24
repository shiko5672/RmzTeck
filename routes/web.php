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

Route::get(' /index.html','HomeController@home');
Route::get(' /shop.html', 'HomeController@shop');
Route::get(' /blog.html', 'HomeController@blog');
Route::get(' /contact.html', 'HomeController@contact');
Route::get(' /about.html', 'HomeController@about');
Route::get(' /checkout.html', 'HomeController@checkout');
Route::get(' /shop-details.html', 'HomeController@details');
Route::get(' /shopping-cart.html', 'HomeController@cart');
Route::get(' /cart.add/{product}','ProductController@addtocart');


//
//Route::get(' /sign-up', 'ShopController@signup');
//Route::post(' /users.signup', 'CrudController@store')->name('users.signup');
//
//
//
//Route::get(' /login.html', 'ShopController@login');
//Route::post('/users.login','CrudController@check')->name('users.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get(' /','HomeController@logout');

