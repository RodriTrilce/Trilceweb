{{! $breadcrumbs = Breadcrumbs::render('colegio-index') }}
@extends('colegio.layouts.template')
@section('title', '')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
  dl,
  ol,
  ul {
    margin-bottom: 0rem;
  }

  .carousel.web {
    display: block;
  }

  .carousel.mobile {
    display: none;
  }

  .fa-angle-left,
  .fa-angle-right {
    font-size: 4em;
    text-shadow: 1px 1px 1px #0000007a;
  }

  @media (max-width: 480px) {

    .carousel.web {
      display: none !important;
    }

    .carousel.mobile {
      display: block !important;
    }
  }

  .carousel-control-prev {
    width: 10%;
  }

  .carousel-control-next {
    width: 15%;
  }

  .carousel-item {
    text-align: center;
    background: #f5f5f5
  }

  .header-web {
    min-height: 120px;
    margin-right: 30px;
    margin-left: 30px;
    margin-top: 30px;
    font-family: CaeciliaLTPro-45Light;
  }

  .card2 {
    font-family: CaeciliaLTPro-45Light;
  }

  .card2 h3 {
    color: #f4633a;
  }

  .colegio-cardsv2-items__item:hover {
    text-decoration: none;
  }

  .container-padding-mobile span {
    display: flex;
    flex-direction: row;
  }

  .breadcrumb {
    background-color: transparent;
    padding: 0px;
    margin-bottom: 0px;
  }

  .breadcrumb li:last-child {
    color: white;
    margin-top: -1px;
  }

  footer {
    font-family: CaeciliaLTPro-45Light;
  }

  footer .links ul {
    margin-left: 15px;
  }

  .footer-right-icons {
    margin-bottom: 0px;
  }

  @media(max-width: 768px) {
    header .nav-burger ul {
      position: absolute;
      z-index: 99999;
      width: 100vw;
      background-color: #fff;
      text-align: center;
      margin-top: 70px;
      top: 0;
      opacity: 0;
      overflow: hidden;
      height: 0;
      -webkit-transition: all .1s ease-in-out;
      transition: all .1s ease-in-out;
      box-shadow: 0px 0px 2px #000;
      right: 5px;
      left: auto !important;
    }

    .breadcrumb li:last-child {
      line-height: 12px;
    }

    footer .footer-top span {
      margin-left: 15px;
    }

    .header-web {
      min-height: 70px;
      margin: 10px;
      margin-right: 10px;
      margin-left: 10px;
      margin-bottom: 0;
    }

    nav .label-toggle {
      margin-top: 12px;
    }
  }

  .admission-ads__link:hover {
    text-decoration: none;
  }

  .ads-sub {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    text-align: center;
    margin: 0 auto;
  }

  .ads-sub img {
    position: relative;
    left: 15px;
  }

  /* MODAL INICIO */

  body.modal-open {
    padding-right: 0px !important;
  }

  #modalTrilceHome {
    padding-right: 0px !important;
    z-index: 9999 !important;
    /*       display: flex !important;
    align-items: center; */
  }

  #modalTrilceHome .modal-dialog {
    max-width: 600px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    flex-direction: column;
  }

  #modalTrilceHome .modal-body {
    padding: 0px !important;
  }

  #modalTrilceHome .modal-open .modal {
    overflow-x: hidden !important;
    overflow-y: hidden !important;
  }

  #modalTrilceHome .close {
    color: white;
    cursor: pointer;
    font-size: 2.5em;
  }

  .modal-movil {
    display: none;
  }

  @media (max-width: 768px) {
    #modalTrilceHome {
      padding-left: 0px;
      padding-right: 0px;
    }

    .modal-movil {
      display: block;
      margin: 0 auto;
      width: 100%;
      max-width: 480px;
    }

    .modal-web {
      display: none;
    }

    #modalTrilceHome .close {
      right: 5px;
      position: relative;
      text-align: right;
    }

    #modalTrilceHome .modal-dialog {
      margin-left: 0px;
      margin-right: 0px;
      display: flex;
      flex-direction: column;
    }
  }
    #carouselTrilceColegioMovil a,
  #carouselTrilceColegioMovil a:link,
  #carouselTrilceColegioMovil a:visited,
  #carouselTrilceColegioWeb a,
  #carouselTrilceColegioWeb a:link,
  #carouselTrilceColegioWeb a:visited {
    color: white !important;
  }
</style>

@include('colegio.partials.modal.ads')

