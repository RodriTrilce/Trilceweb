<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Academia Trilce <?php echo date("Y"); ?> - Preparación CATÓLICA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Formulario para el registro de Preparación CATÓLICA" />
  <meta name="keywords" content="Preparación CATÓLICA" />
  <meta content="Themesbrand" name="author" />
  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.min.css" rel="stylesheet" type="text/css" />
  
  <!-- Font Awesome -->
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/line-awesome.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
	
  <!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '2254483704668747');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=2254483704668747&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5HQRN8J');</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HQRN8J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
  
  <section class="section2 fondo_primeros_puestos pad0">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="fondo_registro_2021 hailitar_header">
          <div class="row">
            <div class="col-lg-6 col-xs-6 col-lg-6-tab contenedor_mobile_logo">
							<a href="https://www.trilce.edu.pe/academia">
                <img src="images/academia/logo.svg" alt="Logo Academia" class="pad_logo">
							</a>
						</div>
            <div class="col-lg-6 col-xs-6 col-lg-6-tab tair contenedor_mobile_iconos pad_iconos">
              <a href="https://www.trilce.edu.pe/academia">
                <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
              </a>
              <a href="https://www.trilce.edu.pe/l/whatsapp-academias" target="_blank">
                <img src="images/academia/whatsapp.svg" alt="Logo Academia" class="icono_colegio">
              </a>
              <a href="tel:016198100">
                <img src="images/academia/telefono.svg" alt="Logo Academia" class="icono_colegio">
              </a>
              <br>
              <span class="texto_telefono">6198 100</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 fondo_landing_interno full_height">
        </div>
        <div class="col-lg-6 pt-4 fondo_registro_2021 full_height">
          <div class="ml80">
            <div class="row">
              <div class="col-lg-6 hailitar_mobile">
								<a href="https://www.trilce.edu.pe/academia">
                  <img src="images/academia/logo.svg" alt="Logo Academia">
								</a>
              </div>
              <div class="col-lg-6 hailitar_mobile">
                <a href="https://www.trilce.edu.pe/academia">
                  <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                </a>
                <a href="https://www.trilce.edu.pe/l/whatsapp-academias" target="_blank">
                  <img src="images/academia/whatsapp.svg" alt="Logo Academia" class="icono_colegio">
                </a>
                <a href="tel:016198100">
                  <img src="images/academia/telefono.svg" alt="Logo Academia" class="icono_colegio">
                </a>
                <br>
                <span class="texto_telefono">6198 100</span>
              </div>
            </div>
          </div>
          <div class="ml80">
            <h1 class="titulo_academia">¡Regístrate y te enviaremos toda la información!</h1>
            <p class="subtitulo_academia">Usted eligió: <b class="texto_preparacion">Preparación CATÓLICA</b></p>
            <form class="registration-form w_form" action="landing-gracias-catolica.php" method="post">
              <div class="form-group mb-2">
                <select class="form-control fondo_blanco icono_select" id="ciclo" name="ciclo" required="required">
                  <option value="">Ciclo</option>
                </select>
              </div>
              <div class="form-group mb-2">
                <select class="form-control fondo_blanco icono_select" id="turno" name="turno" required="required">
                  <option value="">Turno</option>
                </select>
              </div>
              <div class="form-group mb-2">
                <input type="text" class="form-control fondo_blanco" id="dni" name="dni" placeholder="DNI del alumno" required="required" onkeypress="return isNumber(event)" onpaste="return false;" minlength="7" maxlength="9">
              </div>
              <div class="form-group mb-2">
                <input type="text" class="form-control fondo_blanco" id="nombres" name="nombres" placeholder="Nombres" required="required">
              </div>
						  <div class="form-group mb-2">
                <input type="text" class="form-control fondo_blanco" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" required="required">
              </div>
						  <div class="form-group mb-2">
                <input type="text" class="form-control fondo_blanco" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" required="required">
              </div>
              <div class="form-group mb-2">
                <input type="text" class="form-control fondo_blanco" id="celular" name="celular" placeholder="Número de celular" onkeypress="return isNumber(event)" onpaste="return false;" minlength="7" maxlength="12" required="required">
              </div>
              <div class="form-group mb-2">
                <input type="email" class="form-control fondo_blanco" id="email" name="email" placeholder="Correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
              </div>
              <div class="form-group mb-2">
                <textarea id="comentario" name="comentario" rows="2" cols="40" class="form-control fondo_blanco" placeholder="Comentario" style="border-radius: 20px;" required="required"></textarea>
              </div>
              <div class="form-group mb-2 centrado">
                <input type="checkbox" name="acepta" required="required" class="checkbox_form"> <span class="texto_acepta" style="color: #fff">He leído y acepto las <a class="check-div-a>" id="myBtn" style="color: #fff;text-decoration: underline !important;font-family: 'NSB';cursor: pointer;">políticas de uso de datos.</b></a></span>
              </div>
              <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" style="width: 296px; height: 36px; margin-bottom: 10px; font-family: GRB; font-size: 18px !important">Registrarme</button>
              <button type="submit" class="btn btn-primary btn-block texto_solicita vista_mobile" style="width: 100%; height: 36px; margin-bottom: 10px; font-family: GRB; font-size: 18px !important">Registrarme</button>
              <a href="https://www.trilce.edu.pe/l/whatsapp-catolica" target="_blank" class="btn btn-primary btn-block texto_solicita vista_home_boton1" style="width: 296px; height: 36px; background-color: #FF4E0E !important; border: 2px solid #fff !important; color: #fff !important; font-family: GRB; font-size: 18px !important"><img src="images/w_b.svg" alt="Trilce Colegios" style="width: 24px"> ¡Inscríbete por WhatsApp!</a>
            </form>
            <p class="texto_footer ml_22 mb_80">© 2025 Trilce. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="more_information md-hide sm-hide">
    	<span class="more_information__call">
      	<a href="https://www.trilce.edu.pe/l/whatsapp-catolica" target="_blank" style="color: #fff" class="texto_foot"><i class="fa fa-whatsapp"></i> ¡Inscríbete aquí! </a>
    	</span>
  	</div>
  </section>
  
  <div id="myModal" class="modal modal_bottom">
    <div class="modal-content">
      <span class="close" style="display: none">&times;</span>
      <div class="col-md-12 text-justify">
        <p class="p_terminos titulo_datos_adiional adicional_css" style="text-align:center">
          <strong class="titulo_datos">Política de uso de datos</strong>
        </p>
        <p><hr></p>
        <p>
          <strong class="subtitulo_datos">I. Introducción </strong>
        </p>
        <p class="p_terminos">
          <strong>1.</strong> La presente Política de Protección de Datos Personales Trilce describe el tratamiento que nuestra institución (en adelante Trilce) brinda a los datos personales que recopila de los usuarios en su portal web. Dicha Política se ajusta a las disposiciones contenidas en la Ley de Protección de Datos Personales (Ley N.° 29733), su Reglamento y normas complementarias. Para ello, adoptará las medidas técnicas y organizativas necesarias a fin de evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los datos personales facilitados por los titulares de datos personales.
        </p>
        <p>
          <strong class="subtitulo_datos">II. Definiciones</strong>
        </p>
        <p class="p_terminos">
        <strong>2.</strong> De acuerdo con la Ley N.° 29733 (Ley de Protección de Datos Personales) y su Reglamento aprobado por el Decreto Supremo N.° 003-2013-JUS, se define lo siguiente:
        </p>
        <p class="p_terminos">
          <strong>a) Datos personales:</strong> toda información sobre una persona natural que la identifica o hace identificable a través de medios que pueden ser razonablemente utilizados.
        </p>
        <p class="p_terminos">
          <strong>b) Tratamiento de datos personales:</strong> cualquier operación o procedimiento técnico, automatizado o no, que permite la recopilación, registro, organización, almacenamiento, conservación, elaboración, modificación, extracción, consulta, utilización, bloqueo, supresión, comunicación por transferencia o por difusión o cualquier otra forma de procesamiento que facilite el acceso, correlación o interconexión de los datos personales.
        </p>
        <p>
          <strong class="subtitulo_datos">III. Consentimiento del Usuario</strong>
        </p>
        <p class="p_terminos">
          <strong>3.</strong> Trilce se obliga a que los datos personales obtenidos a través de formularios del portal web cuenten previamente con el consentimiento expreso del titular para recopilar su información. Estos datos serán tratados única y específicamente para la finalidad solicitada.
        </p>
        <p>
          <strong class="subtitulo_datos">IV. Tratamientos de datos personales</strong>
        </p>
        <p class="p_terminos">
          <strong>4.</strong> Los datos personales facilitados por el Usuario se almacenarán en los bancos de datos que forman parte del sistema de información de Trilce; además, serán tratados para poder llevar a cabo sus finalidades. 
        </p>
        <p class="p_terminos">
          <strong>5.</strong> Trilce no empleará los datos personales del Usuario para ninguna finalidad distinta a la que fueron suministrados, a no ser que se trate de una finalidad expresamente permitida o exigida por la normativa vigente aplicable, por orden judicial o una autoridad competente. 
        </p>
        <p class="p_terminos">
          <strong>6.</strong> Trilce no compartirá ni cederá a terceros algún dato personal del Usuario sin su consentimiento previo y expreso, salvo cuando dicha comunicación sea exigida por la legislación vigente, por orden judicial o por una autoridad competente.
        </p>
        <p class="p_terminos">
          <strong>7.</strong> El portal web de Trilce puede ofrecer enlaces (links) para acceder a otros portales web que no son parte de aquellos. Es responsabilidad del Usuario revisar las políticas de privacidad en dichos portales web para verificar el nivel de protección de sus datos personales en ese ambiente, lo que es ajeno a la responsabilidad de Trilce.
        </p>
        <p>
          <strong class="subtitulo_datos">V. Medidas de seguridad</strong>
        </p>
        <p class="p_terminos">
          <strong>8.</strong> Trilce se compromete a brindar todas las medidas técnicas, legales y administrativas necesarias para garantizar la seguridad y confidencialidad de los datos personales del Usuario. Estos serán tratados considerando los principios de legalidad, consentimiento, proporcionalidad, calidad, seguridad y los demás presentes en la normativa vigente referida a protección de datos personales. Para ello, se evitará que sean filtrados, difundidos o sujetos a cualquier acción que ponga en peligro la información personal del Usuario.
        </p>
        <p>
          <strong class="subtitulo_datos">VI. Responsabilidades</strong>
        </p>
        <p class="p_terminos">
          <strong>9.</strong> Trilce asume que los datos personales proporcionados por el Usuario deben ser verdaderos, completos, exactos, vigentes y corresponder a su verdadera identidad. Ante cualquier modificación, el Usuario será responsable de comunicarlo inmediatamente a Trilce.
        </p>
        <p class="p_terminos">
          <strong>10.</strong> El Usuario asumirá las responsabilidades por los daños y perjuicios, directos o indirectos, que genere a Trilce y/o terceros por incumplir total o parcialmente lo señalado en el punto anterior.
        </p>
        <p>
          <strong class="subtitulo_datos">VII. Ejercicio de los derechos de Acceso, Rectificación, Cancelación y Oposición (derechos ARCO)</strong>
        </p>
        <p class="p_terminos">
          <strong>11.</strong> Trilce debe garantizar la atención de los derechos protegidos que pueda ejercer el Titular de los Datos Personales. Para ello, debe mantener disponibles canales, procedimientos e información a fin de atender la solicitud del Usuario en los plazos establecidos por las normas de protección de datos personales. 
        </p>
        <p class="p_terminos">
          <strong>12.</strong> El Usuario podrá ejercitar sus derechos de Información, Acceso, Rectificación, Cancelación, Revocación, Oposición, etc. (derechos ARCO) al uso de sus datos personales, de conformidad con la Ley de Protección de Datos Personales (Ley N.° 29733). En ese sentido, el Usuario tiene derecho, entre otros, a acceder a su información personal, a solicitar la rectificación de datos inexactos y a revocar su consentimiento para su tratamiento. Asimismo, podrá solicitar la supresión de sus datos u oponerse a su tratamiento, incluso cuando estos ya no resulten necesarios para los fines que motivaron su recopilación. 
        </p>
        <p class="p_terminos">
          <strong>13.</strong> El ejercicio de estos derechos es gratuito. Para ello, el Usuario puede dirigirse por correo electrónico a datospersonales@trilce.edu.pe, adjuntando una solicitud y copia de su documento de identidad (DNI/CE/Pasaporte) que acredite su titularidad sobre los datos personales respecto de los cuales ejercerá su derecho. También podrá hacerlo en cualquiera de nuestras oficinas ubicadas en el país. Si utiliza un representante legal, este deberá acreditarse como tal.
        </p>
        <p class="p_terminos">
          <strong>14.</strong> La atención de la solicitud será efectuada de acuerdo a los plazos previstos en la normatividad de protección de datos personales.
        </p>
        <p>
          <strong class="subtitulo_datos">VIII. Cambios de Política de Privacidad </strong>
        </p>
        <p class="p_terminos">
          <strong>15.</strong> Trilce se reserva el derecho de modificar y/o actualizar la presente Política de Privacidad con fines de mejora, ya sea para adaptarla a futuros cambios que pueda requerir el marco normativo vigente, brindar una mejor calidad de servicio o comunicar nuevas alternativas relacionadas con la presente Política. Es responsabilidad del Usuario mantenerse informado sobre los cambios que se introduzcan en esta Política de Privacidad publicado en este sitio su versión actualizada o modificada.
        </p>
        <p class="p_terminos">
          <a href="" class="btn btn-primary btn-block texto_solicita vista_home_boton1 cerrar" style="width: 290px; height: 40px; background-color: #FF4E0E !important; border: 2px solid #fff !important; color: #fff !important; font-family: GRB; font-size: 20px !important"> Aceptar </a>
          <a href="" class="btn btn-primary btn-block texto_solicita vista_mobile cerrar" style="width: 248px; height: 40px; background-color: #FF4E0E !important; border: 2px solid #fff !important; color: #fff !important; font-family: GRB; font-size: 20px !important"> Aceptar </a>
        </p>
        
      </div>
    </div>
  </div>

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/smooth-scroll.polyfills.min.js"></script>
<script src="js/gumshoe.polyfills.min.js"></script>
<!-- feather icon -->
<script src="js/feather.js"></script>
<!-- unicons icon -->
<script src="js/unicons.js"></script>
<!-- Main Js -->
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
function isNumber(evt) 
{
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if ( (charCode > 31 && charCode < 48) || charCode > 57)
  {
    return false;
  }
  return true;
}
</script>
<script>
  var modal = document.getElementById("myModal");
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function()
  {
    modal.style.display = "block";
  }
  span.onclick = function()
  {
    modal.style.display = "none";
  }
  window.onclick = function(event)
  {
    if (event.target == modal)
    {
      modal.style.display = "none";
    }
  }

  var enlace = document.getElementsByClassName("cerrar")[0];
  btn.onclick = function()
  {
    modal.style.display = "block";
  }
  enlace.onclick = function()
  {
    modal.style.display = "none";
  }
  window.onclick = function(event)
  {
    if (event.target == modal)
    {
      modal.style.display = "none";
    }
  }
