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

//GUEST
Route::get('/', 'HomeController@index');

Route::get('/login', 'HomeController@login');
Route::post('/signin', 'Auth\AuthController@iniciarSesion');

Route::get('/signup', 'HomeController@signup');
Route::post('/register', 'HomeController@register');


//ADMIN
Route::get('/home', 'WelcomeController@index');

Route::get('/signout', 'Auth\AuthController@signout');

Route::get('/analisisMicroscopio', 'WelcomeController@analisisMicroscopioForm');

Route::post('/analisisMicroscopio', 'WelcomeController@analisisMicroscopio');

Route::get('/analyzeLog', 'WelcomeController@analyzeLog');

Route::get('/clasificador', 'WelcomeController@clasificadorForm');

Route::post('/clasificador', 'WelcomeController@clasificador');

Route::post('/SIFTClass', 'WelcomeController@SIFTclass');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
