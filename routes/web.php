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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'EmpleadoController@create')->name('empleado.create');
Route::post('/perfil/store', 'EmpleadoController@store')->name('empleado.store');
Route::get('/editarperfil', 'EmpleadoController@edit')->name('empleado.edit');
Route::post('/editarperfil/update', 'EmpleadoController@update')->name('empleado.update');

Route::get('/proyecto/misProyectos', 'ProyectoController@index')->name('proyecto.index');
Route::get('/proyecto', 'ProyectoController@create')->name('proyecto.create');
Route::post('/proyecto/store', 'ProyectoController@store')->name('proyecto.store');

Route::get('/proyecto/suscripcion/{id}', 'ProyectoController@suscripcion')->name('proyecto.suscripcion');
Route::get('/proyecto/desuscripcion/{id}', 'ProyectoController@desuscripcion')->name('proyecto.desuscripcion');

Route::post('/user/destroy', 'UserController@destroy')->name('user.destroy');
