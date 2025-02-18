{{! $breadcrumbs = Breadcrumbs::render('colegio-vacations-venue', $data->name, $data->slug) }}
@extends('colegio.layouts.template')
@section('title', $data->name)
@section('content')
<!-- <head>
    <meta http-equiv="refresh"  content="0; url=https://www.trilce.edu.pe/vacaciones-utiles/">  
</head> -->
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
    background: #f5f5f5;
    margin: 0px 0 40px;
  }

  .header-vacations .row .row {
    max-width: 823px;
    margin: 0 auto;
    width: 100%;
  }

  .ss-main .ss-single-selected {
    width: 100px;
  }

  .select-vacations .ss-content {
    width: initial;
  }

  .vacations__select-item {
    padding: 0px !important;
  }

  .js-tabs {
    padding: 0px 15px;
  }

  .container-new-tabs {
    width: 1440px;
    margin: 0 auto;
  }

  .landing__title h1 {
    font-size: 1.5em;
    color: white;
    margin: 0px auto;
    letter-spacing: 1px;
  }

  .formvacas {
    margin-top: 8%;
    padding-top: 20px;
    padding-bottom: 10px;
    background: #f4633a;
    border-radius: 5px;
    padding-left: 10px;
    padding-right: 10px;
  }

  .politica a,
  .politica a:link,
  .politica a:visited,
  button.validate,
  label.checkbox,
  .thankyou h1 {
    color: white !important;
  }

  .vacations__bottom.vacations__bottom--orange {
    background: white;
  }

  .vacations__bottom h1 {
    color: #f4633a !important;
    font-size: 2.2em;
  }

  .vacations__bottom h3 {
    color: #f4633a !important;
    font-size: 1.5em;
  }

  .vacations__title {
    font-size: 3rem;
    margin: 30px auto;
  }

  .js-tabs__header {
    margin-bottom: 10px;
  }

  .js-tabs__vacations .js-tabs__header li {
    min-width: 120px;
    max-width: 30%;
  }

  .js-tabs__vacations .js-tabs__title {
    padding: none;
  }

  .vacations-svg {
    width: 70px;
  }

  .vacations-svg__title {
    font-size: 1.1rem;
  }

  .js-tabs__header li a {
    min-height: 120px;
  }

  #app {
    font-family: 'Geogrotesque-Rg' !important;
  }

  input, textarea {
    font-family: 'Geogrotesque-Rg' !important;
    border: 0px solid transparent;
    border-radius: 3px;
  }

  select {
    border-radius: 3px;
    border: 0px solid transparent;
    font-family: 'Geogrotesque-Rg' !important;
  }
</style>

<div class="header-vacations">
  <div class="row col-xs-12 end-sm start-xs">
    <div class="row col-sm-11 col-xs-12">
      <div class="row col-sm-4 col-xs-12 center-xs middle-xs">

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
            <img src="{{asset('static/images/banner_vacaciones_utiles_2021.png')}}" alt="Vacaciones Útiles">
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="row col-xs-12 center-xs container-base vacations__home-container">
  <div class="row col-xs-12 col-sm-9 col-md-10 start-xs start-sm start-md">

    <div class="col-xs-12 center-xs">
      <h1 class="vacations__title">Sede {{$data->name}}</h1>
    </div>

    <div class="row col-xs-12">
      @include('colegio.partials.vacations.venues.' . $data->slug)
    </div>

    <div class="col-xs-12 vacations__bottom vacations__bottom--white">
      <div class="table-responsive" style="width:100%;">
        <table class="venue-table">
          <thead>
            <tr>
              <th>Nivel</th>
              <th>Dirección</th>
              <th>Teléfono</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($address as $k)
            @if($k->vacations)
            <tr>
              <td data-label="Nivel">{!! $k->grades !!}</td>
              <td data-label="Dirección">{!! $k->address !!}</td>
              <td data-label="Teléfono">{{ $k->phone }}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

@include('colegio.partials.card_bottom')
@endsection

@section('scripts')
page = 'vacations_venue';
@parent
@endsection