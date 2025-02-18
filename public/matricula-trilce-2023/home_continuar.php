<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Matrícula Online 2022 - Colegio Trilce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
  <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
  <meta content="Themesbrand" name="author" />
  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.min.css" rel="stylesheet" type="text/css" />
  
  <!-- Font Awesome -->
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/line-awesome.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<section class="section2 fondo_primeros_puestos pad0">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="fondo_registro_2021 hailitar_header">
				<div class="row">
					<div class="col-lg-6 col-xs-6 contenedor_mobile_logo">
						<img src="images/colegio/logo_colegio.svg" alt="Logo Colegio">
					</div>
					<div class="col-lg-6 col-xs-6 contenedor_mobile_iconos">
						<a href="https://www.trilce.edu.pe/colegio">
							<img src="images/colegio/home.svg" alt="Logo Colegio" class="icono_colegio">
						</a>
						<a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
							<img src="images/colegio/whatsapp.svg" alt="Logo Colegio" class="icono_colegio">
						</a>
						<a href="tel:016198100">
							<img src="images/colegio/telefono.svg" alt="Logo Colegio" class="icono_colegio">
						</a>
						<br>
						<span class="texto_telefono">6198 100</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 fondo_registro_2021 full_height capa1">
			</div>
			<div class="col-lg-9 pt-3 fondo_registro_2021 full_height padlr60">
				<div class="row">
					<div class="col-lg-6 hailitar_mobile">
						<img src="images/logo_academia.svg" alt="Logo Colegio">
					</div>
					<div class="col-lg-6 hailitar_mobile header_right">
						<a href="https://www.trilce.edu.pe/colegio">
							<img src="images/colegio/home.svg" alt="Logo Colegio" class="icono_colegio">
						</a>
						<a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
							<img src="images/colegio/whatsapp.svg" alt="Logo Colegio" class="icono_colegio">
						</a>
						<a href="tel:016198100">
							<img src="images/colegio/telefono.svg" alt="Logo Colegio" class="icono_colegio">
						</a>
						<br>
						<span class="texto_telefono">6198 100</span>
					</div>
				</div>
				<form action="fin_iniciar.php" method="post">
				<div class="row">
					<div class="col-lg-4 espacio_top_matricula">
						<img src="images/matricula_2023.svg" alt="Trilce Colegio" class="logo_nuevo_matricula">
						<p class="titulo_iniciar">1. Seleccione el tipo de preparación / modalidad:</p>
						<select class="select_iniciar mt18 mb10">
							<option value="">Seleccione preparación</option>
							<option value="1">DNI</option>
						</select>
						<select class="select_iniciar mb36">
							<option value="">Seleccione modalidad</option>
							<option value="1">DNI</option>
						</select>
						<p class="titulo_iniciar_italic1">Usted seleccionó:<br>
						<span class="titulo_iniciar_italic2">Preparación UNI - Virtual</span></p>
						<select class="select_iniciar mt15 mb10">
							<option value="">Elija el ciclo</option>
							<option value="1">DNI</option>
						</select>
						<select class="select_iniciar">
							<option value="">Elija el turno</option>
							<option value="1">DNI</option>
						</select>
						<p class="titulo_iniciar_italic3 mt13">Semestral - Mañana: <strong>S/ 170*</strong> </p>
						<p class="titulo_iniciar_italic4 mt6">* Pago mensual </p>
					</div>

					<div class="col-lg-4 espacio_top_matricula_2">
						<p class="titulo_iniciar">2. Ingrese datos:</p>
						<p class="titulo_datos_alumno mt21">Datos del <strong>alumno:</strong></p>
						<p class="titulo_iniciar2 mt7 mb8">Soy mayor de edad (sin apoderado):</p>
						<span class="titulos_radiob">SÍ</span> <input type="radio" id="contactChoice1" name="contact"> <span class="titulos_radiob">NO</span><input type="radio" id="contactChoice2" name="contact"><br>
						<select class="select_tipo_iniciar mt12">
							<option value="">Tipo de documento</option>
							<option value="1">DNI</option>
						</select>
						<input class="input_modal mb10 input_nro_iniciar" type="text" id="cip" name="cip" placeholder="Nro de documento">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Fecha de nacimiento">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Apellido Paterno del alumno">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Apellido Materno del alumno">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Nombres del alumno">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Correo electrónico">
						<br>
						<label class="mt16 titulo_requiere">¿Requiere factura?</label> <span class="titulos_radiob">SÍ</span> <input type="radio" id="contactChoice1" name="contact"> <span class="titulos_radiob">NO</span><input type="radio" id="contactChoice2" name="contact">
						<input class="input_modal mt19 mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="RUC">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Razón Social">
					</div>

					<div class="col-lg-4 espacio_top_matricula_2">
						<p class="titulo_apoderado">&nbsp;</p>
						<p class="titulo_datos_alumno mt8">Datos del <strong>apoderado:</strong></p>
						<input class="input_modal mt70 mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Apellido Paterno del apoderado">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Apellido Materno del apoderado">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Nombres del apoderado">
						<select class="select_tipo_iniciar">
							<option value="">Tipo de documento</option>
							<option value="1">DNI</option>
						</select>
						<input class="input_modal mb10 input_nro_iniciar" type="text" id="cip" name="cip" placeholder="Nro de documento">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Correo electrónico">
						<input class="input_modal mb10 input_iniciar" type="text" id="cip" name="cip" placeholder="Celular">
						<br>
						<input type="checkbox"> <span class="acepto1">He leído y acepto los <strong><a href="#" style="color: #fff !important; text-decoration: underline !important" id="btn_terminos">términos y condiciones.</a></strong></span>
						<br>
						<input type="checkbox"> <span class="acepto1">He leído y acepto la <strong><a href="#" style="color: #fff !important; text-decoration: underline !important" id="btn_politicas">política de protección de datos personales.</a></strong></span>
						<br>
						<a class="check-div-a btn btn-block btn_iniciar_matricula2 mt15" id="" href="index.php">Anterior</a>
						<a class="check-div-a btn btn-block btn_iniciar_matricula2 mt15" id="" href="fin_continuar.php">Registrarme</a>
					</div>
				</div>
				</form>
				<div class="row">
					<div class="col-lg-12">
						<p class="pie_matricula_home">© 2022 Trilce. Todos los derechos reservados.</p>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>

