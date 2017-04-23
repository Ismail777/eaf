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

//Employee routes:
Route::resource ('employee' , 'EmployeeController', ['except'=>['create','store']]);
Route::get ('employee/{employee}/create',['uses'=>'EmployeeController@create' ,'as'=>'employee.create']);
Route::post ('employee/{employee}/store',['uses'=>'EmployeeController@store' ,'as'=>'employee.store']);
Route::get ('search_employee',['uses'=>'EmployeeController@search', 'as'=>'employee.search']);

//Employee only routes
Route::resource ('employeeDocs' , 'EmployeeDocumentsController');


//candidate Routes
Route::get ('search',['uses'=>'CandidateController@search', 'as'=>'candidate.search']);
Route::resource ('candidate' , 'CandidateController');
Route::PUT ('candidate/{id}/update',['uses'=>'CandidateController@interviewUpdate', 'as'=>'interview']);



//candidate Emails Routes
Route::get ('candidate/{id}/complete',['uses'=>'DeclarationController@getFormComplete', 'as'=>'form_complete']);
Route::get('candidate/{id}/invite', ['uses'=>'EmailsController@getInvitation', 'as'=>'invite.create']);
Route::post('candidate/{id}/invite', 'EmailsController@postInvite')->name('invite.post');
Route::post('candidate/{id}/E_profile', 'EmailsController@postProfile')->name('E_profile.post');
Route::get('candidate/{id}/rejectEmail', 'EmailsController@sendRejectionLetter')->name('rejectEmail');
Route::get ('test',function (){
	dd (Config::get('mail'));
});

//candidate outcome Routes
Route::get('candidate/{id}/outcome', ['uses'=>'OutcomeController@create', 'as'=>'outcome.create']);
Route::post('candidate/{id}/outcome', 'OutcomeController@store')->name('outcome.store');
Route::get('candidate/{id}/result', ['uses'=>'OutcomeController@show', 'as'=>'outcome.show']);


//Forms Routes
Route::get ('/',['uses'=>'personalInfoController@create', 'as'=>'personal.create']);
Route::post ('personal/store',['uses'=>'personalInfoController@store','as'=>'personal.store']);

Route::get ('position/create',['uses'=>'PositionController@create', 'as'=>'position.create']);
Route::post ('position/store',['uses'=>'PositionController@store','as'=>'position.store']);

Route::get ('education/create',['uses'=>'EducationController@create', 'as'=>'education.create']);
Route::post ('education/store',['uses'=>'EducationController@store','as'=>'education.store']);

Route::get ('employment/create',['uses'=>'EmploymentController@create', 'as'=>'employment.create']);
Route::post ('employment/store',['uses'=>'EmploymentController@store','as'=>'employment.store']);

Route::get ('declaration/create',['uses'=>'DeclarationController@create', 'as'=>'declaration.create']);
Route::post ('declaration/store',['uses'=>'DeclarationController@store','as'=>'declaration.store']);

Route::get ('employment/create/2',['uses'=>'EmploymentController@createSecondForm', 'as'=>'employment.create2']);
Route::get ('education/create/2',['uses'=>'EducationController@createSecondForm', 'as'=>'education.create2']);
Route::post ('empStoreSecondForm',['uses'=>'EmploymentController@storeSecondForm','as'=>'employment.store2']);
Route::post ('edStoreSecondForm',['uses'=>'EducationController@storeSecondForm','as'=>'education.store2']);


//PDF
		Route::get('pdf/{id}',['uses'=>'CandidateController@pdf','as'=>'pdf']);


//Admins
	Route::prefix('admin')->group(function() {
Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin');
Route::post('/', 'Auth\AdminLoginController@login')->name('admin.submit');
});


Auth::routes();

