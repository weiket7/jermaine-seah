<?php

Route::model('post', 'Post');
Route::model('slider', 'Slider');

Route::get('/', 'SiteController@index');
Route::get('about', 'SiteController@about');
Route::get('portfolio', 'SiteController@portfolio');
Route::get('services', 'SiteController@services');
Route::get('blog', 'SiteController@blog');
Route::get('post/{post}', 'SiteController@post');
Route::get('contact', 'SiteController@contact');
Route::get('{category_raw}', 'SiteController@category');


Route::group(array('prefix' => 'admin'), function()
{	 
	Route::get('post', 'PostController@index');
	Route::get('post/create', 'PostController@create');
	Route::post('post/create', 'PostController@createPost');
	Route::get('post/update/{post}', 'PostController@update');
	Route::post('post/update', 'PostController@updatePost');
	Route::get('post/order', 'PostController@order');
	Route::post('post/order', 'PostController@order');

	Route::get('slider', 'SliderController@index');
	Route::get('slider/create', 'SliderController@create');
	Route::post('slider/create', 'SliderController@createPost');
	Route::get('slider/update/{slider}', 'SliderController@update');
	Route::post('slider/update', 'SliderController@updatePost');
});