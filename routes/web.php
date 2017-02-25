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

Route::get('hojadevida/ervin','hojasdevidaController@HdvErvin');
Route::get('hojadevida/leonardo','hojasdevidaController@hdvLeonardo');
Route::get('encuesta/llenarencuesta','hojasdevidaController@FormularioEncuesta');
