{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Simulacros de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-simulacrum"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Simulacros</h1>
        <p class="header-double-p-up">Resultados de los exámenes</p>
      </div>
    </div>
  </div>

{{--
  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
          <a href="/academia/simulacros-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
          <a href="/academia/simulacros-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
          <a href="/academia/simulacros-pucp" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">CATÓLICA</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  --}}
  <div class="clearfix"></div>





  @if($university->short_name=='UNI'|| $university->short_name=='San Marcos' || $university->short_name=='PUCP')

  <br><br>

  
  <div class="row col-xs-12 center-xs">
  <h1 class="simulacrum__title simulacrum__title--and">Resultados Simulacros {{$university->short_name}}</h1>
  </div>
  <br><br>

  @endif

  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
          <a href="/academia/simulacros-uni/resultados" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
          <a href="/academia/simulacros-san-marcos/resultados" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
          <a href="/academia/simulacros-pucp/resultados" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">CATÓLICA</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
  <div class="clearfix"></div>

  
  <br><br>

  <div class="row center-xs center-sm text-init simulacrum container-base">

    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs">
      <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Resultados del proceso</h2>
    </div>
    <br><br><br>
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs simulacrum-results">
      @foreach ($data as $key => $v)
        <div class="col-xs-12 col-sm-3 col-md-2">
          <a href="{{ $v->url }}" target="_blank">
            <div class="simulacrum-results-pdf">
              <i class="fa fa-file-pdf-o"></i>
            </div>
            <div class="simulacrum-results-text">
              <span>{{ $v->name }}</span>
              <span>{{ $v->description }}</span>
              <span>{{ date('d-m-Y', strtotime($v->created_at)) }}</span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

  <br><br>
  
  @if($university->short_name=='UNI')
  {{--<div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
      <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">


      <div class="row col-xs-12 center-xs register-ads">
        <div class="register-ads__container">
        	<div class="row col-xs-12">
              <div class="col-xs-12 col-sm">				
                <a href="/academia/simulacros-uni/inscripcion/35166d797e" class="register-ads__link">
                <h1>Simulacro Anual y Semestral<br><strong>15, 17 y 19 de Julio</strong></h1>
                <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                  Regístrate aquí
                </button>
                </a>
              </div>
              <div class="row col-xs-4 bottom-xs center-xs xs-hide">
                <img src="{{ url('/static/images/academia/inscripcion-uni.png') }}" alt="">	
              </div>        		
        	  </div>
          </div>
        </div>

      </div>
    </div>--}}

    {{--<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
      <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
        <div class="row col-xs-12 center-xs about-v--vgrid">

          <div class="row col-xs-12 col-sm-9 col-md-8 center-xs">
            <h2 class="simulacrum-info-title simulacrum-info-title-bottom">No hay Simulacros activos</h2>
          </div>

        </div>
      </div>
    </div>--}}
  @endif

  @if($university->short_name=='San Marcos')
  {{--<div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
      <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="row col-xs-12 center-xs register-ads">
        <div class="register-ads__container">
        	<div class="row col-xs-12">
              <div class="col-xs-12 col-sm">				
                <a href="/academia/simulacros-san-marcos/inscripcion/672d3e02a1" class="register-ads__link">
                <h1>Simulacro Anual y Semestral<br><strong>23 de Junio</strong></h1>
                <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                  Regístrate aquí
                </button>
                </a>
              </div>
              <div class="row col-xs-4 bottom-xs center-xs xs-hide">
                <img src="{{ url('/static/images/academia/inscripcion-sm.png') }}" alt="">	
              </div>        		
        	  </div>
          </div>
        </div>

      </div>
    </div>--}}

    {{--<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
      <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
      <div class="row col-xs-12 center-xs about-v--vgrid">

      <div class="row col-xs-12 col-sm-9 col-md-8 center-xs">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">No hay Simulacros activos</h2>
      </div>

      </div>
      </div>
    </div>--}}
  @endif

  @if($university->short_name=='PUCP')
  {{--<div class="row col-xs-12 start-xs center-sm simulacrum register container-base">
      <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="row col-xs-12 center-xs register-ads">
        <div class="register-ads__container">
        	<div class="row col-xs-12">
              <div class="col-xs-12 col-sm">				
                <a href="/academia/simulacros-pucp/inscripcion/e5b0ecc941" class="register-ads__link">
                <h1>Simulacro Evaluación del Talento<br><strong>22 de Junio</strong></h1>
                <button class="register-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                  Regístrate aquí
                </button>
                </a>
              </div>
              <div class="row col-xs-4 bottom-xs center-xs xs-hide">
                <img src="{{ url('/static/images/academia/inscripcion-cat.png') }}" alt="">	
              </div>        		
        	  </div>
          </div>
        </div>

      </div>
    </div>--}}

    {{--<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
      <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
      <div class="row col-xs-12 center-xs about-v--vgrid">

      <div class="row col-xs-12 col-sm-9 col-md-8 center-xs">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">No hay Simulacros activos</h2>
      </div>

      </div>
      </div>
    </div>--}}
  @endif
  


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'simulacrum';
  @parent

@endsection