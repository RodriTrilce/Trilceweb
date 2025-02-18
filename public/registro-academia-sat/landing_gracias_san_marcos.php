<?php

$ORIGEN_INFO 			= "FRWEB";
$TIPO_SERVICIO 			= "ACADE";
$SERVICIO 				= "ACASM";

switch ($_POST['ciclo']) 
{
	case "Intensivo":
		$ciclo = "00103";
		break;
	case "Repaso Semestral":
		$ciclo = "00107";
		break;
}
$NIVEL_ESTUDIO 			= $ciclo;

$ANIO_ACADEMICO 		= "2021";

switch ($_POST['turno']) 
{
	case "Tarde":
		$turno = "T";
		break;
	case "Mañana":
		$turno = "M";
		break;
}
$BLDG_TBL 				= "";

$TIPO_DOCUMENTO 		= "01";
$NRO_DOCUMENTO 			= $_POST['dni'];
$NOMBRES 				= $_POST['nombres'];
$APELLIDO_PATERNO		= $_POST['apellido_paterno'];
$APELLIDO_MATERNO 		= $_POST['apellido_materno'];
$SEXO					= "";
$CORREO_E 				= $_POST['email'];
$NRO_TELEFONO 			= $_POST['celular'];
$COMENTARIO         	= $_POST['comentario'];
$TURNO         			= $turno;

$nombres_apellidos  = $_POST['nombres'].' '.$_POST['apellido_paterno'].' '.$_POST['apellido_materno'];
$email              = $_POST['email'];

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
"NRO_TELEFONO" => $NRO_TELEFONO,
"COMENTARIO" => $COMENTARIO,
"TURNO" => $TURNO);

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
	
/*
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

$academia           = "Católica";
$ciclo              = $_POST['ciclo'];
$turno              = $_POST['turno'];
$dni                = $_POST['dni'];
$nombres_apellidos  = $_POST['nombres_apellidos'];
$telefono           = $_POST['celular'];
$email              = $_POST['email'];
$comentario         = $_POST['comentario'];


$sql = "INSERT INTO lista_espera_academia (academia, ciclo, turno, dni, nombres_apellidos, telefono, email, comentario, fecha_registro) 
VALUES ('$academia','$ciclo', '$turno', '$dni', '$nombres_apellidos', '$telefono', '$email', '$comentario', now())";

if ($conn->query($sql) === TRUE)
{
    //echo "New record created successfully";
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
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


//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();


//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
/* $mail->SMTPDebug = SMTP::DEBUG_SERVER; */
//$mail->SMTPDebug = 3;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

/* $dompdf = new Dompdf();

$dompdf->loadHtml("");

$options = new Options();
$options->setIsRemoteEnabled(true);

$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->setOptions($options);
$pdfString = $dompdf->output(); */

/* $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, 'Código:');
$pdf->Ln();
$pdf->Cell(40,10, $codigo);
$pdf->Ln();
$pdf->Cell(40,10, 'Nombres y apellidos:');
$pdf->Ln();
$pdf->Cell(40,10,  $nombres_apellidos);
$pdf->Ln();
$pdf->Cell(40,10, 'Correo:');
$pdf->Ln();
$pdf->Cell(40,10, $correo);
$pdfdoc = $pdf->Output('', 'S');
$pdf->Ln(); */

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'atencionalcliente@trilce.edu.pe';

//Password to use for SMTP authentication
$mail->Password = 'TR1LC32022';

//Set who the message is to be sent from
$mail->setFrom('atencionalcliente@trilce.edu.pe', 'Academias Trilce');

//Set an alternative reply-to address
/* $mail->addReplyTo('replyto@example.com', 'First Last'); */

//Set who the message is to be sent to
$mail->addAddress("$email", "$nombres_apellidos");
//$mail->addCC('jastuvilca@trilce.edu.pe');
//$mail->addBCC('jastuvilca@trilce.edu.pe');
$mail->addBCC('');

//Set the subject line
/* $mail->Subject = 'Registro de Reclamo/Queja - Organización   Educativa Trilce'; */

$subject = "¡Gracias por registrarte! - Preparación Católica - Trilce Academia";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
/* $mail->msgHTML(file_get_contents('contents.html'), __DIR__); */


//Replace the plain text body with one created manually
$mail->Body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><html><title></title><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><div style='Margin:0;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important'><span style='color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;overflow:hidden'></span><table style='Margin:0;background:#eee!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><td align='center' valign='top' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><center style='min-width:580px;width:100%'><table align='center' style='Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td height='16px' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'> </td></tr></tbody></table><table style='border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><center style='min-width:532px;width:100%'>








<a href='https://www.trilce.edu.pe/l/whatsapp-san-marcos'>
<!-- AQUI EN SRC PONER LA IMAGEN --> <img src='https://www.trilce.edu.pe/storage/static/upload/6951dd00-f9ea-11eb-bb1c-65748b75dc22.png' align='center' class='float-center' style='-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center> </th> <th class='expander' style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0'></th> </tr> <tr style='padding:0;text-align:left;vertical-align:top'> <th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'> <center data-parsed='' style='min-width:532px;width:100%'>





