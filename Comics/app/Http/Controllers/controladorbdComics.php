<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorComics;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\tb_proveedores;

class controladorbdComics extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaC= DB::table('tb_proveedores')->get();
        return view('conProveedores',compact('ConsultaC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = tb_proveedores::all();
        return view('RegistroComic',compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorComics $request)
    {
        DB::table('tb_comics')->insert([
            "nombre"=> $request->input('nombre'),
            "edicion"=> $request->input('edicion'),
            "compania"=> $request->input('compania'),
            "cantidadComics"=> $request->input('cantidadComics'),
            "precioCompraCo"=> $request->input('precioCompraCm'),
            "precioVentaCo"=> $request->input('precioVentaCm'),
            "proveedor_Id"=> $request->input('txtProveedor'),
            "fechaIngreso"=> $request->input('fechaIngresoCm'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('comic/create')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_comics')->where('idComic',$id)->first();

        return view('modalEliminarComic', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_comics')->where('idComic',$id)->first();
        $proveedores = tb_proveedores::all();
        return view('modalActualizarComic', compact('consultaId'),compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorComics $request, $id)
    {
        DB::table('tb_comics')->where('idComic',$id)->update([
            "nombre"=> $request->input('nombre'),
            "edicion"=> $request->input('edicion'),
            "compania"=> $request->input('compania'),
            "cantidadComics"=> $request->input('cantidadComics'),
            "precioCompraCo"=> $request->input('precioCompraCm'),
            "precioVentaCo"=> $request->input('precioVentaCm'),
            "proveedor_Id"=> $request->input('txtProveedor'),
            "fechaIngreso"=> $request->input('fechaIngresoCm'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('proveedor')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_comics')->where('idComic',$id)->delete();

        return redirect('proveedor')->with('elimina','abc');
    }
}
