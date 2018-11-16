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

Route::get('/', 'HomeController@home');
Route::get('/como-funciona', 'HomeController@comoFunciona');
Route::get('/contato', 'HomeController@contato');
Route::get('/cadastro-cliente', 'CadastrarController@cadastroCliente');
Route::get('/cadastro-empresa', 'CadastrarController@cadastroEmpresa');
Route::post('/save-empresa', 'CadastrarController@saveEmpresa');
Route::post('/save-cliente', 'CadastrarController@saveCliente');
