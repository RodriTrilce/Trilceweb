<?php
session_start();

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
//require "fpdf/fpdf.php";
use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';


//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

$date =  date("d/m/Y");
$_status = $_SESSION["_status"];
$name = $_SESSION["name"];
$dni = $_SESSION["dni"];
$name_apoderado = $_SESSION["name_apoderado"];
$dni_apoderado = $_SESSION["dni_apoderado"];
$venue = $_SESSION["venue"];
$grade = $_SESSION["grade"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
/* $mail->SMTPDebug = SMTP::DEBUG_SERVER; */

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

$options = new Options();
$options->setIsRemoteEnabled(true);

$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->setOptions($options);
$pdfString = $dompdf->output();

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
$mail->Password = 'TRILCE2021';

//Set who the message is to be sent from
$mail->setFrom('atencionalcliente@trilce.edu.pe', 'Colegios Trilce');

//Set an alternative reply-to address
/* $mail->addReplyTo('replyto@example.com', 'First Last'); */

//Set who the message is to be sent to
$mail->addAddress("$email");
//$mail->addCC('');
//$mail->addBCC('jastuvilca@trilce.edu.pe');
//$mail->addBCC('');

//Set the subject line
/* $mail->Subject = 'Registro de Reclamo/Queja - Organización   Educativa Trilce'; */

$subject = "Enlace de conexión - Charla Informativa 👧👦💻 - Trilce Colegio";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
/* $mail->msgHTML(file_get_contents('contents.html'), __DIR__); */


//Replace the plain text body with one created manually
$mail->Body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><html><title></title><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><div style='Margin:0;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important'><span style='color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;overflow:hidden'></span><table style='Margin:0;background:#eee!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><td align='center' valign='top' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><center style='min-width:580px;width:100%'><table align='center' style='Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><td height='16px' style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'> </td></tr></tbody></table><table style='border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><center style='min-width:532px;width:100%'>








<a href=''>
<img src='https://i.ibb.co/wJjbRWY/masivo-charlas-informativas-registro.png' align='center' style='Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto'></center></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p align='center' style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:700;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-top:35px;text-align:center'>SIGAMOS CONECTADOS</p><table align='center' style='border-collapse:collapse;border-spacing:0;padding:0;text-align:right;vertical-align:top;width:auto!important'><tr style='padding:0;text-align:left;vertical-align:top'><td style='Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:0!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.facebook.com/ColegioTrilce/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/ZK5RGSx/image.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.instagram.com/trilcecolegio/' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/pKqXWF0/image-1.png' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://twitter.com/TRILCEtweet' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/yRXwdCR/image-2.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://api.whatsapp.com/send?phone=51922336565&amp;text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/hYbpWVr/image-3.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th><th style='Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-left:5px!important;padding-right:5px!important;text-align:center'><a href='http://undefined' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='Margin:0;color:#f4633a;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none' target='_blank'><img src='https://i.ibb.co/sjqBHVt/image-4.png' alt='' style='border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto'></a></a></th></tr></table></td></tr></table></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table><table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%'><tbody><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px'><table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%'><tr style='padding:0;text-align:left;vertical-align:top'><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left'><p style='Margin:0;Margin-bottom:10px;color:#53565a;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>© Trilce 2020. Todos los derechos reservados.<br>Teléfono: 6198 100</p></th><th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0'></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></center></td></tr></table><div style='display:none;white-space:nowrap;font:15px courier;line-height:0'>";
$mail->IsHTML(true);  

//Attach an image file
//$mail->addAttachment("reclamo-$codigo.pdf");
 //$mail->addStringAttachment($pdfdoc, 'contact.pdf');
 $mail->addStringAttachment($pdfString, "reclamo-$codigo.pdf");


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