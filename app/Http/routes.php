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

	Route::get('/login','PagesController@getLoginPage');
	Route::post('/login','PagesController@authenticate');
	Route::get('/register','PagesController@getRegisterPage');
	Route::post('/register','PagesController@postRegisterPage');
	Route::post('/newsletter','PagesController@postNewsLetter');
});

Route::group(['middleware' => 'web'], function()
{
	Route::get('/','PagesController@getHomePage');

	Route::get('/about','PagesController@getAboutPage');

	Route::get('/contact','PagesController@getContactPage');
	Route::post('/contact','MailController@sendContactMail');

	Route::get('/buy-gift-cards','PagesController@getBuyPage');
	Route::get('/sell-gift-cards', 'PagesController@getSellPage');

	Route::post('/admin-register','PagesController@postRegisterPage');
});

Route::group(['middleware' => 'auth'], function()
{

	Route::get('/logout','PagesController@logout');
	Route::get('/admin','AdminController@getAdminPage');

	Route::get('/add-users','featureController@addUsers');
	Route::get('/view-users','featureController@getUsers');
	Route::get('/view-users/{id}','featureController@editUsers');
	Route::post('/update-user/{id}','featureController@updateUser');
	Route::get('/delete-user/{id}','featureController@deleteUser');

	Route::get('/add-category','categoryController@addcategory');
	Route::post('/store-category','categoryController@storecategory');

	Route::get('/add-subcategory','categoryController@addsubcategory');
	Route::post('/store-subcategory','categoryController@storesubcategory');

	Route::get('/view-category','categoryController@viewCategory');
	Route::get('/edit-category/{id}','categoryController@editCategory');
	Route::post('/update-category/{id}','categoryController@updateCategory');
	Route::get('/delete-category/{id}','categoryController@deleteCategory');
	Route::get('/edit-category-relation/{id}','categoryController@editCategoryRelation');
	Route::post('/update-category-relation/{id}','categoryController@updateCategoryRelation');


	
});
