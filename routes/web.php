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

	$news = App\News::orderBy('id', 'desc')->limit(3)->get();

    return view('index')->with(['news'=>$news]);
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
Route::get('users/dictionary', 'DictionariesController@dictionary')->name('users.dictionary');
Route::post('users/dictionary/validate', 'DictionariesController@valid')->name('users.dictionary.valid');

Route::get('users/news', 'UsersController@news')->name('users.news')->middleware('auth');
Route::post('users/news/post', 'UsersController@newsPost')->name('users.news.post')->middleware('auth', 'isPresident');
Route::get('users/news/show', function()
{
	return view('users.newsShow');
})->name('users.news.show')->middleware('auth');