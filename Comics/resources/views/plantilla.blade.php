<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Weirdo Comics</title>
</head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);
  @import url(https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css);

  html {
    background: rgb(255, 255, 255);
    font-size: 14px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    min-width: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-rendering: optimizeLegibility;
  }

  body {
    color: #666;
    font-family: "Source Sans Pro", "Helvetica", "Arial", sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
  }

  a {
    text-decoration: none;
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
  }

  div, h2, p, figure {
    margin: 0;
    padding: 0;
  }

  .header {
    color: white;
    padding: 40px 0 20px;
    text-align: center;
  }

  .header h1 {
    font-size: 40px;
    font-weight: bold;
  }

  .header h2 a {
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    color: white;
    font-size: 20px;
    opacity: 0.5;
  }

  .header h2 a:hover {
    border-bottom-color: white;
    opacity: 1;
  }

  .main {
    margin: 0 auto;
    max-width: 1040px;
    padding: 10px;
  }

  .column {
    flex: 1;
    flex-direction: column;
  }

  .article {
    background: white;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    color: #666;
    display: flex;
    flex: 1;
    flex-direction: column;
    flex-basis: auto;
    margin: 10px;
  }

  .article:hover,
  .article:focus {
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    color: #444;
  }

  .article-image {
    background: #eee;
    display: block;
    padding-top: 75%;
    position: relative;
    width: 100%;
  }

  .article-image img {
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
  }

  .article-image.is-3by2 {
    padding-top: 66.6666%;
  }

  .article-image.is-16by9 {
    padding-top: 56.25%;
  }

  .article-body {
    display: flex;
    flex: 1;
    flex-direction: column;
    padding: 20px;
  }

  .article-title {
    color: #333;
    flex-shrink: 0;
    font-size: 1.4em;
    font-weight: 700;
    line-height: 1.2;
  }

  .article-content {
    flex: 1;
    margin-top: 5px;
  }

  .article-info {
    display: flex;
    font-size: 0.85em;
    justify-content: space-between;
    margin-top: 10px;
  }

  @media screen and (min-width: 800px) {
    .columns,
    .column {
      display: flex;
    }
  }

  @media screen and (min-width: 1000px) {
    .first-article {
      flex-direction: row;
    }

    .first-article .article-body {
      flex: 1;
    }

    .first-article .article-image {
      height: 300px;
      order: 2;
      padding-top: 0;
      width: 400px;
    }

    .main-column {
      flex: 3;
    }

    .nested-column {
      flex: 2;
    }
  }
</style>


<body class="bg-blue">
<div>

<!--barra navegacion-->
<div class="container-fluid">
  <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <!--enlace /-->
              <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <span class="fs-5 d-none d-sm-inline">Weirdo Comics</span>
              </a>
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <!--enlace menu-->
                  <li class="nav-item">
                      <a href=" {{ route('apPrin') }} " class="nav-link align-middle px-0">
                          <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Menu</span>
                      </a>
                  </li>
                  <!--enlace submenu de comic y articulos-->
                  <li>
                      <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Registrar</span> </a>
                          <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href=" {{ route('apRegiArt') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Registrar Articulos</span> </a>
                          </li>
                          <li>
                              <a href=" {{ route('apRegiCom') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Registrar Comics</span> </a>
                          </li>
                          <li>
                            <a href=" {{ route('apProvee') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Registrar Proveedores</span> </a>
                        </li>
                      </ul>
                  </li>
                  <!--enlace pedidos-->
                  <li>
                      <a href=" {{ route('apPedid') }} " class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                  </li>
             <!-- <li>
                      <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                          <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                      <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                          </li>
                          <li>
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                          <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                          </li>
                          <li>
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                          </li>
                          <li>
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                          </li>
                          <li>
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                          </li>
                      </ul>
                  </li> -->
                  <li>
                      <a href=" {{ route('apStock') }} " class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Stock</span> </a>
                  </li>
                  <li>
                    <a href=" {{ route('apVentas') }} " class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Ventas</span> </a>
                </li>
              </ul>
              <hr>
              <!--<div class="dropdown pb-4">
                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                      <span class="d-none d-sm-inline mx-1">loser</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                      <li><a class="dropdown-item" href="#">New project...</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
              </div>-->
          </div>
      </div>
      <div class="col py-3">

        <!--  Contenido -->
        @yield('contenido')

      </div>
  </div>
</div>
<!--Termina Barra navegación-->

<!--Pie de Pagina-->
<!--Alertas-->
<div class="alert alert-success" role="alert">
  Weirdo Comics.   2022 CopyRigth® 
  
  <?php 
  date_default_timezone_set('America/Mexico_City');

  $fechaActual = date('d/m/y h:i:s');

  echo "$fechaActual <br>";
  
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>