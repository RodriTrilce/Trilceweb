<header>
  <div class="row between-xs header-web">
    <div class="row col-xs col-sm logo">
      <div class="col-xs-12"><a href="/colegio/"><img src="{{{ asset('static/images/logos/logo-a-colegio.gif') }}}"
            alt="Trilce Colegio"></a></div>
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

            <li class="nav-info-responsive nav-info-colegio">
              <div><a class="nav-info-colegio__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet
                  para padres</a></div>
              <div><a class="nav-info-colegio__intranet" href="http://intranet.trilce.edu.pe/" target="_blank">Intranet
                  para alumnos</a></div>
              <div><a class="nav-info-colegio__phone" href="tel:016198100">Call center: <b>6198 100</b></a></div>
            </li>

            <li class="pulse"><a href="https://www.trilce.edu.pe/matricula-2026/" target="_blank"
                class="nav-item-active"><strong>MATRÍCULA 2026</strong></a></li>
            <li class="nav-venues xs-hide" id="sedes">
              <a href="#" class="{{ (Request::is('colegio/sede/*') ? 'nav-item-active' : '') }}">Sedes</a>
              <div class="dropdown-desk">
                <div class="dropdown-desk-content dropdown-desk-colegio">

                  <div class="row col-xs-12 row-menu">
                    <div class="row col-xs-8">

                      <div class="col-xs-3 venues-in">
                        <h3 class="title" style="color: #f4633a"><i class="fa fa-map-marker marker"></i><br> Sedes en
                          <br><strong>Lima</strong>
                        </h3>
                      </div>

                      <div class="row col-xs linkslima block-capital">
                        <div class="col-xs">
                          <ul class="ul-venue">
                            <li
                              class="item {{ (Request::is('colegio/sede/brena*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/brena">Breña</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/callao*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/callao">Callao</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/chorrillos*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/chorrillos">Chorrillos</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/comas*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/comas">Comas</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/la-molina*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/la-molina">La Molina</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/los-olivos*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/los-olivos">Los Olivos</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/maranga*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/maranga">Maranga</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/marsano*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/marsano">Marsano</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/nana*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/nana">Ñaña</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-xs">
                          <ul class="ul-venue">
                            <li
                              class="item {{ (Request::is('colegio/sede/pro*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/pro">Pro</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/roma*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/roma">Roma</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/salamanca*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/salamanca">Salamanca</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/salaverry*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/salaverry">Salaverry</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/san-isidro*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/san-isidro">San Isidro</a>
                            </li>
                            <!-- <li class="item {{ (Request::is('colegio/sede/san-juan-de-lurigancho')?'nav-item-active--indeskblock nav-item-noclick--indeskblock':'') }}"><a href="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</a></li> -->
                            <li
                              class="item {{ (Request::is('colegio/sede/san-juan-de-lurigancho') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/san-juan-de-lurigancho">San Juan de Lurigancho</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/santa-anita*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/santa-anita">Santa Anita</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/villa-el-salvador*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/villa-el-salvador">Villa El Salvador</a>
                            </li>
                            <li
                              class="item {{ (Request::is('colegio/sede/villa-maria*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}">
                              <a href="/colegio/sede/villa-maria">Villa María</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="row col-xs-4 block-province">
                      <div class="col-xs venues-in titleblockprovincia">
                        <h3 class="title provincia"><i class="fa fa-map-marker marker"></i><br> Sedes en
                          <br><strong>Provincia</strong>
                        </h3>
                      </div>
                      <div class="col-xs linksprovincia">
                        <ul class="ul-venue">
                          <li class="item item2"><a
                              class="{{ (Request::is('colegio/sede/arequipa*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}"
                              href="/colegio/sede/arequipa">Arequipa</a></li>
                          <li class="item item2"><a
                              class="{{ (Request::is('colegio/sede/chiclayo*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}"
                              href="/colegio/sede/chiclayo">Chiclayo</a></li>
                          <li class="item item2"><a
                              class="{{ (Request::is('colegio/sede/chanchamayo*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}"
                              href="/colegio/sede/chanchamayo">Chanchamayo</a></li>
                          <li class="item item2"><a
                              class="{{ (Request::is('colegio/sede/huancayo*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}"
                              href="/colegio/sede/huancayo">Huancayo</a></li>
                          <li class="item item2"><a
                              class="{{ (Request::is('colegio/sede/piura*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}"
                              href="/colegio/sede/piura">Piura</a></li>
                          <li class="item item2"><a
                              class="{{ (Request::is('colegio/sede/trujillo*') ? 'nav-item-active--indeskblock nav-item-noclick--indeskblock' : '') }}"
                              href="/colegio/sede/trujillo">Trujillo</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </li>

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
            <li class=""><a target="_blank" href="https://www.trilce.edu.pe/l/reglamento-interno-colegios"
                class="{{ (Request::is('colegio/blog*') ? 'nav-item-active' : '') }}">REGLAMENTO INTERNO</a></li>
            <li class=""><a href="/colegio/blog"
                class="{{ (Request::is('colegio/blog*') ? 'nav-item-active' : '') }}">Blog</a></li>
            <li class=""><a href="/colegio/contacto"
                class="{{ (Request::is('colegio/contacto') ? 'nav-item-active nav-item-noclick' : '') }}">Contáctanos</a>
            </li>
            <li class="nav-colegio-aboutus">
              <a href="/colegio/nosotros"
                class="{{ (Request::is('colegio/nosotros') ? 'nav-item-active nav-item-noclick' : '') }}">Nosotros</a>
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
  function sendEvent() {
    ga('send', 'event', {
      eventCategory: 'registro',
      eventAction: 'click',
      eventLabel: "menu"
    });
  }
</script>