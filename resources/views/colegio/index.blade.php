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

            <div class="carousel-item active">
                <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                    <img src="{{ asset('static/images/colegio/banner-matrIcula-2025_11zon.webp') }}"
                        alt="Matricula 2025 - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/banner-primer-puesto-pucp-computo-general-colegio.png') }}"
                    alt="Primer Puesto PUCP Cómputo General - Trilce">
            </div>


            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
                    <img src="{{ asset('static/images/slides/banner-charlas-informativas-2024.png') }}"
                        alt="Charlas Informativas - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
                    <img src="{{ asset('static/images/slides/banner-sede-nana-2-2024.png') }}"
                        alt="Sede Ñaña - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025-villa-maria" target="_blank">
                    <img src="{{ asset('static/images/colegio/banners/banner-sede-vmt.webp') }}"
                        alt="Sede Villa María - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/banner-home-45-anios-colegios2.png') }}" alt="Trilce - 45 años">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/1-banner-exalumnos-2024_1.png') }}" alt="Exalumnos - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/banner-primeros-puestos3.png') }}" alt="Primeros Puestos - Trilce">
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                    <img src="{{ asset('static/images/slides/banner-plana-docente_11zon.webp') }}"
                        alt="Plana Docente - Trilce">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.tiktok.com/@trilce.colegios" target="_blank">
                    <img src="{{ asset('static/images/slides/14-banner-tiktok.png') }}" alt="TikTok Trilce">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                    <img src="{{ asset('static/images/slides/5-banner-seguro-gratuito3.png') }}"
                        alt="Seguro Gratuito - Trilce">
                </a>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/6-banner-logros-joao-r.png') }}" alt="Logros - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/7-banner-naomi.png') }}" alt="Alumna Naomi Claros - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/8-banner-ser-mejores-personas3.png') }}"
                    alt="Campaña Ser Mejores Personas - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/9-banner-medioambiente1.png') }}" alt="Medio Ambiente - Trilce">
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
                    <img src="{{ asset('static/images/colegio/banner-matrIcula-2025-MOBILE_11zon.webp') }}"
                        alt="Matricula 2025 - Trilce - 45 años">
                </a>
            </div>


            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/banner-primer-puesto-pucp-computo-general-colegio-MOBILE.png') }}"
                    alt="Primer Puesto PUCP Cómputo General - Trilce">
            </div>


            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
                    <img src="{{ asset('static/images/slides/banner-charlas-informativas-2024-MOBILE.png') }}"
                        alt="Charlas Informativas - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
                    <img src="{{ asset('static/images/slides/banner-sede-nana-2-2024-MOBILE.png') }}"
                        alt="Sede Ñaña - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025-villa-maria" target="_blank">
                    <img src="{{ asset('static/images/colegio/banners/banner-sede-vmt-mobile.webp ') }}"
                        alt="Sede Villa María - Trilce - 45 años">
                </a>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/banner-home-45-anios-colegios2-MOBILE.png') }}"
                    alt="Trilce - 45 años">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/1-banner-exalumnos-2024_1-MOBILE.png') }}"
                    alt="Exalumnos - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/banner-primeros-puestos3-MOBILE.png') }}"
                    alt="Primeros Puestos - Trilce">
            </div>


            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                    <img src="{{ asset('static/images/slides/banner-plana-docente-MOBILE_11zon.webp') }}"
                        alt="Plana Docente - Trilce">
                </a>
            </div>


            <div class="carousel-item">
                <a href="https://www.tiktok.com/@trilce.colegios" target="_blank">
                    <img src="{{ asset('static/images/slides/14-banner-tiktok-MOBILE.png') }}" alt="TikTok Trilce">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                    <img src="{{ asset('static/images/slides/5-banner-seguro-gratuito3-MOBILE.png') }}"
                        alt="Seguro Gratuito - Trilce">
                </a>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/6-banner-logros-joao-r-MOBILE.png') }}" alt="Logros - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/7-banner-naomi-MOBILE.png') }}"
                    alt="Alumna Naomi Claros - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/8-banner-ser-mejores-personas3-MOBILE.png') }}"
                    alt="Campaña Ser Mejores Personas - Trilce">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('static/images/slides/9-banner-medioambiente1-MOBILE.png') }}"
                    alt="Medio Ambiente - Trilce">
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselTrilceColegioMovil" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#carouselTrilceColegioMovil" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>

    </div>

    <div class="seccion-matricula container py-5">
        <div class="row align-items-start responsive_ch">
            <div class="col-md-3 text-md-start text-center respon_text" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="100" data-aos-easing="ease-in-sine">
                <h2 class="text_matricula v2">Matrícula 2025</h2>
            </div>
            <div class="col-md-9 responsive_force">
                <div class="row g-3 justify-content-center response_mobil">
                    <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-down" data-aos-duration="900"
                        data-aos-delay="100">
                        <div class="card-matricula color-nuevo">
                            <div class="icono-matricula">
                                <i class="las la-laugh-beam la-4x"></i>
                            </div>
                            <p class="Alumno">Alumno <span class="span">nuevo</span></p>
                        </div>
                    </div>

                    <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="100">
                        <div class="card-matricula color-traslado">
                            <div class="icono-matricula">
                                <i class="las la-map-signs la-4x"></i>
                            </div>
                            <p class="Alumno">Alumno <span class="span">traslado</span></p>
                        </div>
                    </div>

                    <div class="col-10 col-sm-6 col-md-4 respon_card_tk" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-delay="100">
                        <div class="card-matricula color-regular">
                            <div class="icono-matricula">
                                <i class="las la-user-check la-4x"></i>
                            </div>
                            <p class="Alumno">Alumno<span class="span">regular</span><span
                                    class="span_especial">(actual)</span></p>
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
                <div class="contenido_de" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">
                    <img src="/static/images/colegio/trilce_img.webp" alt="Imagen derecha" class="img-fluid img_tri">
                </div>
            </div>
        </div>
    </div>

    <div class="seccion-matricula container py-5">
        <div class="d-flex align-items-center">
            <!-- Columna izquierda - 60% -->
            <div class="col-md-6 d-flex justify-content-end">
                <div class="contenido_iz text-end iz_de">
                    <img src="/static/images/colegio/matricula2025.svg" alt="Matrícula 2025" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
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






    <!-- 769 X 960  MODALES POP UP-->
    <div class="modal fade modern-modal modal_2025" id="modalTrilceHome" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modern-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                        <img class="modal-web" src="{{ url('/static/images/colegio/modal-mat-2025.webp') }}"
                            alt="Trilce">
                    </a>
                    <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank">
                        <img class="modal-movil" src="{{ url('/static/images/colegio/modal-mat-2025.webp') }}"
                            alt="Trilce">
                    </a>
                </div>
            </div>
        </div>
    </div>

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
