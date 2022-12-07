<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validadorPedidos;
use App\Models\tb_proveedores;

class controladorListado extends Controller{
    public function listado(){
        $ConsultaP = DB::table('tb_comics')
        ->select('idProveedor','nombre','empresa','idComic')
        ->join('tb_proveedores','tb_comics.proveedor_Id','=', 'tb_proveedores.idProveedor')->get();

        $ConsultaA = DB::table('tb_articulos')
        ->select('idProveedor','descripcion','empresa','idArticulo')
        ->join('tb_proveedores','tb_articulos.proveedor_Id','=', 'tb_proveedores.idProveedor')->get();

        return view('pedidosB', compact('ConsultaP'),compact('ConsultaA'));
    }

    public function pedirComics($id)
    {
        $consultaPedido=DB::table('tb_comics')->where('idComic',$id)->first();

        return view('Pedidos',compact('consultaPedido'));
    }

    public function pedirArticulos($id)
    {
        $consultaArticulo=DB::table('tb_articulos')->where('idArticulo',$id)->first();

        return view('PedidosA',compact('consultaArticulo'));
    }
}
