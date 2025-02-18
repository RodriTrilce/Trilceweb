<?php include "_notifica.php" ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<link rel="stylesheet" href="res/css/generico.css" media="none" onload="if(media!='all')media='all'">
<noscript><link rel="stylesheet" href="res/css/generico.css"></noscript>
<title>Notificación CIP</title>
</head>
<body>

<!--página inicio-->
<div class="pagina" >

	<div class="barraTitulo" ><!--barraTítulo inicio-->
		<div class="alineado margenIzquierdo10 margenSuperior10" ><img src="res/img/logoPagoEfectivo.png" /></div>
		<div class="lineaSeparadoraVertical alineado margenIzquierdo20" ></div>
		<div class="titulo alineado" >Notificación CIP</div>
	</div><!--barraTítulo fin-->
	
	<div class="barraMenu" ><!--barraMenu inicio-->

	<div class="itemMenu margenIzquierdo5 margenSuperior20" >CÓDIGO DE PAGO</div>

	<div class="itemMenu" >
	<img src="res/img/vinetaCruz.png" class="vinetaItemMenu alineado margenIzquierdo10 margenSuperior5" />
	<div class="alineado margenIzquierdo5 margenSuperior5" ><a href="genera.php">Generar CIP</a></div>
	</div>

	<div class="itemMenu itemMenuSeleccionado" >
	<img src="res/img/vinetaSiguiente.png" class="vinetaItemMenu alineado margenIzquierdo10 margenSuperior5" />
	<div class="alineado margenIzquierdo5 margenSuperior5" >Notificación CIP</div>	
	</div>

	<div class="itemMenuPie" >	
	<img src="res/img/vinetaAyuda.png" class="vinetaItemMenuPie alineado margenIzquierdo10 margenSuperior5" />
	<div class=" alineado margenIzquierdo5 margenSuperior5" ><a href="https://centraldeayuda.pagoefectivo.pe/hc/es">Ayuda</a></div>
	</div>
	
	<div class="itemMenuPie " >			
	<img src="res/img/vinetaConfiguracion.png" class="vinetaItemMenuPie alineado margenIzquierdo10 margenSuperior5" />			
	<div class="alineado margenIzquierdo5 margenSuperior5" ><a href="configura.php">Configuración</a></div>			
	</div>
	
		<div class="siguienteLinea lineaMenu" ></div>	
		
	<div class="alineado" >	
	<img src="res/img/vinetaAtras.png" class="vinetaInferiorDerechaMenuPie alineado" />
	</div>
	
	</div><!--barraMenu fin-->

	<div class="cuerpo" ><!--cuerpo inicio-->
	
	  <div id="accionMensaje" ></div>
	  <form id="notificaFormulario" name="notificaFormulario" action="<?=$_SERVER['PHP_SELF']; ?>" method="post"  >
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >PE-Signature (*)</div>
		<input id="PE-Signature" name="PE-Signature" value="<?=(isset($notifica['PE-Signature']) && array_key_exists('PE-Signature', $notifica) ? $notifica['PE-Signature'] : '' );  ?>"
		type="text" class="cajaTexto ancho500" placeholder="Data" />
		<div id="PE-SignatureMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >Request Body (*)</div>
		<textarea id="requestBody" name="requestBody" type="text" class="cajaTexto ancho500 alto150" placeholder="Data" ><?php
		
		print (isset($notifica['PE-Signature']) && array_key_exists("requestBody", $notifica) ? $notifica["requestBody"] : $RequesBodyVacio );  
			
		?></textarea>	
		<div id="requestBodyMensaje" class="mensajeRequerido" ></div>		
		</div>
	
		<div class="siguienteLinea" >
		<div class="alineado margenIzquierdo40 " >
		<button id="btnLimpiar" name="btnLimpiar" type="button" class="botonSecundario ancho150 margenSuperior30" >Limpiar</button>			
		</div>		
		
		<div class="alineado margenIzquierdo150 " >
		<button id="btnValidar" name="btnValidar" type="button" class="botonPrincipal ancho150 margenSuperior30" >Validar</button>			
		</div>	
		
		</div>	

</form>	
	
</div><!--cuerpo fin-->		
	
</div><!--página fin-->

<script async type="text/javascript" src="res/jsc/notifica.js"></script>

<script type="text/javascript">

<?php  
	try {
		if(strlen($accionMensajeCorrecto)>0)
		{
			echo "document.getElementById('accionMensaje').innerHTML ='". $accionMensajeCorrecto ."';";
			echo "document.getElementById('accionMensaje').classList.add('mensajeCorrecto');";
			echo "document.getElementById('accionMensaje').setAttribute('class', 'mensajeCorrecto');";
			echo "document.getElementById('accionMensaje').className = 'mensajeCorrecto';";
	
		} 
		if(strlen($accionMensajeIncorrecto)>0)
		{
			echo "document.getElementById('accionMensaje').innerHTML ='". $accionMensajeIncorrecto ."';";
			echo "document.getElementById('accionMensaje').classList.add('mensajeIncorrecto');";
			echo "document.getElementById('accionMensaje').setAttribute('class', 'mensajeIncorrecto');";
			echo "document.getElementById('accionMensaje').className = 'mensajeIncorrecto';";	
		}
	} catch (Exception $e) {
		date_default_timezone_set("America/Lima");//Zona horaria de Peru
        $tiempoLog = date("d-m-Y (H:i:s)");
        $file = fopen("log.txt", "a");
        fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
        fclose($file);
	}

?>

</script>


</body>
</html>