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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('produto', 'MeuControlador@produto');
Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::resource('clientes', 'clienteControlador');

Route::get('produtos', function(){
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos', function(){
    return view('outras.departamentos');
})->name('departamentos');

Route::get('options/{option?}', function($option=null){
    return view('outras.options',compact(['option']));
})->name('options');