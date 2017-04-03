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
	return view('app');
});

Route::get('/create', function () {
	return view('create');
});
Route::get('/edit', function () {
	return view('edit');
});
Route::get('email', 'EmailController@getForm');
Route::get('email_ok', 'EmailController@postForm');
Route::get('/home', function () {
	return view('home');
});
Route::get('/index', function () {
	return view('index');
});
Route::get('/show', function () {
	return view('show');
});
Route::get('/template', function () {
	return view('template');
});





Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::resource('user', 'UserController');