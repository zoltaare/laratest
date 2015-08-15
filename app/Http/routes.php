<?php 

// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


// Pages Route
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Attaching middleware directly in routes
// Route::get('contact', '[''middleware' => 'auth', 'uses' => 'PagesController@contact']);

// Artiles Route
// Route::get('articles', 'ArticleController@index');
// Route::get('articles/create', 'ArticleController@create');
// Route::get('articles/{id}', 'ArticleController@show');
// Route::post('articles', 'ArticleController@store');

Route::resource('articles', 'ArticleController');






/* ======================================IGNORE==================================== */
//Sample of Middleware process.
Route::get('foo', ['middleware' => 'foo', function(){ return "Welcome Fooer"; }]);
/* ======================================IGNORE==================================== */