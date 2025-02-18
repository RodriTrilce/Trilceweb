<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Academia Trilce 2021</title>
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

</head>

<body>

    <!-- Loader -->
    <!--div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div-->

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.php">
                <img src="images/logo-trilce-academia-white.svg" alt="" class="logo-dark" width="100">
                <img src="images/logo-light.png" alt="" class="logo-light" height="24" />
            </a>
            <img src="images/ico_telefono.png" alt="Trilce Academias" class="vista_icono">
            <img src="images/ico_whatsapp.png" alt="Trilce Academias" class="vista_icono">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item menu">
                        <a data-scroll href="index.php" class="nav-link">INICIO</a>
                    </li>
                    <li class="nav-item menu_activo">
                        <a data-scroll href="#home" class="nav-link" style="color: #FF4F00 !important">¡NUEVOS CICLOS!</a>
                    </li>
                    <li class="nav-item menu">
                        <a data-scroll href="" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item menu">
                        <a data-scroll href="" class="nav-link">NOSOTROS</a>
                    </li>
                    <li class="nav-item menu">
                        <a data-scroll href="" class="nav-link">MÁS INFORMACIÓN</a>
                    </li>
                    <li class="nav-item menu">
                        <a data-scroll href="" class="nav-link">IR A COLEGIOS</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-center" style="display: none;">
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter-1">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero-4-bg fondo_slider" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <h2 class="mb-4 texto_slider" >Preparación<br>Ciclos San Marcos</h2>
                    <button type="submit" class="btn btn-primary2 btn-block texto_solicita vista_home_boton1">Anual: Incorporaciones</button>
                    <button type="submit" class="btn btn-primary2 btn-block texto_solicita vista_home_boton1">Semestral: 03 de Mayo</button>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <img src="images/ciclos_san_marcos/foto_slider_sanmarcos1.png" alt="" class="vista_home_foto">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8">
                    <div class="mx-auto cab_formulario_slider">
                        <h5 class="form-title text-center titulo_formulario">¡Regístrate y te enviaremos toda la información!</h5>
                    </div>
                    <div class="mx-auto bg-white bod_formulario_slider">
                        <form class="registration-form">
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombres y Apellidos">
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Teléfono">
                            </div>
                            <div class="form-group mb-4">
                                <input type="checkbox" name="acepta"> <span class="texto_acepta">Acepto <span class="acepta_subrayado">términos y condiciones.</span></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1">Solicita información</button>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton2">Enviar datos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Features Start -->
    <section class="section feather-bg-img fondo_blanco" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-5 titulo_preparacion_ciclos">¡Elige el ciclo de tu preferencia!</h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3 caja_preparacion">
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="window.location.href='ciclo_san_marcos.php'" style="color: #fff !important; background-color: #FF4F00 !important;">Anual</button>
                        </div>
                        <div class="col-md-3 caja_preparacion">
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="window.location.href='ciclo_san_marcos_tarde.php'">Anual Tarde</button>
                        </div>
                        <div class="col-md-3 caja_preparacion">
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="window.location.href='ciclo_san_marcos_semestral.php'">Semestral</button>
                        </div>
                        <div class="col-md-3 caja_preparacion">
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="window.location.href='ciclo_san_marcos_reforzamiento.php'">Reforzamiento</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img fondo_gris margen_opcion" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-3">
                                <p class="mt-3 parrafo_1">
                                    <div class="row">
                                        <div class="col-lg-10 fs13">
                                            <h1 class="mt-2 titulo_video3">Ciclo Anual San Marcos</h1>
                                            <div style="background-color: #fff; padding: 20px" class="mb-6">
                                                <div class="row">
                                                    <div class="col-lg-4 fs13">
                                                        <b>Inicio:</b>
                                                        <br><br>
                                                        <b>Fin:</b>
                                                        <br><br>
                                                        <b>Turno:</b>
                                                        <br><br>
                                                        <b>Pago mensual:</b>
                                                        <br><br>
                                                        <b>Estado:</b>
                                                    </div>
                                                    <div class="col-lg-8 fs13">
                                                        <span> --- </span> <b></b>
                                                        <br><br>
                                                        <span> --- </span>
                                                        <br><br>
                                                        <span>Mañana</span>
                                                        <br><br>
                                                        <b>S/ 150</b>
                                                        <br><br>
                                                        <b style="color: #FF4F00">Sin vacante</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Horario de clases: Lunes a sábado de 8:00 a. m. a 2:00 p. m.*
                                            <br>*El horario es referencial.</p>
                                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" style="color: #fff !important; background-color: #FF4F00 !important; margin: 0px !important">Descarga el horario completo</button>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" style="color: #fff !important; background-color: #0DC042 !important; border-color: #0DC042 !important; margin: 0px !important"><img src="images/icono_whatsapp.png"> Matricúlate por WhatsApp</button>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 mx-auto text-center">
                            <img src="images/ciclo_anual_sanmarcos.png" class="foto_width">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="section feather-bg-img  margen_opcion" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 video_fondo">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-3" style="padding-bottom: 0px !important">
                                <h1 class="mt-5 titulo_video">Dirigido a</h1>
                                <p class="mt-3 parrafo_1">
                                    Dirigido a estudiantes que están cursando sus últimos grados de estudios escolares y/o acabaron 5.º año de secundaria y que desean ingresar a esta casa de estudios. El avance académico te permite también postular a cualquier universidad nacional, particulares y FF. AA.
                                </p>
                                <img src="images/sanmarcos_anual_imagen.png" class="foto_width">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-3">
                                <h1 class="mt-5 titulo_video">Plan de estudios</h1>
                                <p class="mt-3 parrafo_1">
                                    El plan de estudios se encuentra diseñado con los cursos y temas que la Universidad Nacional Mayor de San Marcos ha considerado en sus exámenes de admisión, sumado a nuestra plana de docentes con experiencia en la preparación para el ingreso a esta casa de estudios.
                                </p>
                                <h1 class="mt-5 titulo_video">Duración</h1>
                                <p class="mt-3 parrafo_1">
                                    39 semanas, considerando el primer inicio 8 de marzo de 2021.
                                </p>
                                <div class="col-lg-12 opcion_web">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class=" text-center p-4">
                                                <img class="mdi mdi-collage icono_opcion" src="images/icono_teoria.png">
                                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">50% teoría</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" text-center p-4">
                                                <img class="mdi mdi-collage icono_opcion" src="images/icono_practica.png">
                                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">50% práctica</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img fondo_gris margen_opcion">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 mb-4 video_fondo">
                    <div class="row">
                        <div class="col-lg-6 foto_video_sanmarcos mx-auto text-center">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-3">
                                <h1 class="mt-5 titulo_video">Cursos académicos:</h1>
                                <p class="mt-3 parrafo_1">
                                    <div class="row">
                                        <div class="col-lg-6 fs13">
                                            <ul>
                                                <li>Aritmética</li>
                                                <li>Álgebra</li>
                                                <li>Trigonometría</li>
                                                <li>Geometría</li>
                                                <li>Razonamiento matemático</li>
                                                <li>Razonamiento verbal</li>
                                                <li>Química</li>
                                                <li>Física</li>
                                                <li>Lenguaje</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 fs13">
                                            <ul>
                                                <li>Literatura</li>
                                                <li>Historia del Perú</li>
                                                <li>Historia universal</li>
                                                <li>Filosofía</li>
                                                <li>Psicología</li>
                                                <li>Economía</li>
                                                <li>Geografía</li>
                                                <li>Inglés (se subirá material al Classroom)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </p>
                                <p class="parrafo_2">Cursos de desarrollo y orientación al postulante:</p>
                                <div class="row">
                                        <div class="col-lg-6 fs13">
                                            <ul>
                                                <li>Tutoría</li>
                                                <li>Asesoría psicológica</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-5">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 titulo_opcion">Beneficios</h3>
                    </div>
                </div>

                <div class="col-lg-12 mb-4 opcion_web">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="images/guias_practicas.png">
                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Guías y prácticas para cada sesión.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="images/simulacros_admision.png">
                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Simulacros tipo admisión.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="images/examen_semanal.png">
                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Exámenes semanales.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="images/video_grabados.png">
                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Videos grabados de cada clase para tu repaso constante.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="images/actividades_academicas.png">
                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Actividades académicas adicionales para reforzar tu preparación.</p>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4 opcion_mobile">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class=" text-center p-4">
                                        <img class="mdi mdi-collage icono_opcion" src="images/guias_practicas.png">
                                        <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Guías y prácticas para cada sesión.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" text-center p-4">
                                        <img class="mdi mdi-collage icono_opcion" src="images/simulacros_admision.png">
                                        <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Simulacros tipo admisión.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" text-center p-4">
                                        <img class="mdi mdi-collage icono_opcion" src="images/examen_semanal.png">
                                        <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Exámenes semanales.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" text-center p-4">
                                        <img class="mdi mdi-collage icono_opcion" src="images/video_grabados.png">
                                        <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Videos grabados de cada clase para tu repaso constante.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" text-center p-4">
                                        <img class="mdi mdi-collage icono_opcion" src="images/actividades_academicas.png">
                                        <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion">Actividades académicas adicionales para reforzar tu preparación.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2 fondo_primeros_puestos2" style="padding-bottom: 0px !important; padding-top: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-5">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <img src="images/whatsapp_naranja.png" class="mb-2">
                            <h1 class="mt-2 titulo_video mb-4">¡No esperes más!<br>Matricúlate vía WhatsApp</h1>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="window.location.href='ciclo_uni_escolar.php'" style="background-color: #E3E3E3 !important; margin: 0px; font-family: 'NSB'; border: 2px solid #FF4F00 !important;">Click aqui</button>
                        </div>
                        <div class="col-md-4">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="images/img_matricula.png">
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2 fondo_primeros_puestos" style="padding-bottom: 0px !important; padding-top: 0px !important">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 pt-4 pb-4 fondo_1">
                    <div class="p-4">
                        <br><br>
                        <img src="images/icono_simulacros.png">
                        <h1 class="mt-4 titulos_seccion">Simulacros</h1>
                        <p class="mt-2 subtitulos_seccion">Inscripciones y resultados</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pb-4 fondo_2">
                    <div class="p-4">
                        <br><br>
                        <img src="images/icono_solucionarios.png">
                        <h1 class="mt-4 titulos_seccion">Solucionarios</h1>
                        <p class="mt-2 subtitulos_seccion">Área de descarga</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pb-4 fondo_3">
                    <div class="p-4">
                        <br><br>
                        <img src="images/icono_preguntas.png">
                        <h1 class="mt-4 titulos_seccion">Preguntas frecuentes</h1>
                        <p class="mt-2 subtitulos_seccion">Resolvemos tus dudas</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pb-4 fondo_4">
                    <div class="p-4">
                        <br><br>
                        <img src="images/icono_guias.png">
                        <h1 class="mt-4 titulos_seccion">Guía de pagos en línea</h1>
                        <p class="mt-2 subtitulos_seccion">Todos los pasos a seguir</p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <section class="footer fondo_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link titulo_footer">¡NUEVOS CICLOS!</a></li>
                                <li class="espacio_menu_footer"><a href="#" class="footer-link titulo_footer">BLOG</a></li>
                                <li class="espacio_menu_footer"><a href="#" class="footer-link titulo_footer">NOSOTROS</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link titulo_footer">MÁS INFORMACIÓN</a></li>
                                <li class="espacio_menu_footer"><a href="#" class="footer-link titulo_footer">SEDES</a></li>
                                <li class="espacio_menu_footer"><a href="#" class="footer-link titulo_footer">INTRANET</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link titulo_footer">COLEGIOS</a></li>
                                <li class="espacio_menu_footer"><a href="#" class="footer-link titulo_footer">LIBRO DE RECLAMACIONES</a></li>
                                <li class="espacio_menu_footer"><a href="#" class="footer-link titulo_footer">PROTECCIÓN DE DATOS PERSONALES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-5">
                        <img src="images/trilce_dark.svg" alt="" class="" height="40">
                        <ul class="list-inline footer-social-icon-content mt-4">
                            <li class="list-inline-item me-4 espacio_redes">
                                <a href="#" class="footer-social-icon">
                                    <i class="" data-feather="facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#" class="footer-social-icon">
                                    <i class="" data-feather="twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#" class="footer-social-icon">
                                    <i class="" data-feather="instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="footer-social-icon">
                                    <i class="" data-feather="linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-alt py-3 fondo_copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="images/linea_footer.png" alt="" class="" height="2" width="100%">
                    <div class="text-center">
                        <p class="font-size-15 mb-0 copyright">© 2021 Academia Trilce. Todos los derechos reservados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- login Modal Start -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content login-page">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4">Welcome To Lezir</h3>
                        <h4 class="text-uppercase text-primary"><b>Login</b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username / Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Youremail@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <a href="#" class="float-end text-muted font-size-15">Forgot Password.?</a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label font-size-15" for="customCheck1">Remember Me</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Login <i class="icon-size-15 icon ms-1"
                                        data-feather="arrow-right-circle"></i></button>
                            </div>
                        </form>
                        <div class="position-relative text-center mt-4">
                            <span class="login-border"></span>
                            <p class="social-login text-muted font-size-17">Social Login</p>
                        </div>
                        <div class="text-center">
                            <ul class="list-inline mt-2 mb-3">
                                <li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-primary"><i
                                            class="icon-xs" data-feather="facebook"></i></a></li>
                                <li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-info"><i
                                            class="icon-xs" data-feather="twitter"></i></a></li>
                                <li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-danger"><i
                                            class="icon-xs" data-feather="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i
                                            class="icon-xs" data-feather="linkedin"></i></a></li>
                            </ul>
                            <p class="text-muted mb-0">New User? <a href="#" class="text-primary">Signup</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login Modal End -->

    <!-- Register Modal Start-->
    <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content login-page">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4">Welcome To Lezir</h3>
                        <h4 class="text-uppercase text-primary"><b>Register</b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputUsername">User Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername"
                                    placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail2"
                                    placeholder="Youremail@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2"
                                    placeholder="Password">
                            </div>
                            <a href="#" class="float-end text-muted font-size-15">Forgot Password.?</a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label font-size-15" for="customCheck2">Remember Me</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Register <i class="icon-size-15 icon ms-1"
                                        data-feather="arrow-right-circle"></i></button>
                            </div>
                        </form>
                        <div class="position-relative text-center mt-4">
                            <span class="login-border"></span>
                            <p class="social-login text-muted font-size-17">Social Login</p>
                        </div>
                        <div class="text-center">
                            <ul class="list-inline mt-2 mb-3">
                                <li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-primary"><i
                                            class="icon-xs" data-feather="facebook"></i></a></li>
                                <li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-info"><i
                                            class="icon-xs" data-feather="twitter"></i></a></li>
                                <li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-danger"><i
                                            class="icon-xs" data-feather="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i
                                            class="icon-xs" data-feather="linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Modal Start-->


    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- feather icon -->
    <script src="js/feather.js"></script>
    <!-- unicons icon -->
    <script src="js/unicons.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>

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