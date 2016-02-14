<?php


Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

// Task Routes
Route::get('tasks', 'TaskController@index');
Route::post('task', 'TaskController@add');
Route::delete('task/{task}','TaskController@destroy');


// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Initial nu stiam sa fac rutele si am incercat un php artisan route:list :))