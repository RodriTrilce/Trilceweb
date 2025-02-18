<?php
$servername = "localhost";
$username   = "root";
$password   = "cYPS-m=gXoZVE6HkH0{6";
$dbname     = "web_colegio_2021";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$nombres  			= $_POST['nombres'];
$apellido_paterno  	= $_POST['apellido_paterno'];
$apellido_materno  	= $_POST['apellido_materno'];
$nombres_apellidos  = $nombres.' '. $apellido_paterno.' '.$apellido_materno;
$email              = $_POST['email'];
$telefono           = $_POST['telefono'];
$sede               = $_POST['sede'];
$grado              = $_POST['grado'];

$sql = "INSERT INTO lista_espera (nombres_apellidos, email, telefono, sede, grado, fecha_registro) 
VALUES ('$nombres_apellidos', '$email', '$telefono','$sede','$grado',now())";

if ($conn->query($sql) === TRUE)
{
    //echo "New record created successfully";
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Colegio Trilce</title>
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
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <section class="section2 fondo_primeros_puestos" style="padding-bottom: 0px !important; padding-top: 0px !important">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="ml80 fondo_registro_2021 hailitar_header">
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
                <div class="col-lg-6 fondo_colegio full_height">
                </div>
                <div class="col-lg-6 pt-4 pb-4 fondo_registro_2021 full_height">
                    <div class="ml80">
						<div class="row">
							<div class="col-lg-6 hailitar_mobile">
								<img src="images/colegio/logo_colegio.svg" alt="Logo Colegio">
							</div>
							<div class="col-lg-6 hailitar_mobile">
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
						<img src="images/colegio/logo-matricula-2022.svg" alt="Trilce Colegio" class="mt40"><br><br><br><br>
                    </div>
                    <div class="ml80">
                        <div class="gracias_contenedor">
                            <h2 class="gracias_titulo">¡Gracias por tu interés!</h2>
                            <p class="gracias_descripcion">Nos comunicaremos contigo cuando iniciemos <b>nuestro proceso de admisión 2022.</b></p>
                            <button type="submit" style="border: 2px solid #FF7738 !important;" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="location.href='index.php';"><b style="font-family: NSB !important">Volver</b></button>
                        </div>
                        <p class="pie_2">© 2021 Trilce. Todos los derechos reservados.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- feather icon -->
    <script src="js/feather.js"></script>
    <!-- unicons icon -->
    <script src="js/unicons.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>