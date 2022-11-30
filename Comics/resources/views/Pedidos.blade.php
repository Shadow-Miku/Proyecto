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

        <h1 class="display-2 text-center mb-5"> Pedidos </h1>      

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Pedidos
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="CargarRegistroPedido">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    
                        <div class="mb-3">
                            <label class="form-label">Proveedor</label>
                            <input  class="form-control" name="txtproveedor" value="{{old('txtproveedor')}}" placeholder="Seleccione el proveedor">
                            
                            <p class="text-primary"> {{ $errors->first('txtproveedor')}} </p>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Articulo del proveedor: </label>
                            <input type="text" class="form-control" name="txtarticulo" value="{{old('txtarticulo')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtarticulo') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cantidad: </label>
                            <input type="number" min="0" class="form-control" name="txtCantidad" value="{{old('txtCantidad')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtCantidad') }} </p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo: </label>
                            <input type="email" class="form-control" name="txtEmail" value="{{old('txtEmail')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtEmail') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Direccion de envio: </label>
                            <input type="text" class="form-control" name="txtDireccion" value="{{old('txtDireccion')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtDireccion') }}</p>
                        </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Pedido</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop