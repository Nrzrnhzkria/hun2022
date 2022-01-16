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

/*
| Landing Page
*/
Route::get('/', 'HomeController@home');
Route::get('preface', 'HomeController@preface');
Route::get('events', 'HomeController@events');
Route::get('news', 'HomeController@news');
Route::get('media', 'HomeController@media');
Route::get('contact', 'HomeController@contact');

/*
| Vendor Registration
*/
Route::get('registration', 'VendorController@register');
Route::get('verification', 'VendorController@check_ic');
// New Vendor
Route::get('new-registration/{get_ic}', 'VendorController@new_register');
// Existing Vendor
Route::get('update-registration/{user_id}', 'VendorController@update_register');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dashboard', 'DashboardController@dashboard');