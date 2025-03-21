{{! $breadcrumbs = Breadcrumbs::render('academia-studentship-exam', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Becas '. $university->name)
@section('content')

<div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-studentship"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Examen para Becas</h1>
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
          <h1 class="about-history--title">¡Gracias  {{$name}} {{$apellido}}!</h1>
          <div class="about-history--pcontainer">
            <p>
             Tu registro fue exitoso.
            </p>
          </div>
        </div>
      </div>
      <hr class="grayhr2" />
    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'simulacrum-exam';
  @parent

@endsection