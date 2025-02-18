{{! $breadcrumbs = Breadcrumbs::render('colegio-index') }}
@extends('colegio.layouts.template')
@section('content')
<link rel="stylesheet" href="{{ asset('css/main_colegio_index.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>

.admission-ads__container h1 {
    font-size: 1.5rem !important;
}

a.admission-ads__link.shory {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-left: 15px;
    padding-right: 0;
}

.pruebas{
  font-family: Geogrotesque-SmBd !important;
  text-align: start;
}

.Pity{
  font-family: Geogrotesque-Rg !important;
}

#modalTrilceHome .modal-dialog {
  max-width: 40%; 
}

#modalTrilceHome .modal-content {
  width: 100%; 
  height: auto; 
}


  
div#modalTrilceHome {
    padding-right: 0 !important;!i;!;
}
.modern-modal .modal-dialog {
  width: 100%; 
  height: auto; 
  margin: 10% auto; 
  transform: translate(-50%, -50%); 
  display: flex;
  align-items: center;
  justify-content: center;
}
button.close.modern-close {
    color: #f4633a;
    z-index: 99;
    font-size:40px;
}

.modern-modal .modal-content {
  position: relative;
  border: none;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  background: linear-gradient(135deg, #ffffff, #f9f9f9);
  animation: fadeIn 0.3s ease-in-out;
}

.modern-modal .modal-body {
  padding: 0;
  text-align: center;
}

.modern-modal img {
  width: 100%;
  height: 100%;
  object-fit:cover;
  display: block;
  border-radius: 15px;
}

.modern-modal .modal-web {
  display: none;
}

.modern-modal .modal-movil {
  display: block;
}



/* Close Button */
.close.modern-close {
  position: absolute; /* Si quieres colocarlo en una posición específica */
  top: 10px; /* Ajusta según sea necesario */
  right: 10px; /* Ajusta según sea necesario */
  background-color: transparent; /* Fondo transparente */
  border: none; /* Sin bordes */
  font-size: 20px; /* Tamaño del texto para el símbolo de cierre */
  width: 40px; /* Ajusta el tamaño del botón */
  height: 40px; /* Ajusta el tamaño del botón */
  display: flex; /* Centra el contenido */
  align-items: center;
  justify-content: center;
  border-radius: 50%; /* Forma circular */
  transition: background-color 0.3s ease, transform 0.2s ease;
  cursor: pointer; /* Cambia el cursor al pasar por encima */
}



/* Responsive Design */
@media (max-width: 768px) {
  .modern-modal .modal-dialog {

  margin: 30% auto; 
}

  #modalTrilceHome .modal-dialog {
  max-width: 85%; 
}

#modalTrilceHome .modal-content {
  width: 100%; 
  height: auto; 
}


  .modern-modal .modal-dialog {
    width: 95%; /* El modal ocupa más espacio en pantallas pequeñas */
    max-width: 90%; /* Máximo 90% en pantallas pequeñas */
  }
  .modern-modal img {
  width: 100%;
  height: 275px;
  object-fit:cover;
  display: block;
  border-radius: 15px;
}

  .modern-modal .modal-web {
    display: none; /* Esconde la versión web en pantallas pequeñas */
  }

  .modern-modal .modal-movil {
    display: block; /* Muestra la versión móvil */
  }
}

/* Animation */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}


.visually-hidden {
    position: absolute;
    left: -9999px;
    top: -9999px;
}

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

    <h1 class="visually-hidden">TRILCE</h1>

    


