<!-- Modal -->
<div class="modal fade" id="modalActualizarComic{{$consulta->idComic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizarComic{{$consulta->idComic}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar comic</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="POST" action="{{route('comic.update',$consulta->idComic)}}">
            
            @csrf

            {!! method_field('PUT') !!}

            <!--Errores individuales y guardar los datos escritos-->
            <div class="mb-3">
                <label class="form-label">Nombre </label>
                <input type="text" class="form-control" name="nombre" value="{{$consulta->nombre}}">
                <p class="text-primary fst-italic"> {{ $errors->first('nombre') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Edición </label>
                <input type="text" class="form-control" name="edicion" value="{{$consulta->edicion}}">
                <p class="text-primary fst-italic"> {{ $errors->first('edicicion') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label">Compania </label>
                <input type="text" class="form-control" name="compania" value="{{$consulta->compania}}">
                <p class="text-primary fst-italic"> {{ $errors->first('compania') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label">Cantidad de comics </label>
                <input type="text" class="form-control" name="cantidadComics" value="{{$consulta->cantidadComics}}">
                <p class="text-primary fst-italic"> {{ $errors->first('cantidadComics') }}</p>
            </div>


            <div class="mb-3">
                <label class="form-label">Precio Compra </label>
                <input type="numeric" class="form-control" name="precioCompraCm" value="{{$consulta->precioCompraCo}}">
                <p class="text-primary fst-italic"> {{ $errors->first('precioCompraCm') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio venta </label>
                <input type="numeric" class="form-control" name="precioVentaCm" value="{{$consulta->precioVentaCo}}">
                <p class="text-primary fst-italic"> {{ $errors->first('precioVentaCm') }} </p>
            </div>

            <div class="mb-3">
              <label for="text" class="form-label">Proveedor </label>
                <select class="form-select" name="txtProveedor" aria-label="Default select example">
                  <option selected> {{$consulta->proveedor_Id}} </option>
                
                   
                    
                </select>
              <p class="text-primary fst-italic" style="color: aqua"> 
            {{ $errors->first('txtProveedor') }} </p>
            </div>
            
        </div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
  </div>

</form>

      </div>
    </div>
  </div>
</div>