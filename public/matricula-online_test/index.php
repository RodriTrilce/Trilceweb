<?php 
  include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112446135-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-112446135-1');
	</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Matrícula Online - Trilce</title>
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
            <a class="navbar-brand" href="https://www.trilce.edu.pe/academias" target="_blank">
              <img src="img/logo-trilce-academia-white.svg" width="100">
            </a>
        </div>
        <div class="col-xs-6  col-md-6 d-flex justify-content-end align-items-center" >
            <div class="row d-flex">
              <aside>
                <a class="text-white" href="https://www.trilce.edu.pe/academias" target="_blank">
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

 <section class="banner d-flex justify-content-center align-items-center text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center font-weight-bold my-4">Matricula en linea</h1>
          <h2>¡Vacantes limitadas!</h2>
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

        <!-- PASO NUMERO 1: ALUMNO -->

          <div class="box-form offset-md-1 col-md-10 offset-md-1 mb-4">

            <div class="container">

                <div class="row">
                        <div class="col-xs-12 col-md-6"><h2 class="mb-4">1. Datos generales del <i>Alumno</i></h2></div>
                        <div class="col-xs-12 col-md-6"><small class="required">(*) Campos obligatorios</small></div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <select name="tipo_documento" id="tipo_documento" class="form-control" required>
                                <option value="" selected disabled>Tipo de documento *</option>
                                <option value="01">DNI</option>
                                <option value="04">CE</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <input class="form-control" minlength="8" maxlength="9" id="numero_documento"
                            name="numero_documento" aria-label="Número de documento" placeholder="Número de documento *" required="" type="number">
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group" data-toggle="tooltip" data-placement="top" title="Fecha de nacimiento">
                            <!-- <input required placeholder="Fecha de nacimiento *" type="date" class="txtEntryBox form-control"  name="fecha_nacimiento"  maxLenght="8" max="8" /> -->
                            <input required placeholder="Fecha de nacimiento *" type="text" class="form-control"  name="fecha_nacimiento" id="fecha_nacimiento" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')"/>
                                <!-- <input onKeyDown="mostrarEdad()" placeholder="Fecha de nacimiento *" min="1980-01-01"
                            class="form-control" type="text"
                            onmouseenter="(this.type='date')" name="fecha_nacimiento" id="fecha_nacimiento" required> -->
                            <input type="text" name="age" id="age" value="" hidden>
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <fieldset class="form-group alert alert-danger d-none" id="mensaje_alumno">¡Alumno ya matriculado!</fieldset>
                    </div>
                </div>

              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" minlength="3" maxlength="40" id="nombres"
                      name="nombres" aria-label="Nombres" placeholder="Nombres *" required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" minlength="3" maxlength="40" id="apellido_paterno"
                      name="apellido_paterno" aria-label="Apellido paterno" placeholder="Apellido paterno *"
                      required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="text" minlength="1" maxlength="40" id="apellido_materno"
                      name="apellido_materno" aria-label="Apellido materno" placeholder="Apellido materno">
                  </fieldset>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 col-md-4">
                    <fieldset class="form-group">
                        <select name="sexo" id="sexo" class="form-control" required>
                            <option value="" selected disabled>Sexo *</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="text"  minlength="1" maxlength="55" id="direccion" name="direccion"
                      placeholder="Dirección 1 *" aria-label="Dirección 1" required="">
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                  <fieldset class="form-group">
                    <input class="form-control" type="text"  minlength="1" maxlength="55" id="direccion_secundaria" name="direccion_secundaria"
                      placeholder="Dirección 2" aria-label="Dirección 2">
                  </fieldset>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 col-md-4">
                   <fieldset class="form-group">
                        <select class="form-control js-example-basic-single" name="state" id="sel_departamento" style="width:100%">
                        </select> 
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                   <fieldset class="form-group">
                        <select class="form-control js-example-basic-single" name="state" id="sel_provincia"  style="width:100%">
                        </select>
                  </fieldset>
                </div>
                <div class="col-xs-12 col-md-4">
                   <fieldset class="form-group">
                        <select class="form-control js-example-basic-single" name="state" id="sel_distrito"  style="width:100%">
                        </select>
                  </fieldset>
                </div>
              </div>
              
            </div>

          </div>

          <!-- PASO NUMERO 2: APODERADO -->

          <div class="box-form offset-md-1 col-md-10 offset-md-1 mb-4">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><h2 class="mb-4">2. Datos generales del <i>padre y/o apoderado</i></h2></div>
                    <div class="col-xs-12 col-md-6"><small class="required">(*) Campos obligatorios</small></div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <select name="tipo_documento_apoderado" id="tipo_documento_apoderado" class="form-control" required>
                                <option value="" selected disabled>Tipo de documento *</option>
                                <option value="01">DNI</option>
                                <option value="04">CE</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                    <fieldset class="form-group">
                        <input class="form-control" minlength="8" maxlength="9" id="numero_documento_apoderado"
                            name="numero_documento_apoderado" aria-label="Número de documento" placeholder="Número de documento *" required="" type="number">
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <input class="form-control" type="number" maxlength="24" name="numero_telefono_apoderado" id="numero_telefono_apoderado"
                            placeholder="Número de teléfono *">
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <input class="form-control" type="text" minlength="3" maxlength="40" id="nombres_apoderado"
                            name="nombres_apoderado" aria-label="Nombres" placeholder="Nombres *" required="">
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <input class="form-control" type="text" minlength="3" maxlength="40" id="apellido_paterno_apoderado"
                            name="apellido_paterno_apoderado" aria-label="Apellido paterno" placeholder="Apellido paterno *"
                            required="">
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <input class="form-control" type="text" minlength="1" maxlength="40" id="apellido_materno_apoderado"
                            name="apellido_materno_apoderado" aria-label="Apellido materno" placeholder="Apellido materno">
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <select name="sexo" id="sexo" class="form-control" required>
                                <option value="" selected disabled>Sexo *</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <input class="form-control" type="email"  minlength="1" maxlength="55" name="correo_eletronico_apoderado" id="correo_eletronico_apoderado"
                            placeholder="Correo electrónico">
                        </fieldset>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <fieldset class="form-group">
                            <select name="sexo_apoderado" id="sexo_apoderado" class="form-control" required>
                                <option value="" selected disabled>Parentesco *</option>
                                <option value="PADRE">Padre/Madre</option>
                                <option value="HIJOA">Hijo(a)</option>
                                <option value="CONYU">Cònyugue</option>
                                <option value="YERNU">Yerno/Nuera</option>
                                <option value="SUEGR">Suegro(gra)</option>
                                <option value="ABUEL">Abuelo(la)</option>
                                <option value="NIETO">Nieto(ta)</option>
                                <option value="HERMA">Hermano(na)</option>
                                <option value="CUNAD">Cuñado(da)</option>
                                <option value="BISAB">Bisabuelo(la)</option>
                                <option value="BISNI">Bisnieto(ta)</option>
                                <option value="TIOOA">Tío(a)</option>
                                <option value="SOBRI">Sobrino(na)</option>
                                <option value="PRIMO">Primo(ma)</option>
                            </select> 
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="reclam-form-group">
                        <label id="reclam-year">
                            <input id="check-factura" name="requiere_factura" type="checkbox" name="validacion" value="true">
                            <label for="check-factura"></label>
                            <label for="check-factura" class="reclam-check-menor-text">¿Requiere factura?</label>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row" id="div-factura" style="display: none;">

                    <div class="container">

                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <fieldset class="form-group">
                                    <input class="form-control" type="text" minlength="11"  maxlength="11" name="numero_ruc" id="numero_factura" placeholder="Número RUC *" required>
                                </fieldset>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <fieldset class="form-group">
                                    <input class="form-control" type="text"   minlength="1"  maxlength="55" name="razon_social" id="razon_social" placeholder="Razón social *" required>
                                </fieldset>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <fieldset class="form-group">
                                    <input class="form-control" type="text"  minlength="1"  maxlength="55" name="direccion_fiscal" id="direccion_fiscal" placeholder="Dirección fiscal *" required>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

          </div>

          <!-- PASO NUMERO 3: DATOS ACADEMICOS -->
        
          <div class="box-form offset-md-1 col-md-10 offset-md-1 mb-4">

            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-md-6"><h2 class="mb-4">3. Registro académico</i></h2></div>
                  <div class="col-xs-12 col-md-6"><small class="required">(*) Campos obligatorios</small></div>
              </div>
              <div class="row">
                <!-- <div class="col-xs-12 col-md-5 box-img-1">
                  <img class="px-4" src="img/img-enrollment-01.png">
                </div> -->
                <div class="col-xs-12 col-md-12 box-data-1">
                    <div class="row">

                    <!-- /****************/ FECHA DE INICIO /***************/ -->

                        <div class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <input class="form-control" type="text"  name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de inicio *" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')" onfocus="(this.type='date')" onblur="(this.value == '' ? this.type='text' : this.type='date')" >
                            </fieldset>
                        </div>

                        <!-- /****************/ AÑO /***************/ -->

                        <div class="col-xs-12 col-md-4">
                                <fieldset class="form-group">
                                    <select name="sexo" id="sexo" class="form-control" required>
                                        <option value="" selected disabled>Año académico *</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </fieldset>
                        </div>

                        <!-- /****************/ SERVICIOS /***************/ -->

                        <div class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="servicio" id="servicio"
                                aria-label="Universidad" required="">
                                <option value="" selected="" disabled="">Tipo de preparación *</option>
                                <option value="ACAUN">Pre UNI</option>
                                <option value="ACASM">Pre San Marcos</option>
                                <option value="ACACA">Pre Católica</option>
                                </select>
                            </fieldset>
                        </div>
                

                        <!-- /****************/ NUVEL DE ESTUDIO /***************/ -->

                        <!-- CICLO DEFAULT -->
                        <div id="ciclo_default" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="ciclo" aria-label="Ciclo" >
                                <option value="" selected="" disabled="">Ciclo *</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- CICLO UNI -->
                        <div id="ciclo_uni" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="ciclo" id="ciclos_uni" aria-label="Ciclo">
                                <option value="" selected="" disabled="">Ciclo *</option>
                                <option value="ANUAL">Anual</option>
                                <option value="SEMESTRAL">Semestral</option>
                                
                                <option value="00111">Repaso Uni 1</option>
                                <option value="00112">Verano Uni</option> 
                                <option value="00116">Anual</option>
                                <option value="00127">Verano Especial</option>
                                <option value="00163">Semestral</option>
                                <option value="00166">Selección</option>
                                <option value="00177">Ciclo especial escolar</option>
                                <option value="SEMU2">Semestral II</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- CICLO SAN MARCOS -->
                        <div id="ciclo_sanmarcos" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="ciclo" id="ciclos_sanmarcos" aria-label="Ciclo" >
                                <option value="" selected="" disabled="">Ciclo *</option>
                                <option value="ANUAL">Anual</option>
                                <option value="SEMESTRAL">Semestral</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- CICLO CATOLICA -->
                        <div id="ciclo_catolica" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="ciclo" id="ciclos_catolica" aria-label="Ciclo" >
                                <option value="" selected="" disabled="">Ciclo *</option>
                                <option value="SEMESTRAL">Semestral</option>
                                <option value="PRIMERA OPCIÓN">Primera Opción</option>
                                </select>
                            </fieldset>
                        </div>

                        

                        <!-- /****************/ TURNOS /***************/ -->

                        <!-- TURNO DEFAULT -->
                        <div id="turno_default" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- TURNO UNI ANUAL -->
                        <div id="turno_uni_anual" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                <option value="Mañana">Mañana</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- TURNO UNI SEMESTRAL -->
                        <div id="turno_uni_semestral" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- TURNO SAN MARCOS ANUAL -->
                        <div id="turno_sanmarcos_anual" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- TURNO SAN MARCOS SEMESTRAL -->
                        <div id="turno_sanmarcos_semestral" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                <option value="Mañana">Mañana</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- TURNO CATOLICA SEMESTRAL -->
                        <div id="turno_catolica_semestral" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                <option value="Mañana">Mañana</option>
                                </select>
                            </fieldset>
                        </div>

                        <!-- TURNO CATOLICA PRIMERA OPCION -->
                        <div id="turno_catolica_primeraopcion" class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="turno" aria-label="Turno" >
                                <option value="" selected="" disabled="">Turno *</option>
                                <option value="Tarde">Tarde</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="sede" id="sede" aria-label="Sede" required="">
                                    <option value="" selected="" disabled="">Sede *</option>
                                    <option value="Santa Beatriz">Online</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="sesion" id="sesion" aria-label="Sesión" required="">
                                    <option value="" selected="" disabled="">Sesión *</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="seccion" id="seccion" aria-label="Sección" required="">
                                    <option value="" selected="" disabled="">Sección *</option>
                                </select>
                            </fieldset>
                        </div>


                        <div class="col-xs-12 col-md-4">
                            <fieldset class="form-group">
                                <select class="form-control" name="origen_admision" id="origen_admision" aria-label="Origen admisión" required="">
                                    <option value="" selected="" disabled="">Origen admisión *</option>
                                    <option value="ORITV">TV</option>
                                    <option value="CABLE">Cable</option>
                                    <option value="RADIO">Radio</option>
                                    <option value="DIARE">Diario / Revistas</option>
                                    <option value="INTER">Internet</option>
                                    <option value="PANEL">Paneles</option>
                                    <option value="PUBLI">Publicidad</option>
                                    <option value="RECOM">Recomendación</option>
                                    <option value="CERCA">Cercanía</option>

                                </select>
                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>
          </div>

          <!-- PASO NUMERO 4 -->

          <div class=" col-md-12 paso-cuatro">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <fieldset class="form-check">
                    <label for="checkbox_terms"></label>
                    <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox_terms"
                      aria-label="Confirmar Términos y Condiciones" required="">
                    <p  class="mb-0">Acepto la política de <strong><a style="color: #000" href="https://www.trilce.edu.pe/proteccion-datos-personales/" target="_blank"
                          id="termsActive">datos personales</a></strong> *</p>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset class="form-check">
                    <label for="checkbox_terms"></label>
                    <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox_terms"
                      aria-label="Confirmar Términos y Condiciones" required="">
                    <p class="mb-0">Acepto los <strong>
                      <a style="color: #000" id="termsActive" data-toggle="modal" data-target="#ModalInscripcionAcademia">términos y condiciones</a></strong> *</p>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12 my-4 text-center">
                    <button class="btn  " type="submit">ENVIAR MATRÍCULA</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.3/moment.min.js"></script>

  <script>
      $(document).ready(
        function () {

          $('#check-factura').change(function () {
              $('#div-factura').toggle();
          });
        }
      );
  </script>
  <!-- <script>
      function form_reclam_menor() {
          $('#nombres_apoderado').prop("required", $('#check-factura').prop("checked"));
          $('#dni_apoderado').prop("required", $('#check-factura').prop("checked"));
          $('#celular_apoderado').prop("required", $('#check-factura').prop("checked"));
          $('#correo_apoderado').prop("required", $('#check-factura').prop("checked"));
          $('#contacto_emergencia').prop("required", $('#check-factura').prop("checked"));
      }

  </script> -->
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
    $("#servicio").change(function () {

    /** UNI **/
    if ($(this).val() == 'ACAUN') {
        $("#ciclo_uni").show();
        $("#ciclo_default").hide();
        $("#ciclo_sanmarcos").hide();
        $("#ciclo_catolica").hide();
      }
    });

    /** SANMARCOS **/
    $("#servicio").change(function () {
      if ($(this).val() == 'ACASM') {
        $("#ciclo_sanmarcos").show();
        $("#ciclo_default").hide();
        $("#ciclo_uni").hide();
        $("#ciclo_catolica").hide();
      }
    });

    /** CATOLICA **/
    $("#servicio").change(function () {
      if ($(this).val() == 'ACACA') {
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
  <script>
      window.onload = populateSelect();

      function populateSelect() {

        // CREATE AN XMLHttpRequest OBJECT, WITH GET METHOD.
        var xhr = new XMLHttpRequest(), 
            method = 'GET',
            overrideMimeType = 'application/json',
            url = 'departamento.json';        // ADD THE URL OF THE FILE.

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
                // PARSE JSON DATA. 
                var x = JSON.parse(xhr.responseText);

                var y = document.getElementById('departamento');
                for (var i = 0; i < x.length; i++) {
                    // BIND DATA TO <select> ELEMENT.
                    y.innerHTML = y.innerHTML +
                        '<option value="' + x[i].value + '">' + x[i].name + '</option>';
                }
            }
        };
        xhr.open(method, url, true);
        xhr.send();
      }

  </script>

  <script>

    $(document).ready(function(){

        const tipo_documento = $("#tipo_documento");
        const numero_documento = $("#numero_documento");
        
        tipo_documento.change(function(e){ 
          if (numero_documento.val() >= 8) {
            userExist(numero_documento.val(), e.target.value)
          }
          
        });

        numero_documento.keyup(function(evt) { 
          
          if(evt.target.value >= 8 && !!tipo_documento.val()) {
            
            userExist(evt.target.value, tipo_documento.val())
            .then(request => {
              console.log("request", request)
              if (!!request.Data) {
                $("#mensaje_alumno").addClass("d-block");
                $("#mensaje_alumno").removeClass("d-none");
                
              } 
              else {
                $("#mensaje_alumno").addClass("d-none");
                $("#mensaje_alumno").removeClass("d-block");
              }
            })
          }
        })

        function userExist(num_document, type_document) {
          return $.ajax({
            url: `https://intranet.trilce.edu.pe/api/Cliente/Publico/MA_BusquedaCliente?TIPO_DOCUMENTO=${type_document}&NRO_DOCUMENTO=${num_document}`,
            method: "GET",
            success: (data) => data
          });
        }

    })

  </script>
  
  <script>
      $(document).ready(function() {
          $('.js-example-basic-single');
          listar_departamento();
      });

      $("#sel_departamento").change(function(){
          var iddepartamento = $("#sel_departamento").val();
          listar_pronvincia(iddepartamento);
      })

      $("#sel_provincia").change(function(){
          var idprovincia = $("#sel_provincia").val();
          listar_distrito(idprovincia);
      })
  </script>

  <script>
      function listar_departamento(){
        $.ajax({
            url:'controlador/controlador_listar_departamento.php',
            type:'POST'
            }).done(function(resp){
              var data = JSON.parse(resp);
              var cadena="";
              if(data.length>0){
                  for (var i =0; i < data.length; i++) {
                      cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                      
                  }
                  $("#sel_departamento").html(cadena);
                  var iddepartamento = $("#sel_departamento").val();
                  listar_pronvincia(iddepartamento);
              }else{
                  cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
                  $("#sel_departamento").html(cadena);
              }
          })
      }
      function listar_pronvincia(iddepartamento){
          $.ajax({
              url:'controlador/controlador_listar_provincia.php',
              type:'POST',
              data:{
                  iddepartamento:iddepartamento
              }
          }).done(function(resp){
              var data = JSON.parse(resp);
              var cadena="";
              if(data.length>0){
                  for (var i =0; i < data.length; i++) {
                      cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                      
                  }
                  $("#sel_provincia").html(cadena);
                  var idprovincia = $("#sel_provincia").val();
                  listar_distrito(idprovincia);
              }else{
                  cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
                  $("#sel_provincia").html(cadena);
              }
          })
      }
      function listar_distrito(idprovincia){
          $.ajax({
              url:'controlador/controlador_listar_distrito.php',
              type:'POST',
              data:{
                  idprovincia:idprovincia
              }
          }).done(function(resp){
              var data = JSON.parse(resp);
              var cadena="";
              if(data.length>0){
                  for (var i =0; i < data.length; i++) {
                      cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                      
                  }
                  $("#sel_distrito").html(cadena);
              }else{
                  cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
                  $("#sel_distrito").html(cadena);
              }
          })
      }
    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>