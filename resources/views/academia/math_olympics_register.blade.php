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

<div class="clearfix"></div>
<br><br>
  {{--@if($university->short_name=='UNI' || $university->short_name=='San Marcos' || $university->short_name=='PUCP')--}}
    <div class="row col-xs-12 center-xs admission-ads">
            <div class="admission-ads__container">
                <h1> ¡Participa en nuestra olimpiada! </h1>
            </div>
    </div>
  {{--@endif--}}

  <div class="row col-xs-12 start-xs center-sm olympic container-base">
    <div class="row col-xs-12 col-sm-10 col-md-9 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm olympic-info">
        <h2 class="olympic-info-title olympic-info-title-bottom">Información</h2>
        <ul class="olympic-info-ul">
          <li>
            <span class="olympic-info-li-title">Descripción:</span>
            <p> {{$descripcion}}</p>
          </li>
          <li>
            <span class="olympic-info-li-title">Fecha de Inscripción:</span>
            <p>Inicio: {{ date('d/m/Y',strtotime($inicio))}}</p>
            <p>Fin: {{ date('d/m/Y',strtotime($fin))}}</p>
          </li>
          <li>
            <span class="olympic-info-li-title">Lugar:</span>
            <p>{{$lugar}} ({{$distrito}})</p>
          </li>
        </ul>
      </div>

      <form class="col-xs-12 col-sm col-md-7 col-lg-7 olympic-form" name="olimpiada_form" id="olimpiada_form" method="post" action="">
        @csrf
        <div class="row start-xs step-1 step-container">
          <h2>Regístrate para participar</h2>

          <div class="row col-xs-12 start-xs olympic-step1-steps">
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
          <h2>Déjanos tus datos</h2>
          <div class="col-xs-12 start-xs">
            
            <fieldset>
              <input type="hidden" name="TIPO_DOCUMENTO" value="01" />
              <input type="hidden" name="CODE_URL" id="CODE_URL" value="{{ $codurl }}">
            </fieldset>

            <div class="col-xs-12">
              <fieldset class="form-group">
                <input type="onlynumber" name="NRO_DOCUMENTO" id="step1_dni" placeholder="DNI" aria-label="DNI" min="0" max="99999999" minlength="8" maxLength="8" autocomplete="off" required />
              </fieldset>
            </div>

            <fieldset class="form-group">
              <input type="onlytext" name="NOMBRES" id="names" placeholder="Nombres" minlength="2" maxlength="40" autocomplete="off" required />
            </fieldset>

            <fieldset class="form-group">
              <input type="onlytext" name="PRIMER_APELLIDO" id="step1_PRIMER_APELLIDO" placeholder="Apellido paterno" aria-label="Apellido paterno" minlength="3" maxlength="40" autocomplete="off" required />
            </fieldset>

            <fieldset class="form-group">
              <input type="onlytext" name="SEGUNDO_APELLIDO" id="step1_SEGUNDO_APELLIDO" placeholder="Apellido materno" aria-label="Apellido materno" minlength="3" maxlength="40" autocomplete="off" required />
            </fieldset>

            <fieldset class="form-group">
              <input type="email" name="CORREO_E" id="email" placeholder="Email" autocomplete="off" required />
            </fieldset>
            
            <fieldset class="form-group">
                <select name="DEPTO_UBIG" id="cbx_ubigeo" data-name="Departamento" aria-label="Departamento" required>
                    <option value="" selected="" disabled="" hidden="">Departamento</option>
                    <option value="01">Amazonas</option>
                    <option value="02">Ancash</option>
                    <option value="03">Apurimac</option>
                    <option value="04">Arequipa</option>
                    <option value="05">Ayacucho</option>
                    <option value="06">Cajamarca</option>
                    <option value="07">Callao</option>
                    <option value="08">Cusco</option>
                    <option value="09">Huancavelica</option>
                    <option value="10">Huanuco</option>
                    <option value="11">Ica</option>
                    <option value="12">Junín</option>
                    <option value="13">La Libertad</option>
                    <option value="14">Lambayeque</option>
                    <option value="15">Lima</option>
                    <option value="16">Loreto</option>
                    <option value="17">Madre de Dios</option>
                    <option value="18">Moquegua</option>
                    <option value="19">Pasco</option>
                    <option value="20">Piura</option>
                    <option value="21">Puno</option>
                    <option value="22">San Martín</option>
                    <option value="23">Tacna</option>
                    <option value="24">Tumbes</option>
                    <option value="25">Ucayali</option>
                    <option value="99">Extranjero</option>
                </select>
            </fieldset>

            <fieldset class="form-group">
                <select name="TIPO_INSTITUCION" id="cbx_institucion" data-name="Tipo de institución" aria-label="Tipo de institución" required>
                    <option value="" selected="" disabled="" hidden="">Tipo de institución</option>
                    <option value="1">Nacional</option>
                    <option value="2">Particular</option>
                </select>
            </fieldset>

            <fieldset class="form-group">
              <input type="text" name="COLEGIO_PROCEDENCIA" id="colegio_procedencia" placeholder="Colegio de procedencia" minLength="3" maxLength="50" autocomplete="off" required />
            </fieldset>

            <fieldset class="form-group">
              <select
                name="NIVEL_ESTUDIO"
                id="cbx_type"
                data-name="Tipo examen"
                aria-label="Tipo examen"
                required>
                  <option value="" selected disabled hidden>Nivel de estudios</option>                  
              </select>
             
            </fieldset>

            <button type="submit" id="form_submit" class="validate">Registrarme <i class="fa fa-check"></i></button>
          </div>
        </div>
      </form>

    </div>
  </div>

      @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'olympics';
  @parent

@endsection