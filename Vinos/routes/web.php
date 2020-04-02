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

Auth::routes();

///Usuarios
Route::resource('/home/user', 'dashboard\UserController');

//Perfil
Route::resource('/home/perfil', 'dashboard\PerfilController');




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'dashboard\InicioController@index')->name('index');

