
var requeridosIncorrectos=0;

// Validación de requerido en evento onInput
document.getElementById("ServidorPagoEfectivo").oninput = function(){ esRequerido("ServidorPagoEfectivo", "ServidorPagoEfectivoMensaje", "Indique la url de PagoEfectivo"); };
document.getElementById("AccessKey").oninput = function(){ esRequerido("AccessKey", "AccessKeyMensaje", "Cargue la AccessKey"); };
document.getElementById("SecretKey").oninput = function(){ esRequerido("SecretKey", "SecretKeyMensaje", "Cargue la SecretKey"); };
document.getElementById("IDComercio").oninput = function(){ esRequerido("IDComercio", "IDComercioMensaje", "Indique el código del comercio"); };
document.getElementById("NombreComercio").oninput = function(){ esRequerido("NombreComercio", "NombreComercioMensaje", "Indique el nombre del comercio"); };
document.getElementById("EmailComercio").oninput = function(){ esRequerido("EmailComercio", "EmailComercioMensaje", "Indique el email del comercio"); };
document.getElementById("ModoIntegracion").oninput = function(){ esRequerido("ModoIntegracion", "ModoIntegracionMensaje", "Indique la modalidad de integración"); };
document.getElementById("TiempoExpiracionPago").oninput = function(){ esRequerido("TiempoExpiracionPago", "TiempoExpiracionPagoMensaje", "Indique el tiempo de expiración del pago"); };
document.getElementById("Pais").oninput = function(){ esRequerido("Pais", "PaisMensaje", "Indique el país del servicio"); };
document.getElementById("TipoMoneda").oninput = function(){ esRequerido("TipoMoneda", "TipoMonedaMensaje", "Indique el tipo de moneda"); };
document.getElementById("Monto").oninput = function(){ esRequerido("Monto", "MontoMensaje", "Ingresa un monto"); };

// Validación de requerido en evento onInvalid
document.getElementById("ServidorPagoEfectivo").oninvalid = function(){ esRequerido("ServidorPagoEfectivo", "ServidorPagoEfectivoMensaje", "Indique la url de PagoEfectivo"); };
document.getElementById("AccessKey").oninvalid = function(){ esRequerido("AccessKey", "AccessKeyMensaje", "Cargue la AccessKey"); };
document.getElementById("SecretKey").oninvalid = function(){ esRequerido("SecretKey", "SecretKeyMensaje", "Cargue la SecretKey"); };
document.getElementById("IDComercio").oninvalid = function(){ esRequerido("IDComercio", "IDComercioMensaje", "Indique el código del comercio"); };
document.getElementById("NombreComercio").oninvalid = function(){ esRequerido("NombreComercio", "NombreComercioMensaje", "Indique el nombre del comercio"); };
document.getElementById("EmailComercio").oninvalid = function(){ esRequeridoMail("EmailComercio", "EmailComercioMensaje", "Indique el email del comercio", "Ingrese un email Correcto"); };
document.getElementById("ModoIntegracion").oninvalid = function(){ esRequerido("ModoIntegracion", "ModoIntegracionMensaje", "Indique la modalidad de integración"); };
document.getElementById("TiempoExpiracionPago").oninvalid = function(){ esRequerido("TiempoExpiracionPago", "TiempoExpiracionPagoMensaje", "Indique el tiempo de expiración del pago"); };
document.getElementById("Pais").oninvalid = function(){ esRequerido("Pais", "PaisMensaje", "Indique el país del servicio"); };
document.getElementById("TipoMoneda").oninvalid = function(){ esRequerido("TipoMoneda", "TipoMonedaMensaje", "Indique el tipo de moneda"); };
document.getElementById("Monto").oninvalid = function(){ esRequerido("Monto", "MontoMensaje", "Ingresa un monto"); };

