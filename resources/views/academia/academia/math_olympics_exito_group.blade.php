{{! $breadcrumbs = Breadcrumbs::render('academia-aboutus') }}
@extends('academia.layouts.template')
@section('title', 'Simulacro - Registro Exitoso')
@section('content')

<div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-simulacrum"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Olimpiadas de Matemática</h1>
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
          <h1 class="about-history--title">¡Gracias I.E. {{$COLEGIO_PROCEDENCIA}}!</h1>
          <div class="about-history--pcontainer">
            <p>
             Tu registro fue exitoso.
            </p>
            <div class="row col-xs-12 center-xs">
        
              <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-12">
                    <form action="{{ action('Academia\MathOlympicsRegisterController@descargarPDFGROUP') }}" method="post" target="_blank">
                    @csrf			
                      
                      <button class="incriptions-acade-ads__container-cta banner__button-cta banner__button-cta--white" type="submit" name="button">
                        
                      <input type="hidden" name="CODE_URL" id="CODE_URL" value="{{ $CODE_URL }}">

                      @foreach ($NRO_DOCUMENTO as $NRO_DOCUMENTO)
                      <input type="hidden" name="NRO_DOCUMENTO[]" id="NRO_DOCUMENTO" value="{{$NRO_DOCUMENTO}}">
                      @endforeach

                      @foreach ($NOMBRES as $NOMBRE)
                        <input type="hidden" name="NOMBRES[]" id="NOMBRE" value="{{$NOMBRE}}" />
                      @endforeach

                      @foreach ($PRIMER_APELLIDO as $PRIMER_APELLIDO)
                        <input type="hidden" name="PRIMER_APELLIDO[]" id="PRIMER_APELLIDO" value="{{$PRIMER_APELLIDO}}" />
                      @endforeach

                      @foreach ($SEGUNDO_APELLIDO as $SEGUNDO_APELLIDO)
                        <input type="hidden" name="SEGUNDO_APELLIDO[]" id="SEGUNDO_APELLIDO" value="{{$SEGUNDO_APELLIDO}}" />
                      @endforeach

                      <input type="hidden" name="DEPTO_UBIG" id="DEPTO_UBIG" value="{{$DEPTO_UBIG}}">
                      <input type="hidden" name="TIPO_INSTITUCION" id="TIPO_INSTITUCION" value="{{$TIPO_INSTITUCION}}">
                      <input type="hidden" name="COLEGIO_PROCEDENCIA" id="COLEGIO_PROCEDENCIA" value="{{$COLEGIO_PROCEDENCIA}}">
                      <input type="hidden" name="NIVEL_ESTUDIO" id="NIVEL_ESTUDIO" value="{{$NIVEL_ESTUDIO}}">
                        Descargar ficha de inscripción
                      </button>
                      
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <hr class="grayhr2" />
    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'about_us';
  @parent
@endsection