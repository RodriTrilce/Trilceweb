<?php

try {
	/*

	PASO 1: Cargar datos de configuración
	PASO 2: Obtener token de autorización
	PASO 3: Obtener CIP

	*/

	global $rutaAutorizacion;
	global $rutaCIP;
	global $archivoConfiguracion;
	global $configuracion;
	global $genera;	
	global $autorizacion;
	global $cip;
	global $enlaceCIP;
	global $esPostBack;


	$archivoConfiguracion ='configura.json';
	$archivoCips ='cips.json';

	$configuracion = array();

	// PASO 1: Cargar datos de configuración
	$existeArchivo = file_exists($GLOBALS['archivoConfiguracion']);

	if ($existeArchivo) 
	{
		$configuracion = json_decode(file_get_contents($GLOBALS['archivoConfiguracion']), true);
	}

		$esPostBack=0;

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($configuracion) && is_array($configuracion) ) 
	{

		$esPostBack=1;

		$genera = array();
		$genera  = $_POST;
		
	// PASO 2: Obtener token de autorización	
		
		//Concatenar 'authorizations' a ruta de servidor
		$autorizacionRuta = $configuracion['ServidorPagoEfectivo'].'authorizations';
		//Concatenar 'cips' a ruta de servidor
		$CIPRuta = $configuracion['ServidorPagoEfectivo'].'cips';	
		
		// Fecha en formato  DATE_ATOM
		$fechaAutorizacion= date_create('now', timezone_open('America/Lima'));
		
		// Hash de Parámetros de autorización
		$autorizacionHash = hash ( "sha256" , 
		(array_key_exists('IDComercio', $configuracion) ? $configuracion['IDComercio'] : '' ) . "." .
		(array_key_exists('AccessKey', $configuracion) ? $configuracion['AccessKey'] : '' ) . "." .
		(array_key_exists('SecretKey', $configuracion) ? $configuracion['SecretKey'] : '' ) . "." .
		date_format($fechaAutorizacion,DATE_ATOM)
		);

		
		//Parámetros de autorización
		$autorizacionCuerpo = "{".
		"\"accessKey\": \"". (array_key_exists('AccessKey', $configuracion) ? $configuracion['AccessKey'] : '' ) ."\",".
		"\"idService\": ". (array_key_exists('IDComercio', $configuracion) ? $configuracion['IDComercio'] : '' ) .",".
		"\"dateRequest\": \"". date_format($fechaAutorizacion,DATE_ATOM) ."\",".
		"\"hashString\": \"". $autorizacionHash ."\"".
		"}";

		// Obtención de token de autorización
		$autorizacionRespuesta = file_get_contents($autorizacionRuta, null, stream_context_create(array(
		'http' => array(
		'method' => 'POST',
		'header' => 'Content-Type: application/json' . "\r\n"
		. 'Content-Length: ' . strlen($autorizacionCuerpo) . "\r\n",
		'content' => $autorizacionCuerpo,
		),
		)));
		
		
		$autorizacion = json_decode($autorizacionRespuesta);
		

		// si parámetro de respuesta de autorización es correcto
		if( $autorizacion->code == "100" )
		{

	// PASO 3: Obtener CIP

			$fechaAutorizacion->add(new DateInterval('PT'. $configuracion['TiempoExpiracionPago'] .'H'));
			$genera['dateExpiry'] = date_format($fechaAutorizacion,DATE_ATOM);
			$genera['currency'] = $configuracion['TipoMoneda'];
			$genera['amount'] = $configuracion['Monto'];
			
			
			// Obtener CIP
			$respuestaCIP = file_get_contents($CIPRuta, null, stream_context_create(array(
			'http' => array(
			'method' => 'POST',
			'header' => 'Content-Type: application/json' . "\r\n"
			.'Accept-Language: es-PE' . "\r\n"
			.'Origin: web' . "\r\n"
			.'Content-Type: application/json' . "\r\n"
			.'Authorization: Bearer '. $autorizacion->data->token . "\r\n",
			'content' => json_encode($genera, JSON_UNESCAPED_SLASHES),
			),
			)));


			//Respuesta de consulta CIP
			$cip = json_decode($respuestaCIP);

			if( $cip->code == "100")
			{
				$enlaceCIP = $cip->data->cipUrl;
				
				//Grabamos CIPs generados
				$resultadoGrabacion = file_put_contents($archivoCips, json_encode($cip->data, JSON_UNESCAPED_SLASHES) , FILE_APPEND | LOCK_EX  );
				
			}
		}

	} // fin de POST

	include "_cabecera.php";

	//En caso el modo de integración sea Redireccionar, no se completa la carga de la página sino, se redirecciona a la ruta remitida.
	if( isset($enlaceCIP) && isset($configuracion['ModoIntegracion']) && $configuracion['ModoIntegracion']=='RED')
	{ 
		header( "Location: ". $enlaceCIP );
	}

} catch (Exception $e) {
	date_default_timezone_set("America/Lima");//Zona horaria de Peru
	$tiempoLog = date("d-m-Y (H:i:s)");
	$file = fopen("log.txt", "a");
	fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
	fclose($file);
}

?>
