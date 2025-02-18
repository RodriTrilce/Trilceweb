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
                    <h2 class="mb-4 texto_slider" >Descarga de Solucionarios</h2>
                    <span class="parrafo_slider_solucionarios">Elija la universidad de su preferencia</span>
                    <br><br><br>
                    <div class="contenedor_solucionarios">
                        <a href="solucionarios_uni.php">
                            <div class="row pt_10">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-4">
                                    <img src="images/solucionarios/uni.svg" class="img_solucionarios">
                                </div>
                                <div class="col-md-6 pt_6">
                                    <p class="titulo1_solucionarios">Solucionarios</p><p class="titulo2_solucionarios">UNI</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="contenedor_solucionarios">
                        <a href="solucionarios_san_marcos.php">
                            <div class="row pt_10">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-4">
                                    <img src="images/solucionarios/san_marcos.svg" class="img_solucionarios">
                                </div>
                                <div class="col-md-6 pt_6">
                                    <p class="titulo1_solucionarios">Solucionarios</p><p class="titulo2_solucionarios">San Marcos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="contenedor_solucionarios">
                        <a href="solucionarios_catolica.php">
                            <div class="row pt_10">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-4">
                                    <img src="images/solucionarios/catolica.svg" class="img_solucionarios">
                                </div>
                                <div class="col-md-6 pt_6">
                                    <p class="titulo1_solucionarios">Reconstruidos</p><p class="titulo2_solucionarios">Católica</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <img src="https://www.trilce.edu.pe/web_academia_2021/images/solucionarios/slider1.png" alt="" class="vista_home_foto">
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


    <section class="section2 fondo_primeros_puestos2" style="padding-bottom: 0px !important; padding-top: 0px !important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-5">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
						<?php
					include 'controller/matricula_uni_anual.php';
					if ($result_matricula_uni_anual = $conexion->query($select_matricula_uni_anual)) 
					{
						/* obtener un array asociativo */
						while ($fila = $result_matricula_uni_anual->fetch_assoc()) 
						{
				?>
                        <div class="col-md-4">
                            <img src="images/whatsapp_naranja.png" class="mb-2">
                            <h1 class="mt-2 titulo_video mb-4"><?php echo $fila["titulo1"];?><br><?php echo $fila["titulo2"];?></h1>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1" onclick="window.location.href='<?php echo $fila["enlace"];?>'" style="background-color: #E3E3E3 !important; margin: 0px; font-family: 'NSB'; border: 2px solid #FF4F00 !important;">Click aqui</button>
                        </div>
                        <div class="col-md-4">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["foto"];?>">
                            </div>
                        </div>
						<?php
					}
					/* liberar el conjunto de resultados */
					$result_matricula_uni_anual->free();
				}
				?>
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