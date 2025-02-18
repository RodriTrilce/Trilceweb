<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112446135-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112446135-1');
</script> -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HQRN8J');</script>
<!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <title>@hasSection('title')@yield('title') - @endif Trilce</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}?v1.3">
  <link rel="stylesheet" href="{{ mix('/css/main_colegio.css') }}?v1.3">
  <style>
    * {
        padding: 0px;
        border: 0px;
        margin: 0px;
    }
  </style>
  @include('tracking.in_head')
</head>

<body>
  @include('tracking.init_body')
  <style>
    html {
      overflow-x: hidden;
      overflow-y: hidden;
    }
  </style>
</body>

</html>