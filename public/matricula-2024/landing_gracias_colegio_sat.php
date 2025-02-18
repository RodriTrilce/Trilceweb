<?php

/* CONEXION DB */
$servername = "localhost";
$username   = "root";
$password   = "cYPS-m=gXoZVE6HkH0{6";
$dbname     = "web_colegio_2021";

/* PARAMETROS DE WS */
$ORIGEN_INFO 			= "FRWEB";
$TIPO_SERVICIO 			= "COLEG";
$SERVICIO 				= "COLAE";

$info_grado = $_POST['grado'];
switch ($_POST['grado']) 
{
	case "Inicial":
		$grado = "00004";
		$valor_grado = 4;
		break;
	case "Primaria - 1er Grado":
		$grado = "00006";
		$valor_grado = 6;
		break;
	case "Primaria - 2do Grado":
		$grado = "00007";
		$valor_grado = 7;
		break;
	case "Primaria - 3ro Grado":
		$grado = "00008";
		$valor_grado = 8;
		break;
	case "Primaria - 4to Grado":
		$grado = "00009";
		$valor_grado = 9;
		break;
	case "Primaria - 5to Grado":
		$grado = "00010";
		$valor_grado = 10;
		break;
	case "Primaria - 6to Grado":
		$grado = "00011";
		$valor_grado = 11;
		break;
	case "Secundaria - 1er Año":
		$grado = "00013";
		$valor_grado = 13;
		break;
	case "Secundaria - 2do Año":
		$grado = "00014";
		$valor_grado = 14;
		break;
	case "Secundaria - 3ro Año":
		$grado = "00015";
		$valor_grado = 15;
		break;
	case "Secundaria - 4to Año":
		$grado = "00016";
		$valor_grado = 16;
		break;
	case "Secundaria - 5to Año":
		$grado = "00019";
		$valor_grado = 19;
		break;
}
$NIVEL_ESTUDIO 			= $grado;

$ANIO_ACADEMICO 		= "2024";

$info_sede = $_POST['sede'];
switch ($_POST['sede']) 
{
	case "Arequipa (provincia)":
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

$TIPO_DOCUMENTO 		= "01";
$NRO_DOCUMENTO 			= $_POST['dni'];
$NOMBRES 				= $_POST['nombres'];
$APELLIDO_PATERNO		= $_POST['apellido_paterno'];
$APELLIDO_MATERNO 		= $_POST['apellido_materno'];
$SEXO					= "";
$CORREO_E 				= $_POST['email'];
$NRO_TELEFONO 			= $_POST['telefono'];

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
$subject = "¡Gracias por registrarte! Matrícula 2024 - Estudiar en Trilce SE NOTA";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

/*
$mail->Body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><html><title></title><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><div style='Margin:0;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important'><span style='color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;overflow:hidden'></span><table style='Margin:0;background:#eee!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><td align='center' valign='top' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><center style='min-width:580px;width:100%'><table align='center' style='Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td height='16px' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'> </td></tr></tbody></table><table style='border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><center style='min-width:532px;width:100%'>


<a href='https://www.trilce.edu.pe/l/whatsapp-matricula-2024'>
<!-- AQUI EN SRC PONER LA IMAGEN --> <img src='https://www.trilce.edu.pe/storage/static/upload/7907bf30-0bc9-11ee-9dbe-bb367ddf8930.png' align='center' class='float-center' style='-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center> </th> <th class='expander' style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0'></th> </tr> <tr style='padding:0;text-align:left;vertical-align:top'> <th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'> <center data-parsed='' style='min-width:532px;width:100%'>


<a href='https://www.trilce.edu.pe/colegio'>
<img src='https://www.trilce.edu.pe/storage/static/upload/78e58300-0bc9-11ee-99df-d5228998d100.png' style='Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p align='center' style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:700;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-top:35px;text-align:center'>SIGAMOS CONECTADOS</p><table align='center' style='border-collapse:collapse;border-spacing:0;padding:0;text-align:right;vertical-align:top;width:auto!important'><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:0!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.facebook.com/ColegioTrilce/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/ZK5RGSx/image.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.instagram.com/trilcecolegio/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/pKqXWF0/image-1.png' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://twitter.com/TRILCEtweet' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/yRXwdCR/image-2.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.trilce.edu.pe/l/whatsapp-colegio' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/hYbpWVr/image-3.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/sjqBHVt/image-4.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th></tr></table></td></tr></table></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>&copy; Trilce 2023. Todos los derechos reservados.<br>Tel&eacute;fono: 6198 100</p></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></center></td></tr></table><div style='display:none;white-space:nowrap;font:15px courier;line-height:0'>
";
*/

if ($datos_sede == "Arequipa (provincia)")
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
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HQRN8J');</script>
<!-- End Google Tag Manager -->

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
  fbq('init', '458147031438719');
  fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=458147031438719&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HQRN8J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
							<div class="col-lg-4 hailitar_mobile">
								<img src="images/colegio/logo_colegio.svg" alt="Logo Colegio">
							</div>
							<div class="col-lg-4 hailitar_mobile">
                                <a href="https://www.trilce.edu.pe/colegio">
								    <img src="images/colegio/home.svg" alt="Logo Colegio">
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
							<div class="col-lg-4 hailitar_mobile">
							</div>
						</div>
						<img src="images/colegio/logo-matricula-2024.svg" alt="Trilce Colegio" class="mt40 tam_logo" style="margin-top: 1.5rem"><br><br><br><br>
                    </div>
                    <div class="ml80">
                        <div class="gracias_contenedor">
                            <h2 class="gracias_titulo">¡Gracias por tu interés!</h2>
                            <p class="gracias_descripcion">Hemos enviado un mail con nuestra propuesta educativa al correo que has registrado.</b></p>
                            <button type="submit" style="border: 2px solid #FF4F00 !important;" class="btn btn-primary btn-block texto_solicita vista_home_boton1 btn_w" onclick="location.href='index.php';"><b style="font-family: NSB !important">Volver</b></button>
                        </div>
                        <p class="pie_2">© 2024 Trilce. Todos los derechos reservados.</p>
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