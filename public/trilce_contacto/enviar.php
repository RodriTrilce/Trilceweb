<?php

// Conexion BD
$servername = "localhost";
$username   = "root";
$password   = "cYPS-m=gXoZVE6HkH0{6";
$dbname     = "web_colegio_2021";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

$correo_data 			= $_POST['correo'];
$nombres_apellidos_data = $_POST['nombres_apellidos'];
$telefono_data 			= $_POST['telefono'];
$consulta_data 			= $_POST['consulta'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
	
define("RECAPTCHA_V3_SECRET_KEY", '6LeReKwfAAAAAOYbBlzLJFSnFGoyxD78Xu0IZsxJ');

if (isset($_POST['correo']) && $_POST['correo'])
{
	$correo = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
}
elseif (isset($_POST['nombres_apellidos']) && $_POST['nombres_apellidos'])
{
	$nombres_apellidos = filter_var($_POST['nombres_apellidos'], FILTER_SANITIZE_STRING);
}
elseif (isset($_POST['telefono']) && $_POST['telefono'])
{
	$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
}
elseif (isset($_POST['consulta']) && $_POST['consulta'])
{
	$consulta = filter_var($_POST['consulta'], FILTER_SANITIZE_STRING);
}
else
{
	// set error message and redirect back to form...
	header('location: contact.html');
	exit;
}

$token 	= $_POST['token'];
$action = $_POST['action'];

// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

// verify the response
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5)
{
	// valid submission
	// go ahead and do necessary stuff

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try 
	{
		//Server settings
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      	//Enable verbose debug output
		$mail->isSMTP();                                            	//Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     		//Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   	//Enable SMTP authentication
		$mail->Username   = 'atencionalcliente@trilce.edu.pe';			//SMTP username
		$mail->Password   = 'TR1LC32022';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            	//Enable implicit TLS encryption
		$mail->Port       = 587;                                    	//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('atencionalcliente@trilce.edu.pe', 'Colegio Trilce - Contacto');
		$mail->addAddress('atencionalcliente@trilce.edu.pe', 'Contacto Colegio');     //Add a recipient
		//$mail->addAddress('ellen@example.com');               //Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Contacto - Colegio Trilce';
		$mail->Body    = 'Nombres y Apellidos: '.$nombres_apellidos_data.'<br>
		Correo: '.$correo_data.'<br>
		Teléfono: '.$telefono_data.'<br>
		Consulta: '.$consulta_data.'';
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		//echo 'Message has been sent';
		
		//Insertar data
		$conn = new mysqli($servername, $username, $password, $dbname);
		mysqli_set_charset($conn, 'utf8');

		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO contacto_colegio (nombres_apellidos, correo, telefono, consulta, fecha_registro) 
		VALUES ('$nombres_apellidos_data','$correo_data', '$telefono_data', '$consulta_data', now())";

		if ($conn->query($sql) === TRUE)
		{
			//echo "New record created successfully";
		}
		else 
		{
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		header('location: contact.html');
	}
	catch (Exception $e) 
	{
		echo "No se pudo enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
	}
} 
else 
{
	// spam submission
	// show error message
}
?>