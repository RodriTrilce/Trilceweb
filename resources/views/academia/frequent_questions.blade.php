{{! $breadcrumbs = Breadcrumbs::render('academia-frequentquestions') }}
@extends('academia.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

<div class="header-double-top">
  <div class="row">
    <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
    <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-frequent-questions solutions-ban"></div>
    <div class="header-double-border"></div>
    <div class="header-double-title">
      <h1>Preguntas frecuentes</h1>
    </div>
  </div>
</div>

<div class="row col-xs-12 center-xs container-base frequentquestions">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">

      <div class="js-tabs frequent_questions__tabs" id="tabs_frequent_questions">

          <ul class="js-tabs__header">
              <li><a href="#" class="js-tabs__title">Propuesta Académica</a></li>
              <li><a href="#" class="js-tabs__title">Inscripción</a></li>
              <li><a href="#" class="js-tabs__title">Simulacros</a></li>
              <li><a href="#" class="js-tabs__title">Otros</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1">
              <div class="frequentquestions-question row col-xs-12" style="display: none">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuentan con asesorías por las tardes?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Así es, contamos con asesorías gratuitas (generalmente, solo de los cursos de ciencias), cuyo horario es programado por cada local.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Para qué universidades ofrecen preparación?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Academias Trilce ofrece preparación para <a href="/academia/preparacion-pucp" title="Preparación Católica" alt="Preparación Católica">Católica</a>, <a href="/academia/preparacion-uni" title="Preparación UNI" alt="Preparación UNI">UNI</a> y <a href="/academia/preparacion-san-marcos" title="Preparación San Marcos" alt="Preparación San Marcos">San Marcos</a>. Si deseas postular a otra universidad, te recomendamos la preparación San Marcos.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuántos cursos dictan?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          La cantidad de cursos depende de la preparación que se elija; puedes consultar esta información aquí:
							<ul>
							<li>UNI: <a href="https://www.trilce.edu.pe/l/cursos-ciclos-uni" target="_blank">https://www.trilce.edu.pe/l/cursos-ciclos-uni</a></li>
							<li>San Marcos: <a href="https://www.trilce.edu.pe/l/cursos-ciclos-san-marcos" target="_blank">https://www.trilce.edu.pe/l/cursos-ciclos-san-marcos</a></li>
							<li>Católica: <a href="https://www.trilce.edu.pe/l/cursos-ciclos-catolica" target="_blank">https://www.trilce.edu.pe/l/cursos-ciclos-catolica</a></li>
							<li>Escolar: <a href="https://www.trilce.edu.pe/l/cursos-ciclo-escolar" target="_blank">https://www.trilce.edu.pe/l/cursos-ciclo-escolar</a></li>
							</ul>
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12" style="display: none">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuentan con biblioteca?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Sí contamos con biblioteca en nuestra sede de Santa Beatriz. Todos los alumnos de Academias Trilce pueden acceder a ella, solo tienen que acercarse portando su carné para el ingreso, que es hasta las 5 p. m. La biblioteca atiende hasta las 9 p. m.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Las academias se especializan en la preparación para ciertas carreras, como Administración e Ingeniería, etc.?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          La preparación se realiza para el examen de admisión de la universidad, no para la carrera.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
          </div>
          <div class="js-tabs__content js-badger-accordion_2">

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuándo inicia un nuevo ciclo académico?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Las fechas de nuestros nuevos inicios se pueden consultar <a href="/academia#inicios" alt="Fechas de preparación UNI, Católica y San Marcos" title="Fechas de preparación UNI, Católica y San Marcos">aquí</a> y a través de nuestras redes sociales.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Debo realizar un pago adicional al momento de la inscripción?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        No hay pago de inscripción ni cuota de ingreso.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuál es el medio de pago?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        <a href="https://www.trilce.edu.pe/academia/guia-de-pagos" target="_blank">Ver guía de pagos</a>
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Se puede realizar un cambio de ciclo si este aún no ha culminado?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El cambio de ciclo debe ser consultado con la Coordinación General.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>

          </div>
          <div class="js-tabs__content js-badger-accordion_3">
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Hay simulacros? ¿Tienen algún costo?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Sí, hay simulacros en la academia; sus fechas se anuncian previamente. Son totalmente gratuitos.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12" style="display: none">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué pasa si olvidé el código de inscripción del simulacro?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Te recomendamos comunicarte con tu sede.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En dónde encuentro los resultados del simulacro?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Te recomendamos ingresar <a href="https://www.trilce.edu.pe/academia/simulacros" target="_blank">aquí</a>.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En dónde encuentro los solucionarios de los exámenes de admisión de la UNI, San Marcos y Católica?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Te recomendamos ingresar <a href="https://www.trilce.edu.pe/academia/solucionarios" title="Solucionarios UNI, Católica y San Marcos" alt="Solucionarios UNI, Católica y San Marcos">aquí</a>.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
          </div>
          <div class="js-tabs__content js-badger-accordion_4">
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Hay un break durante el día?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, hay dos breaks de 10 minutos cada uno.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuál es el trámite para obtener la constancia de estudios?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Enviar un correo al tutor y realizar el pago de S/ 10 por derecho de la constancia.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cómo justificar una falta o tardanza?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El apoderado deberá enviar un correo al tutor encargado del aula.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
			
			<div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cómo se dictan las clases?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                      ∂ Virtual: Se trabajará mediante la plataforma Google Classroom y videoconferencia Meet. <br>
                      ∂ Presencial: Sede Los Olivos, Santa Beatriz o Villa El Salvador.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
			<div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cómo ingresar a mis clases virtuales?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Tutorial para ingresar a tus clases virtuales por Google Meet. <a href="https://www.youtube.com/watch?v=w7RmICpaIN4" target="_blank">¡Clic aquí!</a><br>
						Tutorial de ingreso al Google Classroom. <a href="https://www.youtube.com/watch?v=58QyyEGbaPQ" target="_blank">¡Clic aquí!</a>
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
			<div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cómo ingresar a mi correo Trilce?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Ingresar a <a href="https://www.gmail.com/" target="_blank">www.gmail.com</a>, escribir correo y contraseña.<br>
						Importante: solamente deberás ingresar a tus clases virtuales con tu correo institucional.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
			<div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Dónde me llegarán los links de mis clases?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El primer día, el tutor los enviará al correo del estudiante.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
			<div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Dónde encuentro el material de mis clases?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El material lo puedes encontrar en la carpeta de Tutoría.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
			<div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Dónde encuentro mi horario de clases?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El primer día, el tutor te facilitará el horario y también lo encontrarás en la carpeta de Tutoría en el Classroom.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>

          </div>

      </div>

  </div>
</div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  page = 'frequent_questions';
  @parent
@endsection
