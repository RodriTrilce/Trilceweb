<?php 
session_start();

$_SESSION["BLDG_TBL"]         = $_POST['local'];
$_SESSION["NIVEL_ESTUDIO"]    = $_POST['tipo_examen'];
$_SESSION["SERVICIO"]         = "ACASM";
switch ($_POST['area']) 
{
  case "A - Ciencias de la Salud":
    $cod_area = "A";
    break;
  case "B - Ciencias Básicas":
    $cod_area = "B";
    break;
  case "C - Ingenierías":
    $cod_area = "C";
    break;
  case "D - Ciencias Económicas y de la Gestión":
    $cod_area = "D";
    break;
  case "E - Humanidades y Ciencias Jurídicas y Sociales":
    $cod_area = "E";
    break;
}
$_SESSION["CODIGO_AREA"]    = $cod_area;

switch ($_SESSION["CODIGO_AREA"]) 
{
  case "A":
    $code_url = "445e88ff61";
    break;
  case "B":
    $code_url = "5aaca16140";
    break;
  case "C":
    $code_url = "8008a5e091";
    break;
  case "D":
    $code_url = "56904fe846";
    break;
  case "E":
    $code_url = "ba7b16fc45";
    break;
}
$_SESSION["CODE_URL"]     = $code_url;

