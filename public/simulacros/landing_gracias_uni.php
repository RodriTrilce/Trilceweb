<?php

$BLDG_TBL			= $_POST['local'];
$SERVICIO			= "ACAUN";
$CODIGO_AREA		= $_POST['area'];
switch ($CODIGO_AREA) 
{
	// APT
	case "2":
		$nivel = "SEMU2";
		break;
	// Escolar
	case "4":
		$nivel = "00178";
		break;
}

$NIVEL_ESTUDIO		= $nivel;

switch ($CODIGO_AREA) 
{
	// APT
	case "2":
		$code_url = "20161ae591";
		break;
	// Escolar
	case "4":
		$code_url = "75a11636aa";
		break;
}
$CODE_URL			= $code_url;

switch ($CODIGO_AREA) 
{
    case "2":
        $cod_carrera = "4";
        break;
    case "4":
        $cod_carrera = "7";
        break;
}
$CODIGO_CARRERA		= $cod_carrera;
$ANIO_ACADEMICO		= "2022";
$TIPO_DOCUMENTO		= "01";
$NRO_DOCUMENTO		= $_POST['dni'];
$NOMBRES			= $_POST['nombres'];
$PRIMER_APELLIDO	= $_POST['apellido_paterno'];
$SEGUNDO_APELLIDO	= $_POST['apellido_materno'];
$CORREO_E			= $_POST['email'];
$COMENTARIO			= "Comentario";
$NRO_CELULAR		= "987654321";

define("RECAPTCHA_V3_SECRET_KEY", '6LeReKwfAAAAAOYbBlzLJFSnFGoyxD78Xu0IZsxJ');
$token 	= $_POST['token'];
$action = $_POST['action'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5)
{
	
} 
else 
{
	// spam submission
	// show error message
}

$url = 'https://intranet.trilce.edu.pe/api/Cliente/Publico/SimulacroInscripcion';
$data = array("CODE_URL" => $CODE_URL,
"BLDG_TBL" => $BLDG_TBL,
"NIVEL_ESTUDIO"=>$NIVEL_ESTUDIO,
"SERVICIO"=>$SERVICIO,
"CODIGO_AREA"=>$CODIGO_AREA,
"CODIGO_CARRERA"=>$CODIGO_CARRERA,
"ANIO_ACADEMICO"=>$ANIO_ACADEMICO,
"TIPO_DOCUMENTO"=>$TIPO_DOCUMENTO,
"NRO_DOCUMENTO"=>$NRO_DOCUMENTO,
"NOMBRES"=>$NOMBRES,
"PRIMER_APELLIDO"=>$PRIMER_APELLIDO,
"SEGUNDO_APELLIDO"=>$SEGUNDO_APELLIDO,
"CORREO_E"=>$CORREO_E,
"COMENTARIO"=>$COMENTARIO,
"NRO_CELULAR"=>$NRO_CELULAR);

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
	$validar = '1';
    $validar_mensaje  = '1';
}
else
{
	$error = $valores['MENSAJE'][0];
    if($error =="El simulacro no se encuentra activo")
    {
        $validar = '2';
        $validar_mensaje = '2';
    }
    elseif($error =="El registro ya existe, intente con otro código")
    {
        $validar = '3';
        $validar_mensaje = '3';
    }
    elseif($error =="El simulacro no se encuentra publicado")
    {
        $validar = '4';
        $validar_mensaje = '4';
    }
    elseif($error =="No es posible inscribirse porque no existe capacidad para este simulacro, favor de verificar otras opciones")
    {
        $validar = '5';
        $validar_mensaje = '5';
    }
    elseif($error =="Ya se encuentra inscrito en otro simulacro que corresponde a la misma fecha, favor de verificar otras opciones")
    {
        $validar = '6';
        $validar_mensaje = '6';
    }
    else
    {
        $validar = '7';
        $validar_mensaje = '7';
    }
}

