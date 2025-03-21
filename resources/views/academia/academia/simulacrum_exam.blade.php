{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum-exam', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Simulacros de '. $university->name)
@section('content')
<style>
  .simulacrum-info {
    line-height: 22px;
  }

  #simulacro_form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    text-align: center;
    flex-direction: column;
  }

  #simulacro_form h2 {
    font-size: 1.6em;
    font-family: "Geogrotesque-Rg";
  }

  #simulacro_form a {
    padding: 10px 40px;
    background: #f4633a;
    font-family: "Geogrotesque-Rg";
    color: white;
    font-size: 1.2em;
    font-weight: bolder;
    border-radius: 4px;
  }

  #simulacro_form a:hover {
    background: #f4633a;
    box-shadow: 1px 2px 10px #ccc;
  }

  #select_A,
  #select_B,
  #select_C,
  #select_D,
  #select_E,
  #select_1,
  #select_2,
  #select_3,
  #select_4,
  #select_5,
  #select_6,
  #select_7,
  #select_8,
  #select_9,
  #select_10,
  #select_11 {
    display: none;
  }
</style>

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

<!-- <div class="row col-xs-12 center-xs admission-ads">
  <div class="admission-ads__container">
    <h1>¡Participa!</h1>
  </div>
</div>
<br> -->

@endif

