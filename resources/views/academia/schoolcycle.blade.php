{{! $breadcrumbs = Breadcrumbs::render('academia-schoolcycle') }}
  @extends('academia.layouts.template')
  @section('title', 'Ciclo Escolar')
  @section('content')
  <head>
   <title>Ciclo Escolar - Trilce</title>
   <meta name="title" content="Ciclo Escolar - Trilce" />
   <meta property="og:title" content="Ciclo Escolar - Trilce" />
   <meta name="twitter:title" content="Ciclo Escolar - Trilce" />
   <meta name="description" content="Ciclo Escolar - Trilce" />
   <meta property="og:description" content="Ciclo Escolar - Trilce" />
   <meta name="twitter:description" content="Ciclo Escolar - Trilce" />
   <meta name="robots" content="index,follow" />
   <meta name="url" content="https://www.trilce.edu.pe/academia" />
   <meta property="og:url" content="https://www.trilce.edu.pe/academia" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
	@media (min-width: 1200px) 
	{	
    .version_desktop
    {
      display: block;
      height: auto;
    }
    .version_mobile
    {
      display: none;
    }
		.web 
		{
			width: 120px;
		}
		.fondo_gris
		{
			background-color: #F5F5F5
		}
		.titulo_conoce
		{
			font-size: 1.75rem; 
			text-align: left; 
			color: #FF4F00; 
			margin: 60px 0px -40px 0px !important; 
			line-height: 40px;
		}
		.boton_brochure
		{
			color: #FF4F00; 
			font-family: 'CaeciliaLTPro-85Heavy'; 
			border-radius: 20px; 
			border-width: 2px; 
			border-style: solid; 
			border-color: #FF4F00; 
			font-size: 1.25rem; 
			padding: 6px 30px 10px 30px; 
			height: 40px;
		}
		.alinear
		{
			text-align: left;
			width:100%;
		}

	}
	
	/* Media Queries */
	@media (max-width: 576px) 
	{	
		.fondo_gris
		{
			background-color: #F5F5F5
		}
		.titulo_conoce
		{
			font-size: 1.75rem; 
			text-align: left; 
			color: #FF4F00;
			line-height: 40px;
			padding: 20px;
		}
		.boton_brochure
		{
			color: #FF4F00; 
			font-family: 'CaeciliaLTPro-85Heavy'; 
			border-radius: 20px; 
			border-width: 2px; 
			border-style: solid; 
			border-color: #FF4F00; 
			font-size: 1.25rem; 
			padding: 6px 50px 10px 50px;
			height: 44px;
		}
		.alinear
		{
			text-align: center;
			width:100%;
		}
	}
	
        small {
            margin: 1em 0em;
            display: block;
        }
    .web {
            display: block !important;
        }
        .mobile{
            display: none !important;
        }
    .about-container {
        margin-top: 80px;
        margin-bottom: 40px;
    }
    .container-main-aca {
        display: none;
    }
    .header-double-bottom {
        background: transparent;
    }
    .header-double-top>.row {
        position: relative;
        height: auto;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        overflow: hidden;
    }
    .header-double-w-preparation-tutorials {
        background-image: url(/static/images/slides/banner-prep-ciclo-escolar-internal-23092020.png);
        background-position: center center;
        background-size: cover;
    }

    @media (max-width: 768px)
    {
      .version_desktop
      {
        display: none;
      }
      .version_mobile
      {
        display: block;
        height: 325px;
      }
        .about-container {
            margin-top: 60px;
            margin-bottom: 40px;
        }

        .header-double-top>.row {
                height: 352px;
        }
        .header-double-w-preparation-tutorials {
                background-image: url(/static/images/slides/banner-prep-ciclo-escolar-internal-23092020-mobile.png);
                background-position: center center;
                background-size: cover;
        }
        .header-double-content-top {
            height: initial;
        }
    }
  
    table td, table td * {
        vertical-align: top;
    }
    td.texto-horario {
        width: 400px;
    }
    .text-info-web {
        display: block;
    }
    .text-info-web  .span {
        font-size: 10px;
        position: absolute;
    }
    .text-info-mobile {
        display: none;
    }
    .preparation__title {
            margin: 20px auto;  
    }
    .preparation__subtitle {
        margin: 20px auto;
    }
    .tab_subtitle {
        display: block;
        padding: 8px 0px 4px;
    }
    .ul-li-squared {
        margin-bottom: 30px;
        padding-right: 5px;
        text-align: justify;
        font-family: Geogrotesque-Rg;
    }
    .preparation__courses-list-ul li {
        width: 100%;
    }
    .preparation__courses-list {
        padding-top: 3em;
    }
    .tabcycles .main {
        margin: 0 5em 4em;
        transition: 0.3s;
    }

    .tabcycles .content {
        background: #fff;
        color: #53565a;
        font-size: 1.5rem;
        font-family: "Geogrotesque-Rg";
        transition: 0.3s;
    }
    .tabcycles .content>div {
        display: none;
        padding: 5px;
        transition: 0.3s;
    }
    .tabcycles input {
        display: none;
    }
    .tabcycles label {
        display: inline-block;
        padding: 15px 75px;
        font-weight: 600;
        text-align: center;
        border-bottom: 2px solid #efefef;
        margin-left: 20px;
        margin-right: 20px;
        transition: 0.3s;
    }
    .tabcycles label:hover {
        cursor: pointer;
        background: #f4633a;
        color: #fff;
        border-bottom: 2px solid #f4633a;
        transition: 0.3s;
    }
    .tabcycles input:checked+ .tabcycleslabel {
        background: #f4633a;
        color: #fff;
        border-bottom: 2px solid #f4633a;
        transition: 0.3s;
    }
    #tab1:checked~.content #content1,
    #tab2:checked~.content #content2,
    #tab3:checked~.content #content3,
    #tab4:checked~.content #content4 {
        display: block;
        transition: 0.3s;
    }
    @media(min-width: 992px) {
        .tabcycles .table-rest {
            background: white;
            color: #53565a;
            border-collapse: collapse;
            font-size: 16px;
            width: 100%;
            font-family: Geogrotesque-Rg;
        }
        #table-rest.table-rest tr:nth-child(1) th {
            border-bottom: 1px solid rgba(0, 0, 0, 0.50) !important;
            position: relative;
        }
        .table-rest thead tr th {
            border-bottom: 1px solid #53565a;
        }
        .table-rest tbody tr:nth-child(1) td {
            padding-top: 1em;
        }
        .table-rest tr th {
           /* text-transform: uppercase; */
        }
        .table-rest tr th,
        .table-rest tr td {
            padding: 8px 12px;
            margin: 0 auto;
            text-align: left;
        }
    }

    @media (max-width: 991px) {
		.web 
			{
				width: 120px;
				padding-left: 269px !important;
			}
        .tabcycles .main {
            margin: 0 auto 0em;
            width: 100%;
            font-family: Geogrotesque-Rg;
        }
        .tabcycles .content {
            margin-top: 0em;
        }
        .frequentquestions {
            padding-left: 0px;
            padding-right: 0px;
            margin: 0 auto;
        }z
        .tabcycles label {
            width: 90%;
            margin-left: 0em;
            margin-right: 0em;
            margin-bottom: 1em;
        }
        .tabcycles table.table-rest {
            font-size: 16px;
        }
        .tabcycles table.table-rest,
        .tabcycles .table-rest thead,
        .tabcycles .table-rest tbody,
        .tabcycles .table-rest th,
        .tabcycles .table-rest td,
        .tabcycles .table-rest tr {
            display: block;
        }
        ..tabcycles table-rest tbody tr td:nth-child(1) {
            font-weight: bold;
        }
        .tabcycles .table-rest thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
            font-weight: bold;
        }
        .tabcycles .table-rest tr {
            padding: 2em 1em;
        }
        .tabcycles .table-rest tr:nth-child(2),
        .tabcycles .table-rest tr:nth-child(4),
        .tabcycles .table-rest tr:nth-child(6),
        .tabcycles .table-rest tr:nth-child(8),
        .tabcycles .table-rest tr:nth-child(10),
        .tabcycles .table-rest tr:nth-child(12),
        .tabcycles .table-rest tr:nth-child(14),
        .tabcycles .table-rest tr:nth-child(16),
        .tabcycles .table-rest tr:nth-child(18),
        .tabcycles .table-rest tr:nth-child(20) {
            background: #f5f5f5;
        }
        .tabcycles .table-rest td {
            /* Behave  like a "row" */
            border: none;
            position: relative;
            padding-left: 50%;
            margin-bottom: 0.2em;
            text-align: right;
            padding: 0.2em;
        }
        .tabcycles .table-rest td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 1px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            text-align: left !important;
        }
        .tabcycles .table-rest td:nth-of-type(1):before {
            content: "Inicio";
            font-weight: bold;
        }
        .tabcycles .table-rest td:nth-of-type(2):before {
            content: "Fin";
        }
        .tabcycles .table-rest td:nth-of-type(3):before {
            content: "N° Semanas";
        }
        .tabcycles .table-rest td:nth-of-type(4):before {
            content: "Pago mensual (Virtual)";
        }
        .trilce-benefits {
            position: relative;
            margin: 3em 0em;
        }
        .trilce-benefits .tabs_wrap {
            width: 60%;
        }
        .trilce-benefits label {
            border-bottom: 0px solid #efefef;
        }
        .trilce-benefits .tab {
            min-height: 51px;
            font-size: 1.5rem;
            min-width: 25%;
        }
        .tab_check,
        .tab_content {
            display: none;
        }
        #tab_1:checked~#content_1,
        #tab_2:checked~#content_2,
        #tab_3:checked~#content_3 {
            display: block;
        }
        * {
            box-sizing: border-box;
        }
        .tabs_wrap {
            font-size: 0em;
        }
        .tabs_wrap label,
        .tabs_wrap div {
            font-size: 16px;
        }
        .tab {
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
        }
        .tab_check:checked+.tab {
            cursor: auto;
        }
        .tab_content {
            padding: 10px 15px;
            min-height: 200px;
        }
    }
        @media(max-width: 991px) {
        .text-info-web {
            display: none !important;
        }
        .text-info-mobile {
            display: block;
        } 
        .text-info-mobile p{
            font-size: 10px;
            margin-bottom: 1em;
        }
        td.texto-horario {
            padding-left: 4.3em;
            width: inherit;
        }
        .trilce-benefits .tabs_wrap {
            width: 100%;
        }
        .trilce-benefits .tab {
            min-height: 51px;
            font-size: 1.5rem;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        .tabs_wrap div {
            margin-top: 10px;
        }
    }
    .content small {
        margin: 1em 0em;
        display: block;
    }
    .about-container
    .frequentquestions,
    .preparation__section,
    .preparation__title{
        margin: 0em;
    }

    @media (max-width: 768px){
        .web {
            display: none !important;
        }
        .mobile{
            display: block !important;
        }
        .tabcycles small {
            display: none;
        }
    }

    @media (max-width: 1600px){
        .beginning--item .item-a .item-a-university {
            font-size: 1.5rem;
        }
    }

    .title-other-cycles {
            text-align: center;
            display: flex;
            justify-content: center;
            margin: 2em;
            font-family: Geogrotesque-Rg;
    }

    /**
    * Tabs
    */

    .tabs.benefits {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        max-width: 500px;
        justify-content: center;
        margin: 0 auto 4em;
    }
    }
    .tabs.benefits img {
        max-width: 300px;
    }
    .tabs.benefits label {
        order: 1;
        display: block;
        padding: 1rem 4rem;
        margin-right: 0.2rem;
        cursor: pointer;
        background: #FFF;
        font-weight: bold;
        transition: background ease 0.2s;
        color: #f4633a;
    }
    .tabs.benefits .tab {
        order: 99; 
        flex-grow: 1;
        width: 100%;
        display: none;
        padding: 1rem;
        background: #fff;
    }
    .tabs.benefits input[type="radio"] {
        display: none;
    }
    .tabs.benefits input[type="radio"]:checked + label {
        color: #fff;
        background: #f4633a;
    }
    .tabs.benefits input[type="radio"]:checked + label + .tab {
        display: block;
    }

    @media (max-width: 45em) {
    .tabs.benefits .tab,
    .tabs.benefits label {
            order: initial;
        }
    .tabs.benefits label {
            width: 100%;
            margin-right: 0;
            margin-top: 0.2rem;
        }
        .preparation__list-ul li {
            font-size: 1rem;
            margin: 1rem;
        }
        .preparation__courses-list{
            padding: 0px !important;
        }
    }

    .preparation__courses-list {
        padding-top: 40px;
    }
    .preparation__item-image{
        width: 100%;
        max-width: 320px;
    }
    </style>

