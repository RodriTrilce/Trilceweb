<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Matrícula Online - Trilce Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" rel="stylesheet">
    <link href="../css/mstepper.css" rel="stylesheet">
    <link href="../css/line-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style> 
        /* VALIDACIONES */

        #num_doc_default,
        #num_doc_apo_default,
        #sede_uni_default,
        #sesion_default,
        #seccion_default,
        #seccion_uni_semestral_default{
            display: block;
        }
        #div-factura,
        #num_doc_dni,
        #num_doc_ce,
        #num_doc_apo_dni,
        #num_doc_apo_ce,
        #sede_uni_repaso,
        #sede_uni_verano,
        #sede_uni_anual,
        #sede_uni_verano,
        #sede_uni_anual,
        #sede_uni_veranoespecial,
        #sede_uni_semestral,
        #sede_uni_seleccion,
        #sede_uni_escolar,
        #sede_uni_semestral2,

        #sesion_uni_repaso,
        #seccion_uni_repaso,

        #sesion_uni_verano,
        #seccion_uni_verano,

        #sesion_uni_anual,
        #seccion_uni_anual,

        #sesion_uni_veranoespecial,
        #seccion_uni_veranoespecial, 

        #sesion_uni_semestral,
        #seccion_uni_semestral,
        #seccion_uni_semestral_default,
        #seccion_uni_semestral_manana,
        #seccion_uni_semestral_tarde,

        #sesion_uni_seleccion,
        #seccion_uni_seleccion,

        #sesion_uni_escolar,
        #seccion_uni_escolar,  

        #sesion_uni_semestral2,
        #seccion_uni_semestral2 {
            display: none;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col 6s4 m6">
                        <a href="https://www.trilce.edu.pe/academia" target="_blank" class="brand-logo left">
                            <img src="../img/logo-trilce-academia-white.svg" width="100">
                        </a>
                    </div>
                    <div class="col s8 m6">
                        <ul id="nav-mobile" class="right">
                            <li>
                                <a target="_blank" href="http://www.trilce.edu.pe/academia" >
                                    <i class="las la-home"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">
                                    <i class="lab la-whatsapp"></i>
                                </a>
                            </li>
                            <li class="text-phone">
                                <a target="_blank" href="tel:+51016198100">
                                    <i class="las la-phone"></i>
                                    <span>6198 100</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="banner">
        <div class="container">
            <div class="row">
                <h1>Matricula en linea</h1>
                <h2>¡Vacantes limitadas!</h2>
            </div>
        </div>
    </section>

    <section class="section grey lighten-5">
        <div class="container">
            <div class="row">
                <form action="" id="formulario_registro" method="post">
                    <ul data-method="GET" class="stepper horizontal linear">

                        <!-- Cliente (Alumno) -->
                        <li class="step active">

                            <div class="step-title waves-effect waves-dark">Cliente (Alumno)</div>

                            <div class="step-content">

                                <div class="row">
                                    <div class=" col s12 m6">
                                        <h3 class="orange-text">1. Datos generales del Alumno</h3>
                                    </div>
                                    <div class="col s12 m6 text-required">
                                        <p class="red-text">(*) Campos obligatorios</p>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="tipo_documento" id="tipo_documento" required>
                                            <option value="" disabled selected>Tipo de documento *</option>
                                            <option value="01">DNI</option>
                                            <option value="04">CE</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m4" id="num_doc_default">
                                        <input  name="numero_documento" onkeypress="return onlyNumberKey(event)">
                                        <label for="numero_documento">Número de documento *</label>
                                        <span class="helper-text" data-error="Digite su número de documento" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4" id="num_doc_dni">
                                        <input  name="numero_documento"  minlength=8" maxlength=8" data-length="8" type="text" class="validate" onkeypress="return onlyNumberKey(event)">
                                        <label for="numero_documento">Número de documento *</label>
                                        <span class="helper-text" data-error="Digite 8 dígitos" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4" id="num_doc_ce">
                                        <input  name="numero_documento"  minlength="9" maxlength="9" data-length="9" type="text" class="validate" onkeypress="return onlyNumberKey(event)">
                                        <label for="numero_documento">Número de documento *</label>
                                        <span class="helper-text" data-error="Digite 9 dígitos" data-success="¡Correcto!"></span>
                                    </div>

                                    <div class="input-field col s12 m4" >
                                        <input type="text" class="datepicker validate" name="fecha_nacimiento" required>
                                        <label for="fecha_nacimiento">Fecha de nacimiento *</label>
                                    </div>
                        
                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <input  name="nombres" type="text" minlength=3" maxlength="40" class="validate" required>
                                        <label for="nombres">Nombre *</label>
                                        <span class="helper-text" data-error="Digite su Nombre" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="apellido_paterno" type="text" minlength=3" maxlength="40" class="validate" required>
                                        <label for="apellido_paterno">Apellido paterno *</label>
                                        <span class="helper-text" data-error="Digite su Apellido paterno" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="apellido_materno" type="text" minlength=3" maxlength="40" class="validate">
                                        <label for="apellido_materno">Apellido materno *</label>
                                        <span class="helper-text" data-error="Digite su Apellido materno" data-success="¡Correcto!"></span>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="sexo" id="sexo" required>
                                            <option value="" disabled selected>Sexo *</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="direccion" type="text" minlength="3"  maxlength="55" data-length="55"  class="validate" required>
                                        <label for="direccion">Dirección 1 *</label>
                                        <span class="helper-text" data-error="Digite su Dirección" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="direccion_secundaria" type="text" minlength="3"  maxlength="55" data-length="55"  class="validate">
                                        <label for="direccion_secundaria">Dirección 2</label>
                                        <span class="helper-text" data-error="Digite su Dirección" data-success="¡Correcto!"></span>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="departamento" id="departamento" required>
                                            <option value="" disabled selected>Departamento *</option>
                                            <option value="01"> Amazonas</option>
                                            <option value="02"> Ancash</option>
                                            <option value="03"> Apurimac</option>
                                            <option value="04"> Arequipa</option>
                                            <option value="05"> Ayacucho</option>
                                            <option value="06"> Cajamarca</option>
                                            <option value="07"> Callao</option>
                                            <option value="08"> Cusco</option>
                                            <option value="09"> Huancavelica</option>
                                            <option value="10"> Huanuco</option>
                                            <option value="11"> Ica</option>
                                            <option value="12"> Junin</option>
                                            <option value="13"> La Libertad</option>
                                            <option value="14"> Lambayeque</option>
                                            <option value="15" selected> Lima</option>
                                            <option value="16"> Loreto</option>
                                            <option value="17"> Madre de Dios</option>
                                            <option value="18"> Moquegua</option>
                                            <option value="19"> Pasco</option>
                                            <option value="20"> Piura</option>
                                            <option value="21"> Puno</option>
                                            <option value="22"> San Martin</option>
                                            <option value="23"> Tacna</option>
                                            <option value="24"> Tumbes</option>
                                            <option value="25"> Ucayali</option>
                                            <option value="99"> Extranjero</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="provincia" id="provincia" required>
                                            <option value="" disabled selected>Provincia *</option>
                                            <option value="01">Chachapoyas</option>
                                            <option value="02">Bagua</option>
                                            <option value="03">Bongara</option>
                                            <option value="04">Condorcanqui</option>
                                            <option value="05">Luya</option>
                                            <option value="06">Rodriguez de Mendoza</option>
                                            <option value="07">Utcubamba</option>
                                            <option value="01">Huaraz</option>
                                            <option value="02">Aija</option>
                                            <option value="03">Antonio Raymondi</option>
                                            <option value="04">Asuncion</option>
                                            <option value="05">Bolognesi</option>
                                            <option value="06">Carhuaz</option>
                                            <option value="07">Carlos Fermin Fitzcarrald</option>
                                            <option value="08">Casma</option>
                                            <option value="09">Corongo</option>
                                            <option value="10">Huari</option>
                                            <option value="11">Huarmey</option>
                                            <option value="12">Huaylas</option>
                                            <option value="13">Mariscal Luzuriaga</option>
                                            <option value="14">Ocros</option>
                                            <option value="15">Pallasca</option>
                                            <option value="16">Pomabamba</option>
                                            <option value="17">Recuay</option>
                                            <option value="18">Santa</option>
                                            <option value="19">Sihuas</option>
                                            <option value="20">Yungay</option>
                                            <option value="01">Abancay</option>
                                            <option value="02">Andahuaylas</option>
                                            <option value="03">Antabamba</option>
                                            <option value="04">Aymaraes</option>
                                            <option value="05">Cotabambas</option>
                                            <option value="06">Chincheros</option>
                                            <option value="07">Grau</option>
                                            <option value="01">Arequipa</option>
                                            <option value="02">Camana</option>
                                            <option value="03">Caraveli</option>
                                            <option value="04">Castilla</option>
                                            <option value="05">Caylloma</option>
                                            <option value="06">Condesuyos</option>
                                            <option value="07">Islay</option>
                                            <option value="08">La Union</option>
                                            <option value="01">Huamanga</option>
                                            <option value="02">Cangallo</option>
                                            <option value="03">Huanca Sancos</option>
                                            <option value="04">Huanta</option>
                                            <option value="05">La Mar</option>
                                            <option value="06">Lucanas</option>
                                            <option value="07">Parinacochas</option>
                                            <option value="08">Paucar del Sara Sara</option>
                                            <option value="09">Sucre</option>
                                            <option value="10">Victor Fajardo</option>
                                            <option value="11">Vilcas Huaman</option>
                                            <option value="01">Cajamarca</option>
                                            <option value="02">Cajabamba</option>
                                            <option value="03">Celendin</option>
                                            <option value="04">Chota</option>
                                            <option value="05">Contumaza</option>
                                            <option value="06">Cutervo</option>
                                            <option value="07">Hualgayoc</option>
                                            <option value="08">Jaen</option>
                                            <option value="09">San Ignacio</option>
                                            <option value="10">San Marcos</option>
                                            <option value="11">San Miguel</option>
                                            <option value="12">San Pablo</option>
                                            <option value="13">Santa Cruz</option>
                                            <option value="01">Prov. Const. del Callao</option>
                                            <option value="01">Cusco</option>
                                            <option value="02">Acomayo</option>
                                            <option value="03">Anta</option>
                                            <option value="04">Calca</option>
                                            <option value="05">Canas</option>
                                            <option value="06">Canchis</option>
                                            <option value="07">Chumbivilcas</option>
                                            <option value="08">Espinar</option>
                                            <option value="09">La Convencion</option>
                                            <option value="10">Paruro</option>
                                            <option value="11">Paucartambo</option>
                                            <option value="12">Quispicanchi</option>
                                            <option value="13">Urubamba</option>
                                            <option value="01">Huancavelica</option>
                                            <option value="02">Acobamba</option>
                                            <option value="03">Angaraes</option>
                                            <option value="04">Castrovirreyna</option>
                                            <option value="05">Churcampa</option>
                                            <option value="06">Huaytara</option>
                                            <option value="07">Tayacaja</option>
                                            <option value="01">Huanuco</option>
                                            <option value="02">Ambo</option>
                                            <option value="03">Dos de Mayo</option>
                                            <option value="04">Huacaybamba</option>
                                            <option value="05">Huamalies</option>
                                            <option value="06">Leoncio Prado</option>
                                            <option value="07">Marañon</option>
                                            <option value="08">Pachitea</option>
                                            <option value="09">Puerto Inca</option>
                                            <option value="10">Lauricocha</option>
                                            <option value="11">Yarowilca</option>
                                            <option value="01">Ica</option>
                                            <option value="02">Chincha</option>
                                            <option value="03">Nazca</option>
                                            <option value="04">Palpa</option>
                                            <option value="05">Pisco</option>
                                            <option value="01">Huancayo</option>
                                            <option value="02">Concepcion</option>
                                            <option value="03">Chanchamayo</option>
                                            <option value="04">Jauja</option>
                                            <option value="05">Junin</option>
                                            <option value="06">Satipo</option>
                                            <option value="07">Tarma</option>
                                            <option value="08">Yauli</option>
                                            <option value="09">Chupaca</option>
                                            <option value="01">Trujillo</option>
                                            <option value="02">Ascope</option>
                                            <option value="03">Bolivar</option>
                                            <option value="04">Chepen</option>
                                            <option value="05">Julcan</option>
                                            <option value="06">Otuzco</option>
                                            <option value="07">Pacasmayo</option>
                                            <option value="08">Pataz</option>
                                            <option value="09">Sanchez Carrion</option>
                                            <option value="10">Santiago de Chuco</option>
                                            <option value="11">Gran Chimu</option>
                                            <option value="12">Viru</option>
                                            <option value="01">Chiclayo</option>
                                            <option value="02">Ferreñafe</option>
                                            <option value="03">Lambayeque</option>
                                            <option value="01" selected>Lima</option>
                                            <option value="02">Barranca</option>
                                            <option value="03">Cajatambo</option>
                                            <option value="04">Canta</option>
                                            <option value="05">Cañete</option>
                                            <option value="06">Huaral</option>
                                            <option value="07">Huarochiri</option>
                                            <option value="08">Huaura</option>
                                            <option value="09">Oyon</option>
                                            <option value="10">Yauyos</option>
                                            <option value="01">Maynas</option>
                                            <option value="02">Alto Amazonas</option>
                                            <option value="03">Loreto</option>
                                            <option value="04">Mariscal Ramon Castilla</option>
                                            <option value="05">Requena</option>
                                            <option value="06">Ucayali</option>
                                            <option value="07">Datem del Marañón</option>
                                            <option value="08">Putumayo</option>
                                            <option value="01">Tambopata</option>
                                            <option value="02">Manu</option>
                                            <option value="03">Tahuamanu</option>
                                            <option value="01">Mariscal Nieto</option>
                                            <option value="02">General Sanchez Cerro</option>
                                            <option value="03">Ilo</option>
                                            <option value="01">Pasco</option>
                                            <option value="02">Daniel Alcides Carrion</option>
                                            <option value="03">Oxapampa</option>
                                            <option value="01">Piura</option>
                                            <option value="02">Ayabaca</option>
                                            <option value="03">Huancabamba</option>
                                            <option value="04">Morropon</option>
                                            <option value="05">Paita</option>
                                            <option value="06">Sullana</option>
                                            <option value="07">Talara</option>
                                            <option value="08">Sechura</option>
                                            <option value="01">Puno</option>
                                            <option value="02">Azangaro</option>
                                            <option value="03">Carabaya</option>
                                            <option value="04">Chucuito</option>
                                            <option value="05">El Collao</option>
                                            <option value="06">Huancane</option>
                                            <option value="07">Lampa</option>
                                            <option value="08">Melgar</option>
                                            <option value="09">Moho</option>
                                            <option value="10">San Antonio de Putina</option>
                                            <option value="11">San Roman</option>
                                            <option value="12">Sandia</option>
                                            <option value="13">Yunguyo</option>
                                            <option value="01">Moyobamba</option>
                                            <option value="02">Bellavista</option>
                                            <option value="03">El Dorado</option>
                                            <option value="04">Huallaga</option>
                                            <option value="05">Lamas</option>
                                            <option value="06">Mariscal Caceres</option>
                                            <option value="07">Picota</option>
                                            <option value="08">Rioja</option>
                                            <option value="09">San Martin</option>
                                            <option value="10">Tocache</option>
                                            <option value="01">Tacna</option>
                                            <option value="02">Candarave</option>
                                            <option value="03">Jorge Basadre</option>
                                            <option value="04">Tarata</option>
                                            <option value="01">Tumbes</option>
                                            <option value="02">Contralmirante Villar</option>
                                            <option value="03">Zarumilla</option>
                                            <option value="01">Coronel Portillo</option>
                                            <option value="02">Atalaya</option>
                                            <option value="03">Padre Abad</option>
                                            <option value="04">Purus</option>
                                            <option value="99">Extranjero</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="distrito" id="distrito" required>
                                            <option value="" disabled selected>Distrito *</option>
                                            <option value="01">Chachapoyas</option>
                                            <option value="02">Asuncion</option>
                                            <option value="03">Balsas</option>
                                            <option value="04">Cheto</option>
                                            <option value="05">Chiliquin</option>
                                            <option value="06">Chuquibamba</option>
                                            <option value="07">Granada</option>
                                            <option value="08">Huancas</option>
                                            <option value="09">La Jalca</option>
                                            <option value="10">Leimebamba</option>
                                            <option value="11">Levanto</option>
                                            <option value="12">Magdalena</option>
                                            <option value="13">Mariscal Castilla</option>
                                            <option value="14">Molinopampa</option>
                                            <option value="15">Montevideo</option>
                                            <option value="16">Olleros</option>
                                            <option value="17">Quinjalca</option>
                                            <option value="18">San Francisco de Daguas</option>
                                            <option value="19">San Isidro de Maino</option>
                                            <option value="20">Soloco</option>
                                            <option value="21">Sonche</option>
                                            <option value="01">Bagua</option>
                                            <option value="02">Aramango</option>
                                            <option value="03">Copallin</option>
                                            <option value="04">El Parco</option>
                                            <option value="05">Imaza</option>
                                            <option value="06">La Peca</option>
                                            <option value="01">Jumbilla</option>
                                            <option value="02">Chisquilla</option>
                                            <option value="03">Churuja</option>
                                            <option value="04">Corosha</option>
                                            <option value="05">Cuispes</option>
                                            <option value="06">Florida</option>
                                            <option value="07">Jazán</option>
                                            <option value="08">Recta</option>
                                            <option value="09">San Carlos</option>
                                            <option value="10">Shipasbamba</option>
                                            <option value="11">Valera</option>
                                            <option value="12">Yambrasbamba</option>
                                            <option value="01">Nieva</option>
                                            <option value="02">El Cenepa</option>
                                            <option value="03">Rio Santiago</option>
                                            <option value="01">Lamud</option>
                                            <option value="02">Camporredondo</option>
                                            <option value="03">Cocabamba</option>
                                            <option value="04">Colcamar</option>
                                            <option value="05">Conila</option>
                                            <option value="06">Inguilpata</option>
                                            <option value="07">Longuita</option>
                                            <option value="08">Lonya Chico</option>
                                            <option value="09">Luya</option>
                                            <option value="10">Luya Viejo</option>
                                            <option value="11">Maria</option>
                                            <option value="12">Ocalli</option>
                                            <option value="13">Ocumal</option>
                                            <option value="14">Pisuquia</option>
                                            <option value="15">Providencia</option>
                                            <option value="16">San Cristobal</option>
                                            <option value="17">San Francisco del Yeso</option>
                                            <option value="18">San Jeronimo</option>
                                            <option value="19">San Juan de Lopecancha</option>
                                            <option value="20">Santa Catalina</option>
                                            <option value="21">Santo Tomas</option>
                                            <option value="22">Tingo</option>
                                            <option value="23">Trita</option>
                                            <option value="01">San Nicolas</option>
                                            <option value="02">Chirimoto</option>
                                            <option value="03">Cochamal</option>
                                            <option value="04">Huambo</option>
                                            <option value="05">Limabamba</option>
                                            <option value="06">Longar</option>
                                            <option value="07">Mariscal Benavides</option>
                                            <option value="08">Milpuc</option>
                                            <option value="09">Omia</option>
                                            <option value="10">Santa Rosa</option>
                                            <option value="11">Totora</option>
                                            <option value="12">Vista Alegre</option>
                                            <option value="01">Bagua Grande</option>
                                            <option value="02">Cajaruro</option>
                                            <option value="03">Cumba</option>
                                            <option value="04">El Milagro</option>
                                            <option value="05">Jamalca</option>
                                            <option value="06">Lonya Grande</option>
                                            <option value="07">Yamon</option>
                                            <option value="01">Huaraz</option>
                                            <option value="02">Cochabamba</option>
                                            <option value="03">Colcabamba</option>
                                            <option value="04">Huanchay</option>
                                            <option value="05">Independencia</option>
                                            <option value="06">Jangas</option>
                                            <option value="07">La Libertad</option>
                                            <option value="08">Olleros</option>
                                            <option value="09">Pampas</option>
                                            <option value="10">Pariacoto</option>
                                            <option value="11">Pira</option>
                                            <option value="12">Tarica</option>
                                            <option value="01">Aija</option>
                                            <option value="02">Coris</option>
                                            <option value="03">Huacllan</option>
                                            <option value="04">La Merced</option>
                                            <option value="05">Succha</option>
                                            <option value="01">Llamellin</option>
                                            <option value="02">Aczo</option>
                                            <option value="03">Chaccho</option>
                                            <option value="04">Chingas</option>
                                            <option value="05">Mirgas</option>
                                            <option value="06">San Juan de Rontoy</option>
                                            <option value="01">Chacas</option>
                                            <option value="02">Acochaca</option>
                                            <option value="01">Chiquian</option>
                                            <option value="02">Abelardo Pardo Lezameta</option>
                                            <option value="03">Antonio Raymondi</option>
                                            <option value="04">Aquia</option>
                                            <option value="05">Cajacay</option>
                                            <option value="06">Canis</option>
                                            <option value="07">Colquioc</option>
                                            <option value="08">Huallanca</option>
                                            <option value="09">Huasta</option>
                                            <option value="10">Huayllacayan</option>
                                            <option value="11">La Primavera</option>
                                            <option value="12">Mangas</option>
                                            <option value="13">Pacllon</option>
                                            <option value="14">San Miguel de Corpanqui</option>
                                            <option value="15">Ticllos</option>
                                            <option value="01">Carhuaz</option>
                                            <option value="02">Acopampa</option>
                                            <option value="03">Amashca</option>
                                            <option value="04">Anta</option>
                                            <option value="05">Ataquero</option>
                                            <option value="06">Marcara</option>
                                            <option value="07">Pariahuanca</option>
                                            <option value="08">San Miguel de Aco</option>
                                            <option value="09">Shilla</option>
                                            <option value="10">Tinco</option>
                                            <option value="11">Yungar</option>
                                            <option value="01">San Luis</option>
                                            <option value="02">San Nicolas</option>
                                            <option value="03">Yauya</option>
                                            <option value="01">Casma</option>
                                            <option value="02">Buena Vista Alta</option>
                                            <option value="03">Comandante Noel</option>
                                            <option value="04">Yautan</option>
                                            <option value="01">Corongo</option>
                                            <option value="02">Aco</option>
                                            <option value="03">Bambas</option>
                                            <option value="04">Cusca</option>
                                            <option value="05">La Pampa</option>
                                            <option value="06">Yanac</option>
                                            <option value="07">Yupan</option>
                                            <option value="01">Huari</option>
                                            <option value="02">Anra</option>
                                            <option value="03">Cajay</option>
                                            <option value="04">Chavin de Huantar</option>
                                            <option value="05">Huacachi</option>
                                            <option value="06">Huacchis</option>
                                            <option value="07">Huachis</option>
                                            <option value="08">Huantar</option>
                                            <option value="09">Masin</option>
                                            <option value="10">Paucas</option>
                                            <option value="11">Ponto</option>
                                            <option value="12">Rahuapampa</option>
                                            <option value="13">Rapayan</option>
                                            <option value="14">San Marcos</option>
                                            <option value="15">San Pedro de Chana</option>
                                            <option value="16">Uco</option>
                                            <option value="01">Huarmey</option>
                                            <option value="02">Cochapeti</option>
                                            <option value="03">Culebras</option>
                                            <option value="04">Huayan</option>
                                            <option value="05">Malvas</option>
                                            <option value="01">Caraz</option>
                                            <option value="02">Huallanca</option>
                                            <option value="03">Huata</option>
                                            <option value="04">Huaylas</option>
                                            <option value="05">Mato</option>
                                            <option value="06">Pamparomas</option>
                                            <option value="07">Pueblo Libre</option>
                                            <option value="08">Santa Cruz</option>
                                            <option value="09">Santo Toribio</option>
                                            <option value="10">Yuracmarca</option>
                                            <option value="01">Piscobamba</option>
                                            <option value="02">Casca</option>
                                            <option value="03">Eleazar Guzman Barron</option>
                                            <option value="04">Fidel Olivas Escudero</option>
                                            <option value="05">Llama</option>
                                            <option value="06">Llumpa</option>
                                            <option value="07">Lucma</option>
                                            <option value="08">Musga</option>
                                            <option value="01">Ocros</option>
                                            <option value="02">Acas</option>
                                            <option value="03">Cajamarquilla</option>
                                            <option value="04">Carhuapampa</option>
                                            <option value="05">Cochas</option>
                                            <option value="06">Congas</option>
                                            <option value="07">Llipa</option>
                                            <option value="08">San Cristobal de Rajan</option>
                                            <option value="09">San Pedro</option>
                                            <option value="10">Santiago de Chilcas</option>
                                            <option value="01">Cabana</option>
                                            <option value="02">Bolognesi</option>
                                            <option value="03">Conchucos</option>
                                            <option value="04">Huacaschuque</option>
                                            <option value="05">Huandoval</option>
                                            <option value="06">Lacabamba</option>
                                            <option value="07">Llapo</option>
                                            <option value="08">Pallasca</option>
                                            <option value="09">Pampas</option>
                                            <option value="10">Santa Rosa</option>
                                            <option value="11">Tauca</option>
                                            <option value="01">Pomabamba</option>
                                            <option value="02">Huayllan</option>
                                            <option value="03">Parobamba</option>
                                            <option value="04">Quinuabamba</option>
                                            <option value="01">Recuay</option>
                                            <option value="02">Catac</option>
                                            <option value="03">Cotaparaco</option>
                                            <option value="04">Huayllapampa</option>
                                            <option value="05">Llacllin</option>
                                            <option value="06">Marca</option>
                                            <option value="07">Pampas Chico</option>
                                            <option value="08">Pararin</option>
                                            <option value="09">Tapacocha</option>
                                            <option value="10">Ticapampa</option>
                                            <option value="01">Chimbote</option>
                                            <option value="02">Caceres del Peru</option>
                                            <option value="03">Coishco</option>
                                            <option value="04">Macate</option>
                                            <option value="05">Moro</option>
                                            <option value="06">Nepeña</option>
                                            <option value="07">Samanco</option>
                                            <option value="08">Santa</option>
                                            <option value="09">Nuevo Chimbote</option>
                                            <option value="01">Sihuas</option>
                                            <option value="02">Acobamba</option>
                                            <option value="03">Alfonso Ugarte</option>
                                            <option value="04">Cashapampa</option>
                                            <option value="05">Chingalpo</option>
                                            <option value="06">Huayllabamba</option>
                                            <option value="07">Quiches</option>
                                            <option value="08">Ragash</option>
                                            <option value="09">San Juan</option>
                                            <option value="10">Sicsibamba</option>
                                            <option value="01">Yungay</option>
                                            <option value="02">Cascapara</option>
                                            <option value="03">Mancos</option>
                                            <option value="04">Matacoto</option>
                                            <option value="05">Quillo</option>
                                            <option value="06">Ranrahirca</option>
                                            <option value="07">Shupluy</option>
                                            <option value="08">Yanama</option>
                                            <option value="01">Abancay</option>
                                            <option value="02">Chacoche</option>
                                            <option value="03">Circa</option>
                                            <option value="04">Curahuasi</option>
                                            <option value="05">Huanipaca</option>
                                            <option value="06">Lambrama</option>
                                            <option value="07">Pichirhua</option>
                                            <option value="08">San Pedro de Cachora</option>
                                            <option value="09">Tamburco</option>
                                            <option value="01">Andahuaylas</option>
                                            <option value="02">Andarapa</option>
                                            <option value="03">Chiara</option>
                                            <option value="04">Huancarama</option>
                                            <option value="05">Huancaray</option>
                                            <option value="06">Huayana</option>
                                            <option value="07">Kishuara</option>
                                            <option value="08">Pacobamba</option>
                                            <option value="09">Pacucha</option>
                                            <option value="10">Pampachiri</option>
                                            <option value="11">Pomacocha</option>
                                            <option value="12">San Antonio de Cachi</option>
                                            <option value="13">San Jeronimo</option>
                                            <option value="14">San Miguel de Chaccrampa</option>
                                            <option value="15">Santa Maria de Chicmo</option>
                                            <option value="16">Talavera</option>
                                            <option value="17">Tumay Huaraca</option>
                                            <option value="18">Turpo</option>
                                            <option value="19">Kaquiabamba</option>
                                            <option value="01">Antabamba</option>
                                            <option value="02">El Oro</option>
                                            <option value="03">Huaquirca</option>
                                            <option value="04">Juan Espinoza Medrano</option>
                                            <option value="05">Oropesa</option>
                                            <option value="06">Pachaconas</option>
                                            <option value="07">Sabaino</option>
                                            <option value="01">Chalhuanca</option>
                                            <option value="02">Capaya</option>
                                            <option value="03">Caraybamba</option>
                                            <option value="04">Chapimarca</option>
                                            <option value="05">Colcabamba</option>
                                            <option value="06">Cotaruse</option>
                                            <option value="07">Huayllo</option>
                                            <option value="08">Justo Apu Sahuaraura</option>
                                            <option value="09">Lucre</option>
                                            <option value="10">Pocohuanca</option>
                                            <option value="11">San Juan de Chacña</option>
                                            <option value="12">Sañayca</option>
                                            <option value="13">Soraya</option>
                                            <option value="14">Tapairihua</option>
                                            <option value="15">Tintay</option>
                                            <option value="16">Toraya</option>
                                            <option value="17">Yanaca</option>
                                            <option value="01">Tambobamba</option>
                                            <option value="02">Cotabambas</option>
                                            <option value="03">Coyllurqui</option>
                                            <option value="04">Haquira</option>
                                            <option value="05">Mara</option>
                                            <option value="06">Challhuahuacho</option>
                                            <option value="01">Chincheros</option>
                                            <option value="02">Anco-Huallo</option>
                                            <option value="03">Cocharcas</option>
                                            <option value="04">Huaccana</option>
                                            <option value="05">Ocobamba</option>
                                            <option value="06">Ongoy</option>
                                            <option value="07">Uranmarca</option>
                                            <option value="08">Ranracancha</option>
                                            <option value="01">Chuquibambilla</option>
                                            <option value="02">Curpahuasi</option>
                                            <option value="03">Gamarra</option>
                                            <option value="04">Huayllati</option>
                                            <option value="05">Mamara</option>
                                            <option value="06">Micaela Bastidas</option>
                                            <option value="07">Pataypampa</option>
                                            <option value="08">Progreso</option>
                                            <option value="09">San Antonio</option>
                                            <option value="10">Santa Rosa</option>
                                            <option value="11">Turpay</option>
                                            <option value="12">Vilcabamba</option>
                                            <option value="13">Virundo</option>
                                            <option value="14">Curasco</option>
                                            <option value="01">Arequipa</option>
                                            <option value="02">Alto Selva Alegre</option>
                                            <option value="03">Cayma</option>
                                            <option value="04">Cerro Colorado</option>
                                            <option value="05">Characato</option>
                                            <option value="06">Chiguata</option>
                                            <option value="07">Jacobo Hunter</option>
                                            <option value="08">La Joya</option>
                                            <option value="09">Mariano Melgar</option>
                                            <option value="10">Miraflores</option>
                                            <option value="11">Mollebaya</option>
                                            <option value="12">Paucarpata</option>
                                            <option value="13">Pocsi</option>
                                            <option value="14">Polobaya</option>
                                            <option value="15">Quequeña</option>
                                            <option value="16">Sabandia</option>
                                            <option value="17">Sachaca</option>
                                            <option value="18">San Juan de Siguas</option>
                                            <option value="19">San Juan de Tarucani</option>
                                            <option value="20">Santa Isabel de Siguas</option>
                                            <option value="21">Santa Rita de Siguas</option>
                                            <option value="22">Socabaya</option>
                                            <option value="23">Tiabaya</option>
                                            <option value="24">Uchumayo</option>
                                            <option value="25">Vitor</option>
                                            <option value="26">Yanahuara</option>
                                            <option value="27">Yarabamba</option>
                                            <option value="28">Yura</option>
                                            <option value="29">Jose Luis Bustamante y Rivero</option>
                                            <option value="01">Camana</option>
                                            <option value="02">Jose Maria Quimper</option>
                                            <option value="03">Mariano Nicolas Valcarcel</option>
                                            <option value="04">Mariscal Caceres</option>
                                            <option value="05">Nicolas de Pierola</option>
                                            <option value="06">Ocoña</option>
                                            <option value="07">Quilca</option>
                                            <option value="08">Samuel Pastor</option>
                                            <option value="01">Caraveli</option>
                                            <option value="02">Acari</option>
                                            <option value="03">Atico</option>
                                            <option value="04">Atiquipa</option>
                                            <option value="05">Bella Union</option>
                                            <option value="06">Cahuacho</option>
                                            <option value="07">Chala</option>
                                            <option value="08">Chaparra</option>
                                            <option value="09">Huanuhuanu</option>
                                            <option value="10">Jaqui</option>
                                            <option value="11">Lomas</option>
                                            <option value="12">Quicacha</option>
                                            <option value="13">Yauca</option>
                                            <option value="01">Aplao</option>
                                            <option value="02">Andagua</option>
                                            <option value="03">Ayo</option>
                                            <option value="04">Chachas</option>
                                            <option value="05">Chilcaymarca</option>
                                            <option value="06">Choco</option>
                                            <option value="07">Huancarqui</option>
                                            <option value="08">Machaguay</option>
                                            <option value="09">Orcopampa</option>
                                            <option value="10">Pampacolca</option>
                                            <option value="11">Tipan</option>
                                            <option value="12">Uñon</option>
                                            <option value="13">Uraca</option>
                                            <option value="14">Viraco</option>
                                            <option value="01">Chivay</option>
                                            <option value="02">Achoma</option>
                                            <option value="03">Cabanaconde</option>
                                            <option value="04">Callalli</option>
                                            <option value="05">Caylloma</option>
                                            <option value="06">Coporaque</option>
                                            <option value="07">Huambo</option>
                                            <option value="08">Huanca</option>
                                            <option value="09">Ichupampa</option>
                                            <option value="10">Lari</option>
                                            <option value="11">Lluta</option>
                                            <option value="12">Maca</option>
                                            <option value="13">Madrigal</option>
                                            <option value="14">San Antonio de Chuca</option>
                                            <option value="15">Sibayo</option>
                                            <option value="16">Tapay</option>
                                            <option value="17">Tisco</option>
                                            <option value="18">Tuti</option>
                                            <option value="19">Yanque</option>
                                            <option value="20">Majes</option>
                                            <option value="01">Chuquibamba</option>
                                            <option value="02">Andaray</option>
                                            <option value="03">Cayarani</option>
                                            <option value="04">Chichas</option>
                                            <option value="05">Iray</option>
                                            <option value="06">Rio Grande</option>
                                            <option value="07">Salamanca</option>
                                            <option value="08">Yanaquihua</option>
                                            <option value="01">Mollendo</option>
                                            <option value="02">Cocachacra</option>
                                            <option value="03">Dean Valdivia</option>
                                            <option value="04">Islay</option>
                                            <option value="05">Mejia</option>
                                            <option value="06">Punta de Bombon</option>
                                            <option value="01">Cotahuasi</option>
                                            <option value="02">Alca</option>
                                            <option value="03">Charcana</option>
                                            <option value="04">Huaynacotas</option>
                                            <option value="05">Pampamarca</option>
                                            <option value="06">Puyca</option>
                                            <option value="07">Quechualla</option>
                                            <option value="08">Sayla</option>
                                            <option value="09">Tauria</option>
                                            <option value="10">Tomepampa</option>
                                            <option value="11">Toro</option>
                                            <option value="01">Ayacucho</option>
                                            <option value="02">Acocro</option>
                                            <option value="03">Acos Vinchos</option>
                                            <option value="04">Carmen Alto</option>
                                            <option value="05">Chiara</option>
                                            <option value="06">Ocros</option>
                                            <option value="07">Pacaycasa</option>
                                            <option value="08">Quinua</option>
                                            <option value="09">San Jose de Ticllas</option>
                                            <option value="10">San Juan Bautista</option>
                                            <option value="11">Santiago de Pischa</option>
                                            <option value="12">Socos</option>
                                            <option value="13">Tambillo</option>
                                            <option value="14">Vinchos</option>
                                            <option value="15">Jesús Nazareno</option>
                                            <option value="16">Andrés Avelino Cáceres Dorregay</option>
                                            <option value="01">Cangallo</option>
                                            <option value="02">Chuschi</option>
                                            <option value="03">Los Morochucos</option>
                                            <option value="04">Maria Parado de Bellido</option>
                                            <option value="05">Paras</option>
                                            <option value="06">Totos</option>
                                            <option value="01">Sancos</option>
                                            <option value="02">Carapo</option>
                                            <option value="03">Sacsamarca</option>
                                            <option value="04">Santiago de Lucanamarca</option>
                                            <option value="01">Huanta</option>
                                            <option value="02">Ayahuanco</option>
                                            <option value="03">Huamanguilla</option>
                                            <option value="04">Iguain</option>
                                            <option value="05">Luricocha</option>
                                            <option value="06">Santillana</option>
                                            <option value="07">Sivia</option>
                                            <option value="08">Llochegua</option>
                                            <option value="09">Canayre</option>
                                            <option value="10">Uchuraccay</option>
                                            <option value="11">Pucacolpa</option>
                                            <option value="01">San Miguel</option>
                                            <option value="02">Anco</option>
                                            <option value="03">Ayna</option>
                                            <option value="04">Chilcas</option>
                                            <option value="05">Chungui</option>
                                            <option value="06">Luis Carranza</option>
                                            <option value="07">Santa Rosa</option>
                                            <option value="08">Tambo</option>
                                            <option value="09">Samugari</option>
                                            <option value="10">Anchihuay</option>
                                            <option value="01">Puquio</option>
                                            <option value="02">Aucara</option>
                                            <option value="03">Cabana</option>
                                            <option value="04">Carmen Salcedo</option>
                                            <option value="05">Chaviña</option>
                                            <option value="06">Chipao</option>
                                            <option value="07">Huac-Huas</option>
                                            <option value="08">Laramate</option>
                                            <option value="09">Leoncio Prado</option>
                                            <option value="10">Llauta</option>
                                            <option value="11">Lucanas</option>
                                            <option value="12">Ocaña</option>
                                            <option value="13">Otoca</option>
                                            <option value="14">Saisa</option>
                                            <option value="15">San Cristobal</option>
                                            <option value="16">San Juan</option>
                                            <option value="17">San Pedro</option>
                                            <option value="18">San Pedro de Palco</option>
                                            <option value="19">Sancos</option>
                                            <option value="20">Santa Ana de Huaycahuacho</option>
                                            <option value="21">Santa Lucia</option>
                                            <option value="01">Coracora</option>
                                            <option value="02">Chumpi</option>
                                            <option value="03">Coronel Castañeda</option>
                                            <option value="04">Pacapausa</option>
                                            <option value="05">Pullo</option>
                                            <option value="06">Puyusca</option>
                                            <option value="07">San Francisco de Ravacayco</option>
                                            <option value="08">Upahuacho</option>
                                            <option value="01">Pausa</option>
                                            <option value="02">Colta</option>
                                            <option value="03">Corculla</option>
                                            <option value="04">Lampa</option>
                                            <option value="05">Marcabamba</option>
                                            <option value="06">Oyolo</option>
                                            <option value="07">Pararca</option>
                                            <option value="08">San Javier de Alpabamba</option>
                                            <option value="09">San Jose de Ushua</option>
                                            <option value="10">Sara Sara</option>
                                            <option value="01">Querobamba</option>
                                            <option value="02">Belen</option>
                                            <option value="03">Chalcos</option>
                                            <option value="04">Chilcayoc</option>
                                            <option value="05">Huacaña</option>
                                            <option value="06">Morcolla</option>
                                            <option value="07">Paico</option>
                                            <option value="08">San Pedro de Larcay</option>
                                            <option value="09">San Salvador de Quije</option>
                                            <option value="10">Santiago de Paucaray</option>
                                            <option value="11">Soras</option>
                                            <option value="01">Huancapi</option>
                                            <option value="02">Alcamenca</option>
                                            <option value="03">Apongo</option>
                                            <option value="04">Asquipata</option>
                                            <option value="05">Canaria</option>
                                            <option value="06">Cayara</option>
                                            <option value="07">Colca</option>
                                            <option value="08">Huamanquiquia</option>
                                            <option value="09">Huancaraylla</option>
                                            <option value="10">Huaya</option>
                                            <option value="11">Sarhua</option>
                                            <option value="12">Vilcanchos</option>
                                            <option value="01">Vilcas Huaman</option>
                                            <option value="02">Accomarca</option>
                                            <option value="03">Carhuanca</option>
                                            <option value="04">Concepcion</option>
                                            <option value="05">Huambalpa</option>
                                            <option value="06">Independencia</option>
                                            <option value="07">Saurama</option>
                                            <option value="08">Vischongo</option>
                                            <option value="01">Cajamarca</option>
                                            <option value="02">Asuncion</option>
                                            <option value="03">Chetilla</option>
                                            <option value="04">Cospan</option>
                                            <option value="05">Encañada</option>
                                            <option value="06">Jesus</option>
                                            <option value="07">Llacanora</option>
                                            <option value="08">Los Baños del Inca</option>
                                            <option value="09">Magdalena</option>
                                            <option value="10">Matara</option>
                                            <option value="11">Namora</option>
                                            <option value="12">San Juan</option>
                                            <option value="01">Cajabamba</option>
                                            <option value="02">Cachachi</option>
                                            <option value="03">Condebamba</option>
                                            <option value="04">Sitacocha</option>
                                            <option value="01">Celendin</option>
                                            <option value="02">Chumuch</option>
                                            <option value="03">Cortegana</option>
                                            <option value="04">Huasmin</option>
                                            <option value="05">Jorge Chavez</option>
                                            <option value="06">Jose Galvez</option>
                                            <option value="07">Miguel Iglesias</option>
                                            <option value="08">Oxamarca</option>
                                            <option value="09">Sorochuco</option>
                                            <option value="10">Sucre</option>
                                            <option value="11">Utco</option>
                                            <option value="12">La Libertad de Pallan</option>
                                            <option value="01">Chota</option>
                                            <option value="02">Anguia</option>
                                            <option value="03">Chadin</option>
                                            <option value="04">Chiguirip</option>
                                            <option value="05">Chimban</option>
                                            <option value="06">Choropampa</option>
                                            <option value="07">Cochabamba</option>
                                            <option value="08">Conchan</option>
                                            <option value="09">Huambos</option>
                                            <option value="10">Lajas</option>
                                            <option value="11">Llama</option>
                                            <option value="12">Miracosta</option>
                                            <option value="13">Paccha</option>
                                            <option value="14">Pion</option>
                                            <option value="15">Querocoto</option>
                                            <option value="16">San Juan de Licupis</option>
                                            <option value="17">Tacabamba</option>
                                            <option value="18">Tocmoche</option>
                                            <option value="19">Chalamarca</option>
                                            <option value="01">Contumaza</option>
                                            <option value="02">Chilete</option>
                                            <option value="03">Cupisnique</option>
                                            <option value="04">Guzmango</option>
                                            <option value="05">San Benito</option>
                                            <option value="06">Santa Cruz de Toled</option>
                                            <option value="07">Tantarica</option>
                                            <option value="08">Yonan</option>
                                            <option value="01">Cutervo</option>
                                            <option value="02">Callayuc</option>
                                            <option value="03">Choros</option>
                                            <option value="04">Cujillo</option>
                                            <option value="05">La Ramada</option>
                                            <option value="06">Pimpingos</option>
                                            <option value="07">Querocotillo</option>
                                            <option value="08">San Andres de Cutervo</option>
                                            <option value="09">San Juan de Cutervo</option>
                                            <option value="10">San Luis de Lucma</option>
                                            <option value="11">Santa Cruz</option>
                                            <option value="12">Santo Domingo de la Capilla</option>
                                            <option value="13">Santo Tomas</option>
                                            <option value="14">Socota</option>
                                            <option value="15">Toribio Casanova</option>
                                            <option value="01">Bambamarca</option>
                                            <option value="02">Chugur</option>
                                            <option value="03">Hualgayoc</option>
                                            <option value="01">Jaen</option>
                                            <option value="02">Bellavista</option>
                                            <option value="03">Chontali</option>
                                            <option value="04">Colasay</option>
                                            <option value="05">Huabal</option>
                                            <option value="06">Las Pirias</option>
                                            <option value="07">Pomahuaca</option>
                                            <option value="08">Pucara</option>
                                            <option value="09">Sallique</option>
                                            <option value="10">San Felipe</option>
                                            <option value="11">San Jose del Alto</option>
                                            <option value="12">Santa Rosa</option>
                                            <option value="01">San Ignacio</option>
                                            <option value="02">Chirinos</option>
                                            <option value="03">Huarango</option>
                                            <option value="04">La Coipa</option>
                                            <option value="05">Namballe</option>
                                            <option value="06">San Jose de Lourdes</option>
                                            <option value="07">Tabaconas</option>
                                            <option value="01">Pedro Galvez</option>
                                            <option value="02">Chancay</option>
                                            <option value="03">Eduardo Villanueva</option>
                                            <option value="04">Gregorio Pita</option>
                                            <option value="05">Ichocan</option>
                                            <option value="06">Jose Manuel Quiroz</option>
                                            <option value="07">Jose Sabogal</option>
                                            <option value="01">San Miguel</option>
                                            <option value="02">Bolivar</option>
                                            <option value="03">Calquis</option>
                                            <option value="04">Catilluc</option>
                                            <option value="05">El Prado</option>
                                            <option value="06">La Florida</option>
                                            <option value="07">Llapa</option>
                                            <option value="08">Nanchoc</option>
                                            <option value="09">Niepos</option>
                                            <option value="10">San Gregorio</option>
                                            <option value="11">San Silvestre de Cochan</option>
                                            <option value="12">Tongod</option>
                                            <option value="13">Union Agua Blanca</option>
                                            <option value="01">San Pablo</option>
                                            <option value="02">San Bernardino</option>
                                            <option value="03">San Luis</option>
                                            <option value="04">Tumbaden</option>
                                            <option value="01">Santa Cruz</option>
                                            <option value="02">Andabamba</option>
                                            <option value="03">Catache</option>
                                            <option value="04">Chancaybaños</option>
                                            <option value="05">La Esperanza</option>
                                            <option value="06">Ninabamba</option>
                                            <option value="07">Pulan</option>
                                            <option value="08">Saucepampa</option>
                                            <option value="09">Sexi</option>
                                            <option value="10">Uticyacu</option>
                                            <option value="11">Yauyucan</option>
                                            <option value="01">Callao</option>
                                            <option value="02">Bellavista</option>
                                            <option value="03">Carmen de la Legua Reynoso</option>
                                            <option value="04">La Perla</option>
                                            <option value="05">La Punta</option>
                                            <option value="06">Ventanilla</option>
                                            <option value="07">Mi Perú</option>
                                            <option value="01">Cusco</option>
                                            <option value="02">Ccorca</option>
                                            <option value="03">Poroy</option>
                                            <option value="04">San Jeronimo</option>
                                            <option value="05">San Sebastian</option>
                                            <option value="06">Santiago</option>
                                            <option value="07">Saylla</option>
                                            <option value="08">Wanchaq</option>
                                            <option value="01">Acomayo</option>
                                            <option value="02">Acopia</option>
                                            <option value="03">Acos</option>
                                            <option value="04">Mosoc Llacta</option>
                                            <option value="05">Pomacanchi</option>
                                            <option value="06">Rondocan</option>
                                            <option value="07">Sangarara</option>
                                            <option value="01">Anta</option>
                                            <option value="02">Ancahuasi</option>
                                            <option value="03">Cachimayo</option>
                                            <option value="04">Chinchaypujio</option>
                                            <option value="05">Huarocondo</option>
                                            <option value="06">Limatambo</option>
                                            <option value="07">Mollepata</option>
                                            <option value="08">Pucyura</option>
                                            <option value="09">Zurite</option>
                                            <option value="01">Calca</option>
                                            <option value="02">Coya</option>
                                            <option value="03">Lamay</option>
                                            <option value="04">Lares</option>
                                            <option value="05">Pisac</option>
                                            <option value="06">San Salvador</option>
                                            <option value="07">Taray</option>
                                            <option value="08">Yanatile</option>
                                            <option value="01">Yanaoca</option>
                                            <option value="02">Checca</option>
                                            <option value="03">Kunturkanki</option>
                                            <option value="04">Langui</option>
                                            <option value="05">Layo</option>
                                            <option value="06">Pampamarca</option>
                                            <option value="07">Quehue</option>
                                            <option value="08">Tupac Amaru</option>
                                            <option value="01">Sicuani</option>
                                            <option value="02">Checacupe</option>
                                            <option value="03">Combapata</option>
                                            <option value="04">Marangani</option>
                                            <option value="05">Pitumarca</option>
                                            <option value="06">San Pablo</option>
                                            <option value="07">San Pedro</option>
                                            <option value="08">Tinta</option>
                                            <option value="01">Santo Tomas</option>
                                            <option value="02">Capacmarca</option>
                                            <option value="03">Chamaca</option>
                                            <option value="04">Colquemarca</option>
                                            <option value="05">Livitaca</option>
                                            <option value="06">Llusco</option>
                                            <option value="07">Quiñota</option>
                                            <option value="08">Velille</option>
                                            <option value="01">Espinar</option>
                                            <option value="02">Condoroma</option>
                                            <option value="03">Coporaque</option>
                                            <option value="04">Ocoruro</option>
                                            <option value="05">Pallpata</option>
                                            <option value="06">Pichigua</option>
                                            <option value="07">Suyckutambo</option>
                                            <option value="08">Alto Pichigua</option>
                                            <option value="01">Santa Ana</option>
                                            <option value="02">Echarate</option>
                                            <option value="03">Huayopata</option>
                                            <option value="04">Maranura</option>
                                            <option value="05">Ocobamba</option>
                                            <option value="06">Quellouno</option>
                                            <option value="07">Kimbiri</option>
                                            <option value="08">Santa Teresa</option>
                                            <option value="09">Vilcabamba</option>
                                            <option value="10">Pichari</option>
                                            <option value="11">Inkawasi</option>
                                            <option value="12">Villa Virgen</option>
                                            <option value="01">Paruro</option>
                                            <option value="02">Accha</option>
                                            <option value="03">Ccapi</option>
                                            <option value="04">Colcha</option>
                                            <option value="05">Huanoquite</option>
                                            <option value="06">Omacha</option>
                                            <option value="07">Paccaritambo</option>
                                            <option value="08">Pillpinto</option>
                                            <option value="09">Yaurisque</option>
                                            <option value="01">Paucartambo</option>
                                            <option value="02">Caicay</option>
                                            <option value="03">Challabamba</option>
                                            <option value="04">Colquepata</option>
                                            <option value="05">Huancarani</option>
                                            <option value="06">Kosñipata</option>
                                            <option value="01">Urcos</option>
                                            <option value="02">Andahuaylillas</option>
                                            <option value="03">Camanti</option>
                                            <option value="04">Ccarhuayo</option>
                                            <option value="05">Ccatca</option>
                                            <option value="06">Cusipata</option>
                                            <option value="07">Huaro</option>
                                            <option value="08">Lucre</option>
                                            <option value="09">Marcapata</option>
                                            <option value="10">Ocongate</option>
                                            <option value="11">Oropesa</option>
                                            <option value="12">Quiquijana</option>
                                            <option value="01">Urubamba</option>
                                            <option value="02">Chinchero</option>
                                            <option value="03">Huayllabamba</option>
                                            <option value="04">Machupicchu</option>
                                            <option value="05">Maras</option>
                                            <option value="06">Ollantaytambo</option>
                                            <option value="07">Yucay</option>
                                            <option value="01">Huancavelica</option>
                                            <option value="02">Acobambilla</option>
                                            <option value="03">Acoria</option>
                                            <option value="04">Conayca</option>
                                            <option value="05">Cuenca</option>
                                            <option value="06">Huachocolpa</option>
                                            <option value="07">Huayllahuara</option>
                                            <option value="08">Izcuchaca</option>
                                            <option value="09">Laria</option>
                                            <option value="10">Manta</option>
                                            <option value="11">Mariscal Caceres</option>
                                            <option value="12">Moya</option>
                                            <option value="13">Nuevo Occoro</option>
                                            <option value="14">Palca</option>
                                            <option value="15">Pilchaca</option>
                                            <option value="16">Vilca</option>
                                            <option value="17">Yauli</option>
                                            <option value="18">Ascensión</option>
                                            <option value="19">Huando</option>
                                            <option value="01">Acobamba</option>
                                            <option value="02">Andabamba</option>
                                            <option value="03">Anta</option>
                                            <option value="04">Caja</option>
                                            <option value="05">Marcas</option>
                                            <option value="06">Paucara</option>
                                            <option value="07">Pomacocha</option>
                                            <option value="08">Rosario</option>
                                            <option value="01">Lircay</option>
                                            <option value="02">Anchonga</option>
                                            <option value="03">Callanmarca</option>
                                            <option value="04">Ccochaccasa</option>
                                            <option value="05">Chincho</option>
                                            <option value="06">Congalla</option>
                                            <option value="07">Huanca-Huanca</option>
                                            <option value="08">Huayllay Grande</option>
                                            <option value="09">Julcamarca</option>
                                            <option value="10">San Antonio de Antaparco</option>
                                            <option value="11">Santo Tomas de Pata</option>
                                            <option value="12">Secclla</option>
                                            <option value="01">Castrovirreyna</option>
                                            <option value="02">Arma</option>
                                            <option value="03">Aurahua</option>
                                            <option value="04">Capillas</option>
                                            <option value="05">Chupamarca</option>
                                            <option value="06">Cocas</option>
                                            <option value="07">Huachos</option>
                                            <option value="08">Huamatambo</option>
                                            <option value="09">Mollepampa</option>
                                            <option value="10">San Juan</option>
                                            <option value="11">Santa Ana</option>
                                            <option value="12">Tantara</option>
                                            <option value="13">Ticrapo</option>
                                            <option value="01">Churcampa</option>
                                            <option value="02">Anco</option>
                                            <option value="03">Chinchihuasi</option>
                                            <option value="04">El Carmen</option>
                                            <option value="05">La Merced</option>
                                            <option value="06">Locroja</option>
                                            <option value="07">Paucarbamba</option>
                                            <option value="08">San Miguel de Mayocc</option>
                                            <option value="09">San Pedro de Coris</option>
                                            <option value="10">Pachamarca</option>
                                            <option value="11">Cosme</option>
                                            <option value="01">Huaytara</option>
                                            <option value="02">Ayavi</option>
                                            <option value="03">Cordova</option>
                                            <option value="04">Huayacundo Arma</option>
                                            <option value="05">Laramarca</option>
                                            <option value="06">Ocoyo</option>
                                            <option value="07">Pilpichaca</option>
                                            <option value="08">Querco</option>
                                            <option value="09">Quito-Arma</option>
                                            <option value="10">San Antonio de Cusicancha</option>
                                            <option value="11">San Francisco de Sangayaico</option>
                                            <option value="12">San Isidro</option>
                                            <option value="13">Santiago de Chocorvos</option>
                                            <option value="14">Santiago de Quirahuara</option>
                                            <option value="15">Santo Domingo de Capillas</option>
                                            <option value="16">Tambo</option>
                                            <option value="01">Pampas</option>
                                            <option value="02">Acostambo</option>
                                            <option value="03">Acraquia</option>
                                            <option value="04">Ahuaycha</option>
                                            <option value="05">Colcabamba</option>
                                            <option value="06">Daniel Hernandez</option>
                                            <option value="07">Huachocolpa</option>
                                            <option value="09">Huaribamba</option>
                                            <option value="10">Ñahuimpuquio</option>
                                            <option value="11">Pazos</option>
                                            <option value="13">Quishuar</option>
                                            <option value="14">Salcabamba</option>
                                            <option value="15">Salcahuasi</option>
                                            <option value="16">San Marcos de Rocchac</option>
                                            <option value="17">Surcubamba</option>
                                            <option value="18">Tintay Puncu</option>
                                            <option value="01">Huanuco</option>
                                            <option value="02">Amarilis</option>
                                            <option value="03">Chinchao</option>
                                            <option value="04">Churubamba</option>
                                            <option value="05">Margos</option>
                                            <option value="06">Quisqui</option>
                                            <option value="07">San Francisco de Cayran</option>
                                            <option value="08">San Pedro de Chaulan</option>
                                            <option value="09">Santa Maria del Valle</option>
                                            <option value="10">Yarumayo</option>
                                            <option value="11">Pillco Marca</option>
                                            <option value="12">Yacus</option>
                                            <option value="01">Ambo</option>
                                            <option value="02">Cayna</option>
                                            <option value="03">Colpas</option>
                                            <option value="04">Conchamarca</option>
                                            <option value="05">Huacar</option>
                                            <option value="06">San Francisco</option>
                                            <option value="07">San Rafael</option>
                                            <option value="08">Tomay Kichwa</option>
                                            <option value="01">La Union</option>
                                            <option value="07">Chuquis</option>
                                            <option value="11">Marias</option>
                                            <option value="13">Pachas</option>
                                            <option value="16">Quivilla</option>
                                            <option value="17">Ripan</option>
                                            <option value="21">Shunqui</option>
                                            <option value="22">Sillapata</option>
                                            <option value="23">Yanas</option>
                                            <option value="01">Huacaybamba</option>
                                            <option value="02">Canchabamba</option>
                                            <option value="03">Cochabamba</option>
                                            <option value="04">Pinra</option>
                                            <option value="01">Llata</option>
                                            <option value="02">Arancay</option>
                                            <option value="03">Chavin de Pariarca</option>
                                            <option value="04">Jacas Grande</option>
                                            <option value="05">Jircan</option>
                                            <option value="06">Miraflores</option>
                                            <option value="07">Monzon</option>
                                            <option value="08">Punchao</option>
                                            <option value="09">Puños</option>
                                            <option value="10">Singa</option>
                                            <option value="11">Tantamayo</option>
                                            <option value="01">Rupa-Rupa</option>
                                            <option value="02">Daniel Alomias Robles</option>
                                            <option value="03">Hermilio Valdizan</option>
                                            <option value="04">Jose Crespo y Castillo</option>
                                            <option value="05">Luyando</option>
                                            <option value="06">Mariano Damaso Beraun</option>
                                            <option value="01">Huacrachuco</option>
                                            <option value="02">Cholon</option>
                                            <option value="03">San Buenaventura</option>
                                            <option value="01">Panao</option>
                                            <option value="02">Chaglla</option>
                                            <option value="03">Molino</option>
                                            <option value="04">Umari</option>
                                            <option value="01">Puerto Inca</option>
                                            <option value="02">Codo del Pozuzo</option>
                                            <option value="03">Honoria</option>
                                            <option value="04">Tournavista</option>
                                            <option value="05">Yuyapichis</option>
                                            <option value="01">Jesus</option>
                                            <option value="02">Baños</option>
                                            <option value="03">Jivia</option>
                                            <option value="04">Queropalca</option>
                                            <option value="05">Rondos</option>
                                            <option value="06">San Francisco de Asis</option>
                                            <option value="07">San Miguel de Cauri</option>
                                            <option value="01">Chavinillo</option>
                                            <option value="02">Cahuac</option>
                                            <option value="03">Chacabamba</option>
                                            <option value="04">Chupan</option>
                                            <option value="05">Jacas Chico</option>
                                            <option value="06">Obas</option>
                                            <option value="07">Pampamarca</option>
                                            <option value="08">Choras</option>
                                            <option value="01">Ica</option>
                                            <option value="02">La Tinguiña</option>
                                            <option value="03">Los Aquijes</option>
                                            <option value="04">Ocucaje</option>
                                            <option value="05">Pachacutec</option>
                                            <option value="06">Parcona</option>
                                            <option value="07">Pueblo Nuevo</option>
                                            <option value="08">Salas</option>
                                            <option value="09">San Jose de los Molinos</option>
                                            <option value="10">San Juan Bautista</option>
                                            <option value="11">Santiago</option>
                                            <option value="12">Subtanjalla</option>
                                            <option value="13">Tate</option>
                                            <option value="14">Yauca del Rosario</option>
                                            <option value="01">Chincha Alta</option>
                                            <option value="02">Alto Laran</option>
                                            <option value="03">Chavin</option>
                                            <option value="04">Chincha Baja</option>
                                            <option value="05">El Carmen</option>
                                            <option value="06">Grocio Prado</option>
                                            <option value="07">Pueblo Nuevo</option>
                                            <option value="08">San Juan de Yanac</option>
                                            <option value="09">San Pedro de Huacarpana</option>
                                            <option value="10">Sunampe</option>
                                            <option value="11">Tambo de Mora</option>
                                            <option value="01">Nazca</option>
                                            <option value="02">Changuillo</option>
                                            <option value="03">El Ingenio</option>
                                            <option value="04">Marcona</option>
                                            <option value="05">Vista Alegre</option>
                                            <option value="01">Palpa</option>
                                            <option value="02">Llipata</option>
                                            <option value="03">Rio Grande</option>
                                            <option value="04">Santa Cruz</option>
                                            <option value="05">Tibillo</option>
                                            <option value="01">Pisco</option>
                                            <option value="02">Huancano</option>
                                            <option value="03">Humay</option>
                                            <option value="04">Independencia</option>
                                            <option value="05">Paracas</option>
                                            <option value="06">San Andres</option>
                                            <option value="07">San Clemente</option>
                                            <option value="08">Tupac Amaru Inca</option>
                                            <option value="01">Huancayo</option>
                                            <option value="04">Carhuacallanga</option>
                                            <option value="05">Chacapampa</option>
                                            <option value="06">Chicche</option>
                                            <option value="07">Chilca</option>
                                            <option value="08">Chongos Alto</option>
                                            <option value="11">Chupuro</option>
                                            <option value="12">Colca</option>
                                            <option value="13">Cullhuas</option>
                                            <option value="14">El Tambo</option>
                                            <option value="16">Huacrapuquio</option>
                                            <option value="17">Hualhuas</option>
                                            <option value="19">Huancan</option>
                                            <option value="20">Huasicancha</option>
                                            <option value="21">Huayucachi</option>
                                            <option value="22">Ingenio</option>
                                            <option value="24">Pariahuanca</option>
                                            <option value="25">Pilcomayo</option>
                                            <option value="26">Pucara</option>
                                            <option value="27">Quichuay</option>
                                            <option value="28">Quilcas</option>
                                            <option value="29">San Agustin</option>
                                            <option value="30">San Jeronimo de Tunan</option>
                                            <option value="32">Saño</option>
                                            <option value="33">Sapallanga</option>
                                            <option value="34">Sicaya</option>
                                            <option value="35">Santo Domingo de Acobamba</option>
                                            <option value="36">Viques</option>
                                            <option value="01">Concepcion</option>
                                            <option value="02">Aco</option>
                                            <option value="03">Andamarca</option>
                                            <option value="04">Chambara</option>
                                            <option value="05">Cochas</option>
                                            <option value="06">Comas</option>
                                            <option value="07">Heroinas Toledo</option>
                                            <option value="08">Manzanares</option>
                                            <option value="09">Mariscal Castilla</option>
                                            <option value="10">Matahuasi</option>
                                            <option value="11">Mito</option>
                                            <option value="12">Nueve de Julio</option>
                                            <option value="13">Orcotuna</option>
                                            <option value="14">San Jose de Quero</option>
                                            <option value="15">Santa Rosa de Ocopa</option>
                                            <option value="01">Chanchamayo</option>
                                            <option value="02">Perene</option>
                                            <option value="03">Pichanaqui</option>
                                            <option value="04">San Luis de Shuaro</option>
                                            <option value="05">San Ramon</option>
                                            <option value="06">Vitoc</option>
                                            <option value="01">Jauja</option>
                                            <option value="02">Acolla</option>
                                            <option value="03">Apata</option>
                                            <option value="04">Ataura</option>
                                            <option value="05">Canchayllo</option>
                                            <option value="06">Curicaca</option>
                                            <option value="07">El Mantaro</option>
                                            <option value="08">Huamali</option>
                                            <option value="09">Huaripampa</option>
                                            <option value="10">Huertas</option>
                                            <option value="11">Janjaillo</option>
                                            <option value="12">Julcan</option>
                                            <option value="13">Leonor Ordoñez</option>
                                            <option value="14">Llocllapampa</option>
                                            <option value="15">Marco</option>
                                            <option value="16">Masma</option>
                                            <option value="17">Masma Chicche</option>
                                            <option value="18">Molinos</option>
                                            <option value="19">Monobamba</option>
                                            <option value="20">Muqui</option>
                                            <option value="21">Muquiyauyo</option>
                                            <option value="22">Paca</option>
                                            <option value="23">Paccha</option>
                                            <option value="24">Pancan</option>
                                            <option value="25">Parco</option>
                                            <option value="26">Pomacancha</option>
                                            <option value="27">Ricran</option>
                                            <option value="28">San Lorenzo</option>
                                            <option value="29">San Pedro de Chunan</option>
                                            <option value="30">Sausa</option>
                                            <option value="31">Sincos</option>
                                            <option value="32">Tunan Marca</option>
                                            <option value="33">Yauli</option>
                                            <option value="34">Yauyos</option>
                                            <option value="01">Junin</option>
                                            <option value="02">Carhuamayo</option>
                                            <option value="03">Ondores</option>
                                            <option value="04">Ulcumayo</option>
                                            <option value="01">Satipo</option>
                                            <option value="02">Coviriali</option>
                                            <option value="03">Llaylla</option>
                                            <option value="04">Mazamari</option>
                                            <option value="05">Pampa Hermosa</option>
                                            <option value="06">Pangoa</option>
                                            <option value="07">Rio Negro</option>
                                            <option value="08">Rio Tambo</option>
                                            <option value="99">Mazamari-Pangoa</option>
                                            <option value="01">Tarma</option>
                                            <option value="02">Acobamba</option>
                                            <option value="03">Huaricolca</option>
                                            <option value="04">Huasahuasi</option>
                                            <option value="05">La Union</option>
                                            <option value="06">Palca</option>
                                            <option value="07">Palcamayo</option>
                                            <option value="08">San Pedro de Cajas</option>
                                            <option value="09">Tapo</option>
                                            <option value="01">La Oroya</option>
                                            <option value="02">Chacapalpa</option>
                                            <option value="03">Huay-Huay</option>
                                            <option value="04">Marcapomacocha</option>
                                            <option value="05">Morococha</option>
                                            <option value="06">Paccha</option>
                                            <option value="07">Santa Barbara de Carhuacayan</option>
                                            <option value="08">Santa Rosa de Sacco</option>
                                            <option value="09">Suitucancha</option>
                                            <option value="10">Yauli</option>
                                            <option value="01">Chupaca</option>
                                            <option value="02">Ahuac</option>
                                            <option value="03">Chongos Bajo</option>
                                            <option value="04">Huachac</option>
                                            <option value="05">Huamancaca Chico</option>
                                            <option value="06">San Juan de Iscos</option>
                                            <option value="07">San Juan de Jarpa</option>
                                            <option value="08">3 de Diciembre</option>
                                            <option value="09">Yanacancha</option>
                                            <option value="01">Trujillo</option>
                                            <option value="02">El Porvenir</option>
                                            <option value="03">Florencia de Mora</option>
                                            <option value="04">Huanchaco</option>
                                            <option value="05">La Esperanza</option>
                                            <option value="06">Laredo</option>
                                            <option value="07">Moche</option>
                                            <option value="08">Poroto</option>
                                            <option value="09">Salaverry</option>
                                            <option value="10">Simbal</option>
                                            <option value="11">Victor Larco Herrera</option>
                                            <option value="01">Ascope</option>
                                            <option value="02">Chicama</option>
                                            <option value="03">Chocope</option>
                                            <option value="04">Magdalena de Cao</option>
                                            <option value="05">Paijan</option>
                                            <option value="06">Razuri</option>
                                            <option value="07">Santiago de Cao</option>
                                            <option value="08">Casa Grande</option>
                                            <option value="01">Bolivar</option>
                                            <option value="02">Bambamarca</option>
                                            <option value="03">Condormarca</option>
                                            <option value="04">Longotea</option>
                                            <option value="05">Uchumarca</option>
                                            <option value="06">Ucuncha</option>
                                            <option value="01">Chepen</option>
                                            <option value="02">Pacanga</option>
                                            <option value="03">Pueblo Nuevo</option>
                                            <option value="01">Julcan</option>
                                            <option value="02">Calamarca</option>
                                            <option value="03">Carabamba</option>
                                            <option value="04">Huaso</option>
                                            <option value="01">Otuzco</option>
                                            <option value="02">Agallpampa</option>
                                            <option value="04">Charat</option>
                                            <option value="05">Huaranchal</option>
                                            <option value="06">La Cuesta</option>
                                            <option value="08">Mache</option>
                                            <option value="10">Paranday</option>
                                            <option value="11">Salpo</option>
                                            <option value="13">Sinsicap</option>
                                            <option value="14">Usquil</option>
                                            <option value="01">San Pedro de Lloc</option>
                                            <option value="02">Guadalupe</option>
                                            <option value="03">Jequetepeque</option>
                                            <option value="04">Pacasmayo</option>
                                            <option value="05">San Jose</option>
                                            <option value="01">Tayabamba</option>
                                            <option value="02">Buldibuyo</option>
                                            <option value="03">Chillia</option>
                                            <option value="04">Huancaspata</option>
                                            <option value="05">Huaylillas</option>
                                            <option value="06">Huayo</option>
                                            <option value="07">Ongon</option>
                                            <option value="08">Parcoy</option>
                                            <option value="09">Pataz</option>
                                            <option value="10">Pias</option>
                                            <option value="11">Santiago de Challas</option>
                                            <option value="12">Taurija</option>
                                            <option value="13">Urpay</option>
                                            <option value="01">Huamachuco</option>
                                            <option value="02">Chugay</option>
                                            <option value="03">Cochorco</option>
                                            <option value="04">Curgos</option>
                                            <option value="05">Marcabal</option>
                                            <option value="06">Sanagoran</option>
                                            <option value="07">Sarin</option>
                                            <option value="08">Sartimbamba</option>
                                            <option value="01">Santiago de Chuco</option>
                                            <option value="02">Angasmarca</option>
                                            <option value="03">Cachicadan</option>
                                            <option value="04">Mollebamba</option>
                                            <option value="05">Mollepata</option>
                                            <option value="06">Quiruvilca</option>
                                            <option value="07">Santa Cruz de Chuca</option>
                                            <option value="08">Sitabamba</option>
                                            <option value="01">Cascas</option>
                                            <option value="02">Lucma</option>
                                            <option value="03">Marmot</option>
                                            <option value="04">Sayapullo</option>
                                            <option value="01">Viru</option>
                                            <option value="02">Chao</option>
                                            <option value="03">Guadalupito</option>
                                            <option value="01">Chiclayo</option>
                                            <option value="02">Chongoyape</option>
                                            <option value="03">Eten</option>
                                            <option value="04">Eten Puerto</option>
                                            <option value="05">Jose Leonardo Ortiz</option>
                                            <option value="06">La Victoria</option>
                                            <option value="07">Lagunas</option>
                                            <option value="08">Monsefu</option>
                                            <option value="09">Nueva Arica</option>
                                            <option value="10">Oyotun</option>
                                            <option value="11">Picsi</option>
                                            <option value="12">Pimentel</option>
                                            <option value="13">Reque</option>
                                            <option value="14">Santa Rosa</option>
                                            <option value="15">Saña</option>
                                            <option value="16">Cayaltí</option>
                                            <option value="17">Patapo</option>
                                            <option value="18">Pomalca</option>
                                            <option value="19">Pucalá</option>
                                            <option value="20">Tumán</option>
                                            <option value="01">Ferreñafe</option>
                                            <option value="02">Cañaris</option>
                                            <option value="03">Incahuasi</option>
                                            <option value="04">Manuel Antonio Mesones Muro</option>
                                            <option value="05">Pitipo</option>
                                            <option value="06">Pueblo Nuevo</option>
                                            <option value="01">Lambayeque</option>
                                            <option value="02">Chochope</option>
                                            <option value="03">Illimo</option>
                                            <option value="04">Jayanca</option>
                                            <option value="05">Mochumi</option>
                                            <option value="06">Morrope</option>
                                            <option value="07">Motupe</option>
                                            <option value="08">Olmos</option>
                                            <option value="09">Pacora</option>
                                            <option value="10">Salas</option>
                                            <option value="11">San Jose</option>
                                            <option value="12">Tucume</option>
                                            <option value="01" selected>Lima</option>
                                            <option value="02">Ancon</option>
                                            <option value="03">Ate</option>
                                            <option value="04">Barranco</option>
                                            <option value="05">Breña</option>
                                            <option value="06">Carabayllo</option>
                                            <option value="07">Chaclacayo</option>
                                            <option value="08">Chorrillos</option>
                                            <option value="09">Cieneguilla</option>
                                            <option value="10">Comas</option>
                                            <option value="11">El Agustino</option>
                                            <option value="12">Independencia</option>
                                            <option value="13">Jesus Maria</option>
                                            <option value="14">La Molina</option>
                                            <option value="15">La Victoria</option>
                                            <option value="16">Lince</option>
                                            <option value="17">Los Olivos</option>
                                            <option value="18">Lurigancho</option>
                                            <option value="19">Lurin</option>
                                            <option value="20">Magdalena del Mar</option>
                                            <option value="21">Pueblo Libre (Magdalena Vieja)</option>
                                            <option value="22">Miraflores</option>
                                            <option value="23">Pachacamac</option>
                                            <option value="24">Pucusana</option>
                                            <option value="25">Puente Piedra</option>
                                            <option value="26">Punta Hermosa</option>
                                            <option value="27">Punta Negra</option>
                                            <option value="28">Rimac</option>
                                            <option value="29">San Bartolo</option>
                                            <option value="30">San Borja</option>
                                            <option value="31">San Isidro</option>
                                            <option value="32">San Juan de Lurigancho</option>
                                            <option value="33">San Juan de Miraflores</option>
                                            <option value="34">San Luis</option>
                                            <option value="35">San Martin de Porres</option>
                                            <option value="36">San Miguel</option>
                                            <option value="37">Santa Anita</option>
                                            <option value="38">Santa Maria del Mar</option>
                                            <option value="39">Santa Rosa</option>
                                            <option value="40">Santiago de Surco</option>
                                            <option value="41">Surquillo</option>
                                            <option value="42">Villa El Salvador</option>
                                            <option value="43">Villa Maria del Triunfo</option>
                                            <option value="01">Barranca</option>
                                            <option value="02">Paramonga</option>
                                            <option value="03">Pativilca</option>
                                            <option value="04">Supe</option>
                                            <option value="05">Supe Puerto</option>
                                            <option value="01">Cajatambo</option>
                                            <option value="02">Copa</option>
                                            <option value="03">Gorgor</option>
                                            <option value="04">Huancapon</option>
                                            <option value="05">Manas</option>
                                            <option value="01">Canta</option>
                                            <option value="02">Arahuay</option>
                                            <option value="03">Huamantanga</option>
                                            <option value="04">Huaros</option>
                                            <option value="05">Lachaqui</option>
                                            <option value="06">San Buenaventura</option>
                                            <option value="07">Santa Rosa de Quives</option>
                                            <option value="01">San Vicente de Cañete</option>
                                            <option value="02">Asia</option>
                                            <option value="03">Calango</option>
                                            <option value="04">Cerro Azul</option>
                                            <option value="05">Chilca</option>
                                            <option value="06">Coayllo</option>
                                            <option value="07">Imperial</option>
                                            <option value="08">Lunahuana</option>
                                            <option value="09">Mala</option>
                                            <option value="10">Nuevo Imperial</option>
                                            <option value="11">Pacaran</option>
                                            <option value="12">Quilmana</option>
                                            <option value="13">San Antonio</option>
                                            <option value="14">San Luis</option>
                                            <option value="15">Santa Cruz de Flores</option>
                                            <option value="16">Zuñiga</option>
                                            <option value="01">Huaral</option>
                                            <option value="02">Atavillos Alto</option>
                                            <option value="03">Atavillos Bajo</option>
                                            <option value="04">Aucallama</option>
                                            <option value="05">Chancay</option>
                                            <option value="06">Ihuari</option>
                                            <option value="07">Lampian</option>
                                            <option value="08">Pacaraos</option>
                                            <option value="09">San Miguel de Acos</option>
                                            <option value="10">Santa Cruz de Andamarca</option>
                                            <option value="11">Sumbilca</option>
                                            <option value="12">Veintisiete de Noviembre</option>
                                            <option value="01">Matucana</option>
                                            <option value="02">Antioquia</option>
                                            <option value="03">Callahuanca</option>
                                            <option value="04">Carampoma</option>
                                            <option value="05">Chicla</option>
                                            <option value="06">Cuenca</option>
                                            <option value="07">Huachupampa</option>
                                            <option value="08">Huanza</option>
                                            <option value="09">Huarochiri</option>
                                            <option value="10">Lahuaytambo</option>
                                            <option value="11">Langa</option>
                                            <option value="12">Laraos</option>
                                            <option value="13">Mariatana</option>
                                            <option value="14">Ricardo Palma</option>
                                            <option value="15">San Andres de Tupicocha</option>
                                            <option value="16">San Antonio</option>
                                            <option value="17">San Bartolome</option>
                                            <option value="18">San Damian</option>
                                            <option value="19">San Juan de Iris</option>
                                            <option value="20">San Juan de Tantaranche</option>
                                            <option value="21">San Lorenzo de Quinti</option>
                                            <option value="22">San Mateo</option>
                                            <option value="23">San Mateo de Otao</option>
                                            <option value="24">San Pedro de Casta</option>
                                            <option value="25">San Pedro de Huancayre</option>
                                            <option value="26">Sangallaya</option>
                                            <option value="27">Santa Cruz de Cocachacra</option>
                                            <option value="28">Santa Eulalia</option>
                                            <option value="29">Santiago de Anchucaya</option>
                                            <option value="30">Santiago de Tuna</option>
                                            <option value="31">Santo Domingo de los Olleros</option>
                                            <option value="32">Surco</option>
                                            <option value="01">Huacho</option>
                                            <option value="02">Ambar</option>
                                            <option value="03">Caleta de Carquin</option>
                                            <option value="04">Checras</option>
                                            <option value="05">Hualmay</option>
                                            <option value="06">Huaura</option>
                                            <option value="07">Leoncio Prado</option>
                                            <option value="08">Paccho</option>
                                            <option value="09">Santa Leonor</option>
                                            <option value="10">Santa Maria</option>
                                            <option value="11">Sayan</option>
                                            <option value="12">Vegueta</option>
                                            <option value="01">Oyon</option>
                                            <option value="02">Andajes</option>
                                            <option value="03">Caujul</option>
                                            <option value="04">Cochamarca</option>
                                            <option value="05">Navan</option>
                                            <option value="06">Pachangara</option>
                                            <option value="01">Yauyos</option>
                                            <option value="02">Alis</option>
                                            <option value="03">Ayauca</option>
                                            <option value="04">Ayaviri</option>
                                            <option value="05">Azangaro</option>
                                            <option value="06">Cacra</option>
                                            <option value="07">Carania</option>
                                            <option value="08">Catahuasi</option>
                                            <option value="09">Chocos</option>
                                            <option value="10">Cochas</option>
                                            <option value="11">Colonia</option>
                                            <option value="12">Hongos</option>
                                            <option value="13">Huampara</option>
                                            <option value="14">Huancaya</option>
                                            <option value="15">Huangascar</option>
                                            <option value="16">Huantan</option>
                                            <option value="17">Huañec</option>
                                            <option value="18">Laraos</option>
                                            <option value="19">Lincha</option>
                                            <option value="20">Madean</option>
                                            <option value="21">Miraflores</option>
                                            <option value="22">Omas</option>
                                            <option value="23">Putinza</option>
                                            <option value="24">Quinches</option>
                                            <option value="25">Quinocay</option>
                                            <option value="26">San Joaquin</option>
                                            <option value="27">San Pedro de Pilas</option>
                                            <option value="28">Tanta</option>
                                            <option value="29">Tauripampa</option>
                                            <option value="30">Tomas</option>
                                            <option value="31">Tupe</option>
                                            <option value="32">Viñac</option>
                                            <option value="33">Vitis</option>
                                            <option value="01">Iquitos</option>
                                            <option value="02">Alto Nanay</option>
                                            <option value="03">Fernando Lores</option>
                                            <option value="04">Indiana</option>
                                            <option value="05">Las Amazonas</option>
                                            <option value="06">Mazan</option>
                                            <option value="07">Napo</option>
                                            <option value="08">Punchana</option>
                                            <option value="09">Putumayo</option>
                                            <option value="10">Torres Causana</option>
                                            <option value="12">Belén</option>
                                            <option value="13">San Juan Bautista</option>
                                            <option value="14">Teniente Manuel Clavero</option>
                                            <option value="01">Yurimaguas</option>
                                            <option value="02">Balsapuerto</option>
                                            <option value="05">Jeberos</option>
                                            <option value="06">Lagunas</option>
                                            <option value="10">Santa Cruz</option>
                                            <option value="11">Teniente Cesar Lopez Rojas</option>
                                            <option value="01">Nauta</option>
                                            <option value="02">Parinari</option>
                                            <option value="03">Tigre</option>
                                            <option value="04">Trompeteros</option>
                                            <option value="05">Urarinas</option>
                                            <option value="01">Ramon Castilla</option>
                                            <option value="02">Pebas</option>
                                            <option value="03">Yavari</option>
                                            <option value="04">San Pablo</option>
                                            <option value="01">Requena</option>
                                            <option value="02">Alto Tapiche</option>
                                            <option value="03">Capelo</option>
                                            <option value="04">Emilio San Martin</option>
                                            <option value="05">Maquia</option>
                                            <option value="06">Puinahua</option>
                                            <option value="07">Saquena</option>
                                            <option value="08">Soplin</option>
                                            <option value="09">Tapiche</option>
                                            <option value="10">Jenaro Herrera</option>
                                            <option value="11">Yaquerana</option>
                                            <option value="01">Contamana</option>
                                            <option value="02">Inahuaya</option>
                                            <option value="03">Padre Marquez</option>
                                            <option value="04">Pampa Hermosa</option>
                                            <option value="05">Sarayacu</option>
                                            <option value="06">Vargas Guerra</option>
                                            <option value="01">Barranca</option>
                                            <option value="02">Cahuapanas</option>
                                            <option value="03">Manseriche</option>
                                            <option value="04">Morona</option>
                                            <option value="05">Pastaza</option>
                                            <option value="06">Andoas</option>
                                            <option value="01">Putumayo</option>
                                            <option value="02">Rosa Panduro</option>
                                            <option value="03">Teniente Manuel Clavero</option>
                                            <option value="04">Yaguas</option>
                                            <option value="01">Tambopata</option>
                                            <option value="02">Inambari</option>
                                            <option value="03">Las Piedras</option>
                                            <option value="04">Laberinto</option>
                                            <option value="01">Manu</option>
                                            <option value="02">Fitzcarrald</option>
                                            <option value="03">Madre de Dios</option>
                                            <option value="04">Huepetuhe</option>
                                            <option value="01">Iñapari</option>
                                            <option value="02">Iberia</option>
                                            <option value="03">Tahuamanu</option>
                                            <option value="01">Moquegua</option>
                                            <option value="02">Carumas</option>
                                            <option value="03">Cuchumbaya</option>
                                            <option value="04">Samegua</option>
                                            <option value="05">San Cristobal</option>
                                            <option value="06">Torata</option>
                                            <option value="01">Omate</option>
                                            <option value="02">Chojata</option>
                                            <option value="03">Coalaque</option>
                                            <option value="04">Ichuña</option>
                                            <option value="05">La Capilla</option>
                                            <option value="06">Lloque</option>
                                            <option value="07">Matalaque</option>
                                            <option value="08">Puquina</option>
                                            <option value="09">Quinistaquillas</option>
                                            <option value="10">Ubinas</option>
                                            <option value="11">Yunga</option>
                                            <option value="01">Ilo</option>
                                            <option value="02">El Algarrobal</option>
                                            <option value="03">Pacocha</option>
                                            <option value="01">Chaupimarca</option>
                                            <option value="02">Huachon</option>
                                            <option value="03">Huariaca</option>
                                            <option value="04">Huayllay</option>
                                            <option value="05">Ninacaca</option>
                                            <option value="06">Pallanchacra</option>
                                            <option value="07">Paucartambo</option>
                                            <option value="08">San Fco. de Asís de Yarusyacán</option>
                                            <option value="09">Simon Bolivar</option>
                                            <option value="10">Ticlacayan</option>
                                            <option value="11">Tinyahuarco</option>
                                            <option value="12">Vicco</option>
                                            <option value="13">Yanacancha</option>
                                            <option value="01">Yanahuanca</option>
                                            <option value="02">Chacayan</option>
                                            <option value="03">Goyllarisquizga</option>
                                            <option value="04">Paucar</option>
                                            <option value="05">San Pedro de Pillao</option>
                                            <option value="06">Santa Ana de Tusi</option>
                                            <option value="07">Tapuc</option>
                                            <option value="08">Vilcabamba</option>
                                            <option value="01">Oxapampa</option>
                                            <option value="02">Chontabamba</option>
                                            <option value="03">Huancabamba</option>
                                            <option value="04">Palcazu</option>
                                            <option value="05">Pozuzo</option>
                                            <option value="06">Puerto Bermudez</option>
                                            <option value="07">Villa Rica</option>
                                            <option value="08">Constitucion</option>
                                            <option value="01">Piura</option>
                                            <option value="04">Castilla</option>
                                            <option value="05">Catacaos</option>
                                            <option value="07">Cura Mori</option>
                                            <option value="08">El Tallan</option>
                                            <option value="09">La Arena</option>
                                            <option value="10">La Union</option>
                                            <option value="11">Las Lomas</option>
                                            <option value="14">Tambo Grande</option>
                                            <option value="15">Veintiséis de Octubre</option>
                                            <option value="01">Ayabaca</option>
                                            <option value="02">Frias</option>
                                            <option value="03">Jilili</option>
                                            <option value="04">Lagunas</option>
                                            <option value="05">Montero</option>
                                            <option value="06">Pacaipampa</option>
                                            <option value="07">Paimas</option>
                                            <option value="08">Sapillica</option>
                                            <option value="09">Sicchez</option>
                                            <option value="10">Suyo</option>
                                            <option value="01">Huancabamba</option>
                                            <option value="02">Canchaque</option>
                                            <option value="03">El Carmen de la Frontera</option>
                                            <option value="04">Huarmaca</option>
                                            <option value="05">Lalaquiz</option>
                                            <option value="06">San Miguel de El Faique</option>
                                            <option value="07">Sondor</option>
                                            <option value="08">Sondorillo</option>
                                            <option value="01">Chulucanas</option>
                                            <option value="02">Buenos Aires</option>
                                            <option value="03">Chalaco</option>
                                            <option value="04">La Matanza</option>
                                            <option value="05">Morropon</option>
                                            <option value="06">Salitral</option>
                                            <option value="07">San Juan de Bigote</option>
                                            <option value="08">Santa Catalina de Mossa</option>
                                            <option value="09">Santo Domingo</option>
                                            <option value="10">Yamango</option>
                                            <option value="01">Paita</option>
                                            <option value="02">Amotape</option>
                                            <option value="03">Arenal</option>
                                            <option value="04">Colan</option>
                                            <option value="05">La Huaca</option>
                                            <option value="06">Tamarindo</option>
                                            <option value="07">Vichayal</option>
                                            <option value="01">Sullana</option>
                                            <option value="02">Bellavista</option>
                                            <option value="03">Ignacio Escudero</option>
                                            <option value="04">Lancones</option>
                                            <option value="05">Marcavelica</option>
                                            <option value="06">Miguel Checa</option>
                                            <option value="07">Querecotillo</option>
                                            <option value="08">Salitral</option>
                                            <option value="01">Pariñas</option>
                                            <option value="02">El Alto</option>
                                            <option value="03">La Brea</option>
                                            <option value="04">Lobitos</option>
                                            <option value="05">Los Organos</option>
                                            <option value="06">Mancora</option>
                                            <option value="01">Sechura</option>
                                            <option value="02">Bellavista de la Union</option>
                                            <option value="03">Bernal</option>
                                            <option value="04">Cristo Nos Valga</option>
                                            <option value="05">Vice</option>
                                            <option value="06">Rinconada Llicuar</option>
                                            <option value="01">Puno</option>
                                            <option value="02">Acora</option>
                                            <option value="03">Amantani</option>
                                            <option value="04">Atuncolla</option>
                                            <option value="05">Capachica</option>
                                            <option value="06">Chucuito</option>
                                            <option value="07">Coata</option>
                                            <option value="08">Huata</option>
                                            <option value="09">Mañazo</option>
                                            <option value="10">Paucarcolla</option>
                                            <option value="11">Pichacani</option>
                                            <option value="12">Plateria</option>
                                            <option value="13">San Antonio</option>
                                            <option value="14">Tiquillaca</option>
                                            <option value="15">Vilque</option>
                                            <option value="01">Azangaro</option>
                                            <option value="02">Achaya</option>
                                            <option value="03">Arapa</option>
                                            <option value="04">Asillo</option>
                                            <option value="05">Caminaca</option>
                                            <option value="06">Chupa</option>
                                            <option value="07">Jose Domingo Choquehuanca</option>
                                            <option value="08">Muñani</option>
                                            <option value="09">Potoni</option>
                                            <option value="10">Saman</option>
                                            <option value="11">San Anton</option>
                                            <option value="12">San Jose</option>
                                            <option value="13">San Juan de Salinas</option>
                                            <option value="14">Santiago de Pupuja</option>
                                            <option value="15">Tirapata</option>
                                            <option value="01">Macusani</option>
                                            <option value="02">Ajoyani</option>
                                            <option value="03">Ayapata</option>
                                            <option value="04">Coasa</option>
                                            <option value="05">Corani</option>
                                            <option value="06">Crucero</option>
                                            <option value="07">Ituata</option>
                                            <option value="08">Ollachea</option>
                                            <option value="09">San Gaban</option>
                                            <option value="10">Usicayos</option>
                                            <option value="01">Juli</option>
                                            <option value="02">Desaguadero</option>
                                            <option value="03">Huacullani</option>
                                            <option value="04">Kelluyo</option>
                                            <option value="05">Pisacoma</option>
                                            <option value="06">Pomata</option>
                                            <option value="07">Zepita</option>
                                            <option value="01">Ilave</option>
                                            <option value="02">Capaso</option>
                                            <option value="03">Pilcuyo</option>
                                            <option value="04">Santa Rosa</option>
                                            <option value="05">Conduriri</option>
                                            <option value="01">Huancane</option>
                                            <option value="02">Cojata</option>
                                            <option value="03">Huatasani</option>
                                            <option value="04">Inchupalla</option>
                                            <option value="05">Pusi</option>
                                            <option value="06">Rosaspata</option>
                                            <option value="07">Taraco</option>
                                            <option value="08">Vilque Chico</option>
                                            <option value="01">Lampa</option>
                                            <option value="02">Cabanilla</option>
                                            <option value="03">Calapuja</option>
                                            <option value="04">Nicasio</option>
                                            <option value="05">Ocuviri</option>
                                            <option value="06">Palca</option>
                                            <option value="07">Paratia</option>
                                            <option value="08">Pucara</option>
                                            <option value="09">Santa Lucia</option>
                                            <option value="10">Vilavila</option>
                                            <option value="01">Ayaviri</option>
                                            <option value="02">Antauta</option>
                                            <option value="03">Cupi</option>
                                            <option value="04">Llalli</option>
                                            <option value="05">Macari</option>
                                            <option value="06">Nuñoa</option>
                                            <option value="07">Orurillo</option>
                                            <option value="08">Santa Rosa</option>
                                            <option value="09">Umachiri</option>
                                            <option value="01">Moho</option>
                                            <option value="02">Conima</option>
                                            <option value="03">Huayrapata</option>
                                            <option value="04">Tilali</option>
                                            <option value="01">Putina</option>
                                            <option value="02">Ananea</option>
                                            <option value="03">Pedro Vilca Apaza</option>
                                            <option value="04">Quilcapuncu</option>
                                            <option value="05">Sina</option>
                                            <option value="01">Juliaca</option>
                                            <option value="02">Cabana</option>
                                            <option value="03">Cabanillas</option>
                                            <option value="04">Caracoto</option>
                                            <option value="01">Sandia</option>
                                            <option value="02">Cuyocuyo</option>
                                            <option value="03">Limbani</option>
                                            <option value="04">Patambuco</option>
                                            <option value="05">Phara</option>
                                            <option value="06">Quiaca</option>
                                            <option value="07">San Juan del Oro</option>
                                            <option value="08">Yanahuaya</option>
                                            <option value="09">Alto Inambari</option>
                                            <option value="10">San Pedro de Putina Punco</option>
                                            <option value="01">Yunguyo</option>
                                            <option value="02">Anapia</option>
                                            <option value="03">Copani</option>
                                            <option value="04">Cuturapi</option>
                                            <option value="05">Ollaraya</option>
                                            <option value="06">Tinicachi</option>
                                            <option value="07">Unicachi</option>
                                            <option value="01">Moyobamba</option>
                                            <option value="02">Calzada</option>
                                            <option value="03">Habana</option>
                                            <option value="04">Jepelacio</option>
                                            <option value="05">Soritor</option>
                                            <option value="06">Yantalo</option>
                                            <option value="01">Bellavista</option>
                                            <option value="02">Alto Biavo</option>
                                            <option value="03">Bajo Biavo</option>
                                            <option value="04">Huallaga</option>
                                            <option value="05">San Pablo</option>
                                            <option value="06">San Rafael</option>
                                            <option value="01">San Jose de Sisa</option>
                                            <option value="02">Agua Blanca</option>
                                            <option value="03">San Martin</option>
                                            <option value="04">Santa Rosa</option>
                                            <option value="05">Shatoja</option>
                                            <option value="01">Saposoa</option>
                                            <option value="02">Alto Saposoa</option>
                                            <option value="03">El Eslabon</option>
                                            <option value="04">Piscoyacu</option>
                                            <option value="05">Sacanche</option>
                                            <option value="06">Tingo de Saposoa</option>
                                            <option value="01">Lamas</option>
                                            <option value="02">Alonso de Alvarado</option>
                                            <option value="03">Barranquita</option>
                                            <option value="04">Caynarachi</option>
                                            <option value="05">Cuñumbuqui</option>
                                            <option value="06">Pinto Recodo</option>
                                            <option value="07">Rumisapa</option>
                                            <option value="08">San Roque de Cumbaza</option>
                                            <option value="09">Shanao</option>
                                            <option value="10">Tabalosos</option>
                                            <option value="11">Zapatero</option>
                                            <option value="01">Juanjui</option>
                                            <option value="02">Campanilla</option>
                                            <option value="03">Huicungo</option>
                                            <option value="04">Pachiza</option>
                                            <option value="05">Pajarillo</option>
                                            <option value="01">Picota</option>
                                            <option value="02">Buenos Aires</option>
                                            <option value="03">Caspisapa</option>
                                            <option value="04">Pilluana</option>
                                            <option value="05">Pucacaca</option>
                                            <option value="06">San Cristobal</option>
                                            <option value="07">San Hilarion</option>
                                            <option value="08">Shamboyacu</option>
                                            <option value="09">Tingo de Ponasa</option>
                                            <option value="10">Tres Unidos</option>
                                            <option value="01">Rioja</option>
                                            <option value="02">Awajun</option>
                                            <option value="03">Elias Soplin Vargas</option>
                                            <option value="04">Nueva Cajamarca</option>
                                            <option value="05">Pardo Miguel</option>
                                            <option value="06">Posic</option>
                                            <option value="07">San Fernando</option>
                                            <option value="08">Yorongos</option>
                                            <option value="09">Yuracyacu</option>
                                            <option value="01">Tarapoto</option>
                                            <option value="02">Alberto Leveau</option>
                                            <option value="03">Cacatachi</option>
                                            <option value="04">Chazuta</option>
                                            <option value="05">Chipurana</option>
                                            <option value="06">El Porvenir</option>
                                            <option value="07">Huimbayoc</option>
                                            <option value="08">Juan Guerra</option>
                                            <option value="09">La Banda de Shilcayo</option>
                                            <option value="10">Morales</option>
                                            <option value="11">Papaplaya</option>
                                            <option value="12">San Antonio</option>
                                            <option value="13">Sauce</option>
                                            <option value="14">Shapaja</option>
                                            <option value="01">Tocache</option>
                                            <option value="02">Nuevo Progreso</option>
                                            <option value="03">Polvora</option>
                                            <option value="04">Shunte</option>
                                            <option value="05">Uchiza</option>
                                            <option value="01">Tacna</option>
                                            <option value="02">Alto de la Alianza</option>
                                            <option value="03">Calana</option>
                                            <option value="04">Ciudad Nueva</option>
                                            <option value="05">Inclan</option>
                                            <option value="06">Pachia</option>
                                            <option value="07">Palca</option>
                                            <option value="08">Pocollay</option>
                                            <option value="09">Sama</option>
                                            <option value="10">Coronel Gregorio Albarracín L</option>
                                            <option value="01">Candarave</option>
                                            <option value="02">Cairani</option>
                                            <option value="03">Camilaca</option>
                                            <option value="04">Curibaya</option>
                                            <option value="05">Huanuara</option>
                                            <option value="06">Quilahuani</option>
                                            <option value="01">Locumba</option>
                                            <option value="02">Ilabaya</option>
                                            <option value="03">Ite</option>
                                            <option value="01">Tarata</option>
                                            <option value="02">Chucatamani</option>
                                            <option value="03">Estique</option>
                                            <option value="04">Estique-Pampa</option>
                                            <option value="05">Sitajara</option>
                                            <option value="06">Susapaya</option>
                                            <option value="07">Tarucachi</option>
                                            <option value="08">Ticaco</option>
                                            <option value="01">Tumbes</option>
                                            <option value="02">Corrales</option>
                                            <option value="03">La Cruz</option>
                                            <option value="04">Pampas de Hospital</option>
                                            <option value="05">San Jacinto</option>
                                            <option value="06">San Juan de la Virgen</option>
                                            <option value="01">Zorritos</option>
                                            <option value="02">Casitas</option>
                                            <option value="03">Canoas de Punta Sal</option>
                                            <option value="01">Zarumilla</option>
                                            <option value="02">Aguas Verdes</option>
                                            <option value="03">Matapalo</option>
                                            <option value="04">Papayal</option>
                                            <option value="01">Callaria</option>
                                            <option value="02">Campoverde</option>
                                            <option value="03">Iparia</option>
                                            <option value="04">Masisea</option>
                                            <option value="05">Yarinacocha</option>
                                            <option value="06">Nueva Requena</option>
                                            <option value="07">Manantay</option>
                                            <option value="01">Raymondi</option>
                                            <option value="02">Sepahua</option>
                                            <option value="03">Tahuania</option>
                                            <option value="04">Yurua</option>
                                            <option value="01">Padre Abad</option>
                                            <option value="02">Irazola</option>
                                            <option value="03">Curimana</option>
                                            <option value="01">Purus</option>
                                            <option value="99">Extranjero</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="step-actions">
                                    <button class="waves-effect waves-dark btn orange white-text next-step" data-feedback="">CONTINUAR</button>
                                </div>

                            </div>
                        </li>

                        <!-- Contacto (Responsble de pago) -->
                        <li class="step">

                            <div class="step-title waves-effect waves-dark">Contacto (Responsable)</div>

                            <div class="step-content">

                                <div class="row">
                                    <div class=" col s12 m6">
                                        <h3 class="orange-text">2. Datos generales del padre y/o apoderado</h3>
                                    </div>
                                    <div class="col s12 m6 text-required">
                                        <p class="red-text">(*) Campos obligatorios</p>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="tipo_documento_apoderado" id="tipo_documento_apoderado" required>
                                            <option value="" disabled selected>Tipo de documento *</option>
                                            <option value="01">DNI</option>
                                            <option value="04">CE</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m4" id="num_doc_apo_default">
                                        <input  name="numero_documento_apoderado" onkeypress="return onlyNumberKey(event)">
                                        <label for="numero_documento_apoderado">Número de documento *</label>
                                        <span class="helper-text" data-error="Digite su número de documento" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4" id="num_doc_apo_dni">
                                        <input  name="numero_documento_apoderado"  minlength=8" maxlength=8" data-length="8" type="text" class="validate" onkeypress="return onlyNumberKey(event)">
                                        <label for="numero_documento_apoderado">Número de documento *</label>
                                        <span class="helper-text" data-error="Digite 8 dígitos" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4" id="num_doc_apo_ce">
                                        <input  name="numero_documento_apoderado"  minlength="9" maxlength="9" data-length="9" type="text" class="validate" onkeypress="return onlyNumberKey(event)">
                                        <label for="numero_documento_apoderado">Número de documento *</label>
                                        <span class="helper-text" data-error="Digite 9 dígitos" data-success="¡Correcto!"></span>
                                    </div>

                                    <div class="input-field col s12 m4">
                                        <input type="tel" class="validate" name="telefono_apoderado"  minlength="9" maxlength="9" required>
                                        <label for="telefono_apoderado">Número de teléfono *</label>
                                        <span class="helper-text" data-error="Digite 9 dígitos" data-success="¡Correcto!"></span>
                                    </div>
                        
                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <input  name="nombres_apoderado" type="text" minlength=3" maxlength="40" class="validate" required>
                                        <label for="nombres_apoderado">Nombre *</label>
                                        <span class="helper-text" data-error="Digite su Nombre" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="apellido_paterno_apoderado" type="text" minlength=3" maxlength="40" class="validate" required>
                                        <label for="apellido_paterno_apoderado">Apellido paterno *</label>
                                        <span class="helper-text" data-error="Digite su Apellido paterno" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="apellido_materno_apoderado" type="text" minlength=3" maxlength="40" class="validate" required>
                                        <label for="apellido_materno_apoderado">Apellido materno *</label>
                                        <span class="helper-text" data-error="Digite su Apellido materno" data-success="¡Correcto!"></span>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="sexo_apoderado" id="sexo_apoderado" required>
                                            <option value="" disabled selected>Sexo *</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m4">
                                        <input  name="correo_apoderado" type="email" minlength=3" maxlength="40" class="validate" required>
                                        <label for="correo_apoderado">Correo electrónico *</label>
                                        <span class="helper-text" data-error="Digite su correo electrónico" data-success="¡Correcto!"></span>
                                    </div>
                                    
                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="parentesco" id="parentesco" required>   
                                            <option value="" selected="" disabled="">Parentesco *</option>
                                            <option value="PADRE">Padre/Madre</option>
                                            <option value="HIJOA">Hijo(a)</option>
                                            <option value="CONYU">Cònyugue</option>
                                            <option value="YERNU">Yerno/Nuera</option>
                                            <option value="SUEGR">Suegro(gra)</option>
                                            <option value="ABUEL">Abuelo(la)</option>
                                            <option value="NIETO">Nieto(ta)</option>
                                            <option value="HERMA">Hermano(na)</option>
                                            <option value="CUNAD">Cuñado(da)</option>
                                            <option value="BISAB">Bisabuelo(la)</option>
                                            <option value="BISNI">Bisnieto(ta)</option>
                                            <option value="TIOOA">Tío(a)</option>
                                            <option value="SOBRI">Sobrino(na)</option>
                                            <option value="PRIMO">Primo(ma)</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <label>
                                            <input type="checkbox" name="requiere_factura" id="requiere_factura" />
                                            <span>¿Requiere factura?</span>
                                        </label>
                                        <br><br>  
                                    </div>
                                </div>
                                <div class="row" id="div-factura">
                                    <div class="input-field col s12 m4">
                                        <input  name="numero_ruc" id="numero_ruc" type="number" minlength=11" maxlength="11" class="validate" >
                                        <label for="numero_ruc">Número RUC *</label>
                                        <span class="helper-text" data-error="Digite su Número RUC" data-success="¡Correcto!"></span>
                                    </div>
                                        <div class="input-field col s12 m4">
                                        <input  name="razon_social"  id="razon_social" type="text" minlength=1" maxlength="55" class="validate" >
                                        <label for="razon_social">Razón  social *</label>
                                        <span class="helper-text" data-error="Digite su Razón social" data-success="¡Correcto!"></span>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <input  name="direccion_fiscal" id="direccion_fiscal" type="text" minlength=1" maxlength="55" class="validate" >
                                        <label for="direccion_fiscal">Dirección fiscal *</label>
                                        <span class="helper-text" data-error="Digite su Dirección fiscal" data-success="¡Correcto!"></span>
                                    </div>
                                </div>

                                <div class="step-actions">
                                    <button class="waves-effect waves-dark btn orange white-text next-step">CONTINUAR</button>
                                    <button class="waves-effect waves-dark  grey white-text btn-flat previous-step">REGRESAR</button>
                                </div>

                            </div>
                        </li>

                        <!-- Registro académico -->
                        <li class="step">

                            <div class="step-title waves-effect waves-dark">Registro académico</div>

                            <div class="step-content">

                                <div class="row">
                                    <div class=" col s12 m6">
                                        <h3 class="orange-text">3. Detalle del servicio</h3>
                                    </div>
                                    <div class="col s12 m6 text-required">
                                        <p class="red-text">(*) Campos obligatorios</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m4" >
                                        <input type="text" class="datepicker validate" name="fecha_inicio" required>
                                        <label for="fecha_inicio">Fecha de inicio *</label>
                                    </div>  
                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="ano_academico" id="ano_academico" required>
                                            <option value="" disabled selected>Año académico *</option>
                                            <option value="M">2020</option>
                                            <option value="F">2021</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="tipo_preparacion" id="tipo_preparacion" required>
                                            <option value="" disabled selected>Tipo de preparación *</option>
                                            <option value="ACAUN">Pre UNI</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col s12 m4">
                                        <select class="validate" name="ciclo" id="ciclo" required>
                                            <option value="" selected="" disabled="">Ciclo *</option>
                                            <option value="00111">Repaso Uni 1</option>
                                            <option value="00112">Verano Uni</option> 
                                            <option value="00116">Anual</option>
                                            <option value="00127">Verano Especial</option>
                                            <option value="00163">Semestral</option>
                                            <option value="00166">Selección</option>
                                            <option value="00177">Ciclo especial escolar</option>
                                            <option value="SEMU2">Semestral II</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m4" id="sede_uni_default">
                                        <select class="validate" name="ciclo" id="ciclo">
                                            <option value="" selected="" disabled="">Sede *</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_repaso">
                                        <select class="validate" name="ciclo" id="ciclo_repaso">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_verano">
                                        <select class="validate" name="ciclo" id="ciclo_verano">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_anual">
                                        <select class="validate" name="ciclo" id="ciclo_anual">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_veranoespecial">
                                        <select class="validate" name="ciclo" id="ciclo_veranoespecial">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_semestral">
                                        <select class="validate" name="ciclo" id="ciclo_semestral">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_seleccion">
                                        <select class="validate" name="ciclo" id="ciclo_seleccion">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_escolar">
                                        <select class="validate" name="ciclo" id="ciclo_escolar">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="sede_uni_semestral2">
                                        <select class="validate" name="ciclo" id="ciclo_semestral2">
                                            <option value="" selected="" disabled="">Sede *</option>
                                            <option value="ISACADSB">Santa Beatriz Academia</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_default">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_default">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_repaso">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1089">Único - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_repaso">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1089">Único - Regular - Mañana</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_verano">
                                        <select class="validate" name="sesion" >
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1090">Único - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_verano">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1090">Único - Regular - Mañana</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_anual">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1137">Único - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_anual">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1137">Único - Regular - Mañana</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_veranoespecial">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1108">Único - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_veranoespecial">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1108">Único - Regular - Mañana</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_semestral">
                                        <select class="validate" name="sesion" id="sesion_uni_semestral_turno">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1138">Primer semestral - Regular - Mañana</option>
                                            <option value="1162">Primer semestral - Regular - Tarde</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_semestral_default">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_semestral_manana">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1138">Primer semestral - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_semestral_tarde">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1162">Primer semestral - Regular - Tarde</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_seleccion">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1166">Primer semestral - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_seleccion">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1166">Primer semestral - Regular - Mañana</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_escolar">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1167">Único - Regular - Mañana</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_escolar">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1167">Único - Regular - Mañana</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s12 m4" id="sesion_uni_semestral2">
                                        <select class="validate" name="sesion">
                                            <option value="" selected="" disabled="">Sesión *</option>
                                            <option value="1180">Segundo semestral - Regular - Mañana</option>
                                            <option value="1181">Segundo semestral - Regular - Tarde</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m4" id="seccion_uni_semestral2">
                                        <select class="validate" name="seccion">
                                            <option value="" selected="" disabled="">Sección *</option>
                                            <option value="1180">Segundo semestral - Regular - Mañana</option>
                                            <option value="1181">Segundo semestral - Regular - Tarde</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m4" >
                                        <select class="validate" name="origen" id="origen" required>
                                            <option value="" selected="" disabled="">Origen admisión *</option>
                                            <option value="ORITV">TV</option>
                                            <option value="CABLE">Cable</option>
                                            <option value="RADIO">Radio</option>
                                            <option value="DIARE">Diario / Revistas</option>
                                            <option value="INTER">Internet</option>
                                            <option value="PANEL">Paneles</option>
                                            <option value="PUBLI">Publicidad</option>
                                            <option value="RECOM">Recomendación</option>
                                            <option value="CERCA">Cercanía</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <label>
                                            <input type="checkbox" name="acepto_datos_personales" required />
                                            <span>Acepto la política de <a target="_blank" class="orange-text"  href="../https://www.trilce.edu.pe/proteccion-datos-personales/">datos personales *</a></span>
                                        </label>
                                    </div>
                                    <div class="input-field col s12 m12">
                                        <label>
                                            <input type="checkbox" name="acepto_terminos_condiciones" required />
                                            <span>Acepto los <a target="_blank" class="orange-text" href="../https://www.trilce.edu.pe/terminos-y-condiciones/">términos y condiciones *</a></span>
                                        </label>
                                    </div>
                                    <br><br>
                                </div>

                                <div class="row">
                                    &nbsp;&nbsp;
                                </div>

                                <div class="step-actions">

                                    <button  class="waves-effect waves-dark btn orange white-text next-step" type="button" onclick="_ajax()">ENVIAR REGISTRO</button>
									<button  class="waves-effect waves-dark btn orange white-text next-step" type="button" onclick="window.location='genera.php';">Generar CIP</button>

                                    <button class="waves-effect waves-dark grey white-text btn-flat previous-step">REGRESAR</button>
                                </div>

                            </div>

                        </li>
                        
                    </ul>
                </form>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row center">
                <br>
                <p>© 2021 Trilce. Todos los derechos reservados.</p>
            </div>
        </div>
    </section>

  
    <script src="../js/materialize.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);

            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems);

        });

    </script>
    <script src="../js/mstepper.js"></script>
    <script>
        function onlyNumberKey(evt) { 
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
                return false; 
            return true; 
        } 

        function anyThing(destroyFeedback) {
            setTimeout(function(){ destroyFeedback(true); }, 1500);
        }

        function noThing(destroyFeedback) {
            setTimeout(function(){ destroyFeedback(true); }, 10000);
        }

        function validationFunction(stepperForm, activeStepContent) {
            // You can use the 'stepperForm' to valide the whole form around the stepper:
            someValidationPlugin(stepperForm);
            // Or you can do something with just the activeStepContent
            someValidationPlugin(activeStepContent);
            // Return true or false to proceed or show an error
            return true;
        }

        var stepperDiv = document.querySelector('.stepper');
        console.log(stepperDiv);
        var stepper = new MStepper(stepperDiv);
    </script> 
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script>
        // VALIDACIONES

        // DNI
        $("#tipo_documento").change(function () {
            if ($(this).val() == '01'){
                $("#num_doc_dni").show();
                $("#num_doc_dni").attr('required');
                $("#num_doc_dni").addClass("validate");
                $("#num_doc_ce").hide();
                $("#num_doc_default").hide();
            }
        });

        // CE
        $("#tipo_documento").change(function () {
            if ($(this).val() == '04'){
                $("#num_doc_dni").hide();
                $("#num_doc_ce").show();
                $("#num_doc_ce").attr('required');
                $("#num_doc_ce").addClass("validate");
                $("#num_doc_default").hide();
            }
        });

        // DNI APODERADO
        $("#tipo_documento_apoderado").change(function () {
            if ($(this).val() == '01'){
                $("#num_doc_apo_dni").show();
                $("#num_doc_apo_dni").attr('required');
                $("#num_doc_apo_dni").addClass("validate");
                $("#num_doc_apo_ce").hide();
                $("#num_doc_apo_default").hide();
            }
        });

        // CE APODERADO
        $("#tipo_documento_apoderado").change(function () {
            if ($(this).val() == '04'){
                $("#num_doc_apo_dni").hide();
                $("#num_doc_apo_ce").show();
                $("#num_doc_apo_ce").attr('required');
                $("#num_doc_apo_ce").addClass("validate");
                $("#num_doc_apo_default").hide();
            }
        });

        // DIV FACTURA
        $('input[type="checkbox"]').click(function(){
            if ($(this).is(":checked")){
                $("#div-factura").show();
                $("#numero_ruc").prop('required',true);
                $("#razon_social").prop('required',true);
                $("#direccion_fiscal").prop('required',true);
            }
            else if ($(this).is(":not(:checked)")){
                $("#div-factura").hide();
                $("#numero_ruc").prop('required',false);
                $("#razon_social").prop('required',false);
                $("#direccion_fiscal").prop('required',false);
            } 
        });

        // SEDES UNI

        $("#ciclo").change(function () {
            if ($(this).val() == '00111'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").show();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").show();
                $("#seccion_uni_repaso").show();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == '00112'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").show();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").show();
                $("#seccion_uni_verano").show();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == '00116'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").show();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").show();
                $("#seccion_uni_anual").show();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == '00127'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").show();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").show();
                $("#seccion_uni_veranoespecial").show();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == '00163'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").show();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").show();
                $("#seccion_uni_semestral_default").show();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == '00166'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").show();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").show();
                $("#seccion_uni_seleccion").show();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == '00177'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").show();
                $("#sede_uni_semestral2").hide();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").show();
                $("#seccion_uni_escolar").show();
                $("#sesion_uni_semestral2").hide();
                $("#seccion_uni_semestral2").hide();
            }
        });
        $("#ciclo").change(function () {
            if ($(this).val() == 'SEMU2'){
                $("#sede_uni_default").hide();
                $("#sede_uni_repaso").hide();
                $("#sede_uni_verano").hide();
                $("#sede_uni_anual").hide();
                $("#sede_uni_veranoespecial").hide();
                $("#sede_uni_semestral").hide();
                $("#sede_uni_seleccion").hide();
                $("#sede_uni_escolar").hide();
                $("#sede_uni_semestral2").show();

                $("#sesion_default").hide();
                $("#seccion_default").hide();
                $("#sesion_uni_repaso").hide();
                $("#seccion_uni_repaso").hide();
                $("#sesion_uni_verano").hide();
                $("#seccion_uni_verano").hide();
                $("#sesion_uni_anual").hide();
                $("#seccion_uni_anual").hide();
                $("#sesion_uni_veranoespecial").hide();
                $("#seccion_uni_veranoespecial").hide();
                $("#sesion_uni_semestral").hide();
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").hide();
                $("#sesion_uni_seleccion").hide();
                $("#seccion_uni_seleccion").hide();
                $("#sesion_uni_escolar").hide();
                $("#seccion_uni_escolar").hide();
                $("#sesion_uni_semestral2").show();
                $("#seccion_uni_semestral2").show();
            }
        });


        $("#sesion_uni_semestral_turno").change(function () {
            if ($(this).val() == '1138'){
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").show();
                $("#seccion_uni_semestral_tarde").hide();
            }
        });
        $("#sesion_uni_semestral_turno").change(function () {
            if ($(this).val() == '1162'){
                $("#seccion_uni_semestral_default").hide();
                $("#seccion_uni_semestral_manana").hide();
                $("#seccion_uni_semestral_tarde").show();
            }
        });
    </script>
    <script>

    (function() {

      console.log("Iniciando")

      $("#formulario_registro").submit(function(event) {
        console.log("onclick", event);
        event.preventDefault();
        _ajax();
      });
    })()
  
    function _ajax() {

      //let dataForm = $("#formulario_registro").serialize();
      

            const cliente = {
                "TIPO_DOCUMENTO": $("#tipo_documento").val(),
                "NRO_DOCUMENTO": $("#numero_documento").val(),
                "FECHA_NACIM": $("#fecha_nacimiento").val(),
                "NOMBRES": $("#nombres").val(),
                "PRIMER_APELLIDO": $("#apellido_paterno").val(),
                "SEGUNDO_APELLIDO": $("#apellido_materno").val(),
                "SEXO": $("#sexo").val(),
                "DIRECCION1": $("#direccion").val(),
                "DIRECCION2": $("#direccion_secundaria").val(),
                "DEPTO_UBIG": $("#departamento").val(),
                "PROV_UBIG": $("#provincia").val(),
                "DIST_UBIG": $("#distrito").val(),
            };

            const contacto = {
                "TIPO_DOCUMENTO": $("#tipo_documento_apoderado").val(),
                "NRO_DOC": $("#numero_documento_apoderado").val(),
                "NRO_TELEFONO": $("#telefono_apoderado").val(),
                "NOMBRES": $("#nombres_apoderado").val(),
                "PRIMER_APELLIDO": $("#apellido_paterno_apoderado").val(),
                "SEGUNDO_APELLIDO": $("#apellido_materno_apoderado").val(),
                "SEXO": $("#sexo_apoderado").val(),
                "CORREO_E": $("#correo_apoderado").val(),
                "REQ_FACTURA": $("#requiere_factura").val(),
                "PARENTESCO": $("#parentesco").val(),
                "NRO_RUC": $("#numero_ruc").val(),
                "RAZON_SOCIAL": $("#razon_social").val(),
                "DIREC_FISCAL": $("#direccion_fiscal").val(),
            }

            const academico = {
                "FECHA_INICIO": $("#fecha_inicio").val(),
                "ANIO_ACADEMICO": 2020,
                "SERVICIO": $("#tipo_preparacion").val(),
                "NIVEL_ESTUDIO": $("#ciclo").val(),
                "BLDG_TBL": $("#sede").val(),
                "SESSION_NBR": $("#sesion").val(),
                "CLASS_SECTION": $("#seccion").val(),
                "ORIGEN_ADMISION": $("#origen").val()
            }
        
        
        
        const obj = JSON.stringify({ ...academico, contacto, cliente });

      console.log("data", obj)
      
      $.ajax({
        type: "POST",
        url: "https://intranet.trilce.edu.pe/api/cliente/publico/MA_Matricula",
        contentType: "application/json",
        data: obj,
        success: function(data) {
          console.log("success", data)
          if (data.EST_PROCESO == "1") {
            window.location = "https://www.trilce.edu.pe/matricula-online/gracias/";
          } else {
            alert("¡Faltan completar datos correctamente!")
          }
        },
        error: function(err) {
          console.log("error", err)
        },
        finally: function (params) {
            console.log("final", params)
        }
      });
    }
  </script>
</body>
</html>