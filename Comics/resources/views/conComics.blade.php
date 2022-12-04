@extends('plantilla')

@section('contenido')


@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Comic fresquisimo!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'F',
            'El comic ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Comic fresquisimo!',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center"> Comics registrados </h1>
    
      <div class="container mb-5 mt-5  gap-2">
        <button  class="btn btn-success"  onclick="location.href='{{route('comic.create')}}'">
          <i class="bi bi-plus"></i>  Registrar otro comic
        </button> 
    
    <table class="table table-borderless table-striped table-hover" >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edicion</th>
                    <th scope="col">Compañia</th>
                    <th scope="col">Cantidad de comics</th>
                    <th scope="col">Precio compra del comic</th>
                    <th scope="col">Precio de venta del comic</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              @foreach($ConsultaC as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idComic}}</th>
                    <td>{{$consulta->nombre}}</td>
                    <td>{{$consulta->edicion}}</td>
                    <td>{{$consulta->compania}}</td>
                    <td>{{$consulta->cantidadComics}}</td>
                    <td>{{$consulta->precioCompraCo}}</td>
                    <td>{{$consulta->precioVentaCo}}</td>
                    <td>{{$consulta->proveedor_Id}}</td>
                    <td>{{$consulta->fechaIngreso}}</td>          
                    <td><button class="btn btn-primary" onclick="location.href='{{route('comic.edit',$consulta->idComic)}}'">
                    <i class="bi bi-pen"></i> Actualizar datos del comic
                    </button></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarComic{{$consulta->idComic}}">
                    <i class="bi bi-trash2"></i>  Dar de baja el comic
                    </button></td>
                </tr>
              </tbody> 
          
    @include('modalEliminarComic')
    @endforeach
        </table>
        </div>
    </div>
    
@stop
