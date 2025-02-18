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
    case "Breña":
        $datos_sede = "Breña";
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
elseif($datos_sede == "Breña")
{
	require 'sedes/brena.php';	
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
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="Vacaciones Útiles 2024 - Colegio Trilce">
    <meta name="keywords"       content="Vacaciones Útiles 2024 - Colegio Trilce">
    <meta name="author"         content="Trilce">
    <!-- Site title -->
    <title>Vacaciones Útiles 2024 - Colegio Trilce</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Bootstrap css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--Linear Icons css -->
    <link href="assets/css/linearicons.css" rel="stylesheet">
    <!-- Normalizer css -->
    <link href="assets/css/normalize.css" rel="stylesheet">
    <!-- Magnific popup css -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Site css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2254483704668747&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5HQRN8J');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HQRN8J" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="menu-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="https://www.trilce.edu.pe/colegio">
                                    <img src="assets/img/logo-trilce.svg" alt="Trilce Colegio">
                                </a>
                                <nav class="nav_mobile vista_home_boton2">
                                    <ul class="nav navbar-nav navbar-right">
                                        <a href="https://www.trilce.edu.pe/colegio">
                                            <img src="assets/img/home.svg" alt="Trilce - Colegio" class="icono_colegio">
                                        </a>
                                        <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
                                            <img src="assets/img/whatsapp.svg" alt="Trilce - Colegio" class="icono_colegio">
                                        </a>
                                        <a href="tel:016198100">
                                            <img src="assets/img/telefono.svg" alt="Trilce - Colegio" class="icono_colegio">
                                        </a>
                                        <br>
                                        <span class="texto_telefono">6198 100</span>
                                    </ul>
                                </nav> 
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <a href="https://www.trilce.edu.pe/colegio">
                                            <img src="assets/img/home.svg" alt="Trilce - Colegio" class="icono_colegio">
                                        </a>
                                        <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
                                            <img src="assets/img/whatsapp.svg" alt="Trilce - Colegio" class="icono_colegio">
                                        </a>
                                        <a href="tel:016198100">
                                            <img src="assets/img/telefono.svg" alt="Trilce - Colegio" class="icono_colegio">
                                        </a>
                                        <br>
							            <span class="texto_telefono">6198 100</span>
                                    </ul>                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="slider" class="slider-bg">
        <div class="container">
            <div class="row div_flex">
                <div class="col-md-6 col-md-push-6 col-sm-6 intro-img section_form first">
                    <div class="div_form">
                        <div class="ml80">
							<div class="gracias_contenedor ">
								<h2 class="gracias_titulo">¡Gracias por registrarte!</h2>
								<p class="gracias_descripcion">En breve nos contactaremos contigo.</p>
								<button type="submit" style="width:80%" class="btn btn-primary btn-block texto_solicita vista_home_boton1 btn_gracias_aceptar" onclick="location.href='index.html';"><b style="">Aceptar</b></button>
								<button type="submit" style="width: 172px" class="btn btn-primary btn-block texto_solicita vista_home_boton2" onclick="location.href='index.html';"><b style="font-family: NSB !important; background-color: #FF6334 !important; color: #fff !important; font-size: 16px">Aceptar</b></button>
								<a href="https://www.trilce.edu.pe/l/info-vac-utiles-2024" class="btn btn-primary btn-block texto_solicita vista_home_boton1 tamanio_btn btn_gracias_aceptar" style="background-color: #0DBA42 !important; border: 1px solid #0DBA42 !important;"  target="_blanck">¡Matricúlate aquí!</a>
								<a href="https://www.trilce.edu.pe/l/info-vac-utiles-2024" class="btn btn-primary btn-block texto_solicita vista_home_boton2 tamanio_btn" style="color: #fff !important; background-color: #0DBA42 !important; border: 1px solid #0DBA42 !important; margin-top: 10px; width: 172px !important; font-size: 16px"  target="_blanck">¡Matricúlate aquí!</a>
                                <button type="submit" style="width:148px; height: 28px; padding: 0px !important;" class="btn btn-primary btn-block texto_solicita vista_home_boton3 btn_gracias_aceptar" onclick="location.href='index.html';"><b style="font-size: 15px">Aceptar</b></button>
                                <a href="https://www.trilce.edu.pe/l/info-vac-utiles-2024" class="btn btn-primary btn-block texto_solicita vista_home_boton3 tamanio_btn" style="color: #fff !important; background-color: #0DBA42 !important; border: 1px solid #0DBA42 !important; width: 148px !important; font-size: 15px; height: 28px; padding: 3px 0px 0px 0px !important;"  target="_blanck">¡Matricúlate aquí!</a>
							</div>
							
						</div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 col-sm-6 second">
                    <img src="assets/img/logo-vacaciones.png" class="vista_home_boton1" alt="Trilce - Colegio">
                    <img src="assets/img/logo-vacaciones-mobile.png" class="vista_home_boton2" alt="Trilce - Colegio">
                    <img src="assets/img/logo-vacaciones-tablet.png" class="vista_home_boton3" alt="Trilce - Colegio">
                </div>
            </div>
        </div>
    </section>

    <section class="hero-boxes section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="texto_02">Descarga la información de nuestros cursos y talleres</h2>

                        <h1 class="sub_texto_02 mt_01">SEDES LIMA:</h1>
                        <div class="div_descarga">
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-brena" target="_blank" class="btn_enlace">Breña</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-callao" target="_blank" class="btn_enlace">Callao</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-chorrillos" target="_blank" class="btn_enlace">Chorrillos</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-comas" target="_blank" class="btn_enlace">Comas</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-los-olivos" target="_blank" class="btn_enlace">Los Olivos</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-maranga" target="_blank" class="btn_enlace">Maranga</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-marsano" target="_blank" class="btn_enlace">Marsano</a>
                            <p class="espacio">&nbsp;</p>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-nana" target="_blank" class="btn_enlace">Ñaña</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-pro" target="_blank" class="btn_enlace">Pro</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-roma" target="_blank" class="btn_enlace">Roma</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-salaverry" target="_blank" class="btn_enlace">Salaverry</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-san-isidro" target="_blank" class="btn_enlace">San Isidro</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-villa-el-salvador" target="_blank" class="btn_enlace">Villa El Salvador</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-villa-maria" target="_blank" class="btn_enlace">Villa Maria</a>
                        </div>
                        
                        <h1 class="sub_texto_02 mt_01">SEDES PROVINCIA:</h1>
                        <div class="div_descarga_2">
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-arequipa" target="_blank" class="btn_enlace">Arequipa</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-chanchamayo" target="_blank" class="btn_enlace">Chanchamayo</a>
                            <a href="https://www.trilce.edu.pe/l/brochure-vu-2024-huancayo" target="_blank" class="btn_enlace">Huancayo</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="testimonial-area">
        <div class="container-fluid">    
            <div class="row">
                <div class="col-md-6 col-sm-6 seccion_trilce_01">
                    <h1 class="texto_color texto_h1">¡Potencia tus habilidades en nuestro ciclo de <span class="texto_b_h1">Vacaciones Útiles!</span></h1>
                    <p class="texto_color parrafo_01">Haremos que tu aprendizaje sea sencillo y divertido, a través de nuestras clases y actividades lúdicas.</p>
                </div>
                <div class="col-md-6 col-sm-6 bg_01">
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="testimonial-area fondo_footer">
        <div class="container">    
            <div class="row">
                <div class="col-md-3 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-5 div_04">
                    <h3 class="texto_03">¡Matricúlate por WhatsApp!</h3>
                    <p class="parrafo_03">Un asesor se contactará contigo.</p>
                    <a href="https://www.trilce.edu.pe/l/info-vac-utiles-2024" target="_blank" class="btn_whatsapp">¡Clic aquí!</a>
                </div>
                <div class="col-md-2 col-sm-2 text_center">
                    <img src="assets/img/banner-whatsapp.png" alt="Trilce - Colegio" class="imagen_04"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area fondo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p class="texto_04">&copy; 2023 Trilce. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Latest jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Owl Carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Mixitup js -->
    <script src="assets/js/jquery.mixitup.js"></script>

    <!-- Magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Waypoint js -->
    <script src="assets/js/jquery.waypoints.min.js"></script>

    <!-- Ajax Mailchimp js -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Main js-->
    <script src="assets/js/main_script.js"></script>

</body>

</html>