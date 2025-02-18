<?php

$servername = "localhost";
//$username   = "user_vaca";
$username   = "root";
//$password   = "123456";
$password   = "cYPS-m=gXoZVE6HkH0{6";
$dbname     = "web_colegio_2021";
//$port 		= "3366";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$dni			= $_POST['dni'];
$nombre  		= $_POST['nombre'];
$paterno  		= $_POST['paterno'];
$materno  		= $_POST['materno'];
$email			= $_POST['email'];
$telefono		= $_POST['telefono'];
$sede			= $_POST['sede'];
$grado			= $_POST['grado'];

$sql = "INSERT INTO lista_vacaciones_utiles (dni, nombre, paterno, materno, email, telefono, sede, grado, fecha_registro) 
VALUES ('$dni','$nombre', '$paterno', '$materno', '$email', '$telefono', '$sede', '$grado', now())";

if ($conn->query($sql) === TRUE)
{
    //echo "New record created successfully";
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


switch ($_POST['sede']) 
{
	case "Arequipa":
		$datos_sede = "Arequipa";
		break;
	case "Callao":
		$datos_sede = "Callao";
		break;
	case "Chanchamayo":
		$datos_sede = "Chanchamayo";
		break;
	case "Chorrillos":
		$datos_sede = "Chorrillos";
		break;
	case "Comas":
		$datos_sede = "Comas";
		break;
	case "Huancayo":
		$datos_sede = "Huancayo";
		break;
	case "Los Olivos":
		$datos_sede = "Los Olivos";
		break;
	case "Maranga":
		$datos_sede = "Maranga";
		break;
	case "Marsano":
		$datos_sede = "Marsano";
		break;
	case "Ñaña":
		$datos_sede = "Ñaña";
		break;
	case "Pro":
		$datos_sede = "Pro";
		break;
	case "Roma":
		$datos_sede = "Roma";
		break;
	case "Salaverry":
		$datos_sede = "Salaverry";
		break;
	case "San Isidro":
		$datos_sede = "San Isidro";
		break;
	case "Villa El Salvador":
		$datos_sede = "Villa El Salvador";
		break;
	case "Villa Maria del Triunfo":
		$datos_sede = "Villa Maria del Triunfo";
		break;
}

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
//require "fpdf/fpdf.php";
/* use Dompdf\Dompdf;
use Dompdf\Options; */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'informes@trilce.edu.pe';
#$mail->Password = 'Xx/159753/xX';
$mail->Password = 'fqveshzgtfhujoxe';
$mail->setFrom('informes@trilce.edu.pe', 'Colegios Trilce');
$mail->addAddress("$email", "$nombre $paterno $materno");
$mail->addBCC('');

$subject = "¡Gracias por registrarte! - Vacaciones Útiles 2024";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

if ($datos_sede == "Arequipa")
{
	require 'sedes/arequipa.php';	
}
elseif($datos_sede == "Callao")
{
	require 'sedes/callao.php';	
}
elseif($datos_sede == "Chanchamayo")
{
	require 'sedes/chanchamayo.php';	
}
elseif($datos_sede == "Chorrillos")
{
	require 'sedes/chorrillos.php';	
}
elseif($datos_sede == "Comas")
{
	require 'sedes/comas.php';	
}
elseif($datos_sede == "Huancayo")
{
	require 'sedes/huancayo.php';	
}
elseif($datos_sede == "Los Olivos")
{
	require 'sedes/los-olivos.php';	
}
elseif($datos_sede == "Maranga")
{
	require 'sedes/maranga.php';	
}
elseif($datos_sede == "Marsano")
{
	require 'sedes/marsano.php';	
}
elseif($datos_sede == "Ñaña")
{
	require 'sedes/nana.php';	
}
elseif($datos_sede == "Pro")
{
	require 'sedes/pro.php';	
}
elseif($datos_sede == "Roma")
{
	require 'sedes/roma.php';	
}
elseif($datos_sede == "Salaverry")
{
	require 'sedes/salaverry.php';	
}
elseif($datos_sede == "San Isidro")
{
	require 'sedes/san-isidro.php';	
}
elseif($datos_sede == "Villa El Salvador")
{
	require 'sedes/villa-el-salvador.php';	
}
elseif($datos_sede == "Villa Maria del Triunfo")
{
	require 'sedes/villa-maria.php';	
} 
if (!$mail->send()) 
{
	echo 'Mailer Error: '. $mail->ErrorInfo;
}
else 
{
	//echo 'Message sent!';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vacaciones Útiles 2024 - Colegio Trilce</title>
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
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '2254483704668747');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=2254483704668747&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5HQRN8J');</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HQRN8J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<section class="section2 fondo_primeros_puestos pad0">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="ml80 fondo_registro_2021 hailitar_header">
					<div class="row">
						<div class="col-lg-6 col-xs-6 contenedor_mobile_logo">
							<img src="images/colegio/logo-trilce.svg" alt="Logo Colegio">
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
                <div class="col-lg-6 fondo_colegio full_height_2">
                </div>
                <div class="col-lg-6 pt-4 fondo_registro_2021 full_height_2">
                    <div class="ml80">
                        <div class="row">
							<div class="col-lg-6 hailitar_mobile">
								<img src="images/colegio/logo-trilce.svg" alt="Logo Colegio">
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
						<img src="images/registrate.svg" alt="Trilce Colegio" class="logo_charlas">
                    </div>
                    <div class="ml80" style="padding-left: 10px;">
						<p class="contenedor_descripcion_colegio">Elige la sede de tu interés y te enviaremos toda la información de nuestros cursos y talleres.</p>
						<div class="gracias_contenedor">
                            <h2 class="gracias_titulo">¡Gracias por tu interés!</h2>
                            <p class="gracias_descripcion">Hemos enviado un mail con la información de nuestros cursos y talleres al correo que has registrado.</p>
                            <button type="submit" style="border: 2px solid #FF7738 !important; width:80%" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="location.href='index.php';"><b style="font-family: NSB !important">Aceptar</b></button>
							<button type="submit" style="border: 2px solid #FF7738 !important; width:80%" class="btn btn-primary btn-block texto_solicita vista_home_boton2" onclick="location.href='index.php';"><b style="font-family: NSB !important; background-color: #FF6334 !important; color: #fff !important ">Aceptar</b></button>
                        </div>
						<a href="https://www.trilce.edu.pe/l/info-vac-utiles-2024" class="btn btn-primary btn-block texto_solicita vista_home_boton1 tamanio_btn" style="background-color: #0DBA42 !important; border: 1px solid #0DBA42 !important; margin: 30px 0px 0px 0px;"  target="_blanck">¡Matricúlate por WhatsApp!</a>
						<a href="https://www.trilce.edu.pe/l/info-vac-utiles-2024" class="btn btn-primary btn-block texto_solicita vista_home_boton2 tamanio_btn" style="color: #fff !important; background-color: #0DBA42 !important; border: 1px solid #0DBA42 !important; margin-top: 20px"  target="_blanck">¡Matricúlate por WhatsApp!</a>
						<p class="pie_2">© 2023 Trilce. Todos los derechos reservados.</p>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <script>
      $('a').click(function()
      {
          $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 500);
          return false;
      });
    </script>
    <script>
        $(document).ready(function(){
           // Add minus icon for collapse element which is open by default
           $(".collapse.show").each(function(){
             $(this).prev(".card-header").find(".fa").addClass("la-angle-up").removeClass("la-angle-down");
           });
           
           // Toggle plus minus icon on show hide of collapse element
           $(".collapse").on('show.bs.collapse', function(){
             $(this).prev(".card-header").find(".fa").removeClass("la-angle-down").addClass("la-angle-up");
           }).on('hide.bs.collapse', function(){
             $(this).prev(".card-header").find(".fa").removeClass("la-angle-up").addClass("la-angle-down");
           });
       });
    </script>

</body>

</html>