<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorbdPedidos;
use App\Http\Controllers\controladorbdComics;
use App\Http\Controllers\controladorbdProveedor;
use App\Http\Controllers\controladorbdStock;
use App\Http\Controllers\controladorbdArticulos;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

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
/Rutas de Proveedores para CRUD
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
