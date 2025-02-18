{{! $breadcrumbs = Breadcrumbs::render('colegio-paymentguide') }}
@extends('colegio.layouts.template')
@section('title', 'Guía de pagos en línea')
@section('content')
<style>
.centrado{
  display: flex !important;
  align-items: center;
  justify-content: center;
}
</style>
  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pagosenlinea.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pagosenlinea-movil.jpg') }}" alt="">
    </div>
  </div>

  <div class="row col-xs-12 center-xs container-base playmentguide-content">
    <div class="row col-xs-12 col-sm-10 col-md-8 start-xs start-sm start-md ">

      <div class="col-xs-12 playmentguide-title-container">
        <h1 class="playmentguide-title">Elija el banco de su preferencia</h1>
        <p class="playmentguide-titlesub">Para saber cómo realizar pagos por internet, ventanilla y/o agente.</p>
      </div>
    </div>
    <div class="row col-xs-12 col-sm-10 col-md-10 start-xs start-sm start-md ">
      <div class="row col-xs-12 center-xs playmentguide-option">
        <div class="col-xs playmentguide-optionitem"><a href="https://www.trilce.edu.pe/l/guia-pagos-scotiabank-colegio" target="_blank" class="centrado"><img src="{{ url('/static/images/colegio/logo-scotia.svg') }}" alt="Guía de pagos para Scotiabank" style="width: 200px;"></a></div>
        <div class="col-xs playmentguide-optionitem"><a href="https://www.trilce.edu.pe/l/guia-pagos-bcp-colegio" target="_blank" class="centrado"><img src="{{ url('/static/images/colegio/logo-bcp.svg') }}" alt="Guía de pagos para BCP" style="width: 180px;"></a></div>
        <div class="col-xs playmentguide-optionitem"><a href="https://www.trilce.edu.pe/l/guia-pagos-bbva-colegio" target="_blank" class="centrado"><img src="{{ url('/static/images/colegio/logo-bbva.svg') }}" alt="Guía de pagos para BBVA" style="width: 180px;"></a></div>
        <div class="col-xs playmentguide-optionitem"><a href="https://www.trilce.edu.pe/l/guia-pagos-yape-colegio" target="_blank" class="centrado"><img src="{{ url('/static/images/colegio/logo-yape-qvas-act.svg') }}" alt="Guía de pagos para YAPE" style="width: 160px;"></a></div>
      </div>
    </div>
  </div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'payment_guide';
  @parent
@endsection
