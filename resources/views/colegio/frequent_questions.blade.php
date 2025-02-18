{{! $breadcrumbs = Breadcrumbs::render('colegio-frequentquestions') }}
@extends('colegio.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pregunta-frecuente.png') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pregunta-frecuente-movil.png') }}" alt="">
    </div>
  </div>

<div class="row col-xs-12 center-xs container-base frequentquestions">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">


      <div class="js-tabs frequent_questions__tabs" id="tabs_frequent_questions">

          <ul class="js-tabs__header">
            <li><a href="#" class="js-tabs__title">Propuesta educativa</a></li>
            <li><a href="#" class="js-tabs__title">Matrícula</a></li>
            <!-- <li><a href="#" class="js-tabs__title">Otros</a></li> -->
          </ul>

          <!-- PROPUESTA EDUCATIVA -->
          <div class="js-tabs__content js-badger-accordion_1">

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Cuál es nuestra propuesta educativa?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Nuestra propuesta ha sido desarrollada por una plana docente especializada en diversas materias, que a su vez controla el proceso de aprendizaje mediante evaluaciones permanentes. Asimismo, cuenta con un programa de valores que complementa la formación integral del alumno, gracias al apoyo de un equipo de tutoras. Conoce nuestra propuesta educativa <a href="https://www.trilce.edu.pe/propuesta-educativa/" target="_blank">aquí</a>                    
                      </p>
                      <!--@include('colegio.partials.ads')--> <!-- Codigo para listar ese partials.ads-->
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Evalúan permanentemente a los alumnos?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Buscamos que nuestros alumnos estén familiarizados con un sistema de evaluación integral. Los evaluamos mediante tareas domiciliarias, prácticas por curso, evaluación de participación, evaluación final. Solamente para secundaria contamos con simulacros tipo admisión.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12" style="display: none">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Por qué en Trilce se clasifica a los alumnos?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          <p>Las reagrupaciones se realizan al inicio del año. Tienen como objetivo agrupar a los alumnos con mayor conocimiento y, principalmente, motivar a los estudiantes a elevar su nivel académico.</p><br>
                          <p>Se clasifica a los alumnos en el primer salón, segundo salón y salones promedio. Por cada año de estudio, existen dos salones conformados por los alumnos con el mejor rendimiento académico (primer y segundo salón). En los demás salones (salones promedio), se agrupa a los alumnos con diversos rendimientos académicos, para que de esta manera tengan el mismo nivel en promedio.</p><br>
                          <p>Cabe resaltar que la apertura de un primer o segundo salón depende de la cantidad de salones por año, así que es posible implementar solamente salones promedio.</p>
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Cómo se desarrolla el curso de inglés?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Desarrollamos y reforzamos las competencias comunicativas propias del idioma inglés mediante un intenso y exigente plan académico.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿En Trilce se enseña el curso de religión?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Solamente se dicta el curso de religión en primaria (una hora a la semana). Trilce es un colegio laico que respeta la diversidad de creencias; por eso, trabajamos un programa de valores que contempla la formación ética del individuo. Este programa se desarrolla durante todo el año académico; se basa en las vivencias de los alumnos y la expresión de su sentir mediante actividades que promueven la sensibilidad y la toma de conciencia frente al entorno y la autonomía del adolescente. Aunque se respetan las creencias, también se promueve la fe; por ello, los sacramentos como la primera comunión y confirmación son coordinados con representantes de la Iglesia. En los meses de mayo, agosto y octubre, se organizan actividades en honor a la Virgen María, Santa Rosa y el Señor de los Milagros, respectivamente.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  Mi hijo(a) no es bueno(a) en matemáticas. ¿Se adaptará al nivel académico de Trilce?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Sí. En Trilce contribuimos al desarrollo de las habilidades de los alumnos en diferentes áreas y logramos que destaquen según sus capacidades. Con respecto a los cursos de matemáticas, nosotros contamos con un servicio de asesorías especializadas en los cursos de mayor dificultad. Asimismo, a través del Departamento Psicopedagógico, brindamos al padre de familia las pautas que estimulen y motiven a su hijo a adaptarse al sistema.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Sobre las asesorías
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Las asesorías son gratuitas y se dictan para los alumnos de primaria y secundaria. Son un beneficio que le permite al alumno aclarar sus dudas sobre los temas desarrollados en clase a través de una explicación detallada. Estas asesorías se brindan fuera del horario regular.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Se entregan exámenes bimestrales?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Los exámenes bimestrales son materiales clasificados que requieren mucha privacidad. Sin embargo, los alumnos reciben mediante su correo electrónico una copia de sus respuestas.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Existen normas sobre el corte de cabello de los alumnos?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Sí. Tenemos límites por temas de higiene y presentación. Estas reglas se encuentran especificadas en las Normas de Convivencia (Reglamento Interno), aprobadas por el Ministerio de Educación. 
                          <a href="https://www.trilce.edu.pe/l/reglamento-interno-colegios">Ver aquí</a>
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Existe una frecuente comunicación entre padres y docentes?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Sí se realiza una comunicación frecuente entre padres y docentes; los padres de familia pueden solicitar una reunión a través del correo institucional del alumno.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Los alumnos usan uniformes?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Nuestros alumnos no utilizan uniforme escolar (1), ya que no deseamos generarle más gastos al padre de familia. Además, es importante que el alumno se sienta más cómodo para estudiar. El Ministerio de Educación dispone que el uso de uniforme no es obligatorio. Sin embargo, el alumno debe seguir las indicaciones sobre la vestimenta que puede utilizar, especificadas en las Normas de Convivencia (Reglamento Interno). 
                          <a href="https://www.trilce.edu.pe/l/reglamento-interno-colegios" target="_blank">Ver aquí</a>
                          <br>
                          <br>
                          <small>(1) No aplica a todas las sedes.</small>
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                      <div class="question-title__signe"></div>
                          Calidad de la enseñanza de nuestros docentes
                      </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                          <p class="question-answer">
                              Todos nuestros docentes poseen un excelente nivel académico y tienen la experiencia necesaria para enseñar adecuadamente; además, son evaluados constantemente durante el transcurso del año para garantizar su preparación.
                          </p>
                      </div>
                  </dd>
              </div>
          </div>

          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                      <div class="question-title__signe"></div>
                       ¿Qué grado de credibilidad tienen sus servicios?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                          <p class="question-answer">
                          Los resultados hablan por sí solos: primeros puestos en universidades prestigiosas como UNI, San Marcos y PUCP. Sobre todo, miles de ingresantes (que después se convierten en excelentes universitarios) en diversas universidades del país.
                          </p>
                      </div>
                  </dd>
              </div>
          </div>

          </div>

          <!-- MATRICULA -->
          <div class="js-tabs__content js-badger-accordion_2">

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Traslados internos 
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Si el padre de familia desea trasladar a su hijo a otra sede de Trilce, debe realizar el siguiente trámite:
                          <br />
                          <br />
                          <b>Requisitos:</b>
                          <br>
                          - Libreta de notas<br />
                          - Foto nítida del DNI del alumno, ambos lados<br />
                          - Comprobante del último pago<br />
                          <br />
                          <ul>
                              <li>Enviar la libreta de notas al colegio donde desea realizar el traslado. </li>
                              <li>El colegio realizará los trámites correspondientes (consulta de notas, conducta, etc.)</li>
                              <li>Cuando el alumno sea aceptado en el colegio, cancelará la matrícula y solicitará la constancia de vacante.</li>
                              <li>La constancia de vacante debe ser entregada al local de procedencia, para que realicen el trámite correspondiente de documentos del alumno. Es decir, el local de procedencia se encargará de enviar los documentos al colegio actual.</li>
                          </ul>
                      </p>
                    </div>
                </dd>
              </div>
          </div>
          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Trámite para solicitar constancia de Tercio Superior
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Este dato figura en la parte inferior de la libreta de notas. Si el padre de familia desea solicitar una constancia de Tercio Superior, deberá enviar una solicitud a través de un correo electrónico al área de Caja de la sede al cual corresponde. Puede llamar al 6198100 para más información.  
                      </p>
                    </div>
                </dd>
              </div>
          </div>
          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Código modular del colegio
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Consultar con la sede indicada, para que se coordine con el área de Actas.
                      </p>
                    </div>
                </dd>
              </div>
          </div>
          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué edad deben tener los niños que se matriculen en 1<sup>er</sup> grado de primaria?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Los niños que van a matricularse en 1<sup>er</sup> grado de primaria deben cumplir 6 años, como máximo, el 31 de marzo.
                      </p>
                    </div>
                </dd>
              </div>
          </div>
          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En qué consiste la prueba de conocimientos para los alumnos postulantes?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer"> 
                          <p>La prueba de conocimientos nos sirve para determinar el nivel académico con el que el alumno está ingresando al colegio. No es clasificatoria.</p>
                          <br>
                          <p>De 2<sup>o</sup> a 6<sup>o</sup> grado de primaria: 10 preguntas.</p>
                          <p>De 1<sup>er</sup> a 5<sup>o</sup> año de secundaria: 15 preguntas.</p>
                          <br>
                          <p>La duración es de 1 hora.</p>
                      </p>
                    </div>
                </dd>
              </div>
          </div>
          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cómo puedo finalizar la matrícula online?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Le compartimos una guía del paso a paso para culminar la matrícula online 
                          <a href="https://www.trilce.edu.pe/l/manual-matricula-online-nuevos-2023" target="_blank">clic aquí.</a>
                      </p>
                    </div>
                </dd>
              </div>
          </div>
          <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Si un exalumno desea regresar al colegio, ¿tendrá que ser evaluado nuevamente?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                          Si ya pasó más de un año académico, el alumno tendrá que pasar por el proceso de admisión nuevamente.
                      </p>
                    </div>
                </dd>
              </div>
          </div>

          </div>

          

          <!-- OTROS -->
          <!-- <div class="js-tabs__content js-badger-accordion_3">
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿El colegio cuenta con movilidad propia?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      No cuenta con movilidad propia.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Se aceptan niños con NEE (Necesidades Educativas Especiales) en el colegio?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí aceptamos a niños con NEE, ya que somos un colegio inclusivo. El alumno deberá rendir las evaluaciones de admisión para que podamos conocer el nivel académico en el que se encuentra.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Qué ocurre si a mi hijo le cuesta adaptarse?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Si el alumno tiene problemas para adaptarse al colegio, cuentan con el apoyo del Departamento de Psicología y, en forma constante, con el de su tutora.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuentan con horarios de refrigerio (recreos)?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí, existen dos recesos para refrigerios y recreación tanto en primaria como en secundaria.
                    </p>
                  </div>
                </dd>
              </div>
            </div>



          </div> -->

      </div>

	</div>


  </div>
</div>

@include('colegio.partials.ads')

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'frequent_questions';
  @parent
@endsection