<style>
      .text-info-web {
      display: block;
      }
      .text-info-web  .span {
      font-size: 10px;
      position: absolute;
      }
      .text-info-mobile {
      display: none;
      }
      .preparation__title {
      margin: 20px auto;  
      }
      .preparation__subtitle {
      margin: 20px auto;
      }
      .tab_subtitle {
      display: block;
      padding: 8px 0px 4px;
      }
      /* TAB CICLOS */
      .preparation__courses-list-ul li {
      width: 100%;
      }
      .preparation__courses-list {
      padding-top: 4em;
      }
      .main {
      margin: 0 5em 5em;  
      transition: 0.3s;
      }
      .content {
      background: #fff;
      color: #53565a;
      font-size: 1.5rem;
      font-family: "Geogrotesque-Rg";
      transition: 0.3s;
      margin-top: 1.2em
      }
      .content>div {
      display: none;
      padding: 20px 5px 5px;
      transition: 0.3s;
      }
      input {
      display: none;
      }
      label {
      display: inline-block;
      padding: 15px 80px;
      font-weight: 600;
      text-align: center;
      border-bottom: 2px solid #efefef;
      margin-left: 20px;
      margin-right: 20px;
      transition: 0.3s;
      font-size: 1.2rem
      }
      label:hover {
      cursor: pointer;
      background: #f4633a;
      color: #fff;
      border-bottom: 2px solid #f4633a;
      transition: 0.3s;
      }
      input:checked+label {
      background: #f4633a;
      color: #fff;
      border-bottom: 2px solid #f4633a;
      transition: 0.3s;
      }
      #tab1:checked~.content #content1,
      #tab2:checked~.content #content2,
      #tab3:checked~.content #content3,
      #tab4:checked~.content #content4 {
      display: block;
      transition: 0.3s;
      }
      /* TABLA LARGE */
      @media(min-width: 992px) {
         .table-rest {
         background: white;
         color: #53565a;
         border-collapse: collapse;
         font-size: 16px;
         margin: 0 auto;
         width: 100%;
         }
         #table-rest.table-rest tr:nth-child(1) th {
         border-bottom: 1px solid rgba(0, 0, 0, 0.50) !important;
         position: relative;
         }
         .table-rest thead tr th {
         border-bottom: 1px solid #53565a;
         }
         .table-rest tbody tr:nth-child(1) td {
         padding-top: 2em;
         }
         .table-rest tr th {
         
         }
         .table-rest tr th,
         .table-rest tr td {
         padding: 8px 16px;
         margin: 0 auto;
         text-align: center;
         }

         .trilce-benefits .tab {
            font-size: 1.5rem;
         }
      }
      /* TABLA SMALL */
      @media (max-width: 991px) {
         .preparation__courses-list {
            padding-top: 2em; 
            }
         label {
            font-size: 1em;
         }
         .main {
         margin: 0 auto 0em;
         width: 100%;
         }
         .content {
         margin-top: 0em;
         }
         .frequentquestions {
         padding-left: 0px;
         padding-right: 0px;
         }
         label {
         width: 90%;
         margin-left: 0em;
         margin-right: 0em;
         margin-bottom: 1em;
         }
         table.table-rest {
         font-size: 16px;
         }
         table.table-rest,
         .table-rest thead,
         .table-rest tbody,
         .table-rest th,
         .table-rest td,
         .table-rest tr {
         display: block;
         }
         .table-rest tbody tr td:nth-child(1) {
         font-weight: bold;
         }
         .table-rest thead tr {
         position: absolute;
         top: -9999px;
         left: -9999px;
         font-weight: bold;
         }
         .table-rest tr {
         margin-bottom: 2em;
         padding: 0em 1em 2em;
         }
         .table-rest tr:nth-child(2),
         .table-rest tr:nth-child(4),
         .table-rest tr:nth-child(6),
         .table-rest tr:nth-child(8),
         .table-rest tr:nth-child(10),
         .table-rest tr:nth-child(12),
         .table-rest tr:nth-child(14),
         .table-rest tr:nth-child(16),
         .table-rest tr:nth-child(18),
         .table-rest tr:nth-child(20) {
         background: #f5f5f5;
         }
         .table-rest td {
         /* Behave  like a "row" */
         border: none;
         position: relative;
         padding-left: 50%;
         margin-bottom: 0.2em;
         text-align: right;
         padding: 0.2em;
         }
         .table-rest td:before {
         /* Now like a table header */
         position: absolute;
         /* Top/left values mimic padding */
         top: 1px;
         left: 6px;
         width: 45%;
         padding-right: 10px;
         white-space: nowrap;
         text-align: left !important;
         }
         .table-rest td:nth-of-type(1):before {
         content: "Inicio";
         font-weight: bold;
         }
         .table-rest td:nth-of-type(2):before {
         content: "Fin";
         }
         .table-rest td:nth-of-type(3):before {
         content: "N° Semanas";
         }
         .table-rest td:nth-of-type(4):before {
         content: "Pago mensual (Virtual)";
         }
         .tab-sup .table-rest tr {
            padding: 1em !important;
         }
 
         }
         /* TAB SECUNDARIO */
         .trilce-benefits {
         position: relative;
         }
         .trilce-benefits .tabs_wrap {
            width: 100%;
            max-width: 850px;
         }
         .trilce-benefits label {
         border-bottom: 0px solid #efefef;
         }
         .trilce-benefits .tab {
         min-height: auto;
         font-size: 1rem;
         min-width: 18%;
         }
         .tab_check,
         .tab_content {
         display: none;
         }
         #tab_1:checked~#content_1,
         #tab_2:checked~#content_2,
         #tab_3:checked~#content_3,
         #tab_4:checked~#content_4 {
         display: block;
         }
         /*customisation bonus*/
         * {
         box-sizing: border-box;
         }
         .tabs_wrap {
         font-size: 0em;
         }
         .tabs_wrap label,
         .tabs_wrap div {
         font-size: 16px;
         }
         .tab {
         display: inline-block;
         padding: 10px 15px;
         cursor: pointer;
         }
         .tab_check:checked+.tab {
         cursor: auto;
         }
         .tab_content {
         padding: 10px 15px;
         min-height: 200px;
         }
         .trilce-benefits img {
            height: auto;
            max-width: 100%;
            width: 100%;
         }
         @media(max-width: 991px) {
         .text-info-web {
         display: none !important;
         }
         .text-info-mobile {
         display: block;
         } 
         .text-info-mobile p{
         font-size: 10px;
         margin-bottom: 1em;
         }
         td.texto-horario {
         padding-left: 12em;
         }
         .trilce-benefits .tabs_wrap {
         width: 100%;
         }
         .trilce-benefits .tab {
         min-height: 51px;
         font-size: 1rem;
         margin-top: 0px;
         margin-bottom: 0px;
         }

      }
   </style>
   
    <div class="header-double-top new_banner">
      <div class="row">
        <a href="https://www.trilce.edu.pe/l/whatsapp-escolar" target="_blank" style="width: 100%">
          <img src="/static/images/slides/banner-prep-ciclo-escolar-2024-7.png" alt="Trilce" class="version_desktop" style="width: 100%"/>
          <img src="/static/images/slides/banner-prep-ciclo-escolar-2024-7-MOBILE.png" alt="Trilce" class="version_mobile"/>
        </a>
      </div>
    </div>

    <div class="row center-xs about-container container-base py-5">
      <div class="row col-xs-12 center-xs container-base preparation__section">
          <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
              <h1 class="preparation__title">¡Nuevos Inicios!</h1>
              <!--h3 class="preparation__subtitle">Encuentra todos nuestros ciclos disponibles</h3-->
          </div>
      </div>
    </div>
	
	<div class="row col-xs-12 center-xs container-base frequentquestions tabcycles">
        <div class="main">
            <table class="table-rest">
                <thead>
                    <tr>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>N° Semanas</th>
                        <!--th>Pago mensual (Presencial)</th-->
			            <th>Pago mensual (Virtual)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19/08/2024</td>
                        <td>30/11/2024</td>
                        <td>15</td>
			            <!--td>S/ 260.00</td-->
                        <td>S/ 120.00</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-info-mobile">
                <p>(*) Algunos días la hora de inicio y culminación de clases puede variar.</p>
            </div>
        </div>
    </div>
	<div class="row col-xs-12 center-xs container-base trilce-benefits fondo_gris">
	<div class="row col-xs-12 col-sm-3 col-md-3 center-xs center-md">
	</div>
	<div class="row col-xs-12 col-sm-3 col-md-3">
      <h1 class="preparation__title titulo_conoce">¡Conoce nuestros<br>beneficios, horarios y más!</h1>
	  <a href="https://www.trilce.edu.pe/l/brochure-escolar-2024" target="_blank" class="boton_brochure">Descargar Brochure</a>
	</div>
	<div class="row col-xs-12 col-sm-4 col-md-4 center-xs center-md">
	  <img src="/static/images/academia/preparacion/banner-brochure-desktop.png" class="preparation__item-image" alt="" style="width: 320px">
	</div>
	<div class="row col-xs-12 col-sm-2 col-md-2 center-xs center-md">
	</div>
