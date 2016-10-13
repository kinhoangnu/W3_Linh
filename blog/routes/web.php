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
Route::group(['middleware' => ['web']], function(){

	//Categories
	Route::resource('categories', 'CategoryController',['except'=>['create']]);
	Route::resource('tags', 'TagController',['except'=>['create']]);

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('/contact', 'PagesController@getContact');
	Route::get('/about', 'PagesController@getAbout');
	Route::get('/welcome', 'PagesController@getIndex');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
	Route::get('/user', 'UserController@index');
	Route::get('/user/{id}', [ 'as' => 'profile.edit', 'uses' => 'UserController@edit']);
	Route::get('/user/update/{id}', [ 'as' => 'profile.update', 'uses' => 'UserController@update']);
	Route::get('/user/showupdate/{id}', [ 'as' => 'profile.show', 'uses' => 'UserController@show']);
	Route::get('/getPDF', 'PDFController@getPDF');

	Auth::routes();

	Route::get('/home', 'HomeController@index');

});

