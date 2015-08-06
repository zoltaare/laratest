<?php 

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Pages Route
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Artiles Route
Route::get('articles', 'ArticleController@index');
Route::get('articles/create', 'ArticleController@create');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');














