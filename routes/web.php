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

Route::get('/', 'Carcontroller@index');
Route::resource('/cars', 'CarController');
Route::get('/login', 'UsersController@login')->name('users.login');
Route::get('/auth', 'UsersController@auth')->name('users.auth');
Route::post('/logout', 'UsersController@logout')->name('users.logout');
Route::POST('/register', 'UsersController@register')->name('users.register');

Route::get('/about',function(){
    return view('about');
});