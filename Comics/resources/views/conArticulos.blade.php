@extends('plantilla')

@section('contenido')


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
        <button class="btn btn-success"  onclick="location.href='{{route('articulo.create')}}'">
          <i class="bi bi-plus"></i>  Registrar otro articulo
        </button> 
    
    <table class="table table-borderless table-striped table-hover" >
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Cantidad de articulos</th>
                  <th scope="col">Precio compra del articulo</th>
                  <th scope="col">Precio de venta del articulo</th>
                  <th scope="col">Proveedor</th>
                  <th scope="col">Fecha de ingreso</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              @foreach($ConsultaA as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idArticulo}}</th>
                    <td>{{$consulta->tipo}}</td>
                    <td>{{$consulta->marca}}</td>
                    <td>{{$consulta->descripcion}}</td>
                    <td>{{$consulta->cantidadArticulos}}</td>
                    <td>{{$consulta->precioCompraAr}}</td>
                    <td>{{$consulta->precioVentaAr}}</td>
                    <td>{{$consulta->proveedor_Id}}</td>
                    <td>{{$consulta->fechaIngreso}}</td>          
                    <td><button class="btn btn-primary" onclick="location.href='{{route('articulo.edit',$consulta->idArticulo)}}'">
                    <i class="bi bi-pen"></i> Actualizar datos del articulo
                    </button></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarArticulo{{$consulta->idArticulo}}">
                    <i class="bi bi-trash2"></i>  Dar de baja el articulo
                    </button></td>
                </tr>
              </tbody> 

    @include('modalEliminarArticulo')
    @endforeach
        </table>
        </div>
    </div>
    
@stop
