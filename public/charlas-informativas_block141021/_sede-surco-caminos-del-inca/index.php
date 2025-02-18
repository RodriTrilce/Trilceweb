<?php 

  include 'conexion.php';

?>


<!doctype html>
<html lang="es">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5HQRN8J');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charlas informaticas Trilce</title>
    <meta name="author" content="Trilce" />
    <meta name="description" content="Charlas informativas Trilce" />
    <meta name="keywords" content="trilce, colegios, academias, mejor propuesta, educativa, mejor propuesta educativa" />
    <meta name="Resource-type" content="Document" />
    <link rel="canonical" href="https://www.trilce.edu.pe/" />
    <link rel="stylesheet" type="text/css" href="../src/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../src/styles.css" />
    <link rel="stylesheet" href="../src/line-awesome.min.css">
    <link rel="stylesheet" href="../src/animate.min.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light container">
    <a class="navbar-brand" href="https://www.trilce.edu.pe/colegio" target="_blank">
    <img src="../images/logo-coles.svg" width="99" height="51" />
    </a>
    <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
    <li class="nav-item">
        <a class="nav-link" href="https://www.trilce.edu.pe/charlas-informativas/" ><i class="las la-home text-light 32px h3"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n"><i class="lab la-whatsapp text-light 32px h3"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" target="_blank" href="tel:+51016198100"><i class="las la-phone text-light 32px h3"></i></a>
        <span class="text-light phone-trilce">6198 100</span>
    </li>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="https://www.trilce.edu.pe/charlas-informativas/" ><i class="las la-home text-light 32px h3"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n"><i class="lab la-whatsapp text-light 32px h3"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" target="_blank" href="tel:+51016198100"><i class="las la-phone text-light 32px h3"></i></a>
        <span class="text-light  phone-trilce">6198 100</span>
        </li>
    </ul>
    </div>
</nav>

<div class="section" id="one">    
    <form action="./registro.php" method="post" id="form-registry">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <figure>
                        <img class="" src="../images/IMG-PRINCIPAL.png" />
                    </figure>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <h1 class="text-left ">Charlas informativas</h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="text-left my-3 font-weight-bold">¡Regístrate y participa!</p>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 d-none">
                                        <div class="form-group">
                                            <input class="form-control" type="text"  name="_status"  value="Pendiente"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" required="required" name="name"  placeholder="Nombre y apellidos del alumno *" autofocus/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" required="required" name="dni" minlength="8"  maxlength="8"   onkeypress="return onlyNumberKey(event)"  placeholder="DNI del alumno *" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text"  name="name_apoderado"  placeholder="Nombre y apellidos del apoderado *" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" name="dni_apoderado"   minlength="8"  maxlength="8"   required="required" onkeypress="return onlyNumberKey(event)" placeholder="DNI del apoderado *" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <div class="select">
                                                <select required="required" class="custom-select" required name="venue" placeholder="Sede de interés" id="select-sedes">
                                                    <option selected  value="Surco Caminos del Inca">Surco (Caminos del Inca)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <div class="select">

                                                <select class="custom-select" required name="grade" placeholder="Grado de interés" id="select-surco">
                                                    <option value="" selected disabled>Grado de interés * </option>
                                                    <option value="1º grado primaria">1º grado primaria </option>
                                                    <option value="2º grado de primaria">2º grado de primaria </option>
                                                    <option value="3º grado de primaria">3º grado de primaria </option>
                                                    <option value="4º grado de primaria">4º grado de primaria </option>
                                                    <option value="5º grado de primaria">5º grado de primaria </option>
                                                    <option value="6º grado de primaria">6º grado de primaria </option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control font-weight-bolder" type="text" placeholder="Fecha: 27 de noviembre de 2020" value="27 de noviembre de 2020" name="presentation"  readonly>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" required="required" name="phone"  minlength="9"  maxlength="9"   onkeypress="return onlyNumberKey(event)" placeholder="Teléfono *" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" required="required" name="email"  placeholder="E-mail *" />
                                        </div>
                                    </div>
                                                                   
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group my-0">
                                            <div class="checkbox">
                                                <label class="my-0">
                                                    <input type="checkbox"  required="required" />
                                                    <i class="helper"></i>
                                                        He leído y acepto el uso de mis <a href="https://www.trilce.edu.pe/proteccion-datos-personales/" target="_blank"><b> datos personales</b></a>.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 my-3 text-center d-flex justify-content-center flex-column align-items-center">
                                        <div id="botvalidator" class="text-center"></div>
                                        <div id="captchaerrors" class="text-center"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 text-center mb-5">
                                        <button class="btn btn-form btn-lg" type="submit">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
</div>

