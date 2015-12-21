<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'RegisterController@index');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
Route::get('/admin', 'RegisterController@admin');
Route::post('/admin', 'RegisterController@adminCheck');
Route::get('/logout', 'RegisterController@logout');
Route::group(['middleware' => 'AdminAuth'], function() {
	Route::get('/registrants', 'RegisterController@view');
	Route::get('/registrants2', 'RegisterController@view2');
});

