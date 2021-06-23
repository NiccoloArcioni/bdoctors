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
Route::get('/search', 'WelcomeController@search')->name('guest.search');
Route::get('/detail/{id}', 'WelcomeController@detail')->name('doctor.detail');

// messaggi
// Route::post('/message','GuestMessageController@store');

Auth::routes();

// GESTIONE DASHBOARD

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/update', 'HomeController@updateProfile')->name('update');

// GESTIONE SEZIONI DASHBOARD
Route::get('/home/messages', 'HomeController@messages');
Route::get('/home/reviews', 'HomeController@reviews');
Route::get('/home/sponsor', 'HomeController@sponsor');
Route::get('/home/stats', 'HomeController@stats');
//vista statistiche dottore
Route::resource('/statistics', 'ChartController');
Route::get('/statistics', 'ChartController@index')->name('statistics');
