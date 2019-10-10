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


Route::group(['middleware' => ['guest']], function () {
    Route::view('solicitar', 'auth.solicitar')->name('solicitar');
    Route::view('reset', 'auth.passwords.reset')->name('reset');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'NotasController@index');
    Route::get('/inicio', 'NotasController@index')->name('inicio');
    Route::get('/pacientes', 'PacienteController@index')->name('listar');
    Route::get('/pacientes/{id}', 'PacienteController@show')->name('show');
    Route::post('/pacientes/registrar', 'PacienteController@store')->name('registrar');
    Route::put('/pacientes/actualizar', 'PacienteController@update')->name('actualizar');
    Route::put('/pacientes/desactivar', 'PacienteController@desactivar')->name('desactivar');
    Route::put('/pacientes/activar', 'PacienteController@activar')->name('activar');
    Route::get('chat', 'NotasController@chat')->name('chat')->middleware('auth', 'role:administrador'); //Solo puede acceder el rol administrador.
});



Auth::routes();
