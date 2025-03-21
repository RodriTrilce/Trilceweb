{{! $breadcrumbs = Breadcrumbs::render('academia-blogpost', $post->title) }}
@extends('academia.layouts.template')
@section('title', $post->title)
@section('content')
<style>

.tns-controls button {
  color: #f4633a !important;
  text-shadow: none !important;
}

@media (max-width: 768px){
  .tns-controls {
      display: inherit !important;
  }
}
</style>


  <div class="blog-post container-padding-mobile">
    <div class="blog-date">
      <div class="date-number">{{Date::parse($post->created_at)->format('j')}}</div>
      <div class="date-text">{{Date::parse($post->created_at)->format('m')}}/{{Date::parse($post->created_at)->format('y')}}</div>
    </div>

    <h1 class="blog-post-title">{{$post->title}}</h1>

    <hr class="hr-blog" />

    <div class="row col-xs-12">
      <div class="row col-xs-12 between-xs">
        <div class="col-xs start-xs sm-hide">
          <span class="blog-date-line"><i class="fa fa-calendar"></i> {{$post->blogDate()}}</span>
        </div>
        <div class="col-xs-2 col-sm end-xs end-sm">
          <span class="blog-view" title="{{--$post->visits()->count()--}} Visitas"><i class="fa fa-eye"></i> {{--$post->visits()->count()--}}</span>
        </div>
      </div>
    </div>

  </div>

  <div class="blog-blur">
    <div class="background-image"></div>
    <div class="container-blog-banners">
    <div id="blog-banners" class="">
      @foreach ($post->blogGallery->images as $image)
        <div><img src="{{$image->blogImage()}}" alt=""></div>
      @endforeach
    </div>
  </div>
  </div>

  <div class="container-padding-mobile blog-post blog-post-content">
    {!! $post->content !!}

    <div class="row col-xs-12 end-xs blog-share-button"><!--Te invitamos a compartir esta noticia-->
      <div class="row col-xs-12 end-xs">
        <div class="col-sm start-sm blog-share-page">
          <div class="fb-page"
            data-href="https://www.facebook.com/AcademiaTrilce/"
            data-small-header="true"
            data-adapt-container-width="true"
            data-hide-cover="true"
            data-show-facepile="false">
          </div>

        </div>
        <div class="row col-sm end-xs">
          <nav class="share-icons">
          <a href="https://www.facebook.com/share.php?u={{ urlencode("http://www.trilce.edu.pe/" . $post->site . "/blog/" . $post->slug) }}&title={{urlencode($post->title)}}" target="_blank" class="facebook">Compartir</a>
          <a href="https://twitter.com/intent/tweet?related=TRILCEtweet&text={{ urlencode($post->title . " - " . "http://www.trilce.edu.pe/" . $post->site . "/blog/" . $post->slug) }}" target="_blank" class="twitter">Tweet</a>
          </nav>
        </div>
      </div>
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
          <a href="/{{$post->site}}/blog/{{$post->slug}}">
            <div class="item-image">
              <img src="{{ url( $post->blogFile->blogImage(true) ) }}" alt="{{$post->title}}">
            </div>
            <div class="item-title">
              <h3>{{$post->title}}</h3>
              <div class="item-view">
                {{--@if($post->visits()->count() > 0)--}}
                <i class="fa fa-eye"></i> <span class="blog-view">{{--$post->visits()->count()--}}</span>
                {{--@endif--}}
              </div>
            </div>
          </a>
        </div>
      @endforeach

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'blog_post';
  @parent
@endsection
