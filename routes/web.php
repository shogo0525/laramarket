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

Route::get('/signup', 'UserController@signup')->name('user.signup');
Route::post('/signup', 'UserController@postSignup')->name('user.signup');

Route::get('/signin', 'UserController@signin')->name('user.signin');
Route::post('/signin', 'UserController@postSignin')->name('user.signin');

Route::get('/user/profile', 'UserController@profile')->name('user.profile');