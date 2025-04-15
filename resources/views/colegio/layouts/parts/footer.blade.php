<footer>
    <div class="row col-xs-12 center-xs">
        <!-- Fila 1 -->
        <div class="row col-xs-12 center-xs footer-top">
            <div class="col-xs-12 col-sm-3">
                <img src="static/images/colegio/logo-trilce-45-desktop.svg" alt="">
            </div>
            <div class="col-xs-12 col-sm-3 fotlist footer-text-left">
                <div class="fot-est">
                    <span class="espe-text">Matrícula 2025</span><br>
                    <span class="espe-text">Sedes</span><br>
                    <span class="espe-text">Reglamento interno</span><br>
                    <span class="espe-text">Blog</span><br>
                    <span class="espe-text">Pagos en línea</span><br>
                    <span class="espe-text">Contáctanos</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 fotlist footer-text-left">
                <div class="fot-est">
                    <span class="espe-text">Nosotros</span><br>
                    <span class="espe-text">Trabaja con nosotros</span><br>
                    <span class="espe-text">Preguntas frecuentes</span><br>
                    <span class="espe-text">Intranet</span><br>
                    <span class="espe-text">Matrícula Online</span><br>
                    <span class="espe-text">Protección de datos personales</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 fotlist footer-text-left">
                <div class="footer-column-space">
                    <div class="fot-est">
                        <span class="espe-text">Libros de reclamaciones</span><br>
                        <span class="espe-text">Ir a Academias</span>
                    </div>
                    <!-- Bloque de redes sociales -->
                    <ul class="footer-right-icons">
                        <li class="titokt"><a href="https://www.tiktok.com/@trilce.colegios" title="TikTok"
                                target="_blank"><img src="{{ asset('static/images/logos/icono_tik_tok.svg') }}"
                                    alt="TikTok" style="width: 16px;"></a></li>
                        <li><a href="https://www.trilce.edu.pe/l/info-general-whatsapp"
                                title="Chatea con nosotros" target="_blank"><i class="la la-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/trilcecolegio/" title="Instagram" target="_blank"><i
                                    class="la la-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/ColegioTrilce/" title="Facebook" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1" title="YouTube"
                                target="_blank"><i class="la la-youtube-play"></i></a></li>
                        <li><a href="" title="Telefono trilce" target="_blank"><i class="la la-phone"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-11 separator-line"></div>


        <!-- Footer inferior -->
        <div class="col-xs-12 center-xs footer-bottom" style="margin-top: 10px;">
            © {{ date('Y') }} Colegio Trilce. Todos los derechos reservados.
        </div>
    </div>
</footer>

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