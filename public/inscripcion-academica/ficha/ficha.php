<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Ficha de inscripción académica descargable - Trilce</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/ficha.css" rel="stylesheet">
	<style type="text/css">

		/* WEB & MOBILE*/

		.ficha_fecha {
			font-size: 10px;
			font-family: Arial;
			color: #000000;
		}

		.ficha_texto {
			font-weight: bold;
			font-size: 11px;
			line-height: 15px;
			font-family: Arial;
			color: #000000;
		}

		.hidden {
			display: none;
		}

		#page_ficha {
			display: none;
		}

		#button_imprimir_ficha {
			border-radius: 2px;
			margin: 1em auto;
			font-size: 1.1em;
			background:  #ffffff !important;
			color: #FF6334;
			padding: 0.5em 2em;
			border: 0px solid transparent;
			cursor: pointer
		}
		#button_imprimir_ficha:hover {
			opacity: 0.9;
		}

		/* PRINT */

		@media print {
			@page {
				margin: 0;
				padding: 0;
				size: auto;
				width: 1262px;
				height: 892px
			}
			#page_ficha {
				display: block !important;
			}
			#button_imprimir_ficha {
				display: none !important;
			}
			#page_web{
				display: none !important;
			}
			
		}
	</style>
</head>

<body>

<div id="page_ficha" style="position:relative;width:1262px;height:892px;margin: 0 auto;">

	<img width="1262" height="892" src="https://www.trilce.edu.pe/inscripcion-academica/ficha/ficha_final.svg" style="width: 1262px; height:892px" alt="background image" >

	<p style="position:absolute;top:176px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["dni_alumno"]) ) {
				echo $_POST["dni_alumno"];
			}
		?>
	</p>
	<p style="position:absolute;top:222px;left:202px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["tipo_preparacion"])){
				echo $_POST["tipo_preparacion"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:176px;left:202px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["ciclo"])){
				echo $_POST["ciclo"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:222px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["turno"])){
				echo $_POST["turno"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:305px;left:332px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["nombres"])){
				echo $_POST["nombres"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:305px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["apellido_paterno"])){
				echo $_POST["apellido_paterno"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:446px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["ano_termino_colegio"])){
				echo $_POST["ano_termino_colegio"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:446px;left:202px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["colegio"])){
				echo $_POST["colegio"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:400px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["telefono"])){
				echo $_POST["telefono"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:400px;left:202px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["celular"])){
				echo $_POST["celular"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:352px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["direccion"])){
				echo $_POST["direccion"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:540px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["academia_anterior"])){
				echo $_POST["academia_anterior"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:494px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["universidad_postula"])){
				echo $_POST["universidad_postula"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:540px;left:244px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["carrera"])){
				echo $_POST["carrera"]; 
			}
		?>
	</p>

	<p style="position:absolute;top:625px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php
			if (isset($_POST["nombres_apoderado"])){
				echo $_POST["nombres_apoderado"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:671px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["dni_apoderado"])){
				echo $_POST["dni_apoderado"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:672px;left:202px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["ocupacion"])){
				echo $_POST["ocupacion"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:718px;left:332px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["telefono_trabajo"])){
				echo $_POST["telefono_trabajo"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:718px;left:70px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["centro_trabajo"])){
				echo $_POST["centro_trabajo"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:718px;left:462px;white-space:nowrap" class="ficha_texto">
		<?php 
			if (isset($_POST["contacto_emergencia"])){
				echo $_POST["contacto_emergencia"]; 
			}
		?>
	</p>
	<p style="position:absolute;top:760px;left:452px;white-space:nowrap" class="ficha_fecha"><?php echo date("d"); ?></p>
	<p style="position:absolute;top:760px;left:500px;white-space:nowrap" class="ficha_fecha"><?php echo date("F"); ?></p>
	<p style="position:absolute;top:760px;left:565px;white-space:nowrap" class="ficha_fecha"><?php echo date("y"); ?></p>
</div>

<div id="page_web">
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

	<section class="banner d-flex justify-content-center align-items-center text-center pt-5">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center font-weight-bold my-4">¡Registro exitoso!</h1>
			</div>
			<div class="col-md-6 offset-md-3">
				<button id="button_imprimir_ficha"onclick="imprimir()">Descarga tu ficha aquí</button>
			</div>
		</div>
		</div>
	</section>

	<section class="datos d-flex justify-content-center align-items-center text-center">
		<div class="container">
			<div class="row py-5 ">
				<div class="col-md-12 text-center">
					<h2 class="text-center font-weight-bold">¡No olvides seguir estos pasos!</h2>
					<h3>Luego de descargar tu ficha de inscripción</h3>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<article class="py-4"> 
							<i class="fa fa-laptop"></i>
							<h4 class="font-weight-bold my-3">Pago al BBVA</h4>
							<p class="text-center px-3">Para realizar el pago de la primera mensualidad del ciclo, deberás acercarte al banco, agente o acceder a la app del BBVA.</p>
						</article>
					</div>
					<div class="col-xs-12 col-md-4">
						<article class="py-4"> 
							<i class="fa fa-credit-card"></i>
							<h4 class="font-weight-bold my-3">Número de cuenta</h4>
							<p class="text-center px-3">Cuenta corriente 0011-0661-0100068332  CCI 011-661-000100068332-64 Nombre: Asociación Educativa San Isidro</p>
						</article>
					</div>
					<div class="col-xs-12 col-md-4">
						<article class="py-4"> 
							<i class="fa fa-clock-o"></i>
							<h4 class="font-weight-bold my-3">Plazo del pago</h4>
							<p class="text-center px-3">Solo tienes 24 horas para realizar el pago. Una vez hecho el depósito, nos envías tu voucher al correo: <a href="mailto:registro.academias@trilce.edu.pe">registro.academias@trilce.edu.pe</a> con tus datos completos.</p>
						</article>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<article class="py-4"> 
							<i class="fa fa-exclamation-circle"></i>
							<h4 class="font-weight-bold my-3">Datos del voucher</h4>
							<p class="text-center px-3">Debe indicar: el monto abonado, el número de operación, fecha y hora de la transferencia.</p>
						</article>
					</div>
					<div class="col-xs-12 col-md-4">
						<article class="py-4"> 
							<i class="fa fa-history"></i>
							<h4 class="font-weight-bold my-3">Proceso de inscripción</h4>
							<p class="text-center px-3">Después de realizar el pago, el proceso puede demorar 24 horas para que puedas acceder a tus clases.</p>
						</article>
					</div>
					<div class="col-xs-12 col-md-4">
						<article class="py-4"> 
							<i class="fa fa-exclamation-triangle"></i>
							<h4 class="font-weight-bold my-3">¡Importante!</h4>
							<p class="text-center px-3">Una vez que realizas el pago, ya no puedes solicitar la devolución del dinero y tampoco puedes efectuar un cambio de ciclo.</p>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="py-5">
		<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
			<p>© 2020 Trilce. Todos los derechos reservados.</p>
			</div>
		</div>
		</div>
	</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	function imprimir() {
		const btn = document.getElementById("button_imprimir_ficha");
		btn.classList.add("hidden");
		window.print();
		btn.classList.remove("hidden");
	}
</script>
<script>
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("January", "Enero");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("February", "Febrero");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("March", "Marzo");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("April", "Abril");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("May", "Mayo");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("June", "Junio");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("July", "Julio");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("August", "Agosto");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("September", "Septiembre");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("October", "Octubre");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("November", "Noviembre");
	});
	$(".ficha_fecha").text(function () {
		return $(this).text().replace("December", "Diciembre");
	});
</script>
</body>
</html>
