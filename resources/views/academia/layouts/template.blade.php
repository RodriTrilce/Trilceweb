<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  
  <title>Trilce | Academia | Tu mejor opción</title>
    {!! Meta::tag('description') !!}
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('url', Request::url()) !!}

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}?v1.2">
  <link rel="stylesheet" href="{{ mix('/css/main_academia.css') }}?v1.2">
  <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >
  <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
  @yield('academia_sedes')
  <style>
    .demo-trl{
      color:green;
    }
  .container-main-aca {
        background-color: #f4633a;
            margin: 0px;
    padding: 0px;
    text-align: center;
    width: 100%;
        margin-right: 0px !important;
    margin-left: 0px !important;
  }
    @media(max-width: 768px) {
      header .nav-burger ul {
        position: absolute;
        z-index: 99999;
        width: 100vw;
        background-color: #fff;
        text-align: center;
        margin-top: 70px;
        top: 0;
        opacity: 0;
        overflow: hidden;
        height: 0;
        -webkit-transition: all .1s ease-in-out;
        transition: all .1s ease-in-out;
        box-shadow: 0px 0px 2px #000;
        right: 0px;
        left: auto !important;
      }
      .header-web {
        min-height: initial !important;
        margin-right: 30px !important;
        margin-left: 30px !important;
        margin-top: 0px !important;
      }
      .breadcrumb li:last-child {
        line-height: 12px;
      }
      .container-main-aca.row, .container-main-aca .row{
        margin-left: 0px !important;
      }
      .incriptions-acade-ads {
        margin-bottom: 0px;
      }
      .incriptions-acade-ads__container .row {
          display: flex;
          justify-content: center;
      }
      footer {
          margin-bottom: 20px;
        }
    }
  </style>
  @include('tracking.in_head')
  <style>
    html {
      overflow-x: hidden;
    }
  </style>
</head>
<body>
  @include('tracking.init_body')
  @yield('afterBody')

@include('academia.layouts.parts.header')
@yield('content')
@include('academia.layouts.parts.footer')

<script>
  var page;
  @section('scripts');
</script>

<script src="{{ mix('/js/app_academia.js') }}?v1.3" charset="utf-8"></script>
<!-- <script src="{{ mix('/js/app_colegio.js') }}?v1.1" charset="utf-8"></script> -->
@show

@include('tracking.before_end_body')
@include('tracking.before_end_body_academia')
</body>
</html>