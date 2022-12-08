<!-- Modal -->
<div class="modal fade" id="modalEliminarComic{{$consulta->idComic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminarComic{{$consulta->idComic}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Dar de baja comic</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form method="POST" action="{{route('comic.destroy',$consulta->idComic)}}">
              @csrf
              @method('delete')
              <label>Nombre del Comic:</label>
              {{$consulta->nombre}}<br>
              <label>Numero de edicion:</label>
                    {{$consulta->edicion}}<br>
                    <label>Compañia:</label>
                      {{$consulta->compania}}<br>
                      <label>Cantidad de cantidadComics:</label>
                      {{$consulta->cantidadComics}}<br>
                      <label>Precio de Compra:</label>
                      {{$consulta->precioCompraCo}}<br>
                      <label>Precio de Venta:</label>
                      {{$consulta->precioVentaCo}}<br>
                      <label>Id del Proveedor:</label>
                      {{$consulta->proveedor_Id}}<br>
                      <label>Fecha de ingreso:</label>
                      {{$consulta->fechaIngreso}}<br>
                
      </div>

      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </form>
      </div>
    </div>
  </div>
</div>