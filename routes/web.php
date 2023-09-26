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
    return view('welcome');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function () {
    // Auth::routes();
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('/admin/home', 'HomeController@index')->name('home');

    //schedule
    Route::get('/admin/schedule', 'ScheduleController@index');
    Route::get('/admin/add_schedule', 'ScheduleController@create');
    Route::post('/admin/schedule/create', 'ScheduleController@store');
    Route::get(' /admin/schedule/edit/{id}', 'ScheduleController@edit');
    Route::post('/admin/schedule/update/{id}', 'ScheduleController@update');
    Route::get(' /admin/schedule/delete/{id}', 'ScheduleController@destroy');
});
