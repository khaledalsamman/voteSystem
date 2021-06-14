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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
route::get('/home', 'App\Http\Controllers\voteController@index')->name('/home');
route::get('/vote', 'App\Http\Controllers\voteController@store')->name('/vote'); 
route::get('/result', 'App\Http\Controllers\voteController@show')->name('/result');
route::POST('/del', 'App\Http\Controllers\voteController@delete')->name('/del');
route::get('/voting', 'App\Http\Controllers\voteController@vote')->name('/voting'); 
