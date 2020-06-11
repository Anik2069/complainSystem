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
Route::post('/submitcate','CategoryController@submitdata');
Route::post('/change','CategoryController@submitchange');
Route::get('/delete_category/{id}','CategoryController@delete_cate');
