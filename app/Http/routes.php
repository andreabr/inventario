<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'site.home', 'uses' => 'HomeController@index']); //



Route::get('/home', 'HomeController@index');

// Route::get('/', ['uses' => 'EquipamentosController@listar']);

Route::get('/equipamento/adicionar', ['as' => 'equipamento.adicionar', 'uses' => 'EquipamentosController@adicionar']);
Route::post('/equipamento/salvar', ['as' => 'equipamento.salvar', 'uses' => 'EquipamentosController@salvar']);
Route::get('/equipamento/editar/{id}', ['as' => 'equipamento.editar', 'uses' => 'EquipamentosController@editar']);
Route::get('/equipamento/deletar/{id}', ['as' => 'equipamento.deletar', 'uses' => 'EquipamentosController@deletar']);
Route::put('/equipamento/atualizar/{id}', ['as' => 'equipamento.atualizar', 'uses' => 'EquipamentosController@atualizar']);

Route::get('/busca', ['as' => 'site.busca', 'uses' => 'HomeController@busca']);
