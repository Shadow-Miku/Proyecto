@extends('plantilla')
@section('contenido')

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Pedido de comics registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container-fluid mt-5 col-md-13">

        <p class="text-left mb-5 fs-1"> Pedidos de Comics </p>

            <div class="card-body col-md-11">
                <table class="table table-secondary mb-10">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Id del proveedor</th>
                            <th scope="col">Descripcion del pedido</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha_Pedido</th>
                        </tr>
                    </thead>
                        
                    <tbody>
                    @foreach($ConsultaPedidos as $consulta)
                        <tr>
                            <td>{{$consulta->proveedor_Id}}</td>
                            <td>{{$consulta->descripcion}}</td>
                            <td>{{$consulta->cantidadPedido}}</td>
                            <td>{{$consulta->fechaPedido}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
    </div>         
@endsection