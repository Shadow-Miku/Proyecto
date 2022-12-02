<!-- Modal -->
<div class="modal fade" id="modalActualizarProveedor{{$consulta->idProveedor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizarProveedor{{$consulta->idProveedor}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="POST" action="{{route('proveedor.update',$consulta->idProveedor)}}">
            
            @csrf

            {!! method_field('PUT') !!}

            <!--Errores individuales y guardar los datos escritos-->
            <div class="mb-3">
                <label class="form-label">Empresa: </label>
                <input type="text" class="form-control" name="empresa" value="{{$consulta->empresa}}">
                <p class="text-primary fst-italic"> {{ $errors->first('empresa') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Dirección: </label>
                <input type="text" class="form-control" name="direccion" value="{{$consulta->direccion}}">
                <p class="text-primary fst-italic"> {{ $errors->first('direccion') }} </p>
            </div>

           

                    <div class="mb-3">
                        <label for="text" class="form-label">País</label>
                        <select class="form-select" name="pais" aria-label="Default select example">
                            <option selected>{{$consulta->pais}}</option>
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
                <label class="form-label">Contacto: </label>
                <input type="text" class="form-control" name="contacto" value="{{$consulta->contacto}}">
                <p class="text-primary fst-italic"> {{ $errors->first('contacto') }}</p>
            </div>


            <div class="mb-3">
                <label class="form-label">Numero Fijo: </label>
                <input type="numeric" class="form-control" name="noFijo" value="{{$consulta->noFijo}}">
                <p class="text-primary fst-italic"> {{ $errors->first('noFijo') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Numero celular: </label>
                <input type="numeric" class="form-control" name="noCelular" value="{{$consulta->noCel}}">
                <p class="text-primary fst-italic"> {{ $errors->first('noCelular') }} </p>
            </div>

            <div class="mb-3">
                <label class="form-label">Numero celular: </label>
                <input type="email" class="form-control" name="correo" value="{{$consulta->correo}}">
                <p class="text-primary fst-italic"> {{ $errors->first('correo') }} </p>
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