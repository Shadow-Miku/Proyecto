<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorProveedores;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controladorBDProveedor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');
        $consultaProveedor = DB::table('tb_proveedores')->where('empresa','like','%'.$filtrar.'%')->get();
        $ConsultaP= DB::table('tb_proveedores')->get();
        return view('conProveedores',compact('ConsultaP','filtrar','consultaProveedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Proveedores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorProveedores $request)
    {
        DB::table('tb_proveedores')->insert([
            "empresa"=> $request->input('empresa'),
            "direccion"=> $request->input('direccion'),
            "pais"=> $request->input('pais'),
            "contacto"=> $request->input('contacto'),
            "noFijo"=> $request->input('noFijo'),
            "noCel"=> $request->input('noCelular'),
            "correo"=> $request->input('correo'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('proveedor')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_proveedores')->where('idProveedor',$id)->first();

        return view('modalEliminarProveedor', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_proveedores')->where('idProveedor',$id)->first();

        return view('modalActualizarProveedor', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorProveedores $request, $id)
    {
        DB::table('tb_proveedores')->where('idProveedor',$id)->update([
            "empresa"=> $request->input('empresa'),
            "direccion"=> $request->input('direccion'),
            "pais"=> $request->input('pais'),
            "contacto"=> $request->input('contacto'),
            "noFijo"=> $request->input('noFijo'),
            "noCel"=> $request->input('noCelular'),
            "correo"=> $request->input('correo'),
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
        DB::table('tb_proveedores')->where('idProveedor',$id)->delete();

        return redirect('proveedor')->with('elimina','abc');
    }
}
