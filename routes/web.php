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
    return view('inicial');
});
Route::get('/categorias', "CategoriaController@index");
//Route::get('/categoria/editar', "CategoriaController@edit");
Route::get('/categoria/cadastro', "CategoriaController@create");
Route::post('/categoria', "CategoriaController@store");