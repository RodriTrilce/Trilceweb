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
/* use Dompdf\Dompdf;
use Dompdf\Options; */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$nombre     = $_SESSION["nombre"];
$dni        = $_SESSION["dni"];
$email      = $_SESSION["email"];
$terminos   = $_SESSION["terminos"];
$time       = $_SESSION["time"];

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'informes@trilce.edu.pe';
$mail->Password = 'qjjggnabgemcvkrn';
$mail->setFrom('informes@trilce.edu.pe', 'Academias Trilce');
$mail->addAddress("$email", "$nombre");
$subject = "Condiciones Económicas";
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
                                        <a href='https://www.trilce.edu.pe/l/condiciones-economicas-academias' target='_blank'>
                                            <img class='logo' style='vertical-align: bottom;' src='https://www.trilce.edu.pe/storage/static/upload/6e146370-e307-11ee-b1cd-17e23f211ee3.png' alt='' width='500'>
                                        </a>
                                    </td>
                                </tr>
<!-- end ban 1 -->


                                                          
                                      
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
                                                                <p style='Margin:0;Margin-bottom:10px;color:#000;font-family:Helvetica,Arial,sans-serif;font-size:.8rem;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;padding-top:10px;text-align:center'>&copy; Trilce 2024. Todos los derechos reservados.<br>Tel&eacute;fono: 6198 100</p>
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
    header("Location: https://www.trilce.edu.pe/terminos-condiciones-academia/gracias.html");
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