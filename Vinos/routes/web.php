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


Auth::routes();

///Usuarios
Route::resource('/home/dashboard/user', 'dashboard\UserController');

//Perfil
Route::resource('/home/perfil', 'dashboard\PerfilController');

//Vinos
Route::resource('/home/dashboard/vinos', 'dashboard\VinoController');


Route::get('/', 'dashboard\InicioController@index')->name('index');

