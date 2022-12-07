<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class controladorListado extends Controller{
    public function listado(){
        $ConsultaP = DB::table('tb_comics')
        ->select('idProveedor','nombre','empresa')
        ->join('tb_proveedores','tb_comics.proveedor_Id','=', 'tb_proveedores.idProveedor')->get();

        $ConsultaA = DB::table('tb_articulos')
        ->select('idProveedor','descripcion','empresa')
        ->join('tb_proveedores','tb_articulos.proveedor_Id','=', 'tb_proveedores.idProveedor')->get();
        return view('pedidosB', compact('ConsultaP'),compact('ConsultaA'));
    }
}
