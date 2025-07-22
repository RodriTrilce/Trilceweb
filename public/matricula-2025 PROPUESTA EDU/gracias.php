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
	case "Arequipa":
		$sede = "BECOLARP";
		$datos_sede = "Arequipa";
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
$NOMBRES 				  = $_POST['nombres'];
$APELLIDO_PATERNO	= $_POST['apellido_paterno'];
$APELLIDO_MATERNO = $_POST['apellido_materno'];
$SEXO					    = "";
$CORREO_E 				= $_POST['email'];
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
$subject = "¡Gracias por registrarte! Matrícula 2025 - Estudiar en Trilce SE NOTA";
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
  <title>Matrícula 2025 - Trilce Colegios</title>
  <meta name="author" content="Trilce" />
  <meta name="description" content="¡Matrícula 2025!" />
  <meta name="keywords" content="trilce, colegios, academias, mejor propuesta, educativa, mejor propuesta educativa, online, cuarentena, Lista de espera 2025, educación a distancia" />
  <meta name="Resource-type" content="Document" />
  <link rel="canonical" href="https://www.trilce.edu.pe/" />
  <meta property="og:title" content="¡Matrícula 2025!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.trilce.edu.pe/lista-espera-2025/" />
  <meta property="og:image" content="https://www.trilce.edu.pe/static/images/lista-espera-2025.png" />
  <meta property="og:description" content="Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad." />
  <meta property="og:site_name" content="¡Matrícula 2025!" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:titlkmk  e" content="¡Matrícula 2025!">
  <meta name="twitter:description" content="Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.">
  <meta name="twitter:creator" content="@trilcetweet">
  <meta name="twitter:image" content="https://www.trilce.edu.pe/static/images/lista-espera-2025.png">
  <meta itemprop="name" content="¡Matrícula 2025!">
  <meta itemprop="description" content="Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.">
  <meta itemprop="image" content="https://www.trilce.edu.pe/static/images/lista-espera-2025.png">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/line-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  .slideshow-container {
    position: relative;
    margin: auto;
  }
  .slideshow-container-2 {
    position: relative;
    margin: auto;
  }
  .mySlides {
    display: none;
    position: relative;
    animation-name: fade;
    animation-duration: 2.5s;
  }
  @keyframes fade {
    from { opacity: 0.4; }
    to { opacity: 1; }
  }
  .mySlides-2 {
    display: none;
  }
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 42%;
    width: auto;
    margin-top: -30px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 30px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    color: #FF5023 !important;
  }
  .prev-2, .next-2 {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -30px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 30px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    color: #FF5023 !important;
  }
  .next {
    right: 200px;
    border-radius: 3px 0 0 3px;
  }
  .next-2 {
    right: 200px;
    border-radius: 3px 0 0 3px;
  }
  .prev {
    left: 200px;
    border-radius: 3px 0 0 3px;
  }
  .prev-2 {
    left: 200px;
    border-radius: 3px 0 0 3px;
  }
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  .dot{
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color .6s ease
  }
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

  @keyframes updown {
    0% {
      transform: translateY(-30%);
    }

    50% {
      transform: translateY(30%);
    }

    100% {
      transform: translateY(-30%);
    }
  }

  @keyframes updown-mobile {
    0% {
      transform: translateY(-10%);
    }

    50% {
      transform: translateY(10%);
    }

    100% {
      transform: translateY(-10%);
    }
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
    background-color: transparent;
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
        logo.src = 'img/logo-45-desktop.svg';
      }
    });
  </script>
</head>

