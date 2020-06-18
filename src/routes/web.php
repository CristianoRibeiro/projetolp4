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

Route::get('/','ContatoController@index');

Route::get('/{id}/visualizar','ContatoController@show');

Route::get('/cadastrar','ContatoController@create');

Route::post('/cadastrar','ContatoController@store');

Route::get('/{id}/edit','ContatoController@edit');

Route::patch('/{id}','ContatoController@update');

Route::delete('/{id}','ContatoController@destroy');

