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


Route::get('/', 'users\HomeController@index')->name('/');
Route::get('/register', 'users\UserController@register')->name('register');
Route::get('/login', 'users\UserController@login')->name('login');