// Permite visualizar un mensaje en caso el control sea requerido|
function esRequerido(input, inputMensaje, mensajeRequerido)
{
	if(document.getElementById(input).value.length==0)
	{ 
		document.getElementById(input).style.border="1px solid #ff0000";
		document.getElementById(inputMensaje).innerHTML = mensajeRequerido; requeridosIncorrectos++; }
	else 
	{ 
		document.getElementById(input).style.border="1px solid #B3B3B3";
		document.getElementById(inputMensaje).innerHTML = ""; 
	}
}

function esRequeridoMail(input, inputMensaje, mensajeRequerido, mensajeCorrecto)
{
	if(document.getElementById(input).value.length==0)
	{ 
		document.getElementById(input).style.border="1px solid #ff0000";
		document.getElementById(inputMensaje).innerHTML = mensajeRequerido; requeridosIncorrectos++; 
	}
	else 
	{ 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById(input).value))
		{
			document.getElementById(input).style.border="1px solid #B3B3B3";
			document.getElementById(inputMensaje).innerHTML = "";
		}else{
			document.getElementById(input).style.border="1px solid #ff0000";
			document.getElementById(inputMensaje).innerHTML = mensajeCorrecto; requeridosIncorrectos++; 
		}
	}
}

// Validar si todos los controles requeridos se encuentran llenos
function validarRequerido()
{
	requeridosIncorrectos=0;
		
	esRequerido("ServidorPagoEfectivo", "ServidorPagoEfectivoMensaje", "Indique la url de PagoEfectivo"); 
	esRequerido("AccessKey", "AccessKeyMensaje", "Cargue la AccessKey");
	esRequerido("SecretKey", "SecretKeyMensaje", "Cargue la SecretKey");
	esRequerido("IDComercio", "IDComercioMensaje", "Indique el código del comercio");
	esRequerido("NombreComercio", "NombreComercioMensaje", "Indique el nombre del comercio"); 
	esRequeridoMail("EmailComercio", "EmailComercioMensaje", "Indique el email del comercio", "Ingrese un email Correcto"); 
	esRequerido("ModoIntegracion", "ModoIntegracionMensaje", "Indique la modalidad de integración"); 
	esRequerido("TiempoExpiracionPago", "TiempoExpiracionPagoMensaje", "Indique el tiempo de expiración del pago"); 
	esRequerido("Pais", "PaisMensaje", "Indique el país del servicio"); 
	esRequerido("TipoMoneda", "TipoMonedaMensaje", "Indique el tipo de moneda"); 
	esRequerido("Monto", "MontoMensaje", "Ingresa un monto"); 
	
	return requeridosIncorrectos;
}

//Limpiar los controles
document.getElementById("btnCancelar").onclick = function(){  

	document.getElementById("ServidorPagoEfectivo").value="";
	document.getElementById("AccessKey").value="";
	document.getElementById("SecretKey").value="";
	document.getElementById("IDComercio").value="";
	document.getElementById("NombreComercio").value="";
	document.getElementById("EmailComercio").value="";
	document.getElementById("ModoIntegracion").value="";
	document.getElementById("TiempoExpiracionPago").value="";
	document.getElementById("Pais").value="";
	document.getElementById("TipoMoneda").value=""; 
	document.getElementById("Monto").value="";

}

//Enviar formulario a servidor
document.getElementById("btnGuardar").onclick = function(){  

	if(validarRequerido()==0)
	{
		document.getElementById("configuraFormulario").setAttribute("method", "post"); 
		document.getElementById("configuraFormulario").submit();
	}
}


document.getElementById("Pais").onchange = function(){
	
	document.getElementById("TipoMoneda").value='';
	verificarMoneda();
	
};

function verificarMoneda()
{
	
	if(document.getElementById("Pais").value=="PER")
	{
		document.getElementById("TipoMoneda").options[1].style='display:block';
	}
	
	if(document.getElementById("Pais").value=="ECU")
	{
		document.getElementById("TipoMoneda").options[1].style='display:none';
	}	
	
}

(function () {

    verificarMoneda();

})();
	