</div>
<div class="row col-xs-12 center-xs container-base trilce-benefits" style="display: none">

   <div class="tabs_wrap">

      <input type="radio" name="tab_gp_1" class="tab_check" id="tab_1" checked>
      <label class="tab" for="tab_1">
      <i class="fa fa-book"></i> Información
      </label>
      <input type="radio" name="tab_gp_1" class="tab_check" id="tab_2">
      <label class="tab" for="tab_2">
      <i class="fa fa-lightbulb-o"></i> Cursos
      </label>
      <input type="radio" name="tab_gp_1" class="tab_check" id="tab_3">
      <label class="tab" for="tab_3">
      <i class="fa fa-pencil-square"></i> Beneficios
      </label>
      <input type="radio" name="tab_gp_1" class="tab_check" id="tab_4">
      <label class="tab" for="tab_4">
      <i class="fa fa-calendar"></i> Horarios
      </label>

      <div class="tab_content" id="content_1">
         <div class="row col-xs-12 center-xs">
            <div class="container">
               <div class="row col-xs-12 start-sm preparation__courses">
                  <div class="col-xs-12 col-sm-6 preparation__courses-list animate__animated animate__fadeIn">
                        <div class="col-xs-12 col-sm-12 preparation__courses-list">
							Dirigido a estudiantes de 4to y 5to de secundaria de los colegios nacionales y particulares.
							<br><br>
							<b style="color: #f4633a;"><i class="fa fa-book"></i> Nivel de trabajo en clase</b><br>
							<ul class="preparation__list-ul ul-li-squared">
								<li>50% teoría y 50% práctica</li>
							</ul>
							<b style="color: #f4633a;"><i class="fa fa-book"></i> Duración</b><br>
							<ul class="preparation__list-ul ul-li-squared">
								<li>El primer inicio 16 de agosto.</li>
							</ul>
                        </div>
                  </div>
                  <div class="col-sm-6 xs-hide">
                     <img src="/static/images/academia/preparacion/1-cursos.png" class="preparation__item-image"
                        alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="tab_content" id="content_2">
         <div class="row col-xs-12 center-xs">
            <div class="row col-xs-12 start-sm preparation__cicles animate__animated animate__fadeIn">
				<div class="col-xs-12 col-sm-6 preparation__cicles__section">
					<b style="color: #f4633a;"><i class="fa fa-book"></i> Cursos académicos</b><br><br>
                        <ul class="preparation__list-ul ul-li-squared">
                            <li>Aritmética.</li>
							<li>Álgebra.</li>
							<li>Trigonometría.</li>
                            <li>Geometría.</li>
                            <li>Razonamiento Matemático.</li>
                            <li>Razonamiento Verbal.</li>
                            <li>Física.</li>
                            <li>Química.</li>
                        </ul>
						<b style="color: #f4633a;"><i class="fa fa-book"></i> Cursos de desarrollo y orientación al postulante</b><br><br>
                        <ul class="preparation__list-ul ul-li-squared">
                            <li>Tutoría.</li>
							<li>Asesoría psicológica.</li>
                        </ul>
				</div>
				<div class="col-sm-6 xs-hide">
					<img src="/static/images/academia/preparacion/2-ciclos.png" class="preparation__item-image" alt="">
				</div>
            </div>
         </div>
      </div>
      <div class="tab_content" id="content_3">
         <div class="row col-xs-12  center-xs">
            <div class="row col-xs-12 start-sm preparation__courses">
               <div class="col-xs-12 col-sm-6 preparation__courses-list animate__animated animate__fadeIn">
						<b style="color: #f4633a;"><i class="fa fa-book"></i> Plataformas de trabajos académicos</b><br>
						<ul class="preparation__list-ul ul-li-squared">
							<li>Acceso a los cursos en el google classroom.</li>
							<li>Clases en vivo a través del google meet.</li>
							<li>Contarás con tu correo corporativo vía Gmail.</li> 
							<li>Acceso a la intranet de la academia.</li>
						</ul>
						
						<b style="color: #f4633a;"><i class="fa fa-book"></i> Materiales y actividades académicas</b><br>
						<ul class="preparation__list-ul ul-li-squared">
							<li>Guías y prácticas para cada sesión.</li>
							<li>Exámenes semanales.</li>
							<li>Videos grabados de cada clase para tu repaso constante.</li>
						</ul>
               </div>
               <div class="col-sm-6 xs-hide">
                  <img src="/static/images/academia/preparacion/3-beneficios.png" class="preparation__item-image"
                     alt="">
               </div>
            </div>
         </div>
      </div>
      <div class="tab_content" id="content_4">
         <div class="row col-xs-12  center-xs">
               <div class="row col-xs-12 start-sm preparation__courses  animate__animated animate__fadeIn">
                  <div class="col-xs-12 col-sm-12 preparation__courses-list">
                     <img src="/static/images/horario_escolar_100221.png" class=""
                        alt="">
                  </div>
               </div>
            </div>  
      </div>
   </div>
