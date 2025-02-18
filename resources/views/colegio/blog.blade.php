{{! $breadcrumbs = Breadcrumbs::render('colegio-blog') }}
@extends('colegio.layouts.template')
@section('title', 'Blog')
@section('content')
<style>
  .blog-home-top-content{
    height: 150px;
  }
  .blog-home-top-content p {
    text-align: justify;
    text-overflow: ellipsis;
    white-space: pre-wrap;
    overflow: hidden;
    word-wrap: break-word;
    height: 150px;
  }
</style>

@if($posts->currentPage() < 2) <div class="row col-xs-12 center-xs blog-home-grid">
  <div class="row col-xs-12 col-sm-10 col-md-9 start-sm">

    <div class="row col-xs-12 blog-home-top">
      <div class="col-xs-12 col-xs-12 col-md-6 blog-home-top-imge"><img src="{{ url( $markers->first()->blogFile->blogImage() ) }}" alt=""></div>

      <div class="row col-xs-12 col-xs-12 col-md-6 blog-home-top-section">
        <div class="col-xs-12">
          <section class="blog-home-top-section--section">
            <h1 class="blog-home-top-title"><a href="/{{$markers->first()->site}}/blog/{{$markers->first()->slug}}">{{$markers->first()->title}}</a></h1>
            <div class="blog-home-top-date">{{$markers->first()->blogDate()}} <i class="fa fa-calendar"></i></div>
            <div class="blog-home-top-content">
              <p>{{ strip_tags($markers->first()->content) }}</p>
            </div>
            <div class="row col-xs-12 between-xs blog-home-top-bottom">
              <div class="col-xs start-xs blog-home-top-bottom--more"><a href="/{{$markers->first()->site}}/blog/{{$markers->first()->slug}}">Leer más <i class="fa fa-search"></i></a></div>
              <div class="col-xs end-xs blog-home-top--view"><i class="fa fa-eye"></i> {{--$markers->first()->visits()->count()--}}</div>
            </div>
          </section>
        </div>
      </div>
    </div>

  </div>
  </div>


  <!--
    <div class="row col-xs-12 blog-home-aftertop">
      @foreach ($markers->slice(1) as $marker)
        <div class="row col-xs-12 col-sm-4 blog-home-aftertop--item">
          <div class="col-xs blog-home-aftertop--item-image"><img src="{{ url( $marker->blogFile->blogImage(true) ) }}" alt=""></div>
          <div class="row col-xs blog-home-aftertop--item-title"><a href="/{{$marker->site}}/blog/{{$marker->slug}}">{{$marker->title}}</a></div>
        </div>
      @endforeach
    </div>
  -->

  @endif


  <div class="row col-xs-12 center-xs blog-home-grid">
    <div class="row col-xs-12 col-sm-10 col-md-9 start-sm">

      @foreach ($posts as $post)

      @if($post->marker !== '1')

      <div class="row col-xs-12 col-sm-6 blog-home-grid--item">
        <div class="col-xs-4 col-sm-6 blog-home-grid--item-image">
          <a href="/{{$post->site}}/blog/{{$post->slug}}"><img src="{{ url( $post->blogFile->blogImage(true) ) }}" alt=""></a>
        </div>

        <div class="row col-xs blog-home-grid--item-content start-xs">

          <div class="row col-xs-12 blog-home-grud-item-contentpre">
            <div class="blog-home-grid--item-title">
              <h3 class=""><a href="/{{$post->site}}/blog/{{$post->slug}}">{{ $post->title }}</a></h3>
            </div>
            <p class="blog-home-grid--item-date xs-hide">{{ $post->blogDate() }} <i class="fa fa-calendar"></i></p>
            <div class="blog-home-grid--item-text">
              {{ Str::words(strip_tags($post->content), 25, '...') }}
            </div>
            <div class="row col-xs-12 blog-home-grid--item-op between-sm end-xs">
              <div class="row col-xs xs-hide"><a href="/{{$post->site}}/blog/{{$post->slug}}">Leer más <i class="fa fa-search"></i></a></div>
              <div class="row col-xs-4 end-xs end-sm blog-home-grid--item-op-more">
                {{--@if($post->visits()->count() > 0)
                      <i class="fa fa-eye"></i> <span>{{$post->visits()->count()}}</span>
                @endif--}}
              </div>
            </div>
          </div>

        </div>
      </div>
      @endif
      @endforeach


    </div>
  </div>

  <div class="row col-xs-12 center-xs pagination-container blog-pagination">
    {{ $posts->links() }}
  </div>

  @include('colegio.partials.card_bottom')
  @endsection

  @section('scripts')
  page = 'blog';
  @parent
  @endsection