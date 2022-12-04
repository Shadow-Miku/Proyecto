<!-- Modal -->
<div class="modal fade" id="modalInsertarComic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInsertarComic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body">
          <form class="m-4" method="POST" action="{{route('comic.store')}}">
            @csrf
            <!--Errores individuales y guardar los datos escritos-->
            <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('nombre') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Edición</label>
                        <input type="text" class="form-control" name="edicion" value="{{old('edicion')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('edicion') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Compañia</label>
                        <input type="text" class="form-control" name="compania" value="{{old('compania')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('compania') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cantidad de Comics</label>
                        <input type="number" min="0" class="form-control" name="cantidadComics" value="{{old('cantidadComics')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('cantidadComics') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio compra Comic</label>
                        <input type="numeric" class="form-control" name="precioCompraCm" id="precioCompraCm" value="{{old('precioCompraCm')}}" step="0.001" oninput="calcular()">
                        <p class="text-primary fst-italic"> {{ $errors->first('precioCompraCm') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio venta</label>
                        <input type="numeric" class="form-control" name="precioVentaCm" id="precioVentaCm" value="{{old('PrecioVentaCm')}}" step="0.001">
                        <p class="text-primary fst-italic"> {{ $errors->first('precioVentaCm') }} </p>
                    </div>

                    <script type="text/javascript"> 
                        function calcular(){
                            try{
                                var a= paseFloat(document.getElementById("precioCompraCm").value)||0;

                                document.getElementById("precioVentaCm").value = a * 1.40;
                            }catch (e){}
                        }
                    </script>


                    <div class="mb-3">
                        <label for="text" class="form-label">Proveedor </label>
                            <select class="form-select" name="txtProveedor" aria-label="Default select example">
                                <option selected> Selecciona un proveedor...</option>
                                
                        <p class="text-primary fst-italic" style="color: aqua"> 
                            {{ $errors->first('txtProveedor') }} </p>
                        </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha ingreso</label>
                        <input type="datetime-local" id="datetime" class="form-control" name="fechaIngresoCm" value="{{old('fechaIngresoCm')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('fechaIngresoCm') }} </p>
                    </div>
            </div>

            <div class="card-footer">

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">nel prro</button>
            <button type="submit" class="btn btn-primary">jimon dice</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>