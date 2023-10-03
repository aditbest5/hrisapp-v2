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
    Route::get('/admin/home', 'HomeController@index')->name('home'); // Route Dashboard / Home

    //Data Routes..
    Route::get('department', 'HomeController@department')->name('department'); // Route Department
    Route::get('division', 'HomeController@division')->name('division'); // Route Division
    Route::get('job-title', 'HomeController@jobTitle')->name('job-title');
    Route::get('status', 'HomeController@status')->name('status');
    Route::get('allowance', 'HomeController@department')->name('allowance');
    Route::get('leave-form', 'HomeController@leaveForm')->name('leave-form');
    Route::post('create-department', 'DepartmentController@store'); // Route create department API
    Route::get('/edit/department={id}', 'DepartmentController@edit'); // Route edit department
    Route::get('add-department', 'DepartmentController@index')->name('add-department'); // Route add department
    Route::patch('/update-department/{id}', 'DepartmentController@update'); // Route update department API
    Route::delete('/delete-department/{id}', 'DepartmentController@destroy'); // Route delete department API
    Route::get('add-division', 'DivisionController@index'); // Route add division
    Route::post('create-division', 'DivisionController@store'); // Route create division API
    Route::delete('delete-division/{id}', 'DivisionController@destroy'); // Route delete division API
    Route::get('/edit/division={id}', 'DivisionController@edit'); // Route edit division
    Route::patch('/update-division/{id}', 'DivisionController@update'); // Route update division API
    Route::get('add-job-title', 'JobTitleController@index')->name('add-job-title'); // Route add division
    Route::post('/create-job-title', 'JobTitleController@store')->name('create-job-title'); // Route create job title API
    Route::get('/edit-job-title/{id}', 'JobTitleController@edit')->name('edit-job-title'); // Route edit job title
    Route::patch('/update-job-title/{id}', 'JobTitleController@update'); // Route update job title API
    Route::delete('/delete-job-title/{id}', 'JobTitleController@destroy'); // Route delete job API

    //Employee Routes..
    Route::get('/list-employee', 'HomeController@listEmployee')->name('list-employee'); // Route list employee
    Route::get('/add-employee', 'EmployeeController@index')->name('add-employee'); // Route add employee
    Route::get('/previous-form2', 'EmployeeController@step2')->name('previous.form2');
    Route::post('/employee/form1', 'EmployeeController@form1')->name('employee.form1');
    Route::get('/add-employee2', 'EmployeeController@step2')->name('employee.step2');
    Route::post('/employee/form2', 'EmployeeController@form2')->name('employee.form2');
    Route::post('/employee/form3', 'EmployeeController@form3')->name('employee.form3');
    Route::get('/add-employee3', 'EmployeeController@step3')->name('employee.step3');
    Route::get('/previous-form1', 'EmployeeController@previousStep1')->name('previous.form1');
    Route::delete('/delete-employee/{id}', 'EmployeeController@destroy');
    Route::get('/edit-employee/{id}', 'EmployeeController@edit')->name('edit-employee');
    Route::get('/edit-employee2/{id}', 'EmployeeController@editStep2')->name('edit-employee2');
    Route::get('/edit-employee3/{id}', 'EmployeeController@editStep3')->name('edit-employee3');
    Route::post('/edit-employee/form1', 'EmployeeController@editForm1')->name('employee.editForm1');
    Route::post('/edit-employee/form2', 'EmployeeController@editForm2')->name('employee.editForm2');
    Route::post('/edit-employee/form3', 'EmployeeController@editForm3')->name('employee.editForm3');
    Route::get('/previous-editForm1/{id}', 'EmployeeController@previousEdit1')->name('previous.editForm1');
    Route::get('/previous-editForm2/{id}', 'EmployeeController@previousEdit2')->name('previous.editForm2');







    //schedule
    Route::get('/admin/schedule', 'ScheduleController@index');
    Route::get('/admin/add_schedule', 'ScheduleController@create');
    Route::post('/admin/schedule/create', 'ScheduleController@store');
    Route::get(' /admin/schedule/edit/{id}', 'ScheduleController@edit');
    Route::post('/admin/schedule/update/{id}', 'ScheduleController@update');
    Route::get(' /admin/schedule/delete/{id}', 'ScheduleController@destroy');
});
