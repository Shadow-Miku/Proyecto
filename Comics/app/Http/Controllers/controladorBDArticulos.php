<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorArticulos;
use App\Http\Requests\validadorComics;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\tb_proveedores;


class controladorBDArticulos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaA= DB::table('tb_articulos')->get();
        return view('conArticulos',compact('ConsultaA'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = tb_proveedores::all();
        return view('RegistroArticulo',compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorArticulos $request)
    {
        $vpa= $request->input('precioCompraAr');
        $vpv= $vpa*1.40;

        DB::table('tb_articulos')->insert([
            "tipo"=> $request->input('tipo'),
            "marca"=> $request->input('marca'),
            "descripcion"=> $request->input('descripcion'),
            "cantidadArticulos"=> $request->input('cantidadArticulos'),
            "precioCompraAr"=> $request->input('precioCompraAr'),
            "precioVentaAr"=> $vpv,
            "proveedor_Id"=> $request->input('txtProveedor'),
            "fechaIngreso"=> $request->input('fechaIngresoAr'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('articulo')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_articulos')->where('idArticulo',$id)->first();
        return view('modalEliminarArticulo', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_articulos')->where('idArticulo',$id)->first();
        $proveedores = tb_proveedores::all();
        return view('ActualizarArticulo', compact('consultaId'),compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorArticulos $request, $id)
    {
        $vpa= $request->input('precioCompraAr');
        $vpv= $vpa*1.40;
        DB::table('tb_articulos')->where('idArticulo',$id)->update([
            "tipo"=> $request->input('tipo'),
            "marca"=> $request->input('marca'),
            "descripcion"=> $request->input('descripcion'),
            "cantidadArticulos"=> $request->input('cantidadArticulos'),
            "precioCompraAr"=> $request->input('precioCompraAr'),
            "precioVentaAr"=> $vpv,
            "proveedor_Id"=> $request->input('txtProveedor'),
            "fechaIngreso"=> $request->input('fechaIngresoAr'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('articulo')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_articulos')->where('idArticulo',$id)->delete();

        return redirect('articulo')->with('elimina','abc');
    }
}