<a href='https://www.messenger.com/t/AcademiaTrilce'>
<!-- AQUI EN SRC PONER LA IMAGEN --> <img src='https://www.trilce.edu.pe/storage/static/upload/fce627f0-d609-11eb-a595-d5e3c460be09.png' align='center' class='float-center' style='-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center> </th> <th class='expander' style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0'></th> </tr> <tr style='padding:0;text-align:left;vertical-align:top'> <th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'> <center data-parsed='' style='min-width:532px;width:100%'>



<a href='tel:016198100'>
<!-- AQUI EN SRC PONER LA IMAGEN --> <img src='https://www.trilce.edu.pe/storage/static/upload/00861a60-d60a-11eb-b852-fb9d05d82758.png' align='center' class='float-center' style='-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center> </th> <th class='expander' style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0'></th> </tr> <tr style='padding:0;text-align:left;vertical-align:top'> <th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'> <center data-parsed='' style='min-width:532px;width:100%'>







<a href='https://www.trilce.edu.pe/l/brochure-san-marcos'>
<img src='https://www.trilce.edu.pe/storage/static/upload/6a5cc3c0-d60b-11eb-80e0-f34b41b42b8c.png' align='center' style='Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p align='center' style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:700;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-top:35px;text-align:center'>SIGAMOS CONECTADOS</p><table align='center' style='border-collapse:collapse;border-spacing:0;padding:0;text-align:right;vertical-align:top;width:auto!important'><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:0!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.facebook.com/AcademiaTrilce/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/ZK5RGSx/image.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.instagram.com/trilceacademia/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/pKqXWF0/image-1.png' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://twitter.com/TRILCEtweet' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/yRXwdCR/image-2.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/hYbpWVr/image-3.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/sjqBHVt/image-4.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th></tr></table></td></tr></table></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>© Trilce 2021. Todos los derechos reservados.<br>Teléfono: 6198 100</p></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></center></td></tr></table><div style='display:none;white-space:nowrap;font:15px courier;line-height:0'>
 
";
 
$mail->IsHTML(true);  

//Attach an image file
//$mail->addAttachment("reclamo-$codigo.pdf");
 //$mail->addStringAttachment($pdfdoc, 'contact.pdf');
 //$mail->addStringAttachment($pdfString, "reclamo-$codigo.pdf");


//$mail->addAttachment('reclamo.pdf', "RECLAMO-$codigo.pdf");

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    //echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    //return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Academia Trilce 2021</title>
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
                            <img src="images/academia/logo.svg" alt="Logo Academia">
                        </div>
                        <div class="col-lg-6 col-xs-6 contenedor_mobile_iconos">
                            <a href="#">
                                <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
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
                <div class="col-lg-6 fondo_landing full_height">
                </div>
                <div class="col-lg-6 pt-4 fondo_registro_2021 full_height">
                    <div class="ml80">
                        <div class="row">
                            <div class="col-lg-6 hailitar_mobile">
                                <img src="images/academia/logo.svg" alt="Logo Academia">
                            </div>
                            <div class="col-lg-6 hailitar_mobile">
                                <a href="#">
                                    <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
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
                    <div class="ml80">
                        <h1 class="titulo_academia">¡Gracias por solicitar información!</h1>
                        <div class="contenedor_gracias_registro">
                            <h2 class="usted_eligio">Usted eligió:<br>Preparación SAN MARCOS</h2>
                            <p class="enviado">Hemos enviado la información sobre el ciclo al correo que has registrado. Por favor, revisa tu bandeja de entrada o de spam.</p>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="location.href='index.php';">Nuevo Registro</button>
                        </div>
                        <h1 class="matricula_aqui">¡Matricúlate aquí!</h1>
                        <p class="comunicate">Comunícate con nosotros por los siguientes medios:</p>
                        <div class="row">
                            <div class="col-lg-2 col-xs-4 centrado">
                                <a href="https://www.trilce.edu.pe/l/whatsapp-san-marcos" target="_blank">
                                    <img src="images/academia/whatsapp_f.svg" alt="Logo Academia" class="icono_academia centrado_imagen"><br>
                                    <span class="texto_icono_academia">WhatsApp</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-xs-4 centrado">
                                <a href="https://www.messenger.com/t/AcademiaTrilce" target="_blank">
                                    <img src="images/academia/facebook_f.svg" alt="Logo Academia" class="icono_academia centrado_imagen"><br>
                                    <span class="texto_icono_academia">Facebook</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-xs-4 centrado">
                                <a href="tel:016198100">
                                    <img src="images/academia/telefono_f.svg" alt="Logo Academia" class="icono_academia centrado_imagen"><br>
                                    <span class="texto_icono_academia">6198 100</span>
                                </a>
                            </div>
                            <div class="col-lg-6 ">
                            </div>
                        </div>
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