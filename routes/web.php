<?php

/*
|--------------------------------------------------------------------------
| Panel Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => 'admin'], function () {
	Route::get('panel', 'AdminController@index');
	Route::get('portalwasi', 'AdminController@portalwasi');
});
Auth::routes();
/*
|--------------------------------------------------------------------------
| Panel Routes - Usuarios
|--------------------------------------------------------------------------
*/
Route::get('usuarios',function(){ return 'No hay usuarios registrados.'; });
Route::get('/usuario/{id}',function($id){ return "mostrando detalle del usuario: {$id}"; });
Route::get('usuario/nuevo',function(){ return 'Crear usuario nuevo'; });
Route::get('saludo{name}/{nickname?}',function($name, $nickname = null){ 
    ($nickname)?"Bienvenido{$name}, tu apodo es {$nickname}":"Bienvenido {$name}, no tienes apodo";
});
/*
|--------------------------------------------------------------------------
| Modules - Properties
|--------------------------------------------------------------------------
*/
Route::get('propiedades',
	[
		'as'   => 'properties-list',
		'uses' => 'PropertiesController@getProperties'
	]);

/*
|--------------------------------------------------------------------------
| WebSite Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'HomeController@index')->name('/');
Route::get('sobre-nosotros', 'HomeController@about')->name('about');
Route::get('marca', 'HomeController@brand')->name('brand');
Route::get('Inmobiliaria', 'HomeController@properties')->name('properties');
Route::get('results_inmobiliarias', 'HomeController@propertiesDetails')->name('properties_details');
Route::get('property_income', 'HomeController@propertyIncome')->name('property_income');
Route::get('blog', 'HomeController@blog')->name('blog');
Route::get('contactenos', 'HomeController@contact')->name('contact');


