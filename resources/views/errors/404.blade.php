{{! $breadcrumbs = Breadcrumbs::render('errors.404') }}
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>404 - La página que buscas no existe - Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href=" {{{ asset('static/images/icons/favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/main_academia.css') }}">
</head>
<body>
  <header>
    <div class="row between-xs header-web">
      <div class="col-xs-6 logo">
        <a href="/"><img src="{{{ asset('static/images/logos/logo-trilce.svg') }}}" alt="Trilce"></a>
      </div>
      <div class="col-xs-6 end-xs pre-nav"></div>
    </div>
  </header>

  <div class="row col-xs-12 center-xs center-sm container-base error-404">
    <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
      <div class="row col-xs">
        <div class="col-xs col-sm-6">
          <div></div>
          <img class="error-404--image" src="{{{ asset('/static/images/error-404.svg') }}}" alt="La página que buscas no existe.">
        </div>
        <div class="col-xs col-sm-4 text">
          <div></div>
          <h1>La página que buscas no existe.</h1>
          <p>Te invitamos a seguir navegando en nuestra web en el siguiente enlace <br /> <a href="http://www.trilce.edu.pe/">#EstoEsTrilce</a></p>
        </div>
      </div>
    </div>
  </div>

  @include('colegio.layouts.parts.footer')
</body>
</html>
