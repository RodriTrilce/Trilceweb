{{! $breadcrumbs = Breadcrumbs::render('academia-what-your-option') }}
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>Página en mantenimiento - Trilce</title>
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

  <div class="row col-xs-12 center-xs center-sm container-base error-work">
    <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
      <div class="row col-xs">
        <div class="col-xs-7 col-sm-6 text end-xs">
          <div></div>
          <h1>Página en mantenimiento</h1>
          <p>Muy pronto podrás disfrutar de esta sección.</p>

        </div>
        <div class="col-xs-5 col-sm-4">
          <div></div>
          <img class="error-work--image" src="{{{ asset('/static/images/img-enconstruccion.svg') }}}" alt="Estamos en mantenimiento.">
        </div>
      </div>
    </div>
  </div>

  @include('colegio.layouts.parts.footer')
</body>
</html>
