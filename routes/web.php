<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/producto-api-search/{id}', 'Admin\CombosController@getProductosSearch')->name('lista-producto-search');
Route::get('/lista-contratista-text', 'Admin\CombosController@getContratistaText')->name('lista-contratista-text');
Route::get('/lista-proveedores-text', 'Admin\CombosController@getProveedoresSearch')->name('proveedores-search');
Route::get('/proveedor-api-search/{id}', 'Admin\CombosController@getProveedorSearch')->name('proveedor-search');


//INGRESO PRODUCTOS
Route::get('/ingreso-productos-text', 'Admin\IngresoProductosController@ingresoProductosText')->name('ingresoproductos.index');
Route::get('/operacionesListadoIngresoProductos', 'Admin\IngresoProductosController@listadoIngresoProductos')->name('listado.ingreso_productos');
Route::post('/store-ingreso-productos', 'Admin\IngresoProductosController@storeIngresoProducto')->name('store.ingreso_productos');
Route::get('/productos-api-search/{id}', 'Admin\IngresoProductosController@searchProducto')->name('productos.api.search');
Route::get('ingreso-productos-list-pdf/{id}', 'Admin\IngresoProductosController@exportPdf')->name('ingreso_productos.export.pdf');
Route::get('/ingreso-productos-detalle', 'Admin\IngresoProductosController@ingresoProductosDetalle')->name('ingresoproductos.detalle');
Route::post('/ingreso-productos-a-kardex/{id}', 'Admin\IngresoProductosController@ingresoProductoKardex')->name('ingreso.producto.kardex');

//SALIDA PRODUCTOS
Route::get('/salida-productos-text', 'Admin\SalidaProductosController@salidaProductosText')->name('salidaproductos.index');
Route::get('/operacionesListadoSalidaProductos', 'Admin\SalidaProductosController@listadoSalidaProductos')->name('listado.salida_productos');
Route::post('/store-salida-productos', 'Admin\SalidaProductosController@storeSalidaProducto')->name('store.salida_productos');
Route::get('/productos-api-search/{id}', 'Admin\SalidaProductosController@searchProducto')->name('productos.api.search.salida');
Route::get('salida-productos-list-pdf/{id}', 'Admin\SalidaProductosController@exportPdf')->name('salida_productos.export.pdf');
Route::get('/salida-productos-detalle', 'Admin\SalidaProductosController@salidaProductosDetalle')->name('salidaproductos.detalle');
Route::post('/salida-productos-a-kardex/{id}', 'Admin\SalidaProductosController@salidaProductoKardex')->name('salida.producto.kardex');

//COTIZACIONES
Route::get('/cotizaciones_list', 'Admin\CotizacionesController@index')->name('cotizaciones.index');
Route::get('/cotizaciones_create', 'Admin\CotizacionesController@create')->name('cotizaciones.create');
Route::post('/store-ingreso-cotizacion', 'Admin\CotizacionesController@store')->name('cotizaciones.store');


//USUARIOS
Route::get('/usuarios_index', 'Admin\UsuariosController@index')->name('usuarios.index');
route::post('/usuarios_store', 'Admin\UsuariosController@store')->name('usuarios.store');
Route::put('/usuarios_update/{id}', 'Admin\UsuariosController@update')->name('usuarios.update');
Route::put('/usuarios_destroy/{id}', 'Admin\UsuariosController@destroy')->name('usuarios.destroy');
Route::put('/personas_update_password/{id}', 'Admin\UsuariosController@updatePassword')->name('usuarios.updatePassword');


//PERSONA
Route::get('/personas_index', 'Admin\PersonasController@index')->name('personas.index');
Route::post('/personas_store', 'Admin\PersonasController@store')->name('personas.store');
Route::put('/personas_update/{id}', 'Admin\PersonasController@update')->name('personas.update');
Route::put('/personas_destroy/{id}', 'Admin\PersonasController@destroy')->name('personas.destroy');


//AREAS
Route::get('/areas_index', 'Admin\AreasController@index')->name('areas.index');
Route::post('/areas_store', 'Admin\AreasController@store')->name('areas.store');
Route::put('/areas_update/{id}', 'Admin\AreasController@update')->name('areas.update');
Route::put('/areas_destroy/{id}', 'Admin\AreasController@destroy')->name('areas.destroy');



//ROLES
Route::resource('/roles', 'Admin\RoleController')->names('roles');


