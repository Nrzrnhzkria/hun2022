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
Route::get('media/{media_id}', 'HomeController@readmedia');
Route::get('contact', 'HomeController@contact');
Route::get('policy', 'HomeController@policy');

/* ------------------------------------------------------------------------------------ //
| Vendor Registration
*/
Route::get('registration', 'VendorController@register');
Route::get('verification', 'VendorController@check_ic');
// New Vendor
Route::get('new-registration/{get_ic}', 'VendorController@new_register');
Route::post('new-registration/store', 'VendorController@store');
Route::get('choose-booth', 'VendorController@booth');
Route::post('choose-booth/store', 'VendorController@store_booth');
Route::get('payment', 'VendorController@create_bill');
Route::get('payment-status', 'VendorController@payment_status');
Route::post('payment-callback', 'VendorController@callback');
// Existing Vendor
Route::get('update-registration/{user_id}', 'VendorController@update_register');
Route::post('exist-registration/store/{user_id}', 'VendorController@store_update');

Route::get('membership', 'TransactionController@create_bill');
Route::get('membership-status', 'TransactionController@payment_status');
Route::post('membership-callback', 'TransactionController@callback');

/* ------------------------------------------------------------------------------------ //
| Admin Panel
*/
Route::get('dashboard', 'DashboardController@dashboard');
// Booth Management
Route::get('booth', 'BoothController@booth');
Route::post('store-booth', 'BoothController@store_booth');
Route::post('edit-booth/{booth_id}', 'BoothController@edit_booth');
Route::get('delete-booth/{booth_id}', 'BoothController@destroy_booth');
Route::get('booth-details/{booth_id}', 'BoothController@booth_details');
Route::get('create-booth-details/{booth_id}', 'BoothController@create_booth_details');
Route::post('store-booth-details/{booth_id}', 'BoothController@store_booth_details');
Route::get('update-booth-details/{booth_id}/{details_id}', 'BoothController@update_booth_details');
Route::post('edit-booth-details/{booth_id}/{details_id}', 'BoothController@edit_booth_details');
Route::get('delete-booth-details/{booth_id}/{details_id}', 'BoothController@destroy_booth_details');
// Coupon Management
Route::get('coupon', 'CouponController@coupon');
Route::get('update-coupon/{coupon_id}', 'CouponController@update_coupon');
Route::post('edit-coupon/{coupon_id}', 'CouponController@edit_coupon');
Route::get('delete-coupon/{coupon_id}', 'CouponController@destroy_coupon');
// Media Management
Route::get('admin-media', 'MediaController@media');
Route::get('create-media', 'MediaController@create_media');
Route::post('store-media', 'MediaController@store_media');
Route::get('update-media/{media_id}', 'MediaController@update_media');
Route::post('edit-media/{media_id}', 'MediaController@edit_media');
Route::get('delete-media/{media_id}', 'MediaController@destroy_media');
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
Route::get('admins', 'DashboardController@admins');
Route::get('create-user', 'DashboardController@create_admin');
Route::post('store-user', 'DashboardController@store_admin');
Route::get('update-admin/{user_id}', 'DashboardController@update_admin');
Route::post('edit-admin/{user_id}', 'DashboardController@edit_admin');
Route::get('delete-admin/{user_id}', 'DashboardController@destroy_admin');
Route::get('users', 'DashboardController@users');
Route::get('update-user/{user_id}', 'DashboardController@update_user');
Route::post('edit-user/{user_id}', 'DashboardController@edit_user');
Route::get('delete-user/{user_id}', 'DashboardController@destroy_user');