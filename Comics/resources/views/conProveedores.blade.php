@extends('Template')

@section('contenido')
@include('modalInsertar')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Recuerdo fresquisimo!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'El recuerdo ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Recuerdo fresquisimo!',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt mt-4 mb-4 text-center"> Proveedores registrados </h1>
    
      <div class="container col-md-6 mb-5 mt-5 d-grid gap-2">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInsertarProveedor">
          <i class="bi bi-plus"></i>  Agrega otro Proveedor
        </button>
      </div>

    @foreach($ConsultaP as $consulta)
    @include('modalActualizar')
    @include('modalEliminar')
    

    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consulta->empresa}}</h5>
            </div>

            <div class="card-body">
              <h5 class="card-title">{{$consulta->idProveedor}}</h5>
              <p class="card-text">{{$consulta->empresa}}</p>
              <p class="card-text">{{$consulta->direccion}}</p>
              <p class="card-text">{{$consulta->pais}}</p>
              <p class="card-text">{{$consulta->direccion}}</p>
              <p class="card-text">{{$consulta->contacto}}</p>
              <p class="card-text">{{$consulta->noFijo}}</p>
              <p class="card-text">{{$consulta->noCelular}}</p>
              <p class="card-text">{{$consulta->correo}}</p>
            </div>

            <div class="card-footer text-muted">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarProveedor{{$consulta->idRecuerdos}}">
                  <i class="bi bi-pen"></i> Modificar datos del proveedor
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarProveedor{{$consulta->idRecuerdos}}">
                  <i class="bi bi-trash2"></i>  Dar de baja proveedor 
                </button>
            </div>
          </div>
          </div>
          @endforeach
@stop
