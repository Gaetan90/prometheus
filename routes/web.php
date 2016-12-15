<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if(Auth::check())
	{
		Auth::logout();
		return redirect()->route('index');
	}

    return view('index');
})->name('index');

Route::get('users/login', 'UsersController@login')->name('users.login');
Route::post('users/authenticate', 'UsersController@authenticate')->name('users.authenticate');
Route::get('users/index', 'UsersController@index')->name('users.index')->middleware('auth');
Route::get('users/logout', 'UsersController@logout')->name('users.logout')->middleware('auth');
Route::get('users/parameters', 'UsersController@parameters')->name('users.parameters')->middleware('auth');
Route::post('users/parameters/edit', 'UsersController@parametersEdit')->name('users.parameters.edit')->middleware('auth');
Route::get('users/trombinoscope', 'UsersController@trombinoscope')->name('users.trombinoscope')->middleware('auth');
Route::get('users/trombinoscope/autocomplete', function()
{
	return view('autocomplete');
})->name('users.trombinoscope.autocomplete')->middleware('auth');
Route::get('users/trombinoscope/searchUser', function()
{
	return view('searchUser');
})->name('users.trombinoscope.searchUser')->middleware('auth');
Route::get('users/trombinoscope/showTable', function()
{
	return view('showTable');
})->name('users.trombinoscope.showTable')->middleware('auth');
Route::get('users/trombinoscope/informations', function()
{
	return view('informations');
})->name('users.trombinoscope.informations')->middleware('auth');
