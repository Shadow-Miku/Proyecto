<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorArticulos;
use App\Http\Requests\validadorComics;
use App\Http\Requests\validadorProveedores;
use App\Http\Requests\validadorStock;
use App\Http\Requests\validadorVentas;
use App\Http\Requests\validadorPedidos;

use Illuminate\Http\Request;



class controladorVistas extends Controller
{
    public function procesarRegistroComic(ValidadorComics $req){
        return redirect('RegistroComic')->with('confirmacion','Registro de Comic Correcto');
    } /* Funcion para registrar los comics */

    public function procesarRegistroArticulo(validadorArticulos $req){
        return redirect('RegistroArticulo')->with('confirmacion','Registro de Articulo Correcto');
    } /* Funcion para registrar articulos */

    public function procesarRegistroProveedor(validadorProveedores $req){
        return redirect('Proveedores')->with('confirmacion','Registro de Proveedor Correcto');
    } /* Funcion para registrar los proveedores*/

    public function procesarRegistroPedido(validadorPedidos $req){
        return redirect('Pedidos')->with('confirmacion','Registro de Pedido Correcto');
    } /* Funcion de carga de pedidos */

    public function procesarRegistroVentas(validadorVentas $req){
        return redirect('Ventas')->with('confirmacion','Registro de Ventas');
    }
    
    public function procesarRegistroStock(validadorPedidos $req){
        return redirect('Stock')->with('confirmacion','Busqueda de stock');
    }

    /*Funciones para cada vista de la pagina*/
    public function showWelcome(){
        return view('Welcome');
    }

    public function showPrincipal(){
        return view('Principal');
    } 

    public function showRegistroComic(){
        return view('RegistroComic');
    } 

    public function showRegistroArticulo(){
        return view('RegistroArticulo');
    } 

    public function showProveedores(){
        return view('Proveedores');
    } 

    public function showPedidos(){
        return view('Pedidos');
    } 

    public function showStock(){
        return view('Stock');
    } 

    public function showVentas(){
        return view('Ventas');
    } 
 
}