<div id="carouselTrilceColegioWeb" class="carousel web slide" data-ride="carousel" data-interval="5000">

   	<div class="carousel-inner">

      <div class="carousel-item active">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/colegio/banner-matrIcula-2025_11zon.webp')}}" alt="Matricula 2025 - Trilce - 45 años">
        </a>
      </div>
      
      <div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-primer-puesto-pucp-computo-general-colegio.png')}}" alt="Primer Puesto PUCP Cómputo General - Trilce">
      </div>


      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
          <img src="{{asset('static/images/slides/banner-charlas-informativas-2024.png')}}" alt="Charlas Informativas - Trilce - 45 años">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
          <img src="{{asset('static/images/slides/banner-sede-nana-2-2024.png')}}" alt="Sede Ñaña - Trilce - 45 años">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025-villa-maria" target="_blank">
          <img src="{{asset('static/images/colegio/banners/banner-sede-vmt.webp')}}" alt="Sede Villa María - Trilce - 45 años">
        </a>
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-home-45-anios-colegios2.png')}}" alt="Trilce - 45 años">
      </div>

      <!--div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-feria-vocacional.png')}}" alt="Feria Vocacional - Trilce">
      </div-->

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/1-banner-exalumnos-2024_1.png')}}" alt="Exalumnos - Trilce">
      </div>

      <!--div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/guia-pagos-yape-colegio" target="_blank">
          <img src="{{asset('static/images/slides/banner-yape-coles.png')}}" alt="Yape Colegio - Trilce">
        </a>
      </div-->

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-primeros-puestos3.png')}}" alt="Primeros Puestos - Trilce">
      </div>

      <!--div class="carousel-item active">
        <img src="{{asset('static/images/slides/1-banner-bienvenida-clases.png')}}" alt="Bienvendia de clases - Trilce">
      </div-->

      <!--div class="carousel-item">
        <a href="https://www.trilce.edu.pe/colegio/sede/roma" target="_blank">
          <img src="{{asset('static/images/slides/2-banner-primaria-roma.png')}}" alt="Sede Roma Primaria - Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/colegio/sede/nana" target="_blank">
          <img src="{{asset('static/images/slides/3-banner-sede-nana.png')}}" alt="Sede Ñaña - Trilce">
          </a>
      </div-->

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/slides/banner-plana-docente_11zon.webp')}}" alt="Plana Docente - Trilce">
        </a>
      </div>

      <!--div class="carousel-item"> 
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/slides/5-banner-ganadores-up.png')}}" alt="Ganadores UP - Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/primer-puesto-UNI-2024-1-col.png')}}" alt="Primer Puesto UNI - Trilce">
      </div-->

      <div class="carousel-item">
        <a href="https://www.tiktok.com/@trilce.colegios" target="_blank">
          <img src="{{asset('static/images/slides/14-banner-tiktok.png')}}" alt="TikTok Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/slides/5-banner-seguro-gratuito3.png')}}" alt="Seguro Gratuito - Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/6-banner-logros-joao-r.png')}}" alt="Logros - Trilce">
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/7-banner-naomi.png')}}" alt="Alumna Naomi Claros - Trilce">
      </div>

		  <div class="carousel-item">
        <img src="{{asset('static/images/slides/8-banner-ser-mejores-personas3.png')}}" alt="Campaña Ser Mejores Personas - Trilce">
      </div>
		
      <div class="carousel-item">
        <img src="{{asset('static/images/slides/9-banner-medioambiente1.png')}}" alt="Medio Ambiente - Trilce">
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
      <div class="carousel-item active">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/colegio/banner-matrIcula-2025-MOBILE_11zon.webp')}}" alt="Matricula 2025 - Trilce - 45 años">
        </a>
      </div>


      <div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-primer-puesto-pucp-computo-general-colegio-MOBILE.png')}}" alt="Primer Puesto PUCP Cómputo General - Trilce">
      </div>


      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
          <img src="{{asset('static/images/slides/banner-charlas-informativas-2024-MOBILE.png')}}" alt="Charlas Informativas - Trilce - 45 años">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
          <img src="{{asset('static/images/slides/banner-sede-nana-2-2024-MOBILE.png')}}" alt="Sede Ñaña - Trilce - 45 años">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025-villa-maria" target="_blank">
          <img src="{{asset('static/images/colegio/banners/banner-sede-vmt-mobile.webp ')}}" alt="Sede Villa María - Trilce - 45 años">
        </a>
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-home-45-anios-colegios2-MOBILE.png')}}" alt="Trilce - 45 años">
      </div>

      <!--div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-feria-vocacional-MOBILE.png')}}" alt="Feria Vocacional - Trilce">
      </div-->

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/1-banner-exalumnos-2024_1-MOBILE.png')}}" alt="Exalumnos - Trilce">
      </div>

      <!--div class="carousel-item">
        <a href="https://www.trilce.edu.pe/l/guia-pagos-yape-colegio" target="_blank">
          <img src="{{asset('static/images/slides/banner-yape-coles-MOBILE.png')}}" alt="Yape Colegio - Trilce">
        </a>
      </div-->

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/banner-primeros-puestos3-MOBILE.png')}}" alt="Primeros Puestos - Trilce">
      </div>

      <!--div class="carousel-item active">
        <img src="{{asset('static/images/slides/1-banner-bienvenida-clases-MOBILE.png')}}" alt="Bienvendia de clases - Trilce">
      </div-->

      <!--div class="carousel-item">
        <a href="https://www.trilce.edu.pe/colegio/sede/roma" target="_blank">
          <img src="{{asset('static/images/slides/2-banner-primaria-roma-MOBILE.png')}}" alt="Sede Roma Primaria - Trilce">
          </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/colegio/sede/nana" target="_blank">
          <img src="{{asset('static/images/slides/3-banner-sede-nana-MOBILE.png')}}" alt="Sede Ñaña - Trilce">
          </a>
      </div-->

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/slides/banner-plana-docente-MOBILE_11zon.webp')}}" alt="Plana Docente - Trilce">
        </a>
      </div>

      <!--div class="carousel-item"> 
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/slides/5-banner-ganadores-up-MOBILE.png')}}" alt="Ganadores UP - Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/primer-puesto-UNI-2024-1-col-MOBILE.png')}}" alt="Primer Puesto UNI - Trilce">
      </div-->

      <div class="carousel-item">
        <a href="https://www.tiktok.com/@trilce.colegios" target="_blank">
          <img src="{{asset('static/images/slides/14-banner-tiktok-MOBILE.png')}}" alt="TikTok Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img src="{{asset('static/images/slides/5-banner-seguro-gratuito3-MOBILE.png')}}" alt="Seguro Gratuito - Trilce">
        </a>
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/6-banner-logros-joao-r-MOBILE.png')}}" alt="Logros - Trilce">
      </div>

      <div class="carousel-item">
        <img src="{{asset('static/images/slides/7-banner-naomi-MOBILE.png')}}" alt="Alumna Naomi Claros - Trilce">
      </div>

		  <div class="carousel-item">
        <img src="{{asset('static/images/slides/8-banner-ser-mejores-personas3-MOBILE.png')}}" alt="Campaña Ser Mejores Personas - Trilce">
      </div>
		
      <div class="carousel-item">
        <img src="{{asset('static/images/slides/9-banner-medioambiente1-MOBILE.png')}}" alt="Medio Ambiente - Trilce">
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
        <div class="colegio-cardsv2__herotitle"><span>Matrícula<br class="salt"> 2025</span></div>
        <div class="colegio-cardsv2__herosubtitle" style="display: none"><span>Elige la modalidad que más se<br class="salt">adecúe a tus necesidades</span></div>
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

    <div class="row col-xs-12 col-sm-10 colegio-cardsv2">
      
      <div class="colegio-cardsv2__title">
      <h1 class="pruebas">Colegio Trilce</h1>
      <p style="text-align: justify;" class="Pity">Nuestros 45 años de experiencia brindando una educación de calidad nos han convertido en una de las organizaciones educativas más grandes del país. Con 18 sedes en Lima y 6 en provincia, nuestro principal objetivo es brindar educación de alta calidad y fomentar el liderazgo.</p>
      </div>
      
      <div class="colegio-cardsv2-items colegio-cardsv2-items--hovereffect">
        <div class="row col-xs-12 center-xs admission-ads">
          <div class="admission-ads__container">
            <div class="row col-xs-12">
              <div class="col-xs-12 col-sm">
                <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank" class="admission-ads__link shory">
                  <h1>¿Quieres saber más sobre nuestro<br>proceso de matrícula 2025?</h1>
                  <button class="admission-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                    Regístrate aquí
                  </button>
                </a>
              </div>

              <div class="row col-xs-4 bottom-xs center-xs xs-hide ads-sub">
                <img class="nina-banner" src="{{ url('/static/images/colegio/propuesta-feb/nina-banner.png') }}" alt="Proceso de Matrícula 2024">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- 769 X 960  MODALES POP UP-->
<div class="modal fade modern-modal modal_2025" id="modalTrilceHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close modern-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img class="modal-web" src="{{ url('/static/images/colegio/modal-mat-2025.webp') }}" alt="Trilce">
        </a>
        <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
          <img class="modal-movil" src="{{ url('/static/images/colegio/modal-mat-2025.webp') }}" alt="Trilce">
        </a>
      </div>
    </div>
  </div>
</div>

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