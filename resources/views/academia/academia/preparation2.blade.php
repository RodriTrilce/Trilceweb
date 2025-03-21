{{ !($breadcrumbs = Breadcrumbs::render('academia-preparation', $title)) }}
@extends('academia.layouts.template')
@section('title', 'Preparación ' . $title)
@section('content')
    <style>
        .new_banner {}

        .header-double-bottom {
            background: transparent;
        }

        .header-double-border {
            display: none;
        }

        .header-double-title {
            display: none;
        }

        .header-double-title h1 {
            display: none;
        }

        .header-double-top>.row {
            position: relative;
            height: auto;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .header-double-w-preparation-san-marcos {
            background-image: url(/static/images/slides/BANNER-PREPARACION-SAN-MARCOS-GENERAL-19012020.png);
            background-position: center center;
            background-size: cover;
        }

        .header-double-w-preparation-uni {
            background-image: url(/static/images/slides/BANNER-PREPARACION-UNI-15-FEB.png);
            background-position: center center;
            background-size: cover;
        }

        .header-double-w-preparation-pucp {
            background-image: url(/static/images/slides/BANNER-PREPARACION-CATOLICA-GENERAL-19012020.png);
            background-position: center center;
            background-size: cover;
        }

        .version_desktop {
            display: block;
        }

        .version_mobile {
            display: none;
        }

        @media (max-width: 768px) {
            .version_desktop {
                display: none;
            }

            .version_mobile {
                display: block;
            }

            .header-double-top>.row {
                height: 352px;
            }

            .header-double-w-preparation-san-marcos {
                background-image: url(/static/images/slides/BANNER-PREPARACION-SAN-MARCOS-GENERAL-19012020-MOBILE.png);
                background-position: center center;
                background-size: initial;
            }

            .header-double-w-preparation-uni {
                background-image: url(/static/images/academia/banners_2025_enero/banner-uni-2025-MOBILE_11zon.webp);
                background-position: center center;
                background-size: initial;
            }

            .header-double-w-preparation-pucp {
                background-image: url(/static/images/slides/BANNER-PREPARACION-CATOLICA-GENERAL-19012020-MOBILE.png);
                background-position: center center;
                background-size: initial;
            }

            .header-double-content-top {
                height: initial;
            }
        }
    </style>

    <div class="header-double-top new_banner">
        <div class="row">
            @if ($type == 'uni')
                <a href="https://www.trilce.edu.pe/l/whatsapp-uni" target="_blank" style="width: 100%">
                    <img src="/storage/static/upload/64d40eb0-0405-11f0-9614-c5035eb8bb6d.webp" alt="Trilce"
                        class="version_desktop" style="width: 100%" />
                    <img src="/storage/static/upload/65da4680-0405-11f0-bf9f-cf5855baf0f4.webp" alt="Trilce"
                        class="version_mobile" />
                    <div
                        class="col-xs-12 col-sm-12 header-double-content-top header-double-w-preparation-{{ $type }}">
                    </div>
                </a>
            @elseif($type == 'san-marcos')
                <a href="https://www.trilce.edu.pe/l/whatsapp-san-marcos" target="_blank" style="width: 100%">
                    <img src="/storage/static/upload/6444b020-0405-11f0-8cf4-b106da6e8eff.webp" alt="Trilce"
                        class="version_desktop" style="width: 100%" />
                    <img src="/storage/static/upload/64a664a0-0405-11f0-8859-a5370252f9e4.webp"
                        alt="Trilce" class="version_mobile" />
                    <div
                        class="col-xs-12 col-sm-12 header-double-content-top header-double-w-preparation-{{ $type }}">
                    </div>
                </a>
            @elseif($type == 'pucp')
                <a href="https://www.trilce.edu.pe/l/whatsapp-catolica" target="_blank" style="width: 100%">
                    <img src="/storage/static/upload/640de6e0-0405-11f0-b686-051e8b914252.webp" alt="Trilce"
                        class="version_desktop" style="width: 100%" />
                    <img src="/storage/static/upload/64095b40-0405-11f0-82be-63224e39aee9.webp" alt="Trilce"
                        class="version_mobile" />
                    <div
                        class="col-xs-12 col-sm-12 header-double-content-top header-double-w-preparation-{{ $type }}">
                    </div>
                </a>
            @endif


            <div class="header-double-border"></div>
            <div class="header-double-title">
                <h1>
                    @if ($type == 'uni')
                        Preparación UNI
                    @elseif($type == 'san-marcos')
                        Preparación San Marcos
                    @elseif($type == 'pucp')
                        Preparación Católica
                    @endif
                </h1>
            </div>
        </div>
    </div>

    @switch($type)
        @case('san-marcos')
            @include('academia.partials.preparation.san-marcos2')
        @break

        @case('uni')
            @include('academia.partials.preparation.uni2')
        @break

        @case('pucp')
            @include('academia.partials.preparation.pucp2')
        @break
    @endswitch

    @include('academia.partials.card_bottom')
@endsection
@section('scripts')
    page = 'preparation';
    var type = '{{ $type }}'
    @parent
@endsection
