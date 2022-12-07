@extends('plantilla')

@section('contenido')

    <h1 class="display-1 mt-4 mb-4 text-center"> Pedidos</h1>
    
      <div class="container mb-5 mt-5  gap-2">
    
    <table class="table table-borderless table-striped table-hover" >
            <thead>
                <tr>
                    <th scope="col">Id Proveedor</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Comic</th>
                    <th scope="col">Pedir</th>
                </tr>
              </thead>
              <tbody>
    @foreach($ConsultaP as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idProveedor}}</th>
                    <td>{{$consulta->empresa}}</td>
                    <td>{{$consulta->nombre}}</td>
                    <td><button class="btn btn-success" onclick="location.href='{{route('pedido.create')}}'">
                        <i class="bi bi-pen"></i> Solicitar pedido
                        </button></td>
                </tr>
              </tbody> 
    @endforeach
        </table>

    
        <table class="table table-borderless table-striped table-hover" >
            <thead>
                <tr>
                    <th scope="col">Id Proveedor</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Pedir</th>
                </tr>
              </thead>
              <tbody>
    @foreach($ConsultaA as $consultab)
                <tr>
                    <th scope="row">{{$consulta->idProveedor}}</th>
                    <td>{{$consultab->empresa}}</td>
                    <td>{{$consultab->descripcion}}</td>
                    <td><button class="btn btn-success" onclick="location.href='{{route('pedido.create')}}'">
                        <i class="bi bi-pen"></i> Solicitar pedido
                        </button></td>
                </tr>
              </tbody> 
    @endforeach
        </table>
        </div>
    </div>
    
@stop
