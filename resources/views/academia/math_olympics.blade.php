{{! $breadcrumbs = Breadcrumbs::render('academia-matholympics') }}
@extends('academia.layouts.template')
@section('title', 'Olimpiadas Matemáticas')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-matholympics"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Olimpiadas de Matemática</h1>
      </div>
    </div>
  </div>


  <div class="row center-xs center-sm math_olympics">
    <div class="col-xs-11 col-sm-8 text-init">
      <div class="js-tabs om__tabs" id="om__tabs">

          <ul class="js-tabs__header">
              <li><a href="#" class="js-tabs__title">Lima</a></li>
              <li><a href="#" class="js-tabs__title">Provincias</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1">
            @foreach ($lima as $v)
              {{--@php                
                  $anio = date("Y", strtotime($v->finish_at));
              @endphp
              @if($anio == date("Y"))--}}
              <div class="om__item row col-xs-12">
                  <h3 class="om__title js-badger-accordion-header">
                    <div class="om__signed"></div>
                    <span class="om__date">{{ Date::parse($v->finish_at)->format('j \d\e F Y') }}</span>

                    @if(count($v->results))
                      <span class="om__state om__state--end">CULMINADO</span>
                    @elseif(date("Y-m-d H:i:s") <= $v->finish_at && !empty($v->inscription_url))
                      <span class="om__state om__state--active">INSCRIPCIONES</span>
                    @elseif(date("Y-m-d H:i:s") < $v->finish_at && (!empty($v->inscription_url) && (count($v->results) > 1) ))
                      <span class="om__state om__state--run">EN CURSO</span>
                    @endif

                    <div class="om__title-content">
                      {{$v->venue}}
                    </div>
                  </h3>

                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner om__content">

                      <div class="om__content-subtitle">{!! $v->title !!}</div>
                      <div class="om__content-subtitle">{!! $v->grade !!}</div>

                      <ul class="math-olympic-list">
                        <li {!! ($v->file_id ? 'class="active"' : '') !!}><a href="{{$v->getBaseRules()}}" target="_blank">Bases</a></li>
                        <li {!! ($v->inscription_url ? 'class="active"' : 'class="hidden"') !!}><a href="{{$v->inscription_url}}">Inscripción individual</a></li>
                        <li {!! ($v->inscription_group_url ? 'class="active"' : 'class="hidden"') !!}><a href="{{$v->inscription_group_url}}">Inscripción grupal</a></li>
                        <li {!! (count($v->results) ? 'class="active"' : 'class="hidden"') !!}>
                          @if(count($v->results))
                            <select id="result_{{$v->id}}">
                              <option >Resultados</option>
                              @foreach ($v->results as $result)
                                <option data-url="{{$result->fileUrl()}}">{{$result->name}}</option>
                              @endforeach
                            </select>
                          @else
                            <!--<a target="_blank">Resultados</a> -->
                          @endif
                        </li>
                      </ul>
                    </div>
                  </dd>

              </div>
              {{--@endif--}}
             
            @endforeach
          </div>

          <div class="js-tabs__content js-badger-accordion_2">
            
            @foreach ($province as $v)
              {{--@php                
                $anio = date("Y", strtotime($v->finish_at));
              @endphp
              @if($anio == date("Y"))--}}
              <div class="om__item row col-xs-12">
                  <h3 class="om__title js-badger-accordion-header">
                    <div class="om__signed"></div>
                    <span class="om__date">{{ Date::parse($v->finish_at)->format('j \d\e F Y') }}</span>

                    @if(count($v->results))
                      <span class="om__state om__state--end">CULMINADO</span>
                    @elseif(date("Y-m-d H:i:s") <= $v->finish_at && !empty($v->inscription_url))
                      <span class="om__state om__state--active">INSCRIPCIONES</span>
                    @elseif(date("Y-m-d H:i:s") < $v->finish_at && (!empty($v->inscription_url) && (count($v->results) > 1) ))
                      <span class="om__state om__state--run">EN CURSO</span>
                    @endif

                    <div class="om__title-content">
                      {{$v->venue}}
                    </div>
                  </h3>

                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner om__content">

                      <div class="om__content-subtitle">{!! $v->title !!}</div>
                      <div class="om__content-subtitle">{!! $v->grade !!}</div>

                      <ul class="math-olympic-list">
                        <li {!! ($v->file_id ? 'class="active"' : '') !!}><a href="{{$v->getBaseRules()}}" target="_blank">Bases</a></li>
                        <li {!! ($v->inscription_url ? 'class="active"' : 'class="hidden"') !!}><a href="{{$v->inscription_url}}">Inscripción individual</a></li>
                        <li {!! ($v->inscription_group_url ? 'class="active"' : 'class="hidden"') !!}><a href="{{$v->inscription_group_url}}">Inscripción grupal</a></li>
                        <li {!! (count($v->results) ? 'class="active"' : 'class="hidden"') !!}>
                          @if(count($v->results))
                            <select id="result_{{$v->id}}">
                              <option >Resultados</option>
                              @foreach ($v->results as $result)
                                <option data-url="{{$result->fileUrl()}}">{{$result->name}}</option>
                              @endforeach
                            </select>
                          @else
                            <!--<a target="_blank">Resultados</a> -->
                          @endif
                        </li>
                      </ul>
                    </div>
                  </dd>
              </div>
             {{--@endif--}}
            @endforeach
          </div>

      </div>
    </div>
  </div>

  <div class="row center-xs center-sm math-olympic-onam">
    {{--<div class="col-xs-12 title"><h2>ONAM TRILCE</h2></div>
    <div class="row col-xs-12 col-sm-8 between-xs between-sm data">
      <div class="col-xs-12 col-sm">24 de noviembre</div>
      <div class="col-xs-12 col-sm">XXX OLIMPIADA NACIONAL DE MATEMÁTICA</div>
      <div class="col-xs-12 col-sm">2.° prim a 5.° sec.</div>
    </div>

    <div class="row col-xs-12 col-sm-9 text-init center-onam container-base">
      <div class="row col-xs-12 col-sm-3 middle-sm middle-xs center-sm center-xs basics">
        <a href="/storage/other/documents/bases-onam-2018.pdf" target="_blank" class="basics__linkto"><i class="fa fa-search"></i> Bases</a>
      </div>
      <div class="row col-xs-12 col-sm block-onam">
        <div class="row col-xs-12 between-xs">
          <div class="col-xs inscription">INSCRIPCIONES</div>
          <div class="col-xs texts"><i class="fa fa-user"></i> Individual</div>
          <div class="col-xs texts"><i class="fa fa-users"></i> Grupal</div>
          <div class="col-xs texts desactive-link"><a href="" target="_blank"><i class="fa fa-bullhorn"></i> Resultados</a></div>
        </div>
        <div class="row col-xs-12 between-xs">
          <div class="col-xs inscription">INSCRIPCIONES EXTERNAS</div>
          <div class="col-xs texts"><i class="fa fa-user"></i> Individual</div>
          <div class="col-xs texts"><i class="fa fa-users"></i> Grupal</div>
          <div class="col-xs texts desactive-link"><a href="" target="_blank"><i class="fa fa-bullhorn"></i> Resultados</a></div>
        </div>
      </div>
    </div>--}}

    <div class="row col-xs-12 col-sm-9 text-init sponsor">

      <div class="row col-xs-12 col-sm-12 middle-sm information" style="margin-bottom: 50px">
        <div class="col-xs-12 col-sm-12 center-xs">
          <p>
            <span>Informes e inscripciones</span> <br/>
            Av. Arequipa 1381, Santa Beatriz - <a href="mail:olimpiadas@trilce.edu.pe">olimpiadas@trilce.edu.pe</a>
          </p>
        </div>
      </div>

      {{--<div class="row col-xs-12 col-sm-6">
        <div class="row col-sm col-xs-12 middle-sm middle-xs center-xs title"><div class="col-xs-12">Auspiciadores</div></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('/static/images/academia/logo-arsam.png') }}}" alt="Arsam"></div>
        <div class="col-sm col-xs-4"><img src="{{{ asset('/static/images/academia/logo-maped.png') }}}" alt="Maped"></div>
      </div>--}}

    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'math_olympics';
  @parent
<script>
    var conf = function(id)
    {
      return {
        select: '#result_' + id,
        showSearch: false,
        beforeOnChange: info => {window.open(info.data.url); return false;}
      };
    }
    @foreach ($data as $v)
      @if(count($v->results))
        new SlimSelect( conf( {{$v->id}} ) );
      @endif
    @endforeach
</script>

@endsection
