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

Route::resource ('candidate' , 'CandidateController');
Route::resource ('position', 'PositionController');
Route::resource ('education', 'EducationController');
Route::resource ('declaration', 'DeclarationController');
Route::resource ('employment', 'EmploymentController');
Route::get ('search',['uses'=>'CandidateController@search', 'as'=>'candidate.search']);



