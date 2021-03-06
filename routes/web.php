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

Route::resource('resume', 'ResumeController');

Route::get('/submit_cv', ['as' => 'resume.create', 'uses' => 'ResumeController@create']);

Route::get('/manage_cv', ['as' => 'resume.index', 'uses' => 'ResumeController@index']);

Route::get('/manage_cv/{resume}/edit', ['as' => 'resume.edit', 'uses' => 'ResumeController@edit']);