<div class="row col-xs-12 start-xs center-sm simulacrum container-base">
  <div class="row col-xs-12 col-sm-10 col-md-9 start- s start-sm start-md">

    @if($university->short_name=='UNI')
    <div class="col-xs-12 col-sm simulacrum-info">
      <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Información</h2>
      <ul class="simulacrum-info-ul">
        <li>
          <span class="simulacrum-info-li-title">Descripción:</span>
          <p id='data'>Concurso Gratuito de Becas UNI 2020 - 1</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Fecha:</span>
          <!-- <p>9 de febrero: Aptitud académica y Humanidades</p> -->
          <p>19 de febrero</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Hora:</span>
          <p>09:00 a. m.</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Sedes:</span>
          <p>Comas: Av. Universitaria 6102</p>
          <p>Los Olivos: Av. Tomás Valle 845</p>
          <p>Santa Beatriz: Av.Arequipa 1250</p>
          {{--<p>Villa El Salvador: Av. Pastor Sevilla s/n mz. D lote 3</p>--}}
        </li>
        <br>
        <!-- <li>
          <span style="font-weight: normal">
            <i>* La activación será desde el lunes 18 hasta al viernes 22 de noviembre.</i>
            </span><br>
            <span style="font-weight: normal">
          <i>* Los alumnos deberán indicar en qué sede rendirán el simulacro.</i>
            </span>
        </li> -->
      </ul>
    </div>
    <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" name="simulacro_form" id="simulacro_form" method="post" action="">
      <h2>Inscripciones finalizadas </h2>
    </form>

    <!-- <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" id="formulario_registro_seminario" method="post">
      @csrf
      <div class="row start-xs step-1 step-container">
        <h2>Regí­strate para participar</h2>

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
        <h2>Déjanos tus datos</h2>
        <div class="col-xs-12 start-xs">

          <fieldset>
            <input name="tipodocumento_id" id="tipodocumento_id" value="01" hidden />
            <input name="servicio_id" id="servicio_id" value="ACAUN" hidden />
            <input name="code_url" id="code_url" value="bd7eb1ed6a" hidden>
            <input name="anioacademico_id" id="anioacademico_id" value="2020" hidden>
            <input name="comentario_id" id="comentario_id" value="Comentario" hidden>
          </fieldset>
          <fieldset class="form-group">
            <input type="number" name="documento_id" id="documento_id" placeholder="DNI" aria-label="DNI" min="0" max="99999999" minlength="8" maxLength="8" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="onlytext" name="nombres_id" id="nombres_id" placeholder="Nombres" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="onlytext" name="apellidopaterno_id" id="apellidopaterno_id" placeholder="Apellido paterno" aria-label="Apellido paterno" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="onlytext" name="apellidomaterno_id" id="apellidomaterno_id" placeholder="Apellido materno" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="email" name="correo_id" id="correo_id" placeholder="Correo electrónico" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="number" name="celular_id" id="celular_id" placeholder="Celular" minlength="9" maxLength="9" required />
          </fieldset>
          <fieldset class="form-group">
            <select name="local_id" id="local_id">
              <option value="" selected disabled>Local inscripción</option>
              <option value="ISACADCO">Comas Academia</option>
              <option value="ISACADLO">Los Olivos Academia</option>
              <option value="ISACADSB">Santa Beatriz Academia</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <select name="nivel_id" id="nivel_id">
              <option value="" selected disabled>Tipo de examen</option>
              <option value="00114">Semestral Uni</option>
              <option value="00116">Anual</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <select name="area_id" id="area_id">
              <option value="" selected disabled>Área</option>
              <option value="1">FACULTAD DE INGENIERÍA GEOLÓGICA, MINERÍA Y METALÚRGICA</option>
              <option value="10">FACULTAD DE INGENIERÍA QUÍMICA Y TEXTIL</option>
              <option value="11">FACULTAD DE INGENIERÍA AMBIENTAL</option>
              <option value="2">FACULTAD DE INGENIERÍA ECONÓMICA, ESTADÍSTICA Y CIENCIAS SOCIALES</option>
              <option value="3">FACULTAD DE INGENIERÍA CIVIL</option>
              <option value="4">FACULTAD DE ARQUITECTURA, URBANISMO Y ARTES</option>
              <option value="5">FACULTAD DE INGENIERÍA INDUSTRIAL Y DE SISTEMAS</option>
              <option value="6">FACULTAD DE INGENIRÍA ELÉCTRICA Y ELECTRÓNICA</option>
              <option value="7">FACULTAD DE INGENIERÍA MECÁNICA</option>
              <option value="8">FACULTAD DE CIENCIAS</option>
              <option value="9">FACULTAD DE INGENIERÍA DE PETRÓLEO Y PETROQUÍMICA</option>
            </select>
          </fieldset>

          <fieldset class="form group" id="select_0">
            <select name="carrera_id" id="carrera_id-0">
              <option value="" disabled selected>Elige Carrera</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_1">
            <select name="carrera_id" id="carrera_id-1">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="1" selected>INGENIERÍA METALÚRGICA</option>
              <option value="2">INGENIERÍA GEOLÓGICA</option>
              <option value="3">INGENIERÍA DE MINAS</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_10">
            <select name="carrera_id" id="carrera_id-10">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="24">INGENIERÍA QUÍMICA</option>
              <option value="25">INGENIERÍA TEXTIL</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_11">
            <select name="carrera_id" id="carrera_id-11">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="26">INGENIERÍA AMBIENTAL</option>
              <option value="27">INGENIERÍA DE HIGIENE Y SEGURIDAD INDUSTRIAL</option>
              <option value="28">INGENIERÍA SANITARIA</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_2">
            <select name="carrera_id" id="carrera_id-2">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="4">INGENIERÍA ESTADÍSTCA</option>
              <option value="5">INGENIERÍA ECONÓMICA</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_3">
            <select name="carrera_id" id="carrera_id-3">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="6">INGENIERÍA CIVIL</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_4">
            <select name="carrera_id" id="carrera_id-4">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="7">ARQUITECTURA</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_5">
            <select name="carrera_id" id="carrera_id-5">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="8">INGENIERÍA DE SISTEMAS</option>
              <option value="9">INGENIERÍA INDUSTRIAL</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_6">
            <select name="carrera_id" id="carrera_id-6">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="10">INGENIERÍA DE TELECOMUNICACIONES</option>
              <option value="11">INGENIERÍA ELÉCTRICA</option>
              <option value="12">INGENIERÍA ELECTRÓNICA</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_7">
            <select name="carrera_id" id="carrera_id-7">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="13">INGENIERÍA MECÁNICA</option>
              <option value="14">INGENIERÍA MECÁNICA-ELÉCTRICA</option>
              <option value="15">INGENIERÍA MECATRÓNICA</option>
              <option value="16">INGENIERÍA NAVAL</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_8">
            <select name="carrera_id" id="carrera_id-8">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="17">CIENCIA DE LA COMPUTACIÓN </option>
              <option value="18">FÍSICA</option>
              <option value="19">INGENIERÍA FÍSICA</option>
              <option value="20">MATEMÁTICA</option>
              <option value="21">QUÍMICA</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_9">
            <select name="carrera_id" id="carrera_id-9">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="22">INGENIERÍA DE PETRÓLEO Y GAS NATURAL</option>
              <option value="23">INGENIERÍA PETROQUÍMICA</option>
            </select>
          </fieldset>

          <input type="hidden" id="area_valor" />

          <input type="hidden" id="carrera_valor" />


        </div>
      </div>
      <button value="Submit" type="submit" d="button_send_form" class="validate" style="margin-left: 15px; margin-bottom:15px;">Registrarme <i class="fa fa-check"></i></button>
    </form> -->


    @endif

    @if($university->short_name=='San Marcos')
    <div class="col-xs-12 col-sm simulacrum-info">
      <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Información del simulacro</h2>
      <ul class="simulacrum-info-ul">
        <li>
          <span class="simulacrum-info-li-title">Descripción:</span>
          <p id='data'>Simulacro tipo admisión San Marcos</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Fecha del examen:</span>
          <p id='data'>Verano - Jueves 27 de Febrero</p>
          <p id='data'>Repaso - Viernes 28 de Febrero</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Hora:</span>
          <p>8:00 a. m. - 11:30 a. m.</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Locales:</span>
          <p>Los Olivos: Av. Tomás Valle 845</p>
          <p>Santa Beatriz: Av. Arequipa 1250</p>
          <p>Marsano: Av. Tomás Marsano 4773, Surco</p>
          <p>Villa El Salvador: Av. Pastor Sevilla s/n mz. D lote 3</p>
          <p>Comas: Av. Universitaria 6102</p>
        </li>
      </ul>
    </div>
    <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" id="formulario_registro_seminario_sm" method="post">
      @csrf
      <div class="row start-xs step-1 step-container">
        <h2>Regí­strate para participar</h2>

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
        <h2>Déjanos tus datos</h2>
        <div class="col-xs-12 start-xs">

          <fieldset>
            <input name="tipodocumento_id" id="tipodocumento_id" value="01" hidden />
            <input name="servicio_id" id="servicio_id" value="ACASM" hidden />
            <input name="code_url" id="code_url" value="5b0e0a93f5" hidden>
            <input name="anioacademico_id" id="anioacademico_id" value="2020" hidden>
            <input name="comentario_id" id="comentario_id" value="Comentario" hidden>
          </fieldset>
          <fieldset class="form-group">
            <input type="number" name="documento_id" id="documento_id" placeholder="DNI" aria-label="DNI" min="8" max="8" minlength="8" maxlength="8" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="onlytext" name="nombres_id" id="nombres_id" placeholder="Nombres" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="onlytext" name="apellidopaterno_id" id="apellidopaterno_id" placeholder="Apellido paterno" aria-label="Apellido paterno" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="onlytext" name="apellidomaterno_id" id="apellidomaterno_id" placeholder="Apellido materno" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="email" name="correo_id" id="correo_id" placeholder="Correo electrónico" required />
          </fieldset>
          <fieldset class="form-group">
            <input type="number" name="celular_id" id="celular_id" placeholder="Celular" min="9" max="9" minlength="9" maxlength="9" required />
          </fieldset>
          <fieldset class="form-group">
            <select name="local_id" id="local_id">
              <option value="" selected disabled>Local inscripción</option>
              <option value="ISACADCO">Comas Academia</option>
              <option value="ISACADLO">Los Olivos Academia</option>
              <option value="ISACADMA">Marsano Academia</option>
              <option value="ISACADSB">Santa Beatriz Academia</option>
              <option value="ISACADVS">Villa el Salvador Academia</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <select name="nivel_id" id="nivel_id">
              <option value="" selected disabled>Tipo de examen</option>
              <option value="00104">Intensivo</option>
              <option value="00107">Repaso 1</option>
              <option value="00106">Verano</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <select name="area_id" id="area_id">
              <option value="" selected disabled>Área</option>
              <option value="A">CIENCIAS DE LA SALUD</option>
              <option value="B">CIENCIAS BÁSICAS</option>
              <option value="C">INGENIERÍAS</option>
              <option value="D">CIENCIAS ECONÓMICAS Y DE LA GESTIÓN</option>
              <option value="E">HUMANIDADES Y CIENCIAS JURIDICAS Y SOCIALES</option>

            </select>
          </fieldset>

          <fieldset class="form group" id="select_0">
            <select name="carrera_id" id="carrera_id-0">
              <option value="" disabled selected>Elige Carrera</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_A">
            <select name="carrera_id" id="carrera_id-A">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="1">Medicina Humana</option>
              <option value="10">Ciencias de los Alimentos</option>
              <option value="11">Toxicología</option>
              <option value="12">Odontología</option>
              <option value="13">Medicina Veterinaria</option>
              <option value="14">Psicología</option>
              <option value="15">Psicología Organizacional y de la gestión Humana</option>
              <option value="2">Obstetricia</option>
              <option value="3">Enfermería</option>
              <option value="4">Tec. Med. Lab. Clínico y anatomía y Patológica</option>
              <option value="5">Tec. Med. Terapia física y rehabilitación</option>
              <option value="6">Tec. Med. Radiología</option>
              <option value="7">Tec. Med. Terapia Ocupacional</option>
              <option value="8">Nutrición</option>
              <option value="9">Farmacia y Bioquímica</option>

            </select>
          </fieldset>
          <fieldset class="form group" id="select_B">
            <select name="carrera_id" id="carrera_id-B">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="16">Química</option>
              <option value="17">Ciencias Biológicas</option>
              <option value="18">Genética y Biotecnología</option>
              <option value="19">Microbiología y Parasitología</option>
              <option value="20">Física</option>
              <option value="21">Matemátic</option>
              <option value="22">Estadística</option>
              <option value="23">Investigación Operativa</option>
              <option value="24">computación científica</option>

            </select>
          </fieldset>
          <fieldset class="form group" id="select_C">
            <select name="carrera_id" id="carrera_id-C">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="25">Ingeniería Química</option>
              <option value="26">Ingeniería Agroindustrial</option>
              <option value="27">Ingeniería Biomédica</option>
              <option value="28">Ingeniería Mecánica de fluidos</option>
              <option value="29">Ingeniería Geológica</option>
              <option value="30">Ingeniería Geográfica</option>
              <option value="31">Ingeniería de Minas</option>
              <option value="32">Ingeniería Metalúrgica</option>
              <option value="33">Ingeniería Civil</option>
              <option value="34">Ingeniería Ambiental</option>
              <option value="35">Ingeniería Industrial</option>
              <option value="36">Ingeniería Textil y Confesiones</option>
              <option value="37">Ingeniería de Seguridad y Salud en el Trabajo</option>
              <option value="38">Ingeniería Electrónica</option>
              <option value="39">Ingeniería Eléctrica</option>
              <option value="40">Ingeniería de Telecomunicaciones</option>
              <option value="41">Ingeniería de Sistemas</option>
              <option value="42">Ingeniería de Software</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_D">
            <select name="carrera_id" id="carrera_id-D">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="43">Administración</option>
              <option value="44">Administración de Turismo</option>
              <option value="45">Administración de Negocios Internacionales</option>
              <option value="46">Contabilidad</option>
              <option value="47">Gestión Tributaria</option>
              <option value="48">Auditoria Empresarial y del Sector Publico</option>
              <option value="49">Economía</option>
              <option value="50">Economía Pública</option>
              <option value="51">Economía Internacional</option>
            </select>
          </fieldset>
          <fieldset class="form group" id="select_E">
            <select name="carrera_id" id="carrera_id-E">
              <option value="" disabled>Carrera</option>
              <option value="">Seleccione Carrera</option>
              <option value="52">Literatura</option>
              <option value="53">Filosofía</option>
              <option value="54">Lingüística</option>
              <option value="55">Comunicación Social</option>
              <option value="56">Arte</option>
              <option value="57">Bibliotecología y Ciencias de la Información</option>
              <option value="58">Danza</option>
              <option value="59">Conservación y Restauración</option>
              <option value="60">Educación Inicial</option>
              <option value="61">Educación Primaria</option>
              <option value="62">Educación Secundaria</option>
              <option value="63">Educación Física</option>
              <option value="64">Derecho</option>
              <option value="65">Ciencia Política</option>
              <option value="66">Historia</option>
              <option value="67">Sociología</option>
              <option value="68">Antropología</option>
              <option value="69">Arqueología</option>
              <option value="70">Trabajo Social</option>
              <option value="71">Geografía</option>
            </select>
          </fieldset>

          <input type="hidden" id="area_valor" />
          <input type="hidden" id="carrera_valor" />
        </div>
      </div>
      <button value="Submit" type="submit" d="button_send_form" class="validate" style="margin-left: 15px; margin-bottom:15px;">Registrarme <i class="fa fa-check"></i></button>
    </form>
    @endif

    @if($university->short_name=='PUCP')
    <div class="col-xs-12 col-sm simulacrum-info">
      <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Información del simulacro</h2>
      <ul class="simulacrum-info-ul">
        <li>
          <span class="simulacrum-info-li-title">Descripción:</span>
          <p id='data'>Simulacro tipo admisión - Verano Católica</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Fecha del examen:</span>
          <p>25/01/2020</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Hora:</span>
          <p>8:00 a. m. - 11:30 a. m.</p>
        </li>
        <li>
          <span class="simulacrum-info-li-title">Sedes:</span>
          {{--<p>San Isidro: Av. Arequipa 3505</p>--}}
          <p>Santa Beatriz: Av. Arequipa 1250</p>
          <p>Los Olivos: Av. Tomás Valle 845</p>
          {{--<p>Cercado de Lima (Torrico): Jr. Rufino Torrico 862</p>--}}
        </li>
      </ul>
    </div>
    <!--     <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" name="simulacro_form" id="simulacro_form" method="post" action="">
      <h2>¡Registrate haciendo click en el botón!</h2>
      <a target="_blank" href="https://forms.gle/KUfgbtJDEPCAdKxE9">Click aquí</a>
    </form> -->
    @endif

    <!-- <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" name="simulacro_form" id="simulacro_form" method="post" action="">
      <h2>Inscripciones finalizadas </h2>
    </form> -->
  </div>
