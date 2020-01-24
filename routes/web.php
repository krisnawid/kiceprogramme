<?php

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

Route::get('/', function () { return view('user.index'); });
Route::get('/joinus', 'UserController@registration');
Route::post('/joinus/proses', 'UserController@prosesregistration');
Route::get('/joinus/proses', 'UserController@registration');

//tes page
Route::get('/congratulation', function () { return view('user.congratulation'); });

Route::get('/user/syarat', function () { return view('user.syarat'); });

Route::get('/admin/data-tables', 'AdminController@dataregistration')->middleware('auth:admin');
Route::get('/admin/{id}/detaildatauser', 'AdminController@detaildatauser')->middleware('auth:admin');
Route::post('/admin/{id}/confirmdatauser', 'AdminController@confirmdatauser')->middleware('auth:admin');//confirmation update

Route::get('/admin/dataconfirmed', 'AdminController@dataconfirmed')->name('dataconfirmed')->middleware('auth:admin');
Route::get('/admin/datapending', 'AdminController@datapending')->name('datapending')->middleware('auth:admin');
// Route::get('/admin', function () { return view('admin.index'); });

// ///admin/data-tables

// Route::get('/admin','AdminController@index');

Route::get('/loginadmin', 'AdminController@login')->name('loginAdmin')->middleware('guest');
Route::post('/loginadmin', 'AdminController@postLogin')->middleware('guest');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth:admin');

Route::get('/logout', 'AdminController@logout')->middleware('auth:admin')->name('logoutAdmin');

//tes email
Route::get('/emailkonfirm', function () { return view('email.emailconfirmation'); });
