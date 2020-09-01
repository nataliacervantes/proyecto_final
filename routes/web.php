<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Auth\LoginController@showLoginForm')->name('login');


Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('indexMateria','MateriaController@indexMateria');
    Route::get('crearMateria','MateriaController@crearMateria');
    Route::post('guardarMateria', 'MateriaController@guardarMateria');
    Route::get('getDataMateria/{id}', 'MateriaController@getDataMateria');
    Route::post('actualizarMateria', 'MateriaController@actualizarMateria');
    Route::get('eliminarMateria/{id}', 'MateriaController@eliminarMateria');

    Route::get('indexCarrera','CarreraController@indexCarrera');
    Route::get('crearCarrera','CarreraController@crearCarrera');
    Route::post('guardarCarrera', 'CarreraController@guardarCarrera');
    Route::get('getDataCarrera/{id}', 'CarreraController@getDataCarrera');
    Route::post('actualizarCarrera', 'CarreraController@actualizarCarrera');
    Route::get('eliminarCarrera/{id}', 'CarreraController@eliminarCarrera');

    Route::get('indexProfesor','ProfesorController@indexProfesor');
    Route::get('crearProfesor','ProfesorController@crearProfesor');
    Route::post('guardarProfesor', 'ProfesorController@guardarProfesor');
    Route::get('getDataProfesor/{id}', 'ProfesorController@getDataProfesor');
    Route::post('actualizarProfesor', 'ProfesorController@actualizarProfesor');
    Route::get('eliminarProfesor/{id}', 'ProfesorController@eliminarProfesor');

    Route::get('indexSesion','SesionController@indexSesion');
    Route::get('crearSesion','SesionController@crearSesion');
    Route::post('guardarSesion', 'SesionController@guardarSesion');
    Route::get('getDataSesion/{id}', 'SesionController@getDataSesion');
    Route::post('actualizarSesion', 'SesionController@actualizarSesion');
    Route::get('eliminarSesion/{id}', 'SesionController@eliminarSesion');
    Route::get('tutoriales','SesionController@tutoriales');
