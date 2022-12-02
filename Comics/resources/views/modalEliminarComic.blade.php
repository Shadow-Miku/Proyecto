<!-- Modal -->
<div class="modal fade" id="modalEliminarProveedor{{$consulta->idProveedor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminarProveedor{{$consulta->idProveedor}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Dar de baja proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form method="POST" action="{{route('proveedor.destroy',$consulta->idProveedor)}}">
              @csrf
              @method('delete')
              
            {{$consulta->empresa}}
            {{$consulta->direccion}}
            {{$consulta->pais}}
            {{$consulta->contacto}}
            {{$consulta->noFijo}}
            {{$consulta->noCel}}
            {{$consulta->correo}}
                
      </div>

      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </form>
      </div>
    </div>
  </div>
</div>