<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorbdPedido;
use App\Http\Controllers\controladorbdComics;
use App\Http\Controllers\controladorbdProveedor;
use App\Http\Controllers\controladorbdStock;
use App\Http\Controllers\controladorBDArticulos;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\controladorListado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [controladorVistas::class,'showWelcome'])->name('apWelc');  
Route::get('Principal', [controladorVistas::class,'showPrincipal'])->name('apPrin');
Route::get('RegistroComic', [controladorVistas::class,'showRegistroComic'])->name('apRegiCom');
Route::get('RegistroArticulo', [controladorVistas::class,'showRegistroArticulo'])->name('apRegiArt');
Route::get('Proveedores', [controladorVistas::class,'showProveedores'])->name('apProvee');
Route::get('Pedidos', [controladorVistas::class,'showPedidos'])->name('apPedid');
Route::get('Stock', [controladorVistas::class,'showStock'])->name('apStock');
Route::get('Ventas', [controladorVistas::class,'showVentas'])->name('apVentas');


/*
/--------------------------------------------------
/Rutas POST para envio de datos en formulario
/--------------------------------------------------
*/

Route::post('CargarRegistroComic', [controladorVistas::class,'procesarRegistroComic'])->name('CarRegCom');
Route::post('CargarRegistroArticulo', [controladorVistas::class,'procesarRegistroArticulo'])->name('CarRegArt');
Route::post('CargarRegistroProveedores', [controladorVistas::class,'procesarRegistroProveedor'])->name('CarRegPro');
Route::post('CargarRegistroPedido', [controladorVistas::class,'procesarRegistroPedido'])->name('CarRegPed');
Route::post('consultarArtVenta',[controladorVistas::class,'procesarRegistroVentas']);
Route::post('searchStock',[controladorVistas::class,'procesarRegistroStock']);

/*
/--------------------------------------------------
/Rutas deL CRUD Proveedor 
/--------------------------------------------------
*/

/*Rutas para controllador resourse*/

Route::get('proveedor/create', [controladorBDProveedor::class,'create'])->name('proveedor.create');

/*Store */
Route::post('proveedor', [controladorBDProveedor::class,'store'])->name('proveedor.store');

/*Index */
Route::get('proveedor', [controladorBDProveedor::class,'index'])->name('proveedor.index');

/*Edit */
Route::get('proveedor/{id}/edit', [controladorBDProveedor::class,'edit'])->name('proveedor.edit');

/*Update */
Route::put('proveedor/{id}', [controladorBDProveedor::class,'update'])->name('proveedor.update');

/*Show */
Route::get('proveedor/{id}/show', [controladorBDProveedor::class,'show'])->name('proveedor.show');

/*Delete */
Route::delete('proveedor/{id}', [controladorBDProveedor::class,'destroy'])->name('proveedor.destroy');

/*
/--------------------------------------------------
/Rutas deL CRUD Comics 
/--------------------------------------------------
*/

/*Rutas para controllador resourse*/

Route::get('comic/create', [controladorbdComics::class,'create'])->name('comic.create');

/*Store */
Route::post('comic', [controladorbdComics::class,'store'])->name('comic.store');

/*Index */
Route::get('comic', [controladorbdComics::class,'index'])->name('comic.index');

/*Edit */
Route::get('comic/{id}/edit', [controladorbdComics::class,'edit'])->name('comic.edit');

/*Update */
Route::put('comic/{id}', [controladorbdComics::class,'update'])->name('comic.update');

/*Show */
Route::get('comic/{id}/show', [controladorbdComics::class,'show'])->name('comic.show');

/*Delete */
Route::delete('comic/{id}', [controladorbdComics::class,'destroy'])->name('comic.destroy');

/*
/--------------------------------------------------
/Rutas deL CRUD Articulos 
/--------------------------------------------------
*/

/*Rutas para controllador resourse*/

Route::get('articulo/create', [controladorBDArticulos::class,'create'])->name('articulo.create');

/*Store */
Route::post('articulo', [controladorBDArticulos::class,'store'])->name('articulo.store');

/*Index */
Route::get('articulo', [controladorBDArticulos::class,'index'])->name('articulo.index');

/*Edit */
Route::get('articulo/{id}/edit', [controladorBDArticulos::class,'edit'])->name('articulo.edit');

/*Update */
Route::put('articulo/{id}', [controladorBDArticulos::class,'update'])->name('articulo.update');

/*Show */
Route::get('articulo/{id}/show', [controladorBDArticulos::class,'show'])->name('articulo.show');

/*Delete */
Route::delete('articulo/{id}', [controladorBDArticulos::class,'destroy'])->name('articulo.destroy');

/*
/--------------------------------------------------
/Rutas deL CR Pedidos 
/--------------------------------------------------
*/

/*Rutas para controllador resourse*/

Route::get('pedido/create', [controladorbdPedido::class,'create'])->name('pedido.create');

/*Store */
Route::post('pedido', [controladorbdPedido::class,'store'])->name('pedido.store');
/*Index de pedido */
Route::get('ConPedidos', [controladorBDPedido::class,'index'])->name('pedido.index');
/*Index 
Route::get('articulo', [controladorBDArticulos::class,'index'])->name('articulo.index');*/

/*Edit 
Route::get('articulo/{id}/edit', [controladorBDArticulos::class,'edit'])->name('articulo.edit');*/

/*Update 
Route::put('articulo/{id}', [controladorBDArticulos::class,'update'])->name('articulo.update');*/

/*Show */
Route::get('pedido/{id}/show', [controladorbdPedido::class,'show'])->name('pedido.show');

/*Delete 
Route::delete('articulo/{id}', [controladorBDArticulos::class,'destroy'])->name('articulo.destroy');*/






//Ruta para acceder a Registrar usuario desde POST
Route::get('register',[registerController::class,'show']);
Route::post('register',[registerController::class,'register']);

//Rutas para login
Route::get('welcome', [loginController::class,'show']);
Route::post('welcome', [loginController::class,'login']);


/////////////////////////////////////////////// PEDIDOS LISTADO//////////////////////////////////////
Route::get('pedidosB',[controladorListado::class,'listado'])->name('pedidosB.listado');
Route::get('pedidosB/{id}/pedirComics',[controladorListado::class,'pedirComics'])->name('pedidos.comic');

Route::get('pedidosB/{id}/pedirArticulos',[controladorListado::class,'pedirArticulos'])->name('pedidos.articulos');




