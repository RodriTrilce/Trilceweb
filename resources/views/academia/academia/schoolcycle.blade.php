{{ !($breadcrumbs = Breadcrumbs::render('academia-schoolcycle')) }}
@extends('academia.layouts.template')
@section('title', 'Ciclo Escolar')
@section('content')
    <head>
        <title>Ciclo Escolar - Trilce</title>
        <meta name="title" content="Ciclo Escolar - Trilce" />
        <meta property="og:title" content="Ciclo Escolar - Trilce" />
        <meta name="twitter:title" content="Ciclo Escolar - Trilce" />
        <meta name="description" content="Ciclo Escolar - Trilce" />
        <meta property="og:description" content="Ciclo Escolar - Trilce" />
        <meta name="twitter:description" content="Ciclo Escolar - Trilce" />
        <meta name="robots" content="index,follow" />
        <meta name="url" content="https://www.trilce.edu.pe/academia" />
        <meta property="og:url" content="https://www.trilce.edu.pe/academia" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


        <div class="header-double-top new_banner">
            <div class="row">
                <a href="https://www.trilce.edu.pe/l/whatsapp-escolar" target="_blank" style="width: 100%">
                    <img src="/storage/static/upload/5f0a6d30-05c0-11f0-b38d-73d8f3feb1bc.webp" alt="Trilce"
                        class="version_desktop" style="width: 100%" />
                    <img src="/storage/static/upload/5efe8a40-05c0-11f0-8153-23f97c2eec52.webp" alt="Trilce"
                        class="version_mobile" />
                </a>
            </div>
        </div>

        <div class="row col-xs-12 left-xs container-base frequentquestions">
        <div class="margin-texto">
            <p>&nbsp;</p>
            <h2 style="color: #333; font-weight: bold; font-family: Geogrotesque-Rg;">Ciclo de Nivelación Escolar</h2>
            <p>&nbsp;</p>
            <p>El plan de estudios del CICLO DE NIVELACIÓN ESCOLAR se encuentra diseñado para reforzar cursos ejes
            de la malla curricular, con el fin de que los estudiantes puedan finalizar el año con notas satisfactorias.</p>
        </div>
    </div>


        <div class="row col-xs-12 center-xs container-base preparation__section">
            <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
                <h1 class="preparation__title">¡Nuevos Inicios!</h1>
                <!--h3 class="preparation__subtitle">Encuentra todos nuestros ciclos disponibles</h3-->
            </div>
        </div>

        <div class="row col-xs-12 center-xs container-base frequentquestions">

            <div class="main tab-sup">
                <input id="tab4" type="radio" name="tabs" checked>
                <label for="tab4">
                    Ciclo escolar
                </label>

                <div class="content">
                    <div id="content4">
                        <table class="table-rest3 animate__animated animate__fadeIn">
                            <thead>
                                <tr>
                                    <th>Inicio</th>
                                    <th>Fin</th>
                                    <th>Nro. Semanas</th>
				    <th>Pago mensual</th>
                                    <th>Modalidad</th>
                                    <th>Sedes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Inicio:">07/04/2025</td>
                                    <td data-label="Fin:">19/07/2025</td>
                                    <td data-label="Nro. Semanas:">15</td>
                                    <td data-label="Pago mensual:">S/ 260.00</td>
                                    <td data-label="Modalidad:">Presencial</td>
                                    <td data-label="Sedes:" class="texto-horario">Villa El Salvador</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
        </div>

        <div class="benefits-container">
            <div class="benefits-left">
                <h1 class="benefits-title">¡Conoce nuestros<br>beneficios, horarios y más!</h1>
                <div class="benefits-buttons">
                    <a href="https://www.trilce.edu.pe/l/brochure-escolar-2025" target="_blank"
                        class="btn">Descargar Brochure Escolar</a>
                </div>
            </div>
    
            <div class="benefits-right">
                <img src="/static/images/academia/preparacion/banner-brochure-desktop.png" alt="Imagen de Brochure"
                    class="benefits-img">
            </div>
        </div>

        <div class="row col-xs-12 center-xs container-base preparation__section">
            <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
                <h1 class="preparation__title preparation__title--and" style="font-weight: bold">También preparamos a
                    nuestros alumnos para ingresar a estas universidades:</h1>
            </div>
        </div>

        <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
            <div class="row col-xs-12 col-sm-3 col-md-6 start-xs start-sm start-md beginning-container beginning-minus">

                <div class="col-xs beginning--item beginning--item--activecolors">
                    <a href="/academia/preparacion-uni" class="item-a">
                        <div class="item-a-container">
                            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}"
                                alt="Nuevos Inicios">
                            <div class="item-a-preparation"><br></div>
                            <span class="item-a-university">UNI</span>
                        </div>
                    </a>
                </div>

                <div class="beginning-breakline"></div>

                <div class="col-xs beginning--item beginning--item--activecolors">
                    <a href="/academia/preparacion-san-marcos" class="item-a">
                        <div class="item-a-container">
                            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}"
                                alt="Nuevos Inicios">
                            <div class="item-a-preparation"><br /></div>
                            <span class="item-a-university">SAN MARCOS</span>
                        </div>
                    </a>
                </div>

                <div class="beginning-breakline"></div>

                <div class="col-xs beginning--item beginning--item--activecolors">
                    <a href="/academia/preparacion-pucp" class="item-a">
                        <div class="item-a-container">
                            <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}"
                                alt="Nuevos Inicios">
                            <div class="item-a-preparation"><br /></div>
                            <span class="item-a-university">CATÓLICA</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include('academia.partials.card_bottom')
    @endsection

    @section('scripts')
        page = 'tuyorials';
        @parent
    @endsection
