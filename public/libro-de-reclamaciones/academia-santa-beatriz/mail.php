<?php
include '../datos.php';
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

$date               =  date("d/m/Y");
$codigo 			= isset($_SESSION["codigo"]) ? $_SESSION["codigo"] : '';
$razon_social 		= isset($_SESSION["razon_social"]) ? $_SESSION["razon_social"] : '';
$ruc 				= isset($_SESSION["ruc"]) ? $_SESSION["ruc"] : '';
$institucion 		= isset($_SESSION["institucion"]) ? $_SESSION["institucion"] : '';
$nombres_apellidos 	= isset($_SESSION["nombres_apellidos"]) ? $_SESSION["nombres_apellidos"] : '';
$genero 			= isset($_SESSION["genero"]) ? $_SESSION["genero"] : '';
$sede 				= isset($_SESSION["sede"]) ? $_SESSION["sede"] : '';
$grado 				= isset($_SESSION["grado"]) ? $_SESSION["grado"] : '';
$dni 				= isset($_SESSION["dni"]) ? $_SESSION["dni"] : '';
$celular 			= isset($_SESSION["celular"]) ? $_SESSION["celular"] : '';
$direccion 			= isset($_SESSION["direccion"]) ? $_SESSION["direccion"] : '';
$correo 			= isset($_SESSION["correo"]) ? $_SESSION["correo"] : '';
$nombres_apoderado 	= isset($_SESSION["nombres_apoderado"]) ? $_SESSION["nombres_apoderado"] : '';
$celular_apoderado 	= isset($_SESSION["celular_apoderado"]) ? $_SESSION["celular_apoderado"] : '';
$correo_apoderado 	= isset($_SESSION["correo_apoderado"]) ? $_SESSION["correo_apoderado"] : '';
$producto_servicio 	= isset($_SESSION["producto_servicio"]) ? $_SESSION["producto_servicio"] : '';
$monto_reclamado 	= isset($_SESSION["monto_reclamado"]) ? $_SESSION["monto_reclamado"] : '';
$descripcion 		= isset($_SESSION["descripcion"]) ? $_SESSION["descripcion"] : '';
$reclamo_queja 		= isset($_SESSION["reclamo_queja"]) ? $_SESSION["reclamo_queja"] : '';
$detalle 			= isset($_SESSION["detalle"]) ? $_SESSION["detalle"] : '';
$pedido_concreto 	= isset($_SESSION["pedido_concreto"]) ? $_SESSION["pedido_concreto"] : '';


if (
    $razon_social       === '' || 
    $ruc                === '' || 
    $institucion        === '' || 
    $nombres_apellidos  === '' ||
    $genero             === '' || 
    $sede               === '' || 
    $grado              === '' || 
    $dni                === '' || 
    $celular            === '' ||
    $direccion          === '' || 
    $correo             === '' || 
    $nombres_apoderado  === '' || 
    $celular_apoderado  === '' ||
    $correo_apoderado   === '' || 
    $producto_servicio  === '' || 
    $monto_reclamado    === '' ||
    $descripcion        === '' || 
    $reclamo_queja      === '' || 
    $detalle            === '' || 
    $pedido_concreto    === ''
) 
{
    $valor = '0';
    header('Location: ./index.php');
} 
else 
{
    $valor = '1';
    //print ('ok');
}
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

$dompdf = new Dompdf();

