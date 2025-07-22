{{!$breadcrumbs = Breadcrumbs::render('colegio-venue', $data->name) }}
@extends('colegio.layouts.template')
@section('title', $data->name)
@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
        integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin="" />
    <style>
        .venue-info-title {
            height: auto !important;
            color:#ff4e0e !important;
        }

        #mapid {
            height: 100%;
        }

        .leaflet-control-attribution {
            opacity: .6;
        }

        /* estilos para nueva vista de inversiòn sedes */

        .investment-container-sup {
            background: transparent;
        }

        .investment-container-sup .investment-block-item {
            background-color: transparent;
        }

        .investment-container-sup .investment-block-item .venue-colegio-title-span {
            font-size: 1rem;
        }

        .investment-block-item {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: left;
        }

        .investment-block-item>div {
            width: 20%;
            text-align: center;
        }

        @media (max-width: 767px) {
            .investment-title {
                height: 70px !important;
                display: none;
            }
        }

        #cuota-ingreso,
        #matricula-pensiones,
        #pensiones-semipresenciales,
        #pensiones-presenciales,
        .pensiones-semipresenciales-callao,
        .pensiones-semipresenciales-chorrillos,
        .pensiones-semipresenciales-comas,
        .pensiones-semipresenciales-salaverry,
        .pensiones-semipresenciales-los-olivos,
        .pensiones-semipresenciales-maranga,
        .pensiones-semipresenciales-pro,
        .pensiones-semipresenciales-roma,
        .pensiones-semipresenciales-huancayo,
        .pensiones-semipresenciales-chanchamayo,
        .pensiones-semipresenciales-arequipa,
        .pensiones-semipresenciales-surco,
        .pensiones-semipresenciales-marsano,
        .pensiones-semipresenciales-san-isidro,
        .pensiones-semipresenciales-villa-el-salvador,
        .pensiones-semipresenciales-villa-maria,
        .pensiones-semipresenciales-san-juan-de-lurigancho-wisse,
        .mapid-brena,
        .mapid-callao,
        .mapid-chorrillos,
        .mapid-comas,
        .mapid-jesus-maria,
        .mapid-la-molina,
        .mapid-los-olivos,
        .mapid-maranga,
        .mapid-nana,
        .mapid-pro,
        .mapid-salamanca,
        .mapid-san-isidro,
        .mapid-san-juan-de-lurigancho,
        .mapid-san-juan-de-lurigancho-wisse,
        .mapid-santa-anita,
        .mapid-roma,
        .mapid-marsano,
        .mapid-villa-el-salvador,
        .mapid-villa-maria,
        .mapid-arequipa,
        .mapid-chiclayo,
        .mapid-chanchamayo,
        .mapid-huancayo,
        .mapid-piura,
        .mapid-trujillo {
            display: none
        }

        .investment-block-item:nth-child(1) .pensiones-semipresenciales-marsano .venue-colegio-title-span:nth-child(1) {
            display: none;
        }

        .investment-block-item:nth-child(2) .pensiones-semipresenciales-marsano .venue-colegio-title-span:nth-child(2) {
            display: none;
        }

        .investment-block-item:nth-child(1) .pensiones-semipresenciales-san-juan-de-lurigancho-wisse .venue-colegio-title-span:nth-child(1) {
            display: none;
        }

        .investment-block-item:nth-child(2) .pensiones-semipresenciales-san-juan-de-lurigancho-wisse .venue-colegio-title-span:nth-child(2) {
            display: none;
        }

        /* 
                .investment-block-item:nth-child(1) .pensiones-semipresenciales-san-juan-de-lurigancho .venue-colegio-title-span:nth-child(1){
                    display: none;
                }
                .investment-block-item:nth-child(2) .pensiones-semipresenciales-san-juan-de-lurigancho .venue-colegio-title-span:nth-child(2){
                    display: none;
                } */

        .map-container div {
            height: 100%;
            width: 100%
        }

        .map-container div iframe {
            height: 100%;
            width: 100%
        }
    </style>

    <div class="header-double-image">
        <div class="col-xs-12 header-double-image-desk">
            <img src="{{ url('/static/images/colegio/pages-banners/banner-sedes.jpg') }}" alt="">
        </div>
        <div class="header-double-image-mobile">
            <img src="{{ url('/static/images/colegio/pages-banners/banner-sedes-movil.jpg') }}" alt="">
        </div>
    </div>

    <div class="row col-xs-12 center-xs venue">
        <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
            <div class="col-xs-12 col-md-6 container-base venue-info-container">
                <div class="col-xs-12 venue-info-title">
                    <h1 class="colegio h1_texto">{{ $data->name}}</h1>
                    <p class="venue-info-parrafo">{{ $data->description}}</p>
                </div>
                <div class="row col-xs-12 col-sm-12 table-responsive" id="tableade">
                    <table class="venue-table">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($address as $k)
                                <tr>
                                    <td data-label="Nivel">{!! $k->grades !!}</td>
                                    <td data-label="Dirección">{!! $k->address !!}</td>
                                    <td data-label="Teléfono">{{ $k->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="venue-content-editable">
                        {{-- {!!$data->content!!} --}}

                        {{-- <h2 style="display: none">Horario de clases</h2>

                        <table style="display: none">
                            <thead>
                                <tr>
                                    <th>Secci&oacute;n</th>
                                    <th>Ingreso</th>
                                    <th>Salida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Primaria 1.&deg; a 6.&deg;</td>
                                    <td>7:45 a. m.</td>
                                    <td>2:20 p. m.</td>
                                </tr>
                                <tr>
                                    <td>Secundaria 1.&deg; a 3.&deg;</td>
                                    <td>7:45 a. m.</td>
                                    <td>2:30 p. m.</td>
                                </tr>
                                <tr>
                                    <td>Secundaria 4.&deg; y 5.&deg;</td>
                                    <td>7:45 a. m.</td>
                                    <td>3:15 p. m.</td>
                                </tr>
                            </tbody>
                        </table>

                        <h2>
                            <br>Medios de pago
                        </h2> --}}

                        {!!
        $x = str_replace(
            [
                '[CONTINENTAL]',
                '[BCP]',
                '[YAPE]',
                '[SCOTIABANK]'
            ],
            [
                '<a class="method-venue" href="https://drive.google.com/file/d/1lXJfYP4Czj_N7NxvnUOH4NuFIvdpP_mI/view" target="_blank"><img src="https://www.trilce.edu.pe/static/images/colegio/logo-colegio-bbva.svg" style="width: 100%; height:auto; max-width: 80px; margin-right: 50px" alt="Guía de pagos para BBVA"></a>',
                '<a class="method-venue" href="https://drive.google.com/file/d/1udhZ3WOfOxkqDfGwZDaWMxdR7HLKxRJC/view" target="_blank"><img src="/static/images/colegio/logo-colegio-bcp.svg" style="width: 100%; height:auto; max-width: 80px; margin-right: 50px" alt="Guía de pagos para BCP"></a>',
                '<a class="method-venue" href="https://www.trilce.edu.pe/l/guia-pagos-yape-colegio" target="_blank"><img src="/static/images/colegio/logo-yape-qvas-act.svg" style="width: 100%; height:auto; max-width: 50px; margin-right: 50px" alt="Guía de pagos para YAPE"></a>',
                '<a class="method-venue" href="https://drive.google.com/file/d/10g7RFYzjcKj-X8Vuzd21XUgfYeZBaacI/view" target="_blank"><img src="/static/images/colegio/logo-colegio-scotia.svg" style="width: 100%; height:auto; margin-right: 50px" alt="Guía de pagos para Scotiabank"></a>'
            ],
            $data->content
        )
                                !!}

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 map-container">

                <div class="mapid-brena">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.910338820324!2d-77.05147951194498!3d-12.049689851904288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8cfbfc71fb9%3A0x6906d7be3f086868!2sColegio%20Trilce%20Bre%C3%B1a!5e0!3m2!1ses-419!2spe!4v1604449867645!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-callao">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.769358354913!2d-77.13514778523884!3d-12.059383991458875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cb91a0e7c693%3A0xed4308d7ad0d7929!2sColegio%20Trilce%20Callao!5e0!3m2!1ses-419!2spe!4v1604449909050!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-chorrillos">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.642865039824!2d-77.01070268523739!3d-12.204686391362227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b759dd6d6c25%3A0x3d4140d60fde1ea3!2sColegio%20Trilce%20Villa!5e0!3m2!1ses-419!2spe!4v1604449949030!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-comas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31226.438274843033!2d-77.0713788604492!3d-11.953387399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cfd576be5895%3A0x7dab4f9df2e32113!2sColegio%20Trilce%20Comas!5e0!3m2!1ses-419!2spe!4v1604452493389!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-jesus-maria">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5513127290033!2d-77.03940684738784!3d-12.074362206920611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8f1e2a4b663%3A0x6997d36288891c20!2sColegio%20Trilce%20Jes%C3%BAs%20Mar%C3%ADa%20(Salaverry)!5e0!3m2!1ses-419!2spe!4v1604450158563!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-la-molina">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.576998984067!2d-76.96008458523869!3d-12.072598691450144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6fa238ff73f%3A0x975224b40479dfc9!2sCOLEGIO%20TRILCE%20LA%20MOLINA%20SECUNDARIA!5e0!3m2!1ses-419!2spe!4v1604450246269!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-los-olivos">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28217.720411375845!2d-77.0701794252651!3d-12.015737992430388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf1d108f73c3%3A0x51b820c799264ddb!2sColegio%20Trilce%20Los%20Olivos!5e0!3m2!1ses-419!2spe!4v1604450432820!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-maranga">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5154031238258!2d-77.09315488523868!3d-12.076827191447308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c96555db0599%3A0x3c0f9785d06c0fcd!2sColegio%20Trilce%20Maranga!5e0!3m2!1ses-419!2spe!4v1604450345226!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-nana">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.867511110017!2d-76.8256849!3d-11.9836682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c32b941a193f%3A0x74b476760a22712a!2zVHJpbGNlIMORYcOxYQ!5e0!3m2!1ses!2spe!4v1695786612228!5m2!1ses!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-pro">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.684298063663!2d-77.0755986852402!3d-11.92704499154703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d1b9340f28a3%3A0x4a464f7be351ebe0!2sColegio%20Trilce%20Pro!5e0!3m2!1ses-419!2spe!4v1604450450857!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-salamanca">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124847.46203918154!2d-77.05262444179688!3d-12.079038099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c64beb5088e5%3A0x93f37ae5d557e1a7!2sTRILCE%20de%20Salamanca!5e0!3m2!1ses-419!2spe!4v1604450517427!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-san-isidro">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.1643921818054!2d-77.0339655852385!3d-12.100895991431258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8144ec141fd%3A0xf1134f2ebaae51f0!2sTrilce!5e0!3m2!1ses-419!2spe!4v1604450586366!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-san-juan-de-lurigancho">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0025764896786!2d-76.99602928523971!3d-11.974323091515604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c569d971880d%3A0x4fd5a6a78a1a5e81!2sTrilce%20Wisse!5e0!3m2!1ses-419!2spe!4v1604450626163!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-san-juan-de-lurigancho-wisse">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0025764896786!2d-76.99602928523971!3d-11.974323091515604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c569d971880d%3A0x4fd5a6a78a1a5e81!2sTrilce%20Wisse!5e0!3m2!1ses-419!2spe!4v1604450626163!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-santa-anita">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.1560544364056!2d-76.95456448523916!3d-12.032775491476592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c4261472c9bb%3A0xd0d6a45362754458!2sColegio%20Trilce%20Santa%20Anita!5e0!3m2!1ses-419!2spe!4v1604451518713!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-roma">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5754828317195!2d-77.03450608523872!3d-12.07270279145005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c892c1495013%3A0x2047e7bf4107ff79!2sColegio%20Trilce%20Santa%20Beatriz%20(Roma)!5e0!3m2!1ses-419!2spe!4v1604451557172!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-marsano">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1040.591098262119!2d-76.98314024388188!3d-12.147422758063177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b86a4ab5e641%3A0x810451e605887a2a!2sTrilce%20Marsano!5e0!3m2!1ses!2spe!4v1696351245541!5m2!1ses!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-villa-el-salvador">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.400025009823!2d-76.95483338523725!3d-12.221171291351304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105bbd9fd19c5b7%3A0xaa64bd01c0627718!2sColegio%20Trilce!5e0!3m2!1ses-419!2spe!4v1604451757796!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-villa-maria">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.202033932606!2d-76.952108840255!3d-12.16664425327035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8e31535bcad%3A0xa807c03755bca204!2sTrilce%20COLEGIO!5e0!3m2!1ses-419!2spe!4v1604451837636!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-arequipa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.874772821442!2d-71.54734477080356!3d-16.39945979929233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5dd8d2a4c7%3A0xec6e612359dc171d!2sTrilce%20Arequipa!5e0!3m2!1ses-419!2spe!4v1604452039968!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-chiclayo">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.8894630605128!2d-79.84825338528024!3d-6.783304595096934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cef3b66674cb1%3A0x7319d46e3ecdb375!2sColegio%20Trilce%20de%20Chiclayo!5e0!3m2!1ses-419!2spe!4v1604452085081!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-chanchamayo">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.768374005793!2d-75.3277136852485!3d-11.055984992132208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910974bba380a291%3A0xf5afeb7361f4e4bc!2sColegio%20Trilce%20Chanchamayo!5e0!3m2!1ses-419!2spe!4v1604452135211!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-huancayo">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.676432480877!2d-75.22395048523886!3d-12.065769591454634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e96419d41b9cd%3A0x4078190470c496a4!2sColegio%20Trilce%20Huancayo!5e0!3m2!1ses-419!2spe!4v1604452169563!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-piura">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4727853253844!2d-80.62234523528826!3d-5.188108146235335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a106f9569161b%3A0xc5a1bf8d818ba2cb!2sColegio%20Trilce!5e0!3m2!1ses-419!2spe!4v1604452399481!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

                <div class="mapid-trujillo">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9969642388846!2d-79.03742788527205!3d-8.101789794167322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d9118248ea3%3A0x8c47ea8005843673!2sColegio%20Trilce!5e0!3m2!1ses-419!2spe!4v1604452448522!5m2!1ses-419!2spe"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>

            </div>
        </div>





    </div>

    @include('colegio.partials.ads')

    @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue_colegio';
    @parent

    <!--  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
            integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
            crossorigin=""></script>
            <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
            <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' /> -->

    <!-- <script type="text/javascript">

                var mymap = L.map('mapid').setView([-12.049882,-77.038304], 13);

                mymap.addControl(new L.Control.Fullscreen());

                L.tileLayer('https://api.tiles.mapbox.com/v4/static/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'pk.eyJ1IjoibWFya2V0aW5ndHJpbGNlIiwiYSI6ImNraDE4cjBoeDBjbDgyeHJ4YzVqMXN6dzIifQ.N3LhYTFQm2ozjBliqGvywg'
                //accessToken: 'pk.eyJ1IjoiemVudGlkbyIsImEiOiJjanNidW5oNzgwZWFrNDNvODdkYzRvb2RpIn0.tZbhzFp5-WPfsxvutTL00w'
                }).addTo(mymap);

                var greenIcon = L.icon({
                iconUrl: 'https://www.trilce.edu.pe/static/images/map-marker.svg',

                iconSize:     [50, 55], // size of the icon
                iconAnchor:   [30, 55], // point of the icon which will correspond to marker's location
                popupAnchor:  [-5, -55] // point from which the popup should open relative to the iconAnchor
                });

                @foreach ($address as $k)

                var marker = L.marker([{{ $k->logitude }},{{ $k->latitude }}], {icon: greenIcon}).addTo(mymap);
                marker.bindPopup(`<span style="color:#f4633a">{{ $data->name }}</span>  
                    <br>{!! $k->grades !!}
                    <br>{{!! $k->address !!}}
                    <br><i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> {{ $k->phone }}`).openPopup();
                @endforeach

            </script> -->

    <!--  <script type="text/javascript">
                if (window.location.href.indexOf("san-juan-de-lurigancho") != -1) {
                    $("#pensiones-semipresenciales").show();
                    $("#pensiones-presenciales").show();
                    $(".pensiones-semipresenciales-san-juan-de-lurigancho").show();
                    $("#pensiones").hide();
                    $("#matricula-pensiones").hide();

                }
            </script> -->

    <script type="text/javascript">
        if (window.location.href.indexOf("san-juan-de-lurigancho") != -1) {
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $(".pensiones-semipresenciales-san-juan-de-lurigancho").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho").show();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("callao") != -1) {
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $(".pensiones-semipresenciales-callao").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").show();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>
    <script type="text/javascript">
        if (window.location.href.indexOf("chorrillos") != -1) {
            $(".pensiones-semipresenciales-chorrillos").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").show();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("comas") != -1) {
            $(".pensiones-semipresenciales-comas").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").show();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("salaverry") != -1) {
            $(".pensiones-semipresenciales-salaverry").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").show();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("los-olivos") != -1) {
            $(".pensiones-semipresenciales-los-olivos").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").show();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("maranga") != -1) {
            $(".pensiones-semipresenciales-maranga").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").show();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("nana") != -1) {
            $(".pensiones-semipresenciales-nana").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").show();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("pro") != -1) {
            $(".pensiones-semipresenciales-pro").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").show();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("roma") != -1) {
            $(".pensiones-semipresenciales-roma").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").show();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("huancayo") != -1) {
            $(".pensiones-semipresenciales-huancayo").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").show();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("chanchamayo") != -1) {
            $(".pensiones-semipresenciales-chanchamayo").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").show();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("arequipa") != -1) {
            $(".pensiones-semipresenciales-arequipa").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").show();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("marsano") != -1) {
            $(".pensiones-semipresenciales-marsano").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").show();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("san-isidro") != -1) {
            $(".pensiones-semipresenciales-san-isidro").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").show();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("villa-el-salvador") != -1) {
            $(".pensiones-semipresenciales-villa-el-salvador").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").show();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("villa-maria") != -1) {
            $(".pensiones-semipresenciales-villa-maria").show();
            $("#pensiones-semipresenciales").show();
            $("#pensiones-presenciales").show();
            $("#pensiones").hide();
            $("#matricula-pensiones").hide();

            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").show();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>





    <!--  <script type="text/javascript">
                if (window.location.href.indexOf("san-juan-de-lurigancho") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->
    <script type="text/javascript">
        if (window.location.href.indexOf("santa-anita") != -1) {
            $("#matricula-pensiones").show();

            $("#cuota-ingreso").show();
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").show();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>
    <script type="text/javascript">
        if (window.location.href.indexOf("piura") != -1) {
            $("#matricula-pensiones").show();

            $("#cuota-ingreso").show();
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").show();
            $(".mapid-trujillo").hide();
        }
    </script>
    <script type="text/javascript">
        if (window.location.href.indexOf("chiclayo") != -1) {
            $("#matricula-pensiones").show();

            $("#cuota-ingreso").show();
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").show();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>
    <script type="text/javascript">
        if (window.location.href.indexOf("trujillo") != -1) {
            $("#matricula-pensiones").show();

            $("#cuota-ingreso").show();
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").show();
        }
    </script>
    <script type="text/javascript">
        if (window.location.href.indexOf("la-molina") != -1) {
            $("#matricula-pensiones").show();

            $("#cuota-ingreso").show();
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").show();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>
    <script type="text/javascript">
        if (window.location.href.indexOf("salamanca") != -1) {
            $("#matricula-pensiones").show();

            $("#cuota-ingreso").show();
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").show();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();
        }
    </script>
    <!--         <script type="text/javascript">
                if (window.location.href.indexOf("santa-anita") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->
    <!-- <script type="text/javascript">
                if (window.location.href.indexOf("la-molina") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->
    <!-- <script type="text/javascript">
                if (window.location.href.indexOf("salamanca") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->
    <!-- <script type="text/javascript">
                if (window.location.href.indexOf("chiclayo") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->
    <!-- <script type="text/javascript">
                if (window.location.href.indexOf("piura") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->
    <!-- <script type="text/javascript">
                if (window.location.href.indexOf("trujillo") != -1) {
                    $("#investment-container-sup").hide();
                    $(".descuento").hide();
                }
            </script> -->

    <script type="text/javascript">
        if (window.location.href.indexOf("san-juan-de-lurigancho") != -1) {
            $("#pensiones").hide();
            $(".mapid-brena").hide();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").show();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();

        }
    </script>

    <script type="text/javascript">
        if (window.location.href.indexOf("brena") != -1) {
            $(".mapid-brena").show();
            $(".mapid-callao").hide();
            $(".mapid-chorrillos").hide();
            $(".mapid-comas").hide();
            $(".mapid-jesus-maria").hide();
            $(".mapid-la-molina").hide();
            $(".mapid-los-olivos").hide();
            $(".mapid-maranga").hide();
            $(".mapid-nana").hide();
            $(".mapid-pro").hide();
            $(".mapid-salamanca").hide();
            $(".mapid-san-isidro").hide();
            $(".mapid-san-juan-de-lurigancho").hide();
            $(".mapid-san-juan-de-lurigancho-wisse").hide();
            $(".mapid-santa-anita").hide();
            $(".mapid-roma").hide();
            $(".mapid-marsano").hide();
            $(".mapid-villa-el-salvador").hide();
            $(".mapid-villa-maria").hide();
            $(".mapid-arequipa").hide();
            $(".mapid-chiclayo").hide();
            $(".mapid-chanchamayo").hide();
            $(".mapid-huancayo").hide();
            $(".mapid-piura").hide();
            $(".mapid-trujillo").hide();

        }
    </script>


@endsection