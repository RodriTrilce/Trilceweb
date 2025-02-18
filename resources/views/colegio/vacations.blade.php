{{! $breadcrumbs = Breadcrumbs::render('colegio-vacations') }}
@extends('colegio.layouts.template')
@section('title', 'Vacaciones Útiles')
@section('content')
<!--head>
    <meta http-equiv="refresh" content="0; url=https://www.trilce.edu.pe/colegio">
</head-->
<style>
  #vacations_slider-item0 {
    height: 420px;
    text-align: center;
  }
  #vacations_slider-item0 img {
    width: auto;
    height: 100%;
  }
  .header-vacations {
    /*background: #f5f5f5;*/
    background: #ECECEC;
    margin: 0px 0 40px;
  }
  .header-vacations .row .row {
    max-width: 823px;
    margin: 0 auto;
    width: 100%;
  }
  .ss-main .ss-single-selected{
    width: 100px;
  }

  .select-vacations .ss-content {
    width: initial;
  }
  .vacations__select-item {
    padding: 0px !important;
  }
  #app {
    font-family: 'Geogrotesque-Rg' !important;
  }
  .vacations__bottom h1 {
    font-size: 2rem;
  }
</style>



 <div class="container">
  <div class="row">
    <div class="col-md-12">
      
    </div>
    <div class="col-md-12">
      
    </div>
  </div>
</div>
  <div class="header-vacations">
    <div class="row col-xs-12 end-sm start-xs">
      <div class="row col-sm-11 col-xs-12" >
        <div class="row col-sm-4 col-xs-12 start-xs middle-xs center-xs">

          <div class="vacations__logo">
            <div class="vacations__container-logo center-xs">
            <img src="{{asset('static/images/logo_vacaciones_utiles_2021.svg')}}" alt="Vacaciones Útiles" class="vacations__logo-svg">
            </div>
            @include('colegio.partials.vacations.selects')
          </div>

        </div>
        <div class="col-sm start-xs xs-hide">
          <div class="vacations__slider" id="vacations_slider">

            <div>
              <img src="{{asset('static/images/banner_vacaciones_utiles_2021.png')}}" alt="Vacaciones Útiles" >
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs container-base vacations__container">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <link href=/storage/other/landing-static/vacations/css/app.be563d0b.css rel=preload as=style>
      <link href=/storage/other/landing-static/vacations/js/app.5dfbbba1.js rel=preload as=script>
      <link href=/storage/other/landing-static/vacations/js/chunk-vendors.b8d42ec7.js rel=preload as=script>
      <link href=/storage/other/landing-static/vacations/css/app.be563d0b.css rel=stylesheet>

      <div class="col-xs-12 landing__title">
      		<h1>¿Buscas más información? ¡Escríbenos!</h1>
    	</div>

      <div class="row col-xs-12">
        <div class="row col-xs-12 xs-hide col-sm-3 vacations__image-container">
          <img class="vacations__image-girl" src="{{asset('static/images/colegio/vacations/girl-vacations-home.png')}}" alt="Vacaciones útiles">
        </div>
        <div class="col-xs-12 col-sm-9">
          <div id=app></div>
          <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
          <script src=/storage/other/landing-static/vacations/js/chunk-vendors.b8d42ec7.js rel=preload as=script></script>
          <script src=/storage/other/landing-static/vacations/js/app.e31cddb8.js rel=preload as=script></script>
        </div>
      </div>

      <div class="col-xs-12 vacations__bottom vacations__bottom--orange">
        <div>
          <h1 class="vacations_starth1"><span><i class="fa fa-lightbulb-o"></i>Inicio: 11 de enero / Término: 16 de febrero</span></h1>
        </div>
      </div>

    </div>
  </div>
  
@include('colegio.partials.card_bottom')
@endsection

@section('scripts')
  page = 'vacations';
  @parent
@endsection
