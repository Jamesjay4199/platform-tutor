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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@show')->name('dashboard');
Route::get('/notifications', function(){
	return view('teacher.notifications');
});
Route::get('/messages', function(){
	return view('teacher.messages');
});
Route::get('/jobs', function(){
	return view('teacher.jobs');
});
Route::get('/payments', function(){
	return view('teacher.payments');
});
Route::post('/editUser', 'UserController@update');

Route::get('/test-tutor', function(){
	return view('test.tutor');
});

Route::get('/subjects', 'SubjectController@index');

Route::post('/subjects', 'SubjectController@store');

Route::get("my-search","HomeController@mySearch");





























//should be the last route
Route::get('/{username}', 'UserController@profile');
Route::get('/{username}/subjects', function($username){
	return view('teacher.subjects');
});
