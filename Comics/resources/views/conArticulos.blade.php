@extends('plantilla')

@section('contenido')
@include('modalInsertarArticulo')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Articulo Actualizado!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'El articulo ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Exitoso',
            'El articulo anda fresco!',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center"> Articulos registrados </h1>
    
      <div class="container mb-5 mt-5  gap-2">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInsertarArticulo">
          <i class="bi bi-plus"></i>  Registrar otro articulo
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
              @foreach($ConsultaP as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idProveedor}}</th>
                    <td>{{$consulta->empresa}}</td>
                    <td>{{$consulta->direccion}}</td>
                    <td>{{$consulta->pais}}</td>
                    <td>{{$consulta->contacto}}</td>
                    <td>{{$consulta->noFijo}}</td>
                    <td>{{$consulta->noCel}}</td>
                    <td>{{$consulta->correo}}</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarArticulo{{$consulta->idProveedor}}">
                    <i class="bi bi-pen"></i> Modificar datos del articulo
                    </button></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarArticulo{{$consulta->idProveedor}}">
                    <i class="bi bi-trash2"></i>  Dar de baja el articulo
                    </button></td>
                </tr>
              </tbody> 
              @include('modalActualizarArticulo')
    @include('modalEliminarArticulo')
    @endforeach
        </table>
        </div>
    </div>
    
@stop
