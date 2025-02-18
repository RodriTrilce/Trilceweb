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

			<div class="col-lg-6 fondo_registro_2021 full_height capa1">
			</div>

			<div class="col-lg-6 pt-3 fondo_registro_2021 full_height padlr60">
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
				<div class="row">
					<div class="col-lg-12 espacio_logo">
						<img src="images/logo_matricula_2023.svg" alt="Trilce Colegio" class="">
						<p class="titulo_matricula">Queremos que tu proceso de matrícula sea<br> rápido y <b class="titulo_b">desde la comodidad de tu hogar.</b></p>
						<a class="check-div-a btn btn-block vista_home_boton1 btn_iniciar_matricula" id="btn_iniciar">¡Iniciar matrícula!</a>
						<a class="check-div-a btn btn-block vista_home_boton1 btn_iniciar_matricula" id="btn_continuar">Continuar matrícula</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="pie_matricula espacio_pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
					</div>
				</div>
			</div>

		</div>
    </div>
</section>

<div id="myModal" class="modal">
	<div class="modal-content">
		<div class="col-md-12 text-justify">
			<div style="background: #F3744A; border-radius: 16px 16px 0px 0px; height: 187px;">
				<span class="close">&times;</span>
				<p class="p_terminos_centrado">
					<img src="images/icono_modal.svg" alt="Logo Colegio" class="icono_colegio_modal">
				</p>
				<p class="parrafo_01">
				Para iniciar con la matrícula,<br>
				<b>ingrese los siguientes datos:</b>
				</p>
			</div>
			<form action="home_iniciar.php" method="post">
				<div class="centrado">
					<select class="select_tipo">
						<option value="">Tipo de documento</option>
						<option value="1">DNI</option>
					</select>
					<input class="input_modal mb_14 input_nro" type="text" id="cip" name="cip" placeholder="Nro de documento">
					<input class="input_modal mb_14 input_fecha" type="text" id="cip" name="cip" placeholder="Fecha de nacimiento">
					<button type="submit" style="border: 2px solid #F3744A !important; width: 246px !important; font-family: GR; margin-bottom: 50px; font-style: normal; font-weight: 600; font-size: 20px !important; line-height: 18px; align-items: center; text-align: center;" class="btn btn-primary btn-block vista_home_boton1 b_184 mb_14">¡Iniciar matrícula!</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="myModal_2" class="modal">
	<div class="modal-content">
		<div class="col-md-12 text-justify">
			<div style="background: #F3744A; border-radius: 16px 16px 0px 0px; height: 187px;">
				<span class="close_2">&times;</span>
				<p class="p_terminos_centrado">
					<img src="images/icono_modal.svg" alt="Logo Colegio" class="icono_colegio_modal">
				</p>
				<p class="parrafo_01">
				Para continuar con la matrícula,<br>
				<b>ingrese los siguientes datos:</b>
				</p>
			</div>
			<form action="reserva.php" method="post">
				<div class="centrado">
					<select class="select_tipo">
						<option value="">Tipo de documento</option>
						<option value="1">DNI</option>
					</select>
					<input class="input_modal mb_14 input_nro" type="text" id="cip" name="cip" placeholder="Nro de documento">
					<input class="input_modal mb_14 input_fecha" type="text" id="cip" name="cip" placeholder="Fecha de nacimiento">
					<button type="submit" style="border: 2px solid #F3744A !important; width: 246px !important; font-family: GR; margin-bottom: 50px; font-style: normal; font-weight: 600; font-size: 20px !important; line-height: 18px; align-items: center; text-align: center;" class="btn btn-primary btn-block vista_home_boton1 b_184 mb_14" onclick="my_continuar()">Continuar matrícula</button>
				</div>
			</form>
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
        var btn_i 	= document.getElementById("btn_iniciar");
        var span 	= document.getElementsByClassName("close")[0];

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
		var btn_c 	= document.getElementById("btn_continuar");
        var span_2	= document.getElementsByClassName("close_2")[0];

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