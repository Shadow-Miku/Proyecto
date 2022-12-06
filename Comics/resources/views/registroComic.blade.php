@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Comic registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Comics </h1>
            
        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Comics
            </div>

            <div class="card-body">

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
                        <input type="numeric" class="form-control" name="precioVentaCm" id="precioVentaCm" value="{{old('precioVentaCm')}}" step="0.001">
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
                                <option disabled selected >Selecciona un Porveedor</option>
                                @foreach ($proveedor as $tb_proveedores)
                                    <option value="{{$tb_proveedores['idProveedor']}}">{{$tb_proveedores['empresa']}}</option>
                                @endforeach
                            </select>
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

                <button type="submit" class="btn btn-success m-1"> Registrar Comic</button>
            
            </form>

            </div>
        </div>
    </div>
@stop