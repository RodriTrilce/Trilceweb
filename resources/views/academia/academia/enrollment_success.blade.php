{{! $breadcrumbs = Breadcrumbs::render('academia-enrollment') }}
@extends('academia.layouts.template')
@section('title', 'Preinscripción en línea')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-enrollment"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Preinscripción</h1>
      </div>
    </div>
  </div>
  <div class="row col-xs-12 center-xs about-container container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="row col-xs-12 about-history">
        <div class="row col-xs-12 xs-hide col-sm-4 about-history--left">
          <img src="{{ url('/static/images/academia/img-nosotros-academia.jpg') }}" alt="Sobre nosotros">
        </div>
        <div class="col-xs-12 col-sm about-history--right">
          <h1 class="about-history--title">¡Gracias {{$nombre}}!</h1>
          <div class="about-history--pcontainer">
            <p>
             Tu registro fue exitoso.
            </p>
            <div class="row col-xs-12 center-xs">
        
            <div class="row col-xs-12">
                <div class="col-xs-12 col-sm-12">
                <form action="/academia/preinscripcion/descargar-pdf" method="post" target="_blank">
                @csrf				
                <input name="token" type="hidden" value="{{$dni}}">
                  <button class="incriptions-acade-ads__container-cta banner__button-cta banner__button-cta--white" type="submit" name="button">
                    Descarga tu ficha de preinscripción aquí
                  </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="grayhr2" />
    </div>
  </div>
 

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrollment';

    function captcha(){
      if(grecaptcha.getResponse().length > 0){
        document.getElementById("captcha").value = 'valid';
      }
    }
  @parent
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
