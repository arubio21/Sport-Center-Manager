<?php $router->get('prueba', [
	'uses' => 'App\Http\Controllers\Auth\AuthController@prueba',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('prueba', [
	'uses' => 'App\Http\Controllers\Auth\PasswordController@prueba',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('prueba', [
	'uses' => 'App\Http\Controllers\Controller@prueba',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);