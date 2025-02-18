
{{! $breadcrumbs = Breadcrumbs::render('colegio-admission', $type) }}
@extends('colegio.layouts.template')
@section('title', 'Admisi�n ' . $title)
@section('content')

<!-- <sytle>
  .header-double-image-mobile {
    background-color: #FF5E3E;
    display: flex;
    justify-content: center;
  }
</style> -->


<div class="header-double-image">
  <div class="row col-xs-12 header-double-image-desk">
    <a href="https://drive.google.com/file/d/1NE6APu4wbspEAmSWynWQ6-2iqyp0Qnr9/view?usp=sharing" target="_blank">
      <img src="{{ url('/static/images/slides/banner-matricula-online-1.png') }}" alt="">
    </a>
  </div>
  <div class="header-double-image-mobile">
    <a href="https://drive.google.com/file/d/1NE6APu4wbspEAmSWynWQ6-2iqyp0Qnr9/view?usp=sharing" target="_blank">
      <img src="{{ url('/static/images/slides/banner-matricula-online-1-MOBILE.png') }}" alt="">
    </a>
  </div>
</div>


@switch($type)
@case('nuevo')
@include('colegio.partials.admission.new')
@break

@case('traslado')
@include('colegio.partials.admission.transfer')
@break

@case('regular')
@include('colegio.partials.admission.regular')
@break
@endswitch

@include('colegio.partials.ads')

<!-- <div class="nuevos-i container-base">
  <div class="row center-xs">

    <div class="row col-xs-12 col-sm-6 col-md-6 center-xs center-sm center-md center-lg ">

      @if($type!=='nuevo')

      <a href="/colegio/matricula-nuevo" class="colegio-cardsv2-items__item">
        <div class="colegio-cardsv2-items__symbol">
          <span><i class="fa fa-plus"></i></span>
        </div>
        <div class="colegio-cardsv2-items__text">
          <span class="alumno">
            ALUMNO
          </span>
          <span class="modality">
            NUEVO
          </span>
        </div>
      </a>
      @endif

      @if($type!=='traslado')

      <a href="/colegio/matricula-traslado" class="colegio-cardsv2-items__item">
        <div class="colegio-cardsv2-items__symbol">
          <span><i class="fa fa-exchange"></i></span>
        </div>
        <div class="colegio-cardsv2-items__text">
          <span class="alumno">
            ALUMNO
          </span>
          <span class="modality">
            TRASLADO
          </span>
        </div>
      </a>

      @endif

      @if($type!=='regular')

      <a href="/colegio/matricula-regular" class="colegio-cardsv2-items__item">
        <div class="colegio-cardsv2-items__symbol">
          <span><i class="fa fa-star"></i></span>
        </div>
        <div class="colegio-cardsv2-items__text">
          <span class="alumno">
            ALUMNO
          </span>
          <span class="modality">
            REGULAR
          </span>
          <span class="op">
            (actual)
          </span>
        </div>
      </a>
      @endif


    </div>

  </div>
</div> -->

@include('colegio.partials.card_bottom')

@endsection
@section('scripts')

page = 'admission';

@parent
@endsection