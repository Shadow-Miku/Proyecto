@extends('plantilla')

@section('contenido')
@include('modalInsertarProveedor')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'El proveedor fue actualizado',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Operación exitosa',
            'El proveedor fue dado de baja',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Afirmativo',
            'Proveedor fresco!',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center"> Proveedores registrados </h1>
    
    <form action="{{route('proveedor.index')}}">
      <input type="search" placeholder="Buscar un proveedor..." name="filtrar" class="form-control">
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-pen"></i> Buscar proveedor </button>
    </form>

      <div class="container mb-5 mt-5  gap-2">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInsertarProveedor">
          <i class="bi bi-plus"></i>  Agrega otro Proveedor
        </button> 
    
    <table class="table table-borderless table-striped table-hover" >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Numero Fijo</th>
                    <th scope="col">Numero celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              @foreach($consultaProveedor as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idProveedor}}</th>
                    <td>{{$consulta->empresa}}</td>
                    <td>{{$consulta->direccion}}</td>
                    <td>{{$consulta->pais}}</td>
                    <td>{{$consulta->contacto}}</td>
                    <td>{{$consulta->noFijo}}</td>
                    <td>{{$consulta->noCel}}</td>
                    <td>{{$consulta->correo}}</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarProveedor{{$consulta->idProveedor}}">
                    <i class="bi bi-pen"></i> Modificar datos del proveedor
                    </button></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarProveedor{{$consulta->idProveedor}}">
                    <i class="bi bi-trash2"></i>  Dar de baja proveedor 
                    </button></td>
                </tr>
              </tbody> 
              @include('modalActualizarProveedor')
    @include('modalEliminarProveedor')
    @endforeach
        </table>
        </div>
    </div>
    
@stop
