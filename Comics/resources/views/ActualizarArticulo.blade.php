@extends('plantilla')

@section('contenido')

<div class="container mt-5 col-md-6">

    <h1 class="display-2 text-center mb-5"> Actualizar Articulo</h1>

         <div class="card mb-5">

            <div class="card-header fw-bold">
                Editar
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('articulo.update',$consultaId->idArticulo)}}">
                    
                    @csrf

                    {!! method_field('PUT') !!}

                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                      <label class="form-label">Tipo de articulo:</label>
                      <input type="text" class="form-control" name="tipo" value="{{$consultaId->tipo}}">
                      <p class="text-primary fst-italic"> {{ $errors->first('tipo') }} </p>
                  </div>
                  
                  <div class="mb-3">
                      <label class="form-label">Marca del articulo:</label>
                      <input type="text" class="form-control" name="marca" value="{{$consultaId->marca}}">
                      <p class="text-primary fst-italic"> {{ $errors->first('marca') }}</p>
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Descripción del objeto:</label>
                      <input type="text" class="form-control" name="descripcion" value="{{$consultaId->descripcion}}">
                      <p class="text-primary fst-italic"> {{ $errors->first('descripcion') }} </p>
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Cantidad de Articulos:</label>
                      <input type="number" min="0" class="form-control" name="cantidadArticulos" value="{{$consultaId->cantidadArticulos}}">
                      <p class="text-primary fst-italic"> {{ $errors->first('cantidadArticulos') }} </p>
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Precio de compra del Articulo:</label>
                      <input type="numeric" class="form-control" name="precioCompraAr" value="{{$consultaId->precioCompraAr}}">
                      <p class="text-primary fst-italic"> {{ $errors->first('precioCompraAr') }} </p>
                  </div>

                  <div class="mb-3">
                  <label for="text" class="form-label">Nombre del Proveedor:</label>
                      <select class="form-select" name="txtProveedor" aria-label="Default select example">
                          <option selected> selecciona un proveedor...</option>
                          @foreach ($proveedores as $tb_proveedores)
                          <option value="{{$tb_proveedores['idProveedor']}}">{{$tb_proveedores['empresa']}}</option>
                        @endforeach
                      </select>
                  <p class="text-primary fst-italic" style="color: aqua"> 
                      {{ $errors->first('txtProveedor') }} </p>
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Fecha de ingreso:</label>
                      <input type="datetime-local" id="datetime" class="form-control" name="fechaIngresoAr" value="{{old('fechaIngresoAr')}}">
                      <p class="text-primary fst-italic"> {{ $errors->first('fechaIngresoAr') }} </p>
                  </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-primary m-1">Actualizar Articulo</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop