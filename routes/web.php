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

Auth::routes();

Route::get('/', 'users\HomeController@index')->name('/');
Route::get('/users/register', 'users\UserController@register')->name('users.register');
Route::get('/users/login', 'users\UserController@login')->name('users.login');


Route::get('/users/logout', 'users\UserController@logout');
//Route::get('/users/my-profile', 'users\UserController@my_profile')->name('my.profile')->middleware('auth:pengguna');
Route::get('/lender/profile', 'users\LenderController@my_profile')->name('lender.profile');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/market-place', 'users\HomeController@market_place')->name('market.place');