<div id="myModal" class="modal">
	<div class="modal-content2" style="text-align: center">
		<div class="col-md-12 text-justify">
			<h2 class="titulo_terminos">Condiciones económicas y del servicio de la Academia Preuniversitaria</h2>
			<hr style="text-align: center;">
			<p class="parrafo_terminos"><strong>1.</strong> Se considerará tardanza si el alumno ingresa a la plataforma 5 minutos después de iniciada la clase.</p>
			<p class="parrafo_terminos"><strong>2.</strong> Las justificaciones serán aceptadas solo en caso de problemas de salud debidamente sustentados.</p>
			<p class="parrafo_terminos"><strong>3.</strong> Para los ciclos Semestral, Anual, Primera Opción e Intensivo, el pago se realiza mensualmente.</p>
			<p class="parrafo_terminos"><strong>4.</strong> En caso el alumno quiera cambiar de ciclo, el trámite lo debe realizar el apoderado o alumno mayor de edad, mediante un correo al tutor y/o coordinador encargado. Sin embargo, se deberá esperar que finalice la fecha de vencimiento de la cuota. Es decir, no se puede realizar el cambio en pleno desarrollo del ciclo o del turno; se debe esperar primero su culminación hasta donde lo permita el pago ya realizado.</p>
			<p class="parrafo_terminos"><strong>5.</strong> Si el padre de familia, apoderado o alumno mayor de edad requiere la devolución del dinero, la institución retendrá la suma de S/ 50.00 por concepto de gastos administrativos.</p>
			<p class="parrafo_terminos"><strong>6.</strong> Para el trámite de postergación de matrícula, se procederá a descontar los días asistidos y no asistidos sin justificación. El monto restante será reservado para el siguiente ciclo académico inmediato en el cual el alumno se matricule. En caso decida no retomar la preparación al ciclo siguiente, el monto reservado le será devuelto en un plazo de 30 días calendario, a solicitud del padre de familia, apoderado o alumno mayor de edad. La institución retendrá la suma de S/ 50.00 por concepto de gastos administrativos.</p>
			<p class="parrafo_terminos"><strong>7.</strong> Una vez terminado el ciclo en el cual se inscribió el alumno, el correo y las plataformas académicas quedarán inhabilitados.</p>
			<p class="parrafo_terminos"><strong>8.</strong> En caso de no estar al día en el pago de la pensión, se procederá a dar de baja al correo institucional del alumno. En consecuencia, este se verá imposibilitado de acceder a la plataforma mediante la cual se dictan las clases.</p> 
			<p class="parrafo_terminos"><strong>9.</strong> El dictado de clases se iniciará siempre que se alcance el número mínimo de alumnos matriculados establecido por la institución.</p>
			<p class="parrafo_terminos"><strong>10.</strong> Manifiesto mi conformidad en caso la institución cambie la fecha de inicio del dictado de clases del ciclo en cuestión.</p>
			<p class="parrafo_terminos_i">"Declaro tener conocimiento de que la Academia Preuniversitaria Trilce incluirá la información personal de mi menor hijo(a), padres y/o apoderados en su base de datos en un tiempo indefinido para fines de la actividad que desarrolla, de acuerdo a la ley N.° 29733".</p>
			<span class="close_01">
				<a class="check-div-a btn btn-block btn_aceptar_terminos">Aceptar</a>
			</span>
		</div>
	</div>
