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

Route::get('/admin/data-tables', 'AdminController@dataregistration');
Route::get('/admin/{id}/detaildatauser', 'AdminController@detaildatauser');
Route::get('/admin', function () { return view('admin.index'); });

///admin/data-tables

Route::get('/admin','AdminController@index');