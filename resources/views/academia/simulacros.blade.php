{{! $breadcrumbs = Breadcrumbs::render('academia-simulacros') }}
@extends('academia.layouts.template')
@section('title', 'Simulacros')
@section('content')

<style>
  .simulacrum {
    margin: 0px 0;
  }
  .beginning--item .item-a:hover::before{
    content: "";
    position: absolute;
    bottom: -25px;
    width: 20px;
    height: 8px;
    background: #f4633a;
    transition: .3s linear;
  }
</style>

<div class="header-double-top">
  <div class="row">
    <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
    <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-simulacrum solutions-ban"></div>
    <div class="header-double-border"></div>
    <div class="header-double-title">
      <h1>Simulacros</h1>
      <p class="header-double-p-up">Resultados de los exámenes</p>
    </div>
  </div>
</div>

<div class="clearfix"></div>

<br><br>
<div class="row col-xs-12 center-xs">
  <h1 style="color: #000; font-weight: bold">Resultados Simulacros</h1>
</div>
<div class="row col-xs-12 center-xs">
  <p class="simulacrum__title simulacrum__title--and" style="margin: 0 4em 0 4em;font-size: 1.25rem;margin-top: 10px;">SELECCIONE UNIVERSIDAD</p>
</div>
<br><br>

<div class="row col-xs-12 center-xs beginning beginning-minus container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
    <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">
      <div class="col-xs beginning--item">
        <a href="/academia/simulacros-uni/resultados" class="item-a">
          <div class="item-a-container">
            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-sim-uni.svg') }}" alt="Nuevos Inicios">
            <div class="item-a-preparation">Preparación</div>
            <span class="item-a-university">UNI</span>
          </div>
        </a>
      </div>

      <div class="beginning-breakline"></div>

      <div class="col-xs beginning--item">
        <a href="/academia/simulacros-san-marcos/resultados" class="item-a">
          <div class="item-a-container">
            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-sim-unmsm.svg') }}" alt="Nuevos Inicios">
            <div class="item-a-preparation">Preparación</div>
            <span class="item-a-university">SAN MARCOS</span>
          </div>
        </a>
      </div>

      <div class="beginning-breakline"></div>

      <div class="col-xs beginning--item">
        <a href="/academia/simulacros-pucp/resultados" class="item-a">
          <div class="item-a-container">
            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-sim-pucp.svg') }}" alt="Nuevos Inicios">
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

@include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'simulacros';
  @parent
@endsection
