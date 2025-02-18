<?php include('db.php');
 header('Content-Type: text/html; charset=ISO-8859-1');
?>

<html lang="es">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5HQRN8J');</script>
    <!-- End Google Tag Manager -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="HandheldFriendly" content="true" />
    <title>&#161;No te quedes sin vacante! - Academia Trilce</title>
    <!-- Plugins CSS -->
    <link href="css/plugins/plugins.css" rel="stylesheet">
    <link href="linearicons/fonts.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .username {
            margin-bottom: 0px !important;
        }
        .estado-disponible-usuario {
            color:#259627;
            font-weight: bolder;
            font-size: 1em;
            letter-spacing: 0.5px;
        }
        .estado-no-disponible-usuario {
            color:#D60202;
            font-weight: bolder;
            font-size: 1em;
            letter-spacing: 0.5px;
            line-height: 15px;
        }
        .btn-primary:disabled {
            background-color: gray;
            opacity: .45;
        }
        .btn-primary:not(:disabled):not(.disabled):active {
            background-color: orangered;
            border-color: orangered;  
        }
        .moreinfo{
            color: white;
            font-size: 1em;
            letter-spacing: 0.5px;
            line-height: 15px;
        }
        .moreinfo a {
            color: white;
            font-size: 1em;
            font-weight: bolder;
            text-decoration: underline;
        }
        .moreinfo a:hover {
            font-size: 1em;
            text-decoration: none;
            color: white;
            font-weight: bolder;
        }
        .alert_box span {
            color:white; 
            font-weight: bolder; 
            font-size: 1em;
        }
    </style>
    <script>
            function comprobarUsuario() {
                $("#loaderIcon").show();
                jQuery.ajax({
                    url: "ComprobarDisponibilidad.php",
                    data:'dni='+$("#dni").val(),
                    type: "POST",
                    success:function(data){
                        $("#estadousuario").html(data);
                        //$("#estadosubmit").html(data);
                        $("#loaderIcon").hide();
                    },
                    error:function (data){
                        console.log("Supuesto error!")
                    }
                });
            }
            </script>
</head>

<body data-spy="scroll" data-target="#landingkit-navbar" data-offset="74">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HQRN8J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <!--/preloader-->



    <!--<div id="home" class=" parallax-hero" data-jarallax='{"speed": 0.2}' style=''>-->
    <div id="home" class=" parallax-hero" data-jarallax-video="https://www.youtube.com/watch?v=8LQSe_1D27I" data-jarallax-original-styles="null">
        <div class="parallax-overlay"></div>
        <nav class="navbar navbar-expand-lg navbar-sticky" style="height:100px;">
            <div class="container">
                <a class="navbar-brand" href="http://www.trilce.edu.pe/academia">
                    <span class='logo'>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 136.8 73.5" enable-background="new 0 0 136.8 73.5" xml:space="preserve">
                            <g>
                                <g>
                                    <path fill="#FFFFFF" d="M62.7,14c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2c2.3,0,4.2,1.9,4.2,4.2C66.9,12.1,65,14,62.7,14
                M79.8,38.8c-0.6,0-1.1-0.5-1.1-1.1V2.1h-7.3v37.2c0,3,2.4,5.4,5.4,5.4H82v-5.8H79.8z M1.9,4.9v9.2h5.8v-2.6h8.9v27.6h-2.6v5.8               h12.6v-5.8h-2.6V11.4h8.9v2.6h5.8V4.9H1.9z M32.7,18.2v20.7h-2.6v5.8h17.7v-5.8H40V24h7.8v-5.8H32.7z M51.2,18.2V24H59v14.9h-7.8
                v5.8h17.7v-5.8h-2.6V18.2H51.2z M97.1,38.8c-2.3-0.1-7.4-1.2-7.4-7.5c0-6.3,5.3-7.6,7.4-7.6c2,0,2.5,0.1,3.5,0.3v4.8h5.8v-9
                c0,0-2.2-0.9-3.9-1.3c-1.4-0.3-2.9-0.6-5.4-0.6c-3.2,0-14.3,1.2-14.3,13.6c0,12.4,11.1,13.3,14.3,13.3h7.5v-5.8H97.1z M134.9,31.4
                c0,1-0.1,1.9-0.2,2.7H116c0.4,3.5,4.9,4.8,7,4.8h7.9v5.8h-7.5c-3.2,0-14.3-0.8-14.3-13.3c0-11,9-13.5,12.9-13.5
                C126.5,17.9,134.9,21,134.9,31.4z M128.1,28.8v-0.2c0-2.7-2.7-5-6.1-5c-3.3,0-5.9,2.4-6,5v0.2H128.1z M18.3,57.9
                c-0.4,0-0.5,0.2-0.6,0.5L14,70.8c-0.1,0.3,0,0.5,0.4,0.5h1.6c0.4,0,0.5-0.2,0.6-0.5l0.7-2.4h3.6l0.7,2.4c0.1,0.3,0.2,0.5,0.6,0.5
                h1.8c0.3,0,0.5-0.2,0.4-0.5l-3.6-12.4c-0.1-0.3-0.3-0.5-0.6-0.5H18.3z M20.3,66.3h-2.5l0.7-2.2c0.3-0.9,0.5-2.6,0.6-3.6
                c0.1,1,0.3,2.7,0.6,3.6L20.3,66.3z M35.7,67c0-0.4-0.1-0.5-0.5-0.5h-1.6c-0.4,0-0.5,0.1-0.5,0.5v0.7c0,1-0.7,1.5-2,1.5
                c-1.3,0-2-0.5-2-1.5v-6.3c0-1,0.7-1.5,2-1.5c1.3,0,2,0.5,2,1.5v0.5c0,0.4,0.1,0.5,0.5,0.5h1.6c0.3,0,0.5-0.1,0.5-0.5V61
                c0-1.6-1.1-3.2-4.6-3.2c-3.6,0-4.6,1.5-4.6,3.2v7.3c0,1.6,1.1,3.2,4.6,3.2c3.6,0,4.6-1.5,4.6-3.2V67z M42,57.9
                c-0.4,0-0.5,0.2-0.6,0.5l-3.7,12.4c-0.1,0.3,0,0.5,0.4,0.5h1.6c0.4,0,0.5-0.2,0.6-0.5l0.7-2.4h3.6l0.7,2.4
                c0.1,0.3,0.2,0.5,0.6,0.5h1.8c0.3,0,0.5-0.2,0.4-0.5l-3.6-12.4c-0.1-0.3-0.3-0.5-0.6-0.5H42z M44,66.3h-2.5l0.7-2.2
                c0.3-0.9,0.5-2.6,0.6-3.6c0.1,1,0.3,2.7,0.6,3.6L44,66.3z M55.4,71.3c3.6,0,4.8-1.5,4.8-3.2v-6.9c0-1.6-1.2-3.2-4.8-3.2h-4.3
                c-0.4,0-0.5,0.2-0.5,0.5v12.3c0,0.3,0.1,0.5,0.4,0.5H55.4z M55.4,60.1c1.3,0,2.1,0.5,2.1,1.5v6c0,1-0.8,1.5-2.1,1.5h-2.1v-8.9
                H55.4z M71.1,71.3c0.4,0,0.5-0.1,0.5-0.5v-1.2c0-0.4-0.1-0.5-0.5-0.5h-4.7v-3.6h4.2c0.4,0,0.5-0.1,0.5-0.5v-1.2
                c0-0.4-0.2-0.5-0.5-0.5h-4.2v-3.2h4.5c0.3,0,0.5-0.1,0.5-0.5v-1.2c0-0.4-0.2-0.5-0.5-0.5h-6.7c-0.4,0-0.5,0.2-0.5,0.5v12.3
                c0,0.4,0.1,0.5,0.5,0.5H71.1z M86.6,58.4c0-0.3-0.1-0.5-0.5-0.5h-1.6c-0.2,0-0.4,0.1-0.5,0.2l-2.9,6.9c-0.2,0.4-0.4,0.9-0.5,1.4
                c-0.2-0.5-0.3-1-0.5-1.4l-3-6.8c-0.1-0.2-0.2-0.3-0.4-0.3h-1.5c-0.4,0-0.5,0.2-0.5,0.5v12.4c0,0.3,0.1,0.5,0.5,0.5h1.5
                c0.4,0,0.5-0.2,0.5-0.5v-7.4c0.1,0.6,0.3,1.2,0.5,1.5l1.7,3.9c0.1,0.3,0.3,0.5,0.6,0.5h1.4c0.3,0,0.5-0.2,0.6-0.5l1.5-3.6
                c0.2-0.4,0.4-1.1,0.6-1.8v7.5c0,0.3,0.1,0.5,0.5,0.5h1.6c0.4,0,0.5-0.2,0.5-0.5V58.4z M93,58.4c0-0.4-0.1-0.5-0.5-0.5h-1.7
                c-0.4,0-0.5,0.2-0.5,0.5v12.3c0,0.4,0.1,0.5,0.5,0.5h1.7c0.4,0,0.5-0.2,0.5-0.5V58.4z M99.9,57.9c-0.4,0-0.5,0.2-0.6,0.5
                l-3.7,12.4c-0.1,0.3,0,0.5,0.4,0.5h1.6c0.4,0,0.5-0.2,0.6-0.5l0.7-2.4h3.6l0.7,2.4c0.1,0.3,0.2,0.5,0.6,0.5h1.8
                c0.3,0,0.5-0.2,0.4-0.5l-3.6-12.4c-0.1-0.3-0.3-0.5-0.6-0.5H99.9z M101.9,66.3h-2.5l0.7-2.2c0.3-0.9,0.5-2.6,0.6-3.6
                c0.1,1,0.3,2.7,0.6,3.6L101.9,66.3z" />
                                </g>
                            </g>
                        </svg>
                    </span>
                </a>

                <div class="">
                    <div class="logo-40">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 158.1 61.7" enable-background="new 0 0 158.1 61.7" xml:space="preserve">
                            <g>
                                <g>
                                    <path fill="#FFFFFF" d="M71.5,15.7c-0.9-2.8-2.3-5.1-3.9-7.2c-1.7-2-3.7-3.6-6.1-4.8c-2.4-1.1-5-1.7-7.9-1.7c-2.9,0-5.6,0.6-8,1.8
                c-2.4,1.2-4.4,2.8-6.2,4.8c-1.7,2-3,4.4-4,7.2c-0.3,0.9-0.6,1.9-0.8,2.9V2.1h-8.3L1.6,30.7v7h23.6v20.5h9.4V37.7h2.5
                c0.6,1.2,1.4,2.2,2.2,3.2c1.7,2,3.7,3.6,6.1,4.8c2.4,1.1,5.1,1.7,8,1.7c2.9,0,5.6-0.6,8-1.8c2.4-1.2,4.4-2.8,6.2-4.8
                c1.7-2,3-4.4,4-7.2c0.9-2.8,1.4-5.7,1.4-8.9v-0.1C72.9,21.4,72.5,18.5,71.5,15.7z M25.2,29.6H13.3l11.9-14V29.6z M63.1,24.8
                c0,2-0.2,3.8-0.7,5.5c-0.4,1.7-1.1,3.1-1.9,4.4c-0.8,1.2-1.8,2.2-3,2.9c-1.2,0.7-2.5,1-3.9,1c-1.5,0-2.8-0.4-4-1.1
                c-1.2-0.7-2.2-1.7-3-2.9c-0.8-1.2-1.5-2.7-1.9-4.4c-0.5-1.7-0.7-3.6-0.7-5.6v-0.1c0-2,0.2-3.8,0.7-5.5c0.5-1.7,1.1-3.1,1.9-4.4
                c0.8-1.2,1.8-2.2,3-2.9c1.2-0.7,2.5-1,3.9-1c1.4,0,2.7,0.4,3.9,1.1c1.2,0.7,2.2,1.7,3.1,2.9c0.9,1.3,1.5,2.7,2,4.4
                c0.5,1.7,0.7,3.5,0.7,5.5V24.8z" />
                                    <text transform="matrix(1 0 0 1 44.6072 57.4417)" fill="#FFFFFF" font-family="'Geogrotesque-Bd'" font-size="7.7627">años</text>
                                </g>
                                <text transform="matrix(1 0 0 1 84.7683 21.4837)">
                                    <tspan x="0" y="0" fill="#FFFFFF" font-family="'Geogrotesque-Md'" font-size="10.3986">
                                        Esforzándonos</tspan>
                                    <tspan x="0" y="12.5" fill="#FFFFFF" font-family="'Geogrotesque-Md'" font-size="10.3986">por
                                        lograr tus</tspan>
                                    <tspan x="0" y="25" fill="#FFFFFF" font-family="'Geogrotesque-Md'" font-size="10.3986">
                                        sueños</tspan>
                                </text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pb50">
                    <h5 class="text-white font400 text-uppercase"></h5>
                    <h3 class="mt60 mb20 text-white title-font h1">&#161;D&eacute;janos tus <br> datos!</h3>
                    <p class="text-white-gray mb30 lead ">
                        Y nos contactaremos contigo para brindarte <br> toda la informaci&oacute;n sobre nuestros inicios
                    </p>
                </div>
                <div class="col-lg-6 ml-auto">
                    <div class="hero-form">
                        <h3 class="text-white mb10">&#161;No te quedes sin vacante!</h3>
                        <form id="inscripcion_academia_trilce">
                            <div class="row">
                                <div class="col-md-12 mb10 username">
                                    <input id="dni" name="dni" type="text" class="form-control" placeholder="DNI" required="" minlength="8" maxlength="8" autocomplete="off" onBlur="comprobarUsuario()">
                                    <span id="estadousuario"></span>
                                    <p><img src="loadergif.gif" id="loaderIcon" style="display:none; width: 30px;" /></p>
                                </div>
                                <div class="col-md-12 mb10">
                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombres" required="" maxlength="50" autocomplete="off">
                                    <div class="alert_box message_box_nombre"> </div>
                                </div>
                                <div class="col-md-12 mb10">
                                    <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellidos" required="" maxlength="50" autocomplete="off">
                                    <div class="alert_box message_box_apellido"> </div>
                                </div>
                                <div class="col-md-12 mb10">
                                    <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Tel&#233;fono" required="" maxlength="9" autocomplete="off">
                                    <div class="alert_box message_box_telefono"> </div>
                                </div>
                                <div class="col-md-12 mb10">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="E-mail" required="" minlength="7" maxlength="30" autocomplete="off">
                                    <div class="alert_box message_box_email"> </div>
                                </div>
                                <!-- <div class="col-md-12 mb10">
                                    <select name="sedes" class="form-control" id="sedes">
                                        <option value=''>Sede</option>
                                        <?php
                                            $sql = "SELECT * FROM sedes WHERE active = 1";
                                            $res = mysqli_query($con, $sql);
                                            if (mysqli_num_rows($res) > 0) {
                                                while ($row = mysqli_fetch_object($res)) {
                                                    echo "<option value='" . $row->id . "'>" . $row->nombre . "</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                    <div class="alert_box message_box_sedes"> </div>
                                </div> -->
                                <div class="col-md-12 mb10">
                                    <select name="prepa" class="form-control" id="prepa">
                                        <option value=''>Preparaci&#243;n</option>
                                        <?php
                                            $sql = "SELECT * FROM prepa WHERE active = 1";
                                            $res = mysqli_query($con, $sql);
                                            if (mysqli_num_rows($res) > 0) {
                                                while ($row = mysqli_fetch_object($res)) {
                                                    echo "<option value='" . $row->id . "'>" . $row->nombre . "</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                    <div class="alert_box message_box_sedes"> </div>
                                </div>
                                <!-- <div class="col-md-12 mb10">
                                    <select name="prepa" class="form-control" id="prepa">
                                        <option value=''>Preparación</option>
                                    </select>
                                    <div class="alert_box message_box_prepa"> </div>
                                </div> -->
                                <div class="col-md-12 mb10">
                                    <select name="ciclos" class="form-control" id="ciclos" disabled="disabled">
                                        <option value=''>Ciclo</option>
                                    </select>
                                    <div class="alert_box message_box_ciclos"> </div>
                                </div>
                                <div class="col-md-12 mb10">
                                    <select name="turnos" class="form-control" id="turnos" disabled="disabled">
                                        <option value='' >Turno</option>
                                    </select>
                                    <div class="alert_box message_box_turnos"> </div>
                                </div>
                                <div class="col-md-12 mb10">
                                    <textarea id="comentario" name="comentario" class="form-control" placeholder="Comentario"></textarea>
                                    <div class="alert_box message_box_comentario"> </div>
                                </div>
                                <!-- <div class="col-md-12 mb10">
                                    <span class="custom-control-description text-white-gray">&#191;Por qu&#233; medio nos
                                        contactamos contigo?</span>

                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="medio" id="medio" value="whatsapp"> <span class="custom-control-description text-white-gray">WhatsApp</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="medio" id="medio" value="email"> <span class="custom-control-description text-white-gray">E-mail</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="medio" id="medio" value="telefono"> <span class="custom-control-description text-white-gray">Tel&#233;fono</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert_box message_box_medio"> </div>
                                </div> -->
                                <div class="col-md-12 mb10">
                                    <div class="">
                                        <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                            <input id="terminos" name="terminos" type="checkbox" class="custom-control-input" value="aceptado">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description text-white-gray">Acepto los <a href="https://www.trilce.edu.pe/storage/other/documents/politica-de-datos-personales.pdf" class="text-white" target="_new">t&#233;rminos &amp;
                                                    condiciones</a>
                                            </span>
                                        </label>
                                        <div class="alert_box message_box_terminos"> </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input id="submit" value="Enviar"  type="submit" name="submit" class="btn btn-primary btn-block" disabled>
                                    <!-- span id="estadosubmit"></span -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--hero-->
        <a href="#" class="back-to-top" id="back-to-top"><i class="icon-chevron-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script>
        <!--tweet-scroller-->
        <script src="tweetie/tweetie.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/landing.custom.js"></script>
        <script type="text/javascript" src="app.js"></script>
        <script>
        $(".prepa").text(function () {
            return $(this).text().replace("Cat�lica", "Católica");
        });
        </script>
        Cat�lica
</body>

</html>