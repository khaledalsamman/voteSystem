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
Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');

route::get('/', 'App\Http\Controllers\voteController@index')->name('/');
route::POST('/store', 'App\Http\Controllers\voteController@store')->name('/store');
route::get('/result', 'App\Http\Controllers\voteController@result')->name('/result');
route::POST('/del', 'App\Http\Controllers\voteController@delete')->name('/del');

