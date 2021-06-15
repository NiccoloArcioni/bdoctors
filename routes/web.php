<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
/* route pagina welcome con dottori sponsorizzati e search */
Route::get('/', 'WelcomeController@index')->name('guest');
Route::post('/', 'WelcomeController@search')->name('guest.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/upload', 'UploadController@upload')->name('upload');

