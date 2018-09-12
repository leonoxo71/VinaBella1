<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Hostal'], function(){
	Route::resource('Usuarios','Usercontroller');
	Route::get('users/{Cod_usuario}/destroy', [
		'uses' => 'Usercontroller@destroy',
		'as' 	=> 'admin.Usuarios.destroy'
	]);
});

Route::group(['prefix' => 'Hostal'], function(){
	Route::resource('Clientes','Clientecontroller');
});
