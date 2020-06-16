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
Route::get('/admin', function () {
    return view('login1');
});
Route::get('/forget', function () {
    return view('forgot');
});
Route::post('/submitadmin','AdminController@submitlogin');
Route::post('/forget_account1','StudentController@activate2');

Route::post('/forget_account','StudentController@activate1');



Route::group(['middleware' => 'admin'], function () {
Route::get('/dash','AdminController@get');
Route::get('/category','CategoryController@get');
Route::post('/submitcate','CategoryController@submitdata');
Route::post('/change','CategoryController@submitchange');
Route::get('/delete_category/{id}','CategoryController@delete_cate');
Route::get('/complains','ComplainController@getadmin');

Route::get('/process/{id}','CategoryController@process');
Route::get('/done/{id}','CategoryController@done');

Route::get('/change_password_admin','AdminController@get1');
Route::post('/submitchangeadmin','AdminController@submitchange');

Route::get('/studentlist','AdminController@get4');

Route::get('/approval_stu/{id}','AdminController@get5');

Route::get('/logoutadmin','AdminController@logout');
});


///Student
 Route::group(['middleware' => 'student'], function () {
Route::get('/complain_make','ComplainController@get');
Route::post('/submit_complain','ComplainController@submitdata');
Route::post('/submit_complain1','ComplainController@submitdata1');
Route::get('/delete_complain/{id}','ComplainController@delete_cate');
Route::get('/view_complains/{id}','ComplainController@get22');
Route::get('/my_complain','ComplainController@get1');
Route::get('/view_complain/{id}','ComplainController@get2');
Route::get('/view_edit/{id}','ComplainController@get3');


Route::get('/all_complain','ComplainController@get4');

Route::get('/view/{id}','ComplainController@get5');


Route::get('/index','UserrecordController@get');



Route::get('/logout','UserrecordController@logout');
});

Route::get('/forget_stu', function () {
    return view('forgot1');
});
Route::get('/activeAccount', function () {
    return view('activepass');
});
Route::post('/submitlogin','UserrecordController@submitlogin');
Route::get('/change_password','StudentController@get');
Route::post('/submitchange','StudentController@submitchange');
Route::post('/active_account','StudentController@activate');
