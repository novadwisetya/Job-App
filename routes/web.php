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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/login', function(){
    return view('auth.login');
});
// Route::get('/profile', function(){
//     return view('client.profile');
    
// });
Route::get('/akses', function(){
    return view('access.forbidden');
    
});
Route::get('/success', function(){
    return view('notice.success');
});
Route::resource('applicant', 'JobappController@show');
Route::resource('delete', 'JobappController@destroy');
Route::resource('accept', 'JobappController@update');
Route::get('/profile', 'JobappController@profile');
Route::get('/join', 'ApplicantController@index');
Route::post('/join', 'ApplicantController@store')->name('join_post');


Route::get('signup', 'UserController@signup')->name('signup');
Route::post('signup', 'UserController@signup_store')->name('signup.store');
//Route::get('/register', function(){
//    return view('auth.register');
//});
Route::get('/admin', 'JobappController@index');
Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');
Route::get('logout', 'SessionsController@logout')->name('logout');




