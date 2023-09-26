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

Use Illuminate\Support\Facades\Mail;
Route::get('/', function () {
    return view('admin.index');
});
// //////////////////
// Route::get('/userlogin', function () {
//     return view('admin.upload');
// });
// // Route::post('/userlogin', 'ApplyController@upload');
// // Route::post('/login', 'UserloginController@store');


// // Route::get('/login', function () {
// //     return view('admin.login');
// // });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/editprofile', function () {
//     return view('admin.editprofile');
// });

// Route::get('/admin', function () {
//     return view('admin.adminlogin');
// });



Route::get('/basicemail', 'MailController@basic_email');
Route::post('/basicemail', 'MailController@basic_email');
Route::get('/htmlemail', 'MailController@html_email');
Route::get('/attachemail', 'MailController@attaachment_email');





//////////////////////

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/home', function () {
//     return view('admin.home');
// });
//     Route::get('/home', 'UserloginController@index');
//     // Route::get('/home', 'UserloginController@destroy');
//     Route::post('/{id}/delete',['as'=>'deleteUser','uses'=>'UserloginController@destroy']);
// });

/////////////////from another route
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
 // Route::get('/home', 'HomeController@index');
  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index');
    Route::get('/', 'AdminController@userinformation');
    Route::post('/{id}/delete',['as'=>'deleteUser','uses'=>'AdminController@destroy']);
  });

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/editprofile', function () {
     return view('admin.editprofile');
});
Route::post('/{id}/edit',['as' =>'postEditRoute', 'uses'=>'EdituserController@update'] );
    
});

// Route::group(['middleware' => 'auth:admin'], function() {
//     Route::get('/home', function () {
//     return view('admin.home');
// });
    // Route::get('/admin', 'UserloginController@index');
    
    
    // Route::post('/{id}/delete',['as'=>'deleteUser','uses'=>'UserloginController@destroy']);
    // });