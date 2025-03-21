{{! $breadcrumbs = Breadcrumbs::render('academia-enrollment') }}
@extends('academia.layouts.template')
@section('title', 'Preinscripción en línea')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-enrollment"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Preinscripción</h1>
      </div>
    </div>
  </div>

  <div class="enrollment-steps" id="steps-guide">
    <div class="active">Paso 1</div>
    <div>Paso 2</div>
    <div>Paso 3</div>
  </div>

  @if ($errors->any())
    <div class="row col-xs-12 center-xs" id="error-container">
      <div class="form-error">
          <ul class="form-error-ul">
          @foreach ($errors->all() as $error)
            <li class="form-li">{{ $error }}</li>
          @endforeach

            {{-- <li class="form-li">El campo <span>Test</span> debe ser mayor a 3 caracteres</li>
            <li class="form-li">El campo <span>Test</span> debe ser mayor a 3 caracteres</li> --}}
          </ul>
      </div>
    </div>
  @endif

  <div class="row col-xs-12 center-xs container-base">
    <div class="row col-xs-12 col-sm-9 start col-md-8 start-sm start-md enrollment-forms">
      <form class="col-xs-12" name="formenrollment" method="post" url="preinscripcion">
        @csrf

        <div class="tab tab1 row">
            <div class="col-xs center-xs xs-hide enrollment-img">
              <img src="{{ url('static/images/academia/img-enrollment-01.png') }}" alt="Matrícula en linea">
            </div>

            <div class="col-xs start-xs blockb">
              <h2>Ficha de <span>preinscripción</span></h2>
              <p>Para ayudarte a realizar este proceso rápidamente, ingresa los siguientes datos.</p>

              <div class="form">
                  <div class="row col-xs-12">

                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <input type="number" min="0" name="step1_dni" placeholder="DNI del alumno" aria-label="DNI" id="step1_dni" minlength="8" maxLength="8" required>
                      </fieldset>
                    </div>

                    <div class="col-xs-12 enrollment-forms--dnidownload" id="dnidownload">
                      <a id="dnidownload-link" target="_blank">Ya te encuentras registrado, <b>descarga tu ficha de preinscripción.</b></a>
                    </div>

                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <select name="step1_university" id="step1_university" aria-label="Universidad" required>
                          <option value="" selected disabled hidden>Tipo de preparación</option>
                          <option value="ACAUN">UNI</option>
                          <option value="ACASM">San Marcos</option>
                          <option value="ACACA">Católica</option>
                        </select>
                      </fieldset>
                    </div>

                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <select name="step1_cycle" id="step1_cycle" aria-label="Ciclo" required>
                          <option value="" selected disabled>Ciclo</option>
                        </select>
                      </fieldset>
                    </div>

                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <select name="step1_venue" id="step1_venue" aria-label="Sede" required>
                          <option value="" selected disabled>Sede</option>
                        </select>
                      </fieldset>
                    </div>

                    {{--
                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <select name="step1_turn" id="step1_turn" aria-label="Turno" required>
                          <option value="" selected disabled hidden >Turno</option>
                          <option value="Mañana">Mañana</option>
                          <option value="Tarde">Tarde</option>
                        </select>
                      </fieldset>
                    </div>
                    --}}

                    <input type="text" class="condition" name="step1_condition" placeholder="Condición" value="P" hidden readonly>

                    <input type="text" class="condition" id="step1_university_key" name="step1_university_key" value="" hidden readonly>
                    <input type="text" class="condition" id="step1_cycle_key" name="step1_cycle_key" value="" hidden readonly>
                    <input type="text" class="condition" id="step1_venue_key" name="step1_venue_key" value="" hidden readonly>

                  </div>

                  {{-- <div class="col-xs-12 col-sm-10">
                    <div class="file-upload-wrapper form-group" data-text="Select your file!">
                        <input type="file" accept="image/jpeg, image/png" maxfilesize="0.700" mindimensions="500x500" name="step1_photo" class="file-upload-field" id="step1_photo" data-text="Adjuntar foto" required>
                    </div>
                    <p class="formats">
                      <span>- Formatos: .jpg, .png</span><br>
                      <span>- Peso máximo: 700kb</span>
                    </p>
                  </div> --}}

              </div>
            </div>
        </div>

        <div class="tab tab2 row center-xs">
            <div class="row col-xs-12 start-xs">
                <h2>Datos generales del <i>Alumno</i></h2>
                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="onlytext" minlength="3" name="step2_names" aria-label="Nombres" placeholder="Nombres" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="onlytext" minlength="3" name="step2_lastname" aria-label="Apellido paterno" placeholder="Apellido paterno" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="onlytext" minlength="3" name="step2_lastname_mother" aria-label="Apellido materno" placeholder="Apellido materno" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-3">
                      <fieldset class="form-group">
                        <input type="date" min="1918-01-01" max="<?php echo date('Y-m-d'); ?>" class="inputfull" name="step2_birth" id="step2_birth" placeholder="Fecha de nacimiento" aria-label="Fecha de nacimiento" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                      <fieldset class="form-group">
                        <select name="step2_district" id="step2_district" aria-label="Distrito" required>
                          <option value="" selected disabled>Distrito</option>
                          <option value="Lima">Lima</option>
                          <option value="Ancon">Ancón</option>
                          <option value="Ate">Ate</option>
                          <option value="Barranco">Barranco</option>
                          <option value="Brena">Bre&ntilde;a</option>
                          <option value="Carabayllo">Carabayllo</option>
                          <option value="Chaclacayo">Chaclacayo</option>
                          <option value="Chorrillos">Chorrillos</option>
                          <option value="Cieneguilla">Cieneguilla</option>
                          <option value="Comas">Comas</option>
                          <option value="El Agustino">El Agustino</option>
                          <option value="Independencia">Independencia</option>
                          <option value="Jesus Maria">Jesús María</option>
                          <option value="La Molina">La Molina</option>
                          <option value="La Victoria">La Victoria</option>
                          <option value="Lince">Lince</option>
                          <option value="Los Olivos">Los Olivos</option>
                          <option value="Lurigancho">Lurigancho</option>
                          <option value="Lurin">Lurín</option>
                          <option value="Magdalena del Mar">Magdalena del Mar</option>
                          <option value="Magdalena Vieja">Magdalena Vieja</option>
                          <option value="Miraflores">Miraflores</option>
                          <option value="Pachacamac">Pachacamac</option>
                          <option value="Pucusana">Pucusana</option>
                          <option value="Puente Piedra">Puente Piedra</option>
                          <option value="Punta Hermosa">Punta Hermosa</option>
                          <option value="Punta Negra">Punta Negra</option>
                          <option value="Rimac">Rímac</option>
                          <option value="San Bartolo">San Bartolo</option>
                          <option value="San Borja">San Borja</option>
                          <option value="San Isidro">San Isidro</option>
                          <option value="San Juan De Lurigancho">San Juan de Lurigancho</option>
                          <option value="San Juan De Miraflores">San Juan de Miraflores</option>
                          <option value="San Luis">San Luis</option>
                          <option value="San Martin De Porres">San Martín de Porres</option>
                          <option value="San Miguel">San Miguel</option>
                          <option value="Santa Anita">Santa Anita</option>
                          <option value="Santa Maria Del Mar">Santa María del Mar</option>
                          <option value="Santa Rosa">Santa Rosa</option>
                          <option value="Santiago De Surco">Santiago de Surco</option>
                          <option value="Surquillo">Surquillo</option>
                          <option value="Villa El Salvador">Villa El Salvador</option>
                          <option value="Villa Maria Del Triunfo">Villa María del Triunfo</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="text" class="inputfull" name="step2_address" placeholder="Dirección" aria-label="Dirección" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-3">
                      <fieldset class="form-group">
                        <input type="tel" name="step2_phonehome" placeholder="Telf. casa" aria-label="Telf. casa">
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                      <fieldset class="form-group">
                        <input type="tel" minlength="9" name="step2_mobile" placeholder="Celular" aria-label="Celular" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="email" name="step2_email" placeholder="Correo electrónico" aria-label="Correo electrónico" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm form-group-gender">
                      <fieldset class="form-group">

                        <input type="radio" id="step2_gender_labelHombre" name="step2_gender" value="hombre" placeholder="sexo" aria-label="Sexo" required>
                        <label for="step2_gender_labelHombre" class="radio">Sexo</label> <span class="gender_span">Hombre</span>                   

                        <input type="radio" id="step2_gender_labelMujer" name="step2_gender" value="mujer" placeholder="sexo" aria-label="Sexo" required>
                        <label for="step2_gender_labelMujer" class="radio">Sexo</label> <span class="gender_span">Mujer</span>

                      </fieldset>
                    </div>
                  </div>

                  <br /><br />

                  <h4>Datos académicos</h4>
                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="number" min="0" minlength="4" maxlength="4" name="step2_year_finish_school" placeholder="Año en que terminó el colegio" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="text" minlength="5" name="step2_school" placeholder="Colegio" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="text" minlength="3" name="step2_universitypostulate" placeholder="Universidad a la que postula" list="universityList" required>
                        <datalist id="universityList" title="Escoge una sugerencia">
                          <option value="Universidad Nacional Mayor de San Marcos (UNMSM)">
                          <option value="Universidad Nacional de Ingeniería (UNI)">
                          <option value="Pontificia Universidad Católica del Perú (PUCP)">
                        </datalist>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="onlytext" minlength="5" name="step2_profession" placeholder="Carrera" list="professionList" required>
                        {{-- list="professionList" --}}
                        {{-- <datalist id="professionList" title="Escoge una sugerencia">
                          <option value="Acuicultura">
                          <option value="Administración">
                          <option value="Administración">
                          <option value="Administración en Turismo">
                          <option value="Administración de Servicios">
                          <option value="Administración Bancaria">
                          <option value="Administración de Empresas">
                          <option value="Administración de Negocios">
                          <option value="Administración de Negocios Globales">
                          <option value="Administración de Negocios Internacionales">
                          <option value="Administración de Negocios Turísticos">
                          <option value="Administración de Recursos Forestales">
                          <option value="Administración de Servicios">
                          <option value="Administración de Servicios Turísticos">
                          <option value="Administración en Salud">
                          <option value="Administración en Turismo y Hotelería">
                          <option value="Administración en Turismo, Hotelería y Gastronomía">
                          <option value="Administración Hotelera">
                          <option value="Administración Hotelera y de Servicios">
                          <option value="Administración Hotelera y Ecoturismo">
                          <option value="Administración Pública">
                          <option value="Administración Turística">
                          <option value="Administración Turística Hotelera">
                          <option value="Administración y Agronegocios">
                          <option value="Administración y Emprendimiento">
                          <option value="Administración y Finanzas">
                          <option value="Administración y Gerencia">
                          <option value="Administración y Gestión Empresarial">
                          <option value="Administración y Marketing">
                          <option value="Administración y Marketing Estratégico">
                          <option value="Administración y Negocios del Deporte">
                          <option value="Administración y Negocios Internacionales">
                          <option value="Administración y Recursos Humanos">
                          <option value="Administración y Sistemas">
                          <option value="Agroindustrias">
                          <option value="Agronomía">
                          <option value="Agronomía Tropical">
                          <option value="Agropecuaria">
                          <option value="Antropología">
                          <option value="Antropología Social">
                          <option value="Archivística y Gestión Documental">
                          <option value="Archivo y Gestión Documental">
                          <option value="Arqueoarquitectura Y Gestión Turística">
                          <option value="Arqueología">
                          <option value="Arqueología e Historia">
                          <option value="Arquitectura">
                          <option value="Arquitectura de Interiores">
                          <option value="Arquitectura y Diseño de Interiores">
                          <option value="Arquitectura y Gestión de Proyectos">
                          <option value="Arquitectura y Urbanismo">
                          <option value="Arte">
                          <option value="Arte y Diseño Empresarial">
                          <option value="Arte y Diseño Gráfico Empresarial">
                          <option value="Artes Escénicas">
                          <option value="Artes Industriales">
                          <option value="Asistencia Gerencial Bilingüe">
                          <option value="Asistente de Gerencia">
                          <option value="Auditoría">
                          <option value="Auditoria Empresarial y del Sector Público">
                          <option value="Automatización Industrial">
                          <option value="Auxiliar de Educación inicial">
                          <option value="Bibliotecología y Ciencias de la Información">
                          <option value="Biología">
                          <option value="Biología en Acuicultura">
                          <option value="Biología Marina">
                          <option value="Biología y Microbiología">
                          <option value="Biología, Química y Tecnología de los Alimentos">
                          <option value="Bioquímica">
                          <option value="Biotecnología">
                          <option value="Bromatología y Nutrición">
                          <option value="Ciencia de los Alimentos">
                          <option value="Ciencia Política y Gobierno">
                          <option value="Ciencia Tecnología y Ambiente">
                          <option value="Ciencia y Tecnología de la Comunicación">
                          <option value="Ciencias Administrativas">
                          <option value="Ciencias Aeronáuticas">
                          <option value="Ciencias Agrarias">
                          <option value="Ciencias Biológicas">
                          <option value="Ciencias Contables">
                          <option value="Ciencias Contables y Financieras">
                          <option value="Ciencias de la Computación">
                          <option value="Ciencias de la Comunicación">
                          <option value="Ciencias de la Información">
                          <option value="Ciencias de los Alimentos">
                          <option value="Ciencias del Deporte">
                          <option value="Ciencias Económicas">
                          <option value="Ciencias Farmacéuticas y Bioquímica">
                          <option value="Ciencias Físico Matemática">
                          <option value="Ciencias Naturales y Ecología">
                          <option value="Ciencias Políticas">
                          <option value="Ciencias Publicitarias">
                          <option value="Ciencias Sociales">
                          <option value="Ciencias Sociales - Filosofía">
                          <option value="Ciencias Sociales - Geografía">
                          <option value="Ciencias Sociales - Historia">
                          <option value="Ciencias Sociales - Psicología">
                          <option value="Ciencias Sociales y Desarrollo Rural">
                          <option value="Ciencias Sociales y Turismo">
                          <option value="Comercio Exterior">
                          <option value="Comercio Exterior y Marketing Internacional">
                          <option value="Comercio y Negocios Internacionales">
                          <option value="Computación">
                          <option value="Computación e Informática">
                          <option value="Comunicación">
                          <option value="Comunicación Audiovisual">
                          <option value="Comunicación Audiovisual y Medios Interactivos">
                          <option value="Comunicación e Imagen Empresarial">
                          <option value="Comunicación Lingüística y Literatura">
                          <option value="Comunicación Para el Desarrollo">
                          <option value="Comunicación Social">
                          <option value="Comunicación y Marketing">
                          <option value="Comunicación y Periodismo">
                          <option value="Comunicación y Publicidad">
                          <option value="Comunicaciones">
                          <option value="Conservación de Suelos y Agua">
                          <option value="Conservación y Restauración">
                          <option value="Construcción Civil">
                          <option value="Contabilidad">
                          <option value="Contabilidad Administrativa y Auditoria">
                          <option value="Contabilidad Auditoría y Finanzas">
                          <option value="Contabilidad Computarizada">
                          <option value="Contabilidad y Administración">
                          <option value="Contabilidad y Auditoria">
                          <option value="Contabilidad y Finanzas">
                          <option value="Contabilidad y Tributación">
                          <option value="Derecho">
                          <option value="Derecho Corporativo">
                          <option value="Derecho del Mar y Servicios Aduaneros">
                          <option value="Derecho y Ciencias Políticas">
                          <option value="Dirección de Artes Gráficas y Publicitarias">
                          <option value="Diseño de Interiores">
                          <option value="Diseño de Modas">
                          <option value="Diseño Digital Publicitario">
                          <option value="Diseño Gráfico">
                          <option value="Diseño Gráfico Publicitario">
                          <option value="Diseño Industrial">
                          <option value="Diseño Industrial y Arquitectónico">
                          <option value="Diseño Profesional de Interiores">
                          <option value="Diseño Profesional Gráfico">
                          <option value="Diseño Publicitario">
                          <option value="Diseño y Gestión de Marca">
                          <option value="Diseño y Gestión en Moda">
                          <option value="Ebanistería y Decoración">
                          <option value="Ecología">
                          <option value="Economía">
                          <option value="Economía Agraria">
                          <option value="Economía Gerencial">
                          <option value="Economía Gerencial">
                          <option value="Economía Internacional">
                          <option value="Economía Pública">
                          <option value="Economía y Desarrollo">
                          <option value="Economía y Finanzas">
                          <option value="Economía y Finanzas">
                          <option value="Economía y Gestión Ambiental">
                          <option value="Economía y Microfinanzas">
                          <option value="Economía y Negocios Internacionales">
                          <option value="Ecoturismo">
                          <option value="Educación">
                          <option value="Educación Artística">
                          <option value="Educación Especial">
                          <option value="Educación Física">
                          <option value="Educación Inicial">
                          <option value="Educación Primaria">
                          <option value="Educación Secundaria">
                          <option value="Electricidad">
                          <option value="Electrónica">
                          <option value="Enfermería">
                          <option value="Escultura">
                          <option value="Estadística">
                          <option value="Estadística e Informática">
                          <option value="Estomatología">
                          <option value="Farmacia">
                          <option value="Farmacia y Bioquímica">
                          <option value="Filosofía">
                          <option value="Finanzas">
                          <option value="Física">
                          <option value="Fuerza Motriz">
                          <option value="Gastronomía">
                          <option value="Genética y Biotecnología">
                          <option value="Geografía">
                          <option value="Geografía y Medio Ambiente">
                          <option value="Gerontología Social">
                          <option value="Gestión">
                          <option value="Gestion de Puertos y Aduanas">
                          <option value="Gestión de Recursos Humanos">
                          <option value="Gestión Educativa y Pedagógica">
                          <option value="Gestión Empresarial">
                          <option value="Gestión en Hotelería y Turismo">
                          <option value="Gestión Institucional">
                          <option value="Gestión Pública">
                          <option value="Gestión Pública y Desarrollo Social">
                          <option value="Gestión Social">
                          <option value="Gestión Textil">
                          <option value="Gestión Tributaria">
                          <option value="Historia">
                          <option value="Historia y Ciencias Sociales">
                          <option value="Historia, Geografía y Ciencias Sociales">
                          <option value="Hotelería y Administración">
                          <option value="Industrias Alimentarias">
                          <option value="Informática Empresarial">
                          <option value="Ingeniería Administrativa">
                          <option value="Ingeniería Aeronáutica">
                          <option value="Ingeniería Agraria">
                          <option value="Ingeniería Agrícola">
                          <option value="Ingeniería Agrícola y Forestal">
                          <option value="Ingeniería Agroindustrial">
                          <option value="Ingeniería Agrónoma">
                          <option value="Ingeniería Agronómica">
                          <option value="Ingeniería Agropecuaria">
                          <option value="Ingeniería Alimentaria">
                          <option value="Ingeniería Ambiental">
                          <option value="Ingeniería Automotriz">
                          <option value="Ingeniería Biomédica">
                          <option value="Ingeniería Biotecnológica">
                          <option value="Ingeniería Civil">
                          <option value="Ingeniería Comercial">
                          <option value="Ingeniería Comercial y Financiera">
                          <option value="Ingeniería Comercial y Negocios Internacionales">
                          <option value="Ingeniería de Agronegocios">
                          <option value="Ingeniería de Computación y Sistemas">
                          <option value="Ingeniería de Construcción">
                          <option value="Ingeniería de Diseño Computacional">
                          <option value="Ingeniería de Diseño Gráfico">
                          <option value="Ingeniería de Energía">
                          <option value="Ingeniería de Gestión Empresarial">
                          <option value="Ingeniería de Gestión Minera">
                          <option value="Ingeniería de Higiene y Seguridad Industrial">
                          <option value="Ingeniería de Industrias Alimentarias">
                          <option value="Ingeniería de la Producción y Administración">
                          <option value="Ingeniería de las Telecomunicaciones">
                          <option value="Ingeniería de Logística y Transporte">
                          <option value="Ingeniería de Materiales">
                          <option value="Ingeniería de Minas">
                          <option value="Ingeniería de Navegación y Marina Mercante">
                          <option value="Ingeniería de Negocios">
                          <option value="Ingeniería de Negocios Agro-Forestales">
                          <option value="Ingeniería de Negocios Agroforestales">
                          <option value="Ingeniería de Petróleo">
                          <option value="Ingeniería de Recursos Naturales y Energias Renovables">
                          <option value="Ingeniería de Redes y Comunicaciones">
                          <option value="Ingeniería de Seguridad y Auditoría Informática">
                          <option value="Ingeniería de Sistemas">
                          <option value="Ingeniería de Sistemas de Energía">
                          <option value="Ingeniería de Sistemas de Información">
                          <option value="Ingeniería de Sistemas e Informática">
                          <option value="Ingeniería de Sistemas Empresariales">
                          <option value="Ingeniería de Sistemas en Seguridad y Auditoria de Información">
                          <option value="Ingeniería de Sistemas y Computación">
                          <option value="Ingeniería de Sistemas y Seguridad Informática">
                          <option value="Ingeniería de Sistemas y Tecnológicas">
                          <option value="Ingeniería de software">
                          <option value="Ingeniería de Tecnologías de Información y Comunicación">
                          <option value="Ingeniería de Tecnologías de Información y Sistemas">
                          <option value="Ingeniería de Telecomunicaciones">
                          <option value="Ingeniería de Transporte">
                          <option value="Ingeniería del Medio Ambiente">
                          <option value="Ingeniería del Transporte Marítimo y Gestión Logística Portuaria">
                          <option value="Ingeniería Ecológica">
                          <option value="Ingeniería Económica">
                          <option value="Ingeniería Eléctrica">
                          <option value="Ingeniería Eléctrica y Electrónica">
                          <option value="Ingeniería Electrónica">
                          <option value="Ingeniería Electricidad y Potencia">
                          <option value="Ingeniería Electromecánica">
                          <option value="Ingeniería Electrónica">
                          <option value="Ingeniería Empresarial">
                          <option value="Ingeniería Empresarial y de Sistemas">
                          <option value="Ingeniería en Agronegocios">
                          <option value="Ingeniería en Ecología de Bosques Tropicales">
                          <option value="Ingeniería en Ecoturismo">
                          <option value="Ingeniería en Energía">
                          <option value="Ingeniería en Energía Renovable y Gestión Ambiental">
                          <option value="Ingeniería en Gestión Empresarial">
                          <option value="Ingeniería en Tecnologías de Información y Sistema">
                          <option value="Ingeniería en Telecomunicaciones y Redes">
                          <option value="Ingeniería en Teleinformática">
                          <option value="Ingeniería Energética">
                          <option value="Ingeniería Estadística">
                          <option value="Ingeniería Estadística e Informática">
                          <option value="Ingeniería Física">
                          <option value="Ingeniería Forestal">
                          <option value="Ingeniería Forestal y Medio Ambiente">
                          <option value="Ingeniería Geofísica">
                          <option value="Ingeniería Geográfica">
                          <option value="Ingeniería Geológica">
                          <option value="Ingeniería Hidráulica">
                          <option value="Ingeniería Industrial">
                          <option value="Ingeniería Informática">
                          <option value="Ingeniería Marítima">
                          <option value="Ingeniería Mecánica">
                          <option value="Ingeniería Mecánica de Fluidos">
                          <option value="Ingeniería Mecánica Eléctrica">
                          <option value="Ingeniería Mecánica Eléctrica y Mecatrónica">
                          <option value="Ingeniería Mecatrónica">
                          <option value="Ingeniería Metalúrgica">
                          <option value="Ingeniería Metalúrgica y de Materiales">
                          <option value="Ingeniería Naval">
                          <option value="Ingeniería Pesquera">
                          <option value="Ingeniería Petroquímica">
                          <option value="Ingeniería Química">
                          <option value="Ingeniería Química Industrial">
                          <option value="Ingeniería Sanitaria">
                          <option value="Ingeniería Textil">
                          <option value="Ingeniería Textil y Confecciones">
                          <option value="Ingeniería Topográfica y Agrimensura">
                          <option value="Ingeniería y Gestión Ambiental">
                          <option value="Investigación Operativa">
                          <option value="Laboratorio Clínico">
                          <option value="Laboratorio y Anatomía Patológica">
                          <option value="Lengua, Comunicación e Idioma Inglés">
                          <option value="Lingüística">
                          <option value="Lingüística y Literatura">
                          <option value="Literatura">
                          <option value="Literatura Bíblica">
                          <option value="Logística Internacional">
                          <option value="Marketing">
                          <option value="Marketing Empresarial">
                          <option value="Marketing y Administración">
                          <option value="Marketing y Dirección de Empresas">
                          <option value="Marketing y Gestión Comercial">
                          <option value="Marketing y Negocios Internacionales">
                          <option value="Marketing y Negocios Internacionales">
                          <option value="Marketing y Publicidad">
                          <option value="Marketing y Ventas">
                          <option value="Matemática">
                          <option value="Matemática Aplicada">
                          <option value="Matemática e Informática">
                          <option value="Matemática, Computación e Informática">
                          <option value="Matemática, Física e Informática">
                          <option value="Mecánica de Producción">
                          <option value="Medicina Humana">
                          <option value="Medicina Veterinaria">
                          <option value="Mercadotecnia">
                          <option value="Metalurgía">
                          <option value="Meteorología">
                          <option value="Microbiología y Parasitología">
                          <option value="Multimedia y Fotografía Publicitaria">
                          <option value="Música">
                          <option value="Negocios Internacionales">
                          <option value="Nutrición">
                          <option value="Obstetricia">
                          <option value="Obstetricia y Puericultura">
                          <option value="Odontología">
                          <option value="Optometría">
                          <option value="Periodismo">
                          <option value="Periodismo Audiovisual">
                          <option value="Pesquería">
                          <option value="Pintura">
                          <option value="Psicología del Consumidor">
                          <option value="Psicología Empresarial">
                          <option value="Psicología Humana">
                          <option value="Publicidad">
                          <option value="Publicidad y Multimedia">
                          <option value="Química">
                          <option value="Química, Física y Biología">
                          <option value="Radiología">
                          <option value="Redes y Seguridad Informática">
                          <option value="Relaciones Industriales">
                          <option value="Relaciones Internacionales y Negociaciones">
                          <option value="Secretariado Ejecutivo">
                          <option value="Servicio Social">
                          <option value="Sociología">
                          <option value="Software y Sistemas">
                          <option value="Soldadura Industrial">
                          <option value="Tecnología Médica">
                          <option value="Tecnología Textil">
                          <option value="Tecnologías de Información">
                          <option value="Telecomunicaciones">
                          <option value="Teología">
                          <option value="Teología - Evangélica">
                          <option value="Terapia de Lenguaje">
                          <option value="Terapia Física">
                          <option value="Terapia Física y rehabilitación">
                          <option value="Terapia Ocupacional">
                          <option value="Topografía">
                          <option value="Toxicología">
                          <option value="Trabajo Social">
                          <option value="Traducción e Interpretación">
                          <option value="Transportes Terrestres y Operación de Equipos Pesados">
                          <option value="Turismo">
                          <option value="Turismo Sostenible">
                          <option value="Turismo y Administración">
                          <option value="Turismo y Hoteleria">
                          <option value="Zootecnia">
                        </datalist> --}}
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <input type="text" name="step2_oldacademy" placeholder="Academia de preparación anterior">
                      </fieldset>
                    </div>
                  </div>

            </div>
        </div>

        <div class="tab tab3 row center-xs">

            <div class="row col-xs-12 start-xs">
                <h2>Datos generales del <i>padre y/o apoderado</i></h2>

                  <div class="row col-xs-12">
                    <div class="col-xs start-xs">
                      <fieldset class="form-group">
                        <label class="radio-inline">
                          <span>Apoderado</span> <input type="radio" name="step3_apoderate" id="step3_apoderate_attorney" value="attorney" aria-label="Apoderado" required>
                        </label>
                        <label class="radio-inline" id="step3_apoderate_label_none">
                          <span>Ninguno</span> <input type="radio" name="step3_apoderate" value="none" aria-label="Ninguno" required>
                        </label>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-9">
                      <fieldset class="form-group">
                        <input type="onlytext" name="step3_names" id="step3_names" placeholder="Nombres y apellidos" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="number" min="0" maxLength="8" name="step3_dni" id="step3_dni" placeholder="DNI" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="tel" name="step3_phonehome" id="step3_phonehome" placeholder="Telf. casa">
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm">
                      <fieldset class="form-group">
                        <input type="tel" name="step3_mobile" id="step3_mobile" placeholder="Celular" required>
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="email" name="step3_email" id="step3_email" placeholder="Correo electrónico" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="text" name="step3_work_location" id="step3_work_location" placeholder="Centro de trabajo">
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="tel" name="step3_work_phone" id="step3_work_phone" placeholder="Teléfono centro de trabajo">
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="onlytext" name="step3_profession" id="step3_profession" placeholder="Ocupación">
                      </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <fieldset class="form-group">
                        <input type="tel" name="step3_emergencyphone" id="step3_emergencyphone" placeholder="En caso de emergencias llamar a:" required>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row col-xs-12">
                    <div class="col col-xs-12">
                      <fieldset class="form-group">
                        <label for="step3_tos"><span>Términos y Condiciones</span></label>
                        <input type="checkbox" name="checkbox" class="checkterms" id="step3_tos" aria-label="Confirmar Términos y Condiciones" required>
                      </fieldset>
                      <span><a id="termsActive">Leer Términos y Condiciones</a></span>
                    </div>

                    <div class="terms" id="terms">
                      <h1>CONDICIONES ECONÓMICAS Y DEL SERVICIO DE LA ACADEMIA PREUNIVERSITARIA</h1>
                      <ol class="list">
                      <li>La hora de ingreso es de lunes a sábado de 7:30 a. m. a 8:00 a. m. y se considerará
                      tardanza entre las 8:01 a. m. a 8:15 a. m. Posterior a esa hora, no se permitirá el ingreso a
                      la institución.</li>

                      <li>De realizarse el pago del ciclo de forma fraccionada en dos cuotas, este tendrá un recargo
                      adicional de S/<div id="terms-2"></div>. Este monto será recargado en la primera cuota, debiéndose cancelar
                      la segunda cuota en un lapso de <div id="terms-21"></div> días.</li>

                      <li>En el caso de que el padre de familia, apoderado o alumno mayor de edad opte por
                      retirarse habiéndose iniciado las clases, se le hará un cobro de S/<div id="terms-3">50</div> por concepto de
                      penalidad y un cobro de S/<div id="terms-31">30</div> por concepto de materiales, así como también se le
                      retendrá el monto de días asistidos y no asistidos sin justificación.</li>

                      <li>En caso el alumno solicite traslado de sede o traslado a otro turno o ciclo dentro del local
                      en donde se le presta servicio, se procederá a descontar los días asistidos y no asistidos sin
                      justificación. El monto restante podrá ser utilizado para las inscripciones en otro ciclo,
                      debiéndose abonar la diferencia.</li>

                      <li>En el caso de que el padre de familia, apoderado o alumno mayor de edad requiera la
                      devolución del dinero antes de iniciado el periodo de clases, la institución realizará el
                      cobro de S/<div id="terms-5">50</div> por concepto de gastos administrativos.</li>

                      <li>Para el trámite de postergación de matrícula, se procederá a descontar los días asistidos y
                      no asistidos sin justificación. El monto restante será reservado para el siguiente ciclo
                      académico inmediato en el cual al alumno se matricule. En caso decida no retomar la
                      preparación al ciclo siguiente, el monto reservado se le será restituido, a solicitud del
                      padre de familia, apoderado o alumno mayor de edad.</li>

                      <li>El ingreso a la academia se realiza portando la tarjeta de control con el recibo original de
                      pago adjunto: en caso de no estar al día en el pago de la pensión, no se le permitirá el
                      ingreso. Por la pérdida de la tarjeta o del recibo, se deberá cancelar S/10.00 por concepto
                      de duplicado.</li>

                      <li>El alumno será evaluado en forma constante por medio de exámenes de entrada,
                      simulacros de admisión, participación en clases, desarrollo de prácticas, tareas y buena
                      conducta. Dichas condiciones se tomarán en cuenta para las calificaciones de aula o
                      reagrupaciones.</li>

                      <li>La pérdida del libro <div id="terms-9"><select id="terms-9-s" class="terms-9"><option value="ciencia" selected>Ciencias</option><option value="letras">Letras</option></select></div> que otorga la institución dará lugar al cobro de S/<div id="terms-91"></div> por concepto
                      de duplicado.</li>

                      <li>La institución realiza maratones académicas en horario diurno y nocturno, sin ser
                      obligatoria la asistencia para el alumno. En caso asista, tendrá que efectuar el pago
                      adicional de S/<div id="terms-10">5</div>.</li>

                      <li> El dictado de clases iniciará siempre que se alcance el número mínimo de alumnos
                      matriculados establecido por la institución.</li>

                      <li>Manifiesto mi conformidad en caso la institución cambie la fecha de inicio del dictado de
                      clases del ciclo en cuestión.</li>

                      <li>En los casos de los ciclos anuales, semestrales o intensivos, el cobro de la pensión se hace
                      en 30 días; si pasado el vencimiento de dicha pensión el alumno opta por reingresar a la
                      academia deberá cancelar la pensión en los 30 días siguientes de vencida la pensión
                      anterior.</li>

                      <li> En el caso de que el alumno pida traslado de pago de la pensión mensual a otro alumno,
                      ya sea que se trate de un alumno nuevo o ya matriculado (en el ciclo anual, semestral,
                      intensivo, o en el ciclo de verano o repaso), se descontará de dicho monto la cantidad de
                      S/<div id="terms-14">50</div> por concepto de traslado de titularidad. Cabe precisar que el traslado de pago se
                      realizará única y exclusivamente por las pensiones que corresponden a los meses
                      pendientes de clases.</li>
                      </ol>

                      <p><strong>“Declaro tener conocimiento de que la Academia Preuniversitaria Trilce incluirá la información
                      personal de mi menor hijo (a), padres y/o apoderados en su base de datos en un tiempo indefinido
                      para fines de la actividad que desarrolla de acuerdo a la ley N° 29733"</strong></p>
                    </div>
                  </div>

                  <div class="row col-xs-12 captcha_enrollment">
                    <div class="col-xs-12">
                      <fieldset class="form-group">
                        <input type="captcha" class="captcha" name="captcha" id="captcha" aria-label="Captcha">
                      </fieldset>
                    </div>

                    <div class="col-xs-12">
                      <div class="g-recaptcha" data-callback="captcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                    </div>
                  </div>

            </div>
        </div>


        <div class="row col-xs-12 between-xs stepsarrows">
          <div class="col-xs start-xs">
            <fieldset>
              <button type="button" id="prev" class="validate"><i class="fa fa-angle-left"></i> Atrás</button>
            </fieldset>
          </div>
          <div class="col-xs end-xs">
            <fieldset>
              <button type="button" id="next" class="validate">Siguiente <i class="fa fa-angle-right"></i></button>
            </fieldset>
          </div>
        </div>
        <!-- end steps -->
      </form>
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrollment';

    function captcha(){
      if(grecaptcha.getResponse().length > 0){
        document.getElementById("captcha").value = 'valid';
      }
    }
  @parent
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
