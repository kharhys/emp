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
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/add', 'CustomerController@add');
Route::post('/customers/create', 'CustomerController@create');
Route::post('/customers/update', 'CustomerController@update');
Route::get('/customers/view/{phone}', 'CustomerController@view');
Route::get('/customers/edit/{phone}', 'CustomerController@edit');
Route::get('/customers/delete/{phone}', 'CustomerController@delete');
