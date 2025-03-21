<div class="row col-xs-12 center-xs container-base preparation__section">
  <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
    <h1 class="preparation__title">¡Estudia con los mejores!</h1>
    <h3 class="preparation__subtitle">Encuentra todos nuestros ciclos disponibles</h3>
  </div>
</div>

{{--@include('academia.partials.preparation.search')--}}


<div class="row col-xs-12 center-xs container-base frequentquestions">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">

    <div class="js-tabs frequent_questions__tabs" id="tabs_frequent_questions">

      <ul class="js-tabs__header">
        <li><a href="#" class="js-tabs__title" style="background: white; margin-top:-100px;"></a></li>
      </ul>

      <div class="js-tabs__content js-badger-accordion_1">

        @foreach ($data as $d => $key)
        <div class="frequentquestions-question row col-xs-12">
          <div class="col-xs question-content">
            <h3 class="question-title js-badger-accordion-header">
              <div class="question-title__signe"></div>
              {{ $key['NIVEL_ESTUDIO_DESCRIPCION'] }}
            </h3>
            <dd class="badger-accordion__panel js-badger-accordion-panel">
              <div class="js-badger-accordion-panel-inner">
                <div class="question-answer">
                  <div class="row col-xs-12 col-sm-12 col-md-12 start-sm start-xs table-responsive preparation-overflow" id="drawTables" style="background: white">
                    <table class=" preparation-table">
                      <thead>
                        <tr>
                          <th>Local</th>
                          <th>Turno</th>
                          <th>Inicio</th>
                          <th>Fin</th>
                          <th>Pago único</th>
                          <th colspan=4 WIDTH="33%">Pago en cuotas</th>
                          <th WIDTH="20%">Horario</th>
                          <th>Estado</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($key as $k=> $valor)
                        @if (is_array($valor))
                        <tr>
                          <td data-label="Local">
                            @if ($valor['BLDG_DESCRIPCION'] == null)
                            Sin info
                            @else
                            {{ str_replace("Academia", "", $valor['BLDG_DESCRIPCION']) }}
                            @endif
                          </td>
                          <td data-label="Turno">
                            @if ($valor['TURNO'] == null)
                            Sin info
                            @else
                            @switch($valor['TURNO'])
                            @case('M')
                            Mañana
                            @break
                            @case('T')
                            Tarde
                            @break
                            @endswitch
                            @endif
                          </td>
                          <td data-label="Inicio">
                            @if ($valor['FECHA_INICIO'] == null)
                            Sin info
                            @else
                            {{$valor['FECHA_INICIO']}}
                            @endif
                          </td>
                          <td data-label="Fin">
                            @if ($valor['FECHA_FIN'] == null)
                            Sin info
                            @else
                            {{$valor['FECHA_FIN']}}
                            @endif
                          </td>
                          <!-- <td data-label="Inversión Mensual">
                            @if ($valor['PAGO_MENSUAL'] == null)
                            Sin info
                            @else
                            S/{{$valor['PAGO_MENSUAL']}}
                            @endif
                          </td> -->
                          <td data-label="Pago Único">
                                  @if ($valor['PAGO_CONTADO'] > 0)
                                    S/{{$valor['PAGO_CONTADO']}}
                                  @else
                                      Sin info
                                  @endif
                              </td>
                              <td data-label="Pago en cuotas">
                                  @if ($valor['PAGO_CUOTA1'] > 0)
                                    C1 S/{{$valor['PAGO_CUOTA1']}}
                                  @else
                                      
                                  @endif
                              </td>
                              <td data-label="Pago en cuotas">
                                  @if ($valor['PAGO_CUOTA2'] > 0)
                                    C2 S/{{$valor['PAGO_CUOTA2']}}
                                  @else
                                      
                                  @endif
                              </td>
                              <td data-label="Pago en cuotas">
                                  @if ($valor['PAGO_CUOTA3'] > 0)
                                  C3 S/{{$valor['PAGO_CUOTA3']}}
                                  @else
                                      
                                  @endif
                              </td>
                              <td data-label="Pago en cuotas">

                                  @if ($valor['PAGO_CUOTA4'] > 0)
                                  C4 S/{{$valor['PAGO_CUOTA4']}}
                                  @else
                                      
                                  @endif

                              </td>  
                          <td data-label="Horario">
                            @if ($valor['TURNO'] == null)
                            Sin info
                            @else
                            @switch($valor['TURNO'])
                            @case('M')
                            Lunes a Sábado 08:00-15:00
                            @break
                            @case('T')
                            Lunes a Sábado 16:00-20:00
                            @endswitch
                            @endif
                          </td>
                          <td data-label="Estado">
                            @if ($valor['VACANTE_SESSION_DESCRIPCION'] == null)
                            Sin info
                            @else
                            {{$valor['VACANTE_SESSION_DESCRIPCION']}}
                            @endif
                          </td>
                        </tr>

                        @endif
                        @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </dd>
          </div>
        </div>
        @endforeach

      </div>

    </div>

  </div>
