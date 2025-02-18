{{! $breadcrumbs = Breadcrumbs::render('academia-solutions', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Solucionarios de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-solutions"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Solucionarios de exámenes de admisión</h1>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
          <a href="/academia/solucionarios-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
          <a href="/academia/solucionarios-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
          <a href="/academia/solucionarios-pucp" class="item-a">
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

  @switch($university->short_name)
    @case('San Marcos')
      @include('academia.partials.solution.unmsm')
      @break

    @case('UNI')
      @include('academia.partials.solution.uni')
      @break

    @case('PUCP')
      @include('academia.partials.solution.pucp')
      @break
  @endswitch
{{--
  <div class="row col-xs-12 center-xs pagination-container">
    <ul class="pagination" role="navigation">
      <li class="page-item"><a class="page-link" href="#" rel="prev" aria-label="&laquo; Anterior">&lsaquo;</a></li>
      <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><span class="page-link">2</span></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#" rel="next" aria-label="Siguiente &raquo;">&rsaquo;</a></li>
    </ul>
  </div> --}}

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'solution';
  @parent

@endsection
