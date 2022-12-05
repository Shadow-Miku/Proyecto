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

                <form class="m-4" method="POST" action="{{route('pedido.store')}}">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->                  

                        <div class="mb-3">
                            <label for="text" class="form-label">Proveedor </label>
                                <select class="form-select" name="txtproveedor" aria-label="Default select example">
                                    <option selected> </option>
                                    @foreach ($proveedor as $tb_proveedores)
                                        <option value="{{$tb_proveedores['idProveedor']}}">{{$tb_proveedores['empresa']}}</option>
                                    @endforeach
                                </select>
                            <p class="text-primary fst-italic" style="color: aqua"> 
                                {{ $errors->first('txtproveedor') }} </p>
                            </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Descripcion del pedido: </label>
                            <input type="text" class="form-control" name="txtarticulo" value="{{old('txtarticulo')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtarticulo') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cantidad: </label>
                            <input type="number" min="0" class="form-control" name="txtCantidad" value="{{old('txtCantidad')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtCantidad') }} </p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fecha pedido</label>
                            <input type="datetime-local" id="datetime" class="form-control" name="fechaPedido" value="{{old('fechapedido')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('fechaPedido') }} </p>
                        </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Pedido</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop