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

Route::get('productos','ProductoController@allProducts');
Route::post('reservas','ReservaController@reservas');
Route::get('categorys','CategoriaController@allCategorys');
Route::get('sucursal','CategoriaController@allSucursal');
Route::get('suscripcionP','ProductoController@productosSuscripcion');
Route::post('suscribirse','ProductoController@suscribirse');
Route::post('suscribirsecategory','CategoriaController@suscribirse');
Route::get('todayreservation/{id}','ReservaController@todayreservation');
Route::get('allreservation/{id}','ReservaController@allreservation');
Route::post('calificar','EntregaController@valoracion');
Route::get('searchp/{nombre}', 'ProductoController@searchProduct');
