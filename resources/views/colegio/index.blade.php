{{ !($breadcrumbs = Breadcrumbs::render('colegio-index')) }}
@extends('colegio.layouts.template')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/main_colegio_index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    @include('colegio.partials.modal.ads')

    <!--   <div class="banner__loader">
                            <div class="banner__loader-title"></div>
                            <div class="banner__loader-line"></div>
                            <div class="banner__loader-line"></div>
                          </div> -->

    <!--  <div class="index-banners index-banners--colegio"> -->
    <!--  {{-- @include('colegio.partials.banners.all') --}}
                            
                            @foreach ($banners as $banner)
    @if (strtotime($banner->start) < time() && strtotime($banner->expire) > time())
    {!! $banner->content !!}
    @endif
    @endforeach -->

    <h1 class="visually-hidden">TRILCE</h1>




    <div id="carouselTrilceColegioWeb" class="carousel web slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            @php
                $firstBanner = $banners->first(); // Obtiene el banner con menor posición
            @endphp
    
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $banner->id === $firstBanner->id ? 'active' : '' }}">
                    @if ($banner->content) 
                        <a target="_blank" href="{{ $banner->content }}">
                            <img src="{{ asset($banner->file_desktop_url) }}" 
                                 alt="{{ $banner->title ?: 'Banner de Trilce' }}">
                        </a>
                    @else
                        <img src="{{ asset($banner->file_desktop_url) }}" 
                             alt="{{ $banner->title ?: 'Banner de Trilce' }}">
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
                    @if ($banner->content)
                        <a target="_blank" href="{{ $banner->content }}">
                            <img src="{{ asset($banner->file_mobile_url) }}" 
                                 alt="{{ $banner->title ?: 'Banner de Trilce' }}">
                        </a>
                    @else
                        <img src="{{ asset($banner->file_mobile_url) }}" 
                             alt="{{ $banner->title ?: 'Banner de Trilce' }}">
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
    
    

    <div class="nuevos-i container-base">
        <div class="row center-xs">
            <div class="row col-xs-12 col-sm-10 colegio-cardsv2">

                <div class="colegio-cardsv2__title">
                    <div class="colegio-cardsv2__herotitle"><span>Matrícula<br class="salt"> 2025</span></div>
                    <div class="colegio-cardsv2__herosubtitle" style="display: none"><span>Elige la modalidad que más
                            se<br class="salt">adecúe a tus necesidades</span></div>
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
                    <p style="text-align: justify;" class="Pity">Nuestros 45 años de experiencia brindando una educación
                        de calidad nos han convertido en una de las organizaciones educativas más grandes del país. Con 18
                        sedes en Lima y 6 en provincia, nuestro principal objetivo es brindar educación de alta calidad y
                        fomentar el liderazgo.</p>
                </div>

                <div class="colegio-cardsv2-items colegio-cardsv2-items--hovereffect">
                    <div class="row col-xs-12 center-xs admission-ads">
                        <div class="admission-ads__container">
                            <div class="row col-xs-12">
                                <div class="col-xs-12 col-sm">
                                    <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank"
                                        class="admission-ads__link shory">
                                        <h1>¿Quieres saber más sobre nuestro<br>proceso de matrícula 2025?</h1>
                                        <button
                                            class="admission-ads__container-cta banner__button-cta banner__button-cta--white"
                                            type="button" name="button">
                                            Regístrate aquí
                                        </button>
                                    </a>
                                </div>

                                <div class="row col-xs-4 bottom-xs center-xs xs-hide ads-sub">
                                    <img class="nina-banner"
                                        src="{{ url('/static/images/colegio/propuesta-feb/nina-banner.png') }}"
                                        alt="Proceso de Matrícula 2024">
                                </div>
                            </div>
                        </div>
                    </div>
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

    @include('colegio.partials.card_bottom')
@endsection
@section('scripts')
    page = 'index';
    <!-- var modal_open = [
                        '#modal-ads',
                        ]; -->

    @parent
@endsection