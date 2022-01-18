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

/* ------------------------------------------------------------------------------------ //
| Landing Page
*/
Route::get('/', 'HomeController@home');
Route::get('preface', 'HomeController@preface');
Route::get('events', 'HomeController@events');
Route::get('news', 'HomeController@news');
Route::get('media', 'HomeController@media');
Route::get('contact', 'HomeController@contact');

/* ------------------------------------------------------------------------------------ //
| Vendor Registration
*/
Route::get('registration', 'VendorController@register');
Route::get('verification', 'VendorController@check_ic');
// New Vendor
Route::get('new-registration/{get_ic}', 'VendorController@new_register');
// Existing Vendor
Route::get('update-registration/{user_id}', 'VendorController@update_register');

/* ------------------------------------------------------------------------------------ //
| Admin Panel
*/
Route::get('dashboard', 'DashboardController@dashboard');
Route::get('admin-news', 'HUNNewsController@news');
Route::get('seminars', 'DashboardController@seminars');
Route::get('vendors', 'DashboardController@vendors');
// Vendor Management
Route::get('vendors', 'DashboardController@vendors');
Route::get('update-vendor/{vendor_id}', 'DashboardController@update_vendor');
Route::post('edit-vendor/{vendor_id}', 'DashboardController@edit_vendor');
Route::get('delete-vendor/{vendor_id}', 'DashboardController@destroy_vendor');
// User Management
Route::get('users', 'DashboardController@users');
Route::get('create-user', 'DashboardController@create_user');
Route::post('store-user', 'DashboardController@store_user');
Route::get('update-user/{user_id}', 'DashboardController@update_user');
Route::post('edit-user/{user_id}', 'DashboardController@edit_user');
Route::get('delete-user/{user_id}', 'DashboardController@destroy_user');