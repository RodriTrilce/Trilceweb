<?php include "_genera.php" ?>
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
<title>Genera CIP</title>
</head>
<body>

<div class="pagina" ><!--página inicio-->

	<div class="barraTitulo" ><!--barraTítulo inicio-->
		<div class="alineado margenIzquierdo10 margenSuperior10" ><img src="res/img/logoPagoEfectivo.png" /></div>
		<div class="lineaSeparadoraVertical alineado margenIzquierdo20" ></div>
		<div class="titulo alineado" >Generar CIP</div>
	</div><!--barraTítulo fin-->
	
	<div class="barraMenu" ><!--barraMenu inicio-->

	<div class="itemMenu margenIzquierdo5 margenSuperior20" >CÓDIGO DE PAGO</div>

	<div class="itemMenu itemMenuSeleccionado" >
	<img src="res/img/vinetaCruz.png" class="vinetaItemMenu alineado margenIzquierdo10 margenSuperior5" />
	<div class="alineado margenIzquierdo5 margenSuperior5" >Generar CIP</div>
	</div>

	<div class="itemMenu" >
	<img src="res/img/vinetaSiguiente.png" class="vinetaItemMenu alineado margenIzquierdo10 margenSuperior5" />
	<div class="alineado margenIzquierdo5 margenSuperior5" ><a href="notifica.php">Notificación CIP</a></div>	
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
	

	<div class="cuerpo" >
	<!--cuerpo inicio-->
	
	<iframe <?=(isset($configuracion['ModoIntegracion']) && $configuracion['ModoIntegracion']=='IFR' && $esPostBack==1 ? "style='display: block'" : "style='display: none'"  );?>
	 src="<?=$enlaceCIP  ?>" class="marco" ></iframe> 
	 
	<div id="cuerpoContenido" <?=(isset($configuracion['ModoIntegracion']) && $configuracion['ModoIntegracion']=='IFR' && $esPostBack==1 ? "style='display: none'" : "style='display: block'"  );?> >
	

	<form id="generaFormulario" name="generaFormulario" method="post"  >


	<div class="siguienteLinea margenSuperior30" >	
		<div class="seccionTitulo ancho750 margenIzquierdo40 alineado" >
		Métodos de Pago
		</div>

		<div class="seccionTitulo ancho300 margenIzquierdo40 alineado" >
		<div class="alineado" >Resumen de Compra</div>
		<img src="res/img/vinetaCarritoCompra.png" class="margenIzquierdo120 alineado" />
		</div>
	</div>

	<div class="siguienteLinea" >	
		<div class="seccionCuerpo ancho750 margenIzquierdo40 alineado" >
		
			<!-- columnas-->
			<div class="alineado" >
			
			<!-- columna1-->
			<div class="alineado" >
			
			<!-- Banner1 -->
			<div class="siguienteLinea bannerBlanco margenSuperior20 margenIzquierdo10" >
				<div class="alineado ancho50" >
				<img src="res/img/vinetaTarjeta.png" class="margenIzquierdo10 margenSuperior10" />
				</div>
				<div class="alineado ancho150 margenIzquierdo10 margenSuperior10" >
					<div class="siguienteLinea" >OPCIÓN 1</div>
					<div class="siguienteLinea" >Tarjeta de crédito o débito</div>
				</div>				
			
			</div>
			<!-- Fin de Banner1 -->
			
			<!-- Banner2 -->
			<div class="siguienteLinea bannerGris margenSuperior20 margenIzquierdo10" >
				<div class="alineado ancho50" >
				<img src="res/img/vinetaPagoEfectivo.png" class="margenIzquierdo10 margenSuperior10" />
				</div>
				<div class="alineado ancho150 margenIzquierdo10 margenSuperior10" >
					<div class="siguienteLinea" >OPCIÓN 2</div>
					<div class="siguienteLinea" >Depósitos y transferencias</div>
				</div>
			
			</div>
			<!-- Fin de Banner2 -->
			
			<!-- Banner3 -->
			<div class="siguienteLinea bannerBlanco margenSuperior20 margenIzquierdo10" >
				<div class="alineado ancho50" >
				<img src="res/img/vinetaBolso.png" class="margenIzquierdo10 margenSuperior10" />
				</div>
				<div class="alineado ancho150 margenIzquierdo10 margenSuperior10" >
					<div class="siguienteLinea" >OPCIÓN 3</div>
					<div class="siguienteLinea" >Pago contra entrega</div>
				</div>
			
			</div>		
			<!-- Fin de Banner3 -->			
	
			</div>
			<!-- fin de columna1-->		

		<!-- columna2-->
		<div class="alineado" >
				<!-- fila1 -->
				<div class="siguienteLinea" >
				<img src="res/img/bannerPagoEfectivo.png" class="margenIzquierdo350 margenSuperior30" />
				</div>
				<!-- fin de fila1 -->
			
				<!-- fila2 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior10" <?=( isset($configuracion['Pais']) && $configuracion['Pais']=='PER' ? "style='display: block'" : "style='display: none'"  );?> >
					<div class="alineado ancho20" >
					<img src="res/img/vinetaCheck.png" class="margenIzquierdo5 margenSuperior5" />
					</div>
					<div class="alineado ancho450 alineacionJustificada" >
					<strong>Depósitos en efectivo vía pagoEfectivo -</strong> Paga en BBVA, BCP, Interbank, Scotiabank, BanBif, 
					Western Union, Tambo+, Kasnet, Full Carga, Red Digital, Money Gram, Caja Arequipa, Disashop, 
					en cualquier agente o agencia autorizada a nivel nacional a la cuenta de PagoEfectivo <span class="enlace"  >¿Cómo funciona?</span>
					</div>
				</div>
				<!-- fin de fila2 -->
				
				<!-- fila3 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior80" <?=( isset($configuracion['Pais']) && $configuracion['Pais']=='PER' ? "style='display: block'" : "style='display: none'"  );?> >
					<div class="alineado ancho20" >
					<img src="res/img/vinetaCheck.png" class="margenIzquierdo5 margenSuperior5" />
					</div>
					<div class="alineado ancho450 alineacionJustificada" >
					<strong>Transferencias bancarias vía PagoEfectivo -</strong>  Paga en BBVA, BCP, Interbank, Scotiabank, BanBif,
					Caja Arequipa, a través de la banca por Internet o banca móvil en la opción pago de servicios 
					 <span class="enlace"  >¿Cómo funciona?</span>
					</div>				
				</div>
				<!-- fin de fila3 -->				

				<!-- fila4 -->
				<div class="siguienteLinea margenIzquierdo20" <?=(isset($configuracion['Pais']) && $configuracion['Pais']=='PER' ? "style='display: block'" : "style='display: none'"  );?> >
					<div class="alineado ancho20 margenSuperior20" >
					<img src="res/img/vinetaAsterisco.png" class="margenIzquierdo5 margenSuperior5" />
					</div>
					<div class="alineado ancho450 " >
					<img src="res/img/bbva.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/bcp.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/interbank.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/scotiabank.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/banbif.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/westerunion.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/tambo.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/kasnet.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/fullcarga.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/agenteRedDigital.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/moneygram.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/cajaarequipa.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/disashop.png" class="margenIzquierdo5 margenSuperior10" />
					</div>
				</div>				
				<!-- fin de fila4 -->			
				<!-- Fin de Contenido Perú -->
			
				<!-- fila5 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior10" <?=(isset($configuracion['Pais']) && $configuracion['Pais']=='ECU' ? "style='display: block'" : "style='display: none'"  );?> >
					<div class="alineado ancho20" >
					<img src="res/img/vinetaCheck.png" class="margenIzquierdo5 margenSuperior5" />
					</div>
					<div class="alineado ancho450 alineacionJustificada" >
					<strong>Depósitos en efectivo vía PagoEfectivo -</strong> Paga en efectivo en Western Union Red activa, 
					Facilito y Almacenes TIA a nivel nacional  <span class="enlace"  >¿Cómo funciona?</span>
					</div>
				</div>
				<!-- fin de fila5 -->
				
				<!-- fila6 -->
				<div class="siguienteLinea margenIzquierdo20" <?=( isset($configuracion['Pais']) &&  $configuracion['Pais']=='ECU' ? "style='display: block'" : "style='display: none'"  );?> >
					<div class="alineado ancho20 margenSuperior20" >
					<img src="res/img/vinetaAsterisco.png" class="margenIzquierdo5 margenSuperior5" />
					</div>
					<div class="alineado ancho450 " >
					<img src="res/img/activa.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/facilito.png" class="margenIzquierdo5 margenSuperior10" />
					<img src="res/img/tia.png" class="margenIzquierdo5 margenSuperior10" />
					
					</div>
				</div>				
				<!-- fin de fila6 -->						
			
			</div><!-- fin de columna2-->				
		
		</div><!-- fin de columnas-->
			
		</div>

		<div class="seccionCuerpo ancho300 margenIzquierdo40 alineado" >
			<!-- fila1 -->
				<div class="alineado margenIzquierdo10 margenSuperior10" >
					<div class="alineado ancho60" >
					<img src="res/img/auricular.png" >
					</div>
					<div class="alineado margenIzquierdo5 ancho200" >
						AUDIFONO con Micro SAMSUNG EO-IG930 LEVEL IN ANC BLACK -
						EO-IG930BBEGWW
					</div>
				</div>
			<!-- fin de fila1 -->
			<!-- fila2 -->
				<div class="siguienteLinea margenIzquierdo80 margenSuperior60" >
					<strong id="articuloMoneda" ></strong><strong id="articuloPrecio" ></strong>
				</div>
			<!-- fin de fila2 -->		
			
			<!-- fila3 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior10" >
					<div class="linea" > </div>
				</div>
			<!-- fin de fila3 -->			

			<!-- fila4 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior10" >
					<div class="alineado ancho100 margenInferior5" >
					Sub Total
					</div>
					<div id="precioSubTotal" class="alineado ancho60 margenInferior5" >
					
					</div>
				</div>
			<!-- fin de fila4 -->
			
			<!-- fila5 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior10" >
					<div class="linea" > </div>
				</div>
			<!-- fin de fila5 -->			
			
			<!-- fila6 -->
				<div class="siguienteLinea margenIzquierdo20 margenSuperior10" >
					<div class="alineado ancho100" >
						<strong>Total</strong>	
					</div>
					<div class="alineado ancho60" >
						<div id="precioTotalMoneda" class="alineado" ></div><div class="alineado" id="precioTotal" value="" ></div>
					</div>
				</div>
			<!-- fin de fila6 -->			
			
			<!-- fila7 -->
				<div class="siguienteLinea margenIzquierdo60 margenSuperior10" >
					<button  id="btnGuardar" name="btnGuardar" type="button"  class="botonPrincipal ancho150 margenSuperior30" >Pagar</button>	
				</div>
			<!-- fin de fila7 -->
			
		</div>

	</div>	
	
	<input type="hidden" id="currency" name="currency" />
	<input type="hidden" id="amount" name="amount" />
	<input type="hidden" id="transactionCode" name="transactionCode"  />
	<input type="hidden" id="dateExpiry" name="dateExpiry"  />
	<input type="hidden" id="paymentConcept" name="paymentConcept"  />
	<input type="hidden" id="additionalData" name="additionalData"  />
	<input type="hidden" id="adminEmail" name="adminEmail"  />
	<input type="hidden" id="userEmail" name="userEmail"  />
	<input type="hidden" id="userName" name="userName"  />
	<input type="hidden" id="userLastName" name="userLastName"  />
	<input type="hidden" id="userUbigeo" name="userUbigeo"  />
	<input type="hidden" id="userCountry" name="userCountry"  />
	<input type="hidden" id="userDocumentType" name="userDocumentType"  />
	<input type="hidden" id="userDocumentNumber" name="userDocumentNumber"  />
	<input type="hidden" id="userCodeCountry" name="userCodeCountry"  />
	<input type="hidden" id="userPhone" name="userPhone" value="" />
	<input type="hidden" id="userId" name="userId" value="" />
	<input type="hidden" id="serviceId" name="serviceId" value="" />		

	</form>
		
	</div><!-- Cuerpo contenido -->
	</div><!--cuerpo fin-->		
	
</div><!--página fin-->

<script async type="text/javascript" src="res/jsc/genera.js"></script>

</body>
</html>