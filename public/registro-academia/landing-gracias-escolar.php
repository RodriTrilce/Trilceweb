<?php

$ORIGEN_INFO 			= "FRWEB";
$TIPO_SERVICIO 			= "ACADE";
$SERVICIO 				= "ACASU";

switch ($_POST['ciclo']) 
{
	case "Escolar":
		$ciclo = "20010";
		break;
}
$NIVEL_ESTUDIO 			= $ciclo;

$ANIO_ACADEMICO 		= "2023";

switch ($_POST['turno']) 
{
	case "Tarde":
		$turno = "T";
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
$valores = (json_decode($result, true));
if($valores['EST_PROCESO']=='1')
{
	//echo "Se registró al alumno.";
}
else
{
	//print_r($valores['MENSAJE'][0]);
}

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

/* INICIO - LOG DE DE RESPALDO DE INFORMACIÓN 250522 */

date_default_timezone_set('America/Lima');
$fecha 		= date("d/m/Y h:i:s");
$myfile 	= fopen("logs_escolar.txt", "a") or die("Unable to open file!");
$txt 		= "$NOMBRES; $APELLIDO_PATERNO; $APELLIDO_MATERNO; $NRO_DOCUMENTO; $CORREO_E; $NRO_TELEFONO; $error; $fecha";
fwrite($myfile, "\n". $txt);
fclose($myfile);

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
$mail->setFrom('informes@trilce.edu.pe', 'Academias Trilce');
$mail->addAddress("$email", "$nombres_apellidos");
$mail->addBCC('');
$subject = "¡Gracias por registrarte! - Preparación Escolar - Trilce Academia";
$subject = utf8_decode($subject);
$mail->Subject = $subject;

$mail->Body = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>
    
    <head>

        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    </head>

<body style='font-family: Arial, Helvetica, sans-serif !important; background-color: #EEEEEE;'>

    <table class='container'
        style='width: 100%; padding: 0; margin: 0 auto !important; border-collapse: collapse; background-color: #EEEEEE;'>

        <tr style='padding: 0; margin: 0 auto;'>

            <td style='padding: 0; margin: 0;'>

                <table class='cumple' style='width: 500px; padding: 0; margin: 0 auto !important; border-collapse: collapse;'>

                    <tr style='padding: 0; margin: 0 auto;'>

                        <td class='tt2' style='vertical-align: top; padding: 0; margin: 0;'>

                            <table style='border: 15px solid #fff; width: 500px; height: 100%; padding: 0; margin: 0; border-collapse: collapse;'>

                              
                          
<!-- start ban 1 -->
                                <tr style='padding: 0; margin: 0; background-color: #ffffff !important;'>
                                    <td style='vertical-align: bottom; padding: 0; margin: 0;'>
                                        <a href='https://www.trilce.edu.pe/l/whatsapp-escolar' target='_blank'>
                                            <img class='logo' style='vertical-align: bottom;' src='https://www.trilce.edu.pe/storage/static/upload/f1a997e0-7475-11ef-b8d4-991b3eefd868.png' alt='' width='500'>
                                        </a>
                                    </td>
                                </tr>
<!-- end ban 1 -->


<!-- start ban 2 -->
                                <tr style='padding: 0; margin: 0; background-color: #ffffff !important;'>
                                    <td style='vertical-align: bottom; padding: 0; margin: 0;'>
                                        <a href='https://www.messenger.com/t/AcademiaTrilce' target='_blank'>
                                            <img class='logo' style='vertical-align: bottom;' src='https://www.trilce.edu.pe/storage/static/upload/b331e730-6009-11ef-919d-ff747e968d4a.png' alt='' width='500'>
                                        </a>
                                    </td>
                                </tr>
<!-- end ban 2 -->

                              
<!-- start ban 3 -->
                                <tr style='padding: 0; margin: 0; background-color: #ffffff !important;'>
                                    <td style='vertical-align: bottom; padding: 0; margin: 0;'>
                                        <a href='tel:016198100' target='_blank'>
                                            <img class='logo' style='vertical-align: bottom;' src='https://www.trilce.edu.pe/storage/static/upload/b34a2b80-6009-11ef-ae1d-a737f0127ab9.png' alt='' width='500'>
                                        </a>
                                    </td>
                                </tr>
<!-- end ban 3 -->   
                              
                              
<!-- start ban 4 -->
                                <tr style='padding: 0; margin: 0; background-color: #ffffff !important;'>
                                    <td style='vertical-align: bottom; padding: 0; margin: 0;'>
                                        <a href='https://www.trilce.edu.pe/l/brochure-escolar-2024' target='_blank'>
                                            <img class='logo' style='vertical-align: bottom;' src='https://www.trilce.edu.pe/storage/static/upload/f1988110-7475-11ef-8279-6b160fcc01a8.png' alt='' width='500'>
                                        </a>
                                    </td>
                                </tr>
<!-- end ban 4 -->  
                              

                                      
                                <tr style='padding: 0;margin: 0 auto;  background-color: #ffffff;'>

                                    <td style='vertical-align: bottom; padding: 0; margin: 0 auto;'>
                                        
                                        <table style='margin: 0 auto; background-color: #fff; border-collapse: collapse; border-spacing: 0; color: #53565a; display: table; padding: 0; position: relative; text-align: center; vertical-align: top; width: 100%;'>
                                            <tbody style='margin: 0 auto; '>
                                                <tr style='padding: 0; text-align: center; vertical-align: top; margin: 0 auto; '>
                                                    <th style='
                                                            margin: 0 auto;
                                                            color: #0a0a0a;
                                                            font-family: Helvetica, Arial, sans-serif;
                                                            font-size: 16px;
                                                            font-weight: 400;
                                                            line-height: 1.3;
                                                            margin: 0 auto; 
                                                            padding: 0;
                                                            padding-bottom: 16px;
                                                            padding-left: 16px;
                                                            padding-right: 16px;
                                                            text-align: center;
                                                            width: 564px;
                                                        '>
                                                        <table style='margin: 0 auto;  border-collapse: collapse; border-spacing: 0; padding: 0; text-align: center; vertical-align: top; width: 100%;'>
                                                            <tbody><tr style='padding: 0; text-align: center; vertical-align: top; margin: 0 auto; '>
                                                                <th style='margin: 0 auto;  color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center;'>
                                                                    <p align='center' style='
                                                                            margin: 0 auto 10px; 
                                                                            color: #000;
                                                                            font-family: Helvetica, Arial, sans-serif;
                                                                            font-size: 0.9rem;
                                                                            font-weight: 700;
                                                                            line-height: 1.3;
                                                                            padding: 0;
                                                                            padding-top: 50px;
                                                                            text-align: center;
                                                                        '>
                                                                        SIGAMOS CONECTADOS
                                                                    </p>
                                                                    <table align='center' style='margin: 0 auto;  border-collapse: collapse; border-spacing: 0; padding: 0; text-align: center; vertical-align: top; width: auto !important;'>
                                                                        <tbody><tr style='padding: 0; margin: 0 auto;  text-align: center; vertical-align: top;'>
                                                                            <td style='
                                                                                    border-collapse: collapse !important;
                                                                                    color: #0a0a0a;
                                                                                    font-family: Helvetica, Arial, sans-serif;
                                                                                    font-size: 16px;
                                                                                    font-weight: 400;
                                                                                    line-height: 1.3;
                                                                                    margin: 0 auto; 
                                                                                    padding: 0;
                                                                                    text-align: center;
                                                                                    vertical-align: top;
                                                                                    word-wrap: break-word;
                                                                                '>
                                                                                <table style='border-collapse: collapse; border-spacing: 0; padding: 0; text-align: center; vertical-align: top; width: 100%; margin: 0 auto; '>
                                                                                    <tbody><tr style='margin: 0 auto;  padding: 0; text-align: center; vertical-align: top;'>
                                                                                        <th style='
                                                                                                margin: 0 auto;
                                                                                                color: #0a0a0a;
                                                                                                float: none;
                                                                                                font-family: Helvetica, Arial, sans-serif;
                                                                                                font-size: 16px;
                                                                                                font-weight: 400;
                                                                                                line-height: 1.3;
                                                                                                margin: 0 auto;
                                                                                                padding: 20px;
                                                                                                padding-left: 25px !important;
                                                                                                padding-right: 5px !important;
                                                                                                text-align: center;
                                                                                            '>
                                                                                            <a href='http://undefined' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                </a><a href='https://www.facebook.com/AcademiaTrilce/' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                    <img src='https://www.trilce.edu.pe/storage/static/upload/fea7f9c0-24c7-11ee-8af7-7b914d4d5f41.png' alt='' style='border: none; clear: both; display: block; max-width: 70%; outline: 0; text-decoration: none; width: auto;'>
                                                                                                </a>
                                                                                            
                                                                                        </th>
                                                                                        <th style='
                                                                                                margin: 0 auto;
                                                                                                color: #0a0a0a;
                                                                                                float: none;
                                                                                                font-family: Helvetica, Arial, sans-serif;
                                                                                                font-size: 16px;
                                                                                                font-weight: 400;
                                                                                                line-height: 1.3;
                                                                                                margin: 0 auto;
                                                                                                padding: 20px;
                                                                                                padding-left: 25px !important;
                                                                                                padding-right: 5px !important;
                                                                                                text-align: center;
                                                                                            '>
                                                                                            <a href='http://undefined' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                </a><a href='https://www.instagram.com/trilceacademia/' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                    <img src='https://www.trilce.edu.pe/storage/static/upload/69b520d0-24cd-11ee-b121-374c022ad1f9.png' style='border: none; clear: both; display: block; max-width: 70%; outline: 0; text-decoration: none; width: auto;'>
                                                                                                </a>
                                                                                            
                                                                                        </th>
                                                                                       
                                                                                        <th style='
                                                                                                margin: 0 auto;
                                                                                                color: #0a0a0a;
                                                                                                float: none;
                                                                                                font-family: Helvetica, Arial, sans-serif;
                                                                                                font-size: 16px;
                                                                                                font-weight: 400;
                                                                                                line-height: 1.3;
                                                                                                margin: 0 auto;
                                                                                                padding: 20px;
                                                                                                padding-left: 25px !important;
                                                                                                padding-right: 5px !important;
                                                                                                text-align: center;
                                                                                            '>
                                                                                            <a href='http://undefined' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                </a><a href='https://www.trilce.edu.pe/l/whatsapp' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                    <img src='https://www.trilce.edu.pe/storage/static/upload/693bc630-24cd-11ee-b56a-39bb75072068.png' alt='' style='border: none; clear: both; display: block; max-width: 70%; outline: 0; text-decoration: none; width: auto;'>
                                                                                                </a>
                                                                                            
                                                                                        </th>
                                                                                        <th style='
                                                                                                margin: 0 auto;
                                                                                                color: #0a0a0a;
                                                                                                float: none;
                                                                                                font-family: Helvetica, Arial, sans-serif;
                                                                                                font-size: 16px;
                                                                                                font-weight: 400;
                                                                                                line-height: 1.3;
                                                                                                margin: 0 auto;
                                                                                                padding: 20px;
                                                                                                padding-left: 25px !important;
                                                                                                padding-right: 5px !important;
                                                                                                text-align: center;
                                                                                            '>
                                                                                            <a href='http://undefined' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                </a><a href='https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                    <img src='https://www.trilce.edu.pe/storage/static/upload/6953ebb0-24cd-11ee-951b-0b9ec14a9bbd.png' alt='' style='border: none; clear: both; display: block; max-width: 70%; outline: 0; text-decoration: none; width: auto;'>
                                                                                                </a>
                                                                                            
                                                                                        </th>
                                                                                        <th style='
                                                                                                margin: 0 auto;
                                                                                                color: #0a0a0a;
                                                                                                float: none;
                                                                                                font-family: Helvetica, Arial, sans-serif;
                                                                                                font-size: 16px;
                                                                                                font-weight: 400;
                                                                                                line-height: 1.3;
                                                                                                margin: 0 auto;
                                                                                                padding: 20px;
                                                                                                padding-left: 25px !important;
                                                                                                padding-right: 5px !important;
                                                                                                text-align: center;
                                                                                            '>
                                                                                            <a href='http://undefined' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                </a><a href='https://www.tiktok.com/@trilce.academia' style='margin: 0; color: #f4633a; font-family: Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: center; text-decoration: none;' target='_blank'>
                                                                                                    <img src='https://www.trilce.edu.pe/storage/static/upload/696bda20-24cd-11ee-a76f-0d3a358f6264.png' alt='' style='border: none; clear: both; display: block; max-width: 70%; outline: 0; text-decoration: none; width: auto;'>
                                                                                                </a>
                                                                                            
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </th>
                                                                <th style='margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 1.3; margin: 0; padding: 0 !important; text-align:center; width: 0;'></th>
                                                            </tr>
                                                        </tbody></table>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        <table style='background-color:#fff;border-collapse:collapse;border-spacing:0;color:#53565a;display:table;padding:0;position:relative;text-align:center;vertical-align:top;width:100%; margin: 0 auto;'>
                                                <tbody style='margin: 0 auto;'>
                                                    <tr style='padding:0;text-align:center;vertical-align:top; margin: 0 auto;'>
                                                    <th style='margin: 0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:center;width:564px'>
                                                        <table style='border-collapse:collapse;border-spacing:0;padding:0;text-align:center;vertical-align:top;width:100%; margin: 0 auto;'>
                                                            <tbody><tr style='padding:0;text-align:center;vertical-align:top; margin: 0 auto;'>
                                                                <th style='color:#000;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;text-align:center'>
                                                                <p style='Margin:0;Margin-bottom:10px;color:#333;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>&copy; Trilce 2024. Todos los derechos reservados.<br>Tel&eacute;fono: 6198 100</p>
                                                                </th>
                                                                <th style='Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:center;width:0'></th>
                                                            </tr>
                                                        </tbody></table>
                                                    </th>
                                                    </tr>
                                                </tbody>
                                        </table>
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
</html>
";
 
$mail->IsHTML(true);  

if (!$mail->send()) 
{
    echo 'Mailer Error: '. $mail->ErrorInfo;
} 
else 
{
    //echo 'Message sent!';
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
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
                    <div class="col-lg-6 col-xs-6 col-lg-6-tab contenedor_mobile_logo">
						<a href="https://www.trilce.edu.pe/academia">
                            <img src="images/academia/logo.svg" alt="Logo Academia" class="pad_logo">
						</a>
                    </div>
                    <div class="col-lg-6 col-xs-6 col-lg-6-tab tair contenedor_mobile_iconos pad_iconos">
                        <a href="https://www.trilce.edu.pe/academia">
                            <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                        </a>
                        <a href="https://www.trilce.edu.pe/l/whatsapp-academias" target="_blank">
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
            <div class="col-lg-6 fondo_landing full_height_2">
            </div>
            <div class="col-lg-6 pt-4 fondo_registro_2021 full_height_2">
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
                            <a href="https://www.trilce.edu.pe/l/whatsapp-academias" target="_blank">
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
                        <h2 class="usted_eligio">Usted eligió:<br><b class="usted_bold">Preparación ESCOLAR</b></h2>
                        <p class="enviado">Hemos enviado la información sobre el ciclo al correo que has registrado. Por favor, revisa tu bandeja de entrada o de spam.</p>
                        <button type="submit" class="btn btn-primary btn-block texto_solicita" onclick="location.href='index.php';">Aceptar</button>
                    </div>
                    <h1 class="matricula_aqui">¡Inscríbete aquí!</h1>
                    <p class="comunicate">Comunícate con nosotros por los siguientes medios:</p>
                    <div class="row pd_l50 vista_d_m">
                        <div class="col-lg-2 col-xs-4 centrado w_orden ">
                            <a href="https://www.trilce.edu.pe/l/whatsapp-escolar" target="_blank">
                                <img src="images/academia/whatsapp_f.svg" alt="Logo Academia" class="icono_academia     centrado_imagen"><br>
                                <span class="texto_icono_academia">WhatsApp</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-xs-4 centrado w_orden">
                            <a href="https://www.messenger.com/t/AcademiaTrilce" target="_blank">
                                <img src="images/academia/facebook_f.svg" alt="Logo Academia" class="icono_academia     centrado_imagen"><br>
                                <span class="texto_icono_academia">Facebook</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-xs-4 centrado w_orden ">
                            <a href="tel:016198100">
                                <img src="images/academia/telefono_f.svg" alt="Logo Academia" class="icono_academia     centrado_imagen"><br>
                                <span class="texto_icono_academia">6198 100</span>
                            </a>
                        </div>
                        <div class="col-lg-6 ">
                        </div>
                    </div>
                    <div class="row pd_l50 vista_tablet">
                        <div class="col-lg-3 col-lm-3 wd_30">
                        </div>
                        <div class="col-lg-2 col-xs-4 centrado w_orden ">
                            <a href="https://www.trilce.edu.pe/l/whatsapp-escolar" target="_blank">
                                <img src="images/academia/whatsapp_f.svg" alt="Logo Academia" class="icono_academia     centrado_imagen"><br>
                                <span class="texto_icono_academia">WhatsApp</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-xs-4 centrado w_orden">
                            <a href="https://www.messenger.com/t/AcademiaTrilce" target="_blank">
                                <img src="images/academia/facebook_f.svg" alt="Logo Academia" class="icono_academia     centrado_imagen"><br>
                                <span class="texto_icono_academia">Facebook</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-xs-4 centrado w_orden ">
                            <a href="tel:016198100">
                                <img src="images/academia/telefono_f.svg" alt="Logo Academia" class="icono_academia     centrado_imagen"><br>
                                <span class="texto_icono_academia">6198 100</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-lm-3 wd_30">
                        </div>
                    </div>
                    <p class="texto_footer ml_22 mb_80">© 2024 Trilce. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="more_information md-hide sm-hide">
    	<span class="more_information__call">
      		<a href="https://www.trilce.edu.pe/l/whatsapp-escolar" target="_blank" style="color: #fff" class="texto_foot"><i class="fa fa-whatsapp"></i> ¡Inscríbete aquí! </a>
    	</span>
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