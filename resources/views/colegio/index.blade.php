{{ !($breadcrumbs = Breadcrumbs::render('colegio-index')) }}
@extends('colegio.layouts.template')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/main_colegio_index.css') }}">
    @include('colegio.partials.modal.ads')

    <h1 class="visually-hidden">TRILCE</h1>

    <div id="carouselTrilceColegioWeb" class="carousel web slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            @php
                $firstBanner = $banners->first(); // Obtiene el banner con menor posición
            @endphp

            @foreach ($banners as $banner)
                <div class="carousel-item {{ $banner->id === $firstBanner->id ? 'active' : '' }}">
                    @if ($banner->content && $banner->content !== '#')
                        <a target="_blank" href="{{ $banner->content }}">
                    @endif
                        <img src="{{ asset($banner->file_desktop_url) }}" alt="{{ $banner->title ?: 'Banner de Trilce' }}">
                        @if ($banner->content && $banner->content !== '#')
                            </a>
                        @endif
                </div>
            @endforeach
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
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $banner->id === $firstBanner->id ? 'active' : '' }}">
                    @if ($banner->content && $banner->content !== '#')
                        <a target="_blank" href="{{ $banner->content }}">
                    @endif
                        <img src="{{ asset($banner->file_mobile_url) }}" alt="{{ $banner->title ?: 'Banner de Trilce' }}">
                        @if ($banner->content && $banner->content !== '#')
                            </a>
                        @endif
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselTrilceColegioMovil" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#carouselTrilceColegioMovil" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>

    <div class="seccion-matricula container py-5 py-8-manual">
        <div class="row align-items-start responsive_ch d-sm-flex">

            <div class="seccion-matricula container py-5">
                <div class="row align-items-start d-sm-flex">
                    <div class="col-md-3 text-md-left text-center" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="100">
                        <h2 class="text_matricula v2">Matrícula 2026</h2>
                    </div>

                    <div class="col-md-9 d-none d-md-block">
                        <div class="row justify-content-center">
                            <div class="col-10 col-sm-6 col-md-4 mb-3" data-aos="fade-down" data-aos-duration="900"
                                data-aos-delay="100">
                                <div class="card-matricula color-nuevo active-card" data-toggle="tab"
                                    data-target="#contenido-nuevo">
                                    <div class="icono-matricula">
                                        <i class="las la-laugh-beam la-4x"></i>
                                    </div>
                                    <p class="Alumno">Alumno <span class="span">nuevo</span></p>
                                </div>
                            </div>

                            <div class="col-10 col-sm-6 col-md-4 mb-3" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="100">
                                <div class="card-matricula color-traslado" data-toggle="tab"
                                    data-target="#contenido-traslado">
                                    <div class="icono-matricula">
                                        <i class="las la-map-signs la-4x"></i>
                                    </div>
                                    <p class="Alumno">Alumno <span class="span">traslado</span></p>
                                </div>
                            </div>

                            <div class="col-10 col-sm-6 col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1500"
                                data-aos-delay="100">
                                <div class="card-matricula color-regular" data-toggle="tab"
                                    data-target="#contenido-regular">
                                    <div class="icono-matricula">
                                        <i class="las la-user-check la-4x"></i>
                                    </div>
                                    <p class="Alumno">Alumno <span class="span">regular</span><span
                                            class="span_especial">(actual)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contenido de pestañas -->
                <div class="tab-content mt-4">
                    <div class="tab-pane fade" id="contenido-nuevo">
                        <!-- Aquí va el contenido del alumno nuevo (igual al que ya tenías) -->
                        <section class="process d-none d-md-block">
                            <div class="process__container">
                                <div data-aos="fade-down" data-aos-duration="900" data-aos-delay="400"
                                    data-aos-easing="ease-out">
                                    <h3 class="text_matricula v3">Requisitos Alumno Nuevo:</h3>
                                </div>
                                <div class="process__accordions">
                                    <ul class="accordions__list">
                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">Inicial (5 años) y 1.° Primaria</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid">
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 1</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Completar la ficha de admisión
                                                                2025</span>
                                                        </p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 2</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                apoderado.<br>
                                                                ¬ Libreta de notas. <br>
                                                                ¬ Cartilla de vacunación.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="accordions__grid mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 3</button>
                                                        <p class="grid__career"> <span class="text_reg_tab">
                                                                ¬ Pago de matrícula. <br>
                                                                ¬ Firmar el compromiso de matrícula.<br>
                                                                ¬ Completar y firmar la ficha médica del estudiante.
                                                            </span></p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 4</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">
                                                                ¬ Se programa entrevista con padres y coordinación o
                                                                psicóloga.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">2.° a 6.° de Primaria</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid">
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 1</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Completar la ficha de admisión
                                                                2025</span>
                                                        </p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 2</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                apoderado.<br>
                                                                ¬ Libreta de notas. <br>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="accordions__grid mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 3</button>
                                                        <p class="grid__career"> <span class="text_reg_tab">
                                                                ¬ Pago de matrícula. <br>
                                                                ¬ Firmar el compromiso de matrícula.<br>
                                                                ¬ Completar y firmar la ficha médica del estudiante.
                                                            </span></p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 4</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">
                                                                ¬ Se programa entrevista con padres y coordinación o
                                                                psicóloga.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">Secundaria</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid">
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 1</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Completar la ficha de admisión
                                                                2025</span>
                                                        </p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 2</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                apoderado.<br>
                                                                ¬ Libreta de notas. <br>
                                                                ¬ Cartilla de vacunación.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="accordions__grid mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 3</button>
                                                        <p class="grid__career"> <span class="text_reg_tab">
                                                                ¬ Pago de matrícula. <br>
                                                                ¬ Firmar el compromiso de matrícula.<br>
                                                                ¬ Completar y firmar la ficha médica del estudiante.
                                                            </span></p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid orange-bg">Paso 4</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">
                                                                ¬ Se programa entrevista con padres y coordinación o
                                                                psicóloga.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="contenido-traslado">
                        <!-- Aquí va el contenido del alumno traslado -->
                        <section class="process d-none d-md-block">
                            <div class="process__container">
                                <div data-aos="fade-down" data-aos-duration="900" data-aos-delay="400"
                                    data-aos-easing="ease-out">
                                    <h3 class="text_matricula v3">Requisitos Alumno Traslado:</h3>
                                </div>
                                <div class="process__accordions">
                                    <ul class="accordions__list">
                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">Inicial (5 años) y 1.° Primaria</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid">
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 1</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Completar la ficha de admisión
                                                                2025</span>
                                                        </p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 2</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                apoderado.<br>
                                                                ¬ Libreta de notas. <br>
                                                                ¬ Cartilla de vacunación.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="accordions__grid mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 3</button>
                                                        <p class="grid__career"> <span class="text_reg_tab">
                                                                ¬ Pago de matrícula. <br>
                                                                ¬ Firmar el compromiso de matrícula.<br>
                                                                ¬ Completar y firmar la ficha médica del estudiante.
                                                            </span></p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 4</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">
                                                                ¬ Se programa entrevista con padres y coordinación o
                                                                psicóloga.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">2.° a 6.° de Primaria</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid">
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 1</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Completar la ficha de admisión
                                                                2025.</span>
                                                        </p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 2</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                apoderado.<br>
                                                                ¬ Libreta de notas. <br>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="accordions__grid mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 3</button>
                                                        <p class="grid__career"> <span class="text_reg_tab">
                                                                ¬ Pago de matrícula. <br>
                                                                ¬ Firmar el compromiso de matrícula.<br>
                                                                ¬ Completar y firmar la ficha médica del estudiante.
                                                            </span></p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 4</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">
                                                                ¬ Se programa entrevista con padres y coordinación o
                                                                psicóloga.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">Secundaria</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid">
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 1</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Completar la ficha de admisión
                                                                2025</span>
                                                        </p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 2</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                apoderado.<br>
                                                                ¬ Libreta de notas. <br>
                                                                ¬ Cartilla de vacunación.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="accordions__grid mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 3</button>
                                                        <p class="grid__career"> <span class="text_reg_tab">
                                                                ¬ Pago de matrícula. <br>
                                                                ¬ Firmar el compromiso de matrícula.<br>
                                                                ¬ Completar y firmar la ficha médica del estudiante.
                                                            </span></p>
                                                    </div>
                                                    <div class="grid__item">
                                                        <button class="btgrid blue-bg">Paso 4</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">
                                                                ¬ Se programa evaluación de conocimientos.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="contenido-regular">
                        <!-- Aquí va el contenido del alumno regular -->
                        <section class="process d-none d-md-block">
                            <div class="process__container">
                                <div data-aos="fade-down" data-aos-duration="900" data-aos-delay="400"
                                    data-aos-easing="ease-out">
                                    <h3 class="text_matricula v3">Requisitos Alumno Regular:</h3>
                                </div>
                                <div class="process__accordions">
                                    <ul class="accordions__list">
                                        <li class="accordions__item">
                                            <button class="accordions__control" aria-expanded="true">
                                                <span class="accordions__title">Todos los grados</span>
                                                <span class="accordions__icon"></span>
                                            </button>
                                            <div class="accordions__content text" aria-hidden="true">
                                                <div class="accordions__grid__v3 mt-30">
                                                    <div class="grid__item">
                                                        <button class="btgrid mord-gb">Inscripción</button>
                                                        <p class="grid__career">
                                                            <span class="text_reg_tab">¬ Actualizar ficha de matrícula
                                                                2025</span>
                                                            <br>
                                                            <span class="text_reg_tab"> ¬ Firmar el compromiso de matrícula
                                                                2025.</span> <br>
                                                            <span class="text_reg_tab">¬ Completar y firmar la ficha médica
                                                                del
                                                                estudiante.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="accordion w-100 d-block d-md-none" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn bnt" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-down"
                                    data-aos-duration="900" data-aos-delay="100">
                                    <div class="card-matricula color-nuevo active-card" data-target="#contenido-nuevo">
                                        <div class="icono-matricula">
                                            <i class="las la-laugh-beam la-4x"></i>
                                        </div>
                                        <p class="Alumno">Alumno <span class="span">nuevo</span></p>
                                    </div>
                                </div>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            <!-- CONTENIDO INTERIOR ACORDEON ALUMNO NUEVO -->
                            <!-- REUTILIZA LA MISMA ESTRUCTURA EN FORMATO BS4 -->
                            <section class="process">
                                <div class="process__container">
                                    <div data-aos="fade-down" data-aos-duration="900" data-aos-delay="400"
                                        data-aos-easing="ease-out">
                                        <h3 class="text_matricula v3">Requisitos Alumno Nuevo:</h3>
                                    </div>
                                    <div class="process__accordions">
                                        <ul class="accordions__list">
                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">Inicial (5 años) y 1.° Primaria</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid">
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 1</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Completar la ficha de admisión
                                                                    2025</span>
                                                            </p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 2</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                    apoderado.<br>
                                                                    ¬ Libreta de notas. <br>
                                                                    ¬ Cartilla de vacunación.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordions__grid mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 3</button>
                                                            <p class="grid__career"> <span class="text_reg_tab">
                                                                    ¬ Pago de matrícula. <br>
                                                                    ¬ Firmar el compromiso de matrícula.<br>
                                                                    ¬ Completar y firmar la ficha médica del estudiante.
                                                                </span></p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 4</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">
                                                                    ¬ Se programa entrevista con padres y coordinación o
                                                                    psicóloga.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">2.° a 6.° de Primaria</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid">
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 1</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Completar la ficha de admisión
                                                                    2025</span>
                                                            </p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 2</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                    apoderado.<br>
                                                                    ¬ Libreta de notas. <br>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordions__grid mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 3</button>
                                                            <p class="grid__career"> <span class="text_reg_tab">
                                                                    ¬ Pago de matrícula. <br>
                                                                    ¬ Firmar el compromiso de matrícula.<br>
                                                                    ¬ Completar y firmar la ficha médica del estudiante.
                                                                </span></p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 4</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">
                                                                    ¬ Se programa entrevista con padres y coordinación o
                                                                    psicóloga.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">Secundaria</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid">
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 1</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Completar la ficha de admisión
                                                                    2025</span>
                                                            </p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 2</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                    apoderado.<br>
                                                                    ¬ Libreta de notas. <br>
                                                                    ¬ Cartilla de vacunación.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordions__grid mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 3</button>
                                                            <p class="grid__career"> <span class="text_reg_tab">
                                                                    ¬ Pago de matrícula. <br>
                                                                    ¬ Firmar el compromiso de matrícula.<br>
                                                                    ¬ Completar y firmar la ficha médica del estudiante.
                                                                </span></p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid orange-bg">Paso 4</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">
                                                                    ¬ Se programa entrevista con padres y coordinación o
                                                                    psicóloga.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn bnt collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="100">
                                    <div class="card-matricula color-traslado" data-target="#contenido-traslado">
                                        <div class="icono-matricula">
                                            <i class="las la-map-signs la-4x"></i>
                                        </div>
                                        <p class="Alumno">Alumno <span class="span">traslado</span></p>
                                    </div>
                                </div>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body">
                            <!-- CONTENIDO INTERIOR ACORDEON ALUMNO TRASLADO -->
                            <section class="process">
                                <div class="process__container">
                                    <div data-aos="fade-down" data-aos-duration="900" data-aos-delay="400"
                                        data-aos-easing="ease-out">
                                        <h3 class="text_matricula v3">Requisitos Alumno Traslado:</h3>
                                    </div>
                                    <div class="process__accordions">
                                        <ul class="accordions__list">
                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">Inicial (5 años) y 1.° Primaria</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid">
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 1</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Completar la ficha de admisión
                                                                    2025</span>
                                                            </p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 2</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                    apoderado.<br>
                                                                    ¬ Libreta de notas. <br>
                                                                    ¬ Cartilla de vacunación.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordions__grid mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 3</button>
                                                            <p class="grid__career"> <span class="text_reg_tab">
                                                                    ¬ Pago de matrícula. <br>
                                                                    ¬ Firmar el compromiso de matrícula.<br>
                                                                    ¬ Completar y firmar la ficha médica del estudiante.
                                                                </span></p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 4</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">
                                                                    ¬ Se programa entrevista con padres y coordinación o
                                                                    psicóloga.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">2.° a 6.° de Primaria</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid">
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 1</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Completar la ficha de admisión
                                                                    2025.</span>
                                                            </p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 2</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                    apoderado.<br>
                                                                    ¬ Libreta de notas. <br>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordions__grid mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 3</button>
                                                            <p class="grid__career"> <span class="text_reg_tab">
                                                                    ¬ Pago de matrícula. <br>
                                                                    ¬ Firmar el compromiso de matrícula.<br>
                                                                    ¬ Completar y firmar la ficha médica del estudiante.
                                                                </span></p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 4</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">
                                                                    ¬ Se programa entrevista con padres y coordinación o
                                                                    psicóloga.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">Secundaria</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid">
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 1</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Completar la ficha de admisión
                                                                    2025</span>
                                                            </p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 2</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                                                    ¬ Foto nítida por ambos lados del DNI del P.F. y/o
                                                                    apoderado.<br>
                                                                    ¬ Libreta de notas. <br>
                                                                    ¬ Cartilla de vacunación.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="accordions__grid mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 3</button>
                                                            <p class="grid__career"> <span class="text_reg_tab">
                                                                    ¬ Pago de matrícula. <br>
                                                                    ¬ Firmar el compromiso de matrícula.<br>
                                                                    ¬ Completar y firmar la ficha médica del estudiante.
                                                                </span></p>
                                                        </div>
                                                        <div class="grid__item">
                                                            <button class="btgrid blue-bg">Paso 4</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">
                                                                    ¬ Se programa evaluación de conocimientos.
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn bnt collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-left"
                                    data-aos-duration="1500" data-aos-delay="100">
                                    <div class="card-matricula color-regular" data-target="#contenido-regular">
                                        <div class="icono-matricula">
                                            <i class="las la-user-check la-4x"></i>
                                        </div>
                                        <p class="Alumno">Alumno <span class="span">regular</span><span
                                                class="span_especial">(actual)</span></p>
                                    </div>
                                </div>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body">
                            <!-- CONTENIDO INTERIOR ACORDEON ALUMNO REGULAR -->
                            <section class="process">
                                <div class="process__container">
                                    <div data-aos="fade-down" data-aos-duration="900" data-aos-delay="400"
                                        data-aos-easing="ease-out">
                                        <h3 class="text_matricula v3">Requisitos Alumno Regular:</h3>
                                    </div>
                                    <div class="process__accordions">
                                        <ul class="accordions__list">
                                            <li class="accordions__item">
                                                <button class="accordions__control" aria-expanded="true">
                                                    <span class="accordions__title">Todos los grados</span>
                                                    <span class="accordions__icon"></span>
                                                </button>
                                                <div class="accordions__content text" aria-hidden="true">
                                                    <div class="accordions__grid__v3 mt-30">
                                                        <div class="grid__item">
                                                            <button class="btgrid mord-gb">Inscripción</button>
                                                            <p class="grid__career">
                                                                <span class="text_reg_tab">¬ Actualizar ficha de matrícula
                                                                    2025</span>
                                                                <br>
                                                                <span class="text_reg_tab"> ¬ Firmar el compromiso de
                                                                    matrícula
                                                                    2025.</span> <br>
                                                                <span class="text_reg_tab">¬ Completar y firmar la ficha
                                                                    médica del
                                                                    estudiante.</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="seccion-matricula container py-5">
        <div class="row align-items-center">
            <!-- Columna izquierda - 60% -->
            <div class="col-md-6">
                <div class="contenido_iz">
                    <h2 class="txt_especial" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
                        Colegio
                        Trilce</h2>
                    <p class="txt_span" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
                        Nuestros 45 años de experiencia brindando una educación de calidad nos han convertido en una de
                        las
                        organizaciones educativas más grandes del país. Con 18 sedes en Lima y 6 en provincia, nuestro
                        principal objetivo es brindar educación de alta calidad y fomentar el liderazgo.
                    </p>
                    <button class="btn btn-primary btn_wsp" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-delay="100">
                        <i class="lab la-whatsapp la-2x"></i> ¡Matricúlate aquí!
                    </button>
                </div>
            </div>

            <!-- Columna derecha - 40% -->
            <div class="col-md-6">
                <div class="contenido_de text-center" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">
                    <img src="/static/images/colegio/trilce_img.webp" alt="Imagen derecha" class="img-fluid img_tri">
                </div>
            </div>
        </div>
    </div>

    <div class="wcontainer">
        <div class="seccion-matricula container py-5 manu-pad">
            <div class="d-flex align-items-cemter man_flex_respon">
                <!-- Columna izquierda - 60% -->
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="contenido_iz text-center iz_de">
                        <img src="/static/images/colegio/matricula_2026.svg" alt="Matrícula 2026" data-aos="fade-down"
                            data-aos-duration="1500" data-aos-delay="100">
                        <p class="txt_propuesta" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                            La mejor propuesta educativa
                        </p>
                        <button class="btn btn-primary btn_wsp_2" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-delay="100">
                            Más información
                        </button>
                    </div>
                </div>

                <!-- Columna derecha - 40% -->
                <div class="col-md-6 d-flex justify-content-start">
                    <div class="contenido_de" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">
                        <img src="/static/images/colegio/trilce_nina_2025.png" alt="Imagen derecha"
                            class="img-fluid image-nina">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 769 X 960  MODALES POP UP-->
    @if ($popup)
        <div class="modal fade modern-modal modal_2025" id="modalTrilceHome" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modern-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <a href="{{ $popup->link }}" target="_blank">
                            <img class="modal-web" src="{{ $popup->image_url }}" alt="Popup">
                        </a>
                        <a href="{{ $popup->link }}" target="_blank">
                            <img class="modal-movil" src="{{ $popup->image_url_movil }}" alt="Popup">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#modalTrilceHome').modal('show');
            });
        </script>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>

    <script>
        $(document).ready(function () {
            jQuery.noConflict();
            $("#modalTrilceHome").modal('show');
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Mostrar por defecto el contenido de "Alumno nuevo"
            document.querySelector("#contenido-nuevo").classList.add("show", "active");

            // Activar visualmente la tarjeta por defecto y aplicar opacidad a las demás
            document.querySelectorAll(".card-matricula").forEach(function (card) {
                if (!card.classList.contains("active-card")) {
                    card.classList.add("dimmed");
                }
            });

            // Activar el primer sub-tab por defecto
            let firstSubTab = document.querySelector("#subTabNuevo .nav-link");
            if (firstSubTab) {
                new bootstrap.Tab(firstSubTab).show();
            }

            // Manejo de clics en tarjetas
            document.querySelectorAll(".card-matricula").forEach(function (card) {
                card.addEventListener("click", function () {
                    let target = this.getAttribute("data-target");

                    // Cambiar visualmente las tarjetas
                    document.querySelectorAll(".card-matricula").forEach(function (otherCard) {
                        otherCard.classList.remove("active-card");
                        otherCard.classList.add("dimmed");
                    });
                    this.classList.add("active-card");
                    this.classList.remove("dimmed");

                    // Cambiar contenido principal
                    document.querySelectorAll(".tab-pane").forEach(function (pane) {
                        pane.classList.remove("show", "active");
                    });

                    let selectedTab = document.querySelector(target);
                    if (selectedTab) {
                        selectedTab.classList.add("show", "active");

                        let firstSubTab = selectedTab.querySelector(
                            ".nav-tabs .nav-link:first-child");
                        if (firstSubTab) {
                            selectedTab.querySelectorAll(".nav-tabs .nav-link").forEach(function (
                                tab) {
                                tab.classList.remove("active");
                            });

                            firstSubTab.classList.add("active");

                            selectedTab.querySelectorAll(".tab-content .tab-pane").forEach(function (
                                content) {
                                content.classList.remove("show", "active");
                            });

                            let firstTabContent = document.querySelector(firstSubTab.getAttribute(
                                "href"));
                            if (firstTabContent) {
                                firstTabContent.classList.add("show", "active");
                            }

                            new bootstrap.Tab(firstSubTab).show();
                        }
                        AOS.refresh();
                    }
                });
            });

            // Manejo de clics en sub-tabs
            document.querySelectorAll('.nav-tabs .nav-link').forEach(function (tab) {
                tab.addEventListener("click", function (event) {
                    event.preventDefault();
                    let tabContentId = this.getAttribute("href");
                    if (tabContentId) {
                        let parentTabContent = this.closest('.tab-pane');
                        if (parentTabContent) {
                            parentTabContent.querySelectorAll('.tab-content .tab-pane').forEach(
                                function (content) {
                                    content.classList.remove("show", "active");
                                });

                            let targetContent = document.querySelector(tabContentId);
                            if (targetContent) {
                                targetContent.classList.add("show", "active");
                            }
                        }

                        new bootstrap.Tab(this).show();
                    }
                });
            });
        });
    </script>


    @include('colegio.partials.card_bottom')
@endsection
@section('scripts')
    page = 'index';
    @parent
@endsection