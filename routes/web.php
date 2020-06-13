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

Route::get('/', function () {
    return view('login');
});
////Admin
Route::get('/category','CategoryController@get');
Route::post('/submitcate','CategoryController@submitdata');
Route::post('/change','CategoryController@submitchange');
Route::get('/delete_category/{id}','CategoryController@delete_cate');



///Student
Route::get('/complain_make','ComplainController@get');
Route::post('/submit_complain','ComplainController@submitdata');
Route::post('/submit_complain1','ComplainController@submitdata1');
Route::get('/delete_complain/{id}','ComplainController@delete_cate');

Route::get('/my_complain','ComplainController@get1');
Route::get('/view_complain/{id}','ComplainController@get2');
Route::get('/view_edit/{id}','ComplainController@get3');
Route::post('/active_account','StudentController@activate');

Route::get('/all_complain','ComplainController@get4');

Route::get('/view/{id}','ComplainController@get5');

Route::post('/submitlogin','UserrecordController@submitlogin');
Route::get('/index','UserrecordController@get');
Route::get('/activeAccount', function () {
    return view('activepass');
});
Route::get('/change_password','StudentController@get');
Route::post('/submitchange','StudentController@submitchange');
Route::get('/logout','UserrecordController@logout');
