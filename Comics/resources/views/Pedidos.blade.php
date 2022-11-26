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

        
        <!--Errores arriba del formulario
            @if ($errors->any())
            @foreach ( $errors->all() as $error )
                <div class="alert alert-warning alert-disimissible fade show" role="alert">
                <strong> {{ $error }} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button></div>
            @endforeach
      
        @endif-->
            

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Articulos
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="CargarRegistroPedido">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    
                    <div class="mb-3">
                            <label class="form-label">Tipo de articulo</label>
                            <input  class="form-control" name="txttipo" value="{{old('txttipo')}}" placeholder="Articulo o Comic / Ambos">
                            
                            <p class="text-primary"> {{ $errors->first('txttipo')}} </p>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Nombre del articulo: </label>
                            <input type="text" class="form-control" name="txtarticulo" value="{{old('txtarticulo')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtarticulo') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cantidad: </label>
                            <input type="number" class="form-control" name="txtCantidad" value="{{old('txtCantidad')}}">
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

                <button type="submit" class="btn btn-success m-1"> Registrar Articulo</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop