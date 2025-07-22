<?php

$servername = "localhost";
$username   = "root";
$password   = "cYPS-m=gXoZVE6HkH0{6";
$dbname     = "web_colegio_2021";

/* PARÁMETROS DE WS */
$ORIGEN_INFO     = "FRWEB";
$TIPO_SERVICIO   = "COLEG";
$SERVICIO        = "COLAE";
$ANIO_ACADEMICO  = "2026";
$TIPO_DOCUMENTO  = "01";
$SEXO            = ""; // Se puede capturar si se agrega al formulario

/* MAPEO DE GRADO */
$info_grado = $_POST['grado'];
$grado_map = [
  "Inicial" => ["00004", 4],
  "Primaria - 1er Grado" => ["00006", 6],
  "Primaria - 2do Grado" => ["00007", 7],
  "Primaria - 3ro Grado" => ["00008", 8],
  "Primaria - 4to Grado" => ["00009", 9],
  "Primaria - 5to Grado" => ["00010", 10],
  "Primaria - 6to Grado" => ["00011", 11],
  "Secundaria - 1er Año" => ["00013", 13],
  "Secundaria - 2do Año" => ["00014", 14],
  "Secundaria - 3ro Año" => ["00015", 15],
  "Secundaria - 4to Año" => ["00016", 16],
  "Secundaria - 5to Año" => ["00019", 19],
];
[$NIVEL_ESTUDIO, $valor_grado] = $grado_map[$info_grado] ?? ["", 0];

/* MAPEO DE SEDE */
$info_sede = $_POST['sede'];
$sede_map = [
  "Arequipa" => "BECOLARP",
  "Breña" => "BRENACOL",
  "Callao" => "ARCOLCAL",
  "Chanchamayo" => "ARCOLCHA",
  "Chiclayo" => "00009",
  "Chorrillos" => "ARCOLCHO",
  "Comas" => "ARCOLCOP",
  "Huancayo" => "ARCOLHYO",
  "La Molina" => "00014",
  "Los Olivos" => "ARCOLLOL",
  "Maranga" => "ARCOLMAR",
  "Ñaña" => "ARCOLNAN",
  "Pro" => "ARCOLPRO",
  "Piura" => "00019",
  "Roma" => "ARCOLROM",
  "Salamanca" => "00019",
  "Salaverry" => "ARCOLSAP",
  "San Isidro" => "ISCOLSIS",
  "San Juan de Lurigancho" => "00019",
  "Santa Anita" => "00019",
  "Marsano" => "BECOLMAR",
  "Villa El Salvador" => "BECOLVES",
  "Villa Maria del Triunfo" => "BECOLVMP",
  "Trujillo" => "00019",
];
$BLDG_TBL = $sede_map[$info_sede] ?? "";

/* DATOS DEL FORMULARIO */
$NRO_DOCUMENTO     = $_POST['dni'];
$NOMBRES           = $_POST['nombres'];
$APELLIDO_PATERNO  = $_POST['apellido_paterno'];
$APELLIDO_MATERNO  = $_POST['apellido_materno'];
$CORREO_E          = $_POST['email'];
$NRO_TELEFONO      = $_POST['telefono'];
$nombres_apellidos = "$NOMBRES $APELLIDO_PATERNO $APELLIDO_MATERNO";

/* LOG DE RESPALDO */
date_default_timezone_set('America/Lima');
$fecha = date("d/m/Y h:i:s");
file_put_contents("logs.txt", "\n$NOMBRES; $APELLIDO_PATERNO; $APELLIDO_MATERNO; $NRO_DOCUMENTO; $CORREO_E; $NRO_TELEFONO; $info_sede; $info_grado; $fecha", FILE_APPEND);


/* MANDAR PHPMAILER */


