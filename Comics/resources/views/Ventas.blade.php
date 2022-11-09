@extends('plantilla')
@section('contenido')

    @if (session()->has('confirmacion'))
       <div class="alert alert-success" role="alert">
            El articulo se ha agregado correctamente! 
       </div>
    @endif

    <div class="container-fluid mt-5 col-md-13">

        <p class="text-left mb-5 fs-1"> Ventas </p>
        <form action="consultarArtVenta" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col">
                    <label>Nombre Vendedor</label>
                </div>
                    <div class="col-md-3">
                       <!-- <input class="" type="text" placeholder="Buscar un producto..." name="buscVenta">-->
                        <input class="" type="text" placeholder="Buscar un producto..." name="buscVenta"  
                        multiple
                        id="Stock"
                        list="drawStock"
                        size="30"
                        class="form-control"  
                        value="{{old('buscVenta')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('buscVenta') }} </p>
                        <datalist id="drawStock">
                            <option value="Comic">Dragon Ball Super V3</option>
                            <option value="Articulo">Funko Pop Franco Escamilla</option>
                            <option value="Comic">El Batman Que Rie</option>
                            <option value="Articulo">Lampara Lava</option>
                            <option value="Comic">DC VS MARVEL</option>
                            <option value="Articulo">Esferas del Dragon</option>
                            <option value="Comic">Deadpool</option>
                          </datalist>
                    </div>
                
            </div>

            <div class="card-body col-md-11">
                <table class="table table-secondary mb-10">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Cantidad</th>
                            <th scope="col">Articulo/Cómic</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripcion</th>
                        </tr>
                    </thead>
                        
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                        <tr class="table-light">
                            <th scope="row">2</th>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                            </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                                
                        </tr>
                        <tr class="table-light">
                            <th scope="row">4</th>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>    
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class=" container -fluid row g-5">
                <div class="col-md-2">
                    <button type="submit" class="m-1">Agregar al carrito</button>
                </div>
        </form>
            <div class="col">
                <a href="/Ventas">
                    <button>Cancelar</button>
                </a>
            </div>

            <div class="col">
                <a href="/Ventas">
                    <button>Registrar Venta</button>
                </a>
            </div>
        </div> 
    </div>         
@endsection