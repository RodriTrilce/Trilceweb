<?php 
session_start();

$_SESSION["BLDG_TBL"]         = $_POST['local'];
$_SESSION["NIVEL_ESTUDIO"]    = "00114";
$_SESSION["SERVICIO"]         = "ACAUN";

$_SESSION["CODIGO_AREA"]    = $_POST['area'];

switch ($_SESSION["CODIGO_AREA"]) 
{
  case "2":
    $code_url = "44c48f6c03";
    break;
  case "4":
    $code_url = "ab167838ae";
    break;
}
$_SESSION["CODE_URL"]     = $code_url;

switch ($_SESSION["CODIGO_AREA"]) 
{
    case "2":
        $cod_carrera = "4";
        break;
    case "4":
        $cod_carrera = "7";
        break;
}
$_SESSION["CODIGO_CARRERA"]     = $cod_carrera;
$_SESSION["ANIO_ACADEMICO"]     = "2022";
$_SESSION["TIPO_DOCUMENTO"]     = "01";
$_SESSION["NRO_DOCUMENTO"]      = $_POST['dni'];
$_SESSION["NOMBRES"]            = $_POST['nombres'];
$_SESSION["PRIMER_APELLIDO"]    = $_POST['apellido_paterno'];
$_SESSION["SEGUNDO_APELLIDO"]   = $_POST['apellido_materno'];
$_SESSION["CORREO_E"]           = $_POST['email'];
$_SESSION["COMENTARIO"]         = "Comentario";
$_SESSION["NRO_CELULAR"]        = "987654321";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Academia Trilce <?php echo date("Y"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
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
          <div class="col-lg-6 col-xs-6 contenedor_mobile_logo">
            <a href="https://www.trilce.edu.pe/academia">
							<img src="images/academia/logo.svg" alt="Logo Academia">
						</a>
          </div>
          <div class="col-lg-6 col-xs-6 contenedor_mobile_iconos">
            <a href="https://www.trilce.edu.pe/academia">
              <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
            </a>
            <a href="https://www.trilce.edu.pe/l/whatsapp">
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
      <div class="col-lg-6 fondo_landing_externo full_height2">
      </div>
      <div class="col-lg-6 pt-4 fondo_registro_2021 full_height2">
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
              <a href="https://www.trilce.edu.pe/l/whatsapp">
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
        <div class="ml80 mt40">
          <img src="images/academia/logo-simualcro-desktop.svg" alt="Logo Academia" class="icono_redux">
					<p class="subtitulo_academia_n">Alumno Externo</p>
          <p class="subtitulo_academia2 sin_p">Usted eligió: Simulacros UNI</p>
					<p class="subtitulo_academia">2. DATOS RESPONSABLE DE PAGO::</p>
          <form class="registration-form w_form" action="landing_gracias_uni_externo.php" method="post">
            <div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="apellido_paterno_rp" name="apellido_paterno_rp" placeholder="Apellido paterno del responsable de pago" required="required">
            </div>
						<div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="apellido_materno_rp" name="apellido_materno_rp" placeholder="Apellido materno del responsable de pago" required="required">
            </div>
            <div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="nombres_rp" name="nombres_rp" placeholder="Nombres del responsable de pago" required="required">
            </div>
            <div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="dni_rp" name="dni_rp" placeholder="DNI del responsable de pago" required="required" onkeypress="return isNumber(event)" onpaste="return false;" minlength="7" maxlength="9">
            </div>
						<div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="celular_rp" name="celular_rp" placeholder="Número de celular" onkeypress="return isNumber(event)" onpaste="return false;" minlength="7" maxlength="12" required="required" value="<?php echo $_SESSION["NRO_CELULAR"]; ?>" disabled >
            </div>
						<div class="form-group mb-2">
              <select class="form-control fondo_blanco icono_select" id="sexo_rp" name="sexo_rp" required="required" style="color: #b0aec6 !important;">
                <option value="">Sexo</option>
								<option value="F">Femenino</option>
								<option value="M">Masculino</option>
              </select>
            </div>
						<div class="form-group mb-2">
              <input type="email" class="form-control fondo_blanco" id="email_rp" name="email_rp" placeholder="Correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
            </div>
            <div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="parentesco_rp" name="parentesco_rp" placeholder="Parentesco">
            </div>
						<div class="form-group mb-2">
              <input type="checkbox" id="acepta" name="acepta"> <span class="texto_acepta" style="color: #fff">¿Requiere factura?</span>
            </div>
						<div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="ruc_rp" name="ruc_rp" placeholder="RUC">
            </div>
						<div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="razon_rp" name="razon_rp" placeholder="Razón Social">
            </div>
						<div class="form-group mb-2">
              <input type="text" class="form-control fondo_blanco" id="direccion_rp" name="direccion_rp" placeholder="Dirección Fiscal">
            </div>
						<div class="form-group mb-2">
              <a href="landing_formulario_uni_externo.php" class="botones_enlaces_redux">Anterior</a>
              <button type="submit" class="botones_enlaces_redux2">Registrarme</button>
            </div>
            <p>&nbsp;</p>
          </form>
					<p class="pie">© 2022 Academia Trilce. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </div>
</section>

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
      $('a').click(function()
      {
          $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 500);
          return false;
      });
    </script>
    <script>
        $(document).ready(function(){
           // Add minus icon for collapse element which is open by default
           $(".collapse.show").each(function(){
             $(this).prev(".card-header").find(".fa").addClass("la-angle-up").removeClass("la-angle-down");
           });
           
           // Toggle plus minus icon on show hide of collapse element
           $(".collapse").on('show.bs.collapse', function(){
             $(this).prev(".card-header").find(".fa").removeClass("la-angle-down").addClass("la-angle-up");
           }).on('hide.bs.collapse', function(){
             $(this).prev(".card-header").find(".fa").removeClass("la-angle-up").addClass("la-angle-down");
           });
       });
    </script>
</body>

</html>