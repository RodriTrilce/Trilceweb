{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Simulacros de '. $university->name)
@section('content')
<style>
  .simulacrum {
    margin: 0px 0;
  }
</style>

<div class="header-double-top">
  <div class="row">
    <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
    <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-simulacrum"></div>
    <div class="header-double-border"></div>
    <div class="header-double-title">
      <h1>Simulacros</h1>
      <p class="header-double-p-up">Inscripción a los simulacros y Resultados de los exámenes</p>
    </div>
  </div>
</div>

{{--
  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
          <a href="/academia/simulacros-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
<div class="item-a-preparation">Preparación</div>
<span class="item-a-university">UNI</span>
</div>
</a>
</div>

<div class="beginning-breakline"></div>
<div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
  <a href="/academia/simulacros-san-marcos" class="item-a">
    <div class="item-a-container">
      <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
      <div class="item-a-preparation">Preparación</div>
      <span class="item-a-university">SAN MARCOS</span>
    </div>
  </a>
</div>

<div class="beginning-breakline"></div>

<div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
  <a href="/academia/simulacros-pucp" class="item-a">
    <div class="item-a-container">
      <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
      <div class="item-a-preparation">Preparación</div>
      <span class="item-a-university">CATÓLICA</span>
    </div>
  </a>
</div>

</div>
</div>
</div>

--}}

<div class="clearfix"></div>

@if($university->short_name=='UNI'|| $university->short_name=='San Marcos' || $university->short_name=='PUCP')

<br><br>

<div class="row col-xs-12 center-xs" style="display: none">
  <h1 class="simulacrum__title simulacrum__title--and">¡Participa en nuestros Simulacros!</h1>
</div>

<br><br>

@endif

@if($university->short_name=='UNI')
<br><br>
<div class="row col-xs-12 center-xs">
  <h1 style="color: #000; font-weight: bold">Simulacros para el examen de admisión de la Universidad Nacional de Ingeniería (UNI)</h1>
  <p class="simulacrum__title simulacrum__title--and" style="margin: 0 4em 0 4em;font-size: 1.25rem;margin-top: 10px;">En la Academia Trilce, te preparamos a fondo para el examen de admisión de la Universidad Nacional de Ingeniería (UNI) con nuestros simulacros especializados, poniendo a prueba tus conocimientos y acercándote un paso más a tu meta universitaria.</p>
</div>
<br><br>
@elseif($university->short_name=='San Marcos')
<br><br>
<div class="row col-xs-12 center-xs">
  <h1 style="color: #333; font-weight: bold">Simulacros para el examen de admisión de San Marcos (UNMSM)</h1>
  <p class="simulacrum__title simulacrum__title--and" style="margin: 0 4em 0 4em;font-size: 1.25rem;margin-top: 10px;">En la Academia Trilce, te preparamos a fondo para el examen de admisión de la Universidad Nacional Mayor de San Marcos con nuestros simulacros especializados, poniendo a prueba tus conocimientos y acercándote un paso más a tu meta universitaria.</p>
</div>
<br><br>
@elseif($university->short_name=='PUCP')
<br><br>
<div class="row col-xs-12 center-xs">
  <h1 style="color: #333; font-weight: bold">Simulacros para el examen de admisión de la Católica (PUCP)</h1>
  <p class="simulacrum__title simulacrum__title--and" style="margin: 0 4em 0 4em;font-size: 1.25rem;margin-top: 10px;">En la Academia Trilce, te preparamos a fondo para el examen de admisión de la PUCP (Pontificia Universidad Católica del Perú) con nuestros simulacros especializados, poniendo a prueba tus conocimientos y acercándote un paso más a tu meta universitaria.</p>
</div>
<br><br>
@endif


<div class="row col-xs-12 center-xs beginning beginning-minus container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
    <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

      <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
        <a href="/academia/simulacros-uni" class="item-a">
          <div class="item-a-container">
            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
            <div class="item-a-preparation">Preparación</div>
            <span class="item-a-university">UNI</span>
          </div>
        </a>
      </div>

      <div class="beginning-breakline"></div>

      <div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
        <a href="/academia/simulacros-san-marcos" class="item-a">
          <div class="item-a-container">
            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
            <div class="item-a-preparation">Preparación</div>
            <span class="item-a-university">SAN MARCOS</span>
          </div>
        </a>
      </div>

      <div class="beginning-breakline"></div>

      <div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
        <a href="/academia/simulacros-pucp" class="item-a">
          <div class="item-a-container">
            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
            <div class="item-a-preparation">Preparación</div>
            <span class="item-a-university">CATÓLICA</span>
          </div>
        </a>
      </div>

    </div>
  </div>
</div>
<div class="clearfix"></div>
<br><br>

@if($university->short_name=='UNI')
<!-- <div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

    <div class="row col-xs-12 center-xs register-ads">
      <div class="register-ads__container">
        <div class="row col-xs-12">
          <div class="col-xs-12 col-sm">
            <a href="/academia/simulacros-uni/inscripcion/bd7eb1ed6a" class="register-ads__link">
              <h1>Concurso Gratuito de Becas UNI<br><strong>19 de febrero</strong></h1>
              <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                Regístrate aquí
              </button>
            </a>
          </div>
                    <div class="row col-xs-4 bottom-xs center-xs xs-hide">
            <img src="{{ url('/static/images/academia/inscripcion-uni.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>
</div> -->

<!-- <div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

    <div class="row col-xs-12 center-xs register-ads">
      <div class="register-ads__container">
        <div class="row col-xs-12">
          <div class="col-xs-12 col-sm">
            <a href="/academia/simulacros-uni/inscripcion/76e7fc1c95" class="register-ads__link">
              <h1>2<sup>o</sup> Simulacro Gratuito Repaso <br><strong>27, 29 y 31 de Enero</strong></h1>
              <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                Regístrate aquí
              </button>
            </a>
          </div>
          <div class="row col-xs-4 bottom-xs center-xs xs-hide">
            <img src="{{ url('/static/images/academia/inscripcion-uni.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>
</div> -->
<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
    <div class="row col-xs-12 center-xs about-v--vgrid">

      <div class="row col-xs-12 col-sm-9 col-md-8 center-xs">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Los exámenes se realizan de forma semanal y los simulacros, según el cronograma.</h2>
      </div>

    </div>
  </div>
</div>
@endif

@if($university->short_name=='San Marcos')
<!-- <div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
    <div class="row col-xs-12 center-xs register-ads">
      <div class="register-ads__container">
        <div class="row col-xs-12">
          <div class="col-xs-12 col-sm">
            <a href="/academia/simulacros-san-marcos/inscripcion/5b0e0a93f5" class="register-ads__link">
              <h1>Simulacro Tipo Admisión <br> Verano -<strong> 27 de Febrero </strong><br>Repaso/Intensivo -<strong> 28 de Febrero </strong> </h1>
              <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                Regístrate aquí
              </button>
            </a>
          </div>
          <div class="row col-xs-4 bottom-xs center-xs xs-hide">
            <img src="{{ url('/static/images/academia/inscripcion-sm.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
    <div class="row col-xs-12 center-xs about-v--vgrid">

      <div class="row col-xs-12 col-sm-9 col-md-8 center-xs">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Los exámenes se realizan de forma semanal y los simulacros, según el cronograma.</h2>
      </div>

    </div>
  </div>
</div>

@endif


{{-- NUEVO CONSUMO DE SERVICIOS: 37e5c0f8ac --}}

@if($university->short_name=='PUCP')
<!-- <div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

    <div class="row col-xs-12 center-xs register-ads">
      <div class="register-ads__container">
        <div class="row col-xs-12">
          <div class="col-xs-12 col-sm">
            <a href="/academia/simulacros-pucp/inscripcion/3496b95a15" class="register-ads__link">
              <h1>Simulacro Verano Católica<br><strong>25 de Enero</strong></h1>
              <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                Regístrate aquí
              </button>
            </a>
          </div>
          <div class="row col-xs-4 bottom-xs center-xs xs-hide">
            <img src="{{ url('/static/images/academia/inscripcion-sm.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
   <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
    <div class="row col-xs-12 center-xs about-v--vgrid">

      <div class="row col-xs-12 col-sm-9 col-md-8 center-xs">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Los exámenes se realizan de forma semanal y los simulacros, según el cronograma.</h2>
      </div>

    </div>
  </div>
</div>
@endif


<br><br>

<div class="row center-xs center-sm text-init simulacrum container-base" style="display: none">

  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs">
    <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Resultados del proceso</h2>
  </div>

  <br><br><br>

  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs simulacrum-results">

    @foreach ($data as $key => $v)
    <div class="col-xs-12 col-sm-3 col-md-2">
      <a href="{{ $v->url }}" target="_blank">
        <div class="simulacrum-results-pdf">
          <i class="fa fa-file-pdf-o"></i>
        </div>
        <div class="simulacrum-results-text">
          <span>{{ $v->name }}</span>
          <span>{{ $v->description }}</span>
          <span>{{ date('d-m-Y', strtotime($v->created_at)) }}</span>
        </div>
      </a>
    </div>
    @endforeach

    <div class="col-xs-12 col-sm-3 col-md-2">
      <a href="/academia/simulacros-{{strtolower(Str::slug($university->short_name, '-'))}}/resultados">
        <div class="simulacrum-results-pdf">
          <i class="fa fa-plus"></i>
        </div>
        <div class="simulacrum-results-text">
          <span>Ver todos los resultados</span>
        </div>
      </a>
    </div>
  </div>
</div>

@include('academia.partials.card_bottom')
@endsection

@section('scripts')
page = 'simulacrum';
@parent

@endsection