</script>
<script>
$('a').click(function()
{
  $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 500);
  return false;
});
</script>
<script>
$(document).ready(function()
{
  $(".collapse.show").each(function()
  {
    $(this).prev(".card-header").find(".fa").addClass("la-angle-up").removeClass("la-angle-down");
  });
  $(".collapse").on('show.bs.collapse', function()
  {
    $(this).prev(".card-header").find(".fa").removeClass("la-angle-down").addClass("la-angle-up");
  }).on('hide.bs.collapse', function()
  {
    $(this).prev(".card-header").find(".fa").removeClass("la-angle-up").addClass("la-angle-down");
  });
});
</script>
<script>
  var subjectObject = {
    "Semestral": {
      "Mañana": []
    },
    "Repaso": {
      "Mañana": []
    },
		"Verano": {
      "Mañana": []
    }
  }
  window.onload = function()
  {
    var subjectSel = document.getElementById("ciclo");
    var topicSel = document.getElementById("turno");
    for (var x in subjectObject) 
    {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function() 
    {
      topicSel.length = 1;
        //display correct values
        for (var y in subjectObject[this.value]) 
        {
            topicSel.options[topicSel.options.length] = new Option(y, y);
        }
    }
    topicSel.onchange = function()
    {
        var z = subjectObject[subjectSel.value][this.value];
    }
  }
</script>
</body>

</html>