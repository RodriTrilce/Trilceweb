<style>
  .rescont {
  display: flex;
  justify-content: center;
  align-items: center;
}

.importat{
    background-color: #a9381c !important;
}
.impo{
  background-color:#c54322 !important;
}
.trbajaconnosotros{
  background-color:#cb5031 !important;
}


.responsive-image {
  max-width: 100%;
  height: auto;
  display: block;
}

@media (max-width: 768px) {
  .responsive-image {
    content: url('{{ url("/static/images/academia/banner-informacion-academias-MOBILE-_1__11zon.webp") }}');
  }
}

</style>
<div class="row col-xs-12 start-xs center-sm xs-hide container-main-aca rescont" >
  <!--div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
  <div class="row col-xs-12 center-xs incriptions-acade-ads">
  <div class="incriptions-acade-ads__container">
  <div class="row col-xs-12">
  <div class="col-xs-12 col-sm-6">				
  <a href="http://www.trilce.edu.pe/inscripcion-academia/" class="incriptions-acade-ads__link">
  <h1><strong>¡No te quedes sin vacante!</strong></h1>
  <p>Nuevos ciclos disponibles</p>
  <button class="incriptions-acade-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
  Regístrate aquí
  </button>
  </a>
  </div>
  <div class="row col-xs-6 bottom-xs center-xs xs-hide">
  <img src="{{ url('/static/images/academia/new-inscripciones-academia.png') }}" alt="">	
  </div>        		
  </div>
  </div>
  </div>
  </div-->
  <a href="https://www.trilce.edu.pe/matricula-linea-2025/" target="_blank" class="responsive-link">
    <img src="{{ url('/static/images/academia/banner-informacion-academias-_1__11zon.webp') }}" 
         alt="Banner información" class="responsive-image">
  </a>
  </div>

<div class="card" style="width: 100%  !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 simulacros">
          <a href="https://www.trilce.edu.pe/academia/simulacros">
            <i class="fa fa-bullhorn"></i>
            <h3>Simulacros</h3>
            <p>Área de Resultados</p>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 solucionarios">
          <a href="https://www.trilce.edu.pe/academia/solucionarios">
            <i class="fa fa-paperclip"></i>
            <h3>Solucionarios</h3>
            <p>Área de descarga</p>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 trbajaconnosotros">
          <a href="https://www.trilce.edu.pe/trabaja-con-nosotros">
            <i class="las la-chalkboard-teacher"></i>
            <h3>Trabaja con nosotros</h3>
            <p>Escuela de profesores</p>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 impo">
          <a href="https://www.trilce.edu.pe/academia/preguntas-frecuentes">
            <i class="fa fa-question"></i>
            <h3>Preguntas frecuentes</h3>
            <p>Resolvemos tus dudas</p>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 importat">
          <a href="https://www.trilce.edu.pe/academia/guia-de-pagos">
            <i class="fa fa-credit-card"></i>
            <h3>Guía de pagos en línea</h3>
            <p>Todos los pasos a seguir</p>
          </a>
        </div>
      </div>
    </div>
  </div>
