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



Route::view('/', '/auth/login');
Route::view('solicitar', 'solicitar')->name('solicitar');

Route::view('reset', 'auth\passwords\reset')->name('reset');
Route::group(['middleware' => ['auth']], function() {
    Route::get('inicio', 'NotasController@index')->name('inicio');
    Route::get('chat', 'NotasController@chat')->name('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