switch ($_POST['carrera']) 
{
  case "Medicina Humana":
    $cod_carrera = "1";
    break;
  case "Ciencias de los Alimentos":
    $cod_carrera = "10";
    break;
  case "Toxicología":
    $cod_carrera = "11";
    break;
  case "Odontología":
    $cod_carrera = "12";
    break;
  case "Medicina Veterinaria":
    $cod_carrera = "13";
    break;
  case "Psicología":
    $cod_carrera = "14";
    break;
  case "Psicología Organizacional y de la Gestión Humana":
    $cod_carrera = "15";
    break;
  case "Obstetricia":
    $cod_carrera = "2";
    break;
  case "Enfermería":
    $cod_carrera = "3";
    break;
  case "Tec. Med. Lab. Clínico y Anatomía y Patológica":
    $cod_carrera = "4";
    break;
  case "Tec. Med. Terapia Física y Rehabilitación":
    $cod_carrera = "5";
    break;
  case "Tec. Med. Radiología":
    $cod_carrera = "6";
    break;
  case "Tec. Med. Terapia Ocupacional":
    $cod_carrera = "7";
    break;
  case "Nutrición":
    $cod_carrera = "8";
    break;
  case "Farmacia y Bioquímica":
    $cod_carrera = "9";
    break;


  case "Química":
    $cod_carrera = "16";
    break;
  case "Ciencias Biológicas":
    $cod_carrera = "17";
    break;
  case "Genética y Biotecnología":
    $cod_carrera = "18";
    break;
  case "Microbiología y Parasitología":
    $cod_carrera = "19";
    break;
  case "Física":
    $cod_carrera = "20";
    break;
  case "Matemática":
    $cod_carrera = "21";
    break;
  case "Estadística":
    $cod_carrera = "22";
    break;
  case "Investigación Operativa":
    $cod_carrera = "23";
    break;
  case "Computación Científica":
    $cod_carrera = "24";
    break;


  case "Ingeniería Química":
    $cod_carrera = "25";
    break;
  case "Ingeniería Agroindustrial":
    $cod_carrera = "26";
    break;
  case "Ingeniería Biomédica":
    $cod_carrera = "27";
    break;
  case "Ingeniería Mecánica de Fluidos":
    $cod_carrera = "28";
    break;
  case "Ingeniería Geológica":
    $cod_carrera = "29";
    break;
  case "Ingeniería Geográfica":
    $cod_carrera = "30";
    break;
  case "Ingeniería de Minas":
    $cod_carrera = "31";
    break;
  case "Ingeniería Metalúrgica":
    $cod_carrera = "32";
    break;
  case "Ingeniería Civil":
    $cod_carrera = "33";
    break;
  case "Ingeniería Ambiental":
    $cod_carrera = "34";
    break;
  case "Ingeniería Industrial":
    $cod_carrera = "35";
    break;
  case "Ingeniería Textil y Confesiones":
    $cod_carrera = "36";
    break;
  case "Ingeniería de Seguridad y Salud en el Trabajo":
    $cod_carrera = "37";
    break;
  case "Ingeniería Electrónica":
    $cod_carrera = "38";
    break;
  case "Ingeniería Eléctrica":
    $cod_carrera = "39";
    break;
  case "Ingeniería de Telecomunicaciones":
    $cod_carrera = "40";
    break;
  case "Ingeniería de Sistemas":
    $cod_carrera = "41";
    break;
  case "Ingeniería de Software":
    $cod_carrera = "42";
    break;


  case "Administración":
    $cod_carrera = "43";
    break;
  case "Administración de Turismo":
    $cod_carrera = "44";
    break;
  case "Administración de Negocios Internacionales":
    $cod_carrera = "45";
    break;
  case "Contabilidad":
    $cod_carrera = "46";
    break;
  case "Gestión Tributaria":
    $cod_carrera = "47";
    break;
  case "Auditoria Empresarial y del Sector Publico":
    $cod_carrera = "48";
    break;
  case "Economía":
    $cod_carrera = "49";
    break;
  case "Economía Pública":
    $cod_carrera = "50";
    break;
  case "Economía Internacional":
    $cod_carrera = "51";
    break;


  case "Literatura":
    $cod_carrera = "52";
    break;
  case "Filosofía":
    $cod_carrera = "53";
    break;
  case "Lingüística":
    $cod_carrera = "54";
    break;
  case "Comunicación Social":
    $cod_carrera = "55";
    break;
  case "Arte":
    $cod_carrera = "56";
    break;
  case "Bibliotecología y Ciencias de la Información":
    $cod_carrera = "57";
    break;
  case "Danza":
    $cod_carrera = "58";
    break;
  case "Conservación y Restauración":
    $cod_carrera = "59";
    break;
  case "Educación Inicial":
    $cod_carrera = "60";
    break;
  case "Educación Primaria":
    $cod_carrera = "61";
    break;
  case "Educación Secundaria":
    $cod_carrera = "62";
    break;
  case "Educación Física":
    $cod_carrera = "63";
    break;
  case "Derecho":
    $cod_carrera = "64";
    break;
  case "Ciencia Política":
    $cod_carrera = "65";
    break;
  case "Historia":
    $cod_carrera = "66";
    break;
  case "Sociología":
    $cod_carrera = "67";
    break;
  case "Antropología":
    $cod_carrera = "68";
    break;
  case "Arqueología":
    $cod_carrera = "69";
    break;
  case "Trabajo Social":
    $cod_carrera = "70";
    break;
  case "Geografía":
    $cod_carrera = "71";
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
          <p class="subtitulo_academia2 sin_p">Usted eligió: Simulacros San Marcos</p>
          <p class="subtitulo_academia">2. DATOS RESPONSABLE DE PAGO::</p>
          <form class="registration-form w_form" action="landing_gracias_san_marcos_externo.php" method="post">
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
              <input type="text" class="form-control fondo_blanco" id="celular_rp" name="celular_rp" placeholder="Número de celular" onkeypress="return isNumber(event)" onpaste="return false;" minlength="7" maxlength="12" required="required">
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
              <a href="landing_formulario_san_marcos_externo.php" class="botones_enlaces_redux">Anterior</a>
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

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="col-md-12 text-justify">
            <p class="p_terminos" style="text-align:center">
            <strong>
              POLÍTICA DE PROTECCIÓN DE DATOS PERSONALES DEL PORTAL WEB TRILCE
            </strong>
          </p>
          <p>
            <strong></strong>
          </p>
          <p>
            <strong>INTRODUCCIÓN </strong>
          </p>
          <p class="p_terminos">
            1. La presente Política de Protección de Datos Personales Trilce, describe
            el tratamiento que nuestra institución (en adelante Trilce) brinda a los
            datos personales que recopila de los usuarios en su portal web. Dicha
            política se ajusta a las disposiciones contenidas en la Ley de Protección
            de Datos Personales, Ley N° 29733, su reglamento y normas complementarias,
            adoptando para ello las medidas técnicas y organizativas necesarias para
            evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los
            datos personales facilitados por los titulares de datos personales. <strong></strong>
          </p>
          <p>
            <strong>DEFINICIONES</strong>
          </p>
          <p class="p_terminos">
            2. De acuerdo con la Ley N° 29733 – Ley de Protección de Datos Personales y
            su Reglamento, aprobado por el Decreto Supremo No. 003-2013-JUS, se define
            lo siguiente:
          </p>
          <p class="p_terminos">
            <strong>a) </strong>
            <strong>Datos personales:</strong>
            toda información sobre una persona natural que la identifica o hace
            identificable a través de medios que pueden ser razonablemente utilizados.
          </p>
          <p class="p_terminos">
            <strong>b) </strong>
            <strong>Tratamiento de datos personales:</strong>
            cualquier operación o procedimiento técnico, automatizado o no, que permite
            la recopilación, registro, organización, almacenamiento, conservación,
            elaboración, modificación, extracción, consulta, utilización, bloqueo,
            supresión, comunicación por transferencia o por difusión o cualquier otra
            forma de procesamiento que facilite el acceso, correlación o interconexión
            de los datos personales.
          </p>
          <p>
            <strong>III. CONSENTIMIENTO DEL USUARIO</strong>
          </p>
          <p class="p_terminos">
            3. Trilce se obliga a que de los datos personales obtenidos a través de
            formularios del portal web, cuenten previamente con el consentimiento
            expreso del titular para recopilar su información, los cuales serán
            tratados única y específicamente para la finalidad solicitada.
          </p>
          <p>
            <strong>VI. TRATAMIENTOS DE DATOS PERSONALES</strong>
          </p>
          <p class="p_terminos">
            4. Los datos personales facilitados por el Usuario se almacenarán en los
            bancos de datos que forman parte del sistema de información de Trilce y
            serán tratados para poder llevar a cabo sus finalidades.
          </p>
          <p class="p_terminos">
            5. Trilce no empleará los datos personales del Usuario para ninguna
            finalidad distinta a la que fueron suministrados, a no ser que se trate de
            una finalidad expresamente permitida o exigida por la normativa vigente
            aplicable, por orden judicial o una autoridad competente.
          </p>
          <p class="p_terminos">
            6. Trilce no compartirá ni cederá a terceros algún dato personal del
            Usuario sin el consentimiento previo y expreso de este último, salvo cuando
            dicha comunicación sea exigida por la legislación vigente, por orden
            judicial o por una autoridad competente.
          </p>
          <p class="p_terminos">
            7. El portal web de Trilce puede ofrecer enlaces (links) para acceder a
            otros portales web que no son parte de aquellos. Es responsabilidad del
            Usuario revisar las políticas de privacidad en dichos portales web para
            verificar el nivel de protección de sus datos personales en ese ambiente,
            lo que es ajeno a la responsabilidad de Trilce.
          </p>
          <p>
            <strong>MEDIDAS DE SEGURIDAD</strong>
          </p>
          <p class="p_terminos">
            8. Trilce se compromete a brindar todas las medidas técnicas, legales y
            administrativas necesarias para garantizar la seguridad y confidencialidad
            de los datos personales; los cuales serán tratados considerando los
            principios de legalidad, consentimiento, proporcionalidad, calidad,
            seguridad y los demás presentes en la normativa vigente referente a
            protección de datos personales, evitando que estos sean filtrados,
            difundidos o cualquier acción que ponga en peligro su información personal.
          </p>
          <p>
            <strong>RESPONSABILIDADES</strong>
          </p>
          <p class="p_terminos">
            9. Trilce asume que los datos personales proporcionados por el Usuario
            deben ser verdaderos, completos, exactos, vigentes y, corresponder a su
            verdadera identidad. Para cualquier modificación, el Usuario será
            responsable de comunicar inmediatamente a Trilce.<strong></strong>
          </p>
          <p class="p_terminos">
            10. El Usuario asumirá las responsabilidades por los daños y perjuicios,
            directo o indirecto que genere a Trilce y/o terceros por incumplir total o
            parcialmente lo señalado en el punto anterior.
          </p>
          <p>
            <strong>
              EJERCICIO DE LOS DERECHOS DE ACCESO, RECTIFICACIÓN, CANCELACIÓN Y
              OPOSICIÓN (ARCO).
            </strong>
          </p>
          <p class="p_terminos">
            11. Trilce debe garantizar la atención de los derechos protegidos que pueda
            ejercer el Titular de los Datos Personales, para lo cual deberá mantener
            disponibles canales, procedimientos e información para atender las
            solicitudes en los plazos establecidos por las Normas de Protección de
            Datos Personales.<strong></strong>
          </p>
          <p class="p_terminos">
            12. El Usuario podrá ejercitar sus derechos de Información, Acceso,
            Rectificación, Cancelación, Revocación, Oposición, etc. (ARCO) al uso de
            sus datos personales, de conformidad con la Ley de Protección de Datos
            Personales, Ley N° 29733. En ese sentido, el Usuario tiene derecho, entre
            otros, a acceder a su información personal, a solicitar la rectificación de
            datos inexactos y a revocar su consentimiento para el tratamiento de la
            misma; asimismo, podrá solicitar la supresión de sus datos u oponerse al
            tratamiento de los mismos, incluso cuando estos ya no resulten necesarios
            para los fines que motivaron su recopilación.
          </p>
          <p class="p_terminos">
            13. El ejercicio de estos derechos es gratuito. Para ello, puede dirigirse
            por correo electrónico a datospersonales@trilce.edu.pe adjuntando su
            solicitud y copia del documento de identidad (DNI/CE/Pasaporte) que
            acredite su titularidad sobre los datos personales respecto de los cuales
            ejercerá su derecho. También podrá hacerlo en cualquiera de nuestras
            oficinas ubicadas en el país. Si utiliza un representante legal, éste
            deberá acreditarse como tal.
          </p>
          <p class="p_terminos">
            14.
            <a href="https://www.bcrp.gob.pe/docs/sobre-el-bcrp/formato-arco-bcrp.pdf" target="_blank">
            </a>
            La atención de la solicitud será efectuada de acuerdo a los plazos
            previstos en la normatividad de protección de datos personales.
          </p>
          <p>
            <strong>CAMBIOS DE POLITICA DE PRIVACIDAD </strong>
            <strong></strong>
          </p>
          <p class="p_terminos">
            15. Trilce se reserva el derecho de modificar y/o actualizar la presente
            Política de Privacidad con fines de mejora, ya sea para adaptarla a futuros
            cambios que pueda requerir el marco normativo vigente, brindar una mejor
            calidad de servicio o comunicar nuevas alternativas relacionadas a la
            presente Política. Es responsabilidad del Usuario mantenerse informado
            sobre los cambios que se introduzcan a esta Política de Privacidad
            publicando en este Sitio la versión actualizada o modificada de la misma.
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
    <script>
        var subjectObject = {
            "Ciencias de la Salud": {
                "Medicina Humana": [],
        "Ciencias de los Alimentos": [],
        "Toxicología": [],
        "Odontología": [],
        "Medicina Veterinaria": [],
        "Psicología": [],
        "Psicología Organizacional y de la Gestión Humana": [],
        "Obstetricia": [],
        "Enfermería": [],
        "Tec. Med. Lab. Clínico y anatomía y Patológica": [],
        "Tec. Med. Terapia física y rehabilitación": [],
        "Tec. Med. Radiología": [],
        "Tec. Med. Terapia Ocupacional": [],
        "Nutrición": [],
        "Farmacia y Bioquímica": [],
            },      
      "Ciencias Básicas": {
                "Química": [],
        "Ciencias Biológicas": [],
        "Genética y Biotecnología": [],
        "Microbiología y Parasitología": [],
        "Física": [],
        "Matemática": [],
        "Estadística": [],
        "Investigación Operativa": [],
        "Computación científica": [],
            },
      "Ingenierías": {
                "Ingeniería Química": [],
        "Ingeniería Agroindustrial": [],
        "Ingeniería Biomédica": [],
        "Ingeniería Mecánica de Fluidos": [],
        "Ingeniería Geológica": [],
        "Ingeniería Geográfica": [],
        "Ingeniería de Minas": [],
        "Ingeniería Metalúrgica": [],
        "Ingeniería Civil": [],
        "Ingeniería Ambiental": [],
        "Ingeniería Industrial": [],
        "Ingeniería Textil y Confesiones": [],
        "Ingeniería de Seguridad y Salud en el Trabajo": [],
        "Ingeniería Electrónica": [],
        "Ingeniería Eléctrica": [],
        "Ingeniería de Telecomunicaciones": [],
        "Ingeniería de Sistemas": [],
        "Ingeniería de Software": [],
            },
      "Ciencias Económicas y de la Gestión": {
                "Administración": [],
        "Administración de Turismo": [],
        "Administración de Negocios Internacionales": [],
        "Contabilidad": [],
        "Gestión Tributaria": [],
        "Auditoria Empresarial y del Sector Publico": [],
        "Economía": [],
        "Economía Pública": [],
        "Economía Internacional": [],
            },
      "Humanidades y Ciencias Jurídicas y Sociales": {
                "Literatura": [],
        "Filosofía": [],
        "Lingüística": [],
        "Comunicación Social": [],
        "Bibliotecología y Ciencias de la Información": [],
        "Danza": [],
        "Conservación y Restauración": [],
        "Educación Inicial": [],
        "Educación Primaria": [],
        "Educación Secundaria": [],
        "Educación Física": [],
        "Derecho": [],
        "Ciencia Política": [],
        "Historia": [],
        "Sociología": [],
        "Antropología": [],
        "Trabajo Social": [],
        "Geografía": [],
            }
    }
    window.onload = function()
    {
        var subjectSel = document.getElementById("area");
        var topicSel = document.getElementById("carrera");
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