<?php

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
//    return view('welcome');
//});

Route::get('/','HomeController@index')->name('home');

Route::get('/shop','ShopController@show')->name('shop');
Route::get('/product/{slug}','ProductController@show')->name('product');

Route::get('/shopingcart','CartController@show')->name('cart.index');
Route::post('/shopingcart','CartController@store')->name('cart.store');
Route::delete('/shopingcart/{id}','CartController@destroy')->name('cart.destroy');
Route::post('/','CartController@emptycart')->name('cart.empty');

Route::get('/contact','ContactController@show')->name('contact');
Route::post('/contactme','ContactController@send')->name('contactme');

Route::get('/about','Aboutcontroller@show')->name('about');

Route::get('/blog','Blogcontroller@show')->name('blog');
Route::get('/blog_detail/{slug}','BlogdetailController@show')->name('blog_detail');
