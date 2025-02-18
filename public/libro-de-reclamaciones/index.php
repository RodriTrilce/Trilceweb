<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Libro de reclamaciones - Trilce</title>
  <link rel="stylesheet" href="css/line-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--Navbar-->
<nav class="fixed-top py-1">
    <div class="container">
      <div class="row box-nav">
        <div class="col-xs-6 col-md-6">
            <a class="navbar-brand" href="https://www.trilce.edu.pe/" target="_blank">
              <img src="img/logo-trilce-academia-white.svg" alt="Academia Trilce" width="100">
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

  <!-- Start your project here-->
  <section class="banner d-flex justify-content-center align-items-center text-center" style="height: calc(100vh - 67.4px);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center font-weight-bold my-4">Libro de reclamaciones</h1>
        </div>
        <div class="col-md-6 offset-md-3">
          <p class="text-center my-4">Conforme lo dispone el artículo 5° del Decreto Supremo N° 011-2011-PCM, el cual aprueba el Reglamento del
            Libro de Reclamaciones del Código de Protección y Defensa al Consumidor, esta institución cuenta con un
            Libro de Reclamaciones virtual a su disposición.</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4 my-4 select-cole">
            <select class="input-field" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
              <option selected disabled>--Seleccione sede Colegio--</option>
              <optgroup label="Sedes en Lima">
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/brena">Breña</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/callao">Callao</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/chorrillos">Chorrillos</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/comas">Comas</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/jesus-maria-salaverry">Jesús María (salaverry)</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/la-molina">La Molina</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/los-olivos">Los Olivos</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/maranga">Maranga</option>
                  <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/nana">Ñaña</option>
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
              <option selected disabled>--Seleccione sede Academia--</option>
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-los-olivos">Los Olivos</option>
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-santa-beatriz">Santa Beatriz</option>
              <!--option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-comas">Comas</option-->
              <option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-villa-el-salvador">Villa El Salvador</option>
              <!--option value="https://www.trilce.edu.pe/libro-de-reclamaciones/academia-marsano">Marsano</option-->
            </select>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>© 2025 Trilce. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

    <script>
      $(document).ready(function () {
        $('select').formSelect();
      });
    </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js">
  </script>

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