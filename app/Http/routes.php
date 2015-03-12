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
Route::bind('events',function($slug) {
    return Opus15\Event::where('slug',$slug)->first();
});
$router->resource('events','EventController');
/* Route pour les évènements */
Route::bind('news',function($slug) {
    return Opus15\News::where('slug',$slug)->first();
});
$router->resource('news','NewsController');