</div>
<!-- UNI -->
<!-- <script>
  $("#carrera_id-1").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-10").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-11").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-2").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-3").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-4").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-5").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-6").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-7").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-8").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-9").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });


  $("#area_id").change(function() {

    $("#area_valor").val($(this).val());
    console.log("change", $(this).val());

    if ($(this).val() == 1) {
      $("#select_1").show();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 10) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").show();
      $("#select_11").hide();
    }
    if ($(this).val() == 11) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").show();
    }
    if ($(this).val() == 2) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").show();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 3) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").show();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 4) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").show();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 5) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").show();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 6) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").show();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 7) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").show();
      $("#select_8").hide();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 8) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").show();
      $("#select_9").hide();
      $("#select_10").hide();
      $("#select_11").hide();
    }
    if ($(this).val() == 9) {
      $("#select_1").hide();
      $("#select_0").hide();
      $("#select_2").hide();
      $("#select_3").hide();
      $("#select_4").hide();
      $("#select_5").hide();
      $("#select_6").hide();
      $("#select_7").hide();
      $("#select_8").hide();
      $("#select_9").show();
      $("#select_10").hide();
      $("#select_11").hide();
    }
  })
</script>
<script>
  (function() {
    console.log("Ready")
    $("#formulario_registro_seminario").submit(function(event) {
      console.log("onclick", event);
      event.preventDefault();
      _ajax();
    });
  })()

  function _ajax() {
    let dataForm = $("#formulario_registro_seminario").serialize();

    const obj = JSON.stringify({
      "CODE_URL": $("#code_url").val(),
      "BLDG_TBL": $("#local_id").val(),
      "NIVEL_ESTUDIO": $("#nivel_id").val(),
      "SERVICIO": $("#servicio_id").val(),
      "CODIGO_AREA": $("#area_valor").val(),
      "CODIGO_CARRERA": $("#carrera_valor").val(),
      "ANIO_ACADEMICO": 2020,
      "TIPO_DOCUMENTO": $("#tipodocumento_id").val(),
      "NRO_DOCUMENTO": $("#documento_id").val(),
      "NOMBRES": $("#nombres_id").val(),
      "PRIMER_APELLIDO": $("#apellidopaterno_id").val(),
      "SEGUNDO_APELLIDO": $("#apellidomaterno_id").val(),
      "CORREO_E": $("#correo_id").val(),
      "COMENTARIO": $("#comentario_id").val(),
      "NRO_CELULAR": $("#celular_id").val()
    });
    console.log("data", obj)
    $.ajax({
      type: "POST",
      url: "http://intranet.trilce.edu.pe/api/Cliente/Publico/SimulacroInscripcion",
      contentType: "application/json",
      data: obj,
      success: function(data) {
        console.log("success", data)
        if (data.EST_PROCESO == "1") {
          window.location = "http://www.trilce.edu.pe/academia/simulacros/exito";
        } 
        if (data.EST_PROCESO == "0") {
          alert("¡El registro ya existe, intente con otro código!")
        }
        else {
          alert("¡Falta completar campos!")
        }
      },
      error: function(err) {
        console.log("error", err)
      }
    });
  }
