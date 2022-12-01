@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Proveedor registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Proveedores </h1>
            

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Proveedores
            </div>

            <div class="card-body">

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
                        <label class="form-label">País</label>
                        <input type="text"  
                        multiple
                        id="pais"
                        list="drawpais"
                        
                        size="64"
                        class="form-control" 
                        name="pais" 
                        value="{{old('pais')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('pais') }} </p>
                        <datalist id="drawpais">
                            <option value="México">Mex</option>
                            <option value="Estados Unidos">EUA</option>
                            <option value="Canadá">Can</option>
                            <option value="España">Spain</option>
                            <option value="Reino Unido">UK</option>
                            <option value="Japón">Jap</option>
                            <option value="Brasil">Bra</option>
                          </datalist>
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

                <button type="submit" class="btn btn-success m-1"> Registrar Proveedor </button>
            
            </form>

            </div>
        </div>
    </div> 
@stop