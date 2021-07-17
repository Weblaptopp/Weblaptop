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
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {	
	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
    Route::get('reset','ForgotPasswordController@getFormResetPassword')->name('resetPassword');
    Route::post('recover-pass','ForgotPasswordController@recover_pass')->name('recover_pass'); 
    Route::get('update-new-pass','ForgotPasswordController@update_new_pass')->name('update_new_pass');
    Route::post('reset-new-pass','ForgotPasswordController@reset_new_pass')->name('reset_new_pass');
});
Route::group(['middleware' => 'CheckAdminLogin'], function() {
Route::resource('admin/dashboard',admin\DashboardController::class);
Route::resource('admin/sanpham',admin\SanPhamController::class);
Route::resource('admin/donhang',admin\DonHangController::class);
Route::resource('admin/chitietdonhang',admin\ChiTietDonHangController::class);
Route::resource('admin/baohanh',admin\BaoHanhController::class);
Route::resource('admin/danhmuc',admin\DanhMucController::class);
Route::resource('admin/kho',admin\KhoController::class);
Route::resource('admin/binhluan',admin\BinhLuanController::class);
Route::resource('admin/khuyenmai',admin\KhuyenMaiController::class);
Route::resource('admin/taikhoan',admin\TaiKhoanController::class);
Route::resource('admin/nhacungcap',admin\NhaCungCapController::class);
Route::resource('admin/slideshow',admin\SlideshowController::class);
});
Route::group(['prefix' => 'user', 'namespace' => 'user'], function() {
	Route::get('index','PageController@index')->name('user.index');
    Route::get('mail','PageController@mail')->name('user.mail');
    Route::get('checkout','PageController@checkout')->name('user.checkout');
    Route::get('product','PageController@product')->name('user.product');
    Route::get('single{id}','PageController@single')->name('user.single');
    Route::get('register','PageController@register')->name('user.register');
    Route::get('login','LoginController@getLogin1')->name('getLogin1');
    Route::post('login','LoginController@postLogin1')->name('postLogin1');
    Route::get('logout','LoginController@getLogout1')->name('getLogout1');
    Route::post('user/register','PageController@postRegister')->name('postRegister');
    Route::get('search','PageController@Search')->name('Search');
});
Route::get('/', function () { 
    return view('welcome');
});
