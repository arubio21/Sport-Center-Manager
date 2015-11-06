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

$router->get('user/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@show',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('user/edit/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@edit',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->put('user/update/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@update',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->delete('user/delete/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@destroy',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('user/type/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@usersByType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('user/type', [
	'uses' => 'scm\Http\Controllers\UserController@indexType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('user/type/create', [
	'uses' => 'scm\Http\Controllers\UserController@createType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->post('user/type/store', [
	'uses' => 'scm\Http\Controllers\UserController@storeType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('user/type/edit/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@editType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->put('user/type/update/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@updateType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->delete('user/type/delete/{id}', [
	'uses' => 'scm\Http\Controllers\UserController@destroyType',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);