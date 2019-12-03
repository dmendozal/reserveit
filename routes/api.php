<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos', 'ProductoController@allProducts');
Route::get('searchp/{nombre}', 'ProductoController@searchProduct');
Route::get('searchc/{nombre}', 'ProductoController@searchCategory');
Route::get('searchs/{direccion}', 'ProductoController@searchSucursal');