</div>  
    
    <div class="row col-xs-12 center-xs container-base preparation__section">
        <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
            <h1 class="preparation__title preparation__title--and" style="font-weight: bold">También preparamos a nuestros alumnos para ingresar a estas universidades:</h1>
        </div>
    </div>

    <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
        <div class="row col-xs-12 col-sm-3 col-md-6 start-xs start-sm start-md beginning-container beginning-minus">

            <div class="col-xs beginning--item beginning--item--activecolors">
                <a href="/academia/preparacion-uni" class="item-a">
                    <div class="item-a-container">
                        <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}"
                            alt="Nuevos Inicios">
                        <div class="item-a-preparation"><br></div>
                        <span class="item-a-university">UNI</span>
                    </div>
                </a>
            </div>

            <div class="beginning-breakline"></div>

            <div class="col-xs beginning--item beginning--item--activecolors">
                <a href="/academia/preparacion-san-marcos" class="item-a">
                    <div class="item-a-container">
                        <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}"
                            alt="Nuevos Inicios">
                        <div class="item-a-preparation"><br /></div>
                        <span class="item-a-university">SAN MARCOS</span>
                    </div>
                </a>
            </div>

            <div class="beginning-breakline"></div>

            <div class="col-xs beginning--item beginning--item--activecolors">
                <a href="/academia/preparacion-pucp" class="item-a">
                    <div class="item-a-container">
                        <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}"
                            alt="Nuevos Inicios">
                        <div class="item-a-preparation"><br /></div>
                        <span class="item-a-university">CATÓLICA</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('academia.partials.card_bottom')
  @endsection

  @section('scripts')
      page = 'tuyorials';
    @parent
  @endsection
