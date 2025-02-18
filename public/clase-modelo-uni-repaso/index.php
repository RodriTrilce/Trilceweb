<?php
  
    include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Clase modelo Ciclo UNI Repaso - Trilce </title>
  <link rel="canonical" href="https://www.trilce.edu.pe/" />
  <link rel="stylesheet" href="css/line-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
    <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>

<body>

<!--Navbar-->
<nav class="fixed-top py-1 home">
    <div class="container">
      <div class="row box-nav">
        <div class="col-xs-6 col-md-6">
            <a class="navbar-brand" href="https://www.trilce.edu.pe/" target="_blank">
              <img src="img/logo-trilce-academia-white.svg" width="100">
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
  <section class="banner d-flex justify-content-center align-items-center text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center font-weight-bold my-4">Clase modelo Ciclo UNI Repaso  </h1>
        </div>
        <div class="col-md-6 offset-md-3">
          <h5 class="text-center my-4">
          Conoce nuestro sistema de enseñanza y aprendizaje. Participa de nuestra clase modelo. <br> 
          </h5>
        </div>
      </div>
    </div>
  </section>

  <!--Datos-->
  <section class="datos d-flex justify-content-center align-items-center text-center">
    <div class="container">
      <div class="row py-4 ">
        <div class="col-md-4 text-left my-2">
          <span class=""><b>Cursos:</b><br>
            Geometría de 9:00 a.m.  a 12:00 m.<br>
            Álgebra de 12:00 m. a 2:00 p.m.
          </span>
        </div>
        <div class="col-md-4 text-left my-2">
          <span class=""><b>Fecha: </b><br>
            Sábado 2 de enero de 2021<br>
          </span>
        </div>
        <div class="col-md-4 text-left my-2">
          <span class=""><b>Plataforma: </b><br>
          Google Meet <br><small style="font-size: 0.9em;">(Déjanos una cuenta de Gmail para que puedas acceder)</small>
          </span>
        </div>
        
      </div>
    </div>
  </section>

   <section class="formulario py-5">
    
     <form action="./registro.php" name="clase" id="clase" method="post" name="form">
       <div class="container">
         <div class="row">
           <div class=" text-left offset-md-2 col-md-8 mb-4 ">
             <h2>Registra tus datos </h2>
             <small class="text-required mb-0">
               * Campos obligatorios
            </small>
           </div>
           <div class="offset-md-2 col-md-8 offset-md-2">
             <div class="row">
               <div class="col-xs-12 col-md-6 px-0 pr-2 pl-2">
                  <div class="form-group">
                    <input minlength="5" maxlength="75"  name="nombres" id="nombres" type="text" required   placeholder="Nombres *" class="form-control">
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 px-0 pr-2 pl-2">
                  <div class="form-group">
                    <input minlength="5" maxlength="75"  name="apellidos" id="apellidos" type="text" required   placeholder="Apellidos * " class="form-control">
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 px-0 pr-2 pl-2">
                  <div class="form-group">
                    <input maxlength="8" minlength="8" name="dni" id="dni" type="number" required     placeholder="DNI *" class="form-control">
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 px-0 pr-2 pl-2">
                  <div class="form-group">
                    <input maxlength="9" minlength="9" id="celular" name="celular" type="number" required    placeholder="Celular *" class="form-control">
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 px-0  pr-2 pl-2">
                  <div class="form-group">
                    <input minlength="3" maxlength="75" name="correo" id="correo" type="email" required placeholder="Correo electrónico Gmail *" class="form-control">
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 px-0  pr-2 pl-2">
                  <div class="form-group">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
                    <select class="form-control selectpicker" multiple title="Curso" name="curso" id="curso" >
                      <option>Geometría de 9:00 a.m. a 12:00 m.</option>
                      <option>Álgebra de 12:00 m. a 2:00 p.m.</option>
                    </select>
                  </div>
               </div>

               
             </div>
           </div>
         </div>

         <div class="row">

           <div class="offset-md-2 col-md-8 offset-md-2 my-2 text-center">
             <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter" required>
               <label class="custom-control-label disclaimer" for="defaultRegisterFormNewsletter">Acepto que he leído las <a class="orange" href="https://www.trilce.edu.pe/proteccion-datos-personales/" target="_blank">políticas de protección de datos personales</a> </label>
             </div>
           </div>
           <div class="offset-md-4 col-md-4 offset-md-3 my-4">
             <input class="btn btn-block " type="submit" value="ENVIAR">
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

  <script>
    $('select').selectpicker('val', ['Geometría','Algebra']);
  </script>

</body>

</html>