<!--   <div class="banner__loader">
    <div class="banner__loader-title"></div>
    <div class="banner__loader-line"></div>
    <div class="banner__loader-line"></div>
  </div> -->

<!--  <div class="index-banners index-banners--colegio"> -->
<!--  {{--@include('colegio.partials.banners.all')--}}
    
    @foreach ($banners as $banner)
      @if( (strtotime($banner->start) < time()) && (strtotime($banner->expire) > time()) )

        {!! $banner->content !!}

      @endif
    @endforeach -->

<div id="carouselTrilceColegioWeb" class="carousel web slide" data-ride="carousel" data-interval="5000">

    <div class="carousel-inner">
	
		<!--div class="carousel-item active">
                <a href="https://www.trilce.edu.pe/open-class/" target="_blank">
                    <img src="{{asset('static/images/slides/BANNER-OPEN-CLASS-040221.png')}}">
                </a>
        </div-->
		
        <!--div class="carousel-item active">
                <a href="https://www.trilce.edu.pe/charlas-informativas/" target="_blank">
                    <img src="{{asset('static/images/slides/banner-charlas-informativas-FEB-250221.png')}}">
                </a>
        </div-->    
        <!--div class="carousel-item">
                <a href="https://www.trilce.edu.pe/colegio/vacaciones-utiles" target="_blank">
                    <img src="{{asset('static/images/slides/colegio2-banner-vacaciones-utiles-ultimas-vacantes.png')}}">
                </a>
        </div--> 
		<div class="carousel-item active">
            <a href="#" target="_blank">
                <img src="{{asset('static/images/slides/banner-primer-puesto-UNI.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/vacaciones-utiles-2022/" target="_blank">
                <img src="{{asset('static/images/slides/banner-vacaciones-utiles.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/charlas-informativas/" target="_blank">
                <img src="{{asset('static/images/slides/banner-charlas-informativas-2022.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/1-banner-colegio-universidad.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/2-banner-libros.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/3-banner-nivel-academico.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/4-banner-secundaria-tutora.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/matricula-2022/" target="_blank">
                <img src="{{asset('static/images/slides/banner-matricula-2022-lista-espera.png')}}">
            </a>
        </div>
		
        <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/matricula-2022/" target="_blank">
                    <img src="{{asset('static/images/slides/colegio3-banner-matricula.png')}}">
                </a>
        </div>  
        <!--div class="carousel-item">
                <a href="https://www.trilce.edu.pe/aprendizaje-a-distancia/" target="_blank">
                    <img src="{{asset('static/images/slides/colegio5-banner-educacion-a-distancia.png')}}">
                </a>
        </div-->    
        <div class="carousel-item">
                <a href="https://drive.google.com/file/d/1NE6APu4wbspEAmSWynWQ6-2iqyp0Qnr9/view?usp=sharing" target="_blank">
                    <img src="{{asset('static/images/slides/colegio6-banner-matricula-online.png')}}">
                </a>
        </div>    
        <div class="carousel-item">
                    <img src="{{asset('static/images/slides/colegio7-BANNER-1EROS-PUESTOS.png')}}">
        </div>
		<div class="carousel-item">
                    <img src="{{asset('static/images/slides/banner-medioambiente-2021.png')}}">
        </div>

    </div>

    <a class="carousel-control-prev" href="#carouselTrilceColegioWeb" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#carouselTrilceColegioWeb" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
</div>

