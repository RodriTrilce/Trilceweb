<?php

/* CONEXION DB */
$servername = "localhost";
$username   = "root";
$password   = "cYPS-m=gXoZVE6HkH0{6";
$dbname     = "web_colegio_2021";

/* PARAMETROS DE WS */
$ORIGEN_INFO 			= "FRWEB";
$TIPO_SERVICIO 			= "COLEG";
$SERVICIO 				= "COLVA";



$info_grado = $_POST['grado'];
switch ($_POST['grado']) 
{
	case "Inicial":
		$grado = "00056";
		$valor_grado = 4;
		break;
	case "Primaria - 1er Grado":
		$grado = "00058";
		$valor_grado = 6;
		break;
	case "Primaria - 2do Grado":
		$grado = "00059";
		$valor_grado = 7;
		break;
	case "Primaria - 3ro Grado":
		$grado = "00060";
		$valor_grado = 8;
		break;
	case "Primaria - 4to Grado":
		$grado = "00061";
		$valor_grado = 9;
		break;
	case "Primaria - 5to Grado":
		$grado = "00062";
		$valor_grado = 10;
		break;
	case "Primaria - 6to Grado":
		$grado = "00063";
		$valor_grado = 11;
		break;
	case "Secundaria - 1er Año":
		$grado = "00065";
		$valor_grado = 13;
		break;
	case "Secundaria - 2do Año":
		$grado = "00066";
		$valor_grado = 14;
		break;
	case "Secundaria - 3ro Año":
		$grado = "00067";
		$valor_grado = 15;
		break;
	case "Secundaria - 4to Año":
		$grado = "00068";
		$valor_grado = 16;
		break;
	case "Secundaria - 5to Año":
		$grado = "00071";
		$valor_grado = 19;
		break;
}
$NIVEL_ESTUDIO 			= $grado;

$ANIO_ACADEMICO 		= "2024";

$info_sede = $_POST['sede'];
switch ($_POST['sede']) 
{
	case "Arequipa":
		$sede = "BECOLARP";
		$datos_sede = "Arequipa (provincia)";
		break;
	case "Breña":
		$sede = "BRENACOL";
		$datos_sede = "Breña";
		break;
	case "Callao":
		$sede = "ARCOLCAL";
		$datos_sede = "Callao";
		break;
	case "Chanchamayo":
		$sede = "ARCOLCHA";
		$datos_sede = "Chanchamayo";
		break;
	case "Chiclayo":
		$sede = "00009";
		$datos_sede = "Chiclayo";
		break;
	case "Chorrillos":
		$sede = "ARCOLCHO";
		$datos_sede = "Chorrillos";
		break;
	case "Comas":
		$sede = "ARCOLCOP";
		$datos_sede = "Comas";
		break;
	case "Huancayo":
		$sede = "ARCOLHYO";
		$datos_sede = "Huancayo";
		break;
	case "La Molina":
		$sede = "00014";
		$datos_sede = "La Molina";
		break;
	case "Los Olivos":
		$sede = "ARCOLLOL";
		$datos_sede = "Los Olivos";
		break;
	case "Maranga":
		$sede = "ARCOLMAR";
		$datos_sede = "Maranga";
		break;
	case "Ñaña":
		$sede = "ARCOLNAN";
		$datos_sede = "Ñaña";
		break;
	case "Pro":
		$sede = "ARCOLPRO";
		$datos_sede = "Pro";
		break;
	case "Piura":
		$sede = "00019";
		$datos_sede = "Piura";
		break;
	case "Roma":
		$sede = "ARCOLROM";
		$datos_sede = "Roma";
		break;
	case "Salamanca":
		$sede = "00019";
		$datos_sede = "Salamanca";
		break;
	case "Salaverry":
		$sede = "ARCOLSAP";
		$datos_sede = "Salaverry";
		break;
	case "San Isidro":
		$sede = "ISCOLSIS";
		$datos_sede = "San Isidro";
		break;
	case "San Juan de Lurigancho":
		$sede = "00019";
		$datos_sede = "San Juan de Lurigancho";
		break;
	case "Santa Anita":
		$sede = "00019";
		$datos_sede = "Santa Anita";
		break;
	case "Marsano":
		$sede = "BECOLMAR";
		$datos_sede = "Marsano";
		break;
	#case "Surco":
	#	$sede = "BECOLCIN";
	#	$datos_sede = "Surco";
	#	break;
	case "Villa El Salvador":
		$sede = "BECOLVES";
		$datos_sede = "Villa El Salvador";
		break;
	case "Villa Maria del Triunfo":
		$sede = "BECOLVMP";
		$datos_sede = "Villa Maria del Triunfo";
		break;
	case "Trujillo":
		$sede = "00019";
		$datos_sede = "Trujillo";
		break;
}
$BLDG_TBL 				= $sede;

$TIPO_DOCUMENTO 	= "01";
$NRO_DOCUMENTO 		= $_POST['dni'];
$NOMBRES 			= $_POST['nombres'];
$APELLIDO_PATERNO	= $_POST['apellido_paterno'];
$APELLIDO_MATERNO 	= $_POST['apellido_materno'];
$SEXO				= "";
$CORREO_E 			= $_POST['email'];
$NRO_TELEFONO 		= $_POST['telefono'];

