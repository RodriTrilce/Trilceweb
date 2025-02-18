<?php include "_configura.php" ?>
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
<title>Configuración: Pasarela de PagoEfectivo</title>
</head>
<body>

<div class="pagina" >
<!--página inicio-->

	<div class="barraTitulo" >
	<!--barraTítulo inicio-->
		<div class="alineado margenIzquierdo10 margenSuperior10" ><img src="res/img/logoPagoEfectivo.png" /></div>
		<div class="lineaSeparadoraVertical alineado margenIzquierdo20" ></div>
		<div class="titulo alineado" >Configuración: "Pasarela de PagoEfectivo"</div>
	</div>
	<!--barraTítulo fin-->
	
	<div class="barraMenu" ><!--barraMenu inicio-->

	<div class="itemMenu margenIzquierdo5 margenSuperior20" >CÓDIGO DE PAGO</div>

	<div class="itemMenu" >
	<img src="res/img/vinetaCruz.png" class="vinetaItemMenu alineado margenIzquierdo10 margenSuperior5" />
	<div class="alineado margenIzquierdo5 margenSuperior5" ><a href="genera.php">Generar CIP</a></div>
	</div>

	<div class="itemMenu" >
	<img src="res/img/vinetaSiguiente.png" class="vinetaItemMenu alineado margenIzquierdo10 margenSuperior5" />
	<div class="alineado margenIzquierdo5 margenSuperior5" ><a href="notifica.php">Notificación CIP</a></div>	
	</div>

	<div class="itemMenuPie" >	
	<img src="res/img/vinetaAyuda.png" class="vinetaItemMenuPie alineado margenIzquierdo10 margenSuperior5" />
	<div class=" alineado margenIzquierdo5 margenSuperior5" ><a href="https://centraldeayuda.pagoefectivo.pe/hc/es">Ayuda</a></div>
	</div>
	
	<div class="itemMenuPie itemMenuSeleccionado" >			
	<img src="res/img/vinetaConfiguracion.png" class="vinetaItemMenuPie alineado margenIzquierdo10 margenSuperior5" />			
	<div class="alineado margenIzquierdo5 margenSuperior5" >Configuración</div>			
	</div>
	
		<div class="siguienteLinea lineaMenu" ></div>	
		
	<div class="alineado" >	
	<img src="res/img/vinetaAtras.png" class="vinetaInferiorDerechaMenuPie alineado" />
	</div>
	
	</div><!--barraMenu fin-->

	<div class="cuerpo" ><!--cuerpo inicio-->
	
	<div id="accionMensaje" ></div>
	
	<form action="<?=$_SERVER['PHP_SELF']; ?>" method="post" name="configuraFormulario" id="configuraFormulario" autocomplete="off" > 
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >Servidor PagoEfectivo (*)</div>
		<input name="ServidorPagoEfectivo" id="ServidorPagoEfectivo" value="<?=(array_key_exists('ServidorPagoEfectivo', $configuracion) ? $configuracion['ServidorPagoEfectivo'] : '' );  ?>" 
		type="text" class="cajaTexto ancho500" placeholder="Url del servidor de PagoEfectivo (Testing/ Producción)" required />
		<div id="ServidorPagoEfectivoMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >AccessKey (*)</div>
		<input name="AccessKey" id="AccessKey" value="<?=(array_key_exists('AccessKey', $configuracion) ? $configuracion['AccessKey'] : '' );  ?>"
		type="text" class="cajaTexto ancho500" placeholder="AccessKey del servidor de PagoEfectivo (Testing/ Producción)" required />	
		<div id="AccessKeyMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >SecretKey (*)</div>
		<input name="SecretKey" id="SecretKey" value="<?=(array_key_exists('SecretKey', $configuracion) ? $configuracion['SecretKey'] : '' );  ?>" 
		type="text" class="cajaTexto ancho500" placeholder="SecretKey del servidor de PagoEfectivo (Testing/ Producción)" required />	
		<div id="SecretKeyMensaje" class="mensajeRequerido" ></div>
		</div>
		
			<hr class="lineaSeparadoraHorizontal" />
			<br/>

		<div class="siguienteLinea margenInferior5" >			
		<div class="etiqueta" >ID del Comercio (*)</div>
		<input name="IDComercio" id="IDComercio" value="<?=(array_key_exists('IDComercio', $configuracion) ? $configuracion['IDComercio'] : '' );  ?>"  
		type="number" class="cajaTexto ancho500" placeholder="Ingresa tu ID" required />	
		<div id="IDComercioMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >Nombre del Comercio (*)</div>
		<input name="NombreComercio" id="NombreComercio" value="<?=(array_key_exists('NombreComercio', $configuracion) ? $configuracion['NombreComercio'] : '' );  ?>" 
		type="text" class="cajaTexto ancho500" placeholder="Nombre del comercio para el concepto de pago" required />	
		<div id="NombreComercioMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >Email del Comercio (*)</div>
		<input name="EmailComercio" id="EmailComercio" value="<?=(array_key_exists('EmailComercio', $configuracion) ? $configuracion['EmailComercio'] : '' );  ?>" 
		type="email" class="cajaTexto ancho500" placeholder="Email del comercio para envío de comunicaciones" required onkeypress="verificarMail(this)"/>	
		<div id="EmailComercioMensaje" class="mensajeRequerido" ></div>		
		</div>
		
			<hr class="lineaSeparadoraHorizontal" />
			<br/>

		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >Modo de Integración (*)</div>
		<select name="ModoIntegracion" id="ModoIntegracion" class="combo ancho500" 
		 required >
        <option value="" disabled selected hidden >Selecciona la modalidad de integración</option>
        <option value="IFR" >Iframe</option>
        <option value="RED" >Redirecciona</option>			
		</select>
		<div  id="ModoIntegracionMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="siguienteLinea margenInferior5" >
		<div class="etiqueta" >Tiempo de expiración del Pago (*)</div>
		<div class="alineado " >
		<input type="number" name="TiempoExpiracionPago" id="TiempoExpiracionPago" value="<?=(array_key_exists('TiempoExpiracionPago', $configuracion) ? $configuracion['TiempoExpiracionPago'] : '' );  ?>" 
		class="cajaTexto ancho300" placeholder="000" required /><div class="mensajePlaceholder" >Horas</div>	
		<div id="TiempoExpiracionPagoMensaje" class="mensajeRequeridoAlterno" ></div>	</div>
		</div>
		
		<div class="siguienteLinea margenInferior5" >		
		<div class="etiqueta" >País (*)</div>
		<select name="Pais" id="Pais"  class="combo ancho500" required >
        <option value="" disabled selected hidden >País del servicio</option>
        <option value="PER" >Perú</option>
        <option value="ECU" >Ecuador</option>		
		</select>
		<div id="PaisMensaje" class="mensajeRequerido" ></div>		
		</div>
		
		<div class="alineado margenInferior5" >
		<div class="etiqueta" >Tipo de moneda (*)</div>
		<select name="TipoMoneda" id="TipoMoneda" class="combo ancho200" required >
		<option value="" disabled selected hidden >Moneda de recaudación</option>
		<option value="PEN" >Soles</option>
		<option value="USD" >Dólares</option>
		</select>
		<div id="TipoMonedaMensaje" class="mensajeRequerido" ></div>	
		</div>
		
		<div class="alineado margenIzquierdo100 margenInferior5" >
		<div class="etiqueta"  >Monto (*)</div>
		<input name="Monto" id="Monto" value="<?=(array_key_exists('Monto', $configuracion) ? $configuracion['Monto'] : '' );  ?>" 
		type="text" class="cajaTexto ancho200" placeholder="" required onkeypress="return verificarMonto(event,this)"/>			
		<div id="MontoMensaje" class="mensajeRequerido" ></div>
		</div>
		
		<div class="siguienteLinea" >
		
		<div class="alineado margenIzquierdo40 " >
		<button id="btnCancelar" name="btnCancelar" type="button" class="botonSecundario ancho150 margenSuperior30" >Limpiar</button>			
		</div>		
		
		<div class="alineado margenIzquierdo150 " >
		<button id="btnGuardar" name="btnGuardar" type="button" class="botonPrincipal ancho150 margenSuperior30" >Guardar</button>			
		</div>	
		
		</div>
	
	</form>
	</div><!--cuerpo fin-->		
	
