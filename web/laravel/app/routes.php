<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('about', function() 
{
	return View::make('pages.about');
});

Route::get('contact', function() {
    return View::make('pages.contact');
});

Route::post('users/{id}/delete', 'UserController@delete');
Route::post('users/{id}/save', 'UserController@save');
Route::resource('users', 'UserController');
