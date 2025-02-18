  <footer>
    <div class="row col-xs-12 center-xs">
      <div class="row col-xs-12 center-xs footer-top">
        <div class="col-xs-12 col-sm-11 start-xs container-padding-mobile">
          <span>Estás aquí: {{$breadcrumbs}}</span>
        </div>
      </div>

      <div class="row col-xs-11 center-xs footer-menu">
        <div class="col-xs start-xs links">
          <ul>
            <li><a href="/colegio">Colegio Trilce</a></li>
            <li><a target="_blank" href="https://www.trilce.edu.pe/proteccion-datos-personales/">Protección de datos personales</a></li>
            <li><a target="_blank" href="https://www.trilce.edu.pe/libro-de-reclamaciones/">Libro de reclamaciones</a></li>
            <!--li><a href="/menu-trilce" target="_blank" onclick="sendEvent()">Menú Trilce</a></li-->
            {{-- <li><a href="#">Vacaciones útiles</a></li> --}}
            {{-- <li><a href="#">Trabaja con nosotros</a></li> --}}
          </ul>
        </div>
        <div class="col-xs end-xs">
          <div class="col-xs-12 followconnect">SIGAMOS CONECTADOS</div>
          <ul class="footer-right-icons">
            <li><a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n" title="Chatea con nosotros" target="_blank" rel="nofollow"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://twitter.com/TRILCEtweet" title="Síguenos en Twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/AcademiaTrilce/" title="Síguenos Facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1" title="Suscríbete en YouTube" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="https://www.instagram.com/trilceacademia/" title="Síguenos en Instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-xs-12 center-xs footer-bottom">
        © {{date("Y")}} Colle SAC. Todos los derechos reservados.
      </div>
    </div>
  </footer>
  <div class="more_information md-hide sm-hide">
    <span class="more_information__call">
      <a href="https://www.trilce.edu.pe/registro-academia/"><i class="fa fa-pencil-square-o"></i> Regístrate</a>
    </span>
  </div>
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