/* INICIO - LOG DE DE RESPALDO DE INFORMACIÓN 240921 */
	date_default_timezone_set('America/Lima');
	$fecha 		= date("d/m/Y h:i:s");
	$myfile 	= fopen("logs.txt", "a") or die("Unable to open file!");
	$txt 		= "$NOMBRES; $APELLIDO_PATERNO; $APELLIDO_MATERNO; $NRO_DOCUMENTO; $CORREO_E; $NRO_TELEFONO; $info_sede; $info_grado; $fecha";
	fwrite($myfile, "\n". $txt);
	fclose($myfile);
/* FIN */

/* MANDAR PHPMAILER */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'informes@trilce.edu.pe';
$mail->Password = 'qjjggnabgemcvkrn';
$mail->setFrom('informes@trilce.edu.pe', 'Colegio Trilce');
$mail->addAddress("$CORREO_E", "$NOMBRES $APELLIDO_PATERNO $APELLIDO_MATERNO");
$mail->addBCC('');
$subject = "¡Gracias por registrarte! Vacaciones Útiles 2025";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

$mail->Body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><html><title></title><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><div style='Margin:0;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important'><span style='color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;overflow:hidden'></span><table style='Margin:0;background:#eee!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><td align='center' valign='top' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><center style='min-width:580px;width:100%'><table align='center' style='Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td height='16px' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'> </td></tr></tbody></table><table style='border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><center style='min-width:532px;width:100%'>


<a href='https://www.trilce.edu.pe/l/whatsapp-matricula-2024'>
<!-- AQUI EN SRC PONER LA IMAGEN --> <img src='https://www.trilce.edu.pe/storage/static/upload/7907bf30-0bc9-11ee-9dbe-bb367ddf8930.png' align='center' class='float-center' style='-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center> </th> <th class='expander' style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0'></th> </tr> <tr style='padding:0;text-align:left;vertical-align:top'> <th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'> <center data-parsed='' style='min-width:532px;width:100%'>



