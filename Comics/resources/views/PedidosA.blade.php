@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Pedido registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Articulos </h1>      

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Pedidos
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('pedido.store')}}">
                    @csrf                 
                        <div class="mb-3">
                            <label class="form-label">Id del proveedor: </label>
                            <input type="text" class="form-control" name="txtproveedor" value="{{$consultaArticulo->proveedor_Id}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtproveedor') }}</p>
                        </div>       
                                  
                        <div class="mb-3">
                            <label class="form-label">Descripcion del pedido: </label>
                            <input type="text" class="form-control" name="nombre" value="{{$consultaArticulo->descripcion}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('nombre') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cantidad: </label>
                            <input type="number" min="1" class="form-control" name="txtCantidad" placeholder="Cantidad">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtCantidad') }} </p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fecha pedido</label>
                            <input type="datetime-local" id="datetime" class="form-control" name="fechaPedido" value="{{old('fechapedido')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('fechaPedido')}} </p>
                        </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Pedido</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop