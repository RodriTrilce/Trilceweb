<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <title>Trilce | Colegio | Estudiar en Trilce SE NOTA</title>
    {!! Meta::tag('description') !!}
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}?v1.3">
  <link rel="stylesheet" href="{{ mix('/css/main_colegio.css') }}?v1.3">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  @include('tracking.in_head')
</head>

<body>
  @include('tracking.init_body')
  <style>
    html {
      overflow-x: hidden;
    }
  </style>

  @yield('afterBody')
  @include('colegio.layouts.parts.header')
  @yield('content')
  @include('colegio.layouts.parts.footer')

  <script>
    var page;
    @section('scripts')
  </script>
  <script src="{{ mix('/js/app_colegio.js') }}?v1.1" charset="utf-8"></script>
  <!-- JS de AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
      once: true  // La animación solo ocurre una vez
  });
</script>

  @show

  @include('tracking.before_end_body')
  @include('tracking.before_end_body_colegio')
</body>

</html>