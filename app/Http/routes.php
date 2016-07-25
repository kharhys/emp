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

Route::get('/', 'SiteController@index');
Route::post('/login', 'SiteController@login');

Route::get('/customers/add', 'CustomerController@add'); //no popup
Route::post('/customers/create', 'CustomerController@create');
Route::post('/customers/update', 'CustomerController@update');
Route::get('/customers/view/{phone}', 'CustomerController@view'); //no popup
Route::get('/customers/edit/{phone}', 'CustomerController@edit');
Route::get('/customers/delete/{phone}', 'CustomerController@delete');
Route::get('/customers/{name?}', 'CustomerController@index');

Route::get('/customers/newpopup', 'CustomerController@newpopup'); //popup
Route::get('/customers/showpopup/{phone}', 'CustomerController@showpopup'); //popup

Route::get('/users', 'UserController@index');
Route::get('/users/add', 'UserController@add');
Route::post('/users/create', 'UserController@create');
Route::post('/users/update', 'UserController@update');
Route::get('/users/view/{email}', 'UserController@view');
Route::get('/users/edit/{email}', 'UserController@edit');
Route::get('/users/delete/{email}', 'UserController@delete');
