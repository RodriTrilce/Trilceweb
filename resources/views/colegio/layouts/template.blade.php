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



  <style>
    .colegio-cardsv2__herotitle{
      color: #ff4e0e
    }

    .Pity{
      color: #000
    }
    
  .blog-home-top-content p {
    text-align: justify;
  }
    @media (max-width: 768px){
      footer {
          margin-bottom: 0px;
      }
      .card2 {
        margin-bottom: 0px;
        margin-top: 2px;
     }
     .nav__highlight.nav__highlight--left {
      padding-left: 0px;
     }
     .vacations__select {
       display: flex !important;
       justify-content: center !important;
       align-items: center !important;
     }
     .vacations__select-item {
       display: flex !important;
       justify-content: center !important;
       align-items: center !important;
     }
     .vacations__select-item .select-vacations{
      display: flex;
      justify-content: center;
     }
     .ss-main .ss-single-selected{
      margin-bottom: 10px;
      width: 180px !important;
    }
    
  }
  </style>
  @include('tracking.in_head')
</head>

<body>
  @include('tracking.init_body')
  <style>
    html {
      overflow-x: hidden;
    }
  </style>

  <div class="modal">
    <div class="modal-inner">
      <span data-modal-close data-modal-close-desing>
        <!--&times;--><i class="fa fa-close"></i></span>
      <div class="modal-content"></div>
    </div>
  </div>

  @yield('afterBody')
  @include('colegio.layouts.parts.header')
  @yield('content')
  @include('colegio.layouts.parts.footer')

  <script>
    var page;
    @section('scripts')
  </script>
  <script src="{{ mix('/js/app_colegio.js') }}?v1.1" charset="utf-8"></script>
  @show

  @include('tracking.before_end_body')
  @include('tracking.before_end_body_colegio')
</body>

</html>