</div>
<br><br><br>

<!--*************************************-->

<div class="row col-xs-12 center-xs container-base">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

    <div class="js-tabs frequent_questions__tabs preparation_tabs" id="preparation_tabs">

      <ul class="js-tabs__header">
        <li><a href="javascript:void();" class="js-tabs__title"><i class="fa fa-book"></i> Cursos</a></li>
        <li><a href="javascript:void();" class="js-tabs__title"><i class="fa fa-lightbulb-o"></i> Ciclos</a></li>
        <li><a href="javascript:void();" class="js-tabs__title"><i class="fa fa-pencil-square"></i> Beneficios</a></li>
      </ul>

      <div class="js-tabs__content js-badger-accordion_1" id="cursos">
        <div class="row col-xs-12 center-xs">
          <div class="row col-xs-12 col-sm-10 start-sm preparation__courses">
            <div class="col-xs-12 col-sm-6 preparation__courses-list">
              <h1><strong>Conocimientos</strong></h1><br>
              <ul class="preparation__list-ul preparation__courses-list-ul ul-li-squared">
                <li>Aritmética</li>
                <li>Álgebra</li>
                <li>Geometría</li>
                <li>Trigonometría</li>
                <li>Física</li>
                <li>Química</li>
                <li>Ciencias Biológicas</li>
                <li>Filosofía y Lógica</li>
                <li>Lengua</li>
                <li>Literatura</li>
                <li>Historia del Perú</li>
                <li>Historia Universal</li>
                <li>Geografía</li>
                <li>Psicología</li>
                <li>Economía</li>
                <li>Cívica</li>
              </ul>
              <br><br>
              <h1><strong>Habilidades</strong></h1><br>
              <ul class="preparation__list-ul ul-li-squared">
                <li>Habilidad Lógica Matemática (HM)</li>
                <li>Habilidad Verbal (HV)</li>
              </ul>
            </div>
            <div class="col-sm-6 xs-hide">
              <img src="/static/images/academia/preparacion/sm-1-cursos.png" class="preparation__item-image" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="js-tabs__content js-badger-accordion_2" id="ciclos">
        <div class="row col-xs-12 center-xs">
          <div class="row col-xs-12 col-sm-10 start-sm preparation__cicles">
            <div class="col-xs-12 col-sm-6 preparation__cicles__section preparation__cicles__section--double">
              <p>
                <strong class="orange">Anual:</strong> Dirigido a estudiantes que no cuenten con preparación
                preuniversitaria previa y que desean postular a San Marcos en el examen de admisión de marzo.
              </p>

              <p>
                <strong class="orange">Semestral:</strong> Dirigido a estudiantes que cuenten con preparación
                preuniversitaria previa y postulen a San Marcos.
              </p>

              <p>
                <strong class="orange">Repaso Semestral:</strong> Se divide en dos bloques, el primer bloque esta compuesto por 30 % teórico y 70 % práctico; el segundo bloque es 100% práctico. Está dirigido a los alumnos que se han preparado anteriormente.
              </p>

              <p>
                <strong class="orange">Intensivo:</strong> Dirigido a estudiantes que no cuenten con preparación
                preuniversitaria previa y postulen a San Marcos en el examen de admisión de marzo.
              </p>

            </div>
            <div class="col-xs-12 col-sm-6 preparation__cicles__section preparation__cicles__section--double">

              <p>
                <strong class="orange">Repaso:</strong> Dirigido a estudiantes que acaban de culminar un ciclo completo
                de preparación preuniversitaria y postulen a San Marcos en el examen de admisión de marzo.
              </p>

              <p>
                <strong class="orange">Reforzamiento:</strong> Dirigido a estudiantes que acaban de culminar un ciclo
                completo de preparación preuniversitaria y postulen a San Marcos en el examen de admisión de septiembre.
              </p>

              <p>
                <strong class="orange">Verano:</strong> Dirigido a estudiantes que desean iniciar una preparación
                preuniversitaria con el objetivo de postular a San Marcos.
              </p>

              <p>
                <strong class="orange">Semestral Escolarizado:</strong> El Semestral Escolarizado es 50% teórico y 50%
                práctico, y es para los alumnos que se encuentran en el colegio y/o que no han tenido preparación
                anteriormente.
              </p>

              <!--
                  <p>
                    <strong class="orange">¿Cuál es la diferencia entre el Semestral Avanzado y el Semestral Escolarizado?:</strong> El Semestral Avanzado es 30% teórico y 70% práctico; está dirigido a los alumnos que han tenido preparación anteriormente. El Semestral Escolarizado es 50% teórico y 50% práctico, y es para los alumnos que se encuentran en el colegio y/o que no han tenido preparación anteriormente.
                  </p>
