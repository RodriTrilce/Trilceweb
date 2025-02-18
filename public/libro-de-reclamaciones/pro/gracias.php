
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Libro de reclamaciones Ares - Trilce </title>
  <link rel="stylesheet" href="../css/line-awesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <style>
    @media (max-width: 768px) {
        section.banner p {
          display: block;
        }
    }
  </style>
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
  <section class="banner d-flex justify-content-center align-items-center text-center" style="height: calc(100vh - 67.4px);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center font-weight-bold my-4">¡Se registró con éxito su reclamo/queja!</h4>
        </div>
        <div class="col-md-12">
             <p class="text-center my-4">Se ha enviado un mensaje al correo electrónico ingresado con el código de la solicitud.<br>
            </p>
        </div>
        <div class="col-md-6 offset-md-3 mt-4">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <a href="https://www.trilce.edu.pe/colegio"  class="btn btn-block btn-grax" type="submit" name="submit" >ir a Trilce Colegios</a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a  href="https://www.trilce.edu.pe/academia"  class="btn btn-block btn-grax" type="submit" name="submit" >Ir a Trilce Academias</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>© 2024 Trilce. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>

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



</body>

</html>

