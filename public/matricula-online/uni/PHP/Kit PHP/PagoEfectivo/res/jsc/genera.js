
// Lectura de parámetros de configuración JSON
var xmlhttp = new XMLHttpRequest();
var urlConfigura = "configura.json";
var objConfiguraJson;

xmlhttp.open("GET", urlConfigura, true);
xmlhttp.setRequestHeader('cache-control', 'no-cache, must-revalidate, post-check=0, pre-check=0');
xmlhttp.setRequestHeader('cache-control', 'max-age=0');
xmlhttp.setRequestHeader('expires', '-1');
xmlhttp.setRequestHeader('expires', 'Tue, 01 Jan 1980 1:00:00 GMT');
xmlhttp.setRequestHeader('pragma', 'no-cache');
xmlhttp.send();

xmlhttp.onreadystatechange = function()
{
	
if (this.readyState == 4 && this.status == 200)
{
	objConfiguraJson = JSON.parse(this.responseText);

	var objPagoJson = { 
	"currency": "",
	"amount": 0, 
	"transactionCode": "208",
	"dateExpiry": "",
	"paymentConcept": "Prueba 200",
	"additionalData": "datos adicionales de prueba",
	"adminEmail": "",
	"userEmail": "ealvarado@gmail.com",
	"userName": "Chester",
	"userLastName": "Alvarado",
	"userUbigeo": "150101",
	"userCountry": "PERU",
	"userDocumentType": "DNI",
	"userDocumentNumber": "40226700",
	"userCodeCountry" : "+51",
	"userPhone" : "9988776650",
	"userId": "200",
	"serviceId": 20
	};

	document.getElementById("articuloMoneda").innerHTML = TipoMoneda(objConfiguraJson.TipoMoneda);
	document.getElementById("articuloPrecio").innerHTML = objConfiguraJson.Monto;
	document.getElementById("precioSubTotal").innerHTML = (TipoMoneda(objConfiguraJson.TipoMoneda)).concat(String(objConfiguraJson.Monto));
	document.getElementById("precioTotalMoneda").innerHTML = TipoMoneda(objConfiguraJson.TipoMoneda);
	document.getElementById("precioTotal").innerHTML = objConfiguraJson.Monto;	
	
	document.getElementById("currency").value = objPagoJson.currency;
	document.getElementById("amount").value = objPagoJson.amount;	
	document.getElementById("transactionCode").value = objPagoJson.transactionCode; 
	document.getElementById("dateExpiry").value = objPagoJson.dateExpiry; 
	document.getElementById("paymentConcept").value = objPagoJson.paymentConcept; 
	document.getElementById("additionalData").value = objPagoJson.additionalData; 
	document.getElementById("adminEmail").value = objConfiguraJson.EmailComercio; // Obtenido de configuración
	document.getElementById("userEmail").value = objPagoJson.userEmail; 
	document.getElementById("userName").value = objPagoJson.userName; 
	document.getElementById("userLastName").value = objPagoJson.userLastName; 
	document.getElementById("userUbigeo").value = objPagoJson.userUbigeo; 
	document.getElementById("userCountry").value = objPagoJson.userCountry; 
	document.getElementById("userDocumentType").value = objPagoJson.userDocumentType;
	document.getElementById("userDocumentNumber").value = objPagoJson.userDocumentNumber;
	document.getElementById("userCodeCountry").value = objPagoJson.userCodeCountry; 
	document.getElementById("userPhone").value = objPagoJson.userPhone; 
	document.getElementById("userId").value = objPagoJson.userId; 
	document.getElementById("serviceId").value = objPagoJson.serviceId;		
	
	function TipoMoneda(tipo){
		if(tipo != ""){
			if (tipo == "PEN") {
				return "S/.";
			}else{
				return "$";
			}
		}else{
			return "";
		}
	}
}
};




document.getElementById("btnGuardar").onclick = function(){  

		document.getElementById("generaFormulario").setAttribute("method", "post"); 
		document.getElementById("generaFormulario").submit();
		
} 

