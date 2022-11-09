<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [controladorVistas::class,'showWelcome'])->name('apWelc');  
Route::get('Principal', [controladorVistas::class,'showPrincipal'])->name('apPrin');
Route::get('RegistroComic', [controladorVistas::class,'showRegistroComic'])->name('apRegiCom');
Route::get('RegistroArticulo', [controladorVistas::class,'showRegistroArticulo'])->name('apRegiArt');
Route::get('RegistroProveedores', [controladorVistas::class,'showProveedores'])->name('apProvee');
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
Route::post('CargarRegistroProveedor', [controladorVistas::class,'procesarRegistroProveedor'])->name('CarRegPro');
Route::post('CargarRegistroPedido', [controladorVistas::class,'procesarRegistroPedido'])->name('CarRegPed');
Route::post('consultarArtVenta',[controladorVistas::class,'procesarRegistroVentas']);