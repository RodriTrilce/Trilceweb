
    <style>
    
    table.table-inner-provitional {
        border: 1px solid red;
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

        margin: 10px auto;

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
            margin-top: 2em
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
            padding: 15px 75px;
            font-weight: 600;
            text-align: center;
            border-bottom: 2px solid #efefef;
            margin-left: 20px;
            margin-right: 20px;
            transition: 0.3s;
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

        @media(min-width: 992px) {
            .table-rest {
                background: white;
                color: #53565a;
                border-collapse: collapse;
                font-size: 16px;
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
                text-transform: uppercase;
            }

            .table-rest tr th,
            .table-rest tr td {
                padding: 8px 12px;
                margin: 0 auto;
                text-align: left;
            }
        }


        @media (max-width: 991px) {
            .main {
                margin: 0 auto 0em;
                width: 100%
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
                padding: 2em 1em;
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
            content: "Pago mensual";
        }

        .table-rest td:nth-of-type(4):before {
            content: "Horario";
        }

         .table-rest td:nth-of-type(5):before {
            content: "";
        }

/*             .table-rest td:nth-of-type(6):before {
                content: "C1";
            }

            .table-rest td:nth-of-type(7):before {
                content: "C2";
            }
 */
            /*     .table-rest td:nth-of-type(8):before {
      content: "C3";
    }

    .table-rest td:nth-of-type(9):before {
      content: "C4";
    }

    .table-rest td:nth-of-type(10):before {
      content: "Pago mensual";
    }
 */
           /*  .table-rest td:nth-of-type(8):before {
                content: "Horario";
            } */
        }

        /* TAB SECUNDARIO */

        .trilce-benefits {
            position: relative;
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
    </style>
    <div class="row col-xs-12 center-xs container-base preparation__section">
        <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
            <h1 class="preparation__title">¡Estudia con los mejores!</h1>
            <h3 class="preparation__subtitle">Encuentra todos nuestros ciclos disponibles</h3>
        </div>
    </div>

    {{--@include('academia.partials.preparation.search')--}}

    <div class="row col-xs-12 center-xs container-base frequentquestions">

        <div class="main">

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">SEMESTRAL - MAÑANA <!--div class="tab_subtitle">Incorporaciones al 27 de abril</div--></label>

            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">PRIMERA OPCIÓN - TARDE <!--div class="tab_subtitle">Incorporaciones al 11 de mayo</div--></label>

            <div class="content">

                <!-- <div id="content1">
        <table class="table-rest">
          <thead>
            <tr>
              <th>Sede</th>
              <th>Turno</th>
              <th>Inicio</th>
              <th>Fin</th>
              <th>Pago Único</th>
              <th>C1</th>
              <th>C2</th>
              <th>Horario</th>
            </tr>
          </thead>
          <tbody id="contenido-primeraopcion">
          </tbody>
        </table>
      </div>

      <div id="content2">
        <table class="table-rest">
          <thead>
            <tr>
              <th>Sede</th>
              <th>Turno</th>
              <th>Inicio</th>
              <th>Fin</th>
              <th>Pago Único</th>
              <th>C1</th>
              <th>C2</th>
              <th>Horario</th>
            </tr>
          </thead>
          <tbody id="contenido-semestral">
          </tbody>
        </table>
      </div> -->


                <div id="content2">
                    <table class="table-rest">
                        <thead>
                            <th>Inicio</th>
                            <th>Fin</th>
                            <th>Pago mensual</th>
                            <th>Horario</th>
                            <!--th></th-->
                        </thead>
                        <tbody>
                            <tr>
                                <td>17 de agosto</td>
                                <td>11 de diciembre</td>
                                <td style="font-weight: bold">S/ 200.00</td>
                                <td class="texto-horario">Lunes a viernes de 8:00 a. m. a 2:00 p. m.</td>
                                <!--td>Incorporaciones al 27 de abril</td-->
                            </tr>
                        </tbody>
                    </table>
                    <!--div class="text-info-web">
                        <div class="row">
                            <div class="col-md-10">
                                <span class="span">(*) Algunos días la hora de inicio y culminación de clases puede variar.</span>
                            </div>
                        </div>
                    </div-->
                </div>

                <div id="content1">
                    <table class="table-rest">
                        <thead>
                            <tr>
                                <th>Inicio</th>
                                <th>Fin</th>
                                <th>Pago mensual</th>
                                <th>Horario</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17 de agosto</td>
                                <td>27 de noviembre</td>
                                <td style="font-weight: bold">S/ 180.00</td>
                                <td class="texto-horario">
                                    <table class="table-inner-provitional">
                                        <tbody>
                                            <tr>
                                                <td>Lunes, martes, jueves y viernes de 4:00 p. m. a 8:00 p. m.</td>
                                            </tr>
                                            <tr>
                                                <td>Miércoles de 4:00 p. m. a 5:00 p. m. (Asesorías psicológicas)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <!--td>Incorporaciones al 11 de mayo</td-->
                            </tr>
                        </tbody>
                    </table>
                    <!--div class="text-info-web">
                        <div class="row">
                            <div class="col-md-10">
                                <span class="span">(*) Algunos días la hora de inicio y culminación de clases puede variar.</span>
                            </div>
                        </div>
                    </div-->
                </div>

                

            </div>
        </div>

        <div class="text-info-mobile">
            <p>(*) Algunos días la hora de inicio y culminación de clases puede variar.</p>
        </div>

    </div>

    <div class="row col-xs-12 center-xs container-base trilce-benefits">

        <div class="tabs_wrap">

            <input type="radio" name="tab_gp_1" class="tab_check" id="tab_1" checked>
            <label class="tab" for="tab_1">
                <i class="fa fa-book"></i> Cursos
            </label>
            <input type="radio" name="tab_gp_1" class="tab_check" id="tab_2">
            <label class="tab" for="tab_2">
                <i class="fa fa-lightbulb-o"></i> Ciclos
            </label>
            <input type="radio" name="tab_gp_1" class="tab_check" id="tab_3">
            <label class="tab" for="tab_3">
                <i class="fa fa-pencil-square"></i> Beneficios
            </label>

            <div class="tab_content" id="content_1">

                <div class="row col-xs-12 center-xs">
                    <div class="row col-xs-12 start-sm preparation__courses">
                        <div class="col-xs-12 col-sm-6 preparation__courses-list">
                            <h1 class="sub-title"><strong>Ciclo Semestral</strong></h1>
                            <strong class="mt-2">Lectura</strong>
                            <ul class="ul-li-squared">
                                <li>Lectura Comprensiva e Interpretativa</li>
                                <li>Lectura Crítica</li>
                            </ul>
                            <strong class="mt-2">Redacción</strong>
                            <ul class="ul-li-squared">
                                <li>Ortografía y Puntuación</li>
                                <li>Vocabulario y Construcción Oracional</li>
                            </ul>
                            <strong class="mt-2">Matemática</strong>
                            <ul class="ul-li-squared">
                                <li>Aritmética y Estadística</li>
                                <li>Álgebra</li>
                                <li>Geometría</li>
                                <li>Trigonometría</li>
                            </ul>
                            <br><br>
                            <h1 class="sub-title"><strong> Ciclo Primera Opción</strong></h1>
                            <strong class="mt-2">Lectura</strong>
                            <ul class="ul-li-squared">
                                <li>Lectura Comprensiva e Interpretativa</li>
                                <li>Lectura Crítica</li>
                            </ul>
                            <strong class="mt-2">Redacción</strong>
                            <ul class="ul-li-squared">
                                <li>Ortografía y Puntuación</li>
                                <li>Vocabulario y Construcción Oracional</li>
                            </ul>
                            <strong class="mt-2">Matemática</strong>
                            <ul class="ul-li-squared">
                                <li>Número y operaciones</li>
                                <li>Álgebra</li>
                                <li>Geometría</li>
                                <li>Trigonometría</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 xs-hide">
                            <img src="/static/images/academia/preparacion/pucp-1-cursos.png"
                                class="preparation__item-image" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab_content" id="content_2">

                <div class="row col-xs-12 center-xs">
                    <div class="row col-xs-12 start-sm preparation__cicles">
                        <div class="col-xs-12 col-sm-6 preparation__cicles__section">
                            <p>
                                <strong class="orange">Primera Opción:</strong> Dirigido a alumnos que se encuentran en
                                5.<sup>o</sup>
                                de secundaria.
                            </p>
                            <p>
                                <strong class="orange">Semestral:</strong> Dirigido a alumnos que ya egresaron de
                                secundaria.
                            </p>
                            <p>
                                <strong class="orange">Repaso:</strong> Dirigido a alumnos que cuentan con una
                                preparación
                                previa y
                                postularán este año; es 100 % práctico.
                            </p>
                            <p>
                                <strong class="orange">Verano:</strong> Dirigido a alumnos que desean prepararse para
                                una
                                próxima
                                postulación (en julio) y a escolares que desean un avance académico.
                            </p>
                        </div>
                        <div class="col-sm-6 xs-hide">
                            <img src="/static/images/academia/preparacion/2-ciclos.png" class="preparation__item-image"
                                alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab_content" id="content_3">

                <div class="row col-xs-12  center-xs">
                    <div class="row col-xs-12 start-sm preparation__courses">
                        <div class="col-xs-12 col-sm-6 preparation__courses-list">
                            <ul class="preparation__list-ul ul-li-squared">
                                    <li>Con 40 a&ntilde;os de experiencia &nbsp;</li>
                                    <li>La mejor plana docente&nbsp;</li>
                                    <li>Acceso a la plataforma Google Classroom.</li>
                                    <li>Clases en vivo v&iacute;a Google Meet.</li>
                                    <li>Materiales virtuales</li>
                                    <li>Asesor&iacute;a psicol&oacute;gica &nbsp;</li>
                                    <li>Soporte de las plataformas virtuales</li>
                                    <li>Exigencia y disciplina</li>
                                    <li>Intranet</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 xs-hide">
                            <img src="/static/images/academia/preparacion/3-beneficios.png"
                                class="preparation__item-image" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="row col-xs-12 center-xs container-base preparation__section">
        <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
            <h1 class="preparation__title preparation__title--and">También preparamos a nuestros alumnos para ingresar a
                estas
                universidades:</h1>
        </div>
    </div>

    <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
        <div class="row col-xs-12 col-sm-3 col-md-3 start-xs start-sm start-md beginning-container beginning-minus">

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


        </div>
    </div>

    <script>
        const SERVICIO = "servicio";

        const validateType = (value, type) => typeof value === type;

        // variable que chekea si una variable tiene algo !!
        // regresa false si es nulo el valor, regresar verdadero si tiene algo
        const noIsNull = value => !!value && value !== "undefined" && value !== null;

        const objectToString = obj => {
            return !!obj && validateType(obj, "object") ? JSON.stringify(obj) : obj;
        };

        // combierte un string a objecto valido !!
        const stringToObject = str => {
            if (!noIsNull(str)) return str;
            return JSON.parse(str);
        };

        // regresa los datos del usuario !!
        const getUserStorage = () => {
            const serverItem = localStorage.getItem(SERVICIO);
            return !!serverItem ? stringToObject(serverItem) : {};
        };

        const pucp = getUserStorage();
        console.log("/*-----------------------------------------------")
        console.log("Variable PUCP: ")
        console.table(pucp)
        console.log("-----------------------------------------------*/")

        function filtro(filtro, selector) {
            const result = pucp.ACACA.filter(v => v.NIVEL_ESTUDIO_DESCRIPCION === filtro);
            console.log("filtros", filtro, selector)
            if (!!result) {
                llenado(result, selector)
            }
        }

        // Llenado de contenido en la tabla
        function llenado(items, selector) {
            const tabla = document.getElementById(selector);
            let td = "";
            const table = items.map(item => {
                td += `<tr>
          <td>${item.BLDG_DESCRIPCION}</td>
          <td class="turno">${item.TURNO}</td>
          <td>${item.FECHA_INICIO}</td>
          <td>${item.FECHA_FIN}</td>
          <td>S/ ${item.PAGO_CONTADO}</td>
          <td>S/ ${item.PAGO_CUOTA1}</td>
          <td>S/ ${item.PAGO_CUOTA2}</td>
          <td>${item.HORARIO_SEMANAL1} ${item.HORARIO_SEMANAL2}</td>
        </tr>
        `;
            });
            console.log("scope", td)
            if (!!table) {
                document.getElementById(selector).innerHTML = td;
            }
        }

        filtro('Primera Opción', 'contenido-primeraopcion');
        filtro('Semestral', 'contenido-semestral');
    </script>
    <script>
        $(".turno").text(function () {
            return $(this).text().replace("M", "Mañana");
        });
        $(".turno").text(function () {
            return $(this).text().replace("T", "Tarde");
        });
        $("td").text(function () {
            return $(this).text().replace("null", "");
        });
        $("td").text(function () {
            return $(this).text().replace("Academia", "");
        });
        $("td").text(function () {
            return $(this).text().replace("Sábado", "/ Sábado");
        });
    </script>
