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

Route::get('/', 'General\PagesController@index')->middleware('auth');
Route::get('/about', 'General\PagesController@about')->name('about');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');