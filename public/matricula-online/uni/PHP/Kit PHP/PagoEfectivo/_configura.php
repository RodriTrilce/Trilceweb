<?php
/*

PASO 1: Grabar datos provenientes del formulario
PASO 2: Cargar variables en el formulario enviado

*/
	global $archivoConfiguracion;
	global $accionMensajeCorrecto;
	global $accionMensajeIncorrecto;

	$archivoConfiguracion ='configura.json';

	$accionMensajeCorrecto = '';
	$accionMensajeIncorrecto = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	//PASO 1
	// Obtenemos los valores del formulario
	$configuracionPOST = $_POST;

	// convertimos el contenido de lo remitido a UTF-8
	if (is_array($configuracionPOST)) 
	{
        foreach ($configuracionPOST as $clave => $valor) 
		{
            $configuracionPOST[$clave] = mb_convert_encoding($valor, "UTF-8", "auto");
		}
    }
	
	// Graba configuración en archivo JSON "configura.json"
	$resultadoGrabacion = file_put_contents($archivoConfiguracion,json_encode($configuracionPOST, JSON_UNESCAPED_SLASHES));
	
	unset($_POST); //Elimina variables POST

	//Define mensaje a mostrar en pantalla
	if($resultadoGrabacion!=false)
	{ 
	  $accionMensajeCorrecto ="La configuración se guardó satisfactoriamente"; 
	} 
	else
	{ 
	  $accionMensajeIncorrecto ="La configuración no se guardó";
	}

	//PASO 2
	//Cargamos las variables que se mostrarán en la página "configura.php"
	cargarVariables();

} 
else // En caso exista el archivo JSON, cargar las variables
{
	cargarVariables();
}

function cargarVariables()
{
	try {
		global $configuracion;
		$configuracion = array();
		
		$existeArchivo = file_exists($GLOBALS['archivoConfiguracion']);
	
		if ($existeArchivo) 
		{
			// Lectura de archivo desde "configura.json"
			$configuracion = json_decode(file_get_contents($GLOBALS['archivoConfiguracion']), true);
		}
	} catch (Exception $e) {
		date_default_timezone_set("America/Lima");//Zona horaria de Peru
        $tiempoLog = date("d-m-Y (H:i:s)");
        $file = fopen("log.txt", "a");
        fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
        fclose($file);
	}

}

//Cabecera con configuración de Caché y seguridad
include "_cabecera.php";

?>