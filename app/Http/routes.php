<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts/app');
});






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],
			function () {

		Route::get('contacto/mostrar','contactoController@mostrar');

});

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('contacto' , 'contactoController@index');
    Route::post('contacto/insertar','contactoController@insertar');
    Route::post('User/insertar', 'UserController@insertar');
    Route::get('servicios', 'ServiciosController@index');
    Route::get('vistaEmail', 'UserController@email');
    Route::get('tarifas', 'tarifasController@index');
    Route::get('contrato', 'tarifasController@contrato');
    

});







