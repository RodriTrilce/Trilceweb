{{ !($breadcrumbs = Breadcrumbs::render('academia-index')) }}
@extends('academia.layouts.template')
@section('title', '')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
        nav>ul>li>a,
        nav>ul>li>a:link,
        nav>ul>li a:visited {
            color: black;
        }

        nav>ul>li>a,
        nav>ul>li>a:link,
        nav>ul>li a:hover {

            text-decoration: none;
        }

        #modalTrilceHome .modal-dialog {
            max-width: 40%;
        }

        #modalTrilceHome .modal-content {
            width: 100%;
            height: auto;
        }





        div#modalTrilceHome {
            padding-right: 0 !important;
            !i;
            !;
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
            color: rgb(255, 255, 255);
            z-index: 99;
            font-size: 25px;
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
            object-fit: cover;
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
            position: absolute;
            /* Si quieres colocarlo en una posición específica */
            top: 10px;
            /* Ajusta según sea necesario */
            right: 10px;
            /* Ajusta según sea necesario */
            background-color: transparent;
            /* Fondo transparente */
            border: none;
            /* Sin bordes */
            font-size: 20px;
            /* Tamaño del texto para el símbolo de cierre */
            width: 35px;
            /* Ajusta el tamaño del botón */
            height: 35px;
            /* Ajusta el tamaño del botón */
            display: flex;
            /* Centra el contenido */
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            /* Forma circular */
            transition: background-color 0.3s ease, transform 0.2s ease;
            cursor: pointer;
            /* Cambia el cursor al pasar por encima */
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
                max-width: 90%;
                height: auto;
            }


            .modern-modal .modal-dialog {
                width: 95%;
                /* El modal ocupa más espacio en pantallas pequeñas */
                max-width: 90%;
                /* Máximo 90% en pantallas pequeñas */
            }

            .modern-modal img {
                width: 100%;
                height: auto;
                object-fit: cover;
                display: block;
                border-radius: 15px;
            }

            .modern-modal .modal-web {
                display: none;
                /* Esconde la versión web en pantallas pequeñas */
            }

            .modern-modal .modal-movil {
                display: block;
                /* Muestra la versión móvil */
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









        .nuevos-i .nuevos-i-box>div>a:hover h3 {
            color: #f4633a !important
        }

        .nuevos-i .nuevos-i-box>div:hover {
            border: 2px solid #f4633a !important
        }

        .nuevos-i .nuevos-i-box>div>a {
            width: 100%;
            height: 100%;
            display: block;
            /* padding: 30px 20px 40px; */
            position: relative;
        }

        dl,
        ol,
        ul {
            margin-bottom: 0rem;
        }

        .header-web {
            min-height: 120px;
            margin-right: 30px;
            margin-left: 30px;
            margin-top: 30px;
            font-family: CaeciliaLTPro-45Light;
        }

        .nuevos-i,
        .card {
            font-family: CaeciliaLTPro-45Light;
        }

        .nuevos-i .nuevos-i-box>div>a:hover {
            text-decoration: none;
        }

        .container-padding-mobile span {
            display: flex;
            flex-direction: row;
        }

        .card h3 {
            font-size: 1.2rem;
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

        .incriptions-acade-ads__link:hover {
            text-decoration: none;
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

        /*.carousel-item:nth-child(7) {
                            background-image: url('http://www.trilce.edu.pe/static/images/slides/banner-academias-solucionario-fis-qui-14022020-bg.png');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                          }*/

        /*.carousel-item:nth-child(8) {
                            background-image: url('http://www.trilce.edu.pe/static/images/slides/banner-academias-23enero2020-bg.png');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                          }*/

        .carousel-item:nth-child(12) {
            background-image: url('http://www.trilce.edu.pe/static/images/slides/banner-academia-17012020-bg.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .carousel-item:nth-child(13) {
            background-image: url('/static/images/slides/banner-academia-19112019-bg.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .carousel-item:nth-child(14) {
            background-image: url('/static/images/academia/banners_2025_enero/banner_cato/banner-catolica-home-2025-MOBILE_11zon.webp');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .carousel-item:nth-child(15) {
            background-image: url('/static/images/slides/banner-academia-19112019-bg.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .carousel-item:nth-child(16) {
            background-image: url('/static/images/slides/banner-academias-ciclo-repaso-sm.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .carousel-item:nth-child(17) {
            background-image: url('/static/images/slides/banner-academias-1.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .carousel-item {
            text-align: center;
            background-image: url('/static/images/slides/fondo-thumb.png');
            background-repeat: repeat;
        }

        @media (max-width: 768px) {
            header .nav-burger ul {
                position: absolute;
                z-index: 99999;
                width: 100vw;
                background-color: #fff;
                text-align: center;
                margin-top: 68px;
                top: 0;
                opacity: 0;
                overflow: hidden;
                height: 0;
                -webkit-transition: all .1s ease-in-out;
                transition: all .1s ease-in-out;
                box-shadow: 0px 0px 2px #000;
                right: -15px !important;
                left: auto !important;
            }

            .container-padding-mobile span {
                margin-left: 10px;
            }
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



            #modalTrilceHome .modal-dialog {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }

        #carouselTrilceAcademiaMovil a,
        #carouselTrilceAcademiaMovil a:link,
        #carouselTrilceAcademiaMovil a:visited,
        #carouselTrilceAcademiaWeb a,
        #carouselTrilceAcademiaWeb a:link,
        #carouselTrilceAcademiaWeb a:visited {
            color: white !important;
        }

        .title {
            font-size: 2.4rem;
            font-family: CaeciliaLTPro-75Bold;
            font-weight: 700;
            color: #53565a;
        }

        /* Modal container - hidden by default */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
        }

        /* Close button */
        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            color: #aaa;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
        }

        /* Clickable image */
        .modal-content img {
            width: 100%;
            cursor: pointer;
        }
    </style>

    @include('academia.partials.modal.ads')
    <!-- <div class="banner__loader">
                          <div class="banner__loader-title"></div>
                          <div class="banner__loader-line"></div>
                          <div class="banner__loader-line"></div>
                        </div> -->

    <!-- <div class="index-banners index-banners--colegio"> -->

    <!-- {{-- @include('academia.partials.banners.all') --}}
                              @foreach ($banners as $banner)
    @if (strtotime($banner->start) < time() && strtotime($banner->expire) > time())
    {!! $banner->content !!}
    @endif
    @endforeach -->
    <!-- Modal Structure -->

    <div id="carouselTrilceAcademiaWeb" class="carousel web slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            @php
                $firstBanner = $banners->first(); // Obtiene el banner con menor posición
            @endphp

            @foreach ($banners as $banner)
                <div class="carousel-item {{ $banner->id === $firstBanner->id ? 'active' : '' }}">
                    @if ($banner->content && $banner->content !== '#')
                        <a target="_blank" href="{{ $banner->content }}">
                    @endif
                    <img src="{{ asset($banner->file_desktop_url) }}" alt="{{ $banner->title ?: 'Academia Trilce' }}">
                    @if ($banner->content && $banner->content !== '#')
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselTrilceAcademiaWeb" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#carouselTrilceAcademiaWeb" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>

    <div id="carouselTrilceAcademiaMovil" class="carousel mobile slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $banner->id === $firstBanner->id ? 'active' : '' }}">
                    @if ($banner->content && $banner->content !== '#')
                        <a target="_blank" href="{{ $banner->content }}">
                    @endif
                    <img src="{{ asset($banner->file_mobile_url) }}" alt="{{ $banner->title ?: 'Academia Trilce' }}">
                    @if ($banner->content && $banner->content !== '#')
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselTrilceAcademiaMovil" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#carouselTrilceAcademiaMovil" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>

    <div class="nuevos-i" id="inicios">
        <div class="row center-xs">
            <div class="col-xs-9 col-sm-11 col-md-10 start-xs nuevos-i-title">
                <div class="box">
                    <h1 class="title">Academia Trilce</h1>
                    <p>Trilce es la academia preuniversitaria de elección, especializada en la preparación de estudiantes
                        para los exámenes de admisión de universidades como San Marcos (UNMSM), la UNI y la Católica (PUCP),
                        garantizando el éxito en su educación superior y en sus futuras carreras. Además, es importante
                        destacar que nuestra preparación para San Marcos es igualmente válida para todas las universidades
                        del Perú.</p>
                    <br><br>
                    <h2>Inicios</h2>
                    <p>Elige la preparación preuniversitaria exclusiva que estás buscando.</p>
                </div>
            </div>
            <div
                class="row nuevos-i-box boxi col-xs-12 col-sm-11 col-md-10 col-lg-10 between-xs center-sm center-md center-lg block-effecthover">
                <div class="block-effecthover-item recta">
                    <a href="/academia/preparacion-uni">
                        <div class="nuevos-i-top">
                            <img src="/static/images/academia/svg/logo-uni.svg" alt="UNI">
                            <h4>Preparación</h4>
                            <h3>UNI</h3>
                        </div>
                    </a>
                </div>
                <div class="block-effecthover-item recta">
                    <a href="/academia/preparacion-san-marcos">
                        <div class="nuevos-i-top">
                            <img src="/static/images/academia/svg/logo-unmsm.svg" alt="UNMSM">
                            <h4>Preparación</h4>
                            <h3>San Marcos</h3>
                        </div>
                    </a>
                </div>
                <div class="block-effecthover-item recta">
                    <a href="/academia/preparacion-pucp">
                        <div class="nuevos-i-top">
                            <img src="/static/images/academia/svg/logo-pucp.svg" alt="PUCP">
                            <h4>Preparación</h4>
                            <h3>Católica</h3>
                        </div>
                    </a>
                </div>

                <div class="block-effecthover-item recta">
                    <a href="/academia/ciclo-escolar">
                        <div class="nuevos-i-top">
                            <img src="/static/images/academia/svg/icono-ciclo-escolar.svg" alt="PUCP">
                            <h4>Ciclo</h4>
                            <h3>Escolar</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

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
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Show the modal when the page loads
        window.onload = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- /*************************************** */ -->
    <!-- SCRIPT PARA LLAMADO DE UNIVERSIDAD Y CICLO  -->
    <!-- /*************************************** */ -->
    <script>
        // variable global, para mantener el estado !! //
        var globarService = {
            ACASM: [],
            ACAUN: [],
            ACACA: []
        };
        //-----------------------------------------------------
        // ------------------ Connection ----------------------!!
        const cnnAjax = async (path, method, headers = null, data = null) => {

            const rute = "https://intranet.trilce.edu.pe/api/";
            const options = setOptions(`${rute}${path}`, method, headers, data);

            try {
                return await $.ajax({
                    ...options,
                    success: data => data,
                    error: err => console.warn(err)
                });
            } catch (error) {
                return {
                    response: null,
                    status: "error",
                    message: error
                };
            }
        };

        const setOptions = (url, method, headers, data) => {
            if (!!data) {
                return {
                    url,
                    method,
                    headers,
                    data
                };
            }
            return {
                url,
                method,
                headers
            };
        };
        // ------------------ End Conection ----------------------!!

        const getAtencion = async () => {
            const path = "Cliente/Publico/ServicioAtencion";
            const method = "GET";
            const resp = await cnnAjax(path, method);
            if (!!resp) {
                resp.map(item => {
                    switch (item.SERVICIO) {
                        case "ACASM":
                            globarService.ACASM.push(item);
                            break;
                        case "ACAUN":
                            globarService.ACAUN.push(item);
                            break;
                        case "ACACA":
                            globarService.ACACA.push(item);
                            break;
                        default:
                            break;
                    }
                });
            }
            console.log("Repuesta GET de la función getAtencion", globarService);
            setUserStorage(globarService);
        };

        getAtencion();

        //---------------------------- lcoal storage --------------------------------
        /**
         * valida el tipo de valor de una variable !!
         * @param {any} value El valor a evaluar
         * @param {string} type el tipo de valor al que se va a evaluar
         */
        const validateType = (value, type) => typeof value === type;

        // variable que chekea si una variable tiene algo !!
        // regresa false si es nulo el valor, regresar verdadero si tiene algo
        const noIsNull = value => !!value && value !== "undefined" && value !== null;

        const objectToString = obj => {
            return !!obj && validateType(obj, "object") ? JSON.stringify(obj) : obj;
        };

        // convierte un string a objeto valido !!
        const stringToObject = str => {
            if (!noIsNull(str)) return str;
            return JSON.parse(str);
        };

        const SERVICIO = "servicio";

        // regresa los datos del usuario !!
        const getUserStorage = () => {
            const serverItem = localStorage.getItem(SERVICIO);
            return !!serverItem ? stringToObject(serverItem) : {};
        };

        // agrega los datos del usuario al storage !!
        const setUserStorage = data => {
            localStorage.setItem(SERVICIO, objectToString(data));
        };

        // elimina usuario del storage !!
        const removeUserStorage = () => {
            localStorage.removeItem(SERVICIO);
        };
    </script>


    @include('academia.partials.card_bottom')
@endsection
@section('scripts')
    page = 'index';

    <!-- var modal_open = [

                        @if (!session('enrollment') && !session('contact') && !session('olympics'))
    '#modal-ads',
    @endif

                        @if (session('enrollment'))
    '#modal-1',
    @endif

                        @if (session('contact'))
    '#modal-1',
    @endif

                        @if (session('olympics'))
    '#modal-1'
    @endif

                        ]; -->

    @parent

@endsection