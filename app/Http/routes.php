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

/* Page d'accueil */
Route::get('/', 'WelcomeController@index');

/* Route pour les pages */
Route::bind('pages',function($slug) {
	return Opus15\Page::where('slug',$slug)->first();
});
$router->resource('pages','PageController');
//Route::get('/{parent}/{title}-{id}', 'PageController@show')->where(['id' => '[0-9]+', 'parent' => '[a-z]+', 'title' => '[a-z]+']);Route::get('/page', 'PageController@index');

/* Route pour les évènements */
Route::get('/evenements', 'EventController@index');
Route::get('/evenements/{id}-{name}', 'EventController@show')->where(['id' => '[0-9]+']);
Route::get('/{parent}/{title}-{id}', 'PageController@show')->where(['id' => '[0-9]+', 'parent' => '[a-z]+', 'title' => '[a-z]+']);