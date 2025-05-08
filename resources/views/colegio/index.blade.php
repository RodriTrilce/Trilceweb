{{ !($breadcrumbs = Breadcrumbs::render('colegio-index')) }}
@extends('colegio.layouts.template')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/main_colegio_index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
        <div class="row align-items-start responsive_ch">
            <div class="col-md-3 text-md-start text-center respon_text" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="100" data-aos-easing="ease-in-sine">
                <h2 class="text_matricula v2">Matrícula 2025</h2>
            </div>
            <div class="col-md-9 responsive_force">
                <div class="row g-3 justify-content-center response_mobil">
                    <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-down" data-aos-duration="900"
                        data-aos-delay="100">
                        <div class="card-matricula color-nuevo active-card" data-target="#contenido-nuevo">
                            <div class="icono-matricula">
                                <i class="las la-laugh-beam la-4x"></i>
                            </div>
                            <p class="Alumno">Alumno <span class="span">nuevo</span></p>
                        </div>
                    </div>

                    <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="100">
                        <div class="card-matricula color-traslado" data-target="#contenido-traslado">
                            <div class="icono-matricula">
                                <i class="las la-map-signs la-4x"></i>
                            </div>
                            <p class="Alumno">Alumno <span class="span">traslado</span></p>
                        </div>
                    </div>

                    <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-delay="100">
                        <div class="card-matricula color-regular" data-target="#contenido-regular">
                            <div class="icono-matricula">
                                <i class="las la-user-check la-4x"></i>
                            </div>
                            <p class="Alumno">Alumno <span class="span">regular</span><span
                                    class="span_especial">(actual)</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs de contenido -->
            <div class="tab-pane fade" id="contenido-nuevo">
                <div data-aos="fade-down" data-aos-duration="800" data-aos-delay="300" data-aos-easing="ease-in-out">
                    <h3 class="text_matricula v3">Requisitos Alumno nuevo:</h3>
                </div>
                <ul class="nav nav-tabs d-flex" id="subTabNuevo">
                    <li class="nav-item flex-fill">
                        <a class="nav-link active text-center" data-bs-toggle="tab" href="#nuevo-requisitos">
                            Inicial (5 años) y 1.° Primaria
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link text-center" data-bs-toggle="tab" href="#nuevo-proceso">
                            2.° a 6.° de Primaria
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link text-center" data-bs-toggle="tab" href="#nuevo-documentos">
                            Secundaria
                        </a>
                    </li>
                </ul>
                <div class="py-5 cont_tab">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nuevo-requisitos">
                            <div class="padre_tabs_cont">
                                <div class="cont_tabs">
                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 1</h3>
                                        <span class="text_reg_tab">Completar la ficha de admisión 2025</span>
                                    </div>

                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 2</h3>
                                        <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                            ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                            ¬ Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                                            ¬ Libreta de notas. <br>
                                            ¬ Cartilla de vacunación.
                                        </span>
                                    </div>
                                </div>

                                <div class="cont_tabs">
                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 3</h3>
                                        <span class="text_reg_tab">
                                            ¬ Pago de matrícula. <br>
                                            ¬ Firmar el compromiso de matrícula.<br>
                                            ¬ Completar y firmar la ficha médica del estudiante.
                                        </span>
                                    </div>

                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 4</h3>
                                        <span class="text_reg_tab">
                                            ¬ Se programa entrevista con padres y coordinación o psicóloga.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="nuevo-proceso">
                            <div class="padre_tabs_cont">
                                <div class="cont_tabs">
                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 1</h3>
                                        <span class="text_reg_tab">Completar la ficha de admisión 2025</span>
                                    </div>

                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 2</h3>
                                        <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                            ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                            ¬ Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                                            ¬ Libreta de notas. <br>
                                        </span>
                                    </div>
                                </div>

                                <div class="cont_tabs">
                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 3</h3>
                                        <span class="text_reg_tab">
                                            ¬ Pago de matrícula. <br>
                                            ¬ Firmar el compromiso de matrícula.<br>
                                            ¬ Completar y firmar la ficha médica del estudiante.
                                        </span>
                                    </div>

                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 4</h3>
                                        <span class="text_reg_tab">
                                            ¬ Se programa evaluación de conocimientos.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane fade" id="nuevo-documentos">
                            <div class="padre_tabs_cont">
                                <div class="cont_tabs">
                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 1</h3>
                                        <span class="text_reg_tab">Completar la ficha de admisión 2025</span>
                                    </div>

                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 2</h3>
                                        <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                            ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                            ¬ Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                                            ¬ Libreta de notas. <br>
                                        </span>
                                    </div>
                                </div>

                                <div class="cont_tabs">
                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 3</h3>
                                        <span class="text_reg_tab">
                                            ¬ Pago de matrícula. <br>
                                            ¬ Firmar el compromiso de matrícula.<br>
                                            ¬ Completar y firmar la ficha médica del estudiante.
                                        </span>
                                    </div>

                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 4</h3>
                                        <span class="text_reg_tab">
                                            ¬ Se programa evaluación de conocimientos.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contenido-traslado">
                <h3 class="text_matricula v3">Requisitos Alumno traslado:</h3>
                <ul class="nav nav-tabs d-flex" id="subTabTraslado">
                    <li class="nav-item flex-fill">
                        <a class="nav-link active text-center" data-bs-toggle="tab" href="#traslado-requisitos">
                            Inicial y 1.° Primaria
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link text-center" data-bs-toggle="tab" href="#traslado-proceso">
                            2.° a 6.° de Primaria
                        </a>
                    </li>
                    <li class="nav-item flex-fill">
                        <a class="nav-link text-center" data-bs-toggle="tab" href="#traslado-documentos">
                            Secundaria
                        </a>
                    </li>
                </ul>
                <div class="py-5 cont_tab">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="traslado-requisitos">
                            <div class="padre_tabs_cont">
                                <div class="cont_tabs">
                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 1</h3>
                                        <span class="text_reg_tab">Completar la ficha de admisión 2025</span>
                                    </div>

                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 2</h3>
                                        <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                            ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                            ¬ Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                                            ¬ Libreta de notas. <br>
                                            ¬ Cartilla de vacunación.
                                        </span>
                                    </div>
                                </div>

                                <div class="cont_tabs">
                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 3</h3>
                                        <span class="text_reg_tab">
                                            ¬ Pago de matrícula. <br>
                                            ¬ Firmar el compromiso de matrícula.<br>
                                            ¬ Completar y firmar la ficha médica del estudiante.
                                        </span>
                                    </div>

                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 4</h3>
                                        <span class="text_reg_tab">
                                            ¬ Se programa entrevista con padres y coordinación o psicóloga.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="traslado-proceso">
                            <div class="padre_tabs_cont">
                                <div class="cont_tabs">
                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 1</h3>
                                        <span class="text_reg_tab">Completar la ficha de admisión 2025</span>
                                    </div>

                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 2</h3>
                                        <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                            ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                            ¬ Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                                            ¬ Libreta de notas. <br>
                                        </span>
                                    </div>
                                </div>

                                <div class="cont_tabs">
                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 3</h3>
                                        <span class="text_reg_tab">
                                            ¬ Pago de matrícula. <br>
                                            ¬ Firmar el compromiso de matrícula.<br>
                                            ¬ Completar y firmar la ficha médica del estudiante.
                                        </span>
                                    </div>

                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 4</h3>
                                        <span class="text_reg_tab">
                                            ¬ Se programa evaluación de conocimientos.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="traslado-documentos">
                            <div class="padre_tabs_cont">
                                <div class="cont_tabs">
                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 1</h3>
                                        <span class="text_reg_tab">Completar la ficha de admisión 2025</span>
                                    </div>

                                    <div class="card_tabs_proc">
                                        <h3 class="text_matricula v4">Paso 2</h3>
                                        <span class="text_reg_tab">Documentos a solicitar: <br> <br>
                                            ¬ Foto nítida por ambos lados del DNI del alumno. <br>
                                            ¬ Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                                            ¬ Libreta de notas. <br>
                                        </span>
                                    </div>
                                </div>

                                <div class="cont_tabs">
                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 3</h3>
                                        <span class="text_reg_tab">
                                            ¬ Pago de matrícula. <br>
                                            ¬ Firmar el compromiso de matrícula.<br>
                                            ¬ Completar y firmar la ficha médica del estudiante.
                                        </span>
                                    </div>

                                    <div class="">
                                        <h3 class="text_matricula v4">Paso 4</h3>
                                        <span class="text_reg_tab">
                                            ¬ Se programa evaluación de conocimientos.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contenido-regular">
                <h3 class="text_matricula v3">Requisitos Alumno regular:</h3>
                <div>
                    <i class="las la-edit la-4x"></i>

                    <h4>Inscripción</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion-matricula container py-5">
        <div class="row align-items-center">
            <!-- Columna izquierda - 60% -->
            <div class="col-md-6">
                <div class="contenido_iz">
                    <h2 class="txt_especial" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">Colegio
                        Trilce</h2>
                    <p class="txt_span" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
                        Nuestros 45 años de experiencia brindando una educación de calidad nos han convertido en una de las
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
                <div class="contenido_de text-center" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-delay="100">
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
                    <div class="contenido_iz text-end iz_de">
                        <img src="/static/images/colegio/matricula2025.svg" alt="Matrícula 2025" data-aos="fade-down"
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
            $(document).ready(function() {
                $('#modalTrilceHome').modal('show');
            });
        </script>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
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

                    let firstSubTab = selectedTab.querySelector(".nav-tabs .nav-link:first-child");
                    if (firstSubTab) {
                        selectedTab.querySelectorAll(".nav-tabs .nav-link").forEach(function (tab) {
                            tab.classList.remove("active");
                        });

                        firstSubTab.classList.add("active");

                        selectedTab.querySelectorAll(".tab-content .tab-pane").forEach(function (content) {
                            content.classList.remove("show", "active");
                        });

                        let firstTabContent = document.querySelector(firstSubTab.getAttribute("href"));
                        if (firstTabContent) {
                            firstTabContent.classList.add("show", "active");
                        }

                        new bootstrap.Tab(firstSubTab).show();
                    }
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
                        parentTabContent.querySelectorAll('.tab-content .tab-pane').forEach(function (content) {
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
