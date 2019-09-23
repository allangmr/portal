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



Route::view('login', 'auth.login')->name('login')->middleware('guest');;
Route::view('solicitar', 'auth.solicitar')->name('solicitar');
Route::view('reset', 'auth.passwords.reset')->name('reset');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'NotasController@index');
    Route::get('/inicio', 'NotasController@index')->name('inicio');
    Route::get('chat', 'NotasController@chat')->name('chat');
});



Auth::routes();
