{{ !($breadcrumbs = Breadcrumbs::render('colegio-blogpost', $post->title)) }}
@extends('colegio.layouts.template')
@section('title', $post->title)
@section('content')
    <style>
        .tns-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
        }

        .tns-controls button {
            color: #f4633a !important;
            text-shadow: none !important;
        }

        .tns-controls button:first-child {
            left: 10px !important;
        }

        .tns-controls button:last-child {
            right: 10px !important;
        }

        @media (max-width: 768px) {
            .tns-controls {
                display: inherit !important;
            }
        }

        /* Contenedor general */


        .share-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .btn-slide {
            position: relative;
            overflow: hidden;
            color: #fff !important;
            text-decoration: none;
            font-size: 14px;
            letter-spacing: 1px;
            padding: 16px 32px;
            border-radius: 40px;
            /* Borde redondeado */
            border: none;
            display: inline-block;
            transition: color 0.4s ease-out;
            z-index: 0;
        }

        /* Slide background animado */
        .btn-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            border-radius: 40px;
            /* Borde redondeado también aquí */
            transition: all 0.4s ease-out;
            z-index: -1;
        }

        .btn-slide:hover::before {
            left: 0;
        }

        /* Colores oficiales y sus variantes para hover */
        .btn-facebook {
            background-color: #1877F2;
        }

        .btn-facebook::before {
            background-color: #0f5ad6;
        }

        .btn-twitter {
            background-color: #1DA1F2;
        }

        .btn-twitter::before {
            background-color: #0d95e8;
        }

        .btn-whatsapp {
            background-color: #25D366;
        }

        .btn-whatsapp::before {
            background-color: #1ebe5d;
        }
    </style>


    <div class="blog-post container-padding-mobile">
        <div class="blog-date">
            <div class="date-number">{{ Date::parse($post->created_at)->format('j') }}</div>
            <div class="date-text">
                {{ Date::parse($post->created_at)->format('m') }}/{{ Date::parse($post->created_at)->format('y') }}</div>
        </div>

        <h1 class="blog-post-title">{{ $post->title }}</h1>

        <hr class="hr-blog" />

        <div class="row col-xs-12">
            <div class="row col-xs-12 between-xs">
                <div class="col-xs start-xs sm-hide">
                    <span class="blog-date-line"><i class="fa fa-calendar"></i> {{ $post->blogDate() }}</span>
                </div>
                <div class="col-xs-2 col-sm end-xs end-sm">
                    <span class="blog-view" title="{{-- $post->visits()->count() --}} Visitas"><i class="fa fa-eye"></i>
                        {{-- $post->visits()->count() --}}</span>
                </div>
            </div>
        </div>

    </div>

    <div class="blog-blur">
        {{-- <div class="background-image"></div> --}}
        <div class="container-blog-banners">
            <div id="blog-banners" class="">
                @foreach ($post->blogGallery->images as $image)
                    <div><img src="{{ $image->blogImage() }}" alt=""></div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-padding-mobile blog-post blog-post-content">
        {!! $post->content !!}

        <div class="share-section-left">
            <h4 class="share-title">Comparte este artículo</h4>

            <a href="https://www.facebook.com/share.php?u={{ urlencode('https://www.trilce.edu.pe/' . $post->site . '/blog/' . $post->slug) }}&title={{ urlencode($post->title) }}"
                target="_blank" class="btn-slide btn-facebook">
                <i class="fab fa-facebook-f"></i>
                <span class="button-label">Facebook</span>
            </a>

            <a href="https://twitter.com/intent/tweet?related=TRILCEtweet&text={{ urlencode($post->title . ' - ' . 'https://www.trilce.edu.pe/' . $post->site . '/blog/' . $post->slug) }}"
                target="_blank" class="btn-slide btn-twitter">
                <i class="fab fa-twitter"></i>
                <span class="button-label">Twitter</span>
            </a>

            <a href="https://wa.me/?text={{ urlencode($post->title . ' - https://www.trilce.edu.pe/' . $post->site . '/blog/' . $post->slug) }}"
                target="_blank" class="btn-slide btn-whatsapp">
                <i class="fab fa-whatsapp"></i>
                <span class="button-label">WhatsApp</span>
            </a>
        </div>
    </div>

    <hr class="grayhr2" />

    <div class="container-base row col-xs-12 center-xs pre-blog-posts-related">
        <div class="row col-xs-12 col-sm-10 col-md-9 start-xs start-sm blog-posts-related">

            <div class="col-xs-12">
                <h4 class="interest-title">Te puede interesar</h4>
            </div>
            @foreach ($related as $post)
                <div class="related-item">
                    <a href="/{{ $post->site }}/blog/{{ $post->slug }}">
                        <div class="item-image">
                            <img src="{{ url($post->blogFile->blogImage(true)) }}" alt="{{ $post->title }}">
                        </div>
                        <div class="item-title">
                            <h3>{{ $post->title }}</h3>
                            <div class="item-view">
                                {{-- @if ($post->visits()->count() > 0)
                <i class="fa fa-eye"></i> <span class="blog-view">{{$post->visits()->count()}}</span>
                @endif --}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>
    </div>


    @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'blog_post';
    @parent

    {{-- Tiny Slider CSS y JS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const totalImages = document.querySelectorAll('#blog-banners > div').length;

            const slider = tns({
                container: '#blog-banners',
                items: 1,
                slideBy: 'page',
                autoplay: true,
                autoplayButtonOutput: false,
                controls: totalImages > 1, // Desactiva controles si hay solo una imagen
                nav: false,
                controlsText: [
                    '<i class="fa fa-chevron-left"></i>',
                    '<i class="fa fa-chevron-right"></i>'
                ],
                responsive: {
                    640: {
                        edgePadding: 20,
                        gutter: 20,
                        items: 1
                    },
                    900: {
                        items: 1
                    }
                },
                onInit: function(info) {
                    const controls = document.querySelector('.tns-controls');
                    if (totalImages <= 1 && controls) {
                        controls.style.display = 'none';
                    }
                }
            });
        });
    </script>

@endsection
