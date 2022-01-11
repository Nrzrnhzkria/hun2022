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

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/events', 'HomeController@events');
Route::get('/news', 'HomeController@news');
Route::get('/media', 'HomeController@media');
Route::get('/contact', 'HomeController@contact');

Route::get('/register', 'HomeController@register');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
