<?php $router->get('user', [
	'uses' => 'scm\Http\Controllers\UserController@index',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('user/create', [
	'uses' => 'scm\Http\Controllers\UserController@create',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->post('user/store', [
	'uses' => 'scm\Http\Controllers\UserController@store',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);