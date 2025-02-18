<?php

try {
	/*

	PASO 1: Obtener los datos del cuerpo de request
	PASO 2: Obtener datos de cabecera
	PASO 3: Leer datos de archivo de configuración

	*/

	global $valida;
	global $configuracion;
	global $cabeceraRequest;
	global $cuerpoRequest;

	$archivoValidaciones ='validaciones.json';
	$errorValidaciones ='errorValidaciones.json';

	$archivoConfiguracion ='configura.json';

	include "_cabecera.php";


	if ($_SERVER['REQUEST_METHOD'] == 'GET') 
	{
		//Grabación de log de errores
		file_put_contents($errorValidaciones, "Error, tipo GET " . json_encode( $_GET , JSON_UNESCAPED_SLASHES) , FILE_APPEND | LOCK_EX  );
		
		//Enviar código 500 de error
		header('HTTP/1.1 500 Internal Server Error');
		http_response_code (500);	
	}


	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		//PASO 1: Obtener los datos del contenido del request
		$cuerpoRequest = file_get_contents('php://input');		
			
		if(empty($cuerpoRequest))
		{	
				//Grabación de log de errores
				file_put_contents($errorValidaciones, "Error, cuerpo vacio " . json_encode($_POST , JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) , FILE_APPEND | LOCK_EX  );
			
				//Enviar código 500 de error
				header('HTTP/1.1 500 Internal Server Error');
				http_response_code (500);	
		}
		else
		{ 
			//PASO 2: Obtener datos de cabecera
			$cabeceraRequest =getallheaders();
			
			
			// Convertir a UTF-8
			if (is_array($cabeceraRequest)) 
			{
				foreach ($cabeceraRequest as $clave => $valor) 
				{
					$cabeceraRequest[$clave] = mb_convert_encoding($valor, "UTF-8", "auto");
				}
			}	

			
			//PASO 3: Leer datos de archivo de configuración
			$configuracion = array();

			$existeArchivo = file_exists($GLOBALS['archivoConfiguracion']);

			if ($existeArchivo) 
			{
				$configuracion = json_decode(file_get_contents($GLOBALS['archivoConfiguracion']), true);
			}
			
			//Generar PE-Signature
			$PESignatureGenerado = hash_hmac('sha256', $cuerpoRequest , $configuracion['SecretKey'] ); 
			
			unset($_POST);

			//Comparación de cifrado de PE-Signature
			if( $cabeceraRequest['PE-Signature'] == $PESignatureGenerado )
			{
				//Enviar código 200 de correcto
				header('HTTP/1.1 200 OK');
				http_response_code(200);
			}
			else
			{
				//Grabación de log de errores
				file_put_contents($archivoValidaciones, "Error cabecera: " . json_encode($cabeceraRequest, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) , FILE_APPEND | LOCK_EX  );
				file_put_contents($archivoValidaciones, "Error cuerpo: " . json_encode($cuerpoRequest, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) , FILE_APPEND | LOCK_EX  );			
				
				//Enviar código 500 de error
				header('HTTP/1.1 500 Internal Server Error');
				http_response_code (500);
			}	

		}	
	}

} catch (Exception $e) {
	date_default_timezone_set("America/Lima");//Zona horaria de Peru
	$tiempoLog = date("d-m-Y (H:i:s)");
	$file = fopen("log.txt", "a");
	fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
	fclose($file);
}

?>