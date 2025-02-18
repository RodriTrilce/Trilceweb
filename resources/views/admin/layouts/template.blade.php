<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ mix('/css/admin_main.css') }}">

</head>

  <div class="modal">
    <div class="modal-inner">
      <span data-modal-close data-modal-close-desing>&times;</span>
      <div class="modal-content"></div>
    </div>
  </div>


<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Trilce Admin</a>
  <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="/admin/salir">Salir</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/admin/">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span></span>
        </h6>
        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Recursos humanos
            </a>
            <ul class="nav flex-column mb-5">

              <li class="nav-item">
                <a href="/admin/rrhh-forms/?type=tutoras_secundaria" class="nav-link">
                  <span data-feather="corner-down-right"></span> Formulario: Tutoras secundaria
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/rrhh-forms/?type=docnete_parimaria_2019" class="nav-link">
                  <span data-feather="corner-down-right"></span> Formulario: Docentes primaria
                </a>
              </li>
            </ul>
          </li>

  

          
          <li class="nav-item">
            <a class="nav-link" href="/email-manager">
              <span data-feather="file-text"></span>
              Email manager
            </a>
          </li>
       

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Formularios
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/form-sorteo" class="nav-link"><span data-feather="corner-down-right"></span> Sorteo laptop</a></li>
              <li class="nav-item"><a href="/admin/form-claves" class="nav-link"><span data-feather="corner-down-right"></span> Claves San Marcos</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Academia: Simulacros
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/simulacrum/?id=1" class="nav-link"><span data-feather="corner-down-right"></span> UNI</a></li>
              <li class="nav-item"><a href="/admin/simulacrum/?id=3" class="nav-link"><span data-feather="corner-down-right"></span> Católica</a></li>
              <li class="nav-item"><a href="/admin/simulacrum/?id=2" class="nav-link"><span data-feather="corner-down-right"></span> San Marcos</a></li>
              <li class="nav-item"><a href="/admin/simulacrum/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Academia: Solucionarios
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/solutions/?id=1" class="nav-link"><span data-feather="corner-down-right"></span> UNI</a></li>
              <li class="nav-item"><a href="/admin/solutions/?id=3" class="nav-link"><span data-feather="corner-down-right"></span> Católica</a></li>
              <li class="nav-item"><a href="/admin/solutions/?id=2" class="nav-link"><span data-feather="corner-down-right"></span> San Marcos</a></li>
              <li class="nav-item"><a href="/admin/solutions/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Shortlinks
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/shortlink/" class="nav-link"><span data-feather="corner-down-right"></span> Listar</a></li>
              <li class="nav-item"><a href="/admin/shortlink/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Blog
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/blog/" class="nav-link"><span data-feather="corner-down-right"></span> Listar</a></li>
              <li class="nav-item"><a href="/admin/blog/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear</a></li>
            </ul>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Olimpiadas matemáticas
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/math-olympics/" class="nav-link"><span data-feather="corner-down-right"></span> Listar</a></li>
              <li class="nav-item"><a href="/admin/math-olympics/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Sedes
            </a>
            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/venue-colegio/" class="nav-link"><span data-feather="corner-down-right"></span> Listar Colegio</a></li>
              
              <li class="nav-item"><a href="/admin/venue-colegio/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear Colegio</a></li>
            </ul>

            <ul class="nav flex-column mb-5">
              <li class="nav-item"><a href="/admin/venue-academia/" class="nav-link"><span data-feather="corner-down-right"></span> Listar Academia</a></li>
              <li class="nav-item"><a href="/admin/venue-academia/create" class="nav-link"><span data-feather="corner-down-right"></span> Crear Academia</a></li>
            </ul>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Banners
            </a>
            <ul class="nav flex-column mb-5">
              <li><a href="/admin/banners/create" class="nav-link"><span data-feather="corner-down-right"></span> Nuevo banner</a></li>
              <li class="nav-item"><a href="/admin/banners/?type=index_academia" class="nav-link"><span data-feather="corner-down-right"></span> index Academia</a></li>
              <li class="nav-item"><a href="/admin/banners/?type=index_colegio" class="nav-link"><span data-feather="corner-down-right"></span> index Colegio</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Popups
            </a>
            <ul class="nav flex-column mb-5">
             
              <li class="nav-item">
                <a href="/admin/popup/" class="nav-link">
                  <span data-feather="corner-down-right"></span> Listar popups
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              File manager
            </a>
            <ul class="nav flex-column mb-5">
             
              <li class="nav-item">
                <a href="/admin/filemanager/" class="nav-link">
                  <span data-feather="corner-down-right"></span> Listar archivos
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/filemanager/create" class="nav-link">
                  <span data-feather="corner-down-right"></span> Subir archivos
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      @yield('content')
    </main>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

<script>
@section('scripts')
  feather.replace()
</script>
@show

<script src="{{ mix('/js/admin_main.js') }}" charset="utf-8"></script>
</body>
</html>
