@extends('plantilla')

@section('contenido')

<div class="container mt-5 col-md-6">

    <h1 class="display-2 text-center mb-5"> Actualizar Comic</h1>

         <div class="card mb-5">

            <div class="card-header fw-bold">
                Editar
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('comic.update',$consultaId->idComic)}}">
                    
                    @csrf

                    {!! method_field('PUT') !!}

                    <!--Errores individuales y guardar los datos escritos-->
                        
            <div class="mb-3">
              <label class="form-label">Nombre </label>
              <input type="text" class="form-control" name="nombre" value="{{$consultaId->nombre}}">
              <p class="text-primary fst-italic"> {{ $errors->first('nombre') }}</p>
          </div>

          <div class="mb-3">
              <label class="form-label">Edición </label>
              <input type="text" class="form-control" name="edicion" value="{{$consultaId->edicion}}">
              <p class="text-primary fst-italic"> {{ $errors->first('edicicion') }} </p>
          </div>

          <div class="mb-3">
              <label class="form-label">Compañia </label>
              <input type="text" class="form-control" name="compania" value="{{$consultaId->compania}}">
              <p class="text-primary fst-italic"> {{ $errors->first('compania') }} </p>
          </div>

          <div class="mb-3">
              <label class="form-label">Cantidad de comics </label>
              <input type="number" min="0" class="form-control" name="cantidadComics" value="{{$consultaId->cantidadComics}}">
              <p class="text-primary fst-italic"> {{ $errors->first('cantidadComics') }}</p>
          </div>


          <div class="mb-3">
              <label class="form-label">Precio Compra </label>
              <input type="numeric" class="form-control" name="precioCompraCm" value="{{$consultaId->precioCompraCo}}">
              <p class="text-primary fst-italic"> {{ $errors->first('precioCompraCm') }}</p>
          </div>

          

          <div class="mb-3">
            <label for="text" class="form-label">Proveedor </label>
              <select class="form-select" name="txtProveedor" aria-label="Default select example">
                <option selected> Selecciona un proveedor...</option>
              
                @foreach ($proveedores as $tb_proveedores)
                  <option value="{{$tb_proveedores['idProveedor']}}">{{$tb_proveedores['empresa']}}</option>
                @endforeach
                  
              </select>
              <p class="text-primary fst-italic" style="color: aqua"> 
              {{ $errors->first('txtProveedor') }} </p>
          </div>
             
          <div class="mb-3">
            <label class="form-label">Fecha ingreso</label>
            <input type="datetime-local" id="datetime" class="form-control" name="fechaIngresoCm" value="{{old('fechaIngresoCm')}}">
            <p class="text-primary fst-italic"> {{ $errors->first('fechaIngresoCm') }} </p>
          </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-primary m-1">Actualizar Comic</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop