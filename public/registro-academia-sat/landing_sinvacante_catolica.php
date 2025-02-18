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

    <section class="section2 fondo_primeros_puestos pad0">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="fondo_registro_2021 hailitar_header">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 contenedor_mobile_logo">
                            <img src="images/academia/logo.svg" alt="Logo Academia">
                        </div>
                        <div class="col-lg-6 col-xs-6 contenedor_mobile_iconos">
                            <a href="#">
                                <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
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
                <div class="col-lg-6 fondo_landing full_height">
                </div>
                <div class="col-lg-6 pt-4 fondo_registro_2021 full_height">
                    <div class="ml80">
                        <div class="row">
                            <div class="col-lg-6 hailitar_mobile">
                                <img src="images/academia/logo.svg" alt="Logo Academia">
                            </div>
                            <div class="col-lg-6 hailitar_mobile">
                                <a href="#">
                                    <img src="images/academia/home.svg" alt="Logo Academia" class="icono_colegio">
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
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
                        <h1 class="titulo_academia">¡Gracias por solicitar información!</h1>
                        <div class="w40 ">
                            <div class="row">
                                <p class="texto_sinvacante">Por el momento, no contamos con vacantes disponibles para el ciclo Católica. Te recomendamos las siguientes preparaciones:</p>
                            </div>
                        </div>

                        <div class="w40 contenedor_ciclo">
                            <a href="landing_formulario_uni.php">
                            <div class="row">
                                <div class="col-lg-5 col-xs-5 tar">
                                    <img src="images/academia/uni.svg" alt="Logo Academia">
                                </div>
                                <div class="col-lg-7 col-xs-7">
                                    <h1 class="h1_ciclo">Preparación</h1>
                                    <p class="p_ciclo">UNI</p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!--div class="w40 contenedor_ciclo">
                            <a href="landing_sinvacante_san_marcos.php">
                            <div class="row">
                                <div class="col-lg-5 col-xs-5 tar">
                                    <img src="images/academia/san_marcos.svg" alt="Logo Academia">
                                </div>
                                <div class="col-lg-7 col-xs-7">
                                    <h1 class="h1_ciclo">Preparación</h1>
                                    <p class="p_ciclo">SAN MARCOS</p>
                                </div>
                            </div>
                            </a>
                        </div-->

                        <!--div class="w40 contenedor_ciclo">
                            <a href="landing_sinvacante_escolar.php">
                            <div class="row">
                                <div class="col-lg-5 col-xs-5 tar">
                                    <img src="images/academia/escolar.svg" alt="Logo Academia">
                                </div>
                                <div class="col-lg-7 col-xs-7">
                                    <h1 class="h1_ciclo">Preparación</h1>
                                    <p class="p_ciclo">ESCOLAR</p>
                                </div>
                            </div>
                            </a>
                        </div-->

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