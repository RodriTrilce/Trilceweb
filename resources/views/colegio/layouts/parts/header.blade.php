<style>


.text-left{
  color: black !important;
}

.orange{
  color: #ff4e0e !important;
}

.class_h3{
    color: #ff4e0e !important;
}

p.venue-info-parrafo {
    color: black !important;
}

.venue-info-container{
    color: black !important;
}

nav>ul>li>a{
    color: black !important;
}
nav > ul > li > a:hover {
  text-decoration: none; 
  outline: none;
  color: #ff4e0e !important;
}

.nav-item-active{
    color: #ff4e0e;
}

  .nav__highlight:before {
    top: 8px;
  }
    /* .dropdown-desk {
      right: 0;
      position: absolute;
      visibility: hidden;
      z-index: 9999;
    }
    .dropdown-desk {
      border: 1px solid black;
    }
    .dropdown-desk-colegio {
      border: 1px solid green;
    }
    .block-province {
      border: 2px solid red;
      margin-left: 20px;
    }
    .row-menu {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
    .titleblockprovincia {
      padding-left: 0px;
      margin-left: 0px;
    } */

    nav .nav-venues:hover > .dropdown-desk {
      position: absolute;
    }
    .row-menu {
      display: flex;
      justify-content: space-around;
    }
    @media (max-width: 699px){
      .header-double-image-mobile {
        display: flex;
        justify-content: center;
        background-color: #FF5E3E;
      }
    }
    
  </style>
  <header>
      <div class="row between-xs header-web">
        <div class="row col-xs col-sm logo">
          <div class="col-xs-12"><a href="/colegio/"><img src="{{{ asset('static/images/logos/logo-a-colegio.gif') }}}" alt="Trilce Colegio"></a></div>
        </div>
        <div class="row col-xs col-sm-9 col-lg-10 end-xs">
            <div class="col-xs-12 nav-info">
                <span class="nav-info-content nav-info-colegio">
                  <a href="/"><i class="fa fa-home"></i></a> | 
                  <a href="http://intranet.trilce.edu.pe" target="_blank">Intranet para padres</a> |
                  <a href="http://intranet.trilce.edu.pe" target="_blank">Intranet para alumnos</a> | 
                  Call center: <a class="nav-info-colegio__phone" href="tel:016198100"><b>6198 100</b></a> 
                </span>
            </div>
            <div class="col-xs-12">
              <nav class="nav-burger">
                <input type="checkbox" id="menu-toggle" />
                <div class="toogle-content">
                  <label for="menu-toggle" class="label-toggle"><i class="fa fa-bars"></i></label>
                </div>

                <ul>
                  <!--
                  <li class=""><a href="/colegio/vacaciones-utiles" class="{{ (Request::is('*vacaciones-utiles*')?'nav-item-active':'') }}">Vacaciones Útiles</a></li>
                -->

                  <li class="nav-info-responsive nav-info-colegio">
                  <div><a class="nav-info-colegio__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet para padres</a></div>
                    <div><a class="nav-info-colegio__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet para alumnos</a></div>
                    <div><a class="nav-info-colegio__phone" href="tel:016198100">Call center: <b>6198 100</b></a></div>
                  </li>

                  <!-- Only mobile -->
                    <!--
                  <li class="nav-colegio-aboutusmobile">
                    <a href="/colegio/propuesta-educativa" class="aboutusmobile-link"><img src="{{url('static/images/colegio/imagen-menu-pe-movil.jpg')}}" alt="Propuesta educativa"></a>
                  </li>
                  --> 

                  <li class="pulse"><a href="https://www.trilce.edu.pe/matricula-2025/" target="_blank" class="nav-item-active"><strong>Matrícula 2025</strong></a></li>
                  <li class="nav-venues xs-hide" id="sedes">
                    <a href="#" class="{{ (Request::is('colegio/sede/*')?'nav-item-active':'') }}">Sedes</a>
                    <div class="dropdown-desk">
                      <div class="dropdown-desk-content dropdown-desk-colegio">

                        <div class="row col-xs-12 row-menu">
                          <div class="row col-xs-8">

                            <div class="col-xs-3 venues-in">
                              <h3 class="title" style="color: #f4633a"><i class="fa fa-map-marker marker"></i><br> Sedes en <br><strong>Lima</strong></h3>
                            </div>

                            <div class="row col-xs linkslima block-capital">
                              <div class="col-xs">
                                <ul class="ul-venue">
                                  <li class="item {{ (Request::is('colegio/sede/brena*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/brena">Breña</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/callao*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/callao">Callao</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/chorrillos*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/chorrillos">Chorrillos</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/comas*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/comas">Comas</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/la-molina*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/la-molina">La Molina</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/los-olivos*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/los-olivos">Los Olivos</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/maranga*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/maranga">Maranga</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/marsano*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/marsano">Marsano</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/nana*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/nana">Ñaña</a></li>
                                </ul>
                              </div>
                              <div class="col-xs">
                                <ul class="ul-venue">
                                  <li class="item {{ (Request::is('colegio/sede/pro*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/pro">Pro</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/roma*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/roma">Roma</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/salamanca*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/salamanca">Salamanca</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/salaverry*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/salaverry">Salaverry</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/san-isidro*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/san-isidro">San Isidro</a></li>
                                  <!-- <li class="item {{ (Request::is('colegio/sede/san-juan-de-lurigancho')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</a></li> -->
                                  <li class="item {{ (Request::is('colegio/sede/san-juan-de-lurigancho')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/santa-anita*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/santa-anita">Santa Anita</a></li>                                  
                                  <li class="item {{ (Request::is('colegio/sede/villa-el-salvador*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/villa-el-salvador">Villa El Salvador</a></li>
                                  <li class="item {{ (Request::is('colegio/sede/villa-maria*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/villa-maria">Villa María</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="row col-xs-4 block-province">
                            <div class="col-xs venues-in titleblockprovincia">
                              <h3 class="title provincia"><i class="fa fa-map-marker marker"></i><br> Sedes en <br><strong>Provincia</strong></h3>
                            </div>
                            <div class="col-xs linksprovincia">
                              <ul class="ul-venue">
                                <li class="item item2"><a class="{{ (Request::is('colegio/sede/arequipa*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}" href="/colegio/sede/arequipa">Arequipa</a></li>
                                <li class="item item2"><a class="{{ (Request::is('colegio/sede/chiclayo*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}" href="/colegio/sede/chiclayo">Chiclayo</a></li>
                                <li class="item item2"><a class="{{ (Request::is('colegio/sede/chanchamayo*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}" href="/colegio/sede/chanchamayo">Chanchamayo</a></li>
                                <li class="item item2"><a class="{{ (Request::is('colegio/sede/huancayo*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}" href="/colegio/sede/huancayo">Huancayo</a></li>
                                <li class="item item2"><a class="{{ (Request::is('colegio/sede/piura*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}" href="/colegio/sede/piura">Piura</a></li>
                                <li class="item item2"><a class="{{ (Request::is('colegio/sede/trujillo*')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}" href="/colegio/sede/trujillo">Trujillo</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                  </li>
                  <!--li class="pulse"><a href="/matricula-2024/" class="nav-item-active nav-item-noclicktton active_ever">Matrícula 2024</a></li-->
                  <!--li class="pulse"><a href="https://www.trilce.edu.pe/lista-espera-2025/" target="_blank" class="nav-item-active">Lista de Espera 2025</a></li-->
                  <!--li class="pulse"><a href="/vacaciones-utiles-2024/" class="nav-item-active nav-item-noclicktton active_ever">Vacaciones Útiles 2024</a></li-->
                  {{--<li><a href="/colegio/matricula-nuevo" class="{{ (Request::is('colegio/matricula*')?'nav-item-active nav-item-noclick':'') }}"><strong>Matrícula 2020</strong></a></li>--}}

                  <!-- Only mobile -->
                  <li class="menu-click-sedes">
                    <a>Sedes </a>
                    <div class="menu-colegio-sedes">
                      <select class="menu-colegio-sedes-select" id="selectRedirectLima" onchange="location = this.value;">
                        <option value="" selected disabled hidden>Colegios en Lima</option>
                        <option value="/colegio/sede/brena">Breña</option>
                        <option value="/colegio/sede/callao">Callao</option>
                        <option value="/colegio/sede/chorrillos">Chorrillos</option>
                        <option value="/colegio/sede/comas">Comas</option>
                        <option value="/colegio/sede/la-molina">La Molina</option>
                        <option value="/colegio/sede/los-olivos">Los Olivos</option>
                        <option value="/colegio/sede/maranga">Maranga</option>
                        <option value="/colegio/sede/marsano">Marsano</option>
                        <option value="/colegio/sede/nana">Ñaña</option>
                        <option value="/colegio/sede/pro">Pro</option>
                        <option value="/colegio/sede/roma">Roma</option>
                        <option value="/colegio/sede/salamanca">Salamanca</option>
                        <option value="/colegio/sede/salaverry">Salaverry</option>
                        <option value="/colegio/sede/san-isidro">San Isidro</option>
                        <!-- <option value="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</option> -->
                        <option value="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</option>
                        <option value="/colegio/sede/santa-anita">Santa Anita</option>
                        <option value="/colegio/sede/villa-el-salvador">Villa El Salvador</option>
                        <option value="/colegio/sede/villa-maria">Villa María</option>
                      </select>
                      <select class="menu-colegio-sedes-select" id="selectRedirectProvince" onchange="location = this.value;">
                        <option value="" selected disabled hidden>Colegios en Provincia</option>
                        <option value="/colegio/sede/arequipa">Arequipa</option>
                        <option value="/colegio/sede/chiclayo">Chiclayo</option>
                        <option value="/colegio/sede/chanchamayo">Chanchamayo</option>
                        <option value="/colegio/sede/huancayo">Huancayo</option>
                        <option value="/colegio/sede/piura">Piura</option>
                        <option value="/colegio/sede/trujillo">Trujillo</option>
                      </select>
                    </div>
                  </li>

                  <!--li><a target="_blank" href="https://www.trilce.edu.pe/propuesta-educativa/" class="{{ (Request::is('colegio/propuesta-educativa')?'nav-item-active':'') }} ">Propuesta educativa</a></li-->
                  <!--li class="pulse"><a href="https://www.trilce.edu.pe/colegio/vacaciones-utiles" class="nav-item-active nav-item-noclicktton active_ever">Vacaciones Útiles</a></li-->
                  <li class=""><a target="_blank" href="https://www.trilce.edu.pe/l/reglamento-interno-colegios" class="{{ (Request::is('colegio/blog*')?'nav-item-active':'') }}">REGLAMENTO INTERNO</a></li>
                  
                  <!--li class=""><a target="_blank" href="/normas-convivencia" class="{{ (Request::is('colegio/blog*')?'nav-item-active':'') }}">Normas de convivencia</a></li-->
                  <li class=""><a href="/colegio/blog" class="{{ (Request::is('colegio/blog*')?'nav-item-active':'') }}">Blog</a></li>
                  <!--li>
                    <a target="_blank" href="https://www.trilce.edu.pe/l/menu-trilce-2024" class="{{ (Request::is('colegio/propuesta-educativa')?'nav-item-active':'') }} ">Menú Trilce</a>
                  </li-->
                  <li class=""><a href="/colegio/contacto" class="{{ (Request::is('colegio/contacto')?'nav-item-active nav-item-noclick':'') }}">Contáctanos</a></li>
                  <li class="nav-colegio-aboutus">
                    <a href="/colegio/nosotros" class="{{ (Request::is('colegio/nosotros')?'nav-item-active nav-item-noclick':'') }}">Nosotros</a>
                    <!--
                    <div class="dropdown-desk xs-hide-force">
                      <div class="dropdown-desk-content dropdown-desk-colegio-aboutus">
                        <div class="row col-xs-12">
                          <a href="/colegio/propuesta-educativa" class="dd-colegio-aboutus-link">
                            <div class="row col-xs-4 dd-colegio-aboutus-textleft">
                              <h2><i class="fa fa-graduation-cap"></i> Propuesta educativa</h2>
                            </div>

                            <div class="col-xs dd-colegio-aboutus-rocket"></div>

                            <div class="row col-xs dd-colegio-aboutus-textright">
                              <h2>Conoce nuestra propuesta educativa</h2>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  -->
                  </li>
                  <li>
                    <a target="_blank" href="https://www.trilce.edu.pe/l/menu-trilce-2025">Menú Trilce</a>
                  </li>
                  <li class="nav__highlight nav__highlight--left"><a href="/academia">Academia</a></li>
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

