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


    //MODULO EMPRESA
    Route::resource('empresa', 'EmpresaController');
    Route::resource('encargadoempresa', 'EncargadoEmpresaController');
    Route::resource('encargadosucursal', 'EncargadoSucursalController');
    Route::resource('sucursal', 'SucursalController');
    Route::resource('horario', 'HorarioController');

    //MODULO SUCURSAL
    Route::resource('producto', 'ProductoController');
    Route::resource('categoria', 'CategoriaController');
    Route::resource('ofertaproducto', 'OfertaProductoController');
    Route::resource('sucursalproducto', 'SucursalProductoController');

    Route::resource('reserva', 'ReservaController');
    Route::resource('entrega', 'EntregaController');
    Route::resource('suscripcion', 'SuscripcionController');
    Route::resource('cliente', 'ClienteController');

    Route::get('mapas', 'MapsController@getMapView');
});

Route::get('productos', 'ProductoController@allProducts');