<div id="carouselTrilceColegioMovil" class="carousel mobile slide" data-ride="carousel" data-interval="5000">
    
    <div class="carousel-inner">
		
		<!--div class="carousel-item active">
            <a href="https://www.trilce.edu.pe/open-class/" target="_blank">
                <img src="{{asset('static/images/slides/BANNER-OPEN-CLASS-MOVIL-040221.png')}}">
            </a>
        </div-->
		
        <!--div class="carousel-item active">
            <a href="https://www.trilce.edu.pe/charlas-informativas/" target="_blank">
                <img src="{{asset('static/images/slides/banner-charlas-informativas-FEB-MOVIL-250221.png')}}">
            </a>
        </div-->    
        <!--div class="carousel-item">
            <a href="https://www.trilce.edu.pe/colegio/vacaciones-utiles" target="_blank">
                <img src="{{asset('static/images/slides/colegio2-banner-vacaciones-utiles-ultimas-vacantes-MOBILE.png')}}">
            </a>
        </div-->
		<div class="carousel-item active">
            <a href="#" target="_blank">
                <img src="{{asset('static/images/slides/banner-primer-puesto-UNI-MOBILE.png')}}">
            </a>
        </div>
		
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/vacaciones-utiles-2022/" target="_blank">
                <img src="{{asset('static/images/slides/banner-vacaciones-utiles-MOBILE.png')}}">
            </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.trilce.edu.pe/charlas-informativas/" target="_blank">
                <img src="{{asset('static/images/slides/banner-charlas-informativas-2022-MOBILE.png')}}">
            </a>
        </div>
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/1-banner-colegio-universidad-MOBILE.png')}}">
            </a>
        </div>
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/2-banner-libros-MOBILE.png')}}">
            </a>
        </div>
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/3-banner-nivel-academico-MOBILE.png')}}">
            </a>
        </div>
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">
                <img src="{{asset('static/images/slides/4-banner-secundaria-tutora-MOBILE.png')}}">
            </a>
        </div>
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/matricula-2022/" target="_blank">
                <img src="{{asset('static/images/slides/banner-matricula-2022-lista-espera-mobile.png')}}">
            </a>
        </div>
		<div class="carousel-item">
            <a href="https://www.trilce.edu.pe/matricula-2022/" target="_blank">
                <img src="{{asset('static/images/slides/colegio3-banner-matricula-mobile.png')}}">
            </a>
        </div>   
        <!--div class="carousel-item">
            <a href="https://www.trilce.edu.pe/aprendizaje-a-distancia/" target="_blank">
                <img src="{{asset('static/images/slides/colegio5-banner-educacion-a-distancia-mobile.png')}}">
            </a>
        </div-->    
        <div class="carousel-item">
            <a href="https://drive.google.com/file/d/1NE6APu4wbspEAmSWynWQ6-2iqyp0Qnr9/view?usp=sharing" target="_blank">
                <img src="{{asset('static/images/slides/colegio6-banner-matricula-online-mobile.png')}}">
            </a>
        </div>    
        <div class="carousel-item">
                <img src="{{asset('static/images/slides/colegio7-BANNER-1EROS-PUESTOS-mobile.png')}}">    
        </div>
		<div class="carousel-item">
                <img src="{{asset('static/images/slides/banner-medioambiente-2021-mobile.png')}}">    
        </div>

    </div>

    <a class="carousel-control-prev" href="#carouselTrilceColegioMovil" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#carouselTrilceColegioMovil" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>

</div>

<div class="nuevos-i container-base">
  <div class="row center-xs">
    <div class="row col-xs-12 col-sm-10 colegio-cardsv2">

      <div class="colegio-cardsv2__title">
        <div class="colegio-cardsv2__herotitle"><span>Matrícula<br class="salt"> 2022</span></div>
        <div class="colegio-cardsv2__herosubtitle"><span>Elige la modalidad que más se<br class="salt">adecúe a tus necesidades</span></div>
      </div>

      <div class="colegio-cardsv2-items colegio-cardsv2-items--hovereffect">
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

      </div>

    </div>
    <div class="row col-xs-12 center-xs admission-ads">
      <div class="admission-ads__container">
        <div class="row col-xs-12">
          <div class="col-xs-12 col-sm">
            <a href="https://www.trilce.edu.pe/matricula-2022/" target="_blank" class="admission-ads__link">
              <h1>¿Quieres saber más sobre nuestro<br>proceso de matrícula 2022?</h1>
              <button class="admission-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                Regístrate aquí
              </button>
            </a>
          </div>

          <div class="row col-xs-4 bottom-xs center-xs xs-hide ads-sub">
            <img class="nina-banner" src="{{ url('/static/images/colegio/propuesta-feb/nina-banner.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 769 X 960 -->
<!--div class="modal fade" id="modalTrilceHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-content">
      <div class="modal-body">
          <img class="modal-web" src="{{ url('/static/images/modal/comunicado-colegios-30032020.png') }}" alt="Trilce">
          <img class="modal-movil" src="{{ url('/static/images/modal/comunicado-colegios-30032020.png') }}" alt="Trilce">
      </div>
    </div>

  </div>
</div-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    jQuery.noConflict();
    $("#modalTrilceHome").modal('show');
  });
</script>

@include('colegio.partials.card_bottom')
@endsection
@section('scripts')

page = 'index';
<!-- var modal_open = [
'#modal-ads',
]; -->

@parent
@endsection