/* INICIO - LOG DE DE RESPALDO DE INFORMACIÓN 250522 */
date_default_timezone_set('America/Lima');
$fecha 		= date("d/m/Y h:i:s");
$myfile 	= fopen("logs_uni.txt", "a") or die("Unable to open file!");
$txt 		= "$NOMBRES; $PRIMER_APELLIDO; $SEGUNDO_APELLIDO; $NRO_DOCUMENTO; $CORREO_E; $NRO_CELULAR; $error; $fecha";
fwrite($myfile, "\n". $txt);
fclose($myfile);
/* FIN */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
if($validar=='1')
{
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->SMTPAuth = true;
	$mail->Username = 'atencionalcliente@trilce.edu.pe';
	$mail->Password = 'TR1LC3_2022';
	$mail->setFrom('atencionalcliente@trilce.edu.pe', 'Academias Trilce');
	$mail->addAddress("$CORREO_E", "$NOMBRES $PRIMER_APELLIDO $SEGUNDO_APELLIDO");
	$mail->addBCC('');
	$subject = "Simulacro tipo admisión UNI";
	$subject = utf8_decode($subject);
	$mail->Subject = $subject;

	if($CODE_URL=="75a11636aa")
	{
		$mail->Body = "
		<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><html><title></title><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><div style='Margin:0;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important'><span style='color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;overflow:hidden'></span><table style='Margin:0;background:#eee!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><td align='center' valign='top' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><center style='min-width:580px;width:100%'><table align='center' style='Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td height='16px' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'> </td></tr></tbody></table><table style='border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><center style='min-width:532px;width:100%'>

		<a href=''>
		<img src='https://www.trilce.edu.pe/storage/static/upload/41b4be40-351c-11ed-83fa-fd9baca45e5c.png' align='center' style='Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p align='center' style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:700;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-top:35px;text-align:center'>SIGAMOS CONECTADOS</p><table align='center' style='border-collapse:collapse;border-spacing:0;padding:0;text-align:right;vertical-align:top;width:auto!important'><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:0!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.facebook.com/AcademiaTrilce/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/ZK5RGSx/image.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.instagram.com/trilceacademia/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/pKqXWF0/image-1.png' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://twitter.com/TRILCEtweet' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/yRXwdCR/image-2.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.trilce.edu.pe/l/whatsapp' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/hYbpWVr/image-3.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/sjqBHVt/image-4.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th></tr></table></td></tr></table></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>&copy; Trilce 2022. Todos los derechos reservados.<br>Tel&eacute;fono: 6198 100</p></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></center></td></tr></table><div style='display:none;white-space:nowrap;font:15px courier;line-height:0'>
		";
	}
	else
	{
		$mail->Body = "
		
		<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><html><title></title><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><div style='Margin:0;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important'><span style='color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;overflow:hidden'></span><table style='Margin:0;background:#eee!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><td align='center' valign='top' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><center style='min-width:580px;width:100%'><table align='center' style='Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td height='16px' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'> </td></tr></tbody></table><table style='border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><center style='min-width:532px;width:100%'>






<a href=''>
<img src='https://www.trilce.edu.pe/storage/static/upload/34a81c80-66a1-11ed-9e3f-d9a2e79e6ea9.png' align='center' style='Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p align='center' style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:700;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-top:35px;text-align:center'>SIGAMOS CONECTADOS</p><table align='center' style='border-collapse:collapse;border-spacing:0;padding:0;text-align:right;vertical-align:top;width:auto!important'><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:0!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.facebook.com/AcademiaTrilce/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/ZK5RGSx/image.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.instagram.com/trilceacademia/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/pKqXWF0/image-1.png' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://twitter.com/TRILCEtweet' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/yRXwdCR/image-2.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.trilce.edu.pe/l/whatsapp' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/hYbpWVr/image-3.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/sjqBHVt/image-4.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th></tr></table></td></tr></table></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>&copy; Trilce 2022. Todos los derechos reservados.<br>Tel&eacute;fono: 6198 100</p></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></center></td></tr></table><div style='display:none;white-space:nowrap;font:15px courier;line-height:0'>
		";
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
}
else
{

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Academia Trilce <?php echo date("Y"); ?></title>
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
                <div class="fondo_registro_2021 hailitar_header">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 contenedor_mobile_logo">
							<a href="https://www.trilce.edu.pe/academia">
								<img src="images/academia/logo.svg" alt="Logo Academia">
							</a>
                        </div>
                        <div class="col-lg-6 col-xs-6 contenedor_mobile_iconos">
                            <a href="https://www.trilce.edu.pe/academia">
                                <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                            </a>
                            <a href="https://www.trilce.edu.pe/l/whatsapp">
                                <img src="images/academia/whatsapp.svg" alt="Logo Academia" class="icono_colegio">
                            </a>
                            <a href="tel:016198100">
                                <img src="images/academia/telefono.svg" alt="Logo Academia" class="icono_colegio">
                            </a>
                            <br>
                            <span class="texto_telefono">6198 100</span>
                        </div>
                    </div>
                </div>
                <?php if ($validar="1")
                {
                    $var_style="full_height";
                }
                elseif ($validar="5")
                {
                    $var_style="full_height_2";
                }
                elseif ($validar="6")
                {
                    $var_style="full_height_2";
                }
                else
                {
                    $var_style="full_height";
                }
                ?>
                <div class="col-lg-6 fondo_landing <?php echo $var_style; ?>">
                </div>
                <div class="col-lg-6 pt-4 fondo_registro_2021 <?php echo $var_style; ?>">
                    <div class="ml80">
                        <div class="row">
                            <div class="col-lg-6 hailitar_mobile">
								<a href="https://www.trilce.edu.pe/academia">
									<img src="images/academia/logo.svg" alt="Logo Academia">
								</a>
                            </div>
                            <div class="col-lg-6 hailitar_mobile">
                                <a href="https://www.trilce.edu.pe/academia">
                                    <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                                </a>
                                <a href="https://www.trilce.edu.pe/l/whatsapp">
                                    <img src="images/academia/whatsapp.svg" alt="Logo Academia" class="icono_colegio">
                                </a>
                                <a href="tel:016198100">
                                    <img src="images/academia/telefono.svg" alt="Logo Academia" class="icono_colegio">
                                </a>
                                <br>
                                <span class="texto_telefono">6198 100</span>
                            </div>
                        </div>
                    </div>
                    <?php if($validar_mensaje=='1')
                    {
                    ?>
                    <div class="ml80 mt40">
                    	<img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
						<p class="subtitulo_academia_n">Alumno Trilce</p>
                        <p class="subtitulo_academia">Usted eligió: Simulacros UNI</p>
                        <div class="contenedor_gracias_registro">
                            <h2 class="usted_eligio">¡Gracias por<br>registrarte!</h2>
                            <p class="enviado">Hemos enviado un mail con la información detallada del simulacro elegido al correo que has registrado. <strong>Recuerda que el simulacro es GRATUITO por ser Alumno de Academias y Colegios Trilce.</strong></p>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                            <h2 class="revisa_ciclos">¡Revisa nuestros nuevos ciclos!</h2>
                            <a href="https://www.trilce.edu.pe/academia/preparacion-uni" class="botones_enlaces_volver_2">Ver en nuestra web</a>
                        </div>
						<p class="pie_revisa">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                    }
                    elseif($validar_mensaje=='2')
                    {
                    ?>
                    <div class="ml80 mt40">
                        <img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
                        <p class="subtitulo_academia_n">Alumno Trilce</p>
                        <div class="contenedor_gracias_registro">
                            <h2 class="no_registro">Lamentamos no poderte inscribir. Ya no contamos con vacantes para el simulacro seleccionado.</h2>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                        </div>
                        <p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                	}
                    elseif($validar_mensaje=='3')
                    {
                    ?>
                    <div class="ml80 mt40">
                        <img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
                        <p class="subtitulo_academia_n">Alumno Trilce</p>
                        <div class="contenedor_gracias_registro">
                            <h2 class="registrado">El alumno ya se encuentra inscrito.</h2>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                        </div>
                        <p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                	}
                    elseif($validar_mensaje=='4')
                    {
                    ?>
                    <div class="ml80 mt40">
                        <img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
                        <p class="subtitulo_academia_n">Alumno Trilce</p>
                        <div class="contenedor_gracias_registro">
                            <h2 class="no_registro">El simulacro no se encuentra publicado</h2>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                        </div>
                        <p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                	}
                    elseif($validar_mensaje=='5')
                    {
                    ?>
                    <div class="ml80 mt40">
                    	<img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
						<p class="subtitulo_academia_n">Alumno Trilce</p>
                        <div class="contenedor_gracias_registro">
                            <p class="no_enviado">No es posible inscribirte porque ya superamos la capacidad de inscritos para este simulacro. Por favor, verificar otras opciones.</p>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                        </div>
						<p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                	}
                    elseif($validar_mensaje=='6')
                    {
                    ?>
                    <div class="ml80 mt40">
                    	<img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
						<p class="subtitulo_academia_n">Alumno Trilce</p>
                        <div class="contenedor_gracias_registro">
                            <p class="no_enviado">Ya te encuentras inscrito en otro simulacro que corresponde a otra fecha.</p>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                        </div>
						<p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                    }
                	else
                    {
                    ?>
                    <div class="ml80 mt40">
                        <img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux2">
                        <p class="subtitulo_academia_n">Alumno Trilce</p>
                        <div class="contenedor_gracias_registro">
                            <h2 class="no_registro">No se ha procesado tu inscripción. Por favor, comunícate con el número de WhatsApp <a href="https://api.whatsapp.com/send?phone=51947273310&text=Tengo%20un%20problema%20con%20mi%20inscripci%C3%B3n%20para%20el%20simulacro" target="_blank" class="enlace_no_registro" style="color: #53565A;">947 273 310</a></h2>
                            <a href="index.php" class="botones_enlaces_volver">Volver</a>
                        </div>
                        <p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
                    </div>
                    <?php
                    }
                    ?>
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