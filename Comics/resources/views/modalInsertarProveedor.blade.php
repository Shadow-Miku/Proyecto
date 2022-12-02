<!-- Modal -->
<div class="modal fade" id="modalInsertarProveedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInsertarProveedor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body">
          <form class="m-4" method="POST" action="{{route('proveedor.store')}}">
            @csrf
            <!--Errores individuales y guardar los datos escritos-->
            <div class="mb-3">
                        <label class="form-label">Empresa</label>
                        <input type="text" class="form-control"  name="empresa" value="{{old('empresa')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('empresa') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control"  name="direccion" value="{{old('direccion')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('direccion') }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">País</label>
                        <select class="form-select" name="pais" aria-label="Default select example">
                            <option selected> Selecciona un país...</option>
                                <option value="México">México</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Canadá">Canadá</option>
                                <option value="España">España</option>
                                <option value="Reino Unido">Reini Unido</option>
                                <option value="Japón">Japón</option>
                                <option value="Brasil">Brasil</option>
                        </select>
                    <p class="text-primary fst-italic" style="color: aqua"> 
                        {{ $errors->first('pais') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contacto</label>
                        <input type="text" class="form-control"  name="contacto" value="{{old('contacto')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('contacto') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Fijo</label>
                        <input type="numeric" class="form-control"  name="noFijo" value="{{old('noFijo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('noFijo') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Celular</label>
                        <input type="numeric" class="form-control"  name="noCelular" value="{{old('noCelular')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('noCelular') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control"  name="correo" value="{{old('correo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('correo') }} </p>
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