<a href='https://www.trilce.edu.pe/colegio'>
<img src='https://www.trilce.edu.pe/storage/static/upload/78e58300-0bc9-11ee-99df-d5228998d100.png' style='Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p align='center' style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:700;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-top:35px;text-align:center'>SIGAMOS CONECTADOS</p><table align='center' style='border-collapse:collapse;border-spacing:0;padding:0;text-align:right;vertical-align:top;width:auto!important'><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:0!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.facebook.com/ColegioTrilce/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/ZK5RGSx/image.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.instagram.com/trilcecolegio/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/pKqXWF0/image-1.png' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://twitter.com/TRILCEtweet' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/yRXwdCR/image-2.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.trilce.edu.pe/l/whatsapp-colegio' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/hYbpWVr/image-3.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/sjqBHVt/image-4.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th></tr></table></td></tr></table></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>&copy; Trilce 2023. Todos los derechos reservados.<br>Tel&eacute;fono: 6198 100</p></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></center></td></tr></table><div style='display:none;white-space:nowrap;font:15px courier;line-height:0'>
";


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
elseif($datos_sede == "Chiclayo")
{
	require 'sedes/chiclayo.php';	
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
elseif($datos_sede == "La Molina")
{
	require 'sedes/la-molina.php';	
}
elseif($datos_sede == "Los Olivos")
{
	require 'sedes/los-olivos.php';	
}
elseif($datos_sede == "Maranga")
{
	require 'sedes/maranga.php';	
}
elseif($datos_sede == "Pro")
{
	require 'sedes/pro.php';	
}
elseif($datos_sede == "Piura")
{
	require 'sedes/piura.php';	
}
elseif($datos_sede == "Roma")
{
	require 'sedes/roma.php';	
}
elseif($datos_sede == "Salamanca")
{
	require 'sedes/salamanca.php';	
}
elseif($datos_sede == "Salaverry")
{
	require 'sedes/salaverry.php';	
}
elseif($datos_sede == "San Isidro")
{
	require 'sedes/san-isidro.php';	
}
elseif($datos_sede == "San Juan de Lurigancho")
{
	require 'sedes/san-juan-de-lurigancho.php';	
}
elseif($datos_sede == "Santa Anita")
{
	require 'sedes/santa-anita.php';	
}
elseif($datos_sede == "Marsano")
{
	require 'sedes/marsano.php';	
}
elseif($datos_sede == "Ñaña")
{
	require 'sedes/nana.php';	
}
elseif($datos_sede == "Villa El Salvador")
{
	require 'sedes/villa-el-salvador.php';	
}
elseif($datos_sede == "Villa Maria del Triunfo")
{
	require 'sedes/villa-maria.php';	
}
elseif($datos_sede == "Trujillo")
{
	require 'sedes/trujillo.php';	
}

$mail->IsHTML(true);
if (!$mail->send()) 
{
   	echo 'Mailer Error: '. $mail->ErrorInfo;
} 
else 
{
   	//echo 'Message sent!';
}


if($datos_sede=="La Molina" || $datos_sede=="Chiclayo" || $datos_sede=="Piura" || $datos_sede=="Salamanca" || $datos_sede=="San Juan de Lurigancho" || $datos_sede=="Santa Anita" || $datos_sede=="Trujillo")
{
	/* INSERTAR DB SEDES QUE NO ESTAN EN SAT */
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
	$dni              	= $_POST['dni'];
	$email              = $_POST['email'];
	$telefono           = $_POST['telefono'];
	$sede               = $_POST['sede'];
	$grado              = $_POST['grado'];

	$sql = "INSERT INTO lista_espera (nombres_apellidos, nombres, apellido_paterno, apellido_materno, dni, email, telefono, sede, grado, fecha_registro) 
	VALUES ('$nombres_apellidos', '$nombres', '$apellido_paterno', '$apellido_materno', '$dni', '$email', '$telefono','$sede','$grado',now())";

	if ($conn->query($sql) === TRUE)
	{
		//echo "New record created successfully";
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
else
{
	if($datos_sede=="Chorrillos" && $valor_grado >= 15)
	{
		$sede					= "ARCOLCH2";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Chorrillos" && $valor_grado <15)
	{
		$sede					= "ARCOLCHO";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Comas" && $valor_grado >=13)
	{
		$sede					= "ARCOLCOS";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Comas" && $valor_grado <12)
	{
		$sede					= "ARCOLCOP";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Salaverry" && $valor_grado >=13)
	{
		$sede					= "ARCOLSAS";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Salaverry" && $valor_grado <12)
	{
		$sede					= "ARCOLSAP";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Arequipa (provincia)" && $valor_grado >= 15)
	{
		$sede					= "BECOLARS";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Arequipa (provincia)" && $valor_grado <15)
	{
		$sede					= "BECOLARP";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Villa Maria del Triunfo" && $valor_grado >=13)
	{
		$sede					= "BECOLVMS";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Villa Maria del Triunfo" && $valor_grado <12)
	{
		$sede					= "BECOLVMP";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Marsano" && $valor_grado >=13)
	{
		$sede					= "BECOLMAR";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	elseif($datos_sede=="Marsano" && $valor_grado <12)
	{
		$sede					= "BECOLMAR";
		$BLDG_TBL 				= $sede;
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}
	else
	{
		/* WS SAT - INSERTAR SEDES DISPONIBLES */
		$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/FichaAtencion';
		$data = array("ORIGEN_INFO" => $ORIGEN_INFO,
		"TIPO_SERVICIO" => $TIPO_SERVICIO,
		"SERVICIO" => $SERVICIO,
		"NIVEL_ESTUDIO" => $NIVEL_ESTUDIO,
		"ANIO_ACADEMICO" => $ANIO_ACADEMICO,
		"BLDG_TBL" => $BLDG_TBL,
		"TIPO_DOCUMENTO" => $TIPO_DOCUMENTO,
		"NRO_DOCUMENTO" => $NRO_DOCUMENTO,
		"NOMBRES" => $NOMBRES,
		"PRIMER_APELLIDO" => $APELLIDO_PATERNO,
		"SEGUNDO_APELLIDO" => $APELLIDO_MATERNO,
		"SEXO" => $SEXO,
		"CORREO_E" => $CORREO_E,
		"NRO_TELEFONO" => $NRO_TELEFONO);

		$postdata = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($ch);
		curl_close($ch);
		//print_r ($result);
		$valores = (json_decode($result, true));
		//print_r($valores);
		if($valores['EST_PROCESO']=='1')
		{
			//echo "Se registró al alumno.";
		}
		else
		{
			//print_r($valores['MENSAJE'][0]);
		}
		//print_r (json_decode($result, true));
	}

}

?>
<!doctype html>
<html lang="es">
<head>
<!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5HQRN8J');
  </script>
<!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Vacaciones Útiles 2025 - Trilce Colegios</title>
  <meta name="author" content="Trilce" />
  <meta name="description" content="¡Vacaciones Útiles 2025!" />
  <meta name="keywords" content="trilce, colegios, academias, mejor propuesta, educativa, mejor propuesta educativa, online, cuarentena, Lista de espera 2025, educación a distancia" />
  <meta name="Resource-type" content="Document" />
  <link rel="canonical" href="https://www.trilce.edu.pe/" />
  <meta property="og:title" content="¡Vacaciones Útiles 2025!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.trilce.edu.pe/lista-espera-2025/" />
  <meta property="og:image" content="https://www.trilce.edu.pe/static/images/lista-espera-2025.png" />
  <meta property="og:description" content="Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad." />
  <meta property="og:site_name" content="¡Vacaciones Útiles 2025!" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:titlkmk  e" content="¡Vacaciones Útiles 2025!">
  <meta name="twitter:description" content="Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.">
  <meta name="twitter:creator" content="@trilcetweet">
  <meta name="twitter:image" content="https://www.trilce.edu.pe/static/images/lista-espera-2025.png">
  <meta itemprop="name" content="¡Vacaciones Útiles 2025!">
  <meta itemprop="description" content="Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.">
  <meta itemprop="image" content="https://www.trilce.edu.pe/static/images/lista-espera-2025.png">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/line-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  .button-block {
    display: flex;
    justify-content: center;
  }
  .block-button-1 {
    text-align: center;
    border-radius: 35px;
    color: white;
    font-size: 21px;
    border: none;
    height: 75px;
    width: 330px;
    background-color: #4b9cdb;
    border-color: #bbdcff;
    box-shadow: 0px 0 15px #bbdcff;
  }
  checkbox-label {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .checkbox_form {
    width: 14px;
    height: 14px;
    appearance: none;
    border: 2px solid #FF4E0E;
    border-radius: 4px;
    position: relative;
    cursor: pointer;
  }
  .checkbox_form:checked::after {
    content: '✔';
    font-size: 11px;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: bold;
  }
  .texto_acepta {
    color: #333;
    font-family: 'NSB';
  }
  .check-div-a {
    color: #333;
    text-decoration: underline !important;
    cursor: pointer;
  }

  #menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background-color: #ffffff;
    transition: background-color 0.3s ease-in-out;
    box-shadow: none; 
  }

  #menu.sticky {
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  #var_inicio.color_inicio {
    color: #000000 !important;
  }
  </style>
  <link rel="stylesheet" href="css/mdb.css">
  <script>    
    window.addEventListener('scroll', function() 
    {
      var menu = document.getElementById('menu');
      var logo = document.querySelector('.web');
      var inicio = document.getElementById('var_inicio');
    
      if (window.scrollY > 1) {
        menu.classList.add('sticky');
        inicio.classList.add('color_inicio');
        logo.src = 'img/logo-trilce-45-c-desktop.svg';
      } 
      else {
        menu.classList.remove('sticky');
        inicio.classList.remove('color_inicio');
        logo.src = 'img/logo-trilce-45-desktop.svg';
      }
    });
  </script>
</head>
<body>
<div id="menu">
    <nav class="navbar navbar-expand-lg navbar-light container default-navbar">
      <a class="navbar-brand" href="https://www.trilce.edu.pe/colegio" target="_blank">
        <img src="img/logo-trilce-45-desktop.svg" alt="Vacaciones Útiles 2025" width="100%" height="58" class="web" />
        <img src="img/logo-45-tablet.svg" alt="Vacaciones Útiles 2025" width="100%" height="58" class="tablet" />
        <img src="img/logo-45-mobile.svg" alt="Vacaciones Útiles 2025" width="100%" height="48" class="movil" />
      </a>
      <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
        <li class="nav-item">
          <a class="nav-link" href="https://www.trilce.edu.pe/colegio" target="_blank">
            <i class="las la-home 32px h3" style="font-size: 2.5rem !important; color: #000000;"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.trilce.edu.pe/l/info-vac-utiles-2025" target="_blank">
            <i class="lab la-whatsapp -wp 32px h3 icono_banner" style="font-size: 2.5rem !important; color: #0DBC42 !important;"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tel:016198100">
            <i class="las la-phone 32px h3 icono_banner" style="font-size: 2.5rem !important; color: #000000;"></i>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText" style="display: none;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav_d1">
            <div class="div_menu1">
              <a class="nav-link a1" target="_blank" href="https://www.trilce.edu.pe/l/info-vac-utiles-2025" style="font-family: 'GeogrotesqueSemibold' !important;">
                <i class="lab la-whatsapp text-light-wp h3 menu_icono"></i> 922 33 6565
              </a>
            </div>
          </li>
          <li class="nav-item nav_d2">
            <div class="div_menu2">
              <a class="nav-link a1" target="_blank" href="tel:016198100" style="font-family: 'GeogrotesqueSemibold' !important;">
                <i class="las la-phone text-light h3 menu_icono"></i> 6198 100
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <section class="stage1">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 d-flex align-items-center flex-column">
        </div>
        <div class="col-sm-12 col-md-6 d-flex section_form css_gracias">
          <div class="div_form_gracias" id="formulario">
            <h3 class="titulo_form_gracias">¡Gracias por registrarse!</h3>
            <p class="subtitulo_form">En breve nos contactaremos contigo.<br>
            </p>
            <form class="registration-form w_form " action="index.html" method="post">
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block vista_home_boton1 tamanio_btn" style="background-color: #FF5023 !important;border: 1px solid #FF5023 !important; border-radius: 4px; width: 260px; margin: 0 auto; font-size: 20px;    font-family: Geogrotesque-Sb !important; margin-bottom: 8px">Aceptar</button>

                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank" type="submit" class="btn btn-primary btn-block vista_home_boton1 tamanio_btn" style="background-color: #0DBC42 !important; border: 1px solid #0DBC42 !important; border-radius: 4px; width: 260px; height: 42px; margin: 0 auto; font-size: 20px; font-family: Geogrotesque-Sb !important; display: flex !important; align-items: center; justify-content: center;"><i class="lab la-whatsapp text-light-wp h3" style="font-size: 30px; margin-right: 5px; margin-top: 8px;"></i> ¡Matricúlate aquí!</a>
                  
                <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton2 btn_aceptar" style=" background-color: #FF6334 !important; border: 1px solid #FF5023 !important; color: #fff !important; padding-top: 4px; font-size: 16px;font-family: 'Geogrotesque-Sb';">Aceptar</button>

                <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton3 btn_aceptar" style=" background-color: #FF6334 !important; border: 1px solid #FF5023 !important; color: #fff !important; padding-top: 4px; width: 210px; font-size: 14px; line-height: 20px; height: 27px; padding-top: 2.5px;">Aceptar</button>  
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 movil">
        </div>
      </div>
    </div>
  </section>
  
  <!-- Seccion 01 Web -->
  <section id="propuesta-educativa" class="stage1-1 d-flex align-items-center web">
    <div class="container">
      <div class="row pad_top">
        <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
			<article style="text-align: center;">
            	<h1 class="display-4 titulo_h1 animated fadeInDown delay-1s">Descarga la información de nuestros cursos y talleres</h1>
            	<p class="text-justify black_text animated fadeInDown delay-2s subpe">SEDES LIMA:</p>
            	<div class="button-row-1">
              		<button onclick="downloadBrena()">Breña</button>
              		<button onclick="downloadCallao()">Callao</button>
              		<button onclick="downloadChorrillos()">Chorrillos</button>
              		<button onclick="downloadComas()">Comas</button>
			  		<button onclick="downloadLaMolina()">La Molina</button>
              		<button onclick="downloadLosOlivos()">Los Olivos</button>
              		<button onclick="downloadMaranga()">Maranga</button>
            	</div>
            	<div class="button-row-2">
			  		<button onclick="downloadMarsano()">Marsano</button>
              		<button onclick="downloadNana()">Ñaña</button>
              		<button onclick="downloadPro()">Pro</button>
              		<button onclick="downloadRoma()">Roma</button>
			  		<button onclick="downloadSalamanca()">Salamanca</button>
              		<button onclick="downloadSalaverry()">Salaverry</button>
			  	<button onclick="downloadSanIsidro()">San Isidro</button>
            	</div>
				<div class="button-row-2">
			  		<button onclick="downloadSantaAnita()">Santa Anita</button>
              		<button onclick="downloadVillaElSalvador()">Villa El Salvador</button>
              		<button onclick="downloadVillaMaria()">Villa María</button>
            	</div>
            	<p class="text-justify black_text animated fadeInDown delay-2s subpe">SEDES PROVINCIA:</p>
            	<div class="button-row-3">
              		<button onclick="downloadArequipa()">Arequipa</button>
              		<button onclick="downloadChanchamayo()">Chanchamayo</button>
			  		<button onclick="downloadChiclayo()">Chiclayo</button>
              		<button onclick="downloadHuancayo()">Huancayo</button>
			  		<button onclick="downloadPiura()">Piura</button>
			  		<button onclick="downloadTrujilloP()">Trujillo Primavera</button>
			  		<button onclick="downloadTrujilloS()">Trujillo Santa María</button>
            	</div>
          	</article>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 01 Mobile -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex movil">
    <div class="row stage1-1 fondo_gris">
      <div class="container">
        <div class="row">
          	<div class="col-sm-12 col-md-12">
			  	<article style="text-align: center;">
              		<h1 class="display-4 titulo_h1_m animated fadeInDown delay-1s">Descarga la información de<br> nuestros cursos y talleres</h1>
              		<p class="text-center black_text py-2 animated fadeInDown delay-2s texto_sedes">SEDES LIMA:</p>
              		<div class="button-row-1">
                		<button onclick="downloadBrena()">Breña</button>
                		<button onclick="downloadCallao()">Callao</button>
              		</div>
              		<div class="button-row-1">
                		<button onclick="downloadChorrillos()">Chorrillos</button>
                		<button onclick="downloadComas()">Comas</button>
              		</div>
              		<div class="button-row-1">
			    		<button onclick="downloadLaMolina()">La Molina</button>
                		<button onclick="downloadLosOlivos()">Los Olivos</button>
              		</div>
              		<div class="button-row-1">
			    		<button onclick="downloadMaranga()">Maranga</button>
                		<button onclick="downloadMarsano()">Marsano</button>
              		</div>
              		<div class="button-row-2">
                		<button onclick="downloadNana()">Ñaña</button>
                		<button onclick="downloadPro()">Pro</button>
              		</div>
              		<div class="button-row-2">
                		<button onclick="downloadRoma()">Roma</button>
						<button onclick="downloadSalamanca()">Salamanca</button>
              		</div>
              		<div class="button-row-2">
			    		<button onclick="downloadSalaverry()">Salaverry</button>
                		<button onclick="downloadSanIsidro()">San Isidro</button>
              		</div>
			  		<div class="button-row-2">
						<button onclick="downloadSantaAnita()">Santa Anita</button>
                		<button onclick="downloadVillaElSalvador()">Villa El Salvador</button>
              		</div>
              		<div class="button-row-2">
                		<button onclick="downloadVillaMaria()">Villa María</button>
              		</div>
              		<p class="text-center black_text py-2 animated fadeInDown delay-2s texto_sedes">SEDES PROVINCIA:</p>
              		<div class="button-row-3">
                		<button onclick="downloadArequipa()">Arequipa</button>
                		<button onclick="downloadChanchamayo()">Chanchamayo</button>
              		</div>
              		<div class="button-row-3">
			    		<button onclick="downloadChiclayo()">Chiclayo</button>
                		<button onclick="downloadHuancayo()">Huancayo</button>
              		</div>
			  		<div class="button-row-3">
			    		<button onclick="downloadPiura()">Piura</button>
                		<button onclick="downloadTrujilloP()">Trujillo Primavera</button>
              		</div>
			  		<div class="button-row-3">
                		<button onclick="downloadTrujilloS()">Trujillo Santa María</button>
              		</div>
            	</article>
          	</div>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 01 Tablet -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex tablet">
    <div class="row stage1-1 fondo_gris">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
		  	<article style="text-align: center;">
        		<h1 class="display-4 titulo_h1_m animated fadeInDown delay-1s">Descarga la información de<br> nuestros cursos y talleres</h1>
              	<p class="text-center py-2 animated fadeInDown delay-2s texto_sedes">SEDES LIMA:</p>
              	<div class="button-row-1">
                	<button onclick="downloadBrena()">Breña</button>
                	<button onclick="downloadCallao()">Callao</button>
                	<button onclick="downloadChorrillos()">Chorrillos</button>
                	<button onclick="downloadComas()">Comas</button>
              	</div>
              	<div class="button-row-1">
			    	<button onclick="downloadLaMolina()">La Molina</button>
                	<button onclick="downloadLosOlivos()">Los Olivos</button>
                	<button onclick="downloadMaranga()">Maranga</button>
                	<button onclick="downloadMarsano()">Marsano</button>
              	</div>
              	<div class="button-row-2">
                	<button onclick="downloadNana()">Ñaña</button>
                	<button onclick="downloadPro()">Pro</button>
                	<button onclick="downloadRoma()">Roma</button>
					<button onclick="downloadSalamanca()">Salamanca</button>
              	</div>
              	<div class="button-row-2">
			    	<button onclick="downloadSalaverry()">Salaverry</button>
                	<button onclick="downloadSanIsidro()">San Isidro</button>
					<button onclick="downloadSantaAnita()">Santa Anita</button>
                	<button onclick="downloadVillaElSalvador()">Villa El Salvador</button>
                	<button onclick="downloadVillaMaria()">Villa María</button>
              	</div>
             	<p class="text-center py-2 animated fadeInDown delay-2s texto_sedes">SEDES PROVINCIA:</p>
              	<div class="button-row-3">
                	<button onclick="downloadArequipa()">Arequipa</button>
                	<button onclick="downloadChanchamayo()">Chanchamayo</button>
					<button onclick="downloadChiclayo()">Chiclayo</button>
                	<button onclick="downloadHuancayo()">Huancayo</button>
					<button onclick="downloadPiura()">Piura</button>
					<button onclick="downloadTrujilloP()">Trujillo Primavera</button>
					<button onclick="downloadTrujilloS()">Trujillo Santa María</button>
              	</div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion 03 Web -->
  <section id="propuesta-educativa" class=" d-flex align-items-center web bg_color">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <article>
          <h1 class="display-4 titulo_h2 animated fadeInDown delay-1s"><b class="titulo_h2_b">¡Potencia tus habilidades</b><br>
            en nuestro ciclo de<br>
            Vacaciones Útiles!</h1>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subtitulo_h2">Haremos que tu aprendizaje sea sencillo y divertido, a<br> través de nuestras clases y actividades lúdicas.</p>
          <a href="https://www.trilce.edu.pe/l/info-vac-utiles-2025" target="_blank" type="submit" class="btn btn-primary btn-block tamanio_btn b4g ver_ca_1" style="margin-bottom: 60px"><i class="lab la-whatsapp text-light-wp-b4g h3 b4g_icono"></i> ¡Matricúlate aquí!</a>
        </article>
      </div>
      <div class="col-sm-6 col-md-6" style="background-image: url(img/vacaciones-utiles.png); background-repeat: no-repeat; background-position: center; background-size: cover;">
      </div>
    </div>
  </section>
  <!-- Seccion 03 Mobile -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex movil bg_color">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <article>
          <h1 class="display-4 titulo_h2 animated fadeInDown delay-1s"><b class="titulo_h2_b">¡Potencia tus habilidades</b><br>
            en nuestro ciclo de<br>
            Vacaciones Útiles!</h1>
          <p class="text-justify animated fadeInDown delay-2s subtitulo_h2">Haremos que tu aprendizaje sea sencillo y divertido, a<br> través de nuestras clases y actividades lúdicas.</p>
          <a href="https://www.trilce.edu.pe/l/info-vac-utiles-2025" target="_blank" type="submit" class="btn btn-primary btn-block b4g"><i class="lab la-whatsapp text-light-wp-b4g h3 b4g_icono"></i> ¡Matricúlate aquí!</a>
        </article>
      </div>
      <div class="col-sm-6 col-md-6">
        <img src="img/vacaciones-utiles.png" alt="Vacaciones Útiles 2025" />
      </div>
    </div>
  </section>
  <!-- Seccion 03 Tablet -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex tablet bg_color">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <article>
          <h1 class="display-4 titulo_h2 animated fadeInDown delay-1s"><b class="titulo_h2_b">¡Potencia tus habilidades</b><br>
            en nuestro ciclo de<br>
            Vacaciones Útiles!</h1>
          <p class="text-justify py-2 animated fadeInDown delay-2s subtitulo_h2">Haremos que tu aprendizaje sea sencillo y divertido, a<br> través de nuestras clases y actividades lúdicas.</p>
          <a href="https://www.trilce.edu.pe/l/info-vac-utiles-2025" target="_blank" type="submit" class="btn btn-primary btn-block b4g"><i class="lab la-whatsapp text-light-wp-b4g h3 b4g_icono"></i> ¡Matricúlate aquí!</a>
        </article>
      </div>
      <div class="col-sm-6 col-md-6">
        <img src="img/vacaciones-utiles-tablet.png" alt="Vacaciones Útiles 2025" />
      </div>
    </div>
  </section>

  <!-- Seccion 04 Web -->
  <section id="propuesta-educativa" class=" d-flex align-items-center web bg_gray">
    <div class="container">
      <div class="row pad_top_b4g">
        <div class="col-sm-3 col-md-3"></div>
        <div class="col-sm-3 col-md-3 d-flex flex-column justify-content-center align-items-center text-center">
          <img src="img/logo-matricula-2025.png" alt="Vacaciones Útiles" />
          <p class="texto_b5g">La mejor propuesta educativa</p>
          <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank" class="btn btn-primary btn-block tamanio_btn b5g ver_ca_1">
            Más información
          </a>
        </div>
        <div class="col-sm-3 col-md-3">
          <img src="img/vacaciones-utiles-footer.png" alt="Vacaciones Útiles" />
        </div>
        <div class="col-sm-3 col-md-3"></div>        
      </div>
    </div>
  </section>
  <!-- Seccion 04 Mobile -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex movil">
    <div class="row stage1-1 fondo_gris">
      <div class="container">
        <div class='row'>
          <div class="col-sm-3 col-md-3"></div>
          <div class="col-sm-3 col-md-3 d-flex flex-column justify-content-center align-items-center text-center">
            <img src="img/logo-matricula-2025.png" alt="Vacaciones Útiles" style="width: 138px !important; margin: 50px 0px 0px 0px;" />
            <p class="texto_b5g">La mejor propuesta educativa</p>
            <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank" class="btn btn-primary btn-block tamanio_btn b5g">
              Más información
            </a>
          </div>
          <div class="col-sm-3 col-md-3">
            <img src="img/vacaciones-utiles-footer.png" alt="Vacaciones Útiles" />
          </div>
          <div class="col-sm-3 col-md-3"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 04 Tablet -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex tablet">
    <div class="container">
      <div class="row pad_top_b4g">
        <div class="col-sm-3 col-md-2"></div>
        <div class="col-sm-3 col-md-4 d-flex flex-column justify-content-center align-items-center text-center">
          <img src="img/logo-matricula-2025.png" alt="Vacaciones Útiles" style="width: 138px !important;" />
          <p class="texto_b5g">La mejor propuesta educativa</p>
          <a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank" class="btn btn-primary btn-block tamanio_btn b5g">
            Más información
          </a>
        </div>
        <div class="col-sm-3 col-md-4">
          <img src="img/vacaciones-utiles-footer.png" alt="Vacaciones Útiles" style="width: 305px !important;" />
        </div>
        <div class="col-sm-3 col-md-2"></div>        
      </div>
    </div>
  </section>
  
  <!-- Seccion 08 Web -->
  <section class="stage1-14 web fondo_blanco" style="background-image: none;">
    <div class="container">
        <div class="col-sm-12 col-md-12 d-flex flex-column align-items-center" style="height: 106px; justify-content: center;">
          <p class="titulo_footer">© 2024 Colegio Trilce. Todos los derechos reservados.</p>
        </div>
    </div>
  </section>
  <!-- Seccion 08 Mobile -->
  <section class="stage1-14 movil fondo_blanco" style="background-image: none;">
    <div class="container">
        <div class="col-sm-12 col-md-12 d-flex flex-column align-items-center" style="height: 60px; justify-content: center;">
          <p class="titulo_footer">© 2024 Colegio Trilce. Todos los derechos reservados.</p>
        </div>
    </div>
  </section>
  <!-- Seccion 08 Tablet -->
  <section class="stage1-14 tablet fondo_blanco" style="background-image: none; padding: 0px !important ;">
    <div class="container">
        <div class="col-sm-12 col-md-12 d-flex flex-column align-items-center" style="height: 84px; justify-content: center;">
          <p class="titulo_footer">© 2024 Colegio Trilce. Todos los derechos reservados.</p>
        </div>
    </div>
  </section>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script>
  function downloadBrena() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-brena';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadCallao() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-callao';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadChorrillos() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-chorrillos';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadComas() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-comas';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadLaMolina() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-la-molina';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadLosOlivos() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-los-olivos';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadMaranga() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-maranga';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadMarsano() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-marsano';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadNana() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-nana';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadPro() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-pro';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadRoma() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-roma';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadSalamanca() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-salamanca';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadSalaverry() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-salaverry';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadSanIsidro() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-san-isidro';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadSantaAnita() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-santa-anita';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadVillaElSalvador() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-villa-el-salvador';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadVillaMaria() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-villa-maria';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadArequipa() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-arequipa';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadChanchamayo() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-chiclayo';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadChiclayo() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-chanchamayo';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadHuancayo() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-huancayo';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadPiura() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-piura';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadTrujilloP() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-trujillo-primavera';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  function downloadTrujilloS() {
    const link = document.createElement('a');
    link.href = 'https://www.trilce.edu.pe/l/brochure-vu-2025-trujillo-sta-maria';
    //link.download = 'file.pdf';
	link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
</script>
<script src="js/script.js"></script>
<script type="text/javascript">
  $( document ).ready(function() 
  {
    new WOW().init();
  });
</script>
<script id="rendered-js">
  var slideIndex = 1;
  var myTimer;
  var slideshowContainer;
  
  window.addEventListener("load", function () 
  {
    showSlides(slideIndex);
    myTimer = setInterval(function () {plusSlides(1);}, 4000);
    slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
    slideshowContainer.addEventListener('mouseenter', pause);
    slideshowContainer.addEventListener('mouseleave', resume);
  });
  
  function plusSlides(n) 
  {
    clearInterval(myTimer);
    if (n < 0) 
    {
      showSlides(slideIndex -= 1);
    } 
    else 
    {
      showSlides(slideIndex += 1);
    }
  
    if (n === -1) 
    {
      myTimer = setInterval(function () {plusSlides(n + 2);}, 4000);
    } 
    else 
    {
      myTimer = setInterval(function () {plusSlides(n + 1);}, 4000);
    }
  }
  
  function currentSlide(n) 
  {
    clearInterval(myTimer);
    myTimer = setInterval(function () {plusSlides(n + 1);}, 4000);
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) 
  {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1;}
    if (n < 1) {slideIndex = slides.length;}
    for (i = 0; i < slides.length; i++) 
    {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) 
    {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
  
  pause = () => 
  {
    clearInterval(myTimer);
  };
  
  resume = () => 
  {
    clearInterval(myTimer);
    myTimer = setInterval(function () {plusSlides(slideIndex);}, 4000);
  };
</script>
<script type="text/javascript">
  function isNumber(evt) 
  {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ( (charCode > 31 && charCode < 48) || charCode > 57)
    {
        return false;
    }
    return true;
  }
</script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  let started = false;

  const startCounting = () => {
    counters.forEach(counter => {
      counter.innerText = '0';
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const currentValue = +counter.innerText;
        const increment = target / 200;
    
        if (currentValue < target) {
          counter.innerText = `${Math.ceil(currentValue + increment)}`;
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target;
        }
      };
      
      updateCounter();
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        startCounting();
        started = true;
      }
    });
  }, {
    threshold: 0.5
  });

  const section = document.getElementById('counter-section');
  observer.observe(section);
});
</script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  let started = false;

  const startCounting = () => {
    counters.forEach(counter => {
      counter.innerText = '0';
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const currentValue = +counter.innerText;
        const increment = target / 200;
    
        if (currentValue < target) {
          counter.innerText = `${Math.ceil(currentValue + increment)}`;
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target;
        }
      };
      
      updateCounter();
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        startCounting();
        started = true;
      }
    });
  }, {
    threshold: 0.5
  });

  const section = document.getElementById('counter-section2');
  observer.observe(section);
});
</script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  let started = false;

  const startCounting = () => {
    counters.forEach(counter => {
      counter.innerText = '0';
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const currentValue = +counter.innerText;
        const increment = target / 200;
    
        if (currentValue < target) {
          counter.innerText = `${Math.ceil(currentValue + increment)}`;
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target;
        }
      };
      
      updateCounter();
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        startCounting();
        started = true;
      }
    });
  }, {
    threshold: 0.5
  });

  const section = document.getElementById('counter-section3');
  observer.observe(section);
});
</script>
<script type="text/javascript">
  var slideIndex2 = 1;
  showSlides2(slideIndex2);

  function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
  }

  function showSlides2(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides-2");
      if (n > slides.length) { slideIndex2 = 1 }
      if (n < 1) { slideIndex2 = slides.length }
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      slides[slideIndex2 - 1].style.display = "block";
  }
</script>
</body>
</html>