</div>

<div id="myModal_2" class="modal">
	<div class="modal-content2" style="text-align: center">
		<div class="col-md-12 text-justify">
			<h2 class="titulo_terminos">Política de protección de datos personales</h2>
			<hr style="text-align: center;">
			<h2 class="subtitulo_terminos mt19">I. Introducción</h2>
			<p class="parrafo_terminos"><strong>1.</strong> La presente Política de Protección de Datos Personales Trilce describe el tratamiento que nuestra institución (en adelante Trilce) brinda a los datos personales que recopila de los usuarios en su portal web. Dicha Política se ajusta a las disposiciones contenidas en la Ley de Protección de Datos Personales (Ley N.° 29733), su Reglamento y normas complementarias. Para ello, adoptará las medidas técnicas y organizativas necesarias a fin de evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los datos personales facilitados por los titulares de datos personales.</p>

			<h2 class="subtitulo_terminos mt19">II. Definiciones</h2>
			<p class="parrafo_terminos"><strong>2.</strong> De acuerdo con la Ley N.° 29733 (Ley de Protección de Datos Personales) y su Reglamento aprobado por el Decreto Supremo N.° 003-2013-JUS, se define lo siguiente:</p>
			<p class="parrafo_terminos"><strong>a) Datos personales:</strong> toda información sobre una persona natural que la identifica o hace identificable a través de medios que pueden ser razonablemente utilizados.</p>
			<p class="parrafo_terminos"><strong>b) Tratamiento de datos personales:</strong> cualquier operación o procedimiento técnico, automatizado o no, que permite la recopilación, registro, organización, almacenamiento, conservación, elaboración, modificación, extracción, consulta, utilización, bloqueo, supresión, comunicación por transferencia o por difusión o cualquier otra forma de procesamiento que facilite el acceso, correlación o interconexión de los datos personales.</p>

			<h2 class="subtitulo_terminos mt19">III. Consentimiento del Usuario</h2>
			<p class="parrafo_terminos"><strong>3.</strong> Trilce se obliga a que de los datos personales obtenidos a través de formularios del portal web, cuenten previamente con el consentimiento expreso del titular para recopilar su información. Estos datos serán tratados única y específicamente para la finalidad solicitada.</p>
			
			<h2 class="subtitulo_terminos mt19">IV. Tratamientos de datos personales</h2>
			<p class="parrafo_terminos"><strong>4.</strong> Los datos personales facilitados por el Usuario se almacenarán en los bancos de datos que forman parte del sistema de información de Trilce; además, serán tratados para poder llevar a cabo sus finalidades.</p>
			<p class="parrafo_terminos"><strong>5.</strong> Trilce no empleará los datos personales del Usuario para ninguna finalidad distinta a la que fueron suministrados, a no ser que se trate de una finalidad expresamente permitida o exigida por la normativa vigente aplicable, por orden judicial o una autoridad competente.</p>
			<p class="parrafo_terminos"><strong>6.</strong> Trilce no compartirá ni cederá a terceros algún dato personal del Usuario sin su consentimiento previo y expreso, salvo cuando dicha comunicación sea exigida por la legislación vigente, por orden judicial o por una autoridad competente.</p>
			<p class="parrafo_terminos"><strong>7.</strong> El portal web de Trilce puede ofrecer enlaces (links) para acceder a otros portales web que no son parte de aquellos. Es responsabilidad del Usuario revisar las políticas de privacidad en dichos portales web para verificar el nivel de protección de sus datos personales en ese ambiente, lo que es ajeno a la responsabilidad de Trilce.</p>

			<h2 class="subtitulo_terminos mt19">V. Medidas de seguridad</h2>
			<p class="parrafo_terminos"><strong>8.</strong> Trilce se compromete a brindar todas las medidas técnicas, legales y administrativas necesarias para garantizar la seguridad y confidencialidad de los datos personales del Usuario. Estos serán tratados considerando los principios de legalidad, consentimiento, proporcionalidad, calidad, seguridad y los demás presentes en la normativa vigente referida a protección de datos personales. Para ello, se evitará que sean filtrados, difundidos o sujetos a cualquier acción que ponga en peligro la información personal del Usuario.</p>
			
			<h2 class="subtitulo_terminos mt19">VI. Responsabilidades</h2>
			<p class="parrafo_terminos"><strong>9.</strong> Trilce asume que los datos personales proporcionados por el Usuario deben ser verdaderos, completos, exactos, vigentes y corresponder a su verdadera identidad. Ante cualquier modificación, el Usuario será responsable de comunicarlo inmediatamente a Trilce.</p>
			<p class="parrafo_terminos"><strong>10.</strong> El Usuario asumirá las responsabilidades por los daños y perjuicios, directos o indirectos, que genere a Trilce y/o terceros por incumplir total o parcialmente lo señalado en el punto anterior.</p>

			<h2 class="subtitulo_terminos mt19">VII. Ejercicio de los derechos de Acceso, Rectificación, Cancelación y Oposición (derechos ARCO)</h2>
			<p class="parrafo_terminos"><strong>11.</strong> Trilce debe garantizar la atención de los derechos protegidos que pueda ejercer el Titular de los Datos Personales. Para ello, debe mantener disponibles canales, procedimientos e información a fin de atender la solicitud del Usuario en los plazos establecidos por las normas de protección de datos personales.</p>
			<p class="parrafo_terminos"><strong>12.</strong> El Usuario podrá ejercitar sus derechos de Información, Acceso, Rectificación, Cancelación, Revocación, Oposición, etc. (derechos ARCO) al uso de sus datos personales, de conformidad con la Ley de Protección de Datos Personales (Ley N.° 29733). En ese sentido, el Usuario tiene derecho, entre otros, a acceder a su información personal, a solicitar la rectificación de datos inexactos y a revocar su consentimiento para su tratamiento. Asimismo, podrá solicitar la supresión de sus datos u oponerse a su tratamiento, incluso cuando estos ya no resulten necesarios para los fines que motivaron su recopilación.</p>
			<p class="parrafo_terminos"><strong>13.</strong> El ejercicio de estos derechos es gratuito. Para ello, el Usuario puede dirigirse por correo electrónico a datospersonales@trilce.edu.pe, adjuntando una solicitud y copia de su documento de identidad (DNI/CE/Pasaporte) que acredite su titularidad sobre los datos personales respecto de los cuales ejercerá su derecho. También podrá hacerlo en cualquiera de nuestras oficinas ubicadas en el país. Si utiliza un representante legal, este deberá acreditarse como tal.</p>
			<p class="parrafo_terminos"><strong>14.</strong> La atención de la solicitud será efectuada de acuerdo a los plazos previstos en la normatividad de protección de datos personales.</p>

			<h2 class="subtitulo_terminos mt19">VIII. Cambios de Política de Privacidad</h2>
			<p class="parrafo_terminos"><strong>15.</strong> Trilce se reserva el derecho de modificar y/o actualizar la presente Política de Privacidad con fines de mejora, ya sea para adaptarla a futuros cambios que pueda requerir el marco normativo vigente, brindar una mejor calidad de servicio o comunicar nuevas alternativas relacionadas con la presente Política. Es responsabilidad del Usuario mantenerse informado sobre los cambios que se introduzcan en esta Política de Privacidad publicando en este sitio su versión actualizada o modificada.</p>
			<span class="close_02">
				<a class="check-div-a btn btn-block btn_aceptar_terminos">Aceptar</a>
			</span>
		</div>
	</div>
</div>

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- feather icon -->
    <script src="js/feather.js"></script>
    <!-- unicons icon -->
    <script src="js/unicons.js"></script>
    <!-- Main Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
	<script>
        var modal 	= document.getElementById("myModal");
        var btn_i 	= document.getElementById("btn_terminos");
        var span 	= document.getElementsByClassName("close_01")[0];

        btn_i.onclick = function()
        {
            modal.style.display = "block";
        }
		span.onclick = function()
        {
            modal.style.display = "none";
        }
        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
	<script>
		var modal_2 = document.getElementById("myModal_2");
		var btn_c 	= document.getElementById("btn_politicas");
        var span_2	= document.getElementsByClassName("close_02")[0];

		btn_c.onclick = function()
        {
            modal_2.style.display = "block";
        }
		span_2.onclick = function()
        {
            modal_2.style.display = "none";
        }
		window.onclick = function(event)
        {
            if (event.target == modal_2)
            {
                modal_2.style.display = "none";
            }
        }
    </script>
	<script>
      $('a').click(function()
      {
          $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 500);
          return false;
      });
    </script>
</body>
</html>