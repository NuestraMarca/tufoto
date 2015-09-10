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

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', ['uses' => 'WebSiteController@index', 'as' => 'website.index']);
Route::get('producto', 'WebSiteController@product');
Route::get('tarifas', 'WebSiteController@pricing');
Route::get('nosotros', 'WebSiteController@we');
Route::get('contacto', 'WebSiteController@contact');
Route::post('contacto/contactar', 'WebSiteController@postContact');
Route::get('buscar', 'WebSiteController@search');

Route::resource('galerias', 'CategoriesController', ['only' => ['index', 'show']]);
Route::get('galerias/{type}/{gallery}', 'CategoriesController@gallery');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
