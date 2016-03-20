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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Ruta Basica
// Route::get('prueba', function () {
// 	return "<h1>Hola mundo rutas</h1>";
// });

// Ruta con Parametro
// Route::get('parametros/{nombre}', function ($nombre) {
// 	return "<h1>Mi nombre es: " . $nombre . "</h1>";
// });

// Ruta con Parametro opcionales
// Route::get('parametros/{nombre?}', function ($nombre = "Default") {
// 	return "<h1>Mi nombre es: " . $nombre . "</h1>";
// });

// Ejemplo Controlador
Route::get('controlador', 'PruebaController@index');
Route::get('name/{nombre}', 'PruebaController@nombre');

// Controlador RestFul
// para acceder a las rutas se coloca el nombre del controlador en minuscula por ejemplo "movie" en esta caso
Route::resource('movie', 'MovieController');