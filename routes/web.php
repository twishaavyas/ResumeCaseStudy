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

Route::get('upload', function(){
    return view('resume.upload');
});

Route::post('upload_file', [
	'uses' => 'ResumeController@uploadFile'
	]);

Route::get('/download', 'ResumeController@download');