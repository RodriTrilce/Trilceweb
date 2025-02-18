<?php

try {
	/*
	Paso 1: Obtener datos del archivo de configuración
	Paso 2: Generar el PE-Signature

	*/

	global $notifica;
	global $configuracion;
	global $RequesBodyVacio;
	global $archivoConfiguracion;
	global $PESignatureGenerado;
	global $accionMensajeCorrecto;
	global $accionMensajeIncorrecto;

	$accionMensajeCorrecto = '';
	$accionMensajeIncorrecto = '';
	$archivoConfiguracion ='configura.json';

	$notifica = array();
	$configuracion = array();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{

	$notifica = $_POST;

	$existeArchivo = file_exists($GLOBALS['archivoConfiguracion']);

	if ($existeArchivo) 
	{
	// Paso 1: Obtener datos del archivo de configuración
		
		$configuracion = json_decode(file_get_contents($GLOBALS['archivoConfiguracion']), true);
		
	// Paso 2: Generar el PE-Signature

		// Que consiste en generar un cifrado que utiliza el método HMAC, mediante un cifrado, en este caso el secretKey
		$PESignatureGenerado = hash_hmac('sha256', $notifica['requestBody'] , $configuracion['SecretKey'] );

		unset($_POST);

		// Preparación de respuesta para servidor
		if( $notifica['PE-Signature']==$PESignatureGenerado )
		{
			$accionMensajeCorrecto = 'El PE-Signature es correcto ';	
		}
		else
		{
			$accionMensajeIncorrecto ='El PE-Signature es incorrecto ';		
		}
	
	
	}
	}

	$RequesBodyVacio = "{".
	"\"eventType\" : \"cip.paid\","
	."\"operationNumber\" : \"\","
	."\"data\" : {"
	."\"cip\" : \"\","
	."\"currency\" : \"\","
	."\"amount\" : }"
	."}";


	include "_cabecera.php";

} catch (Exception $e) {
	date_default_timezone_set("America/Lima");//Zona horaria de Peru
	$tiempoLog = date("d-m-Y (H:i:s)");
	$file = fopen("log.txt", "a");
	fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
	fclose($file);
}

?>