</script>-->
<!--./ FIN UNI -->

<!-- SM -->
<script>
  $("#carrera_id-A").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-B").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-C").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-D").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#carrera_id-E").change(function() {
    console.log("cambio", $(this).val())
    $("#carrera_valor").val($(this).val());
  });

  $("#area_id").change(function() {

    $("#area_valor").val($(this).val());
    console.log("change", $(this).val());

    if ($(this).val() == "A") {
      $("#select_0").hide();
      $("#select_A").show();
      $("#select_B").hide();
      $("#select_C").hide();
      $("#select_D").hide();
      $("#select_E").hide();
    }
    if ($(this).val() == "B") {
      $("#select_0").hide();
      $("#select_A").hide();
      $("#select_B").show();
      $("#select_C").hide();
      $("#select_D").hide();
      $("#select_E").hide();
    }
    if ($(this).val() == "C") {
      $("#select_0").hide();
      $("#select_A").hide();
      $("#select_B").hide();
      $("#select_C").show();
      $("#select_D").hide();
      $("#select_E").hide();
    }
    if ($(this).val() == "D") {
      $("#select_0").hide();
      $("#select_A").hide();
      $("#select_B").hide();
      $("#select_C").hide();
      $("#select_D").show();
      $("#select_E").hide();
    }
    if ($(this).val() == "E") {
      $("#select_0").hide();
      $("#select_A").hide();
      $("#select_B").hide();
      $("#select_C").hide();
      $("#select_D").hide();
      $("#select_E").show();
    }
  })
