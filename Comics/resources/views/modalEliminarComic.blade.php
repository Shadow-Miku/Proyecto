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
              
              {{$consulta->nombre}}
                    {{$consulta->edicion}}
                      {{$consulta->compania}}
                      {{$consulta->cantidadComics}}
                      {{$consulta->precioCompraCo}}
                      {{$consulta->precioVentaCo}}
                      {{$consulta->proveedor_Id}}
                      {{$consulta->fechaIngreso}}
                
      </div>

      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </form>
      </div>
    </div>
  </div>
</div>