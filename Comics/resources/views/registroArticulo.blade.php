@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Articulo registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Articulos </h1>

        
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

                <form class="m-4" method="POST" action="CargarRegistroArticulo">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    
                    <div class="mb-3">
                        <label class="form-label" hidden>id de articulo en la base de datos</label>
                        <input type="number" class="form-control" name="id"  hidden>
                        <p class="text-primary fst-italic"></p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <input type="text" class="form-control" name="tipo" value="{{old('tipo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('tipo') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" value="{{old('marca')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('marca') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('descripcion') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cantidad de Articulos</label>
                        <input type="numeric" class="form-control" name="cantidadArticulos" value="{{old('cantidadArticulos')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('cantidadArticulos') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio compra Articulo</label>
                        <input type="numeric" class="form-control" name="precioCompraAr" value="{{old('precioCompraAr')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('precioCompraAr') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio venta</label>
                        <input type="numeric" class="form-control" name="precioVentaAr" value="{{old('precioVentaAr')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('precioVentaAr') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha ingreso</label>
                        <input type="datetime-local" id="datetime" class="form-control" name="fechaIngresoAr" value="{{old('fechaIngresoAr')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('fechaIngresoAr') }} </p>
                    </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Articulo</button>
            
            </form>

            </div>
        </div>
    </div>

    <div class="card-body col-md-11">
        <table class="table table-secondary mb-10">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad de Articulos</th>
                    <th scope="col">Precio compra Articulo</th>
                    <th scope="col">Precio venta Articulo</th>
                    <th scope="col">Fechas</th>
                </tr>
            </thead>
                
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                </tr>
                <tr class="table-light">
                    <th scope="row">2</th>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                    </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                </tr>
                <tr class="table-light">
                    <th scope="row">4</th>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col">
        <a href="RegistroArticulo">
            <button>Cancelar</button>
        </a>
    </div>

    <div class="col">
        <a href="RegistroArticulo">
            <button>Actualizar Articulos</button>
        </a>
    </div>
    </div> 
    
@stop