<body>
<div id="menu">
    <nav class="navbar navbar-expand-lg navbar-light container default-navbar">
      <a class="navbar-brand" href="https://www.trilce.edu.pe/colegio" target="_blank">
        <img src="img/logo-45-desktop.svg" alt="Trilce" width="100%" height="58" class="web" />
        <img src="img/logo-45-tablet.svg" alt="Trilce" width="100%" height="58" class="tablet" />
        <img src="img/logo-45-mobile.svg" alt="Trilce" width="100%" height="48" class="movil" />
      </a>
      <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
        <li class="nav-item">
          <a class="nav-link" href="https://www.trilce.edu.pe/colegio" target="_blank">
            <i class="las la-home 32px h3" style="font-size: 2.5rem !important; color: #000000;"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank">
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
          <li class="nav-item">
            <a class="nav-link" href="https://www.trilce.edu.pe/colegio" target="_blank" id="var_inicio">Inicio</a>
          </li>
          <li class="nav-item nav_d1">
            <div class="div_menu1">
              <a class="nav-link a1" target="_blank" href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" style="font-family: 'GeogrotesqueSemibold' !important;">
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
            <p class="subtitulo_form">Nos comunicaremos contigo cuando<br>
            <b>iniciemos nuestro proceso de admisión 2025.</b>
            </p>
            <form class="registration-form w_form " action="index.html" method="post">
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block vista_home_boton1 tamanio_btn" style="background-color: #FF5023 !important;border: 1px solid #FF5023 !important; border-radius: 4px; width: 260px; margin: 0 auto; font-size: 20px;    font-family: Geogrotesque-Sb !important; margin-bottom: 8px">Aceptar</button>

                <a href="https://www.trilce.edu.pe/l/whatsapp-matricula-2025" target="_blank" type="submit" class="btn btn-primary btn-block vista_home_boton1 tamanio_btn" style="background-color: #0DBC42 !important; border: 1px solid #0DBC42 !important; border-radius: 4px; width: 260px; height: 42px; margin: 0 auto; font-size: 20px; font-family: Geogrotesque-Sb !important; display: flex !important; align-items: center; justify-content: center;"><i class="lab la-whatsapp text-light-wp h3" style="font-size: 30px; margin-right: 5px; margin-top: 8px;"></i> Contacta a un asesor</a>
                  
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
            <h1 class="display-4 titulo_h1 animated fadeInDown delay-1s">La mejor propuesta educativa</h1>
            <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe">Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.</p>
          </article>
        </div>
        <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-end flex-column">
          <article class="colorbg1 contenedor_articulo wow fadeIn">
            <div class="seccion_icono1"></div>
            <h2 class="font-weight-bold titulo_articulo">Misión</h2>
            <p class="text-justify subtitulo_articulo">Cambiar la vida de nuestros estudiantes y colaboradores generándoles pasión por alcanzar sus sueños.</p>
          </article>
        </div>
        <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-center flex-column">
          <article class="colorbg2 contenedor_articulo wow fadeIn">
            <div class="seccion_icono2"></div>
            <h2 class="white_text font-weight-bold titulo_articulo">Visión</h2>
            <p class="text-justify white_text subtitulo_articulo">Hacer de la educación un medio que logre un mundo mejor para vivir, promoviendo el cambio que nuestra sociedad necesita.</p>
          </article>
        </div>
        <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-center flex-column">
          <article class="colorbg3 contenedor_articulo wow fadeIn">
            <div class="seccion_icono4"></div>
            <h2 class="white_text font-weight-bold titulo_articulo">Propósito</h2>
            <p class="text-justify white_text subtitulo_articulo">Brindar una excelente educación a los alumnos, para lograr que cumplan sus sueños.
            </p>
          </article>
        </div>
        <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-start flex-column">
          <article class="colorbg4 contenedor_articulo wow fadeIn">
            <div class="seccion_icono3"></div>
            <h2 class="white_text font-weight-bold titulo_articulo">Valores</h2>
            <p class="text-justify white_text subtitulo_articulo">∂ Innovación <br>
              ∂ Respeto <br>
              ∂ Solidaridad<br>
              ∂ Sinceridad
            </p>
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
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article style="text-align: center;">
              <h1 class="display-4 titulo_h1_m animated fadeInDown delay-1s">La mejor propuesta educativa</h1>
              <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe">Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-end flex-column">
            <article class="colorbg1 contenedor_articulo wow fadeIn">
              <div class="seccion_icono1"></div>
              <h2 class="font-weight-bold titulo_articulo">Misión</h2>
              <p class="text-justify subtitulo_articulo">Cambiar la vida de nuestros estudiantes y colaboradores generándoles pasión por alcanzar sus sueños.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-center flex-column">
            <article class="colorbg2 contenedor_articulo wow fadeIn">
              <div class="seccion_icono2"></div>
              <h2 class="white_text font-weight-bold titulo_articulo">Visión</h2>
              <p class="text-justify white_text subtitulo_articulo">Hacer de la educación un medio que logre un mundo mejor para vivir, promoviendo el cambio que nuestra sociedad necesita.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-center flex-column">
            <article class="colorbg3 contenedor_articulo wow fadeIn">
              <div class="seccion_icono4"></div>
              <h2 class="white_text font-weight-bold titulo_articulo">Propósito</h2>
              <p class="text-justify white_text subtitulo_articulo">Brindar una excelente educación a los alumnos, para lograr que cumplan sus sueños.
              </p>
            </article>
          </div>
          <div class="col-sm-12 col-md-3 d-flex justify-content-center align-items-start flex-column">
            <article class="colorbg4 contenedor_articulo wow fadeIn">
              <div class="seccion_icono3"></div>
              <h2 class="white_text font-weight-bold titulo_articulo">Valores</h2>
              <p class="text-justify white_text subtitulo_articulo">∂ Innovación <br>
                ∂ Respeto <br>
                ∂ Solidaridad<br>
                ∂ Sinceridad
              </p>
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
        <div class="row pad_top">
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article style="text-align: center;">
              <h1 class="display-4 titulo_h1 animated fadeInDown delay-1s">La mejor propuesta educativa</h1>
              <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe">Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia brindando una Educación de Calidad.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-end flex-column">
            <article class="colorbg1 contenedor_articulo wow fadeIn">
              <div class="seccion_icono1"></div>
              <h2 class="font-weight-bold titulo_articulo">Misión</h2>
              <p class="text-justify subtitulo_articulo">Cambiar la vida de nuestros estudiantes y colaboradores generándoles pasión por alcanzar sus sueños.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
            <article class="colorbg2 contenedor_articulo wow fadeIn">
              <div class="seccion_icono2"></div>
              <h2 class="white_text font-weight-bold titulo_articulo">Visión</h2>
              <p class="text-justify white_text subtitulo_articulo">Hacer de la educación un medio que logre un mundo mejor para vivir, promoviendo el cambio que nuestra sociedad necesita.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
            <article class="colorbg3 contenedor_articulo wow fadeIn">
              <div class="seccion_icono4"></div>
              <h2 class="white_text font-weight-bold titulo_articulo">Propósito</h2>
              <p class="text-justify white_text subtitulo_articulo">Brindar una excelente educación a los alumnos, para lograr que cumplan sus sueños.
              </p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-start flex-column">
            <article class="colorbg4 contenedor_articulo wow fadeIn">
              <div class="seccion_icono3"></div>
              <h2 class="white_text font-weight-bold titulo_articulo">Valores</h2>
              <p class="text-justify white_text subtitulo_articulo">∂ Innovación <br>
                ∂ Respeto <br>
                ∂ Solidaridad<br>
                ∂ Sinceridad
              </p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion 02 Web -->
  <section class="web">
    <div class="container">
      <div class="row ">
        <div class="col-sm-12 col-md-2 d-flex align-items justify-content-center flex-column">
        </div>
        <div class="col-sm-12 col-md-4 d-flex align-items justify-content-center flex-column">
          <h2 class="font-weight-bold titulo_perfil">Perfil del<br>alumno Trilce</h2>
          <ul class="ul_perfil">
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 1. Sólida formación en valores.</li>
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 2. Alto nivel académico.</li>
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 3. Conciencia ecológica.</li>
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 4. Vocación de servicio y compromiso social.</li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-4 d-flex">
          <figure>
            <img src="img/foto-perfil.png" alt="Trilce" class="foto_articulo foto_perfil">
          </figure>
        </div>
        <div class="col-sm-12 col-md-2 d-flex align-items justify-content-center flex-column">
        </div>
      </div>
      <div class="row pb_pt" id="counter-section">
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp1.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="45">0</h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Años de experiencia</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp2.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="18">0</h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Colegios en Lima</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp3.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="6">0</h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Colegios en Provincia</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp4.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono">
            +<span class="counter" style="font-family: 'GeogrotesqueSemibold' !important" data-target="24000">0</span>
          </h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Alumnos</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 02 Mobile -->
  <section id="propuesta-educativa" class="stage1-10 d-flex movil margin-section-3">
    <div class="container">
      <div class="row pad_top">
        <div class="col-sm-12 col-md-6 d-flex justify-content-center flex-column">
          <h2 class="font-weight-bold titulo_perfil">Perfil del<br>alumno Trilce</h2>
          <ul class="ul_perfil">
            <li>
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 1. Sólida formación en valores.
            </li>
            <li>
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 2. Alto nivel académico.
            </li>
            <li>
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 3. Conciencia ecológica.
            </li>
            <li>
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 4. Vocación de servicio y compromiso social.
            </li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-6 d-flex">
          <figure style="margin: 0 auto;">
            <img src="img/foto_perfil_mobile.png" alt="Trilce" class="foto_articulo foto_perfil">
          </figure>
        </div>
      </div>
      <div class="row pb_pt" id="counter-section2">
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp1.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="45">0</h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Años de experiencia</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp2.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="18">0</h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Colegios en Lima</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp3.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="6">0</h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Colegios en Provincia</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp4.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono">
            +<span class="counter" style="font-family: 'GeogrotesqueSemibold' !important" data-target="24000">0</span>
          </h2>
          <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe_icono">Alumnos</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 02 Tablet -->
  <section id="propuesta-educativa" class="stage1-10 d-flex op_tablet tablet">
    <div class="container">
      <div class="row ">
        <div class="col-sm-12 col-md-12 d-flex align-items justify-content-center flex-column">
          <h2 class="font-weight-bold titulo_perfil">Perfil del<br>alumno Trilce</h2>
          <ul class="ul_perfil">
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 1. Sólida formación en valores.</li>
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 2. Alto nivel académico.</li>
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 3. Conciencia ecológica.</li>
            <li class="mb20_perfil">
              <img src="img/check.png" alt="Trilce" class="icono_perfil"/> 4. Vocación de servicio y compromiso social.</li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-12 d-flex">
          <figure>
            <img src="img/foto-perfil.png" alt="Trilce" class="foto_articulo foto_perfil">
          </figure>
        </div>
      </div>
      <div class="row pb_pt" id="counter-section3">
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp1.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="45">0</h2>
          <p class="text-justify black_text py-1 animated fadeInDown delay-2s subpe_icono">Años de experiencia</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp2.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="18">0</h2>
          <p class="text-justify black_text py-1 animated fadeInDown delay-2s subpe_icono">Colegios en Lima</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp3.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono counter" data-target="6">0</h2>
          <p class="text-justify black_text py-1 animated fadeInDown delay-2s subpe_icono">Colegios en Provincia</p>
        </div>
        <div class="col-sm-12 col-md-3 d-flex align-items justify-content-center flex-column">
          <img src="img/sp4.svg" class="w_icono" alt="Matrícula 2025 - Colegio Trilce">
          <h2 class="font-weight-bold titulo_perfil_icono">
            +<span class="counter" style="font-family: 'GeogrotesqueSemibold' !important" data-target="24000">0</span>
          </h2>          
          <p class="text-justify black_text2 py-1 animated fadeInDown delay-2s subpe_icono">Alumnos</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion 03 Web -->
  <section id="propuesta-educativa" class=" d-flex align-items-center web bg_gray">
    <div class="container">
      <div class="row pad_top">
        <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
          <article style="text-align: center;">
            <h1 class="display-4 titulo_h1 animated fadeInDown delay-1s">Desarrollamos un sólido sistema educativo</h1>
            <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe">del más alto nivel académico.</p>
          </article>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-end flex-column">
          <article class="contenedor_articulo03 wow fadeIn">
            <img src="img/img-inicial.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
            <div class="div_des_1">Inicial</div>
            <p class="text-justify subtitulo_articulo">En este nivel, desarrollamos las capacidades afectivas, motrices, sociales y cognitivas que permiten al niño desenvolverse de manera asertiva.</p>
          </article>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column">
          <article class="contenedor_articulo03 wow fadeIn">
            <img src="img/img-primaria.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
            <div class="div_des_2">Primaria</div>
            <p class="text-justify white_text subtitulo_articulo">En este nivel, establecemos las bases de una sólida formación integral, con valores y conciencia ecológica. El aprendizaje se centra en la experiencia, uso de recursos interactivos y la investigación.</p>
          </article>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column">
          <article class="contenedor_articulo03 wow fadeIn">
            <img src="img/img-secundaria.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
            <div class="div_des_3">Secundaria</div>
            <p class="text-justify white_text subtitulo_articulo">En este nivel, los estudiantes consolidan los conocimientos adquiridos con un método de aprendizaje intensivo de Matemáticas, Ciencias y Letras.</p>
          </article>
        </div>
      </div>
      <br><br>
      <br><br>
    </div>
  </section>
  <!-- Seccion 03 Mobile -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex movil">
    <div class="row stage1-1 fondo_gris">
      <div class="container">
        <div class='row'>
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article style="text-align: center;">
              <h1 class="display-4 titulo_h1 animated fadeInDown delay-1s op_no_tablet">Desarrollamos un sólido sistema educativo</h1>
              <h1 class="orange display-4 titulo_h1 animated fadeInDown delay-1s op_tablet">Desarrollamos un sólido sistema educativo</h1>
              <p class="text-justify black_text py-2 animated fadeInDown delay-2s subpe">del más alto nivel académico.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-end flex-column">
            <article class="contenedor_articulo03 wow fadeIn">
              <img src="img/img-inicial.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
              <div class="div_des_1">Inicial</div>
              <p class="text-justify subtitulo_articulo">En este nivel, desarrollamos las capacidades afectivas, motrices, sociales y cognitivas que permiten al niño desenvolverse de manera asertiva.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column">
            <article class="contenedor_articulo03 wow fadeIn">
              <img src="img/img-primaria.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
              <div class="div_des_2">Primaria</div>
              <p class="text-justify white_text subtitulo_articulo">En este nivel, establecemos las bases de una sólida formación integral, con valores y conciencia ecológica. El aprendizaje se centra en la experiencia, uso de recursos interactivos y la investigación.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column">
            <article class="contenedor_articulo03 wow fadeIn">
              <img src="img/img-secundaria.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
              <div class="div_des_3">Secundaria</div>
              <p class="text-justify white_text subtitulo_articulo">En este nivel, los estudiantes consolidan los conocimientos adquiridos con un método de aprendizaje intensivo de Matemáticas, Ciencias y Letras.</p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 03 Tablet -->
  <section id="propuesta-educativa2" class="stage1-1 d-flex tablet">
    <div class="row stage1-1 bg_gray">
      <div class="container">
        <div class="row pad_top">
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article style="text-align: center;">
              <h1 class="display-4 titulo_h1 animated fadeInDown delay-1s">Desarrollamos un sólido<br>sistema educativo</h1>
              <p class="text-justify black_text3 py-2 animated fadeInDown delay-2s subpe">del más alto nivel académico.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-end flex-column">
            <article class="contenedor_articulo03 wow fadeIn">
              <img src="img/img-inicial.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
              <div class="div_des_1">Inicial</div>
              <p class="text-justify subtitulo_articulo">En este nivel, desarrollamos las capacidades afectivas, motrices, sociales y cognitivas que permiten al niño desenvolverse de manera asertiva.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
            <article class="contenedor_articulo03 wow fadeIn">
              <img src="img/img-primaria.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
              <div class="div_des_2">Primaria</div>
              <p class="text-justify white_text subtitulo_articulo">En este nivel, establecemos las bases de una sólida formación integral, con valores y conciencia ecológica. El aprendizaje se centra en la experiencia, uso de recursos interactivos y la investigación.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
            <article class="contenedor_articulo03 wow fadeIn">
              <img src="img/img-secundaria.png" class="w_desarrollo" alt="Matrícula 2025 - Colegio Trilce"/>
              <div class="div_des_3">Secundaria</div>
              <p class="text-justify white_text subtitulo_articulo">En este nivel, los estudiantes consolidan los conocimientos adquiridos con un método de aprendizaje intensivo de Matemáticas, Ciencias y Letras.</p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion 04 Web -->
  <div id="slideshow-container" class="slideshow-container web bg_gray" style="padding-bottom: 80px;">
    <div class="slideshow-inner">
      <div class="mySlides fade tamanio_slide">
        <div class="row tamanio_slide">
          <div class="col-xs-12 col-md-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
                </div>
                <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column bg_gray tamanio_slide">
                  <article>
                    <p class="fs20gr pad200">Nuestros pilares</p>
                    <h1 class="py-2 font-weight-bold pad200 titulo_pilares">Excelente<br>plana docente</h1>
                    <p class="text-justify py-2 texto_titulo_modal pad200">Nuestros docentes son seleccionados de las mejores universidades del país, especialistas en el curso que enseñan y con amplia experiencia en la labor preuniversitaria. Utilizan los recursos tecnológicos para desarrollar clases dinámicas e innovadoras del más alto nivel académico.</p>
                  </article>
                </div>
                <div class="col-sm-12 col-md-4 d-flex align-items-center h_articulo ban1 tamanio_slide">
                </div>
                <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mySlides fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column bg_gray tamanio_slide">
            <article>
              <p class="fs20gr pad200">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad200 titulo_pilares">Auxiliar<br>permanente <br><span class="fs20_articulo titulo_subpilares">(Inicial - Primaria)</span></h1>
              <p class="text-justify py-2 texto_titulo_modal pad200">Contamos con una auxiliar permanente por aula de Inicial a 6.º grado de Primaria. Ella apoya al docente en aspectos relacionados con la formación y disciplina de los alumnos.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex align-items-center h_articulo ban2 tamanio_slide">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>
      
      <div class="mySlides fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column bg_gray tamanio_slide">
            <article>
              <p class="fs20gr pad200">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad200 titulo_pilares">Una tutora<br>por aula <br><span class="fs20_articulo titulo_subpilares">(Secundaria)</span></h1>
              <p class="text-justify py-2 texto_titulo_modal pad200">Contamos con una tutora de manera permanente, responsable del seguimiento académico y conductual de cada alumno. También participa en las actividades psicopedagógicas de los estudiantes y brinda apoyo a los docentes.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex align-items-center h_articulo ban3 tamanio_slide">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>
      
      <div class="mySlides fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column bg_gray tamanio_slide">
            <article>
              <p class="fs20gr pad200">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad200 titulo_pilares">Educación con<br>valores</h1>
              <p class="text-justify py-2 texto_titulo_modal pad200">Como parte de nuestro programa integral de formación en valores, incentivamos un valor cada mes. Asimismo, desarrollamos las siguientes campañas: “Ser mejores personas”, “Frente al acoso escolar”, “Contra el consumo de drogas”, “Menos plástico, más vida” y otras orientadas a generar una buena convivencia dentro y fuera del colegio. Además, propiciamos el aprecio por nuestra cultura, así como el desarrollo artístico, intelectual y físico mediante nuestras competencias InterTrilce.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex align-items-center h_articulo ban4 tamanio_slide">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>

      <div class="mySlides fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center flex-column bg_gray tamanio_slide">
            <article>
              <p class="fs20gr pad200">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad200 titulo_pilares">Sistema<br> 5.º año</h1>
              <p class="text-justify py-2 texto_titulo_modal pad200">Nuestro exigente plan de estudios está diseñado para la preparación exclusiva a la UNI, San Marcos* y Católica. Brindamos seminarios especializados con docentes de nuestra Academia y realizamos simulacros tipo admisión.
              <br><br><span class="titulo_footer_pilares">*Válido para las demás universidades del país.</span></p>
            </article>
          </div>
          <div class="col-sm-12 col-md-4 d-flex align-items-center h_articulo ban5 tamanio_slide">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)" style="text-decoration: none;"><img src="img/slider-izquierda.svg"></a>
    <a class="next" onclick="plusSlides(1)" style="text-decoration: none;"><img src="img/slider-derecha.svg"></a>
  </div>
  <div style='text-align: center; display: none;'>
    <span class="dot" onclick='currentSlide(1)'></span>
    <span class="dot" onclick='currentSlide(2)'></span>
    <span class="dot" onclick='currentSlide(3)'></span>
    <span class="dot" onclick='currentSlide(4)'></span>
    <span class="dot" onclick='currentSlide(5)'></span>
  </div>
  <!-- Seccion 04 Mobile -->
  <section id="propuesta-educativa" class="stage1-1 d-flex movil bg_gray ">
    <div class="row stage1-1">
      <div class="container">
        <div class='row'>
          <div class='col-md-10 offset-md-1'>
            <div class="carousel slide sq-crousal5" data-ride="carousel" id="sq-crousal5">
              <ol class="carousel-indicators">
                <li data-target="#sq-crousal5" data-slide-to="0" class="active"></li>
                <li data-target="#sq-crousal5" data-slide-to="1"></li>
                <li data-target="#sq-crousal5" data-slide-to="2"></li>
                <li data-target="#sq-crousal5" data-slide-to="3"></li>
                <li data-target="#sq-crousal5" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center align-items-center flex-column">
                      <article>
                        <p class="fs20gr pad200">Nuestros pilares</p>
                        <h1 class="py-2 font-weight-bold pad200 titulo_pilares">Excelente <br>plana docente</h1>
                        <p class="text-justify py-2 texto_titulo_modal pad200">Nuestros docentes son seleccionados de las mejores universidades del país, especialistas en el curso que enseñan y con amplia experiencia en la labor preuniversitaria. Utilizan los recursos tecnológicos para desarrollar clases dinámicas e innovadoras del más alto nivel académico.</p>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center h_articulo ban1">
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-6  d-flex justify-content-center align-items-center flex-column">
                      <article>
                        <p class="fs20gr pad200">Nuestros pilares</p>
                        <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Auxiliar<br> permanente <br><span class="fs20_articulo titulo_subpilares">(Inicial - Primaria)</span></h1>
                        <p class="text-justify gray py-2 texto_titulo_modal pad200">Contamos con una auxiliar permanente por aula de Inicial a 6.º grado de Primaria. Ella apoya al docente en aspectos relacionados con la formación y disciplina de los alumnos.</p>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center h_articulo ban2">
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
                      <article>
                        <p class="fs20gr pad200">Nuestros pilares</p>
                        <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Una tutora<br>por aula <br><span class="fs20_articulo titulo_subpilares">(Secundaria)</span></h1>
                        <p class="text-justify gray py-2 texto_titulo_modal pad200">Contamos con una tutora de manera permanente, responsable del seguimiento académico y conductual de cada alumno. También participa en las actividades psicopedagógicas de los estudiantes y brinda apoyo a los docentes.</p>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center h_articulo ban3">
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-6  d-flex justify-content-center align-items-center flex-column">
                      <article>
                        <p class="fs20gr pad200">Nuestros pilares</p>
                        <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Educación <br>con valores</h1>
                        <p class="text-justify gray py-2 texto_titulo_modal pad200">Como parte de nuestro programa integral de formación en valores, incentivamos un valor cada mes. Asimismo, desarrollamos las siguientes campañas: “Ser mejores personas”, “Frente al acoso escolar”, “Contra el consumo de drogas”, “Menos plástico, más vida” y otras orientadas a generar una buena convivencia dentro y fuera del colegio. Además, propiciamos el aprecio por nuestra cultura, así como el desarrollo artístico, intelectual y físico mediante nuestras competencias InterTrilce.</p>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center h_articulo ban4">
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-6  d-flex justify-content-center align-items-center flex-column">
                      <article>
                        <p class="fs20gr pad200">Nuestros pilares</p>
                        <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Sistema<br> 5.º año</h1>
                        <p class="text-justify gray py-2 texto_titulo_modal pad200">Nuestro exigente plan de estudios está diseñado para la preparación exclusiva a la UNI, San Marcos* y Católica. Brindamos seminarios especializados con docentes de nuestra Academia y realizamos simulacros tipo admisión.
                          Nuestro exigente plan de estudios está diseñado para la preparación exclusiva a la UNI, San Marcos* y Católica. Brindamos seminarios especializados con docentes de nuestra Academia y realizamos simulacros tipo admisión.
                        <br><br><span class="titulo_footer_pilares">*Válido para las demás universidades del país.</span></p>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center h_articulo ban5">
                    </div>
                  </div>
                </div>

              </div>
            </div>                          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 04 Tablet -->
  <div class="slideshow-container-2 stage1-1 d-flex bg_gray tablet" style="padding-bottom: 80px;">
    <div class="slideshow-inner">
      <div class="mySlides-2 fade">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
                  <article>
                    <p class="pad200 fs20gr titulo_pilares_inicial">Nuestros pilares</p>
                    <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Excelente<br>plana docente</h1>
                    <p class="text-justify gray py-2 pad200 fs13">Nuestros docentes son seleccionados de las mejores universidades del país, especialistas en el curso que enseñan y con amplia experiencia en la labor preuniversitaria. Utilizan los recursos tecnológicos para desarrollar clases dinámicas e innovadoras del más alto nivel académico.</p>
                  </article>
                </div>
                <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
                </div>
                <div class="col-sm-12 col-md-8 d-flex align-items-center h_articulo ban1">
                </div>
                <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mySlides-2 fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article>
              <p class="pad200 fs20gr titulo_pilares_inicial">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Auxiliar<br>permanente <br><span class="fs20_articulo titulo_subpilares">(Inicial - Primaria)</span></h1>
              <p class="text-justify gray py-2 pad200 fs13">Contamos con una auxiliar permanente por aula de Inicial a 6.º grado de Primaria. Ella apoya al docente en aspectos relacionados con la formación y disciplina de los alumnos.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-8 d-flex align-items-center h_articulo ban2">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>
      
      <div class="mySlides-2 fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article>
              <p class="pad200 fs20gr titulo_pilares_inicial">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Una tutora<br> por aula <br><span class="fs20_articulo titulo_subpilares">(Secundaria)</span></h1>
              <p class="text-justify gray py-2 pad200 fs13">Contamos con una tutora de manera permanente, responsable del seguimiento académico y conductual de cada alumno. También participa en las actividades psicopedagógicas de los estudiantes y brinda apoyo a los docentes.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-8 d-flex align-items-center h_articulo ban3">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>
      
      <div class="mySlides-2 fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-12  d-flex justify-content-center align-items-center flex-column">
            <article>
              <p class="pad200 fs20gr titulo_pilares_inicial">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Educación<br>con valores</h1>
              <p class="text-justify gray py-2 pad200 fs13">Como parte de nuestro programa integral de formación en valores, incentivamos un valor cada mes. Asimismo, desarrollamos las siguientes campañas: “Ser mejores personas”, “Frente al acoso escolar”, “Contra el consumo de drogas”, “Menos plástico, más vida” y otras orientadas a generar una buena convivencia dentro y fuera del colegio. Además, propiciamos el aprecio por nuestra cultura, así como el desarrollo artístico, intelectual y físico mediante nuestras competencias InterTrilce.</p>
            </article>
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-8 d-flex align-items-center h_articulo ban4">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>

      <div class="mySlides-2 fade tamanio_slide">
        <div class="row">
          <div class="col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
            <article>
              <p class="pad200 fs20gr titulo_pilares_inicial">Nuestros pilares</p>
              <h1 class="py-2 font-weight-bold pad220 titulo_pilares">Sistema<br> 5.º año</h1>
              <p class="text-justify gray py-2 pad200 fs13">Nuestro exigente plan de estudios está diseñado para la preparación exclusiva a la UNI, San Marcos* y Católica. Brindamos seminarios especializados con docentes de nuestra Academia y realizamos simulacros tipo admisión.
                Nuestro exigente plan de estudios está diseñado para la preparación exclusiva a la UNI, San Marcos* y Católica. Brindamos seminarios especializados con docentes de nuestra Academia y realizamos simulacros tipo admisión.
              <br><br><span class="titulo_footer_pilares">*Válido para las demás universidades del país.</span></p>
            </article>
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
          <div class="col-sm-12 col-md-12 d-flex align-items-center h_articulo ban5">
          </div>
          <div class="col-sm-12 col-md-2 d-flex align-items-center h_articulo">
          </div>
        </div>
      </div>
    </div>
    <a class="prev-2" onclick="plusSlides2(-1)" style="text-decoration: none;"><img src="img/slider-izquierda.svg"></a>
    <a class="next-2" onclick="plusSlides2(1)" style="text-decoration: none;"><img src="img/slider-derecha.svg"></a>
  </div>

  <!-- Seccion 05 Web -->
  <div class="section-accordion accordion web" id="accordion-primeros-puestos">
    <div class="">
      <div class="fondo_primeros card-header" id="headingOne">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-2">
            </div>
            <div class="col-xs-12 col-md-8">
              <a type="button" class="h1 my-5 black_text d-flex justify-content-between titulo_pilares button-image" data-toggle="collapse" data-target="#collapseOne" style="font-size: 30px !important; font-family: GeogrotesqueSemibold !important;">
                Nuestros estudiantes con primeros puestos <i class="fa la-angle-down button-image"></i>
              </a>  
            </div>
            <div class="col-xs-12 col-md-2">
            </div>
          </div>
        </div>
      </div>
  
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-primeros-puestos">
        <div class="fondo_primeros card-body"> 
          <div class="container">
            <div class="row">
              <div class="col-xs-12 offset-md-1 col-md-10 d-flex justify-content-center ">
                <table role="table mb-5">
                  <tbody role="rowgroup">
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto Cátolica</td>
                      <td data-label="Examen">2024-II</td>
                      <td data-label="Nombres">Valeria Linares Pérez</td>
                      <td data-label="Carrera">Letras</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2024-II</td>
                      <td data-label="Nombres">Ana Montoya Namoc</td>
                      <td data-label="Carrera" class="tabla_b">Máximo puntaje</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2024-I</td>
                      <td data-label="Nombres">Fabio Quispe Solano</td>
                      <td data-label="Carrera">Ingeniería de Ciberseguridad</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2024-I</td>
                      <td data-label="Nombres">José Zegarra Vigo</td>
                      <td data-label="Carrera">Genética y Biotecnología</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2024-I</td>
                      <td data-label="Nombres">Carla Del Castillo</td>
                      <td data-label="Carrera">Odontología</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2024-I</td>
                      <td data-label="Nombres">Jade Ramírez Avalos</td>
                      <td data-label="Carrera">Educación Primaria</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto Católica POP</td>
                      <td data-label="Examen">2024-I</td>
                      <td data-label="Nombres">Sergio Benavides</td>
                      <td data-label="Carrera">Letras</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI Examen Escolares</td>
                      <td data-label="Examen">2023-I</td>
                      <td data-label="Nombres">Joao Risco</td>
                      <td data-label="Carrera">Ingeniería de Sistemas</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2023-I</td>
                      <td data-label="Nombres">Joao Risco</td>
                      <td data-label="Carrera">Contabilidad</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto Católica</td>
                      <td data-label="Examen">2023-I</td>
                      <td data-label="Nombres">Joao Risco</td>
                      <td data-label="Carrera">Facultad de Letras</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2022-I</td>
                      <td data-label="Nombres">Jorge Castillo Fernández-Dávila</td>
                      <td data-label="Carrera" class="tabla_b">Máximo puntaje</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto Católica POP</td>
                      <td data-label="Examen">2021</td>
                      <td data-label="Nombres">Lesly Guzman Espector</td>
                      <td data-label="Carrera">Letras</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2021</td>
                      <td data-label="Nombres">Gina Retuerto Valerio</td>
                      <td data-label="Carrera">Ingeniería Económica</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2021</td>
                      <td data-label="Nombres">Nadia Romaní</td>
                      <td data-label="Carrera">Ingeniería Química</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2021</td>
                      <td data-label="Nombres">José Gonzales</td>
                      <td data-label="Carrera">Ingeniería Civil</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto Católica POP</td>
                      <td data-label="Examen">2020</td>
                      <td data-label="Nombres">Antonio Herrera</td>
                      <td data-label="Carrera" class="tabla_b"><b>Máximo puntaje</b></td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2019-II</td>
                      <td data-label="Nombres">Diego Vargas</td>
                      <td data-label="Carrera">Ingeniería Civil</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2019-II</td>
                      <td data-label="Nombres">Piero Pérez</td>
                      <td data-label="Carrera">Ingeniería Mecatrónica</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2019-II</td>
                      <td data-label="Nombres">Eduardo Díaz</td>
                      <td data-label="Carrera">Arquitectura</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI</td>
                      <td data-label="Examen">2019-II</td>
                      <td data-label="Nombres">Davis Suarez</td>
                      <td data-label="Carrera">Física</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2019-II</td>
                      <td data-label="Nombres">Rafael Salas Meléndez</td>
                      <td data-label="Carrera" class="tabla_b">Máximo puntaje</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto UNI Examen Escolares</td>
                      <td data-label="Examen">2019-1</td>
                      <td data-label="Nombres">Daniela Velarde</td>
                      <td data-label="Carrera" class="tabla_b">Máximo puntaje</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto Católica POP</td>
                      <td data-label="Examen">2019</td>
                      <td data-label="Nombres">Jimm Cisneros</td>
                      <td data-label="Carrera" class="tabla_b">Máximo puntaje</td>
                    </tr>
                    <tr>
                      <td data-label="" class="tabla_b">1.<sup>er</sup> puesto San Marcos</td>
                      <td data-label="Examen">2019-I</td>
                      <td data-label="Nombres">Diego Castillo Utani</td>
                      <td data-label="Carrera">Ingeniería Ambiental</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Seccion 05 Mobile -->
  <div class="section-accordion accordion movil bg_gray" id="accordion-primeros-puestos">
    <div class="">
      <div class="card-header bg_gray" id="headingOne">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6" style="text-align: center">
              <a type="button" class="h1 my-2 d-flex justify-content-between button-image" data-toggle="collapse" data-target="#collapseOne" style="display: inline-block !important; padding: 32px 50px 0px 50px; font-size: 22px; font-family: GeogrotesqueSemibold !important;">
                Nuestros estudiantes con primeros puestos <br><i class="fa la-angle-down button-image"></i>
              </a>  
            </div>
          </div>
        </div>
      </div>
  
      <div id="collapseOne" class="collapse bg_gray" aria-labelledby="headingOne" data-parent="#accordion-primeros-puestos">
        <div class="card-body "> 
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-12 d-flex justify-content-center ">
                <table role="table mb-5">
                  <tbody role="rowgroup">
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto Cátolica 2024-II</strong><br>
                        Valeria Linares Pérez<br>Letras</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2024-II</strong><br>
                        Ana Montoya Namoc<br><strong class="font_td">Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2024-I</strong><br>
                      Fabio Quispe Solano<br>Ingeniería de Ciberseguridad</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2024-I</strong><br>
                      José Zegarra Vigo<br>Genética y Biotecnología</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2024-I</strong><br>
                      Carla Del Castillo<br>Odontología</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2024-I</strong><br>
                      Jade Ramírez Avalos<br>Educación Primaria</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto Católica POP 2024-I</strong><br>
                      Sergio Benavides<br>Letras</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI Examen Escolares 2023-I</strong><br>
                      Joao Risco<br>Ingeniería de Sistemas</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2023-I</strong><br>
                      Joao Risco<br>Contabilidad</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto Católica 2023-I</strong><br>
                      Joao Risco<br>Facultad de Letras</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2022-I</strong><br>
                      Jorge Castillo Fernández-Dávila<br><strong class="font_td">Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto Católica POP 2021</strong><br>
                      Lesly Guzman Espector<br>Letras</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2021</strong><br>
                      Gina Retuerto Valerio<br>Ingeniería Económica</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2021</strong><br>
                      Nadia Romaní<br>Ingeniería Química</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2021</strong><br>
                      José Gonzales<br>Ingeniería Civil</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto Católica POP 2020</strong><br>
                      Antonio Herrera<br><strong class="font_td">Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2019-II</strong><br>
                      Diego Vargas<br>Ingeniería Civil</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2019-II</strong><br>
                      Piero Pérez<br>Ingeniería Mecatrónica</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2019-II</strong><br>
                      Eduardo Díaz<br>Arquitectura</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI 2019-II</strong><br>
                      Davis Suarez<br>Física</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2019-II</strong><br>
                      Rafael Salas Meléndez<br><strong class="font_td">Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto UNI Examen Escolares 2019-I</strong><br>
                      Daniela Velarde<br><strong class="font_td">Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto Católica POP 2019</strong><br>
                      Jimm Cisneros<br><strong class="font_td">Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="tabla_td">Examen:<br>Alumno:</td>
                      <td><strong class="font_td">1.<sup>er</sup> puesto San Marcos 2019-I</strong><br>
                      Diego Castillo Utani<br>Ingeniería Ambiental</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
  <!-- Seccion 05 Tablet -->
  <div class="section-accordion accordion tablet" id="accordion-primeros-puestos">
    <div class="">
      <div class="card-header" id="headingOne">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-1">
            </div>
            <div class="col-xs-12 col-md-10"><a type="button" class="h1 texto_acordeon d-flex justify-content-between titulo_pilares button-image" data-toggle="collapse" data-target="#collapseOne" style="display: inline-block !important; font-size: 22px !important; font-family: CaeciliaLTProHeavy !important; margin-top: 20px;">
                Nuestros estudiantes con primeros puestos<br> <i class="fa la-angle-down button-image"></i>
              </a>  
            </div>
            <div class="col-xs-12 col-md-1">
            </div>
          </div>
        </div>
      </div>
  
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-primeros-puestos">
        <div class="card-body"> 
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-12 d-flex justify-content-center ">
                <table role="table mb-5">
                  <tbody role="rowgroup">
                    <tr>
                      <td ><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2024-II</td>
                      <td>Ana Montoya Namoc<br><strong>Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td ><strong>1.<sup>er</sup> puesto UNI</strong><br>2024-I</td>
                      <td>Fabio Quispe Solano<br>Ingeniería de Ciberseguridad</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2024-I</td>
                      <td>José Zegarra Vigo<br>>Genética y Biotecnología</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2024-I</td>
                      <td>Carla Del Castillo<br>>Odontología</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2024-I</td>
                      <td>Jade Ramírez Avalos<br>Educación Primaria</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto Católica POP</strong><br>2024-I</td>
                      <td>Sergio Benavides<br>Letras</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI Examen Escolares</strong><br>2023-I</td>
                      <td>Joao Risco<br>Ingeniería de Sistemas</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2023-I</td>
                      <td>Joao Risco<br>Contabilidad</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto Católica</strong><br>2023-I</td>
                      <td>Joao Risco<br>Facultad de Letras</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2022-I</td>
                      <td>Jorge Castillo Fernández-Dávila<br><strong>Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto Católica POP</strong><br>2021</td>
                      <td>Lesly Guzman Espector<br>Letras</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2021</td>
                      <td>Gina Retuerto Valerio<br>Ingeniería Económica</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2021</td>
                      <td>Nadia Romaní<br>Ingeniería Química</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2021</td>
                      <td>José Gonzales<br>Ingeniería Civil</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto Católica POP</strong><br>2020</td>
                      <td>Antonio Herrera<br><strong>Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2019-II</td>
                      <td>Diego Vargas<br>Ingeniería Civil</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2019-II</td>
                      <td>Piero Pérez<br>Ingeniería Mecatrónica</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2019-II</td>
                      <td>Eduardo Díaz<br>Arquitectura</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI</strong><br>2019-II</td>
                      <td>Davis Suarez<br>Física</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2019-II</td>
                      <td>Rafael Salas Meléndez<br><strong>Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto UNI Examen Escolares</strong><br>2019-1</td>
                      <td>Daniela Velarde<br><strong>Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto Católica POP</strong><br>2019</td>
                      <td>Jimm Cisneros<br><strong>Máximo puntaje</strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>1.<sup>er</sup> puesto San Marcos</strong><br>2019-I</td>
                      <td>Diego Castillo Utani<br>Ingeniería Ambiental</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Seccion 07 Web -->
  <section class="stage1-14 web" style="background-image: none;">
    <div class="container">
      <div class="row pad_top">
        <div class="col-sm-12 col-md-6 d-flex flex-column">
          <article class="contenedor_articulo2 wow fadeIn fondo_escolar">
            <div class="seccion_icono001"></div>
            <h2 class="white_text font-weight-bold titulo_articulo_seguro">Seguro Escolar contra accidentes*<br> ¡Gratuito!</h2>
          </article>
        </div>
        <div class="col-sm-12 col-md-6 d-flex flex-column">
          <article class="contenedor_articulo2 wow fadeIn">
            <div class="seccion_icono002"></div>
            <p class="text-justify black_text subtitulo_articulo_seguro titulo_footer_pilares">*Cobertura anual, desde el primer día de clases, en todo el país las 24 horas del día.<br><br>
            *Revisar cartilla informativa en la Intranet Trilce, sección Documentos, al finalizar la matrícula online 2025.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 07 Mobile -->
  <section class="stage1-20 d-flex bg_white movil" style="padding: 0px 16px 20px 16px !important; background: none !important;">
    <div class="row">
      <div class="container">
        <div class="row pad_top">
          <div class="col-sm-12 col-md-6 d-flex flex-column">
            <article class="contenedor_articulo2 wow fadeIn bg_useccion">
              <div class="seccion_icono001"></div>
              <h2 class="font-weight-bold titulo_articulo_seguro">Seguro Escolar contra accidentes*<br> ¡Gratuito!</h2>
            </article>
          </div>
          <div class="col-sm-12 col-md-6 d-flex flex-column">
            <article class="contenedor_articulo2 wow fadeIn">
              <div class="seccion_icono002"></div>
              <p class="text-justify black_text subtitulo_articulo_seguro titulo_footer_pilares">*Cobertura anual, desde el primer día de clases, en todo el país las 24 horas del día.<br><br>
              *Revisar cartilla informativa en la Intranet Trilce, sección Documentos, al finalizar la matrícula online 2025.
              </p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Seccion 07 Tablet -->
  <section class="stage1-20 d-flex bg_white tablet" style="padding: 0px 0px 40px 0px !important; background: none !important;">
    <div class="container">
      <div class="row pad_top">
        <div class="col-sm-12 col-md-12 d-flex flex-column">
          <article class="contenedor_articulo2 wow fadeIn fondo_escolar">
            <div class="seccion_icono001"></div>
            <h2 class="white_text font-weight-bold titulo_articulo_seguro">Seguro Escolar contra accidentes*<br> ¡Gratuito!</h2>
          </article>
        </div>
        <div class="col-sm-12 col-md-12 d-flex flex-column">
          <article class="contenedor_articulo2 wow fadeIn">
            <div class="seccion_icono002"></div>
            <p class="text-justify black_text subtitulo_articulo_seguro titulo_footer_pilares">*Cobertura anual, desde el primer día de clases, en todo el país las 24 horas del día.<br><br>
            *Revisar cartilla informativa en la Intranet Trilce, sección Documentos, al finalizar la matrícula online 2025.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion 08 Web -->
  <section class="stage1-14 web fondo_blanco" style="background-image: none;">
    <div class="container">
        <div class="col-sm-12 col-md-12 d-flex flex-column align-items-center" style="margin-top: 48px; height: 78px; justify-content: center;">
          <p class="titulo_footer">© 2025 Colegio Trilce. Todos los derechos reservados.</p>
        </div>
    </div>
  </section>
  <!-- Seccion 08 Mobile -->
  <section class="stage1-14 movil fondo_blanco" style="background-image: none;">
    <div class="container">
        <div class="col-sm-12 col-md-12 d-flex flex-column align-items-center" style="height: 78px; justify-content: center;">
          <p class="titulo_footer">© 2025 Colegio Trilce. Todos los derechos reservados.</p>
        </div>
    </div>
  </section>
  <!-- Seccion 08 Tablet -->
  <section class="stage1-14 tablet fondo_blanco" style="background-image: none; padding: 0px !important ;">
    <div class="container">
        <div class="col-sm-12 col-md-12 d-flex flex-column align-items-center" style="margin-top: 8px; height: 78px; justify-content: center;">
          <p class="titulo_footer">© 2025 Colegio Trilce. Todos los derechos reservados.</p>
        </div>
    </div>
  </section>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
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