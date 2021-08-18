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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', 'UserController@Index');

Route::get('user/page', 'UserController@Page');

Route::get('home/vm','UserController@VM');

Route::get('/sejarah', 'UserController@Sejarah');

Route::get('user/galeri', 'UserController@Galeri');

Route::get('user/jurus', 'UserController@Jurus');

