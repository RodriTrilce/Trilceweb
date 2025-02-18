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
<style>
    * {box-sizing:border-box}
     
    /* Slideshow container */
    .slideshow-container, .slideshow2-container  
    {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Hide the images by default */
    .mySlides, .mySlides2 
    {
        display: none;
    }

    /* Next & previous buttons */
    .prev, .next 
    {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: #000;
        font-weight: bold;
        font-size: 36px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next
    {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover 
    {
        /*background-color: rgba(0,0,0,0.8);*/
        color: #000;
    }

    /* Caption text */
    .text 
    {
        color: #000;
        font-size: 15px;
        padding: 8px 12px;
        /*position: absolute;*/
        bottom: 8px;
        width: 100%;
        padding: 0px 50px 0px 50px;
    }

    .pasos 
    {
        margin-top: 1rem;
        font-family: NSB;
        font-style: normal;
        font-weight: 900;
        font-size: 22px !important;
        line-height: 22px;
    }

    .detalle
    {
        font-family: GR;
        font-style: normal;
        font-weight: 900;
        font-size: 15px !important;
        line-height: 15px;
    }

    /* Number text (1/3 etc) */
    .numbertext 
    {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot 
    {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .divisor
    {
        height: 20px;
    }

    .active, .dot:hover 
    {
        background-color: #717171;
    }

    /* Fading animation */
    .fade 
    {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade 
    {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade 
    {
        from {opacity: .4}
        to {opacity: 1}
    }
</style>

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
        <?php include 'componentes/submenu.php'; ?>
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
                    <li class="nav-item menu">
                        <a data-scroll href="" class="nav-link">¡NUEVOS CICLOS!</a>
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
				<?php
					include 'controller/banner_uni_anual.php';
					if ($result_banner_uni_anual = $conexion->query($select_banner_uni_anual)) 
					{
						/* obtener un array asociativo */
						while ($fila = $result_banner_uni_anual->fetch_assoc()) 
						{
				?>
                <div class="col-xl-4 col-lg-4">
                    <h2 class="mb-4 texto_slider">Guía de Pagos en Línea</h2>
                    <span class="parrafo_slider">Elija el banco de su preferencia</span>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <img src="images/guia_pagos/slider0.png" alt="" class="vista_home_foto">
                    <!--img src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["foto"];?>" alt="" class="vista_home_foto"-->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8">
					
                </div>
				<?php
					}
					/* liberar el conjunto de resultados */
					$result_banner_uni_anual->free();
				}
				?>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Features Start -->
    <section class="section feather-bg-img fondo_blanco" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-2 caja_preparacion">
                        </div>
                        <div class="col-md-2 caja_preparacion">
                            <a href="guia_pago_bcp.php">
                                <img src="images/guia_pagos/logo_bcp_on.svg" alt="" class="vista_home_foto">
                            </a>
                        </div>
                        <div class="col-md-4 caja_preparacion">
                            <center>
                                <a href="guia_pago_scotiabank.php">
                                    <img src="images/guia_pagos/logo_scotia_off.svg" alt="" class="vista_home_foto">
                                </a>
                            </center>
                        </div>
                        <div class="col-md-2 caja_preparacion">
                            <a href="guia_pago_bbva.php">
                                <img src="images/guia_pagos/logo_bbva_off.svg" alt="" class="vista_home_foto">
                            </a>
                        </div>
                        <div class="col-md-2 caja_preparacion">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img fondo_gris margen_opcion" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="font-family: GR; font-style: normal; font-weight: 500; font-size: 22px; line-height: 22px; color: #FF4F00"><img src="images/guia_pagos/app.svg" alt="" class="logo-dark" width="12" style="margin-right: 20px;"> Guía de pagos APP (BCP)</h4>
                        </div>
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <!-- Slideshow container -->
                            <div class="slideshow-container">
                                <!-- Full-width images with number and caption text -->
								<?php
									include 'controller/guia_pago_bcp_app.php';
									if ($result_guia_pago_bcp_app = $conexion->query($select_guia_pago_bcp_app)) 
									{
										while ($fila = $result_guia_pago_bcp_app->fetch_assoc()) 
										{
								?>
                                <div class="mySlides">
                                    <img src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["foto"];?>" style="width:100%; padding: 0px 50px 0px 50px;">
                                    <div class="text"><h1 class="pasos"><?php echo $fila["titulo"]; ?></h1>
                                        <hr style="opacity: 1 !important; height: 2px !important">
                                        <h2 class="detalle"><?php echo $fila["subtitulo"]; ?></h2>
                                    </div>
                                </div>
								<?php
										}
										$result_guia_pago_bcp_app->free();
									}
								?>
                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <p class="divisor"></p>
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img  margen_opcion" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="font-family: GR; font-style: normal; font-weight: 500; font-size: 22px; line-height: 22px; color: #FF4F00"><img src="images/guia_pagos/web.svg" alt="" class="logo-dark" width="18" style="margin-right: 16px;"> Guía de pagos WEB (BCP)</h4>
                        </div>
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <!-- Slideshow container -->
                            <div class="slideshow2-container">
                                <!-- Full-width images with number and caption text -->
								<?php
									include 'controller/guia_pago_bcp_web.php';
									if ($result_guia_pago_bcp_web = $conexion->query($select_guia_pago_bcp_web)) 
									{
										while ($fila = $result_guia_pago_bcp_web->fetch_assoc()) 
										{
								?>
                                <div class="mySlides2">
                                    <img src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["foto"];?>" style="width:100%; padding: 0px 50px 0px 50px;">
                                    <div class="text"><h1 class="pasos"><?php echo $fila["titulo"]; ?></h1>
                                        <hr style="opacity: 1 !important; height: 2px !important">
                                        <h2 class="detalle"><?php echo $fila["subtitulo"]; ?></h2>
                                    </div>
                                </div>
								<?php
										}
										$result_guia_pago_bcp_web->free();
									}
								?>
                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                            </div>
                            <p class="divisor"></p>
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img fondo_gris margen_opcion" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="font-family: GR; font-style: normal; font-weight: 500; font-size: 22px; line-height: 22px; color: #FF4F00"><img src="images/guia_pagos/otro.svg" alt="" class="logo-dark" width="12" style="margin-right: 20px;"> Guía de pagos VENTANILLA (BCP)</h4>
                        </div>
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6" style="text-align: center;">
                            <p class="divisor"></p>
                            <img src="images/guia_pagos/nombre_academia_trilce.png"> 
                            <img src="images/guia_pagos/divisor.png"> 
                            <img src="images/guia_pagos/nro_dni.png">
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img fondo_gris margen_opcion" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="font-family: GR; font-style: normal; font-weight: 500; font-size: 22px; line-height: 22px; color: #FF4F00"><img src="images/guia_pagos/otro.svg" alt="" class="logo-dark" width="12" style="margin-right: 20px;"> Guía de pagos AGENTE (BCP)</h4>
                        </div>
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-10" style="text-align: center;">
                            <p class="divisor"></p>
                            <img src="images/guia_pagos/nombre_academia_trilce.png"> 
                            <img src="images/guia_pagos/divisor.png">
                            <img src="images/guia_pagos/indicar_codigo.png">
                            <img src="images/guia_pagos/divisor.png">
                            <img src="images/guia_pagos/nro_dni.png">
                            <p class="divisor"></p>
                            <p class="divisor"></p>
                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2 fondo_primeros_puestos" style="padding-bottom: 0px !important; padding-top: 0px !important">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 pt-4 pb-4 fondo_1">
                    <div class="presec-4">
                        <br><br>
                        <img src="images/icono_simulacros.png">
                        <h1 class="mt-4 titulos_seccion">Simulacros</h1>
                        <p class="mt-2 subtitulos_seccion">Inscripciones y resultados</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pb-4 fondo_2">
                    <div class="presec-4">
                        <br><br>
                        <img src="images/icono_solucionarios.png">
                        <h1 class="mt-4 titulos_seccion">Solucionarios</h1>
                        <p class="mt-2 subtitulos_seccion">Área de descarga</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pb-4 fondo_3">
                    <div class="presec-4">
                        <br><br>
                        <img src="images/icono_preguntas.png">
                        <h1 class="mt-4 titulos_seccion">Preguntas frecuentes</h1>
                        <p class="mt-2 subtitulos_seccion">Resolvemos tus dudas</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pb-4 fondo_4">
                    <div class="presec-4">
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

<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n)
    {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n)
    {
        showSlides(slideIndex = n);
    }

    function showSlides(n) 
    {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++)
        {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) 
        {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

<script type="text/javascript">
    var slideIndex = 1;
    showSlides2(slideIndex);
    // Next/previous controls
    function plusSlides2(n)
    {
        showSlides2(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide2(n)
    {
        showSlides(slideIndex = n);
    }

    function showSlides2(n) 
    {
        var i;
        var slides = document.getElementsByClassName("mySlides2");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++)
        {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) 
        {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
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