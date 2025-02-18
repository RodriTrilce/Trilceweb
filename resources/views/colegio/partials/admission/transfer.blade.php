<style>
  .container-new-admision {
    margin-top: 40px;
  }

  .colegio-cardsv2-items {
    text-align: center;
  }

  .colegio-cardsv2-items__item:nth-child(2) {
    border: 1px solid #f4633a;
  }

  .colegio-cardsv2-items__item:nth-child(2) i.fa,
  .colegio-cardsv2-items__item:nth-child(2) span.alumno,
  .colegio-cardsv2-items__item:nth-child(2) span.modality {
    text-decoration: none;
    color: #f4633a;
  }

  .new-t-title {
    margin-bottom: 0px
  }

  .admission-new-superindex {
    margin: 0px auto 40px;
  }

  .orange {
    color: #f4633a;
  }

  .tabs {
    max-width: 640px;
    margin: 0 auto;
    padding: 0 20px;

  }
  #tab-button {
    display: table;
    table-layout: fixed;
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
  }
  #tab-button li {
    display: table-cell;
    width: 20%;
  }
  #tab-button li a {
    display: block;
    padding: .5em;
    text-align: center;
    color: #000;
    text-decoration: none;
  }
  #tab-button li:not(:first-child) a {
    border-left: none;
  }
  #tab-button li a:hover,
  #tab-button .is-active a {
    border-bottom-color: transparent;
    background: #f4633a;
    color: #fff;
  }
  .tab-contents {
    padding: .5em 2em 1em;
  }

  /* .tab-button-outer {
    display: none;
  } */
  .tab-contents {
    margin-top: 20px;
  }
  .tab-contents p {
    text-align: left !important;
  }

  .tabs i.fa {
      text-align: left;
      display: flex;
      font-size: 2.5em;
      line-height: 1.2em;
    }

    .tabs .text-left {
      padding-right: 15px;
    }
  
  @media screen and (min-width: 768px) {
    .tab-button-outer {
      position: relative;
      z-index: 2;
      display: block;
    }
    .tab-select-outer {
      display: none;
    }
    .tab-contents {
      position: relative;
      top: 20px;
      margin-top: 0;
    }
  }

</style>

