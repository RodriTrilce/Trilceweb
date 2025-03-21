@extends('academia.layouts.template')
@section('title', 'Ingresantes de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Lista de Cachimbos</h1>
      </div>
    </div>
  </div>

  <div class="nuevos-i nuevos-i-force-minus">
    <div class="row center-xs">
      <div class="row nuevos-i-box col-xs-12 col-md-9 col-sm-12 between-xs center-sm center-md center-lg nuevos-i-border">

        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='UNI') nuevos-i-active @endif">
          <a href="/academia/lista-de-cachimbos-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-uni.jpg" alt="UNI">
              <h4>Simulacro</h4>
              <h3>UNI</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='San Marcos') nuevos-i-active @endif">
          <a href="/academia/lista-de-cachimbos-san-marcos">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-sm.jpg" alt="UNMSM">
              <h4>Simulacro</h4>
              <h3>San Marcos</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='PUCP') nuevos-i-active @endif">
          <a href="/academia/lista-de-cachimbos-pucp">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-cato.jpg" alt="PUCP">
              <h4>Simulacro</h4>
              <h3>PUCP</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="row center-xs center-sm">
    <div class="col-xs-11 col-sm-9 entering-top">
      <ul id="year_list">
        <li data-year="2016">2016</li>
        <li data-year="2017">2017</li>
        <li data-year="2018" class="select">2018</li>
      </ul>
    </div>
  </div>

  <div class="row center-xs center-sm entering-table">
    <div class="row col-sm-8 col-xs-12 text-init">

      <div class="row col-xs-12 entering-table-top">
        <div class="col-xs-1">#</div>
        <div class="col-xs">A. Paterno</div>
        <div class="col-xs">A. Materno</div>
        <div class="col-xs">Nombres</div>
        <div class="col-xs-3">Carrera</div>
      </div>

      <div class="row col-sm-12 col-xs-12 text-init entering-table-row" id="entering">
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'entering';
    var university = '{{str_replace(' ','-',strtolower($university->short_name))}}'

  @parent
@endsection