$dompdf->loadHtml("<html>

<body bgcolor='#ffffff'
    style='font-family:Arial, Helvetica, sans-serif; margin: 0px; padding: 0px;
    background-color: #ffffff; font-size: 12px  !important;'>
    <table cellspacing='6' cellpadding='6' style='width: 100%; background-color: #f4f4f4;'>
        <tr>
            <td style='width: 50%;'>
                <img width='80'
                src='data:image/png;base64, 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'
                alt='Trilce' />
            </td>
            <td style='width: 50%;  font-weight: bolder; '>FECHA: $date</td>
        </tr>
    </table>

    <table cellspacing='6' cellpadding='6'  style='width: 100%; background-color: #f4f4f4;'>
        <tr>
            <td style='width: 50%;  font-weight: bolder; color: #FF5000; font-size: 16px !important'>LIBRO DE
                RECLAMACIONES</td>
            <td style='width: 50%;  font-weight: bolder; '>CÓDIGO: $codigo</td>
        </tr>
    </table>
    <table cellspacing='6' cellpadding='6'  style='width: 100%; background-color: #ffffff;'>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>RAZÓN SOCIAL: </td>
            <td style='width: 50%; '>$razon_social</td>
        </tr>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>RUC: </td>
            <td style='width: 50%; '>$ruc</td>
        </tr>
         <tr>
             <td style='width: 50%; font-weight: bolder;'>INSTITUCIÓN: </td>
             <td style='width: 50%; '>$institucion</td>
         </tr>
		 <tr>
             <td style='width: 50%; font-weight: bolder;'>SEDE: </td>
             <td style='width: 50%; '>$sede</td>
         </tr>
    </table>
    <table cellspacing='6' cellpadding='6'  style='width: 100%; background-color: #f4f4f4;'>    
        <tr>
            <td style='  font-weight: bolder;  font-size: 12px !important;'>1. DATOS DEL CONSUMIDOR</td>
        </tr>
    </table>
    <table cellspacing='6' cellpadding='6'  style='width: 100%; background-color: #ffffff;'>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>NOMBRES Y APELLIDOS: </td>
            <td style='width: 50%; '>$nombres_apellidos</td>
        </tr>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>PREPARACIÓN: </td>
            <td style='width: 50%; '>$grado</td>
        </tr>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>DNI: </td>
            <td style='width: 50%; '>$dni</td>
        </tr>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>CORREO ELECTRÓNICO: </td>
            <td style='width: 50%; '>$correo</td>
        </tr>
        <tr>
            <td style='width: 50%; font-weight: bolder;'>CELULAR:</td>
            <td style='width: 50%; '>$celular</td>
        </tr>
         <tr>
             <td style='width: 50%; font-weight: bolder;'>INSTITUCIÓN: </td>
             <td style='width: 50%; '>$institucion</td>
         </tr>
		 <tr>
             <td style='width: 50%; font-weight: bolder;'>SEDE: </td>
             <td style='width: 50%; '>$sede</td>
         </tr>
    </table>
    <table cellspacing='6' cellpadding='6'
        style='width: 100%; background-color: #ffffff; border-top: 1px solid #f4f4f4 '>
          <tr>
              <td style='width: 50%; font-weight: bolder;'>NOMBRES PADRE O MADRE: </td>
              <td style='width: 50%; '>$nombres_apoderado</td>
          </tr>
          <tr>
              <td style='width: 50%; font-weight: bolder;'>CORREO ELECTRÓNICO: </td>
              <td style='width: 50%; '>$correo_apoderado</td>
          </tr>
           <tr>
               <td style='width: 50%; font-weight: bolder;'>CELULAR:</td>
               <td style='width: 50%; '>$celular_apoderado</td>
           </tr>
    </table>
     <table cellspacing='6' cellpadding='6' style='width: 100%; background-color: #f4f4f4;'>
         <tr>
             <td style='  font-weight: bolder;  font-size: 12px !important;'>2. SOBRE EL SERVICIO</td>
         </tr>
     </table>
     <table cellspacing='6' cellpadding='6'
         style='width: 100%; background-color: #ffffff; border-top: 1px solid #f4f4f4 '>
         <tr>
             <td style='width: 50%; font-weight: bolder;'>PRODUCTO O SERVICIO: </td>
             <td style='width: 50%; '>$producto_servicio</td>
         </tr>
           <tr>
               <td style='width: 50%; font-weight: bolder;'>MONTO RECLAMADO</td>
               <td style='width: 50%; '>S/ $monto_reclamado</td>
           </tr>
            <tr>
                <td style='width: 50%; font-weight: bolder;'>DESCRIPCIÓN DEL PRODUCTO/SERVCIO</td>
                <td style='width: 50%; '>$descripcion</td>
            </tr>
     </table>
      <table cellspacing='6' cellpadding='6'  style='width: 100%; background-color: #f4f4f4;'>
          <tr>
              <td style=' font-weight: bolder; font-size: 12px !important;'>3. DETALLE DEL RECLAMO/QUEJA</td>
          </tr>
      </table>
      <table cellspacing='6' cellpadding='6' style='width: 100%; background-color: #ffffff; border-top: 1px solid #f4f4f4 '>
          <tr>
              <td style='width: 50%; font-weight: bolder;'>RELAMO O QUEJA: </td>
              <td style='width: 50%; '>$reclamo_queja</td>
          </tr>
          <tr>
              <td style='width: 50%; font-weight: bolder;'>DETALLE DEL RECLAMO/QUEJA</td>
              <td style='width: 50%; '>$detalle </td>
          </tr>
          <tr>
              <td style='width: 50%; font-weight: bolder;'>PEDIDO CONCRETO RECLAMO/QUEJA</td>
              <td style='width: 50%; '>$pedido_concreto</td>
          </tr>
      </table>
         <table cellspacing='6' cellpadding='6'>
             <tr>
                 <td>&nbsp;</td>
             </tr>
         </table>
      <table cellspacing='6' cellpadding='6' style='margin: 0 auto;'>
          <tr>
              <td>SU RECLAMO HA SIDO REGISTRADO Y SE PROCEDERÁ A SU EVALUACIÓN</td>
          </tr>
      </table>
</body>

</html>");

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
$mail->Username = $cc_email;

//Password to use for SMTP authentication
$mail->Password = $cc_clave;

//Set who the message is to be sent from
$mail->setFrom('librodereclamaciones@trilce.edu.pe', 'Libro de reclamaciones Trilce');

//Set an alternative reply-to address
/* $mail->addReplyTo('replyto@example.com', 'First Last'); */

//Set who the message is to be sent to
/* $mail->addAddress('jastuvilca@trilce.edu.pe', 'Javier Elias'); */
$mail->addAddress("$correo", "$nombres_apellidos");
$mail->addCC('librodereclamaciones@trilce.edu.pe');
$mail->addBCC('ccatter@trilce.edu.pe');

//Set the subject line
/* $mail->Subject = 'Registro de Reclamo/Queja - Organización   Educativa Trilce'; */

$subject = "Registro de Reclamo/Queja - Organización Educativa Trilce";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
/* $mail->msgHTML(file_get_contents('contents.html'), __DIR__); */


//Replace the plain text body with one created manually
$mail->Body = " <html>

 <body style='margin: 0px; padding: 0px;'>
     <table cellpadding='0' cellspacing='0' style='width: 100%; height: 100%; background-color: #333; margin: 0 auto;'>
            <tr>
                <td align='center' valign='top'>
                    <table width='600' cellpadding='0' cellspacing='0' style='background-color: #ffffff; margin: 40px auto'>
                        <tr width='600'>
                            <td width='600'>
                                <img src='https://www.trilce.edu.pe/libro-de-reclamaciones/img/bg-template-mail.png' width='600'  height='283'>
                            </td>
                        </tr>
                            <tr width='600'>
                                <td width='600' style='text-align: center; padding: 40px 0px 20px; font-family:Arial; font-weight: bold; font-size: 14px'>
                                    FECHA: $date
                                </td>
                            </tr>
                            <tr width='600'>
                                <td width='600'
                                    style='text-align: center; padding: 20px 0px; color: #ff5000; font-family:Arial; font-weight: bold; font-size: 18px'>
                                    Señor(a) $nombres_apellidos: 
                                </td>
                            </tr>
                            <tr width='600'>
                                <td width='600' style='text-align: center; padding: 20px 60px; font-family:Arial; font-weight: normal; font-size: 16px'>
                                    Se registró correctamente su reclamo/queja.<br>
                                    Para poder realizar cualquier consulta, su código generado es el siguiente:
                                </td>
                            </tr>
                            <tr width='600'>
                                <td width='600'>
                                    <table width='600' style='margin: 0px auto 20px; padding: 20px; text-align: center;'>
                                        <tr width='300'>
                                            <td width='300'>
                                                &nbsp;
                                            </td>
                                            <td width='300' style='margin:  0 auto; background-color: #ff5000; color: #ffffff; text-align: center; padding: 10px 20px;
                                                font-family:Arial; font-weight: normal; font-size: 20px'>
                                                $codigo
                                            </td>
                                            <td width='300'>
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                    </table>
                </td>
            </tr>
     </table>
 </body>

 </html>";
$mail->IsHTML(true);  

//Attach an image file
//$mail->addAttachment("reclamo-$codigo.pdf");
//$mail->addStringAttachment($pdfdoc, 'contact.pdf');
$mail->addStringAttachment($pdfString, "reclamo-$codigo.pdf");


//$mail->addAttachment('reclamo.pdf', "RECLAMO-$codigo.pdf");

//send the message, check for errors
if ($valor === '0') {
    //print('error');
    header('Location: ./index.php');
} 
else {
    //print('ok');
    $mail->send();
}

//if (!$mail->send()) {
//    echo 'Mailer Error: '. $mail->ErrorInfo;
//} else {
    //echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
//}


//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
/*
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
*/