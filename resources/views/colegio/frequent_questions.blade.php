{{!$breadcrumbs = Breadcrumbs::render('colegio-frequentquestions') }}
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
      </ul>

      <!-- PROPUESTA EDUCATIVA -->
      <div class="js-tabs__content js-badger-accordion_1">
      <div class="process__accordions">
        <ul class="accordions__list">

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title"> ¿Cuál es nuestra propuesta educativa?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Nuestra propuesta ha sido desarrollada por una plana docente especializada
            en diversas materias, que a su vez controla el proceso de aprendizaje mediante evaluaciones
            permanentes. Asimismo, cuenta con un programa de valores que complementa la formación integral del
            alumno, gracias al apoyo de un equipo de tutoras. Conoce nuestra propuesta educativa aquí</span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title"> ¿Evalúan permanentemente a los alumnos?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Buscamos que nuestros alumnos estén familiarizados con un sistema de
            evaluación integral. Los evaluamos mediante tareas domiciliarias, prácticas por curso, evaluación de
            participación, evaluación final. Solamente para secundaria contamos con simulacros tipo admisión.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title"> ¿Cómo se desarrolla el curso de inglés?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Desarrollamos y reforzamos las competencias comunicativas propias del
            idioma inglés mediante un intenso y exigente plan académico.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿En Trilce se enseña el curso de religión?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Solamente se dicta el curso de religión en primaria (una hora a la semana).
            Trilce es un colegio laico que respeta la diversidad de creencias; por eso, trabajamos un programa
            de valores que contempla la formación ética del individuo. Este programa se desarrolla durante todo
            el año académico; se basa en las vivencias de los alumnos y la expresión de su sentir mediante
            actividades que promueven la sensibilidad y la toma de conciencia frente al entorno y la autonomía
            del adolescente. Aunque se respetan las creencias, también se promueve la fe; por ello, los
            sacramentos como la primera comunión y confirmación son coordinados con representantes de la
            Iglesia. En los meses de mayo, agosto y octubre, se organizan actividades en honor a la Virgen
            María, Santa Rosa y el Señor de los Milagros, respectivamente.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title"> Mi hijo(a) no es bueno(a) en matemáticas. ¿Se adaptará al nivel
            académico de Trilce?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Sí. En Trilce contribuimos al desarrollo de las habilidades de los alumnos
            en diferentes áreas y logramos que destaquen según sus capacidades. Con respecto a los cursos de
            matemáticas, nosotros contamos con un servicio de asesorías especializadas en los cursos de mayor
            dificultad. Asimismo, a través del Departamento Psicopedagógico, brindamos al padre de familia las
            pautas que estimulen y motiven a su hijo a adaptarse al sistema.</span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">Sobre las asesorías</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Las asesorías son gratuitas y se dictan para los alumnos de primaria y
            secundaria. Son un beneficio que le permite al alumno aclarar sus dudas sobre los temas
            desarrollados en clase a través de una explicación detallada. Estas asesorías se brindan fuera del
            horario regular.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Se entregan exámenes bimestrales?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Los exámenes bimestrales son materiales clasificados que requieren mucha
            privacidad. Sin embargo, los alumnos reciben mediante su correo electrónico una copia de sus
            respuestas.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Existen normas sobre el corte de cabello de los alumnos?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Sí. Tenemos límites por temas de higiene y presentación. Estas reglas se
            encuentran especificadas en las Normas de Convivencia (Reglamento Interno), aprobadas por el
            Ministerio de Educación. Ver aquí

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Existe una frecuente comunicación entre padres y docentes?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Sí se realiza una comunicación frecuente entre padres y docentes; los
            padres de familia pueden solicitar una reunión a través del correo institucional del alumno.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Los alumnos usan uniformes?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Nuestros alumnos no utilizan uniforme escolar (1), ya que no deseamos
            generarle más gastos al padre de familia. Además, es importante que el alumno se sienta más cómodo
            para estudiar. El Ministerio de Educación dispone que el uso de uniforme no es obligatorio. Sin
            embargo, el alumno debe seguir las indicaciones sobre la vestimenta que puede utilizar,
            especificadas en las Normas de Convivencia (Reglamento Interno). Ver aquí

            (1) No aplica a todas las sedes.</span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title"> Calidad de la enseñanza de nuestros docentes</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Todos nuestros docentes poseen un excelente nivel académico y tienen la
            experiencia necesaria para enseñar adecuadamente; además, son evaluados constantemente durante el
            transcurso del año para garantizar su preparación.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Qué grado de credibilidad tienen sus servicios?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Los resultados hablan por sí solos: primeros puestos en universidades
            prestigiosas como UNI, San Marcos y PUCP. Sobre todo, miles de ingresantes (que después se
            convierten en excelentes universitarios) en diversas universidades del país.
            </span>
          </p>
          </div>
        </li>

        </ul>
      </div>
      </div>

      <!-- MATRICULA -->
      <div class="js-tabs__content js-badger-accordion_2">
      <div class="process__accordions">
        <ul class="accordions__list">

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">Traslados internos</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">
            Si el padre de familia desea trasladar a su hijo a otra sede de Trilce, debe realizar el siguiente
            trámite: <br><br>

            <strong>Requisitos:</strong> <br>
            - Libreta de notas <br>
            - Foto nítida del DNI del alumno, ambos lados <br>
            - Comprobante del último pago <br>
            <ul style="list-style:square">
              <li>Enviar la libreta de notas al colegio donde desea realizar el traslado.</li>
              <li>El colegio realizará los trámites correspondientes (consulta de notas, conducta, etc.)</li>
              <li>Cuando el alumno sea aceptado en el colegio, cancelará la matrícula y solicitará la constancia
              de vacante. </li>
              <li>La constancia de vacante debe ser entregada al local de procedencia, para que realicen el
              trámite correspondiente de documentos del alumno. Es decir, el local de procedencia se encargará
              de enviar los documentos al colegio actual.</li>
            </ul>
            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">Trámite para solicitar constancia de Tercio Superior</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Este dato figura en la parte inferior de la libreta de notas. Si el padre
            de familia desea solicitar una constancia de Tercio Superior, deberá enviar una solicitud a través
            de un correo electrónico al área de Caja de la sede al cual corresponde. Puede llamar al 6198100
            para más información.
            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">Código modular del colegio</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Consultar con la sede indicada, para que se coordine con el área de Actas.
            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Qué edad deben tener los niños que se matriculen en 1er grado de
            primaria?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Los niños que van a matricularse en 1er grado de primaria deben cumplir 6
            años, como máximo, el 31 de marzo.
            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿En qué consiste la prueba de conocimientos para los alumnos
            postulantes?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">La prueba de conocimientos nos sirve para determinar el nivel académico con
            el que el alumno está ingresando al colegio. No es clasificatoria. <br><br>


            <p>De 2<sup>o</sup> a 6<sup>o</sup> grado de primaria: 10 preguntas.</p>

            <p>De 1<sup>er</sup> a 5<sup>o</sup> año de secundaria: 15 preguntas.</p>
            </span> <br>

            La duración es de 1 hora.
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">¿Cómo puedo finalizar la matrícula online?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Le compartimos una guía del paso a paso para culminar la matrícula online
            clic aquí.

            </span>
          </p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="true">
          <span class="accordions__title">Si un exalumno desea regresar al colegio, ¿tendrá que ser evaluado
            nuevamente?</span>
          <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
          <p class="grid__career">
            <span class="text_reg_tab">Si ya pasó más de un año académico, el alumno tendrá que pasar por el
            proceso de admisión nuevamente.



            </span>
          </p>
          </div>
        </li>
        </ul>
      </div>
      </div>
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