{{ !($breadcrumbs = Breadcrumbs::render('academia-aboutus')) }}

<style>
    .subtitulo_articulo {
        font-family: 'Geogrotesque-RG' !important;

    }

    .titulo_articulo {
        font-size: 24px;
        font-family: 'Geogrotesque-SmBd' !important;
        padding: 0px 35px 10px 35px;
        margin: 0px;
    }

    .subtitulo_articulo {
        font-size: 14px;
        padding: 0px 35px 0px 35px;
        line-height: 18px;
        text-align: justify
    }

    .about-vm--item {
        padding: 0 1vw !important;
    }

    .contenedor_articulo {
        background-color: #F8F8F8;
        width: 240px;
        height: 250px;
        color: #ff6334 !important;
    }

    .contenedor_articulo:hover {
        background-color: #ff6334;
        width: 240px;
        height: 250px;
    }

    .contenedor_articulo>h2 {
        color: #ff6334 !important;
    }

    .contenedor_articulo:hover>h2 {
        color: #FFFFFF !important;
    }

    .contenedor_articulo>p {
        color: #53565A !important;
    }

    .contenedor_articulo:hover>p {
        color: #FFFFFF !important;
    }

    .seccion_icono1 {
        width: 50px;
        height: 50px;
        margin: 32px 0px 10px 35px;
        background: url('https://www.trilce.edu.pe/static/images/svg/n_mision_b_n.svg') no-repeat;
        display: inline-block;
    }

    .contenedor_articulo:hover>.seccion_icono1 {
        background: url('https://www.trilce.edu.pe/static/images/svg/n_mision_b.svg') no-repeat;
        filter: none;
    }

    .seccion_icono2 {
        width: 50px;
        height: 50px;
        margin: 32px 0px 10px 35px;
        background: url('https://www.trilce.edu.pe/static/images/svg/n_vision_b_n.svg') no-repeat;
        display: inline-block;
    }

    .contenedor_articulo:hover>.seccion_icono2 {
        background: url('https://www.trilce.edu.pe/static/images/svg/n_vision_b.svg') no-repeat;
    }

    .seccion_icono3 {
        width: 50px;
        height: 50px;
        margin: 32px 0px 10px 35px;
        background: url('https://www.trilce.edu.pe/static/images/svg/n_valores_b_n.svg') no-repeat;
        display: inline-block;
    }

    .contenedor_articulo:hover>.seccion_icono3 {
        background: url('https://www.trilce.edu.pe/static/images/svg/n_valores_b.svg') no-repeat;
    }

    .seccion_icono4 {
        width: 50px;
        height: 50px;
        margin: 32px 0px 10px 35px;
        background: url('https://www.trilce.edu.pe/static/images/svg/n_medalla_b_n.svg') no-repeat;
        display: inline-block;
    }

    .contenedor_articulo:hover>.seccion_icono4 {
        background: url('https://www.trilce.edu.pe/static/images/svg/n_medalla_b.svg') no-repeat;
    }

    .class_ul {
        list-style: disc !important;
        color: #53565A !important;
        font-size: 12px;
        padding: 0px 0px 0px 20px !important;
        line-height: 18px;
        text-align: justify;
    }

    .class_ul:hover,
    .contenedor_articulo:hover>div>ul>li {
        color: #fff !important;
    }
</style>

