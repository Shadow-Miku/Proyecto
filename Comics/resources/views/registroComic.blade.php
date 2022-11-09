@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Comic registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Comics </h1>

        
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
                Registro de Comics
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="CargarRegistroComic">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    
                    <div class="mb-3">
                        <label class="form-label" hidden>id de comic en la base de datos</label>
                        <input type="number" class="form-control" hidden>
                        <p class="text-primary fst-italic"></p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('nombre') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Edición</label>
                        <input type="text" class="form-control" name="edicion" value="{{old('edicion')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('edicion') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Compañia</label>
                        <input type="text" class="form-control" name="compañia" value="{{old('compañia')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('compañia') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cantidad de Comics</label>
                        <input type="numeric" class="form-control" name="cantidadComics" value="{{old('cantidadComics')}}">
                        <p class="text-primary fst-italic"> <!--{{ $errors->first('cantidadComics') }}--> </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio compra Comic</label>
                        <input type="numeric" class="form-control" name="precioCompraCm" value="{{old('precioCompraCm')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('precioCompraCm') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio venta</label>
                        <input type="numeric" class="form-control" name="precioVentaCm" value="{{old('precioVentaCm')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('precioVentaCm') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha ingreso</label>
                        <input type="datetime-local" id="datetime" class="form-control" name="fechaIngresoCm" value="{{old('fechaIngresoCm')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('fechaIngresoCm') }} </p>
                    </div>
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Comic</button>
            
            </form>

            </div>
        </div>
    </div>
    <div class="card-body col-md-11">
        <table class="table table-secondary mb-10">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Nombre</th>
                    <th scope="col">Edición</th>
                    <th scope="col">Compañia</th>
                    <th scope="col">Cantidad de comics</th>
                    <th scope="col">Precio Compra Comic</th>
                    <th scope="col">Precio Venta Comic</th>
                    <th scope="col">Fecha Ingreso</th>
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
        <a href="RegistroComic">
            <button>Cancelar</button>
        </a>
    </div>

    <div class="col">
        <a href="RegistroComic">
            <button>Actualizar Comics</button>
        </a>
    </div>
    </div> 
@stop