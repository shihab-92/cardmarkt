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

Route::group(['middleware' => 'guest'], function()
{
	Route::get('/','PagesController@getHomePage');
	Route::post('/newsletter','PagesController@postNewsLetter');

	Route::get('/about','PagesController@getAboutPage');
	Route::get('/contact','PagesController@getContactPage');

	Route::get('/login','PagesController@getLoginPage');
	Route::post('/login','PagesController@authenticate');
	Route::get('/register','PagesController@getRegisterPage');
	Route::post('/register','PagesController@postRegisterPage');

	Route::get('/buy-gift-cards','PagesController@getBuyPage');
	Route::get('/sell-gift-cards', 'PagesController@getSellPage');
});

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/logout','PagesController@logout');
	Route::get('/admin','AdminController@getAdminPage');
});
