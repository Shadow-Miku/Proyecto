<!-- Modal -->
<div class="modal fade" id="modalEliminarArticulo{{$consulta->idArticulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminarArticulo{{$consulta->idArticulo}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Dar de baja proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form method="POST" action="{{route('articulo.destroy',$consulta->idArticulo)}}">
              @csrf
              @method('delete')
              <label>Tipo de articulo:</label>
              {{$consulta->tipo}}<br>
              <label>Marca:</label>
              {{$consulta->marca}}<br>
              <label>Descripcion del objeto:</label>
              {{$consulta->descripcion}}<br>
              <label>Cantidad de articulos:</label>
              {{$consulta->cantidadArticulos}}<br>
              <label>Precio de compra:</label>
              {{$consulta->precioCompraAr}}<br>
              <label>Precio de venta:</label>
              {{$consulta->precioVentaAr}}<br>
              <label>Id de identificacion del proveedor:</label>
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