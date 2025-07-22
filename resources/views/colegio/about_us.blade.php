{{!$breadcrumbs = Breadcrumbs::render('colegio-aboutus') }}
@extends('colegio.layouts.template')
@section('title', 'Acerca de Nosotros')
@section('content')
<link rel="stylesheet" href="{{ asset('css/main_colegio_index.css') }}">

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
    <img src="{{ url('/static/images/colegio/pages-banners/banner-nosotros.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
    <img src="{{ url('/static/images/colegio/pages-banners/banner-nosotros-movil.jpg') }}" alt="">
    </div>
  </div>


  <div class="seccion-matricula container pb-0 x-8">
    <div class="row col-xs-12 about-history">
    <div class="row col-xs-12 d-none d-sm-block col-sm-4 about-history--left">
      <img src="/static/images/colegio/about-image-01.jpg" alt="Sobre nosotros">
    </div>
    <div class="col-xs-12 col-sm about-history--right">
      <h1 class="about-history--title">Nuestra historia</h1>
      <div class="about-history--pcontainer">
      <p>
        El 7 de diciembre de 1979, un grupo de amigos, estudiantes de la UNI, decidieron fundar una academia
        preuniversitaria para postulantes a esa universidad; fue así que el primer lunes de enero de 1980 y con
        menos de una centena de estudiantes, la Academia Trilce abrió sus puertas en un local ubicado en Jr. Callao
        209, Cercado de Lima.
      </p>
      <p>
        Siete años después Trilce contaba con más de 3000 alumnos y se dedicaba también a la preparación para San
        Marcos y Católica en sus respectivos locales exclusivos.
      </p>
      <p>
        En el año 1996, Trilce fundó su primer colegio en uno de sus locales, ubicado en Miraflores. Con esto,
        Trilce confirmó su liderazgo y excelencia académica con un método de enseñanza escolar totalmente innovador.
      </p>
      <p>
        Actualmente, Trilce cuenta con 18 colegios en Lima, 6 en provincias, academias, 2000 trabajadores y más de
        24 000 alumnos.
      </p>
      </div>
    </div>
    </div>
  </div>

  <!-- services area start -->
  <section class="services__area pt-115 white-bg fix z100">
    <div class="container">
    <div class="row">
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-easing="linear"
      data-aos-duration="1500">
      <div class="services__item rojizo-bg mb-30">
        <div class="services__icon">
        <i class="las la-handshake"></i>
        </div>
        <div class="services__content">
        <h3 class="services__title"><a class="white" href="#">Misión</a></h3>
        <p>Cambiar la vida de nuestros estudiantes y colaboradores generándoles pasión por alcanzar sus
          sueños.</p>

        <a href="#" class="link-btn-2">
          <i class="far fa-arrow-right"></i>
          <i class="far fa-arrow-right"></i>
        </a>
        </div>
      </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-easing="linear"
      data-aos-duration="1500">
      <div class="services__item amarillo-bg mb-30">
        <div class="services__icon">
        <i class="las la-chalkboard-teacher"></i>
        </div>
        <div class="services__content">
        <h3 class="services__title"><a class="white" href="#">Visión</a></h3>
        <p>Hacer de la educación un medio que logre un mundo mejor para vivir, promoviendo el cambio que
          nuestra sociedad necesita.</p>

        <a href="#" class="link-btn-2">
          <i class="far fa-arrow-right"></i>
          <i class="far fa-arrow-right"></i>
        </a>
        </div>
      </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-easing="linear"
      data-aos-duration="1500">
      <div class="services__item azul-bg mb-30">
      <div class="services__icon">
        <i class="las la-certificate"></i>
      </div>
      <div class="services__content">
        <h3 class="services__title"><a class="white" href="#">Propósito</a></h3>
        <p>Brindar una excelente educación a los alumnos, para lograr que cumplan sus sueños.</p>

        <a href="#" class="link-btn-2">
        <i class="far fa-arrow-right"></i>
        <i class="far fa-arrow-right"></i>
        </a>
      </div>
      </div>
    </div>
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-easing="linear"
      data-aos-duration="1500">
    <div class="services__item morado-bg mb-30">
      <div class="services__icon">
      <i class="las la-hand-holding-heart"></i>
      </div>
      <div class="services__content">
      <h3 class="services__title"><a class="white" href="#">Valores</a></h3>
      <ul class="services__ul">
        <li><span class="services__especial">&#9654;</span> Innovación</li>
        <li><span class="services__especial">&#9654;</span> Respeto</li>
        <li><span class="services__especial">&#9654;</span> Solidaridad</li>
        <li><span class="services__especial">&#9654;</span> Sinceridad</li>
      </ul>

      <a href="#" class="link-btn-2">
        <i class="far fa-arrow-right"></i>
        <i class="far fa-arrow-right"></i>
      </a>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- services area end -->

  </div>
  </div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
  page = 'about_us';
  @parent
@endsection