</script>
<script>
  (function() {
    console.log("Ready")
    $("#formulario_registro_seminario_sm").submit(function(event) {
      console.log("onclick", event);
      event.preventDefault();
      _ajax();
    });
  })()

  function _ajax() {
    let dataForm = $("#formulario_registro_seminario_sm").serialize();

    const obj = JSON.stringify({
      "CODE_URL": $("#code_url").val(),
      "BLDG_TBL": $("#local_id").val(),
      "NIVEL_ESTUDIO": $("#nivel_id").val(),
      "SERVICIO": $("#servicio_id").val(),
      "CODIGO_AREA": $("#area_valor").val(),
      "CODIGO_CARRERA": $("#carrera_valor").val(),
      "ANIO_ACADEMICO": 2020,
      "TIPO_DOCUMENTO": $("#tipodocumento_id").val(),
      "NRO_DOCUMENTO": $("#documento_id").val(),
      "NOMBRES": $("#nombres_id").val(),
      "PRIMER_APELLIDO": $("#apellidopaterno_id").val(),
      "SEGUNDO_APELLIDO": $("#apellidomaterno_id").val(),
      "CORREO_E": $("#correo_id").val(),
      "COMENTARIO": $("#comentario_id").val(),
      "NRO_CELULAR": $("#celular_id").val()
    });
    console.log("data", obj)
    $.ajax({
      type: "POST",
      url: "http://intranet.trilce.edu.pe/api/Cliente/Publico/SimulacroInscripcion",
      contentType: "application/json",
      data: obj,
      success: function(data) {
        console.log("success", data)
        if (data.EST_PROCESO == "1") {
          window.location = "http://www.trilce.edu.pe/academia/simulacros/exito";
        } else {
          alert("¡Faltan completar datos correctamente!")
        }
      },
      error: function(err) {
        console.log("error", err)
      }
    });
  }
</script>
<!--./ FIN SM -->
<script>
  //Celular
  var inputCelular = document.querySelector('#celular_id');

  inputCelular.onkeyup = function(e) {
    var max = 9; // The maxlength you want

    if (inputCelular.value.length > max) {
      inputCelular.value = inputCelular.value.substring(0, max);
    }
  };

//Documento
  var inputDocumento = document.querySelector('#documento_id');

  inputDocumento.onkeyup = function(e) {
    var max = 8; // The maxlength you want

    if (inputDocumento.value.length > max) {
      inputDocumento.value = inputDocumento.value.substring(0, max);
    }
  };
</script>

@include('academia.partials.card_bottom')
@endsection

@section('scripts')
page = 'simulacrum-exam';
@parent

@endsection