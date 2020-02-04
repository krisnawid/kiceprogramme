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

#redirect halaman home denga menggunakan bahasa english
Route::redirect('/', '/en');

#redirect halaman admin agar mengarah pada login
Route::redirect('/admin', '/admin/loginadmin');

#grouping language untuk melakukan switch lenguage
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () { return view('user.index'); });
    Route::get('/joinus', 'UserController@registration');
    Route::post('/joinus/proses', 'UserController@prosesregistration');
    Route::get('/joinus/proses', 'UserController@registration');
    


    Route::get('/procedure', function () { return view('user.syarat'); });
});

#grouping dengan menggunakan prefix admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('/data-tables', 'AdminController@dataregistration')->middleware('auth:admin');
    Route::get('{id}/detaildatauser', 'AdminController@detaildatauser')->middleware('auth:admin');
    Route::post('{id}/confirmdatauser', 'AdminController@confirmdatauser')->middleware('auth:admin');//confirmation update
    
    Route::get('dataconfirmed', 'AdminController@dataconfirmed')->name('dataconfirmed')->middleware('auth:admin');
    Route::get('datapending', 'AdminController@datapending')->name('datapending')->middleware('auth:admin');
    // Route::get('/admin', function () { return view('admin.index'); });
    
    // ///admin/data-tables
    
    // Route::get('/admin','AdminController@index');
    
    Route::get('/loginadmin', 'AdminController@login')->name('loginAdmin')->middleware('guest');
    Route::post('/loginadmin', 'AdminController@postLogin')->middleware('guest');
    
    Route::get('/dashboard', 'AdminController@index')->name('admin')->middleware('auth:admin');
    
    Route::get('/logout', 'AdminController@logout')->middleware('auth:admin')->name('logoutAdmin');
    
    //tes email
    Route::get('/emailkonfirm', function () { return view('email.emailconfirmation'); });

});

