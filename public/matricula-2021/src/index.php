<?php
  
    include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Libro de reclamaciones Ares - Trilce </title>
  <link rel="canonical" href="https://www.trilce.edu.pe/" />
  <link rel="stylesheet" href="../css/line-awesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
</head>

<body>

  <!--Navbar-->
<nav class="fixed-top py-1">
    <div class="container">
      <div class="row box-nav">
        <div class="col-xs-6 col-md-6">
            <a class="navbar-brand" href="https://www.trilce.edu.pe/" target="_blank">
              <img src="../img/logo-trilce-academia-white.svg" width="100">
            </a>
        </div>
        <div class="col-xs-6 col-md-6 d-flex justify-content-end align-items-center" >
            <div class="d-flex">
              <aside>
                <a class="text-white" href="https://www.trilce.edu.pe/" target="_blank">
                  <i class="las la-home"></i> 
                </a>
              </aside>
              <aside>
                  <a class="text-white"
                    href="https://api.whatsapp.com/send?phone=51922336565&amp;text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n"
                    target="_blank">
                    <i class="lab la-whatsapp"></i> 
                  </a>
              </aside>
              <aside>
                <a class="text-white" href="tel:+51016198100">
                   <i class="las la-phone"></i>
                   <p class="phone">6198 100</p>
                </a>
              </aside>
            </div>
        </div>
      </div>
    </div>
  </nav>

  <!--Banner-->
  <section class="banner d-flex justify-content-center align-items-center text-center" style="height: calc(75vh - 67.4px);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center font-weight-bold my-4">Libro de reclamaciones</h1>
        </div>
        <div class="col-md-8 offset-md-2">
          <p class="text-center my-4">Conforme lo dispone el artículo 5° del Decreto Supremo N° 011-2011-PCM, el cual aprueba el Reglamento del
            Libro de Reclamaciones del Código de Protección y Defensa al Consumidor, esta institución cuenta con un
            Libro de Reclamaciones virtual a su disposición.</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4 my-4 select-cole">
            <select class="input-field" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
              <option selected disabled>Colegios</option>
              <optgroup label="Sedes en Lima">
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/brena">Breña</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/callao">Callao</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/chorrillos">Chorrillos</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/comas">Comas</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/jesus-maria-salaverry">Jesús María (salaverry)</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/la-molina">La Molina</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/los-olivos">Los Olivos</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/maranga">Maranga</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/pro">Pro</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/salamanca">Salamanca</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/san-isidro">San Isidro</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/san-juan-de-lurigancho">San Juan de Lurigancho</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/san-juan-de-lurigancho-wiesse">San Juan de Lurigancho (Wiesse)</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/santa-anita">Santa Anita</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/santa-beatriz-roma">Santa Beatriz (Roma)</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/surco">Surco</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/villa-el-salvador">Villa El Salvador</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/villa-maria">Villa María</option>
                 </optgroup>
                 <optgroup label="Sedes en provincia">
                     <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/arequipa">Arequipa</option>
                     <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/chiclayo">Chiclayo</option>
                     <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/chanchamayo">Chanchamayo</option>
                     <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/huancayo">Huancayo</option>
                     <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/piura">Piura</option>
                     <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/trujillo">Trujillo</option>
                 </optgroup>
            </select>
        </div>
        <div class="col-md-4 select-acad">
            <select class="input-field"
              onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
              <option disabled>Academias</option>
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-los-olivos">Los Olivos</option>
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-santa-beatriz">Santa Beatriz</option>
              <option selected value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-comas">Comas</option>
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-villa-el-salvador">Villa El Salvador</option>
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-marsano">Marsano</option>
            </select>
        </div>
      </div>
    </div>
  </section>

  <!--Datos-->
  <section class="datos d-flex justify-content-center align-items-center text-center">
    <div class="container">
      <div class="row py-4 ">
        <div class="col-md-5 text-left my-2">
          <b class="font-weight-bold">RAZÓN SOCIAL: ASOCIACIÓN EDUCATIVA SAN ISIDRO</b>
          <br>
          <span class="d-flex date">FECHA: &nbsp;<div id="date"> </div></span>
        </div>
        <div class="col-md-7 text-right my-2">
          <b class="font-weight-bold">RUC: 20252660217</b>
          <br>
          <span> DIRECCIÓN: AV. AREQUIPA NRO. 1250 URB. SANTA BEATRIZ  - LIMA </span>
        </div>
      </div>
    </div>
  </section>

   <section class="formulario py-5">
    
     <form action="./registro.php" name="reclamaciones" id="reclamaciones" method="post" name="form">
       <div class="container">
        <div class="row my-0">
           <div class="offset-md-2 col-md-8 offset-md-2 text-right">
             <p class="text-required mb-0">
               * Campos obligatorios
             </p>
             <input name="razon_social" id="razon_social" value="Asociación Educativa San Isidro" hidden>
            <input name="ruc" id="ruc" value="20252660217" hidden>
            <input name="institucion" id="institucion" value="Academia" hidden>
            <input name="sede" id="sede" value="Comas" hidden>
           </div>
        </div>
         <div class="row">
           <div class="col-md-12 mb-4">
             <h2>1. DATOS DEL CONSUMIDOR </h2>
           </div>
           <div class="offset-md-2 col-md-8 offset-md-2">
             <div class="row">
               <div class="input-field col-xs-12 col-md-12 px-0 pr-2">
                 <input minlength="5" maxlength="75"  name="nombres_apellidos" id="nombres_apellidos" type="text" required  >
                 <label for="nombres_apellidos">Nombres y apellidos * </label>
               </div>
               <div class="input-field col-xs-12 col-md-12 d-flex px-0">
                  <fieldset class="form-check pl-0">
                     <label>
                        <input value="Masculino" aria-label="Masculino" name="genero" id="genero_masculino" type="radio" checked  required/>
                        <span for="genero">Masculino</span>
                    </label>
                    <label>
                      <input value="Femenino" aria-label="Femenino" name="genero" id="genero_femenino" type="radio" />
                      <span for="genero">Femenino</span>
                    </label>
                  </fielset>
               </div>
               <div class="input-field col-xs-12 col-md-6 px-0 pr-2 ">
                 <select id="grado" name="grado" required>
                   <option value="" selected="" disabled="">Ciclo *</option>
                     <option value="UNI">UNI</option>
                     <option value="San Marcos">San Marcos</option>
                     <option value="Católica">Católica</option>
                 </select>
                 <label></label>
               </div>
               <div class="input-field col-xs-12 col-md-6 px-0 pr-2">
                 <input maxlength="8" minlength="8" name="dni" id="dni" type="number" required    >
                 <label for="dni">DNI * </label>
               </div>
               <div class="input-field col-xs-12 col-md-6 px-0 pr-2">
                 <input maxlength="9" minlength="9" id="celular" name="celular" type="number" required   >
                 <label for="celular">Celular * </label>
               </div>
               <div class="input-field col-xs-12 col-md-12 px-0">
                 <input minlength="5" maxlength="75" id="direccion" name="direccion" type="text" required>
                 <label for="direccion">Dirección *</label>
               </div>
               <div class="input-field col-xs-12 col-md-12 px-0">
                 <input minlength="3" maxlength="75" name="correo" id="correo" type="email" required>
                 <label for="correo">Correo electrónico *</label>
               </div>
               <div class="input-field col-xs-12 col-md-12 px-0">
                 <input minlength="3" maxlength="75" id="nombres_apoderado" name="nombres_apoderado" type="text"  >
                 <label for="nombres_apoderado">Nombres Padre o Madre (en casos de menores de edad)</label>
               </div>
               <div class="input-field col-xs-12 col-md-6 px-0 pr-2">
                 <input minlength="9" maxlength="9" id="celular_apoderado" name="celular_apoderado" type="number"  >
                 <label for="celular_apoderado">Celular apoderado</label>
               </div>
               <div class="input-field col-xs0-12 col-md-6 px-0 pr-2">
                 <input minlength="5" maxlength="75" id="correo_apoderado" name="correo_apoderado" type="email">
                 <label for="correo_apoderado">Correo electrónico apoderado</label>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-12 my-4">
             <h2>2. SOBRE EL SERVICIO </h2>
           </div>
           <div class="offset-md-2 col-md-8 offset-md-2">
             <div class="row">
               <div class="input-field col-xs-12 col-md-12 d-flex px-0">
                  <fieldset class="form-check pl-0">
                     <label>
                        <input value="Producto" aria-label="Producto" name="producto_servicio" id="producto" type="radio" checked  required/>
                        <span for="producto_servicio">Producto</span>
                    </label>
                    <label>
                      <input value="Servicio" aria-label="Servicio" name="producto_servicio" id="servicio" type="radio" />
                      <span for="producto_servicio">Servicio</span>
                    </label>
                  </fielset>
               </div>
               <div class="input-field col-md-12 px-0">
                 <input minlength="1" maxlength="7"  id="monto_reclamado" name="monto_reclamado"  type="number" required   >
                 <label for="monto_reclamado">Monto reclamado *</label>
               </div>
               <div class="input-field col-md-12 px-0">
                 <textarea type="text" minlength="5" maxlength="250"  name="descripcion" id="descripcion"
                    class="materialize-textarea" required></textarea>
                 <label for="descripcion">Descripción de Producto / Servicio *</label>
               </div>
             </div>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12 my-4">
             <h2>3. DETALLE DEL RECLAMO / QUEJA </h2>     
           </div>
           <div class="offset-md-2 col-md-8 offset-md-2">
             <div class="row">
               <div class="input-field col-xs-12 col-md-12 d-flex px-0">
                 <fieldset class="form-check pl-0">
                     <label>
                        <input value="Reclamo" aria-label="Reclamo" name="reclamo_queja" id="reclamo" type="radio" checked  required/>
                        <span for="reclamo_queja">Reclamo</span>
                    </label>
                    <label>
                      <input value="Queja" aria-label="Queja" name="reclamo_queja" id="queja" type="radio" />
                      <span for="reclamo_queja">Queja</span>
                    </label>
                  </fielset>
               </div>
               <div class="input-field col-md-12 px-0"">
                    <textarea type="text"   minlength="5" maxlength="250" id="detalle" name="detalle"  class="materialize-textarea" required></textarea>
                 <label for="detalle">Detalle del reclamo / queja *</label>
               </div>
               <div class="input-field col-md-12 px-0"">
                    <textarea type="text" minlength="5"  maxlength="250"  name="pedido_concreto" id="pedido_concreto"
                       class="materialize-textarea" type="text" required></textarea>
                 <label for="pedido_concreto">Pedido concreto al reclamo / queja * </label>
               </div>
             </div>
           </div>
         </div>

         <div class="row">

           <div class="offset-md-2 col-md-8 offset-md-2 mt-5 text-center">
             <p class="text-required">
               * La respuesta a este reclamo o queja será enviada al correo electrónico indicado en este formulario
             </p>
           </div>

           <div class="offset-md-2 col-md-8 offset-md-2 my-2 text-center">
             <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter" required>
               <label class="custom-control-label disclaimer" for="defaultRegisterFormNewsletter">Declaro que los datos
                 consignados
                 son correctos y fiel expresión de la verdad.</label>
             </div>
           </div>
          <div class="col-sm-12 col-md-12 my-4">
            <div id="botvalidator" class="text-center"></div>
            <div id="captchaerrors" class="text-center"></div>
          </div>
           <div class="offset-md-2 col-md-6 offset-md-3 my-4">
             <input class="btn btn-block " type="submit" value="ENVIAR RECLAMO">
           </div>

       </div>

     </form>

   </section>

    <footer class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>© 2020 Trilce. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>

  <script type="text/javascript" src="../js/script.js"></script>
    <script>
      $(document).ready(function () {
        $('select').formSelect();
      });
    </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>

  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <script>
    n = new Date();
    //Año
    y = n.getFullYear();
    //Mes
    m = n.getMonth() + 1;
    //Día
    d = n.getDate();

    //Lo ordenas a gusto.
    document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
  </script>
  <script type="text/javascript" src="../js/parsley.min.js"></script>
  <script type="text/javascript" src="../js/arrive.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
  <script>
      var onloadCallback = function() {
          /**
          * If we try to load page to show the congrats message we don't need to load recaptcha.
          */
          if($("#botvalidator").length > 0) {
              grecaptcha.render('botvalidator', {
                  'sitekey' : '6Le4K68ZAAAAAG4kUVlhyobedxFX5xnPixuk0E1E',
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

          $('#reclamaciones').parsley().destroy();

          $('#g-recaptcha-response').attr('required', true);
          // We are going to create a new validator on Parsley
          $('#g-recaptcha-response').attr('data-parsley-captcha-validation', true);
          $('#g-recaptcha-response').attr('data-parsley-error-message', "Necesitamos que confirmes que no eres un robot. Gracias.");
          $('#g-recaptcha-response').attr('data-parsley-errors-container', "#captchaerrors");
      $('#reclamaciones').parsley();
      };
      

      /** We are going to add a new Parsley validator, this validation is called from
      #g-recaptcha-response after clicking the submit button*/

      window.Parsley.addValidator('captchaValidation', {

              validateString: function(value) {
                  if(debug) console.log("Validating captcha", value);
                  if(value.length > 0) {
                      return true;
                  } else {
                      return false;
                  }                    
              },
              messages: {es: 'Necesitamos que confirmes que no eres un robot. Gracias.'}
            });
  </script>

</body>

</html>

