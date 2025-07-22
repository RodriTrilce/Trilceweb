<footer>
    <div class="row col-xs-12 center-xs foot negro">
        <!-- Fila 1 -->
        <div class="row col-xs-12 center-xs footer-top mt-50">
            <div class="col-xs-12 col-sm-3 imgSvgFot d-none d-sm-block">
                <img src="https://www.trilce.edu.pe/storage/static/upload/ef2cf0c0-58ed-11f0-8347-49c16c32f53d.png"
                    alt="">
            </div>
            <div class="col-xs-12 col-sm-3 fotlist footer-text-left">
                <div class="fot-est">
                    <a href="https://www.trilce.edu.pe/lista-espera-2026/" class="espe-text d-block">Matrícula
                        2026</a><br>
                    <a class="espe-text d-block" style="opacity: 50%">Sedes</a><br>
                    <a href="https://www.trilce.edu.pe/l/reglamento-interno-colegios"
                        class="espe-text d-block">Reglamento interno</a><br>
                    <a href="https://www.trilce.edu.pe/colegio/blog" class="espe-text d-block">Blog</a><br>
                    <a href="https://www.trilce.edu.pe/colegio/guia-de-pagos-en-linea" class="espe-text d-block">Pagos
                        en línea</a><br>
                    <a href="https://www.trilce.edu.pe/colegio/contacto" class="espe-text d-block">Contáctanos</a><br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 fotlist footer-text-left">
                <div class="fot-est">
                    <a href="https://www.trilce.edu.pe/colegio/nosotros" class="espe-text d-block">Nosotros</a><br>
                    <a href="https://www.trilce.edu.pe/trabaja-con-nosotros/" class="espe-text d-block">Trabaja con
                        nosotros</a><br>
                    <a href="https://www.trilce.edu.pe/colegio/preguntas-frecuentes" class="espe-text d-block">Preguntas
                        frecuentes</a><br>
                    <a href="https://intranet.trilce.edu.pe/" class="espe-text d-block">Intranet</a><br>
                    <a href="https://www.trilce.edu.pe/l/manual-mat-online" class="espe-text d-block">Matrícula
                        Online</a><br>
                    <a href="https://www.trilce.edu.pe/proteccion-datos-personales/"
                        class="espe-text d-block">Protección de datos personales</a><br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 fotlist footer-text-left">
                <div class="footer-column-space">
                    <div class="fot-est">
                        <a href="https://www.trilce.edu.pe/libro-de-reclamaciones/" class="espe-text d-block">Libros de
                            reclamaciones</a><br>
                        <a href="https://www.trilce.edu.pe/academia" class="espe-text c-white d-block">Ir a
                            Academias</a><br>
                    </div>

                    <div class="fot-est imgSvgFot d-block d-sm-none">
                        <img src="static/images/colegio/logo-trilce-45-desktop.svg" alt="">
                    </div>
                    <!-- Bloque de redes sociales -->
                    <ul class="footer-right-icons">
                        <li class="titokt"><a href="https://www.tiktok.com/@trilce.colegios" title="TikTok"
                                target="_blank"><img src="{{ asset('static/images/logos/icono_tik_tok.svg') }}"
                                    alt="TikTok" style="width: 16px;"></a></li>
                        <li><a href="https://www.trilce.edu.pe/l/info-general-whatsapp" title="Chatea con nosotros"
                                target="_blank"><i class="la la-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/trilcecolegio/" title="Instagram" target="_blank"><i
                                    class="la la-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/ColegioTrilce/" title="Facebook" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1" title="YouTube"
                                target="_blank"><i class="la la-youtube-play"></i></a></li>
                        <li>
                            <a href="tel:016198100" title="Teléfono Trilce">
                                <i class="la la-phone"></i>
                            </a>
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