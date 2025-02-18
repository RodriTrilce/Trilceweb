{{! $breadcrumbs = Breadcrumbs::render('colegio-educationalproposal') }}
@extends('colegio.layouts.template')
@section('title', 'Propuesta educativa')
@section('content')

 <head>
   <meta http-equiv="refresh"  content="0; url=https://www.trilce.edu.pe/propuesta-educativa/">
   <style>
         header,.admission-ads, .card2, .footer-bottom, footer, .social-ads{
           display: none !important
         }
         body {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column
        }
         .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #FF5E34 !important;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
       
   </style>
</head>
<body>
    <div class="loader"></div>
</body>
<!-- 
  @if (session('contact'))
    <div id="modal-1" style="display:none;">
      <div class="modal-auto">
        <div class="row col-xs-12 center-xs modal-contact">
            <div class="col-xs-12">
              <h1 class="finish-title">{{ucwords(session('name'))}}, gracias por escribirnos <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por contactarnos"></h1>
            </div>
            <div class="col-xs-12"> 
              <p class="finish-text">Nos pondremos en contacto con usted en la brevedad.</p>
            </div>
        </div>
      </div>
    </div>
  @endif -->

<!--   <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-propuesta-educativa-2021.png') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-propuesta-educativa-movil-2021.png') }}" alt="">
    </div>
  </div> -->

