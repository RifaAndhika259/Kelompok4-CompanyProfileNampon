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


Route::get('/', 'UserController@Index');

Route::get('user/page', 'UserController@Page');

Route::get('home/vm','UserController@VM');

Route::get('/sejarah', 'UserController@Sejarah');

Route::get('user/galeri', 'UserController@Galeri');

Route::get('user/jurus', 'UserController@Jurus');

Route::get('user/manfaat', 'UserController@Manfaat');

Route::get('user/tujuan', 'UserController@Tujuan');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/jadwal', 'AdminController@jadwal');

Route::post('jadwal/create', 'AdminController@create');

Route::get('/admin/{id}/edit', 'AdminController@edit');

Route::post('/admin/{id}/update', 'AdminController@update');

Route::get('/admin/{id}/delete', 'AdminController@delete');

Route::get('/admin/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/{id}/delete', 'UploadController@delete');