/* GUARDAR EN BD */
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO lista_espera_api (
  nombres_apellidos, nombres, apellido_paterno, apellido_materno, nro_documento, correo_e, nro_telefono, sede, grado,
  origen_info, tipo_servicio, servicio, nivel_estudio, anio_academico, bldg_tbl, tipo_documento, sexo
) VALUES (
  '$nombres_apellidos', '$NOMBRES', '$APELLIDO_PATERNO', '$APELLIDO_MATERNO', '$NRO_DOCUMENTO',
  '$CORREO_E', '$NRO_TELEFONO', '$info_sede', '$info_grado',
  '$ORIGEN_INFO', '$TIPO_SERVICIO', '$SERVICIO', '$NIVEL_ESTUDIO', '$ANIO_ACADEMICO', '$BLDG_TBL', '$TIPO_DOCUMENTO', '$SEXO'
)";

if ($conn->query($sql) !== TRUE) {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <!--base href="/educal/"-->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Lista espera 2026 - Trilce</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/preloader.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/backToTop.css">
   <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
   <link rel="stylesheet" href="assets/css/elegantFont.css">
   <link rel="stylesheet" href="assets/css/default.css">
   <link rel="stylesheet" href="assets/css/style.css?v=1.0"> 
   <link rel="stylesheet" href="assets/line-awesome/css/line-awesome.css">
   <link rel="stylesheet" href="assets/line-awesome/css/line-awesome.min.css">

</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- Add your site or application content here -->

   <!-- preloader  -->
   <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader">
         <div class="animation-preloader">
            <div class="spinner"></div>
         </div>
         <div class="loader">
            <div class="row">
               <div class="col-3 loader-section section-left">
                  <div class="bg"></div>
               </div>
               <div class="col-3 loader-section section-left">
                  <div class="bg"></div>
               </div>
               <div class="col-3 loader-section section-right">
                  <div class="bg"></div>
               </div>
               <div class="col-3 loader-section section-right">
                  <div class="bg"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- preloader end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

   <!-- header area start -->
   <header>
      <div id="header-sticky" class="header__area header__transparent header__padding-2">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                  <div class="header__left d-flex">
                     <div class="logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo-trilce-45-desktop-blanco.svg" class="logo-white"
                              alt="logo-blanco">
                           <img src="assets/img/logo/logo-trilce-45-desktop-naranja.svg" class="logo-black"
                              alt="logo-naranja">

                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                  <div class="header__right d-flex justify-content-end align-items-center">
                     <div class="main-menu main-menu-2">
                        <nav id="mobile-menu">
                           <ul>
                              <li><a href="#">Inicio</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div class="header__btn header__btn-2 ml-50 d-sm-block ms-0 ms-sm-50">
                        <a href="https://www.trilce.edu.pe/l/lista-espera-2026" class="e-btn"><i class="lab la-whatsapp iconx28 d-none d-md-inline"></i>Contacta a un asesor</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->


   <!-- sidebar area start -->
   <div class="sidebar__area">
      <div class="sidebar__wrapper">
         <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
            </button>
         </div>
         <div class="sidebar__content">
            <div class="logo mb-40">
               <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="logo">
               </a>
            </div>
            <div class="mobile-menu fix"></div>

            <div class="sidebar__search p-relative mt-40 ">
               <form action="#">
                  <input type="text" placeholder="Search...">
                  <button type="submit"><i class="fad fa-search"></i></button>
               </form>
            </div>
            <div class="sidebar__cart mt-30">
               <a href="#">
                  <div class="header__cart-icon">
                     <svg viewBox="0 0 24 24">
                        <circle class="st0" cx="9" cy="21" r="1" />
                        <circle class="st0" cx="20" cy="21" r="1" />
                        <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6" />
                     </svg>
                  </div>
                  <span class="cart-item">2</span>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- sidebar area end -->
   <div class="body-overlay"></div>
   <!-- sidebar area end -->

   <main>

      <!-- hero area start -->
      <section class="hero__area hero__height hero__height-2 d-flex align-items-center image-bg p-relative">

         <div class="container">
            <div class="hero__content-wrapper mt-90">
               <div class="row align-items-center">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="hero__thumb-wrapper mb--120">
                        <div class="hero__thumb-2 scene">
                           <div class="text-center">
                              <!-- Imagen para escritorio (≥992px) -->
                              <img src="assets/img/hero/img-banner-desktop.png" class="escritorio d-none d-lg-block"
                                 alt="Banner Escritorio">

                              <!-- Imagen para tablet (≥768px y <992px) -->
                              <img src="assets/img/hero/img-banner-tablet.png"
                                 class="img-fluid d-none d-md-block d-lg-none" alt="Banner Tablet">

                              <!-- Imagen para móvil (<768px) -->
                              <img src="assets/img/hero/img-banner-mobile.png" class="img-fluid d-block d-md-none"
                                 alt="Banner Móvil">
                           </div>
                        </div>
                     </div>
                  </div>

                  <!--FORMULARIO-->
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 section_form css_gracias">
                     <div class="div_form hero__form hero__gracias" id="formulario">
                        <i class="las la-laugh-beam color-naranja x80"></i>
                        <h3 class="titulo_form mt-9">¡Gracias por tu interés!</h3>
                        <p class="subtitulo_form subtitulo_form_2 mt-12">Nos pondremos en contacto contigo en cuanto comience el proceso de admisión 2026. <br>
Te informaremos oportunamente sobre las fechas, requisitos y demás detalles importantes.</p>
                                                         <div class="text-center d-flex flex-column align-items-start mt-4">
                                 <button type="button" class="btn naranja-bg call">Volver</button>
                              </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- hero area end -->

      <!-- services area start -->
      <section class="services__area pt-115 white-bg fix z100">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
                  <div class="section__title-wrapper section-padding mb-60 text-center">
                     <h2 class="section__title">La mejor <span class="yellow-bg">propuesta <img
                              src="assets/img/shape/yellow-bg-2.png" alt=""></span> educativa</h2>
                     <p>Somos una de las organizaciones educativas más grandes del país con 45 años de experiencia
                        brindando una Educación de Calidad.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="services__item rojizo-bg mb-30">
                     <div class="services__icon">
                        <i class="las la-handshake"></i>
                     </div>
                     <div class="services__content">
                        <h3 class="services__title"><a href="#">Misión</a></h3>
                        <p>Cambiar la vida de nuestros estudiantes y colaboradores generándoles pasión por alcanzar sus
                           sueños.</p>

                        <a href="#" class="link-btn-2">
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="services__item amarillo-bg mb-30">
                     <div class="services__icon">
                        <i class="las la-chalkboard-teacher"></i>
                     </div>
                     <div class="services__content">
                        <h3 class="services__title"><a href="#">Visión</a></h3>
                        <p>Hacer de la educación un medio que logre un mundo mejor para vivir, promoviendo el cambio que
                           nuestra sociedad necesita.</p>

                        <a href="#" class="link-btn-2">
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="services__item azul-bg mb-30">
                     <div class="services__icon">
                        <i class="las la-certificate"></i>
                     </div>
                     <div class="services__content">
                        <h3 class="services__title"><a href="#">Propósito</a></h3>
                        <p>Brindar una excelente educación a los alumnos, para lograr que cumplan sus sueños.</p>

                        <a href="#" class="link-btn-2">
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="services__item morado-bg mb-30">
                     <div class="services__icon">
                        <i class="las la-hand-holding-heart"></i>
                     </div>
                     <div class="services__content">
                        <h3 class="services__title"><a href="#">Valores</a></h3>
                        <ul class="services__ul">
                           <li><span class="services__especial">&#9654;</span> Innovación</li>
                           <li><span class="services__especial">&#9654;</span> Respeto</li>
                           <li><span class="services__especial">&#9654;</span> Solidaridad</li>
                           <li><span class="services__especial">&#9654;</span> Sinceridad</li>
                        </ul>

                        <a href="#" class="link-btn-2">
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item mb-30">
                     <div class="counter__icon user mb-15">
                        <i class="las la-graduation-cap color-rojizo iconx64"></i>
                     </div>
                     <div class="counter__content">
                        <h4 class="x-number"><span data-purecounter-duration="2.5" data-purecounter-end="45"
                              class="purecounter">0</span>
                        </h4>
                        <p class="p-icon">Años de experiencia</p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item mb-30">
                     <div class="counter__icon book mb-15">
                        <i class="las la-pencil-ruler color-amarillo iconx64"></i>
                     </div>
                     <div class="counter__content">
                        <h4 class="x-number"><span data-purecounter-duration="1.5" data-purecounter-end="18"
                              class="purecounter">0</span>
                        </h4>
                        <p class="p-icon">Colegios en Lima</p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item mb-30">
                     <div class="counter__icon graduate mb-15">
                        <i class="las la-map-marked-alt color-azul iconx64"></i>
                     </div>
                     <div class="counter__content">
                        <h4 class="x-number"><span data-purecounter-duration="2.5" data-purecounter-end="6"
                              class="purecounter">0</span>
                        </h4>
                        <p class="p-icon">Colegios en provincia</p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item mb-30">
                     <div class="counter__icon globe mb-15 color-morado iconx64">
                        <i class="las la-laugh-beam"></i>
                     </div>
                     <div class="counter__content">
                        <h4 class="x-number">+<span data-purecounter-duration="3.5" data-purecounter-end="24000"
                              class="purecounter">0</span></h4>
                        <p class="p-icon">Alumnos</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- services area end -->

      <!-- about area start -->
      <section class="about__area pt-20 pb-0 white-bg">
         <div class="container">
            <div class="row align-items-center">
               <div
                  class="col-xxl-6 col-xl-6 col-lg-6 d-flex justify-content-start justify-content-lg-end ps-5 ps-lg-0">
                  <div class="about__content pl-70 pr-0 pt-25">
                     <div class="section__title-wrapper mb-25">
                        <h2 class="section__title">Perfil del<br><span class="yellow-bg-big">Alumno <img
                                 src="assets/img/shape/yellow-bg-2.png" alt=""></span>Trilce </h2>
                     </div>
                     <div class="about__list mb-35">
                        <ul>
                           <li class="d-flex align-items-center"> <i class="icon_check"></i>1. Sólida formación en
                              valores</li>
                           <li class="d-flex align-items-center"> <i class="icon_check"></i> 2. Alto nivel académico
                           </li>
                           <li class="d-flex align-items-center"> <i class="icon_check"></i> 3. Conciencia ecológica
                           </li>
                           <li class="d-flex align-items-center"> <i class="icon_check"></i> 4. Vocación de servicio y
                              compromiso social</li>
                        </ul>
                     </div>
                  </div>
               </div>


               <div class="col-xxl-5 col-xl-6 col-lg-6 d-flex justify-content-center justify-content-lg-center">
                  <div class="about__thumb-wrapper">
                     <div class="about__thumb-2 scene"
                        style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                        <img class="about-big" src="assets/img/hero/img-perfil-alumno.png" alt="">
                        <div class="about__mov d-flex layer" data-depth="0.1"
                           style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(-5.73789px, 0.660016px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                           <img src="assets/img/hero/bg-perfil-alumno.svg" alt="">
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- about area end -->

      <!-- sistema educativo area start -->
      <section class="sistema__area pt-115 pb-40 grey-bg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
                  <div class="section__title-wrapper section-padding mb-60 text-center">
                     <h2 class="section__title">Desarrollamos un sólido <span class="yellow-bg">sistema <img
                              src="assets/img/shape/yellow-bg-2.png" alt=""></span> educativo</h2>
                     <p>del más alto nivel académico.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="col">
                     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sistema__item azul-bg mb-25">
                           <div class="sistema__content">
                              <h3 class="sistema__title"><a href="#">Inicial</a></h3>
                              <p>En este nivel, desarrollamos las capacidades afectivas, motrices, sociales y cognitivas
                                 que permiten al niño desenvolverse de manera asertiva.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sistema__item morado-bg mb-25">
                           <div class="sistema__content">
                              <h3 class="sistema__title"><a href="#">Primaria</a></h3>
                              <p>En este nivel, establecemos las bases de una sólida formación integral, con valores y
                                 conciencia ecológica. El aprendizaje se centra en la experiencia, uso de recursos
                                 interactivos y la investigación.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sistema__item naranja-bg mb-25">
                           <div class="sistema__content">
                              <h3 class="sistema__title"><a href="#">Secundaria</a></h3>
                              <p>En este nivel, los estudiantes consolidan los conocimientos adquiridos con un método de
                                 aprendizaje intensivo de Matemáticas, Ciencias y Letras.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex justify-content-center align-items-center">
                  <div class="sistema__thumb text-center fade-slider">
                     <img src="assets/img/sistema/img-inicial-desktop.png" alt="inicial" class="active">
                     <img src="assets/img/sistema/img-secundaria-desktop.png" alt="secundaria">
                     <img src="assets/img/sistema/img-primaria-desktop.png" alt="primaria">
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- sistema educativo area end -->

      <!-- pilares area start -->
      <section class="pilares__area pt-50 pb-40 white-bg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
                  <div class="section__title-wrapper section-padding mb-10 text-center">
                     <h2 class="section__title">
                        Nuestros <span class="yellow-bg">Pilares<img src="assets/img/shape/yellow-bg-2.png"
                              alt=""></span>
                     </h2>
                  </div>
               </div>

               <div class="col-xxl-12">
                  <div class="flip__slider swiper-container pb-50 pt-50">
                     <div class="swiper-wrapper">
                        <!-- Flip Box 1 -->
                        <div class="swiper-slide">
                           <div class="flip-box">
                              <div class="flip-box__inner">
                                 <div class="flip-box__front">
                                    <img src="assets/img/pilares/img-1-ex-plana-docente.png" alt="">
                                    <div class="flip-box__wrapper amarillo-bg pt-40 pl-40 pr-40 text-left">
                                       <h3 class="">
                                          Excelente plana docente
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="flip-box__back amarillo-bg">
                                    <div class="flip-box__wrapper amarillo-bg pt-50 pl-20 pr-20 text-left">
                                       <h3 class="">
                                          Excelente plana docente
                                       </h3>
                                       <p class="text-left">Nuestros docentes son seleccionados de las mejores universidades del país, especialistas en el curso que enseñan y con amplia experiencia en la labor preuniversitaria. Utilizan los recursos tecnológicos para desarrollar clases dinámicas e innovadoras del más alto nivel académico.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Flip Box 2 -->
                        <div class="swiper-slide">
                           <div class="flip-box">
                              <div class="flip-box__inner">
                                 <div class="flip-box__front">
                                    <img src="assets/img/pilares/img-2-aux-permanete.png" alt="">
                                    <div class="flip-box__wrapper azul-bg pt-40 pl-40 pr-40 text-left">
                                       <h3 class="">
                                          Auxiliar permanente
                                       </h3>
                                       <p>
                                          (Inicial - Primaria)
                                       </p>
                                    </div>
                                 </div>
                                 <div class="flip-box__back azul-bg">
                                    <div class="flip-box__wrapper azul-bg pt-50 pl-20 pr-20 text-left">
                                       <h3 class="">
                                          Auxiliar permanente
                                       </h3>
                                       <p>(Inicial - Primaria)</p>
                                       <p class="text-left">Contamos con una auxiliar permanente por aula de Inicial a
                                          6.º grado de Primaria. Ella apoya al docente en aspectos relacionados con la
                                          formación y disciplina de los alumnos.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Flip Box 3 -->
                        <div class="swiper-slide">
                           <div class="flip-box">
                              <div class="flip-box__inner">
                                 <div class="flip-box__front">
                                    <img src="assets/img/pilares/img-3-tut-aula.png" alt="">
                                    <div class="flip-box__wrapper morado-bg  pt-40 pl-40 pr-40 text-left">
                                       <h3 class="">
                                          Una tutora por aula
                                       </h3>
                                       <p>(Secundaria)</p>
                                    </div>
                                 </div>
                                 <div class="flip-box__back morado-bg">
                                    <div class="flip-box__wrapper morado-bg pt-50 pl-20 pr-20 text-left">
                                       <h3 class="">
                                          Una tutora por aula
                                       </h3>
                                       <p>(Secundaria)</p>
                                       <p class="text-left">Contamos con una tutora de manera permanente, responsable
                                          del seguimiento académico y conductual de cada alumno. También participa en
                                          las actividades psicopedagógicas de los estudiantes y brinda apoyo a los
                                          docentes.</p>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Flip Box 4 -->
                        <div class="swiper-slide">
                           <div class="flip-box">
                              <div class="flip-box__inner">
                                 <div class="flip-box__front">
                                    <img src="assets/img/pilares/img-4-valores.png" alt="">
                                    <div class="flip-box__wrapper celeste-bg pt-40 pl-40 pr-40 text-left">
                                       <h3 class="">
                                          Educación con valores
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="flip-box__back celeste-bg">
                                    <div class="flip-box__wrapper celeste-bg pt-50 pl-20 pr-20 text-left">
                                       <h3 class="">
                                          Educación con valores
                                       </h3>
                                       <p class="text-left">Desarrollamos las siguientes campañas: “Ser mejores
                                          personas”, “Frente al acoso escolar”, “Contra el consumo de drogas”, “Menos
                                          plástico, más vida” y otras orientadas a generar una buena convivencia dentro
                                          y fuera del colegio. Además, propiciamos el aprecio por nuestra cultura, así
                                          como el desarrollo artístico, intelectual y físico mediante nuestras
                                          competencias InterTrilce.</p>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Flip Box 5 -->
                        <div class="swiper-slide">
                           <div class="flip-box">
                              <div class="flip-box__inner">
                                 <div class="flip-box__front">
                                    <img src="assets/img/pilares/img-5-sist-5to.png" alt="">
                                    <div class="flip-box__wrapper naranja-bg pt-40 pl-40 pr-40 text-left">
                                       <h3 class="">
                                          Sistema 5.º año
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="flip-box__back naranja-bg">
                                    <div class="flip-box__wrapper naranja-bg pt-50 pl-20 pr-20 text-left">
                                       <h3 class="">
                                          Sistema 5.º año
                                       </h3>
                                       <p class="text-left">Nuestro exigente plan de estudios está diseñado para la
                                          preparación exclusiva a la UNI, San Marcos* y Católica. Brindamos seminarios
                                          especializados con docentes de nuestra Academia y realizamos simulacros tipo
                                          admisión.</p>
                                       <p>*Válido para las demás universidades del país.</p>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>

                     <!-- Swiper Controls -->
                     <div class="swiper-pagination"></div>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- pilares area end -->


      <!--Primeros puestos-->
      <section class="puestos__area pt-40 pb-50 white-bg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
                  <div class="section__title-wrapper section-padding mb-10 text-center">
                     <h2 class="section__title">
                        ¡Orgullosos de nuestros <span class="yellow-bg">CACHIMBOS!<img
                              src="assets/img/shape/yellow-bg-2.png" alt=""></span>
                     </h2>
                  </div>
               </div>

               <section class="process">
                  <div class="process__container">
                     <div class="process__accordions">
                        <ul class="accordions__list">
                           <li class="accordions__item">
                              <button class="accordions__control" aria-expanded="false">
                                 <span class="accordions__title">Primeros Puestos UNI</span>
                                 <span class="accordions__icon"></span>
                              </button>
                              <div class="accordions__content text" aria-hidden="true">
                                 <div class="accordions__grid">
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2025-I</button>
                                       <p class="grid__student">Daniel Yupanqui Cutire</p>
                                       <p class="grid__career">Ingeniería Mecánica</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2024</button>
                                       <p class="grid__student">John Montoya Jauregui</p>
                                       <p class="grid__career">Ingeniería de Telecomunicaciones</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2024-I</button>
                                       <p class="grid__student">Fabio Quispe Solano</p>
                                       <p class="grid__career">Ingeniería de Ciberseguridad</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30">
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Ex. Escolares 2023-I</button>
                                       <p class="grid__student">Joao Risco</p>
                                       <p class="grid__career">Ingeniería de Sistemas</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2022-I</button>
                                       <p class="grid__student">Jorge Castillo Fernández-Dávila</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2021</button>
                                       <p class="grid__student">Gina Retuerto Valerio</p>
                                       <p class="grid__career">Ingeniería Económica</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30">
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2021</button>
                                       <p class="grid__student">Nadia Romaní</p>
                                       <p class="grid__career">Ingeniería Química</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2021</button>
                                       <p class="grid__student">José Gonzales</p>
                                       <p class="grid__career">Ingeniería Civil</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2019-II</button>
                                       <p class="grid__student">Diego Vargas</p>
                                       <p class="grid__career">Ingeniería Civil</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30">
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2019-II</button>
                                       <p class="grid__student">Piero Pérez</p>
                                       <p class="grid__career">Ingeniería Mecatrónica</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2019-II</button>
                                       <p class="grid__student">Eduardo Díaz</p>
                                       <p class="grid__career">Arquitectura</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Examen 2019-II</button>
                                       <p class="grid__student">Davis Suarez</p>
                                       <p class="grid__career">Física</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30 mb-30">
                                    <div class="grid__item">
                                       <button class="grid__button uni-bg">Ex. Escolares 2019-1</button>
                                       <p class="grid__student">Daniela Velarde</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>
                                 </div>
                              </div>

                           </li>
                           <li class="accordions__item">
                              <button class="accordions__control" aria-expanded="false">
                                 <span class="accordions__title">Primeros Puestos San Marcos</span>
                                 <span class="accordions__icon"></span>
                              </button>
                              <div class="accordions__content text" aria-hidden="true">
                                 <div class="accordions__grid">
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2025-II</button>
                                       <p class="grid__student">Matías Cervantes García</p>
                                       <p class="grid__career">Ingeniería de Telecomunicaciones</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2024-II</button>
                                       <p class="grid__student">Ana Montoya Namoc</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2024-I</button>
                                       <p class="grid__student">José Zegarra Vigo</p>
                                       <p class="grid__career">Genética y Biotecnología</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30">
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2024-I</button>
                                       <p class="grid__student">Carla Del Castillo</p>
                                       <p class="grid__career">Odontología</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2024-I</button>
                                       <p class="grid__student">Jade Ramírez Avalos</p>
                                       <p class="grid__career">Educación Primaria</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2023-I</button>
                                       <p class="grid__student">Joao Risco</p>
                                       <p class="grid__career">Contabilidad</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30 mb-30">
                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2019-II</button>
                                       <p class="grid__student">Rafael Salas Meléndez</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>

                                    <div class="grid__item">
                                       <button class="grid__button sanMarcos-bg">Examen 2019-I</button>
                                       <p class="grid__student">Diego Castillo Utani</p>
                                       <p class="grid__career">Ingeniería Ambiental</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="accordions__item">
                              <button class="accordions__control" aria-expanded="false">
                                 <span class="accordions__title">Primeros Puestos Católica</span>
                                 <span class="accordions__icon"></span>
                              </button>
                              <div class="accordions__content text" aria-hidden="true">
                                 <div class="accordions__grid">
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen 2025-I</button>
                                       <p class="grid__student">Daniela Jasumi Feria Navarro</p>
                                       <p class="grid__career">Letras</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen 2025-I</button>
                                       <p class="grid__student">Andrés Zelada Solano</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen 2024-II</button>
                                       <p class="grid__student">Valeria Linares Pérez</p>
                                       <p class="grid__career">Letras</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30">
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen POP 2024-I</button>
                                       <p class="grid__student">Sergio Benavides</p>
                                       <p class="grid__career">Letras</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen 2023-I</button>
                                       <p class="grid__student">Joao Risco</p>
                                       <p class="grid__career">Facultad de Letras</p>
                                    </div>
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen POP 2021</button>
                                       <p class="grid__student">Lesly Guzman Espector</p>
                                       <p class="grid__career">Letras</p>
                                    </div>
                                 </div>

                                 <div class="accordions__grid mt-30 mb-30">
                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen POP 2020</button>
                                       <p class="grid__student">Antonio Herrera</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>

                                    <div class="grid__item">
                                       <button class="grid__button catolica-bg">Examen POP 2019</button>
                                       <p class="grid__student">Jimm Cisneros</p>
                                       <p class="grid__career">Máximo puntaje</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </section>
      <!-- Primeros puestos area end -->




      <section class="call__area pb-60 bg-white white-bg">
         <div class="container">
            <div class="d-flex justify-content-center">
               <div class="flip-box">
                  <div class="flip-box-inner d-flex justify-content-center align-items-center">
                     <!-- Frente -->
                     <div class="flip-box-front d-flex align-items-center">
                        <div class="pl-50 text-white flex-grow-1">
                           <i class="las la-ambulance iconx50"></i>
                           <h5 class="mb-1 txtCalla">Seguro Escolar<br>contra accidentes*</h5>
                           <h4 class="fw-bold txtCallb">¡Gratuito!</h4>
                        </div>
                        <div class="image-side">
                           <img src="assets/img/call/img-seg-gratuito.png" alt="Seguro gratuito" class="img-fluid">
                        </div>
                     </div>

<!--Back-->
<div class="flip-box-back row">
   <!-- Columna izquierda: Ícono -->
<div class="col-12 col-md-3 d-flex align-items-start justify-content-start justify-content-md-center">
      <i class="las la-thumbtack iconx64 color-naranja"></i>
   </div>

   <!-- Columna derecha: Contenido -->
   <div class="col-12 col-md-9 order-0 order-md-1">
      <h5 class="mb-1 seguro">Seguro Escolar contra accidentes*</h5>
      <div>
         <p class="texseguro">
            *Cobertura anual, desde el primer día de clases, en todo el país las 24 horas del día.
         </p>
         <br>
         <p class="texseguro">
            *Revisar cartilla informativa en la Intranet Trilce, sección Documentos, al finalizar
            la matrícula online 2026.
         </p>
      </div>
   </div>
</div>


                  </div>
               </div>
            </div>
      </section>
   </main>

   <!-- footer area start -->
   <footer>
      <div class="footer__area naranja-bg">
         <div class="footer__top pt-100 pb-0">
            <div class="container">
               <div class="row">
                  <!-- VIDEO: primero en mobile/tablet, segundo en desktop -->
                  <div class="col-xxl-6 col-xl-6 col-lg-6 order-1 order-lg-2">
                     <div class="sistema__thumb text-center">
                        <div class="ratio ratio-16x9">
                           <iframe src="https://www.youtube.com/embed/iJJKjPZyQOk?si=q5FOeyJj4IDs_RLS"
                              title="Video Trilce"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen>
                           </iframe>
                        </div>
                     </div>
                  </div>

                  <!-- TEXTO: segundo en mobile/tablet, primero en desktop -->
                  <div class="col-xxl-6 col-xl-6 col-lg-6 order-2 order-lg-1">
                     <div class="col">
                        <div class="ps-3 ps-sm-4 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 
         pe-2 pe-sm-4 pe-md-5 pe-lg-5 pe-xl-5 pe-xxl-5 
         pt-3 pt-md-4 pt-lg-5 text-xl-start text-center">
                           <div class="mb-25">
                              <h2 class="section__title color-blanco">Conoce más sobre<br>nosotros</h2>
                           </div>
                           <div class="mb-35">
                              <button class="footer__grid__button__especial white-bg">¡Registrate aquí!</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <div class="footer__bottom footer__bottom-2">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="footer__copyright footer__copyright-2 text-center">
                           <p>© 2025 Colegio Trilce. Todos los derechos reservados. <a
                                 href="https://www.trilce.edu.pe/colegio"></a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </footer>
   <!-- footer area end -->
   <!-- JS here -->
   <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
   <script src="assets/js/vendor/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/jquery.meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/jquery.fancybox.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/parallax.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/main.js?v=1.0"></script>


</body>

</html>