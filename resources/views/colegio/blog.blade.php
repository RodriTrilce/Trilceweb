{{ !($breadcrumbs = Breadcrumbs::render('colegio-blog')) }}
{{-- blog.blade.php --}}
@extends('colegio.layouts.template')
@section('title', 'Blog')
@section('content')

    {{-- Verificar si hay posts marcados para mostrar el principal --}}
    @if ($posts->currentPage() < 2)
        <div class="row col-xs-12 center-xs blog-home-grid">
            <div class="row col-xs-12 col-sm-10 col-md-9 start-sm">
                <div class="row col-xs-12 blog-home-top">
                    @if ($markers->isNotEmpty())
                        {{-- Filtrar el marcador para que solo sea de 'colegio' o 'academia' según el sitio --}}
                        @php
                            $topPost = $markers
                                ->where('site', request()->segment(1))
                                ->sortByDesc('updated_at')
                                ->first();
                        @endphp

                        @if ($topPost)
                            <div class="col-xs-12 col-md-6 blog-home-top-imge">
                                <img src="{{ url($topPost->blogFile->blogImage()) }}" alt="">
                            </div>

                            <div class="row col-xs-12 col-md blog-home-top-section">
                                <div class="col-xs-12">
                                    <section class="blog-home-top-section--section">
                                        <h1 class="blog-home-top-title">
                                            <a href="/{{ $topPost->site }}/blog/{{ $topPost->slug }}">
                                                {{ $topPost->title }}
                                            </a>
                                        </h1>
                                        <div class="blog-home-top-date">{{ $topPost->blogDate() }}
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="blog-home-top-content">
                                            <p style="text-align: justify">
                                                {{ Str::words(strip_tags($topPost->content), 25, '...') }}
                                            </p>
                                        </div>
                                        <div class="row col-xs-12 between-xs blog-home-top-bottom">
                                            <div class="col-xs start-xs blog-home-top-bottom--more">
                                                <a href="/{{ $topPost->site }}/blog/{{ $topPost->slug }}">
                                                    Leer más <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                            <div class="col-xs end-xs blog-home-top--view">
                                                <i class="fa fa-eye"></i> {{-- $topPost->visits()->count() --}}
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>

        {{-- Mostrar otros posts si existen --}}
        <div class="row col-xs-12 blog-home-aftertop">
            @foreach ($markers->slice(1) as $marker)
                <div class="row col-xs-12 col-sm-4 blog-home-aftertop--item" style="display: none">
                    <div class="col-xs blog-home-aftertop--item-image"><img
                            src="{{ url($marker->blogFile->blogImage(true)) }}" alt=""></div>
                    <div class="row col-xs blog-home-aftertop--item-title"><a
                            href="/{{ $marker->site }}/blog/{{ $marker->slug }}">{{ $marker->title }}</a></div>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Mostrar todos los posts de manera paginada --}}
    <div class="row col-xs-12 center-xs blog-home-grid">
        <div class="row col-xs-12 col-sm-10 col-md-9 start-sm">
            @foreach ($posts as $post)
                {{-- Verificar que el post pertenece a 'colegio' o 'academia' --}}
                @if ($post->site == request()->segment(1))
                    {{-- Filtrar por sitio 'colegio' o 'academia' --}}
                    <div class="row col-xs-12 col-sm-6 blog-home-grid--item">
                        <div class="col-xs-4 col-sm-6 blog-home-grid--item-image">
                            <a href="/{{ $post->site }}/blog/{{ $post->slug }}">
                                @if ($post->blogFile)
                                    <img src="{{ url($post->blogFile->blogImage(true)) }}" alt="">
                                @else
                                    <img src="{{ asset('images/blog-placeholder.jpg') }}" alt="">
                                    {{-- imagen por defecto --}}
                                @endif
                            </a>
                        </div>

                        <div class="row col-xs blog-home-grid--item-content start-xs">
                            <div class="row col-xs-12 blog-home-grud-item-contentpre">
                                <div class="blog-home-grid--item-title">
                                    <h3><a href="/{{ $post->site }}/blog/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h3>
                                </div>
                                <p class="blog-home-grid--item-date xs-hide">{{ $post->blogDate() }} <i
                                        class="fa fa-calendar"></i></p>
                                <div class="blog-home-grid--item-text">
                                    {{ Str::words(strip_tags($post->content), 25, '...') }}
                                </div>
                                <div class="row col-xs-12 blog-home-grid--item-op between-sm end-xs">
                                    <div class="row col-xs xs-hide">
                                        <a href="/{{ $post->site }}/blog/{{ $post->slug }}">
                                            Leer más <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Paginación --}}
    <div class="row col-xs-12 center-xs">
        <div class="col-xs-12">
            {!! $posts->links() !!}
        </div>
    </div>

    @include('colegio.partials.card_bottom')

@endsection

@section('scripts')
    page = 'blog';
    @parent
@endsection
