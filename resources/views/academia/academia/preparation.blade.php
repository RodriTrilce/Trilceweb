{{! $breadcrumbs = Breadcrumbs::render('academia-preparation', $title) }}
@extends('academia.layouts.template')
@section('title', 'Preparación ' . $title)
@section('content')

  <div class="header-double-top" class="new_banner">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom">
      </div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-preparation-{{$type}}"></div>

      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>
          @if($type == 'uni')
            Preparación UNI
          @elseif($type == 'san-marcos')
            Preparación San Marcos
          @elseif($type == 'pucp')
            Preparación Católica
          @endif
        </h1>
      </div>
    </div>
  </div>

  @switch($type)
    @case('san-marcos')
      @include('academia.partials.preparation.san-marcos')
      @break

    @case('uni')
      @include('academia.partials.preparation.uni')
      @break

    @case('pucp')
      @include('academia.partials.preparation.pucp')
      @break
  @endswitch


<!--
  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
      <div class="row col-xs-12 col-sm-3 col-md-3 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($type=='uni') beginning--item-active @endif">
          <a href="/academia/preparacion-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='san-marcos') beginning--item-active @endif">
          <a href="/academia/preparacion-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='pucp') beginning--item-active @endif">
          <a href="/academia/preparacion-pucp" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">PUCP</span>
            </div>
          </a>
        </div>

      </div>
  </div>
-->

@include('academia.partials.card_bottom')
@endsection
@section('scripts')
  page = 'preparation';
  var type = '{{$type}}'
@parent
@endsection