<div class="section" id="two">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="text-center font-weight-bold my-4">¿Por qué estudiar con nosotros?</h2>
                        <p class="text-center my-4">Somos una organización educativa con más de 40 años de experiencia, potenciando el desarrollo intelectual, personal y artístico en nuestros alumnos.</p>
                    </div>
                </div>
                <div class="movil">
            <div class="carousel slide sq-crousal4" data-ride="carousel" id="sq-crousal4">
                <ol class="carousel-indicators">
                <li data-target="#sq-crousal4" data-slide-to="0" class="active"></li>
                <li data-target="#sq-crousal4" data-slide-to="1"></li>
                <li data-target="#sq-crousal4" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                <div class="carousel-item active">
                    <blockquote>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
                        <img class="mb-4" src="../images/1.png" >
                        <div class="feedback-text pl-3">
                            <p>Elevado nivel <br> académico</p>
                        </div>
                        </div>
                    </div>
                    </blockquote>
                </div>
                
                <div class="carousel-item">
                    <blockquote>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
                        <img class="mb-4" src="../images/2.png" >
                        <div class="feedback-text pl-3">
                            <p> Innovación y <br> tecnología</p>
                        </div>
                        </div>
                    </div>
                    </blockquote>
                </div>

                <div class="carousel-item">
                    <blockquote>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
                        <img class="mb-4" src="../images/3.png" >
                        <div class="feedback-text pl-3">
                            <p>Comprometidos con <br> el medio ambiente</p>
                        </div>
                        </div>
                        </div>
                    </blockquote>
                </div>

                </div>

                </div>  
            </div>  
        </div>
        <div class="web">
            <div class="row">
                <div class="col-sm-12 col-md-4 text-center">
                    <img src="../images/1.png" />
                    <h4 class="font-weight-bold my-3">Elevado nivel <br> académico </h4>
                </div>
                <div class="col-sm-12 col-md-4 text-center">
                    <img src="../images/2.png" />
                    <h4 class="font-weight-bold my-3">Innovación y <br> tecnología</h4>
                </div>
                <div class="col-sm-12 col-md-4 text-center">
                    <img src="../images/3.png" />
                    <h4 class="font-weight-bold my-3">Comprometidos con <br> el medio ambiente</h4>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

<div class="section" id="tre">
    <div class="container-fluid">
        <div class="row calltoaction">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-4">
                        <div class="row box">
                            <div class="col-sm-12 col-md-8 box-div">
                                    <h5 class="text-left">¿Quieres <br> saber más?</h5>
                                    <span class="text-left">Revisa nuestra <b>Propuesta Educativa</b></span>
                                    <a class="button" target="_blank" href="https://www.trilce.edu.pe/propuesta-educativa/">
                                        ¡Clic aquí!
                                    </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <img class=""src="../images/img-banner.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

<div class="section" id="four">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
                <p class="text-center gray my-4"> © 2020 Trilce. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../src/bootstrap.js"></script>
<script type="text/javascript" src="../src/parsley.min.js"></script>
<script type="text/javascript" src="../src/arrive.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
<script src="../src/script.js"></script>
<script>
    var onloadCallback = function() {
        /**
         * If we try to load page to show the congrats message we don't need to load recaptcha.
         */
        if ($("#botvalidator").length > 0) {
            grecaptcha.render('botvalidator', {
                'sitekey': '6Le4K68ZAAAAAG4kUVlhyobedxFX5xnPixuk0E1E',
                'callback': cleanErrors
            });
            addCaptchaValidation();
            /**
             * We are going to use arrive library in order to check new google recaptcha
             * element added after the current one is expired and then we will create new attributes for that element.
             * Expires-callback google recaptcha is not working, probably it is executed before element creation.
             * https://github.com/uzairfarooq/arrive/
             */
            $(document).arrive("#g-recaptcha-response", function() {
                // 'this' refers to the newly created element
                addCaptchaValidation();
            });
        }
    };

    /**  We are going to remove all errors from the container. */
    var cleanErrors = function() {
        $("#captchaerrors").empty();
    };

    var addCaptchaValidation = function() {
        console.log("Adding captcha validation");

        cleanErrors();

        $('#form-registry').parsley().destroy();

        $('#g-recaptcha-response').attr('required', true);
        // We are going to create a new validator on Parsley
        $('#g-recaptcha-response').attr('data-parsley-captcha-validation', true);
        $('#g-recaptcha-response').attr('data-parsley-error-message', "Necesitamos que confirmes que no eres un robot. Gracias.");
        $('#g-recaptcha-response').attr('data-parsley-errors-container', "#captchaerrors");
        $('#form-registry').parsley();
    };


    /** We are going to add a new Parsley validator, this validation is called from
     #g-recaptcha-response after clicking the submit button*/

    window.Parsley.addValidator('captchaValidation', {

        validateString: function(value) {
            if (debug) console.log("Validating captcha", value);
            if (value.length > 0) {
                return true;
            } else {
                return false;
            }
        },
        messages: {
            es: 'Necesitamos que confirmes que no eres un robot. Gracias.'
        }
    });
</script>

<script> 
    function onlyNumberKey(evt) { 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 
<script>
    // A $( document ).ready() block.
        $( document ).ready(function() {

        var count = 0;

        /*if(localStorage.getItem("modal_count")  === null) {
        
        } else {
        count = localStorage.getItem("modal_count");

        }*/

        count = count+1;
        //if(count <= 3) {
        $('#myModal').modal('show');

        // localStorage.setItem("modal_count", count);
        //}

        });     
</script>

</body>

</html>