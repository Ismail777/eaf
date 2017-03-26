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

//Route::resource ('candidate' , 'CandidateController');
//candidate Routes
Route::get ('candidate',['uses'=>'CandidateController@search', 'as'=>'candidate.index']);
Route::get ('candidate/{id}',['uses'=>'CandidateController@show', 'as'=>'candidate.show']);

//Invitation Email Routes
Route::get('invite', ['uses'=>'CandidateController@getInvite ', 'as'=>'invite.create']);
Route::post('invite', 'CandidateController@postInvite');


//personalInfoController Routes
Route::get ('personal/create',['uses'=>'personalInfoController@create', 'as'=>'personal.create']);
Route::post ('personal/store',['uses'=>'personalInfoController@store','as'=>'personal.store']);


Route::resource ('position', 'PositionController');
Route::resource ('education', 'EducationController');
Route::resource ('declaration', 'DeclarationController');
Route::resource ('employment', 'EmploymentController');
Route::get ('search',['uses'=>'CandidateController@search', 'as'=>'candidate.search']);
Route::post ('empStoreSecondForm',['uses'=>'EmploymentController@storeSecondForm','as'=>'employment.store2']);
Route::post ('edStoreSecondForm',['uses'=>'EducationController@storeSecondForm','as'=>'education.store2']);

//PDF
Route::get ('pdf',['uses'=>'CandidateController@show','as'=>'pdf']);



Auth::routes();

Route::get('/home', 'HomeController@index');
