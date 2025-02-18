<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Academia Trilce <?php echo date("Y"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <script src="https://www.google.com/recaptcha/api.js?render=6LeReKwfAAAAAOxSVUZLtLELda-xo1eNvp5n6mGY"></script>
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
                <div class="col-lg-6 fondo_landing">
                </div>
                <div class="col-lg-6 pt-4 fondo_registro_2021">
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
                        <p class="subtitulo_academia_n">Alumno Trilce</p>
                        <p class="subtitulo_academia2 sin_p">Usted eligió: Simulacros San Marcos</p>
                        <p class="subtitulo_academia">REGISTRE DATOS ALUMNO:</p>
                        <form class="registration-form w_form" action="landing_gracias_san_marcos.php" method="post" id="form1">
                            
                            <div class="form-group mb-2">
                                <input type="text" class="form-control fondo_blanco" id="dni" name="dni" placeholder="DNI del alumno" required="required" onkeypress="return isNumber(event)" onpaste="return false;" minlength="8" maxlength="8">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control fondo_blanco" id="nombres" name="nombres" placeholder="Nombres del alumno" required="required">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control fondo_blanco" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno del alumno" required="required">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control fondo_blanco" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno del alumno" required="required">
                            </div>
                            <div class="form-group mb-2">
                                <input type="email" class="form-control fondo_blanco" id="email" name="email" placeholder="Correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
                            </div>
                            <div class="form-group mb-2">
                                <select class="form-control fondo_blanco icono_select" id="local" name="local" required="required" style="color: #333 !important;">
                                    <option value="">Local inscripción</option>
                                    <option value="ISACADLO">Los Olivos Academia</option>
                                    <option value="ISACADSB">Santa Beatriz Academia</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <select class="form-control fondo_blanco icono_select" id="tipo_examen" name="tipo_examen" required="required" style="color: #333 !important;">
                                    <option value="">Tipo de examen</option>
                                    <option value="00103">Semestral</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <select class="form-control fondo_blanco icono_select" id="area" name="area" required="required" style="color: #333 !important;">
                                    <option value="">Área</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <select class="form-control fondo_blanco icono_select" id="carrera" name="carrera" required="required" style="color: #333 !important;">
                                    <option value="">Elige carrera</option>
                                </select>
                            </div>
                            
                            <div class="form-group mb-2">
                                <a href="alumno_trilce.php" class="botones_enlaces_redux">Anterior</a>
                                <button type="submit" class="botones_enlaces_redux2" id="registro" name="registro">Registrarme</button>
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
    <script src="js/jquery.js"></script>
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
        $(document).ready(function()
        {
            $(".collapse.show").each(function()
            {
                $(this).prev(".card-header").find(".fa").addClass("la-angle-up").removeClass("la-angle-down");
            });
            $(".collapse").on('show.bs.collapse', function()
            {
                $(this).prev(".card-header").find(".fa").removeClass("la-angle-down").addClass("la-angle-up");
            }).on('hide.bs.collapse', function()
            {
                $(this).prev(".card-header").find(".fa").removeClass("la-angle-up").addClass("la-angle-down");
           });
        });
    </script>
    <script>
        var subjectObject = {
            "A - Ciencias de la Salud": {
                "Medicina Humana": [],
                "Ciencias de los Alimentos": [],
                "Toxicología": [],
                "Odontología": [],
                "Medicina Veterinaria": [],
                "Psicología": [],
                "Psicología Organizacional y de la Gestión Humana": [],
                "Obstetricia": [],
                "Enfermería": [],
                "Tec. Med. Lab. Clínico y Anatomía y Patológica": [],
                "Tec. Med. Terapia Física y Rehabilitación": [],
                "Tec. Med. Radiología": [],
                "Tec. Med. Terapia Ocupacional": [],
                "Nutrición": [],
                "Farmacia y Bioquímica": [],
            },          
            "B - Ciencias Básicas": {
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
            "C - Ingenierías": {
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
            "D - Ciencias Económicas y de la Gestión": {
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
            "E - Humanidades y Ciencias Jurídicas y Sociales": {
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
    <script>
    $(document).ready(function()
    {
        $("#dni").on('change', function postinput()
        {
            var NRO_DOCUMENTO = $(this).val();
            $.ajax({
                url: 'https://intranet.trilce.edu.pe/api/Cliente/Publico/SI_InfoAlumno',
                method: "POST",
                dataType: "JSON",
                data: { NRO_DOCUMENTO: NRO_DOCUMENTO},
                success: function(response)
                {
                    response = JSON.parse(JSON.stringify(response));
                    if(response.Data == null)
                    {
                        $("#nombres").val("");
                        $("#nombres").prop('readonly', false);
                        $("#apellido_paterno").val("");
                        $("#apellido_paterno").prop('readonly', false);
                        $("#apellido_materno").val("");
                        $("#apellido_materno").prop('readonly', false);
                        $("#email").val("");
                        $("#email").prop('readonly', false);
                    }
                    else
                    {
                        $("#nombres").val(response.Data.NOMBRES);
                        $("#nombres").prop('readonly', true);
                        $("#apellido_paterno").val(response.Data.PRIMER_APELLIDO);
                        $("#apellido_paterno").prop('readonly', true);
                        $("#apellido_materno").val(response.Data.SEGUNDO_APELLIDO);
                        $("#apellido_materno").prop('readonly', true);
                        $("#email").val(response.Data.CORREO_E);
                        $("#email").prop('readonly', true);
                    }
                },
                error: function(xhr, status, error)
                {
                     //$("#nombres").val("");
                }
            });
        });
    }); 
    </script>
    <script>
    $('#form1').submit(function(event)
	{
		event.preventDefault();
		var nombres 	        = $('#nombres').val();
		var apellido_paterno    = $('#apellido_paterno').val();
		var apellido_materno 	= $('#apellido_materno').val();
		var email 			    = $('#email').val();
 
		grecaptcha.ready(function() 
		{
			grecaptcha.execute('6LeReKwfAAAAAOxSVUZLtLELda-xo1eNvp5n6mGY', {action: 'subscribe_newsletter'}).then(function(token)
			{
				$('#form1').prepend('<input type="hidden" name="token" value="' + token + '">');
				$('#form1').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
				$('#form1').unbind('submit').submit();
                document.querySelector('#registro').innerHTML = 'Procesando...';
                document.querySelector('#registro').innerText = 'Procesando...';
                document.querySelector('#registro').textContent = 'Procesando...';
                $('#registro').prop('disabled', true);
			});;
		});
	});
	</script>
</body>

</html>