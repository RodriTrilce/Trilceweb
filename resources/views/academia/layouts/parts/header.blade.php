<head>


  <style>
    .nav>ul>li:hover>a{
      text-decoration:none;
    }
    .nav__highlight:before {
      right: 100% !important;
      top: 7px !important;
      margin-right: 9px !important;
      left: auto !important;
    }
  </style>

<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
</head>
<body>
<header>
  <div class="row between-xs header-web">
    <div class="row col-xs col-sm logo">
      <div class="col-xs-12"><a href="/academia/"><img src="{{{ asset('static/images/logos/logo-a-academia.gif') }}}" alt="Trilce Academia"></a></div>
    </div>
    <div class="row col-xs col-sm-9 col-lg-10 end-xs">
      <div class="col-xs-12 nav-info">
        <span class="nav-info-content"><a href="/"><i class="fa fa-home"></i></a> | 
                  <a href="http://intranet.trilce.edu.pe" target="_blank">Intranet para padres</a> |
                  <a href="http://intranet.trilce.edu.pe" target="_blank">Intranet para alumnos</a> | Call center: <a class="phone" href="tel:+51016198100"><b>6198 100</b></a></span>
      </div>
      <div class="col-xs-12">
        <nav class="nav-burger">
          <input type="checkbox" id="menu-toggle" />
          <div class="toogle-content">
            <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
          </div>

          <ul>
          
            <li class="nav-info-responsive nav-info-academia">
              <div>
                <a class="nav-info-colegio__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet para padres</a>
              </div>
              <div>
                <a class="nav-info-colegio__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet para alumnos</a>
              </div>
              <div>
                <a class="nav-info-colegio__phone" href="tel:016198100">Call center: <b>6198 100</b></a>
              </div>
            </li>
			
			<!--li class=""><a href="https://www.trilce.edu.pe/simulacros/">SIMULACRO TIPO ADMISIÓN</a></li-->

			<li class="pulse"><a href="/academia/#inicios" class="nav-item-active"><Strong>¡Nuevos ciclos!</strong></a></li>
      <li class="pulse"><a href="https://www.trilce.edu.pe/matricula-linea-2025/" class="nav-item-active"><strong>¡MATRÍCULA EN LÍNEA!</strong></a></li>
      <li class="nav-venues" id="sedes">
        <a href="/academia/sedes" class="{{ (Request::is('academia/sedes')?'nav-item-active':'') }}">Sedes</a>
        {{--<div class="dropdown-desk">
                <div class="dropdown-desk-content dropdown-desk-academia">
                  <div>
                    <h3>UNI - San Marcos - Católica</h3>
                    <ul>
                        <li class="{{ (Request::is('academia/sede/cercado-de-lima')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/cercado-de-lima">Cercado de Lima (Torrico)</a></li>

                        <li class="{{ (Request::is('academia/sede/los-olivos')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/los-olivos">Los Olivos</a></li>
                    </ul>
                  </div>
                  <div>
                    <h3>UNI - San Marcos</h3>
                    <ul>
                    <li class="{{ (Request::is('academia/sede/santa-beatriz')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></li>
                    <li class="{{ (Request::is('academia/sede/comas')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/comas">Comas</a></li>
                    <li class="{{ (Request::is('academia/sede/villa-el-salvador')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></li>
                    </ul>
                  </div>
                  <div>
                    <h3>UNI - Católica</h3>
                    <ul>
                      <li class="{{ (Request::is('academia/sede/cercado-de-lima')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/cercado-de-lima">Cercado de Lima (Torrico)</a></li>
                    </ul>
                  </div>
                  <div>
                    <h3>San Marcos</h3>
                    <ul>
                      <li class="{{ (Request::is('academia/sede/marsano')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/marsano">Marsano</a></li>
                    </ul>
                </div>
                <div>
                  <h3>Católica</h3>
                  <ul>
                      <li class="{{ (Request::is('academia/sede/san-isidro')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/san-isidro">San Isidro</a></li>
                  </ul>
              </div>
            </div>
        </div>--}}
      </li>
      <li class=""><a href="/academia/nosotros" class="{{ (Request::is('academia/nosotros')?'nav-item-active nav-item-noclick':'') }}">Nosotros</a></li>
      <li class=""><a href="/academia/tutoriales" class="{{ (Request::is('academia/tutoriales*')?'nav-item-active':'') }}">Tutoriales</a></li>
      <li class=""><a href="/academia/blog" class="{{ (Request::is('academia/blog*')?'nav-item-active':'') }}">Blog</a></li>
      <li class=""><a href="https://www.trilce.edu.pe/registro-academia/" class="nav-item-active"><strong>Más información</strong></a></li>
            
            <!--li>
              <a target="_blank" href="https://www.trilce.edu.pe/l/menu-trilce-2024">Menú Trilce</a>
            </li-->
            
            
            <li class="nav__highlight"><a href="/colegio">Colegio</a></li>


            <!-- <li class=""><a href="/academia/preinscripcion" class="{{ (Request::is('academia/preinscripcion')?'nav-item-active nav-item-noclick':'') }}">Preinscripción</a></li> -->


            

            

            
          <!--li><a href="https://www.trilce.edu.pe/inscripcion-academia/" target="_blank">Inscripción academia</a></li-->

          <!--li class="nav-venues xs-hide" id="sedes">
              <a href="/academia/sedes" class="{{ (Request::is('academia/sedes')?'nav-item-active':'') }}">Sedes</a>
              {{--<div class="dropdown-desk">
                  <div class="dropdown-desk-content dropdown-desk-academia">
                    <div>
                      <h3>UNI - San Marcos - Católica</h3>
                      <ul>

                        <li class="{{ (Request::is('academia/sede/cercado-de-lima')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/cercado-de-lima">Cercado de Lima (Torrico)</a></li>

                        <li class="{{ (Request::is('academia/sede/los-olivos')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/los-olivos">Los Olivos</a></li>
                      </ul>
                    </div>
                  <div>
                  <h3>UNI - San Marcos</h3>
                    <ul>
                      <li class="{{ (Request::is('academia/sede/santa-beatriz')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></li>
                      <li class="{{ (Request::is('academia/sede/comas')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/comas">Comas</a></li>
                      <li class="{{ (Request::is('academia/sede/villa-el-salvador')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></li>
                    </ul>
                  </div>
                <div>
                <h3>UNI - Católica</h3>
                  <ul>
                   <li class="{{ (Request::is('academia/sede/cercado-de-lima')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/cercado-de-lima">Cercado de Lima (Torrico)</a></li>
                  </ul>
                </div>
              <div>
              <h3>San Marcos</h3>
                <ul>
                  <li class="{{ (Request::is('academia/sede/marsano')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/marsano">Marsano</a></li>
                </ul>
              </div>
              <div>
              <h3>Católica</h3>
                <ul>
                  <li class="{{ (Request::is('academia/sede/san-isidro')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/academia/sede/san-isidro">San Isidro</a></li>
                </ul>
              </div>
            </div>
          </div>--}}

      </!--li>

    <li-- class="menu-click-sedes">
      <a>Sedes </a>
        <ul class="menu-sedes-ul">
          <li><a href="/academia/sede/los-olivos">Los Olivos</a></li>
          <li><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></li>
          <li><a href="/academia/sede/comas">Comas</a></li>
          <li><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></li>
          <li><a href="/academia/sede/cercado-de-lima">Cercado de Lima (Torrico)</a></li>
          <li><a href="/academia/sede/marsano">Marsano</a></li>
          <li><a href="/academia/sede/san-isidro">San Isidro</a></li>
        </ul>
      </li-->
      
      <!--li class="nav__highlight nav__highlight--left sm-hide md-hide lg-hide"><a target="_blank" href="/menu-trilce">Menú Trilce</a></!--li-->
      
      {{--<li class=""><a href="/academia/contacto" class="{{ (Request::is('academia/contacto')?'nav-item-active nav-item-noclick':'') }}">Escrí­benos</a></li>--}}
      
  </ul>
  </nav>

  </div>
  </div>
  </div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
      function sendEvent(){
          ga('send', 'event', {
              eventCategory: 'registro',
              eventAction: 'click',
              eventLabel: "menu"
            });
      }
  </script>
</body>