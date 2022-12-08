<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorPedidos;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\tb_proveedores;

class controladorbdPedido extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaPedidos= DB::table('tb_pedidos')->get();
        return view('conPedidos',compact('ConsultaPedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = tb_proveedores::all();
        return view('Pedidos',compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorPedidos $request)
    {
        DB::table('tb_pedidos')->insert([
            "proveedor_Id"=> $request->input('txtproveedor'),
            "descripcion"=> $request->input('nombre'),
            "cantidadPedido"=> $request->input('txtCantidad'),
            "fechaPedido"=> $request->input('fechaPedido'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('ConPedidos')->with('confirmacion','abc');
    }

    public function imprimir()
    {
        $ConsultaPedidos= DB::table('tb_pedidos')->get();
        return view('conPedidos',compact('ConsultaPedidos'));
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
