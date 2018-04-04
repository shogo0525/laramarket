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

Route::get('/', 'ProductController@index')->name('product.index');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::group(['prefix' => 'user'], function() {
  Route::group(['middleware' => 'guest'], function() {
    Route::get('/signup', 'UserController@signup')->name('user.signup');
    Route::post('/signup', 'UserController@postSignup')->name('user.signup');
  });

  Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::get('/logout', 'UserController@logout')->name('user.logout');
  });
});

Route::group(['middleware' => 'guest'], function() {
  Route::get('/login', 'UserController@login')->name('login');
  Route::post('/login', 'UserController@postLogin')->name('login');
});

