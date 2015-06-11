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

Route::get('/', 'WebSiteController@index');
Route::get('producto', 'WebSiteController@product');
Route::get('tarifas', 'WebSiteController@pricing');
Route::get('nosotros', 'WebSiteController@we');
Route::get('reservas', 'WebSiteController@booking');
Route::post('reservas/reservar', 'WebSiteController@postBooking');
Route::get('buscar', 'WebSiteController@search');

Route::resource('galerias', 'CategoriesController', ['only' => ['index', 'show']]);
Route::get('galerias/{type}/{gallery}', 'CategoriesController@gallery');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
