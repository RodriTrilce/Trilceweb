<?php 
  include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inscripción Académica - Trilce</title>
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    #ciclo_default,
    #turno_default {
      display: block;
    }

    #ciclo_uni,
    #ciclo_sanmarcos,
    #ciclo_catolica,
    #turno_uni_anual,
    #turno_uni_semestral,
    #turno_sanmarcos_anual,
    #turno_sanmarcos_semestral,
    #turno_catolica_semestral,
    #turno_catolica_primeraopcion{
      display: none;
    }

  </style>

</head>

<body>

<nav class="fixed-top py-1">
    <div class="container">
      <div class="row box-nav">
        <div class="col-xs-6 col-md-6">
            <a class="navbar-brand" href="#">
              <img src="img/logo-trilce-academia-white.svg" width="100">
            </a>
        </div>
        <div class="col-xs-6  col-md-6 d-flex justify-content-end align-items-center" >
            <div class="row d-flex">
              <aside>
                <a class="text-white" href="http://www.trilce.edu.pe/" target="_blank">
                  <i class="fa-lg fa fa-home"></i>
                </a>
              </aside>
              <aside>
                  <a class="text-white"
                    href="https://api.whatsapp.com/send?phone=51922336565&amp;text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n"
                    target="_blank">
                    <i class="fa-lg fa fa-whatsapp"></i>
                  </a>
              </aside>
              <aside>
                <a class="text-white" href="tel:+51016198100">
                  <i class="fa-lg fa fa-phone"></i>
                </a>
              </aside>
              <aside>
                  <p class="phone">6198 100</p>
              </aside>
            </div>
        </div>
      </div>
    </div>
  </nav>

 <section class="banner d-flex justify-content-center align-items-center text-center pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center font-weight-bold my-4">Inscripción académica</h1>
        </div>
        <div class="col-md-6 offset-md-3">
          <p class="text-center my-4">¡Regístrate!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="datos d-flex justify-content-center align-items-center text-center">
    <div class="container">
      <div class="row py-5 ">
        <div class="col-md-12 text-center">
          <h3 class="text-center">Para ayudarte a realizar este proceso rápidamente, ingresa los siguientes datos.</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="formulario">

    <form action="./registro.php" method="post" id="form-registry">

      <div class="container">

        <div class="row">

          <!-- PASO NUMERO 1 -->
        
          <div class="box-form offset-md-2 col-md-8 offset-md-2 mb-4">

            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-md-6"><h2 class="mb-4">1. Datos de estudio</i></h2></div>
                  <div class="col-xs-12 col-md-6"><small class="required">(*) Campos obligatorios</small></div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-5 box-img-1">
                  <img class="px-4" src="img/img-enrollment-01.png">
                </div>
                <div class="col-xs-12 col-md-7 box-data-1">
                  <div class="row">

                    <div class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <input class="form-control" type="number" min="0" name="dni_alumno" placeholder="DNI del alumno *"
                          aria-label="DNI" id="dni_alumno" minlength="8" maxlength="8" required="">
                      </fieldset>
                    </div>

                    <div class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="tipo_preparacion" id="tipo_preparacion"
                          aria-label="Universidad" required="">
                          <option value="" selected="" disabled="">Tipo de preparación *</option>
                          <option value="UNI">UNI</option>
                          <option value="SAN MARCOS">San Marcos</option>
                          <option value="CATOLICA">Católica</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- CICLO DEFAULT -->
                    <div id="ciclo_default" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="ciclo" aria-label="Ciclo" >
                          <option value="" selected="" disabled="">Ciclo *</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- CICLO UNI -->
                    <div id="ciclo_uni" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="ciclo" id="ciclos_uni" aria-label="Ciclo" >
                          <option value="" selected="" disabled="">Ciclo *</option>
                          <option value="ANUAL">Anual</option>
                          <option value="SEMESTRAL">Semestral</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- CICLO SAN MARCOS -->
                    <div id="ciclo_sanmarcos" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="ciclo" id="ciclos_sanmarcos" aria-label="Ciclo" >
                          <option value="" selected="" disabled="">Ciclo *</option>
                          <option value="ANUAL">Anual</option>
                          <option value="SEMESTRAL">Semestral</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- CICLO CATOLICA -->
                    <div id="ciclo_catolica" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="ciclo" id="ciclos_catolica" aria-label="Ciclo" >
                          <option value="" selected="" disabled="">Ciclo *</option>
                          <option value="SEMESTRAL">Semestral</option>
                          <option value="PRIMERA OPCIÓN">Primera Opción</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO DEFAULT -->
                    <div id="turno_default" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO UNI ANUAL -->
                    <div id="turno_uni_anual" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                          <option value="Mañana">Mañana</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO UNI SEMESTRAL -->
                    <div id="turno_uni_semestral" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                          <option value="Mañana">Mañana</option>
                          <option value="Tarde">Tarde</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO SAN MARCOS ANUAL -->
                    <div id="turno_sanmarcos_anual" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                          <option value="Mañana">Mañana</option>
                          <option value="Tarde">Tarde</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO SAN MARCOS SEMESTRAL -->
                    <div id="turno_sanmarcos_semestral" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                          <option value="Mañana">Mañana</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO CATOLICA SEMESTRAL -->
                    <div id="turno_catolica_semestral" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                          <option value="Mañana">Mañana</option>
                        </select>
                      </fieldset>
                    </div>

                    <!-- TURNO CATOLICA PRIMERA OPCION -->
                    <div id="turno_catolica_primeraopcion" class="col-xs-12 col-md-12">
                      <fieldset class="form-group">
                        <select class="form-control" name="turno" aria-label="Turno" >
                          <option value="" selected="" disabled="">Turno *</option>
                          <option value="Tarde">Tarde</option>
                        </select>
                      </fieldset>
                    </div>

                  <!-- <div class="col-xs-12 col-md-12">
                    <fieldset class="form-group">
                      <select class="form-control" name="sede" id="sede" aria-label="Sede" required="">
                        <option value="" selected="" disabled="">Sede *</option>
                        <option value="Los olivos">Los olivos</option>
                        <option value="Santa Beatriz">Santa Beatriz</option>
                        <option value="Comas">Comas</option>
                        <option value="Villa El Salvador">Villa El Salvador</option>
                        <option value="Marsano">Marsano</option>
                      </select>
                    </fieldset>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- PASO NUMERO 2 -->

          <div class="box-form offset-md-2 col-md-8 offset-md-2 mb-4">

            <div class="container">
              <diav class="row">
                <div class="col-xs-12 col-md-12">
                  <h2 class="mb-4">2. Datos generales del <i>Alumno</i></h2>
                </div>
              </diav>
              <div class="row">
                <div class="col-xs-12 col-md-12">
                   <div class="reclam-form-group">
                      <label id="reclam-year">
                          <input id="reclam-check-form-menor" type="checkbox" name="validacion" value="true" onchange="form_reclam_menor()">
                          <label for="reclam-check-form-menor"></label>
                          <label for="reclam-check-form-menor" class="reclam-check-menor-text">Alumno menor de edad</label>
                        </label>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="onlytext" minlength="3" maxlength="50" id="nombres"
                      name="nombres" aria-label="Nombres" placeholder="Nombres *" required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="onlytext" minlength="3" maxlength="50" id="apellido_paterno"
                      name="apellido_paterno" aria-label="Apellido paterno" placeholder="Apellido paterno *"
                      required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="onlytext" minlength="3" maxlength="50" id="apellido_materno"
                      name="apellido_materno" aria-label="Apellido materno" placeholder="Apellido materno *"
                      required="">
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                  <input required placeholder="Fecha de nacimiento *" type="tel" class="txtEntryBox form-control"  name="fecha_nacimiento"  maxLenght="8" max="8" />
                    <!-- <input onKeyDown="mostrarEdad()" placeholder="Fecha de nacimiento *" min="1980-01-01"
                      class="form-control" type="text"
                      onmouseenter="(this.type='date')" name="fecha_nacimiento" id="fecha_nacimiento" required> -->
                      <input type="text" name="age" id="age" value="" hidden>
                  </fieldset>
                </div>

                <div class="col-xs-12 col-md-8">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" class="inputfull" id="direccion" name="direccion"
                      placeholder="Dirección *" aria-label="Dirección" required="">
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                   <fieldset class="form-group">
                      <select name="departamento" id="Departamento" class="form-control" >
                        <option value="" selected disabled>Departamento</option>
                      </select>
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                   <fieldset class="form-group">
                      <select name="provincia" id="Provincia" class="form-control" >
                        <option value="" selected disabled>Provincia</option>
                      </select>
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                   <fieldset class="form-group">
                      <select name="distrito" id="Distrito" class="form-control" >
                        <option value="" selected disabled>Distrito</option>
                      </select>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <fieldset class="form-group">
                    <input class="form-control" type="tel" minlength="7" maxlength="9" id="telefono" name="telefono"
                      placeholder="Telf. casa" aria-label="Telf. casa">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-3">
                  <fieldset class="form-group">
                    <input class="form-control" type="tel" minlength="9" maxlength="9" id="celular" name="celular"
                      placeholder="Celular *" aria-label="Celular" required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-6">
                  <fieldset class="form-group">
                    <input class="form-control" type="email" id="correo" name="correo"
                      placeholder="Correo electrónico *" aria-label="Correo electrónico" required="">
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-12 form-group-gender">
                  <fieldset class="form-check">
                    <label class=" mr-5">
                      <input class="form-check-input" type="radio" id="genero_hombre" name="genero" value="hombre"
                        placeholder="sexo *" aria-label="Sexo" required="">
                      <label for="genero" class="form-check-label"></label> <span class="gender_span">Hombre</span>
                    </label>
                    <label class=" mr-5">
                      <input class="form-check-input" type="radio" id="genero_mujer" name="genero" value="mujer"
                        placeholder="sexo" aria-label="Sexo" required="">
                      <label for="genero" class="form-check-label"></label> <span class="gender_span">Mujer</span>
                    </label>
                  </fieldset>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h5 class="mb-3">Datos académicos</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <fieldset class="form-group">
                    <input class="form-control" type="number" min="0" minlength="4" maxlength="4"
                      id="ano_termino_colegio" name="ano_termino_colegio" placeholder="Año en que terminó el colegio *"
                      required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-6">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" minlength="5" id="colegio" name="colegio"
                      placeholder="Colegio *" required="">
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" minlength="3" id="universidad_postula"
                      name="universidad_postula" placeholder="Universidad a la que postula *" list="universityList"
                      required="">
                    <datalist id="universityList" title="Escoge una sugerencia">
                      <option value="Universidad Nacional Mayor de San Marcos (UNMSM)">
                      </option>
                      <option value="Universidad Nacional de Ingeniería (UNI)">
                      </option>
                      <option value="Pontificia Universidad Católica del Perú (PUCP)">
                      </option>
                    </datalist>
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-6">
                  <fieldset class="form-group">
                    <input class="form-control" type="onlytext" minlength="5" id="carrera" name="carrera"
                      placeholder="Carrera *" list="professionList" required="">
                    <datalist id="professionList" title="Escoge una sugerencia">
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
                    </datalist>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" id="academia_anterior" name="academia_anterior"
                      placeholder="Academia de preparación anterior *">
                  </fieldset>
                </div>
              </div>
              
            </div>

          </div>

          <!-- PASO NUMERO 3 -->

          <div class="box-form offset-md-2 col-md-8 offset-md-2" id="div_apoderado">

            <div class="container">
                <h2 class="mb-4">3. Datos generales del <i>padre y/o apoderado</i></h2>
                <div class="row d-none">
                  <div class="col-xs-12 col-md-6">
                    <fieldset class="form-check mb-2">
                      <label class="radio-inline mr-4">
                        <input class="form-check-input" type="radio" name="dato_apoderado" id="dato_apoderado_apoderado"
                          value="Apoderado" aria-label="Apoderado">
                        <span>Apoderado</span>
                      </label>
                      <label class="radio-inline mr-4" id="dato_apoderado_ninguno">
                        <input class="form-check-input" type="radio" name="dato_apoderado" value="none"
                          aria-label="Ninguno" >
                        <span>Ninguno</span>
                      </label>
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-9">
                    <fieldset class="form-group">
                      <input class="form-control" type="onlytext" name="nombres_apoderado" id="nombres_apoderado"
                        placeholder="Nombres y apellidos *" >
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <fieldset class="form-group">
                      <input class="form-control" type="number" min="0" maxlength="8" name="dni_apoderado"
                        id="dni_apoderado" placeholder="DNI *" >
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <fieldset class="form-group">
                      <input class="form-control" type="tel" name="telefono_apoderado" id="telefono_apoderado"
                        placeholder="Telf. casa">
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <fieldset class="form-group">
                      <input class="form-control" type="tel" name="celular_apoderado" id="celular_apoderado"
                        placeholder="Celular *" >
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <fieldset class="form-group">
                      <input class="form-control" type="email" name="correo_apoderado" id="correo_apoderado"
                        placeholder="Correo electrónico *" >
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <fieldset class="form-group">
                      <input class="form-control" type="text" name="centro_trabajo" id="centro_trabajo"
                        placeholder="Centro de trabajo">
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <fieldset class="form-group">
                      <input class="form-control" type="tel" name="telefono_trabajo" id="telefono_trabajo"
                        placeholder="Teléfono centro de trabajo">
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <fieldset class="form-group">
                      <input class="form-control" type="text" name="ocupacion" id="ocupacion"
                        placeholder="Ocupación">
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <fieldset class="form-group">
                      <input class="form-control" type="tel" name="contacto_emergencia" id="contacto_emergencia"
                        placeholder="En caso de emergencias llamar a: *" >
                    </fieldset>
                  </div>
              </div>
            </div>

          </div>

          <!-- PASO NUMERO 4 -->

          <div class="offset-md-2 col-md-8 offset-md-2">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <fieldset class="form-check">
                    <label for="checkbox_terms"></label>
                    <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox_terms"
                      aria-label="Confirmar Términos y Condiciones" required="">
                    <p>Aceptar <strong><a data-toggle="modal" data-target="#ModalInscripcionAcademia"
                          id="termsActive">Términos y
                          Condiciones</a></strong> *</p>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                  <div class="offset-md-2 col-md-8 my-4">
                    <button class="btn btn-block " type="submit">ENVIAR</button>
                  </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </form>

  </section>

  <footer class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>© 2020 Trilce. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Start your project here-->


  <div class="modal fade" id="ModalInscripcionAcademia" tabindex="-1" role="dialog"
    aria-labelledby="ModalInscripcionAcademiaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center d-flex font-weight-bold" id="ModalInscripcionAcademiaLabel">CONDICIONES
            ECONÓMICAS Y DEL SERVICIO DE LA ACADEMIA
            PREUNIVERSITARIA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="terms px-4 text-justify" id="terms">
            <p class="ft17"><b>1. </b> Se considerar&aacute; tardanza si el alumno ingresa a la plataforma 5 minutos despu&eacute;s de iniciada la clase.</p>
            <p class="ft17"><b>2. </b> Si se realiza el pago del ciclo de forma fraccionada en dos cuotas, este tendr&aacute; un recargo adicional de S/50. Este monto ser&aacute; recargado en la primera cuota y la segunda cuota debe ser cancelada en un lapso de 15 d&iacute;as.</p>
            <p class="ft17"><b>3. </b> Si el padre de familia, apoderado o alumno mayor de edad opta por retirarse habi&eacute;ndose iniciado las clases, la instituci&oacute;n realizar&aacute; un cobro de S/50 por concepto de penalidad y un cobro de S/30 por concepto de materiales; adem&aacute;s, se le retendr&aacute; el monto de d&iacute;as asistidos y no asistidos sin justificaci&oacute;n.</p>
            <p class="ft17"><b>4. </b> Si el alumno solicita traslado de sede o traslado a otro turno o ciclo dentro del local en donde se le presta servicio, se proceder&aacute; a descontar los d&iacute;as asistidos y no asistidos sin justificaci&oacute;n. El monto restante podr&aacute; ser utilizado para las inscripciones en otro ciclo, debi&eacute;ndose abonar la diferencia.</p>
            <p class="ft17"><b>5. </b> Si el padre de familia, apoderado o alumno mayor de edad requiere la devoluci&oacute;n del dinero antes de iniciado el periodo de clases, la instituci&oacute;n realizar&aacute; el cobro de S/50 por concepto de gastos administrativos.</p>
            <p class="ft17"><b>6. </b> Para el tr&aacute;mite de postergaci&oacute;n de matr&iacute;cula, se proceder&aacute; a descontar los d&iacute;as asistidos y no asistidos sin justificaci&oacute;n. El monto restante ser&aacute; reservado para el siguiente ciclo acad&eacute;mico inmediato en el cual el alumno se matricule. En caso decida no retomar la preparaci&oacute;n al ciclo siguiente, el monto reservado le ser&aacute; devuelto, a solicitud del padre de familia, apoderado o alumno mayor de edad.</p>
            <p class="ft17"><b>7. </b> En caso de no es tar al d&iacute;a en el pago de la pensi&oacute;n, se proceder&aacute; a dar de baja el correo institucional del alumno.</p>
            <p class="ft17"><b>8. </b> El dictado de clases se iniciar&aacute; siempre que se alcance el n&uacute;mero m&iacute;nimo de alumnos matriculados establecidopor la instituci&oacute;n.</p>
            <p class="ft17"><b>9. </b> Manifiesto mi conformidad en caso la instituci&oacute;n cambie la fecha de inicio del dictado de clases del ciclo en cuesti&oacute;n.</p>
            <p class="ft17"><b>10.</b> En los casos de los ciclos anuales, semestrales o intensivos, el cobro de la pensi&oacute;n se hace por 30 d&iacute;as; si pasado el vencimiento de dicha pensi&oacute;n el alumno opta por reingresar a la academia, deber&aacute; cancelar la pensi&oacute;n en los 30 d&iacute;as siguientes de vencida la pensi&oacute;n anterior.</p>
            <p class="ft17"><b>11.</b> Si el alumno pide traslado de pago de la pensi&oacute;n mensual a otro alumno, ya sea que se trate de un alumno nuevo o ya matriculado (en el ciclo anual, semestral, intensivo, o en el ciclo de verano o repaso), se descontar&aacute; de dicho monto la cantidad de S/50 por concepto de traslado de titularidad. Cabe precisar que el traslado de pago se realizar&aacute; &uacute;nica y exclusivamente por las pensiones que corresponden a los meses pendientes de clases.</p>
            <p class="ft111"><em>&ldquo;Declaro tener conocimiento de que la Academia Preuniversitaria Trilce incluir&aacute; la informaci&oacute;n personal de mi menor hijo (a), padres y/o apoderados en su base de datos en un tiempo indefinido para fines de la actividad que desarrolla de acuerdo a la ley N&deg; 29733".</em></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script>
    $(document).ready(function(){

    load_json_data('Departamento');

    function load_json_data(id, parent_id)
    {
      var html_code = '';

      $.getJSON('departamento_provincia_distrito.json', function(data){

      html_code += '<option value="" selected disabled>'+id+'</option>';
      
      $.each(data, function(key, value){
        if(id == 'Departamento')
          {
            if(value.parent_id == '0')
              {
                html_code += '<option value="'+value.id+'">'+value.name+'</option>';
              }
          }
        else
        {
        if(value.parent_id == parent_id)
          {
            html_code += '<option value="'+value.id+'">'+value.name+'</option>';
          }
        }
        });
      $('#'+id).html(html_code);
      });
    }

    $(document).on('change', '#Departamento', function(){
      var Departamento_id = $(this).val();
      if(Departamento_id != '')
        {
          load_json_data('Provincia', Departamento_id);
        }
      else
        {
          $('#Provincia').html('<option value="">Provincia</option>');
          $('#Distrito').html('<option value="">Distrito</option>');
        }
    });
    $(document).on('change', '#Provincia', function(){
      var Provincia_name = $(this).val();
      if(Provincia_name != '')
        {
          load_json_data('Distrito', Provincia_name);
        }
      else
        {
          $('#Distrito').html('<option value="">Distrito</option>');
        }
      });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.3/moment.min.js"></script>

  <script>
      $(document).ready(
        function () {
          if (!("autofocus" in document.createElement("input"))) {
              $("#dni_alumno").focus();
          }

          $('#reclam-check-form-menor').change(function () {
              $('#div_apoderado').toggle();
          });
        }
      );
  </script>
<script>
      function form_reclam_menor() {
          $('#nombres_apoderado').prop("required", $('#reclam-check-form-menor').prop("checked"));
          $('#dni_apoderado').prop("required", $('#reclam-check-form-menor').prop("checked"));
          $('#celular_apoderado').prop("required", $('#reclam-check-form-menor').prop("checked"));
          $('#correo_apoderado').prop("required", $('#reclam-check-form-menor').prop("checked"));
          $('#contacto_emergencia').prop("required", $('#reclam-check-form-menor').prop("checked"));
      }

  </script>
  <script>

    $(function(){
            $('#fecha_nacimiento').on('change', calcularEdad);
        });
        
        function calcularEdad() {
            
            fecha = $(this).val();
            var hoy = new Date();
            getDaysDiffBetweemDates(fecha);
            var cumpleanos = new Date(fecha);
            
            //console.log("fun", getDaysDiffBetweemDates(hoy, cumpleanos));
            console.log("cumple", moment().format("Y")) 
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();
            
            
            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            $('#age').val(edad);
        }
  </script>
  <script>
    function mostrarEdad() {

        var x = document.getElementById("age");  
        
        var myDiv = document.getElementById("div_apoderado");
        if (x.value > "18")
        {
            myDiv.style.display = "none";
        } else {
            myDiv.style.display = "block";
        }    
    }

    /**
    * compara las 2 fechas y regresa la diferencia de dias !!
    * @param dateInitial fecha inicial {yyyy-mm-dd}
    * @param dateFinal fecha fianl {yyyy-mm-dd}
    */
    const getDaysDiffBetweemDates = (dateInitial) => {
      if (!dateInitial) {
        return;
      }
      const ahora = Number(moment().format("Y"));
      const input = Number(moment(dateInitial).format("Y"));
      const edad = (ahora - input);
      const apoderados = document.getElementById("div_apoderado");
      if (edad < 18) {
        apoderados.removeAttribute("style");
        apoderados.setAttribute("style", "display: none");
      }else  {
        apoderados.removeAttribute("style");
        apoderados.setAttribute("style", "display: block");
      }
 
    }

    const parseDate = (fecha) => {
      let mes = fecha.getMonth() <= 9 ? `0${fecha.getMonth()}` : fecha.getMonth();
      console.log("mi mes", mes)
      return `${fecha.getFullYear()}-${mes}-${fecha.getDate()}`;
    }

  </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script>
    n = new Date();
    //Año
    y = n.getFullYear();
    //Mes
    m = n.getMonth() + 1;
    //Día
    d = n.getDate();

    //Lo ordenas a gusto.
    document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
  </script>
  <script>
    document.getElementById('fecha_nacimiento').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() *
      60000).toISOString().split("T")[0];
  </script>
  <script>
    $("#tipo_preparacion").change(function () {
      if ($(this).val() == 'UNI') {
        $("#ciclo_uni").show();
        $("#ciclo_default").hide();
        $("#ciclo_sanmarcos").hide();
        $("#ciclo_catolica").hide();
      }
    });

    $("#tipo_preparacion").change(function () {
      if ($(this).val() == 'SAN MARCOS') {
        $("#ciclo_sanmarcos").show();
        $("#ciclo_default").hide();
        $("#ciclo_uni").hide();
        $("#ciclo_catolica").hide();
      }
    });

    $("#tipo_preparacion").change(function () {
      if ($(this).val() == 'CATOLICA') {
        $("#ciclo_catolica").show();
        $("#ciclo_default").hide();
        $("#ciclo_uni").hide();
        $("#ciclo_sanmarcos").hide();
      }
    });

    $("#ciclos_uni").change(function () {
      if ($(this).val() == 'ANUAL') {
        $("#turno_uni_anual").show();
        $("#turno_default").hide();
        $("#turno_uni_semestral").hide();
        $("#turno_sanmarcos_anual").hide();
        $("#turno_sanmarcos_semestral").hide();
        $("#turno_catolica_semestral").hide();
        $("#turno_catolica_primeraopcion").hide();
      }
    });

    $("#ciclos_uni").change(function () {
      if ($(this).val() == 'SEMESTRAL') {
         $("#turno_uni_semestral").show();
         $("#turno_default").hide();
         $("#turno_uni_anual").hide();
         $("#turno_sanmarcos_anual").hide();
         $("#turno_sanmarcos_semestral").hide();
         $("#turno_catolica_semestral").hide();
         $("#turno_catolica_primeraopcion").hide();
      }
    });

    $("#ciclos_sanmarcos").change(function () {
      if ($(this).val() == 'ANUAL') {
        $("#turno_sanmarcos_anual").show();
        $("#turno_default").hide();
        $("#turno_sanmarcos_semestral").hide();
         $("#turno_uni_semestral").hide();
         $("#turno_uni_anual").hide();
          $("#turno_catolica_semestral").hide();
          $("#turno_catolica_primeraopcion").hide();
      }
    });

    $("#ciclos_sanmarcos").change(function () {
      if ($(this).val() == 'SEMESTRAL') {
        $("#turno_sanmarcos_semestral").show();
        $("#turno_default").hide();
        $("#turno_sanmarcos_anual").hide();
        $("#turno_uni_semestral").hide();
        $("#turno_uni_anual").hide();
        $("#turno_catolica_semestral").hide();
        $("#turno_catolica_primeraopcion").hide();
      }
    });

    $("#ciclos_catolica").change(function () {
      if ($(this).val() == 'SEMESTRAL') {
        $("#turno_catolica_semestral").show();
        $("#turno_default").hide();
        $("#turno_catolica_primeraopcion").hide();
        $("#turno_uni_semestral").hide();
        $("#turno_uni_anual").hide();
        $("#turno_sanmarcos_semestral").hide();
        $("#turno_sanmarcos_anual").hide();
      }
    });

    $("#ciclos_catolica").change(function () {
      if ($(this).val() == 'PRIMERA OPCIÓN') {
        $("#turno_catolica_primeraopcion").show();
        $("#turno_default").hide();
        $("#turno_catolica_semestral").hide();
        $("#turno_uni_semestral").hide();
        $("#turno_uni_anual").hide();
        $("#turno_sanmarcos_semestral").hide();
        $("#turno_sanmarcos_anual").hide();
      }
    });

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://nosir.github.io/cleave.js/dist/cleave.min.js"></script>
  <script>

  (function ($, window, undefined) {
    'use strict'

    $.fn.cleave = function (opts) {
        var defaults = { autoUnmask: false },
            options = $.extend(defaults, opts || {});

        return this.each(function () {
            var cleave = new Cleave(this, options), $this = $(this);

            $this.data('cleave-auto-unmask', options['autoUnmask']);
            $this.data('cleave', cleave);
        });
    }

    var origGetHook, origSetHook;

    if ($.valHooks.input) {
        origGetHook = $.valHooks.input.get;
        origSetHook = $.valHooks.input.set;
    } else {
        $.valHooks.input = {};
    }

    $.valHooks.input.get = function (el) {
        var $el = $(el), cleave = $el.data('cleave');

        if (cleave) {
            return $el.data('cleave-auto-unmask') ? cleave.getRawValue() : el.value;

        } else if (origGetHook) {
            return origGetHook(el);

        } else {
            return undefined;
        }
    }

    $.valHooks.input.set = function (el, val) {
        var $el = $(el), cleave = $el.data('cleave');

        if (cleave) {
            cleave.setRawValue(val);
            return $el;
        } else if (origSetHook) {
            return origSetHook(el);
        } else {
            return undefined;
        }
    }
})(jQuery, window);

var abc;

$(document).ready(function(){
	abc = $('.txtEntryBox').cleave({ date: true, numeralThousandsGroupStyle: 'thousand', autoUnmask: true});

	$('#btnRemoveCleave').on('click', function() {
  	console.log('destroy');
    abc.cleave.destroy();
  });
});

  </script>
<!--   <script>
    $(".form-control").text(function () {
		return $(this).text().replace("departamento", "Departamento");
  });
    $(".form-control").text(function () {
		return $(this).text().replace("provincia", "Provincia");
  });
  $(".form-control").text(function () {
		return $(this).text().replace("distrito", "Distrito");
	});
  </script> -->

</body>

</html>