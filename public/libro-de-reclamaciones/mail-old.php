<?php
session_start();

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

$codigo             =  $_SESSION["codigo"];
$nombres_apellidos  =  $_SESSION["nombres_apellidos"];
$correo             =  $_SESSION["correo"];
$date               =  date("d/m/Y");


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

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'informes@trilce.edu.pe';

//Password to use for SMTP authentication
$mail->Password = 'fqveshzgtfhujoxe';

//Set who the message is to be sent from
$mail->setFrom('informes@trilce.edu.pe', 'Libro de reclamaciones Trilce');

//Set an alternative reply-to address
/* $mail->addReplyTo('replyto@example.com', 'First Last'); */

//Set who the message is to be sent to
/* $mail->addAddress('jastuvilca@trilce.edu.pe', 'Javier Elias'); */
$mail->addAddress("$correo", "$nombres_apellidos");
//$mail->addCC('librodereclamaciones@trilce.edu.pe');
$mail->addCC('lacano@trilce.edu.pe');
//$mail->addBCC('ccatter@trilce.edu.pe');

//Set the subject line
/* $mail->Subject = 'Registro de Reclamo/Queja - Organización   Educativa Trilce'; */

$subject = "Registro de Reclamo/Queja - Organización   Educativa Trilce";
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
                               <img src='https://www.trilce.edu.pe/storage/static/upload/34aab550-19eb-11ef-beef-61f298c31115.png' width='600'  height='283'>
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
/* $mail->addAttachment('images/phpmailer_mini.png'); */

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