<?php

use Illuminate\Support\Facades\Route;

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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', 'Auth\LoginController@showLoginForm')->name('/');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PROVEEDORES
Route::resource('/proveedores', 'Admin\ProveedorController')->names('proveedores');
Route::put('clientes/delete/{id}', 'Admin\ProveedorController@update1')->name('proveedores.update1');


// CATEGORIAS
Route::resource('/categorias', 'Admin\CategoryController')->names('categorias');
Route::put('categorias/delete/{id}', 'Admin\CategoryController@update1')->name('categorias.update1');


// UNIDADES
Route::resource('/unidades', 'Admin\UnidadMedidaController')->names('unidades');
Route::put('unidades/delete/{id}', 'Admin\UnidadMedidaController@update1')->name('unidades.update1');


// PRODUCTOS
Route::resource('/productos', 'Admin\ProductoController')->names('productos');
Route::put('productos/delete/{id}', 'Admin\ProductoController@update1')->name('productos.update1');


Route::get('ver-kardex-producto/{id}','Admin\ProductoController@kardexProducto')->name('productos.kardex');

//ORDENES
Route::resource('/requerimientos', 'Admin\RequerimientoController');
Route::get('/nueva-compra', 'Admin\RequerimientoController@compra')->name('nueva.compra');
Route::post('/store-compra', 'Admin\RequerimientoController@storeCompra')->name('store.compra');
Route::get('/req_productos-api-search/{id}', 'Admin\RequerimientoController@getProductoRequerimientoSearch')->name('lista-requerimiento-producto-search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//GET COMBOS
Route::get('/lista-areas-text', 'Admin\CombosController@getAreasText')->name('lista-areas-text');
Route::get('/lista-solicitante-text', 'Admin\CombosController@getSolicitantesText')->name('lista-solicitante-text');
Route::get('/lista-productos-text', 'Admin\CombosController@getProductosText')->name('lista-producto-text');
Route::get('/productos-api-search/{id}', 'Admin\CombosController@getProductosSearch')->name('lista-producto-search');
Route::get('/lista-contratista-text', 'Admin\CombosController@getContratistaText')->name('lista-contratista-text');


//INGRESO PRODUCTOS
Route::get('/ingreso-productos-text', 'Admin\IngresoProductosController@ingresoProductosText')->name('ingresoproductos.index');


Route::get('/operacionesListadoIngresoProductos', 'Admin\IngresoProductosController@listadoIngresoProductos')->name('listado.ingreso_productos');
Route::post('/store-ingreso-productos', 'Admin\IngresoProductosController@storeIngresoProducto')->name('store.ingreso_productos');
Route::get('/productos-api-search/{id}', 'Admin\IngresoProductosController@searchProducto')->name('productos.api.search');
Route::get('ingreso-productos-list-pdf/{id}', 'Admin\IngresoProductosController@exportPdf')->name('ingreso_productos.export.pdf');


Route::get('/ingreso-productos-detalle', 'Admin\IngresoProductosController@ingresoProductosDetalle')->name('ingresoproductos.detalle');

Route::post('/ingreso-productos-a-kardex/{id}', 'Admin\IngresoProductosController@ingresoProductoKardex')->name('ingreso.producto.kardex');






