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

//candidate Routes
Route::get ('candidate',['uses'=>'CandidateController@index', 'as'=>'candidate.index']);
Route::get ('search',['uses'=>'CandidateController@search', 'as'=>'candidate.search']);
Route::get ('candidate/{id}',['uses'=>'CandidateController@show', 'as'=>'candidate.show']);

//candidate invitation Email Routes
//Route::get('invite/{id}', ['uses'=>'CandidateController@getInvitation', 'as'=>'invite.create']);
//Route::post('invite/{id}', 'CandidateController@postInvite');


//candidate outcome Routes
Route::get('candidate/{id}/outcome', ['uses'=>'OutcomeController@create', 'as'=>'outcome.create']);
Route::post('candidate/{id}/outcome', 'OutcomeController@store')->name('outcome.store');
Route::get('candidate/{id}/result', ['uses'=>'OutcomeController@show', 'as'=>'outcome.show']);


//Forms Routes
Route::get ('personal/create',['uses'=>'personalInfoController@create', 'as'=>'personal.create']);
Route::post ('personal/store',['uses'=>'personalInfoController@store','as'=>'personal.store']);

Route::get ('position/create',['uses'=>'PositionController@create', 'as'=>'position.create']);
Route::post ('position/store',['uses'=>'PositionController@store','as'=>'position.store']);

Route::get ('education/create',['uses'=>'EducationController@create', 'as'=>'education.create']);
Route::post ('education/store',['uses'=>'EducationController@store','as'=>'education.store']);

Route::get ('employment/create',['uses'=>'EmploymentController@create', 'as'=>'employment.create']);
Route::post ('employment/store',['uses'=>'EmploymentController@store','as'=>'employment.store']);

Route::get ('declaration/create',['uses'=>'DeclarationController@create', 'as'=>'declaration.create']);
Route::post ('declaration/store',['uses'=>'DeclarationController@store','as'=>'declaration.store']);


//Route::post ('empStoreSecondForm',['uses'=>'EmploymentController@storeSecondForm','as'=>'employment.store2']);
//Route::post ('edStoreSecondForm',['uses'=>'EducationController@storeSecondForm','as'=>'education.store2']);


//PDF

Route::get ('pdf',['uses'=>'CandidateController@pdf','as'=>'pdf']);

//Admins
	Route::prefix('admin')->group(function() {
Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin');
Route::post('/', 'Auth\AdminLoginController@login')->name('admin.submit');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