<div class="container-new-admision">

  <div class="row col-xs-12 center-xs admission-new-title">
    <div class="col-xs-12">
      <!--<h2 class="new-t-symbol"><span><i class="fa fa-plus"></i></span></h2>-->
      <h2 class="new-t-title"><span class="alumno">Requisitos Matrícula 2025</span></h2>
    </div>
  </div>

  <div class="colegio-cardsv2-items colegio-cardsv2-items--hovereffect">
    <a href="/colegio/matricula-nuevo" class="colegio-cardsv2-items__item">
      <div class="colegio-cardsv2-items__symbol">
        <span><i class="fa fa-plus"></i></span>
      </div>
      <div class="colegio-cardsv2-items__text">
        <span class="alumno">
          ALUMNO
        </span>
        <span class="modality">
          NUEVO
        </span>
      </div>
    </a>

    <a href="/colegio/matricula-traslado" class="colegio-cardsv2-items__item">
      <div class="colegio-cardsv2-items__symbol">
        <span><i class="fa fa-exchange"></i></span>
      </div>
      <div class="colegio-cardsv2-items__text">
        <span class="alumno">
          ALUMNO
        </span>
        <span class="modality">
          TRASLADO
        </span>
      </div>
    </a>

    <a href="/colegio/matricula-regular" class="colegio-cardsv2-items__item">
      <div class="colegio-cardsv2-items__symbol">
        <span><i class="fa fa-star"></i></span>
      </div>
      <div class="colegio-cardsv2-items__text">
        <span class="alumno">
          ALUMNO
        </span>
        <span class="modality">
          REGULAR
        </span>
        <span class="op">
          (actual)
        </span>
      </div>
    </a>

  </div>

  <div class="row col-xs-12 center-xs admission-new-title">
    
  <div class="tabs">
        <div class="tab-button-outer">
          <ul id="tab-button">
            <li><a href="#tab01">Inicial y 1.° Primaria</a></li>
            <li><a href="#tab02">2.° a 6.°Primaria</a></li>
            <li><a href="#tab03">Secundaria</a></li>
          </ul>
        </div>

        <div id="tab01" class="tab-contents">
          <div class="row"> 
            <div class="col-sm-12 col-md-6 text-left">

              <i class="orange fa fa-hand-o-up" aria-hidden="true"></i>

                <p class="orange">Paso 1</p>
                <p>Completar la ficha de admisión 2025.</p>
                <br>
            </div>
            <div class="col-sm-12 col-md-6 text-left">
                
                <i class="orange fa fa-edit"></i>

                <p class="orange">Paso 2</p>
                <p>Documentos a solicitar: <br><br>
                • Foto nítida por ambos lados del DNI del alumno.<br>
                • Foto nítida por ambos lados del DNI del P.F. y/o apoderado.<br>
                • Libreta de notas.<br>
				• Cartilla de vacunación.<br>
                </p>
                <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6 text-left">
              
                <i class="orange fa fa-sticky-note"></i>

                <p class="orange">Paso 3</p>
                <p>
                • Pago de matrícula.<br>
                • Firmar el compromiso de matrícula.<br>
                • Completar y firmar la ficha médica del estudiante.<br>
                </p>
                <br>
            </div>
            <div class="col-sm-12 col-md-6 text-left">

                <i class="orange fa fa-users"></i>

                <p class="orange">Paso 4</p>
                <p>Se programa entrevista con padres y coordinación o psicóloga.
                </p>
                <br>
            </div>
          </div>
        </div>

        <div id="tab02" class="tab-contents">
          <div class="row">
            <div class="col-sm-12 col-md-6 text-left">

            <i class="orange fa fa-hand-o-up" aria-hidden="true"></i>

                <p class="orange">Paso 1</p>
                <p>Completar la ficha de admisión 2025.</p>
                <br>
            </div>
            <div class="col-sm-12 col-md-6 text-left">

              <i class="orange fa fa-edit"></i>

                <p class="orange">Paso 2</p>
                <p>Documentos a solicitar: <br><br>
                • Foto nítida por ambos lados del DNI
                del alumno.<br>
                • Foto nítida por ambos lados del DNI
                del P.F. y/o apoderado.<br>
                • Libreta de notas. <br>
                </p>
                <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6 text-left">

            <i class="orange fa fa-sticky-note"></i>

                <p class="orange">Paso 3</p>
                <p>
                • Pago de matrícula. <br>
                • Firmar el compromiso de matrícula.<br>
                • Completar y firmar la ficha médica del estudiante.<br>
                </p>
                <br>
            </div>
            <div class="col-sm-12 col-md-6 text-left">

            <i class="orange fa fa-trophy" aria-hidden="true"></i>

                <p class="orange">Paso 4</p>
                <p>Se programa evaluación de conocimientos. <br>
                </p>
                <br>
            </div>
          </div>
        </div>

        <div id="tab03" class="tab-contents">
        <div class="row">
            <div class="col-sm-12 col-md-6 text-left">

            <i class="orange fa fa-hand-o-up" aria-hidden="true"></i>

                <p class="orange">Paso 1</p>
                <p>Completar la ficha de admisión 2025.</p>
                <br>
            </div>
            <div class="col-sm-12 col-md-6 text-left">

              <i class="orange fa fa-edit"></i>

                <p class="orange">Paso 2</p>
                <p>Documentos a solicitar: <br><br>
                • Foto nítida por ambos lados del DNI
                del alumno.<br>
                • Foto nítida por ambos lados del DNI
                del P.F. y/o apoderado.<br>
                • Libreta de notas. <br>
                </p>
                <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6 text-left">

            <i class="orange fa fa-sticky-note"></i>

                <p class="orange">Paso 3</p>
                <p>
                • Pago de matrícula. <br>
                • Firmar el compromiso de matrícula.<br>
                • Completar y firmar la ficha médica del estudiante.<br>
                </p>
                <br>
            </div>
            <div class="col-sm-12 col-md-6 text-left">

            <i class="orange fa fa-trophy" aria-hidden="true"></i>

                <p class="orange">Paso 4</p>
                <p>Se programa evaluación de conocimientos. <br>
                </p>
                <br>
            </div>
          </div>
        </div>
        
      </div>

  </div>

</div>
<script>
  document.title = 'Colegio Trilce | Matricula online';
</script>
<script>
  $(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
</script>