@extends('academia.layouts.template')
@section('title', 'Acerca de Nosotros')
@section('content')

    <div class="header-double-top">
        <div class="row">
            <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
            <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-aboutus about-venues-sec"></div>
            <div class="header-double-border"></div>
            <div class="header-double-title">
                <h1>Nosotros</h1>
                <!--        <p>Trilce desde sus inicios. <br> #EstoEsTrilce</p>-->
            </div>
        </div>
    </div>

    <div class="row col-xs-12 center-xs about-container container-base">
        <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

            <div class="row col-xs-12 about-history">
                <div class="row col-xs-12 xs-hide col-sm-4 about-history--left">
                    <img src="{{ url('/static/images/academia/img-nosotros-academia.jpg') }}" alt="Sobre nosotros">
                </div>
                <div class="col-xs-12 col-sm about-history--right">
                    <h1 class="about-history--title">Nuestra historia</h1>
                    <div class="about-history--pcontainer">
                        <p>
                            El 7 de diciembre de 1979, un grupo de amigos, estudiantes de la UNI, decidieron fundar una
                            academia preuniversitaria para postulantes a esa universidad; fue así que el primer lunes de
                            enero de 1980 y con menos de una centena de estudiantes, la Academia Trilce abrió sus puertas en
                            un local ubicado en Jr. Callao 209, Cercado de Lima.
                        </p>

                        <p>
                            Siete años después Trilce contaba con más de 3000 alumnos y se dedicaba también a la preparación
                            para San Marcos y Católica en sus respectivos locales exclusivos.
                        </p>

                        <p>
                            En el año 1996, Trilce fundó su primer colegio en uno de sus locales, ubicado en Miraflores. Con
                            esto, Trilce confirmó su liderazgo y excelencia académica con un método de enseñanza escolar
                            totalmente innovador.
                        </p>

                        <p>
                            Actualmente, Trilce cuenta con 18 colegios en Lima, 6 en provincias, academias, 2000
                            trabajadores y más de 24 000 alumnos.
                        </p>
                    </div>
                </div>
            </div>
            <hr class="grayhr2" style="display: none;" />
            <div class="row col-xs-12 center-xs about-vm" style="display: none;">
                <div class="row col-xs-12 col-sm-11 start-xs start-sm">
                    <div class="row col-xs-12 col-sm about-vm--item">
                        <h2 class="item-title pb-3 ">Visión</h2>
                        <p class="item-p">Hacer de la educación un medio que logre un mundo mejor, para vivir generando el
                            cambio que nuestra sociedad necesita.</p>
                    </div>
                    <div class="col-xs-12 col-sm about-vm--item">
                        <h2 class="item-title pb-3 ">Misión</h2>
                        <p class="item-p">Cambiar la vida de nuestros estudiantes y colaboradores, generándoles pasión por
                            alcanzar sus sueños.</p>
                    </div>
                </div>
            </div>

            <div class="row col-xs-12 center-xs about-vm">
                <div class="row col-xs-12 col-sm-12 start-xs start-sm">
                    <div class="col-xs-12 col-sm-3 about-vm--item">
                        <article class="contenedor_articulo wow fadeIn"
                            style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1;">
                            <div class="seccion_icono1"></div>
                            <h2 class="white_text font-weight-bold titulo_articulo">Misión</h2>
                            <p class="text-justify white_text subtitulo_articulo">Cambiar la vida de nuestros estudiantes y
                                colaboradores, generándoles pasión por alcanzar sus sueños.</p>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3 about-vm--item">
                        <article class="contenedor_articulo wow fadeIn"
                            style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1;">
                            <div class="seccion_icono2"></div>
                            <h2 class="white_text font-weight-bold titulo_articulo">Visión</h2>
                            <p class="text-justify white_text subtitulo_articulo">Hacer de la educación un medio que logre
                                un mundo mejor para vivir, promoviendo el cambio que nuestra sociedad necesita.</p>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3 about-vm--item">
                        <article class="contenedor_articulo wow fadeIn"
                            style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1;">
                            <div class="seccion_icono4"></div>
                            <h2 class="white_text font-weight-bold titulo_articulo">Propósito</h2>
                            <p class="text-justify white_text subtitulo_articulo">Brindar una excelente educación a los
                                alumnos, para lograr que cumplan sus sueños.</p>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3 about-vm--item">
                        <article class="contenedor_articulo wow fadeIn"
                            style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1;">
                            <div class="seccion_icono3"></div>
                            <h2 class="white_text font-weight-bold titulo_articulo">Valores</h2>
                            <div class="text-justify white_text subtitulo_articulo">
                                <ul class="class_ul">
                                    <li>Innovación</li>
                                    <li>Respeto</li>
                                    <li>Solidaridad</li>
                                    <li>Sinceridad</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <hr class="grayhr2" style="display: none;" />
            <div class="row col-xs-12 start-xs about-v" style="display: none;">
                <div class="col-xs-12 start-xs">
                    <h2 class="about-v--title">Nuestros valores</h2>
                </div>
                <div class="row col-xs-12 center-xs about-v--vgrid">
                    {{-- (.vgrid-item>)*15 --}}
                    {{-- (.vgrid-item>img[src='{{ url('/static/images/colegio/svg/ico-nosotros-0$@1.svg') }}']+)*15 --}}

                    {{-- (.vgrid-item>(.row.col-xs-12.start-xs>((.row.col-xs-2.col-sm-12.vgrid-item--img>img[src='{{ url('/static/images/colegio/svg/ico-nosotros-0$@1.svg') }}'])+(.row.col-xs-10.col-sm-12.vgrid-item--text>(h3>{valor})+(p>{texto})))))*15 --}}

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-01.svg') }}" alt=""></div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Generosidad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Con mi ayuda lograrás tus metas.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-02.svg') }}" alt=""></div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Honestidad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>El éxito solo perdura con la verdad.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-03.svg') }}" alt=""></div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Puntualidad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Para hacerlo bien, lo hago a tiempo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-04.svg') }}" alt=""></div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Responsabilidad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Si hay que hacerlo, depende de mí.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-05.svg') }}" alt=""></div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Fortaleza</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Las caídas son solo peldaños en el ascenso.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-06.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Identidad nacional</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Yo soy el Perú, por eso lo valoro y respeto.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-07.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Orden</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Soy eficiente porque soy ordenado.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-08.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Justicia</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Dar a cada uno lo que se merece y corresponde.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-09.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Honradez</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Si no es mío, lo cuido y lo devuelvo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-10.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Perseverancia</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Nunca dejaré de luchar por ser mejor.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-11.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Amistad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Un amigo es un nuevo hermano,</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-12.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Solidaridad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>No me tiene que sobrar para compartir.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-13.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Gratitud</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Si hago un favor, no lo recuerdo; si lo recibo, nunca lo olvido.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-14.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Respeto</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Tus derechos y deberes son tan importantes como los míos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vgrid-item">
                        <div class="row col-xs-12 start-xs align-content-baseline">
                            <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img
                                    src="{{ url('/static/images/colegio/svg/ico-nosotros-15.svg') }}" alt="">
                            </div>
                            <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                                <div class="col-xs-12">
                                    <h3>Lealtad</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>Si confías en mí, no te defraudaré.</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>

        </div>
    </div>


    @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'about_us';
    @parent
@endsection