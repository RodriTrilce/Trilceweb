{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum-exam', $university->short_name) }}
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
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
  @if($university->short_name=='UNI' || $university->short_name=='San Marcos' || $university->short_name=='PUCP')
    <br><br>
    <div class="row col-xs-12 center-xs admission-ads">
            <div class="admission-ads__container">
                <h1>Â¡Participa en nuestro simulacro!</h1>
            </div>
    </div>
  @endif
  <div class="row col-xs-12 start-xs center-sm simulacrum container-base">
    <div class="row col-xs-12 col-sm-10 col-md-9 start- s start-sm start-md">

    @if($university->short_name=='UNI')
      <div class="col-xs-12 col-sm simulacrum-info">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">InformaciÃ³n del simulacro</h2>
        <ul class="simulacrum-info-ul">
          <li>
            <span class="simulacrum-info-li-title">DescripciÃ³n:</span>
            <p id='data'>Simulacro Gratuito Semestral UNI turno tarde</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Fecha del examen:</span>
            <p>Domingo: 10 noviembre</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Hora:</span>
            <p>9:00 - 12:00 p. m.</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Locales:</span>
            <p>Comas: Av. Universitaria 6102 (anual y semestral)</p>
            <p>Los Olivos: Av. TomÃ¡s Valle 845 (anual y semestral)</p>
            <p>Santa Beatriz: Av.Arequipa 1250 (anual y semestral)</p>
            <!-- <p>Villa El Salvador: Av. Pastor Sevilla s/n mz. D lote 3</p> -->
          </li>
        </ul>
      </div>
    @endif

    @if($university->short_name=='San Marcos')
      <div class="col-xs-12 col-sm simulacrum-info">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">InformaciÃ³n del simulacro</h2>
        <ul class="simulacrum-info-ul">
          <li>
            <span class="simulacrum-info-li-title">DescripciÃ³n:</span>
            <p id='data'>Simulacro San Marcos - Anual, Repaso, Semestral e Intensivo</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Fecha del examen:</span>
            <p>27/10/2019</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Hora:</span>
            <p>8:30 a. m. - 12:00 m.</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Locales:</span>
            <p>Los Olivos: Av. TomÃ¡s Valle 845</p>
            <p>Santa Beatriz: Av. Arequipa 1250</p>
            <p>Marsano: Av. TomÃ¡s Marsano 4773, Surco</p>
            {{--<p>Cercado de Lima (Torrico): Jr. Rufino Torrico 862</p>--}}
            <p>Villa El Salvador: Av. Pastor Sevilla s/n mz. D lote 3</p>
            <p>Comas: Av. Universitaria 6102</p>
          </li>
        </ul>   
      </div>
    @endif

    @if($university->short_name=='PUCP')
      <div class="col-xs-12 col-sm simulacrum-info">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">InformaciÃ³n del simulacro</h2>
        <ul class="simulacrum-info-ul">
          <li>
            <span class="simulacrum-info-li-title">DescripciÃ³n:</span>
            <p id='data'>Simulacro Examen Tipo AdmisiÃ³n - Semestral CatÃ³lica</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Fecha del examen:</span>
            <p>02/11/2019</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Hora:</span>
            <p>8:00 a. m. - 11:30 a. m.</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Locales:</span>
            {{--<p>San Isidro: Av. Arequipa 3505</p>--}}
            <p>Santa Beatriz: Av. Arequipa 1250</p>
            <p>Los Olivos: Av. TomÃ¡s Valle 845</p>
            {{--<p>Cercado de Lima (Torrico): Jr. Rufino Torrico 862</p>--}}
          </li>
        </ul>
      </div>
    @endif 

      <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" name="simulacro_form" id="simulacro_form" method="post" action="">
        @csrf
        <div class="row start-xs step-1 step-container">
          <h2>RegÃ­strate para participar</h2>

          <div class="row col-xs-12 start-xs simulacrum-step1-steps">
            <div class="col-xs-4">
              <div class="number">1</div>
              <div class="text">Ingresa tus datos</div>
            </div>
            <div class="col-xs-4">
              <div class="number">2</div>
              <div class="text">Presiona "Registrarme"</div>
            </div>
          </div>

        </div>

        <div class="row start-x step-2 step-container">
          <h2>DÃ©janos tus datos</h2>
          <div class="col-xs-12 start-xs">
            
            <fieldset>
              <input type="hidden" name="TIPO_DOCUMENTO" value="01" />
              <input type="hidden" name="SERVICIO" id="SERVICIO" value="{{ ($university->short_name=='UNI'?'ACAUN':'') }}{{ ($university->short_name=='PUCP'?'ACACA':'') }}{{ ($university->short_name=='San Marcos'?'ACASM':'') }}">
              <input type="hidden" name="CODE_URL" id="CODE_URL" value="{{ $idexam }}">
            </fieldset>

            <div class="col-xs-12">
              <fieldset class="form-group">
                <input
                  type="number"
                  name="NRO_DOCUMENTO"
                  id="step1_dni"
                  placeholder="DNI"
                  aria-label="DNI"
                  min="0"
                  max="99999999"
                  minlength="8"
                  maxLength="8"
                  required
                />
              </fieldset>
            </div>

            <fieldset class="form-group">
              <input
              type="onlytext"
              name="NOMBRES"
              id="names"
              placeholder="Nombres"
              required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
                type="onlytext"
                name="PRIMER_APELLIDO"
                id="step1_PRIMER_APELLIDO"
                placeholder="Apellido paterno"
                aria-label="Apellido paterno"
                required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
                type="onlytext"
                name="SEGUNDO_APELLIDO"
                id="step1_SEGUNDO_APELLIDO"
                placeholder="Apellido materno"
                required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
              type="email"
              name="CORREO_E"
              id="email"
              placeholder="Correo electrÃ³nico"
              required
              />
            </fieldset>

            <fieldset class="form-group">
              <select
                name="BLDG_TBL"
                id="cbx_venue"
                data-name="Local InscripciÃ³n"
                aria-label="Local inscripciÃ³n"
                required>
                  <option value="" selected disabled hidden>Local inscripciÃ³n</option>
              </select>
            </fieldset>
            
            <fieldset class="form-group">
              <select
                name="NIVEL_ESTUDIO"
                id="cbx_type"
                data-name="Tipo examen"
                aria-label="Tipo examen"
                required>
                  <option value="" selected disabled hidden>Tipo de examen</option>
              </select>
            </fieldset>
            
            <fieldset class="form-group">
              <select
                name="CODIGO_AREA"
                id="cbx_area"
                data-name="Ãrea"
                aria-label="Ãrea"
                required>
                  <option value="" selected disabled hidden>Ãrea</option>
              </select>
            </fieldset>
          
            <fieldset class="form-group">
              <select
                name="CODIGO_CARRERA"
                id="cbx_carrera"
                data-name="Carrera"
                aria-label="Carrera"
                required>
                  <option value="" selected disabled hidden>Carrera</option>
              </select>
            </fieldset>
          <!--<fieldset class="form-group">
            <textarea name="COMENTARIO" id="COMENTARIO" maxlength="500" rows="8" cols="80" placeholder="Comentarios"></textarea>            
          </fieldset>-->

            <button type="submit" id="form_submit" class="validate">Registrarme <i class="fa fa-check"></i></button>
          </div>
        </div>
        
      </form>
      <br>
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'simulacrum-exam';
  @parent

@endsection