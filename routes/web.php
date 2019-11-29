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
    return view('auth.login');
});

Route::redirect('/', '/login');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //MODULO USUARIOS
    Route::resource('permisos', 'PermisoController');
    Route::resource('roles', 'RolesController');
    Route::resource('usuarios', 'UsersController');
});

Route::get('productos','ProductoController@allProducts');

