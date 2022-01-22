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
Route::get('introduction', 'HomeController@intro');
Route::get('events', 'HomeController@events');
Route::get('news', 'HomeController@news');
Route::get('news/{news_id}', 'HomeController@readmore');
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


Route::get('toyyibpay', 'TransactionController@create_bill');
Route::get('toyyibpay-status', 'TransactionController@payment_status');
Route::post('toyyibpay-callback', 'TransactionController@callback');

/* ------------------------------------------------------------------------------------ //
| Admin Panel
*/
Route::get('dashboard', 'DashboardController@dashboard');
// News Management
Route::get('admin-news', 'HUNNewsController@news');
Route::get('create-news', 'HUNNewsController@create_news');
Route::post('store-news', 'HUNNewsController@store_news');
Route::get('update-news/{news_id}', 'HUNNewsController@update_news');
Route::post('edit-news/{news_id}', 'HUNNewsController@edit_news');
Route::get('delete-news/{news_id}', 'HUNNewsController@destroy_news');
// Seminar Management
Route::get('attendance', 'SeminarAttendanceController@attendance');
Route::get('qrcode', 'SeminarQRController@qrcode');
Route::get('create-qr', 'SeminarQRController@create_qr');
Route::post('store-qr', 'SeminarQRController@store_qr');
Route::get('update-qr/{qr_id}', 'SeminarQRController@update_qr');
Route::post('edit-qr/{qr_id}', 'SeminarQRController@edit_qr');
Route::get('delete-qr/{qr_id}', 'SeminarQRController@destroy_qr');
Route::get('register-seminar/{qr_id}', 'SeminarQRController@registeruser');
Route::post('download-qr/{type}/{qr_id}', 'SeminarQRController@downloadQRCode')->name('qrcode.download');
Route::get('register-success/{qr_id}/{user_id}', 'SeminarQRController@registersuccess');
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