<!--   <div class="row center-xs center-sm container-base educationalproposal-container">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="js-tabs" id="tabs_educational_propuse">

        <div class="col-xs-12 acordition-title">
          <div class="col-xs-10 start-xs">
            Propuesta educativa
          </div>
          <div class="col-xs end-xs">
            <i class="fa fa-minus-square" id="tabs_educational_propuse_icon"></i>
          </div>
        </div>

        <ul class="js-tabs__header">
          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_elevado_nivel_academico.svg" alt=""></div>
              <div>Elevado nivel académico</div>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_mejor_plana_docencia.svg" alt=""></div>
              <div>Excelente plana docente</div>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_tutoria_personalizada.svg" alt=""></div>
              <div>Sistema de tutoría</div>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_desarrollo_personal.svg" alt=""></div>
              <div>Desarrollo personal</div>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_sistema_5.svg" alt=""></div>
              <div>Sistema 5.° Año</div>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_innovacion_tecnologica.svg" alt=""></div>
              <div>Innovación y tecnología</div>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="js-tabs__title">
              <div><img src="/static/images/colegio/old-educational-propuse/p_resultados_comprobados.svg" alt=""></div>
              <div>Resultados comprobados</div>
            </a>
          </li>
        </ul>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-generic-title">
            <h2><span class="number">1 </span>Elevado nivel académico</h2>
          </div>

          <div class="row col-xs-12">

            <div class="col-sm-5 xs-hide center-xs buttom-xs">
              <img src="{{ url('/static/images/colegio/propuesta-feb/1-elevado-nivel.png') }}" alt="">
            </div>

            <div class="row col-xs-12 col-sm middle-xs">
              <ul class="ep-generic-list">
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Sistema académico del más alto nivel en el país.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    40 años de experiencia potenciando el nivel académico y desarrollo personal de nuestros alumnos.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Excelente nivel académico en matemáticas, ciencias y letras.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Profesores especializados por curso.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Evaluaciones permanentes.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Asesorías
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Libros digitales gratuitos de todos los cursos y elaborados por los docentes más experimentados de la institución.
                </li>
              </ul>
            </div>

          </div>
        </div>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-generic-title">
            <h2><span class="number">2 </span>Excelente plana docente</h2>
          </div>

          <div class="row col-xs-12">

            <div class="col-sm-5 xs-hide center-xs buttom-xs">
              <img src="{{ url('/static/images/colegio/propuesta-feb/2-plana.png') }}" alt="">
            </div>

            <div class="row col-xs-12 col-sm middle-xs">
              <ul class="ep-generic-list">
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Pertenecientes a las universidades más prestigiosas.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Profesores especializados y del más alto nivel.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Permanentemente capacitados y evaluados.
                </li>
                <li>
                    <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                    Comprometidos con los valores de la institución.
                </li>
              </ul>
            </div>

          </div>
        </div>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-generic-title">
            <h2><span class="number">3 </span>Sistema de tutoría</h2>
          </div>

          <div class="row col-xs-12">

            <div class="col-sm-5 xs-hide center-xs buttom-xs">
              <img src="{{ url('/static/images/colegio/propuesta-feb/3-tuto.png') }}" alt="">
            </div>

            <div class="row col-xs-12 col-sm middle-xs">
              <ul class="ep-generic-list">
                <li>
                  Nuestros alumnos cuentan con el acompañamiento permanente de nuestros tutores, quienes velan por su desenvolvimiento académico y actitudinal y contribuyen en su formación integral en comunicación permanente con la familia.
                </li>
              </ul>
            </div>

          </div>
        </div>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-generic-title">
            <h2><span class="number">4 </span>Desarrollo personal *</h2>
          </div>

          <div class="row col-xs-12 ep-large-container">
            <div class="col-xs-12 col-sm-4 ep-stepfour-left">
              <p class="ep-text">
                Incentivamos las destrezas artísticas e intelectuales de nuestros alumnos, así como su desarrollo físico, el aprecio por nuestra cultura y la formación en valores.
              </p>
              <div class="col-xs-12 xs-hide">
                <img src="{{ url('/static/images/colegio/propuesta-feb/4-desarrollo-p.png') }}" alt="">                
              </div>
              <br>
               <em><i style="font-weight: normal; font-family: Geogrotesque-Rg;">* Consultar por sedes</i></em>
            </div>

            <div class="row col-xs-12 col-sm ep-stepfour-right ep-stepfour-container">

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                  <svg viewBox="0 0 74.33 72.85" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.63,56.77c-1-.09-1.92-.2-2.84-.36a24.24,24.24,0,0,1-6.91-2A9.4,9.4,0,0,1,18,51.09a.44.44,0,0,1-.06-.44c1.17-2.89,2.32-5.77,3.49-8.65.07-.19.08-.29-.13-.4a9.77,9.77,0,0,1-5-6,12.65,12.65,0,0,1-.59-3.5,17.08,17.08,0,0,1,1.73-7.85,23.88,23.88,0,0,1,5.71-7.59,32,32,0,0,1,7.23-4.92c.21-.11.41-.22.63-.31s.15-.13,0-.24A6.33,6.33,0,0,1,34.4.32a6.23,6.23,0,0,1,7,5.14,6.2,6.2,0,0,1-1.9,5.72c-.15.15-.12.19,0,.27a33.3,33.3,0,0,1,6.1,3.77,25.19,25.19,0,0,1,7.14,8.42,17.79,17.79,0,0,1,2,6.39,12.93,12.93,0,0,1-.9,6.62,9.62,9.62,0,0,1-4.59,4.92c-.21.11-.25.2-.16.42,1.22,2.88,2.43,5.78,3.64,8.66a.43.43,0,0,1,0,.46A11.11,11.11,0,0,1,47.37,55a25.89,25.89,0,0,1-5.66,1.46c-.82.13-1.63.24-2.46.3a1.7,1.7,0,0,0-.22,0,.07.07,0,0,0,0,.1c5.8,5.8,12.56,1.06,17.3,1.66s13.57,4.94,16.85,6.5l.89.42c.3.14.3.15.07.36L71.3,68.51,67.54,72l-.83.77c-.13.13-.23.12-.37,0a22.75,22.75,0,0,0-2.42-1.69A17.26,17.26,0,0,0,58,69a33.44,33.44,0,0,0-4.47-.4c-1.72-.06-3.44,0-5.17,0-1,0-2.08,0-3.12,0a23.73,23.73,0,0,1-6.54-.9,13.71,13.71,0,0,1-3.18-1.41.54.54,0,0,0-.64,0,18.05,18.05,0,0,1-6.1,2.06,33.49,33.49,0,0,1-4.13.34c-2.15.07-4.3,0-6.44,0a25.72,25.72,0,0,0-4.72.5A14.89,14.89,0,0,0,7.18,72.3c-.48.39-.49.37-.9-.07q-2.8-3-5.59-5.93v0c-.31-.35-.27-.27,0-.55a23.91,23.91,0,0,1,5-3.7,35.21,35.21,0,0,1,6.82-3.31,17.21,17.21,0,0,1,4.2-1,8.28,8.28,0,0,1,5.2,1,6.51,6.51,0,0,0,3.53,1.05,6.48,6.48,0,0,0,2.65-.69A19.26,19.26,0,0,0,31.63,56.77Zm19-26.67c-.44-5.68-3.21-9.39-6.37-12.55S36,14,34.82,14C28,13.89,20.63,20.13,18.56,27.55c-1.45,5.19.21,11.71,4.65,11.51a.64.64,0,0,0,.49,0,27.46,27.46,0,0,1,8.87-1.73c1-.05,2.08-.05,3.12,0,1.51.06,3,.17,4.5.37a33.78,33.78,0,0,1,6.5,1.47.44.44,0,0,0,.32,0C48.51,38.66,51,35.78,50.59,30.1ZM21.73,65.58c7.44,3.24,12.07-2.18,13.21-3,3.74,4.59,10.89,5.65,16.22,4.07a14.31,14.31,0,0,1,15,3.88c.73-.69,3.66-4.22,3.41-4.33-2.12-.91-10-5.92-14.33-5.45S42.1,65.89,37.4,56.91c-.15-.12-10.28,7.69-14.52,4.94C18,58.69,12.56,59.21,3,65.7a31,31,0,0,0,4.2,4C8.13,69.14,14.28,62.34,21.73,65.58Zm28.86-16c-.05-.13-3.46-6.16-4.69-7.9a31.71,31.71,0,0,0-21.42-2c-.76,1.52-1.28,6.16-2,8C22.44,47.79,39.71,43.2,50.59,49.58Zm-27.87,1.9.23.13c.87.46,13.64,5.41,26.2-.44C45.17,48.31,32.34,45.21,22.72,51.48ZM35.06,2.12a4.2,4.2,0,1,0,.39,8.39,4.06,4.06,0,0,0,3.8-4.15A4.2,4.2,0,0,0,35.06,2.12Z"/>
                    <path d="m36 27.46l0.59 5.28s-3.1-1-3.1-1.6v-3.92l-2.49-0.22-1.13-0.62 3.77-0.21 0.18-6.13 1.76 3.16 0.31 2.62 3.89-0.36v2.48z" fill-rule="evenodd"/>
                    </svg>
                    <br>
                    Habilidades intelectuales</div>
                  <div class="col-xs-12 item-content">Competencias Intertrilce de ortografía, debate, ajedrez y matemática. Ferias del Libro y Expociencia.</div>
                </div>

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                    <svg viewBox="0 0 293.89 179.54" xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(-1 .68)" d="M294.89,110.46c-3.39-.56-5.85-1-8.31-1.39-2.62-.47-5.24-.95-7.85-1.47-9.84-1.95-11.61-1.29-6.14-11.6a7.41,7.41,0,0,0,.38-.92c1.94-4.89,1-6.7-4-8a31.89,31.89,0,0,0-12.9-.55c-8.49,1.3-8.44,1.34-6.79-7,1.56-7.85,1.62-8.39,3.28-17.15-38.5,17-94.24-12.53-94.59-14.39a38.61,38.61,0,0,1-.64-6.17c-1.35-7.41-6.53-30.5-9.16-42.57C130,17.88,85.66,44.13,33.2,28.08c-.16,0-.55.22-1.05.45,5.47,20.36,11,40.76,16.58,61.67C42.91,88.75,38,87.73,33,88.51c-10.6,1.63-11.48,3.23-6.92,12.76,2.87,6,2.61,6.65-3.73,7.93-6.61,1.34-13.24,2.55-21.33,4.09,5.55,1.91,9.59,3.4,13.7,4.67,2.27.7,2.19,1.56.64,3-3.05,2.78-6.06,5.6-10.19,9.42,10.41-1.93,19.33-3.6,28.25-5.24C44.75,123,47.3,119,44.08,108.26c0-.16-.11-.32-.16-.48-.89-3.25.43-4.72,3.53-3.49,4.58,1.82,9,3.66,12.22,8.09,31.3,51.42,71,28.36,71.56,28.22,1.73-.41,2.56.72,3.65,2.94,5.74,11.69,13.57,21.72,24.45,29.15,8.64,5.9,18,7.88,28,4.6,28.91-9.5,46.19-32.87,56.76-70.93.65-2.35,6.76-5.82,8.47-4.55,2.85,2.1.26,4.36-.43,6.52a4.64,4.64,0,0,1-.23.44c-2.57,5.68-1.51,9.66,4.24,11.69,11.08,3.9,22.82,4.81,34.57,6.28l-10.55-10C284.82,114,290.22,114,294.89,110.46Zm-195.49,29c-44.86-12.77-51-85.16-59-102.55C81.13,47.2,114,35.65,144.27,15c1.93,8.84,10.39,37.27,10.54,65,.1,19.14-6,39.13-19.74,52.51C127.38,140,109.88,142.47,99.4,139.48Zm116.79,6.71c-12.83,15.26-31.05,24-41.08,22.31s-25.48-6.95-37.63-31.42c30.32-23.62,24.17-72.7,23.11-77.88,25.85,13.68,61.92,22.49,83.67,14C237.54,117.22,229,130.93,216.19,146.19Z" fill-rule="evenodd"/>
                    <path transform="translate(-1 .68)" d="m142.73 76c-15.5 51.5-38 54.67-73.66 20.33 27.33 15.98 60.16 7.48 73.66-20.33z" fill="#010101" fill-rule="evenodd"/>
                    <path transform="translate(-1 .68)" d="m146.17 148.9c34-40.86 52.77-35.48 65.61 8.61-14.26-24.51-43.26-28.81-65.61-8.61z" fill="#010101" fill-rule="evenodd"/>
                    <path transform="translate(-1 .68)" d="m93.27 71a40.75 40.75 0 0 0 -26 6.19c1.8-24.92 26-19.31 26-6.19z" fill="#030303" fill-rule="evenodd"/>
                    <path transform="translate(-1 .68)" d="m113.12 66.14c-2.94-14 13.23-25.21 26.46-7.24-13.68-2.25-20.68 1.25-26.46 7.24z" fill="#030303" fill-rule="evenodd"/>
                    <path transform="translate(-1 .68)" d="m202.69 97.1a40.67 40.67 0 0 0 26 6c-13.06 18.04-29.42 4.73-26-6z" fill="#030303" fill-rule="evenodd"/>
                    <path transform="translate(-1 .68)" d="m182.74 92.65c-5.6 11.57-23.22 19.15-26.91-5.31 11.24 8.11 19.07 8.1 26.91 5.31z"/>
                    </svg>
                    <br>
                    Destrezas artísticas</div>
                  <div class="col-xs-12 item-content">Competencias Intertrilce de declamación y grafiti. Taller de Teatro.</div>
                </div>

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                    <svg viewBox="0 0 81.54 65.47" xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(0)" d="M81.54,6.8c-2.21,4.86-9.58,6.61-10.86,6.71-2.31.18-11.14.23-13.92.81-2.22.46-8.76,6.75-12.26,9.37S35.83,29.27,31,27.77c-2.64-.83-3.75-4.23-4.09-7.37-.58-5.48-2.5-6.74-4.08-7.15s-4,.43-4.42,1.07a4.46,4.46,0,0,1-2,1.55c4.34-.27,6.09,1.43,6.6,4.4,1.08,6.3-4,10.91-2.46,15.49,1.79,5.17,8.26,8.18,11.09,9s7.47.46,10.48,1.13c9.38,2.08,16.23,12.36,16.94,19.61C54.3,54.31,46,49.16,39.64,48.31c-5.87-.77-13.7-.2-19.78-8a11.27,11.27,0,0,1-1.56-10.2c.39-1,.64-1.89,1.09-2.89a11.71,11.71,0,0,0,1.13-4.76A6.16,6.16,0,0,0,19.63,19a2.53,2.53,0,0,0-1-.85,6.73,6.73,0,0,0-2.8-.33l1.37,3.8a.76.76,0,0,1-.95-.52c-.44-1.33-.64-2-1.1-3.3,0-.11-3.64-.09-4.11-.51s2.57-1.71,3.13-1.93c-.45-.7-2.17-3.29-2.67-3.9C10.26,10,9,8.56,7.75,7.17c-1-1.06-2-2-3-3.07A43.54,43.54,0,0,1,9.38,8.26a38,38,0,0,1,5.16,6.91,7.08,7.08,0,0,0,2.29-1.38,7.5,7.5,0,0,1,3.46-2.3c1.5-.27,4.66-.75,6.7,2.06s2.43,5.51,3.16,8.56S32.76,25,35,24.67c9-1.5,14.24-9.19,16.55-10.81A14,14,0,0,1,57,11.41c1.49-.28,3-.46,4.51-.6,3-.26,6-.4,9-.69A32.79,32.79,0,0,0,78,8.49a14,14,0,0,0,3.31-1.58Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M44.74,43.25c4.09.77,11.31,4.11,12.62,5C59.15,49.43,63.29,52,68,60.82,61.31,52.92,45.21,43.54,44.74,43.25Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M71.37,44.73c-8,1.12-16.62-.07-20.75-2.23a16.37,16.37,0,0,1-8.48-10.08c3.06,4.34,9,7.76,13,8.89s15,3.2,16.25,3.38Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M62,21.93c2.29-.2,6.75,2.25,10.91.57-2.12,3.77-6.06,3.08-8,2.89-2.49-.25-4.7-1.62-8.33-1.08A8.75,8.75,0,0,1,62,21.93Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="m60.11 19.08c2.93-2.88 7.5-2.23 9.42-2a11.37 11.37 0 0 0 7.37 -1.66c-1.44 3.05-3.21 4.59-7.09 4.49-4.59-0.17-6.71-1.27-9.7-0.83z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="m51.29 28.79a8.44 8.44 0 0 1 6.71 -1.4c2.87 0.46 6.08 2.29 8.88 1.19a8.32 8.32 0 0 1 -6.59 2.23c-2.29-0.35-6.63-2.52-9-2.02z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M45,32.05a8.61,8.61,0,0,1,6.51-.45c1.61.63,4.32,2.25,6.9,2.8-2.65,1.49-6.46.79-8.07.12S47,31.8,45,32.05Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M12.33,10.54a5.48,5.48,0,0,1-1.16-2.81,22.2,22.2,0,0,0-.79-5.15C12.77,5.24,13.62,7.55,12.33,10.54Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M10.93,11.61a5.46,5.46,0,0,0-2.83-1.1,23,23,0,0,1-5.17-.67C5.65,12.17,8,13,10.93,11.61Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M6.83.46a5.32,5.32,0,0,1,2.38,6.1,4.12,4.12,0,0,1-1.6-2.45A10.45,10.45,0,0,0,6.83.46Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M1,6.26A5.29,5.29,0,0,0,7.32,8a4.12,4.12,0,0,0-2.6-1.33A10.52,10.52,0,0,1,1,6.26Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M3.39,0A2.94,2.94,0,0,1,6,3.51a3.79,3.79,0,0,1-1.47-.9C4.11,2,3.82.66,3.39,0Z" fill-rule="evenodd"/>
                    <path transform="translate(0)" d="M0,3.05a2.94,2.94,0,0,0,4.07,1.6A3.79,3.79,0,0,0,2.82,3.47C2.11,3.22.75,3.29,0,3.05Z" fill-rule="evenodd"/>
                    </svg>
                    <br>
                    Formación en valores y desarrollo espiritual</div>
                  <div class="col-xs-12 item-content">Juegos Florales. Campañas sociales. Sacramento de la Confirmación. Jornadas espirituales.</div>
                </div>

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.48 52.06"><polygon points="23.8 31.3 23.35 50.55 22.03 49.75 31.07 45.37 30.77 46.03 26.42 28.27 28.06 27.84 33.22 46.22 22.87 51.35 21.61 52.06 21.55 50.56 20.8 31.33 23.8 31.3"/><path d="M24.06,18.61c-.65-3.07-1.56-6.14-.93-10.77s3.68-5.12,5.31-5.36a14.08,14.08,0,0,1,4.89.19A3.77,3.77,0,0,1,35.64,4a3.3,3.3,0,0,1,.42,2.69,13.31,13.31,0,0,1-2.19,4.43,40.93,40.93,0,0,1-3,3.79c-2.11,2.4-4.37,4.66-6.69,6.85s-4.7,4.29-7.12,6.36c-4.84,4.14-9.79,8.11-14.87,12l.09-1.64,4.07,3.71L5,42c3.37-2.24,6.71-4.59,10-7s6.5-4.88,9.63-7.45,17-13.5,16.51-20.2c-.35-4.46-5.67-6-11-5.89s-8.83,2.86-9.51,6.31-.32,9.78.87,15.19l-1.75,1.37c-1.94-9.7-4.27-20,4.21-23.52C28.12-.88,43.46-.41,44.33,8c.74,7.13-7.07,12.32-8.57,13.76a121.09,121.09,0,0,1-9.42,8c-3.25,2.52-6.57,4.94-9.93,7.29S9.66,41.71,6.19,43.92l-.74.48-.63-.6L.84,40l-.94-.89,1-.75c5.1-3.71,10.12-7.58,15-11.59q3.66-3,7.19-6.17c2.33-2.12,4.63-4.28,6.76-6.58,1.07-1.16,7.74-8.75,3.23-9.7-11-1.92-8.25,9.51-7.87,13.47Z" transform="translate(0.1 -0.04)"/>
                    </svg>
                    <br>
                    Campañas sociales y de concientización</div>
                  <div class="col-xs-12 item-content">Día del No Fumador. Día del Planeta. Campañas contra el consumo de drogas y contra el <i>bullying.</i></div>
                </div>

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152.36 152.36"><path d="M77.31.3c41.66.3,75.85,35,75.62,76.62-.23,41.86-35.09,76.15-77,75.73C34.31,152.24.15,117.4.57,75.8S35.63,0,77.31.3Zm71.28,87.94c.58-4-1.57-4.38-5.41-5.06s-3,1-4.24,8.51c-2.49,14.45-14,35.74-29.41,49.54C129.65,131,145.43,110.1,148.59,88.24ZM66.77,51.78c-2.81,1.55-2.57,2.45-1,5.07,2.7,4.67,8.9,12.76,14.7,15.39,1.93.88,5.33-.3,6.52-.48,19.79-3.13,42.47-.75,61.5,6.17.51-7.33-1.27-20.77-5.08-27.83C143.19,49.79,97.91,34.64,66.77,51.78Zm37.53,26.9c-6.27-.94-15.55.47-19.22,1.16-3.29.61-4.23,4.29-5.19,7.49-6.73,22.49-17.71,34.77-33.25,50.94C44,141,68.16,146.7,70.47,144.42c8.94-8.84,21.39-21,26.8-32.38C108.47,88.57,108.15,79.26,104.3,78.68ZM34.89,74C41.26,84.69,49,94.17,59.83,100.72c2.34,1.41,2.85,1.06,4.68-1.45,3.08-4.25,6-11.21,7.5-17.13A7.64,7.64,0,0,0,70.48,76C64.14,68.89,47.83,51.1,44,19.38c-.55-4.59-.49-4.38-4.48-2.12-7.31,4.14-16.14,13.35-16,16.45C22.82,42.91,28.29,63,34.89,74Zm66.89,68.64C117.52,131.47,133.6,99.86,134,86.19c.18-5.76-.31-6.24-5.91-6.84-3-.32-6-.61-8.92-1s-5,.18-5,4a33.52,33.52,0,0,1-1.28,7.35c-5.08,22.78-17.68,40.94-34.69,56.4C76.93,147.25,93.94,148.23,101.78,142.65ZM17.25,40.81c-3.1,3.66-6.87,11.64-8.73,18.3a18.69,18.69,0,0,0,.2,11.11c3.81,9.7,9.67,35.62,36.15,52.27,2.48,1.56,4.42,1.71,6.23-1,2.19-3.33,3.43-4.84,5.89-8,1.81-2.31,1-3.56-1.07-5.14C40.32,96.74,19.92,74.84,17.25,40.81Zm123.42,3.38c-8-15.31-17.46-22.09-22.47-23.48a100.81,100.81,0,0,0-35.63-3.2c-9.84.82-22.37,3.22-31,8.36-.19,3.59,4.07,13.42,5.47,17,1.12,2.87,2.52,2.88,5.19,1.73C79.37,37.2,111.14,31.3,140.67,44.19ZM50.46,19.58C69.05,11,89,9.82,108.55,14.62a14.8,14.8,0,0,0,1.89.25c-.42-.41-.77-1-1.27-1.21C89.66,4.54,69,3.75,49,11.81,49.44,14.06,49.1,18.52,50.46,19.58ZM34.66,133.7c3.4,2.19,5.85-1.95,8.52-4.08-19.76-14-27.89-24.12-37.64-50.77C5.8,104,24.13,127,34.66,133.7Z" transform="translate(-0.57 -0.3)" style="fill-rule:evenodd"/></svg>
                  <br>
                    Desarrollo físico</div>
                  <div class="col-xs-12 item-content">Juegos Deportivos Intertrilce de fútbol, vóley, básquet y atletismo.</div>
                </div>

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.2 63.19"><path d="M55.64,6.94c-1-.53-4.42-2.88-11.68-1.84a4,4,0,0,1-1.77-.42A37.72,37.72,0,0,0,29.25.58,29.18,29.18,0,0,0,14.3,2.48,21.78,21.78,0,0,0,2.63,13.35,26.58,26.58,0,0,0,.19,26.14c.06,1.5,0,1.5,1.5,1.72a4,4,0,0,1,3.6,3.19C6.42,34.82,3.56,41.92,4,45.71c.42,3.52,2.69,7,7.31,7.2.32.1.43,2.36,2.29,3.71a2.22,2.22,0,0,1,.82,1.81,5.27,5.27,0,0,0,2.7,4.36,4.51,4.51,0,0,0,3.28.65c0-.11.09-.21.13-.32l-2-1.28a1,1,0,0,1,.07-.15l2,.16a2.23,2.23,0,0,1,0-.23l-1.93-.69A10.76,10.76,0,0,1,21,60.84c.75,0,1.49-.14,1.58-1.19a23.55,23.55,0,0,1-2.46-.31,2.74,2.74,0,0,1-2-1.22c1.7-.13,3.26-.21,4.28-2a18.92,18.92,0,0,1-2,.41,9.1,9.1,0,0,1-1.88-.06c-.85-.09-1.69-.29-2.54-.36a2.56,2.56,0,0,1-2.51-2.52c0-.22.28-.52.5-.66.76-.44,1.59-.76,2.31-1.24.43-.28.66-.31,1,.07a10.86,10.86,0,0,0,6.29,3.45,1.51,1.51,0,0,1,.93.63,6.84,6.84,0,0,0,4.71,3.46A2.79,2.79,0,0,1,31.3,61a4.44,4.44,0,0,0,5,2.19,3.63,3.63,0,0,0,.74-.46c-1.59-.42-3.07-.71-4.2-2.35,3,.63,5.47.23,7.27-2.42-4.37,1.58-4.37,1.58-5.16,1,2.68-1.26,3.66-2.3,3-3.18-.85.74-1.6,1.67-2.88,1.71.89-1.08,1.92-2,2.21-3.56-.19.08-.28.09-.31.13-1.59,2.27-4.19,3-6.49,4.16a1,1,0,0,1-.37.09,5.17,5.17,0,0,1-3.85-3,1.26,1.26,0,0,1,.26-.13c.38-.1.76-.2,1.15-.27a5.63,5.63,0,0,0,4.69-4.39c.87-3.12.54-6.29.46-9.46a16.23,16.23,0,0,1,.34-4c.42-1.91,2-1.83,3.92-2a30.62,30.62,0,0,0,3.33-.44c1.07-.2,1.2-.56.73-1.47-2.4-4.64-4-10.52-3.39-15.78a14.63,14.63,0,0,1,2.42-7.08A13.38,13.38,0,0,1,41,9.21c2.15-2.3,2.73-2.87,4.66,0,1.24,1.86,1.44,3.43,1.24,6.24,0,.37,2.45-.11,2.7.19.64-2.38-.9-4.27-1.74-6.21,1.56.3,3.66,3.51,4.58,4.14.27.19,2.67-.82,2.5-1.06a18.93,18.93,0,0,0-7.55-5.61l.09-.16a1.77,1.77,0,0,1,.46,0l5.39,1.86c.38.13,3,1.54,3,1.54S56.05,7.16,55.64,6.94ZM20.74,8.56c.18.15-.14,10.43,1.33,9.21.82-.68,3.2-7.21,4.77-6.39s1.46,5.8,2.43,7.29a59.35,59.35,0,0,1-16.75-1.36C13.73,16.2,18.32,6.47,20.74,8.56ZM13.52,4.78c-1.42,3-3.29,9.12-2.34,12.47a11.52,11.52,0,0,1-5.88-2A19,19,0,0,1,13.52,4.78ZM3.74,18.31C5.81,19.67,16.05,21,20,21.39c5,.44,9.71.37,14.72.6.9,0,1.14-.23,1.17.72a10.76,10.76,0,0,0,.58,2.78c.19.67.07,1-.61,1-16,2.17-17.06-2.81-31.87-3C1.69,23.4,3.11,19.74,3.74,18.31Zm27.11.61c.92-1,1.92-5.76,2.81-5.63s1.22,5.27,1.91,5.93C34.35,19.11,32.24,19.05,30.85,18.92ZM6.35,45.58c-.8-4.62,2.13-10.25.42-16.12,4.42.92,4.74,9.6,5.08,11.67.49,2.92,1,6.19,2.79,8.95A5.83,5.83,0,0,1,6.35,45.58Zm32.2-12.9c-.78.06-1,.13-1.54.16-3.67.26-6,1.35-6.13,5-.08,2.29,0,4.6-.07,6.9a25.08,25.08,0,0,1-.46,4.55c-.63,2.79-3,4.19-5.85,3.91A9.8,9.8,0,0,1,16,47c-1.44-3.16-1.86-6.56-2.59-9.9a27.14,27.14,0,0,0-1.87-6c-1.46-3.06-3.32-3.67-9-5,2.29-.3,9.51,0,13,1.87,2.31,3.63,3,12.34,3.84,15.14,1.28,4.14,6.33,4.72,6.94,1.12s.17-11.41.09-13.68c-.05-1.08.75-1.09,1.86-1a28.23,28.23,0,0,0,8.11-.84c.69-.06.66-.18.87.45C37.51,29.92,38.13,31.69,38.55,32.68ZM37.36,11.44c-.28.67-.33.6-1,.49C30,10.82,20.61,6.83,18.44,3.58c8.93-2.52,20.45,1.2,22.26,2.55C37.67,9.43,37.55,11,37.36,11.44Z" transform="translate(-0.17 -0.33)" style="fill-rule:evenodd"/></svg>
                    <br>
                    Aprecio por nuestra cultura</div>
                  <div class="col-xs-12 item-content">Competencia Intertrilce de Danzas Típicas. Ferias gastronómicas y regionales.</div>
                </div>

                <div class="col-xs-12 col-sm-4 ep-stepfour-item">
                  <div class="col-xs-12 item-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.89 61.79"><path d="M53.07,22.16c-.93-.48-1.84-1-2.77-1.44-1.8-.91-3.47-2.2-5.44-2.62s-4.35,0-6.54,0-4.48,0-6.75,0V15.67h13c.18-2.66-.25-5.74-.09-8.1-2.11-.67-5.14-.66-12.85-1.86C31.41,4.45,31.38.19,31,.2L30.39,0h.32l-2.87.1-.32,5.2s-5.75-.68-7.78-1c-4.84-.68-4.84-.69-9.24,1l-8,3.07V9.7c3.73,2,7.38,3.93,11.08,5.82a8.62,8.62,0,0,0,2.21.4l11.65-.11v2.48c-1.12.06-2.07.15-3,.17-2.9.07-5.8.11-8.71.16a3,3,0,0,0-2.36.73A43.68,43.68,0,0,0,13,27.47c2.58.11,5,.22,7.33.3s4.73.14,7.11.21V30c-.7,0-1.27,0-1.83,0-3.41-.25-6.81-.56-10.22-.76a8.52,8.52,0,0,0-3,.33c-3.6,1.15-7.14,2.4-10.7,3.62-.52.18-1,.41-1.74.71a6.9,6.9,0,0,0,1.24,1.24q5.42,3,10.91,5.93a3.81,3.81,0,0,0,1.81.39c2.71-.09,5.41-.28,8.12-.38,1.77-.06,3.55,0,5.55,0-.08,6,.13,11-.16,16.92,0,0-7.52,1-12.12,3.75H40.91a21,21,0,0,0-9.3-4.21s-.08-6.14-.18-8.73,0-5.37,0-8.1L44,40.06c.08-2.56.17-4.94.22-7.33,0-.77-.57-1.26-1.49-1.42s-1.66-.19-2.49-.25l-8.67-.64V28.17c.8,0,1.44,0,2.08,0,3,.09,6.07.21,9.1.28a4.55,4.55,0,0,0,1.87-.23c3.11-1.46,6.17-3,9.12-4.45A1.13,1.13,0,0,0,53.07,22.16ZM17.64,14.05a6.26,6.26,0,0,1-3-.67C11.94,12,9.23,10.64,6.16,9.09c.87-.35.58-.64,1.15-.86,2.39-.91,5.37-1.66,7.63-2.55a5.23,5.23,0,0,1,2.61-.35c4.34.51,8.69,1,13,1.49,3.34.38,6.67.79,10,1.19.27,0,.54.09,1,.18-.1,1.9-.21,3.78-.31,5.75-.74,0-1.29.08-1.84.08C32.18,14,24.91,14,17.64,14.05ZM38.27,61c-4.62-.42-16.41-.2-17.35-.24C29.78,58.12,34.23,58.89,38.27,61Zm1.87-28.63,1.23.14a40.92,40.92,0,0,1-.31,5.83c-.56.06-1,.14-1.45.15q-6.47.27-12.93.51c-3.45.13-6.9.22-10.34.36a5.71,5.71,0,0,1-2.92-.56c-2.53-1.26-5.1-2.46-7.64-3.69-.41-.2-.78-.44-1.36-.77,1-.34,1.77-.61,2.55-.86,2.32-.73,4.67-1.43,7-2.2a8.22,8.22,0,0,1,3.17-.41c4.64.31,9.29.59,13.93.89C34.08,31.93,37.11,32.14,40.14,32.35Zm8.37-8.81c-2.08.91-4.14,1.86-6.25,2.73a5.28,5.28,0,0,1-2,.41C32.3,26.47,24.4,26.2,16.5,26a4,4,0,0,1-.58-.14c0-1.94,0-3.85.2-5.83,1.27-.06,2.37-.16,3.48-.18,7.07-.14,14.15-.25,21.22-.41a5.59,5.59,0,0,1,3,.68c1.76,1,3.57,1.89,5.86,3.09C49.1,23.34,48.79,23.42,48.51,23.54Z" transform="translate(0.03 0.02)" style="fill-rule:evenodd"/></svg>
                    <br>
                    Actividades psicopedagógicas</div>
                  <div class="col-xs-12 item-content">Escuela para padres. Talleres psicológicos. Programa de orientación vocacional y de motivación Cachimbo Trilce. Visitas guiadas a la UNI, San Marcos y Católica.</div>
                </div>
                
            </div>
          </div>
        </div>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-large-container">
            <div class="col-xs-12 col-sm-4 ep-stepfour-left xs-hide">
              <img src="{{ url('/static/images/colegio/propuesta-feb/5-sistema.png') }}" alt="Sistema 5.° año">
            </div>
            <div class="col-xs-12 col-sm ep-stepfour-right ep-stepfour-container">

              <div class="row col-xs-12 ep-generic-title">
                <h2><span class="number">5 </span>Sistema 5.° Año - Más cerca de la universidad</h2>
              </div>

              <div class="col-xs-12 ep-stepfive-container">
                Este programa académico está diseñado para que nuestros alumnos de 5.<sup>o</sup> año de secundaria tengan las mejores posibilidades de ingresar a la universidad.
              </div>

              <ul class="ep-generic-list ep-stepfive-list">
                <li>
                    <h3><span class="icon_local_span"><i class="fa fa-stop"></i></span> Docentes especializados por cada universidad</h3>
                    <p>Nuestras aulas de 5.<sup>o</sup> año cuentan con docentes especializados por cada universidad, sea UNI, San Marcos o Católica.</p>
                </li>
                <li>
                    <h3><span class="icon_local_span"><i class="fa fa-stop"></i></span> Aulas exclusivas por cada universidad</h3>
                    <p>Aulas con contenido curricular adecuado al prospecto del examen de admisión de la UNI, San Marcos y Católica.</p>
                </li>
              </ul>

            </div>
          </div>
        </div>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-generic-title">
            <h2><span class="number">6 </span>Innovación y tecnología</h2>
          </div>

          <p class="ep-stepsix-aftertitle">
          Toda la información de sus hijos al alcance de un solo clic a  través de la Intranet Trilce para padres y alumnos.
          </p>

          <div class="row col-xs-12 ep-large-container">
            <div class="col-xs-12 col-sm-5 ep-stepfour-left center-xs xs-hide">
              <img src="{{ url('/static/images/colegio/image-propuesta-educativa.png') }}" alt="Innovación tecnológica">
            </div>

            <div class="col-xs-12 col-sm ep-stepfour-right ep-stepfour-container">

              <div class="row col-xs-12" style="display: flex; flex-direction: column;">
                <ul class="ep-generic-list">
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Acceso a las calificaciones
                  </li>
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Calendario de actividades y evaluaciones
                  </li>
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Guías de aprendizaje
                  </li>
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Material audiovisual
                  </li>
                  <li>
                    <br>
                    Además, contamos con: 
                  </li>
                </ul>
                <ul class="ep-generic-list">
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Aulas con equipos multimedia
                  </li>
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Laboratorios de cómputo
                  </li>
                  <li>
                      <span class="icon_local_span"><i class="fa fa-stop"></i></span>
                      Plataforma educativa virtual
                  </li>
                </ul>

              </div>

            </div>

          </div>

        </div>

        <div class="js-tabs__content">
          <div class="row col-xs-12 ep-generic-title">
            <h2><span class="number">7 </span>Resultados comprobados</h2>
          </div>

          <div class="ep-stepseven-container">
            <h2 class="ep-stepsix-titlelist">Ingresos masivos</h2>
            <p class="ep-text">
              Cada año, miles de ingresantes a las universidades más reconocidas del país son de Trilce.
            </p>
            
            <div class="row ingresantes col-xs-12 center-xs">

              <div class="row col-xs-12 col-sm-4 ingresantes__item" style="margin: 0 !important;">
                <div class="col-xs-12 ingresantes__img">
                  <img src="/storage/static/upload/65828b70-45ac-11e9-b148-8fadf5feb56c.png" alt="">
                </div>
                <div class="col-xs-12 ingresantes__text">
                  <span class="title">¡Máximo puntaje!</span>
                  <span class="subtitle">1<sup>er</sup> Puesto San Marcos</span>
                  <span class="subtitle2">Examen 2019-II</span>
                  <span class="name">Rafael Salas Meléndez</span>
                </div>
              </div>

              <div class="row col-xs-12 col-sm-4 ingresantes__item" style="margin: 0 !important;">
                <div class="col-xs-12 ingresantes__img">
                  <img src="{{ url('/static/images/colegio/propuesta-feb/resultados-antonio-herrera.png') }}" alt="">
                </div>
                <div class="col-xs-12 ingresantes__text">
                  <span class="title">¡Máximo puntaje!</span>
                  <span class="subtitle">1<sup>er</sup> Puesto 2020<br>Católica - POP</span>
                  <span class="name">Antonio Herrera </span>
                </div>
              </div>

              <div class="row col-xs-12 col-sm-4 ingresantes__item" style="margin: 0 !important;">
                <div class="col-xs-12 ingresantes__img">
                  <img src="{{ url('/static/images/colegio/propuesta-feb/7-resultados-2.png') }}" alt="">
                </div>
                <div class="col-xs-12 ingresantes__text">
                  <span class="title">¡Máximo puntaje!</span>
                  <span class="subtitle">1<sup>er</sup> Puesto UNI</span>
                  <span class="subtitle2">Examen Escolares 2019-I</span>
                  <span class="name">Daniela Velarde</span>
                </div>
              </div>

            </div>

            <br>
            <h2 class="ep-stepsix-titlelist">Primeros puestos</h2>

            <div class="row col-xs-12 col-sm-12 table-responsive" id="tableade">
              <table class="ep-stepseven-table">
                <tbody>
                <tr>
                    <td data-label="">1.<sup>er</sup> puesto Católica POP</td>
                    <td data-label="Examen">2020</td>
                    <td data-label="Nombres">Antonio Herrera</td>
                    <td data-label="Carrera"><b>Máximo puntaje</b></td>
                  </tr>
                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2019-II</td>
                    <td data-label="Nombres">Diego Vargas</td>
                    <td data-label="Carrera">Ingeniería Civil</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2019-II</td>
                    <td data-label="Nombres">Piero Pérez</td>
                    <td data-label="Carrera">Ingeniería Mecatrónica</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2019-II</td>
                    <td data-label="Nombres">Eduardo Díaz</td>
                    <td data-label="Carrera">Arquitectura</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2019-II</td>
                    <td data-label="Nombres">Davis Suarez</td>
                    <td data-label="Carrera">Física</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto San Marcos</td>
                    <td data-label="Examen">2019-II</td>
                    <td data-label="Nombres">Rafael Salas Meléndez</td>
                    <td data-label="Carrera"><strong>Máximo puntaje</strong></td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI Examen Escolares</td>
                    <td data-label="Examen">2019-1</td>
                    <td data-label="Nombres">Daniela Velarde</td>
                    <td data-label="Carrera"><strong>Máximo puntaje</strong></td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto Católica POP</td>
                    <td data-label="Examen">2019</td>
                    <td data-label="Nombres">Jimm Cisneros</td>
                    <td data-label="Carrera"><strong>Máximo puntaje</strong></td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto San Marcos</td>
                    <td data-label="Examen">2019-I</td>
                    <td data-label="Nombres">Diego Castillo Utani</td>
                    <td data-label="Carrera">Ingeniería Ambiental</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto Católica</td>
                    <td data-label="Examen">2018-I</td>
                    <td data-label="Nombres">Santiago Mendoza</td>
                    <td data-label="Carrera">Arquitectura</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto San Marcos</td>
                    <td data-label="Examen">2018-I</td>
                    <td data-label="Nombres">Alejandro Tapia</td>
                    <td data-label="Carrera">Ingeniería Mecánica de Fluidos</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2018-I</td>
                    <td data-label="Nombres">Rodrigo Ponte</td>
                    <td data-label="Carrera">Petróleo y Gas Natural</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2018-I</td>
                    <td data-label="Nombres">Mauricio Campos</td>
                    <td data-label="Carrera">Ingeniería Electrónica</td>
                  </tr>

                  <tr>
                    <td data-label="">1.<sup>er</sup> puesto UNI</td>
                    <td data-label="Examen">2018-I</td>
                    <td data-label="Nombres">Luis Flores</td>
                    <td data-label="Carrera">Ingeniería de Minas</td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>


      </div>

    </div>
  </div> -->

<!--   <div class="row center-xs center-sm container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md educationalproposal__video">
      <h1 class="educationalproposal__video-title">¡Conoce más sobre nosotros!</h1>
      <br><br>
      <div class="educationalproposal__video">
        <div class="educationalproposal__video-bg"></div>
        <div class="bt-play">
          <i class="fa fa-play-circle-o"></i>
        </div>
        <video id="proposal" class="educationalproposal__video-video" src="/storage/static/video/propuesta-educativa.mp4" controls>
        </video>
      </div>
    </div>
  </div>
 -->
  @include('colegio.partials.ads')

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'educational_proposal';

    var modal_open = [
    @if(session('contact'))
      '#modal-1'
    @endif
    ];

  @parent
@endsection