</div><!--página fin-->

<script async type="text/javascript" src="res/jsc/configura.js"></script>

<script type="text/javascript">

	document.getElementById('ModoIntegracion').value = "<?=(array_key_exists('ModoIntegracion', $configuracion) ? $configuracion['ModoIntegracion'] : '' );  ?>";
	document.getElementById('Pais').value = "<?=(array_key_exists('Pais', $configuracion) ? $configuracion['Pais'] : '' );  ?>";
	document.getElementById('TipoMoneda').value = "<?=(array_key_exists('TipoMoneda', $configuracion) ? $configuracion['TipoMoneda'] : '' );  ?>";

<?php  
	try {
		if(strlen($accionMensajeCorrecto)>0)
		{
			echo "document.getElementById('accionMensaje').innerHTML ='". $accionMensajeCorrecto ."';";
			echo "document.getElementById('accionMensaje').classList.add('mensajeCorrecto');";
			echo "document.getElementById('accionMensaje').setAttribute('class', 'mensajeCorrecto');";
			echo "document.getElementById('accionMensaje').className = 'mensajeCorrecto';";
			echo "setTimeout(function(){ document.getElementById('accionMensaje').classList.remove('mensajeCorrecto'); 
										 document.getElementById('accionMensaje').innerHTML=''; 
			}, 4000);";
			
		} 
		if(strlen($accionMensajeIncorrecto)>0)
		{
			echo "document.getElementById('accionMensaje').innerHTML ='". $accionMensajeIncorrecto ."';";
			echo "document.getElementById('accionMensaje').classList.add('mensajeIncorrecto');";
			echo "document.getElementById('accionMensaje').setAttribute('class', 'mensajeIncorrecto');";
			echo "document.getElementById('accionMensaje').className = 'mensajeIncorrecto';";
			echo "setTimeout(function(){ document.getElementById('accionMensaje').classList.remove('mensajeIncorrecto'); 
										 document.getElementById('accionMensaje').innerHTML=''; 
			}, 4000);";
				
		}
	} catch (Exception $e) {
		date_default_timezone_set("America/Lima");//Zona horaria de Peru
        $tiempoLog = date("d-m-Y (H:i:s)");
        $file = fopen("log.txt", "a");
        fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
        fclose($file);
	}
?>

	function verificarMonto(evt,input)
	{
		var key = window.Event ? evt.which : evt.keyCode;    
	    var chark = String.fromCharCode(key);
	    var tempValue = input.value+chark;
	    if(key >= 48 && key <= 57){
	        if(filtro(tempValue)=== false){
	            return false;
	        }else{       
	            return true;
	        }
	    }else{
	          if(key == 8 || key == 13 || key == 0) {     
	              return true;              
	          }else if(key == 46){
	                if(filtro(tempValue)=== false){
	                    return false;
	                }else{       
	                    return true;
	                }
	          }else{
	              return false;
	          }
	    }
	}

	function verificarMail(mail) 
	{
		console.log(mail);
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value))
		{
			return (true)
		}
			return (false)
	}
	
	function filtro(valor){
	    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
	    if(preg.test(valor) === true){
	        return true;
	    }else{
	       return false;
	    }
	}

</script>

</body>
</html>