-->
            </div>
          </div>
        </div>
      </div>

      <div class="js-tabs__content js-badger-accordion_3" id="beneficios">
        <div class="row col-xs-12 center-xs">
          <div class="row col-xs-12 col-sm-10 start-sm preparation__courses">
            <div class="col-xs-12 col-sm-6 preparation__courses-list">
              <ul class="preparation__list-ul ul-li-squared">
                <li>Asesorías, simulacros tipo examen de admisión y seminarios dominicales gratuitos</li>
                <li>La mejor plana docente</li>
                <li>Becas mensuales para nuestros alumnos más destacados*</li>
                <li>Intranet (asistencias y notas)</li>
                <li>Orientación vocacional y psicopedagógica</li>
                <li>Maratones dominicales de ciencias y letras</li>
                <li>Grupos de estudio por las tardes (gratuitos)</li>
                <li>Libros totalmente gratis</li>
                <li>Control tutorial</li>
                <li>Exigencia y disciplina</li>
                <li>Con 40 años de experiencia </li>
                <li>Más horas de clases por menos costo</li>
              </ul>
              <br>
              <strong>*Beca completa, media beca (según su rendimiento).</strong>
            </div>
            <div class="col-sm-6 xs-hide">
              <img src="/static/images/academia/preparacion/sm-3-beneficios.png" class="preparation__item-image" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>



<div class="row col-xs-12 center-xs container-base preparation__section">
  <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
    <h1 class="preparation__title preparation__title--and">También preparamos a nuestros alumnos para ingresar a estas
      universidades:</h1>
  </div>
</div>
<div class="row col-xs-12 center-xs beginning beginning-minus container-base">
  <div class="row col-xs-12 col-sm-3 col-md-3 start-xs start-sm start-md beginning-container beginning-minus">


    <div class="col-xs beginning--item beginning--item--activecolors">
      <a href="/academia/preparacion-uni" class="item-a">
        <div class="item-a-container">
          <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
          <div class="item-a-preparation"><br></div>
          <span class="item-a-university">UNI</span>
        </div>
      </a>
    </div>

    <div class="beginning-breakline"></div>

    <div class="col-xs beginning--item beginning--item--activecolors">
      <a href="/academia/preparacion-pucp" class="item-a">
        <div class="item-a-container">
          <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
          <div class="item-a-preparation"><br></div>
          <span class="item-a-university">CATÓLICA</span>
        </div>
      </a>
    </div>

  </div>
</div>