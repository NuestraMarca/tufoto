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

use App\Entities\Category;
use App\Entities\ProviderType;

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

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

Route::resource('proveedores', 'ProvidersController', ['only' => ['index', 'show']]);

Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', function(){
			return view('dashboard/pages/home');
	});

	Route::resource('categories', 'CategoriesController');
	Route::resource('categories.galleries', 'CategoriesGalleriesController');
	Route::get('categories/{categories}/galleries/{galleries}/add-cover', [
		'uses' 	=> 'CategoriesGalleriesController@addCover',
		'as'	=> 'admin.categories.galleries.add-cover'
	]);
	Route::post('categories/{categories}/galleries/{galleries}/add-photo', [
		'uses' 	=> 'CategoriesGalleriesController@addPhoto',
		'as'	=> 'admin.categories.galleries.add-photo'
	]);
	Route::delete('categories/{categories}/galleries/{galleries}/delete-photo', [
		'uses' 	=> 'CategoriesGalleriesController@destroyPhoto',
		'as'	=> 'admin.categories.galleries.delete-photo'
	]);

	Route::get('generate-galleries', function(){
		foreach(Category::all() as $category ){
			foreach ($category->galleries as $gallery) {
				$gallery->generateSmalls();
			}
		}

		return ':)';
	});

	Route::resource('providertypes', 'ProviderTypesController');
	
	Route::resource('providertypes.providers', 'ProviderTypesProvidersController');
	Route::get('providertypes/{providertypes}/providers/{providers}/add-cover', [
		'uses' 	=> 'ProviderTypesProvidersController@addCover',
		'as'	=> 'admin.providertypes.providers.add-cover'
	]);
	Route::post('providertypes/{providertypes}/providers/{providers}/add-photo', [
		'uses' 	=> 'ProviderTypesProvidersController@addPhoto',
		'as'	=> 'admin.providertypes.providers.add-photo'
	]);
	Route::delete('providertypes/{providertypes}/providers/{providers}/delete-photo', [
		'uses' 	=> 'ProviderTypesProvidersController@destroyPhoto',
		'as'	=> 'admin.providertypes.providers.delete-photo'
	]);

	Route::get('generate-providers', function(){
		foreach(ProviderType::all() as $type ){
			foreach ($type->providers as $provider) {
				$provider->generateSmalls();
			}
		}

		return ':)';
	});
});

