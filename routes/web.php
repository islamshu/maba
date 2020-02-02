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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','HomeController@index');
Route::get('/products/{id}','HomeController@show');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/lgoin','Auth\LoginController@login');
Route::resource('/profile', 'ProfileController');
Route::resource('/cart', 'CartController');
Route::get('pdf','ProductController@generatePDF');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('fblogin');
Route::get('login/facebook/callback','Auth\LoginController@handelFacebookCallback')->name('fbcallback');

Route::resource('/admin/users', 'UserController')->middleware(['auth']);
Route::resource('/admin/products', 'ProductController')->middleware(['auth']);
Route::resource('/admin/sliders', 'SliderController')->middleware(['auth']);

