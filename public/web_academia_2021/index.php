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
                    <li class="nav-item menu_activo">
                        <a data-scroll href="#home" class="nav-link" style="color: #FF4F00 !important">INICIO</a>
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
                        <a href="#login" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModalCenter-1">Register</a>
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
					include 'controller/banner_home.php';
					if ($result_banner_home = $conexion->query($select_banner_home)) 
					{
						while ($fila = $result_banner_home->fetch_assoc()) 
						{
				?>
                <div class="col-xl-4 col-lg-4">
                    <img class="icono_slider vista_home_foto" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["icono"];?>" alt="" >
                    <h2 class="mb-4 texto_slider" ><?php echo $fila["titulo"]; ?><br>
                    <span class="parrafo_slider"><?php echo $fila["subtitulo"]; ?></span>
                    </h2>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <img src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["imagen"];?>" alt="" class="vista_home_foto">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8">
					<?php if ($fila["formulario"]=='1') 
					{
					?>
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
                                <select class="form-control" id="exampleFormControlInput4">
                                    <option value="">Universidad de interés</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <input type="checkbox" name="acepta"> <span class="texto_acepta">Acepto <span class="acepta_subrayado">términos y condiciones.</span></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton1">Solicita información</button>
                            <button type="submit" class="btn btn-primary btn-block texto_solicita vista_home_boton2">Enviar datos</button>
                        </form>
                    </div>
					<?php
					}
					?>
                </div>
				<?php
					}
					$result_banner_home->free();
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
                    <div class="text-center">
                        <h3 class="mb-5 titulo_preparacion">Elige la preparación que estás buscando</h3>
                        <br><br>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
						<?php
							include 'controller/ciclos_home.php';
							if ($result_ciclos_home = $conexion->query($select_ciclos_home)) 
							{
								while ($fila = $result_ciclos_home->fetch_assoc()) 
								{
						?>
                        <div class="col-md-3 caja_preparacion">
                            <div class="wc-box text-center wc-box-primary" style="padding-top: 20px; padding-bottom: 10px; opacity: 0.7;">
                                <a href="<?php echo $fila["enlace"];?>" style="color: #333 !important">
                                    <img class="mdi mdi-collage alinear_img_preparacion" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila["imagen"];?>">
                                    <p class="text-muted mb-0 font-size-15 wc-subtitle mt-4 contenido1_preparacion t_a_left"><?php echo $fila["titulo"];?></p>
                                    <h5 class="fw-bold mb-2 wc-title contenido2_preparacion t_a_left"><?php echo $fila["subtitulo"];?></h5>
                                </a>
                            </div>
                        </div>
						<?php
								}
								$result_ciclos_home->free();
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img fondo_gris margen_opcion">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-5">
                    <div class="text-center mb-5">
						<?php
							include 'controller/mejoropcion_home.php';
							if ($result_mejoropcion_home = $conexion->query($select_mejoropcion_home)) 
							{
								while ($fila = $result_mejoropcion_home->fetch_assoc()) 
								{
						?>
                        <h3 class="mb-3 titulo_opcion"><?php echo $fila["titulo"];?></h3>
						<?php
								}
								$result_mejoropcion_home->free();
							}
						?>
                    </div>
                    <br><br>
                </div>

                <div class="col-lg-12 mb-4 opcion_web">
                    <div class="row">
						<?php
							include 'controller/opciones_mejoropcion_home.php';
							if ($result_opciones_mejoropcion_home = $conexion->query($select_opciones_mejoropcion_home)) 
							{
								while ($fila1 = $result_opciones_mejoropcion_home->fetch_assoc()) 
								{
						?>
                        <div class="col-md-2">
                            <div class=" text-center p-4">
                                <img class="mdi mdi-collage icono_opcion" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila1["foto"];?>">
                                <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion"><?php echo $fila1["titulo"];?></p>
                            </div>
                        </div>
						<?php
								}
								$result_opciones_mejoropcion_home->free();
							}
						?>
                    </div>
                    <br><br>
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
								<?php
									include 'controller/opciones_mejoropcion_home.php';
									if ($result_opciones_mejoropcion_home = $conexion->query($select_opciones_mejoropcion_home)) 
									{
										while ($fila1 = $result_opciones_mejoropcion_home->fetch_assoc()) 
										{
								?>
                                <div class="carousel-item <?php if($fila1["id"]==1){ echo 'active';}else {echo '';} ?>">
                                    <div class=" text-center p-4">
                                        <img class="mdi mdi-collage icono_opcion" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila1["foto"];?>">
                                        <p class="text-muted mb-0 font-size-12 wc-subtitle mt-4 contenido1_opcion"><?php echo $fila1["titulo"];?></p>
                                    </div>
                                </div>
								<?php
										}
										$result_opciones_mejoropcion_home->free();
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-4 mb-4 video_fondo">
                    <div class="row">
						<?php
							include 'controller/preparacion_home.php';
							if ($result_preparacion_home = $conexion->query($select_preparacion_home)) 
							{
								while ($fila1 = $result_preparacion_home->fetch_assoc()) 
								{
						?>
                        <div class="col-lg-6 foto_video mx-auto text-center">
                            <a href="#login" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                <img src="images/icono_video.png" alt="Video Trilce" class="img_video">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <h1 class="mt-5 titulo_video"><?php echo $fila1["titulo"];?></h1>
                                <p class="mt-4 parrafo_1"><?php echo $fila1["descripcion1"];?></p>
                                <p class="parrafo_2"><?php echo $fila1["descripcion2"];?></p>
                            </div>
                        </div>
						<?php
								}
							$result_preparacion_home->free();
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section fondo_herramientas vista_herramientas">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 titulo_preparacion">Herramientas exclusivas para tu preparación</h3>
                    </div>
                    <br><br>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
						<?php
							include 'controller/herramientas_home.php';
							if ($result_herramientas_home = $conexion->query($select_herramientas_home)) 
							{
								while ($fila1 = $result_herramientas_home->fetch_assoc()) 
								{
						?>
                        <div class="col-md-2">
                            <div class="text-center fondo_caja_herramientas">
                                <img class="mdi mdi-collage imagen_herramientas" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila1["foto"];?>">
                                <p class="text-muted mb-0 font-size-15 wc-subtitle mt-2 pb-2 titulo_herramientas"><?php echo $fila1["titulo"];?></p>
                            </div>
                        </div>
						<?php
								}
							$result_herramientas_home->free();
							}
						?>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </section>

    <section class="section fondo_resultados">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <br><br>
                    <div class="text-center mb-5">
                        <h3 class="mb-3 titulo_resultados">Resultados comprobados</h3>
                        <p class="font-size-15 subtitulo_resultados">Cada año, miles de ingresantes a las universidades más<br> reconocidas del país son de Trilce.</p>
                    </div>
                </div>

                <div class="col-lg-9 vista_primeros_mobile">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
								<?php
									include 'controller/resultados_home.php';
									if ($result_resultados_home = $conexion->query($select_resultados_home)) 
									{
										while ($fila1 = $result_resultados_home->fetch_assoc()) 
										{
								?>
                                <div class="carousel-item <?php if($fila1["id"]==1){ echo 'active';}else {echo '';} ?>">
                                    <div class="text-center fondo_resultados">
                                        <img class="mdi mdi-collage" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila1["foto"];?>">
                                        <h1 class="mt-4 mb-0 subtitulo_participante_resultado"><?php echo $fila1["descripcion1"];?></h1>
                                        <p class="mt-2 text-muted mb-0 font-size-15 wc-subtitle subtitulo_participante_resultado2"><?php echo $fila1["descripcion2"];?></p>
                                        <h2 class="subtitulo_participante_resultado3"><?php echo $fila1["descripcion3"];?></h2>
                                    </div>
                                </div>
								<?php
										}
									$result_resultados_home->free();
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 vista_primeros_web">
                    <div class="row">
						<?php
									include 'controller/resultados_home.php';
									if ($result_resultados_home = $conexion->query($select_resultados_home)) 
									{
										while ($fila1 = $result_resultados_home->fetch_assoc()) 
										{
								?>
                        <div class="col-md-4">
                            <div class="text-center fondo_resultados">
                                <img class="mdi mdi-collage" src="https://www.trilce.edu.pe/web_academia_2021_admin/uploads/photo/<?php echo $fila1["foto"];?>">
                                <h1 class="mt-4 mb-0 subtitulo_participante_resultado"><?php echo $fila1["descripcion1"];?></h1>
                                <p class="mt-2 text-muted mb-0 font-size-15 wc-subtitle subtitulo_participante_resultado2"><?php echo $fila1["descripcion2"];?></p>
                                <h2 class="subtitulo_participante_resultado3"><?php echo $fila1["descripcion3"];?></h2>
                            </div>
                        </div>
						<?php
										}
									$result_resultados_home->free();
									}
								?>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <section class="section2 fondo_primeros_puestos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <br>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <h3 class="titulo_primeros_puestos">Nuestros primeros puestos</h3>
                            </button>
                            <br>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
							<div class="row" style="font-family: 'GR';">
								<div class="col-md-3">
									<div>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto Católica POP <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto San Marcos <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto Católica POP <br><br>
										1.ᵉʳ puesto San Marcos <br><br>
										1.ᵉʳ puesto Católica <br><br>
										1.ᵉʳ puesto San Marcos <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto UNI <br><br>
										1.ᵉʳ puesto UNI
									</div>
								</div>
								<div class="col-md-3">
									<div>
										2021 <br><br>
										2020 <br><br>
										2019-II <br><br>
										2019-II <br><br>
										2019-II <br><br>
										2019-II <br><br>
										2019-II <br><br>
										2019-1 <br><br>
										2019 <br><br>
										2019-I <br><br>
										2018-I <br><br>
										2018-I <br><br>
										2018-I <br><br>
										2018-I <br><br>
										2018-I
									</div>
								</div>
								<div class="col-md-3">
									<div>
										José Gonzales <br><br>
										Antonio Herrera <br><br>
										Diego Vargas <br><br>
										Piero Pérez <br><br>
										Eduardo Díaz <br><br>
										Davis Suarez <br><br>
										Rafael Salas Meléndez <br><br>
										Daniela Velarde <br><br>
										Jimm Cisneros <br><br>
										Diego Castillo Utani <br><br>
										Santiago Mendoza <br><br>
										Alejandro Tapia <br><br>
										Rodrigo Ponte <br><br>
										Mauricio Campos <br><br>
										Luis Flores
									</div>
								</div>
								<div class="col-md-3">
									<div>
										Ingeniería Civil <br><br>
										Máximo puntaje <br><br>
										Ingeniería Civil <br><br>
										Ingeniería Mecatrónica <br><br>
										Arquitectura <br><br>
										Física <br><br>
										Máximo puntaje <br><br>
										Máximo puntaje <br><br>
										Máximo puntaje <br><br>
										Ingeniería Ambiental <br><br>
										Arquitectura <br><br>
										Ingeniería Mecánica de Fluidos <br><br>
										Petróleo y Gas Natural <br><br>
										Ingeniería Electrónica <br><br>
										Ingeniería de Minas
									</div>
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

    <section class="section2 fondo_primeros_puestos">
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
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:1000px !important">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                        <iframe width="800" height="600" src="https://www.youtube.com/embed/wBQ0UFT8-qk" title="YouTube video player" frameborder="0"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
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