@section('title', 'UNI - Ciclo Verano')
<style>
    * {
      padding: 0px;
      border: 0px;
      margin: 0px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    #ciclos {
      padding: 10px;
      color: #53565a;
    }

    .table-rest {
      background: white;
      width: 100%;
      font-family: "CaeciliaLTPro-85Heavy";
      color: #53565a;
    }

    .table-rest tr {
      padding: 5px;
    }

    .table-rest tr th,
    .table-rest tr td {
      padding: 8px;
      text-align: center;
      margin: 0 auto;
    }

    #table-rest .acaun {
      visibility:visible;
    }

    #table-rest .acaca,
    #table-rest .acasm,
    #table-rest .anual,
    #table-rest .semestral,
    #table-rest .repaso {
      display: none;
    }
  </style>


  <div id="ciclos"></div>

  <script>
    // CALL TO SERVICE REST
    var url = "http://intranet.trilce.edu.pe/api/Cliente/Publico/ServicioAtencion";
    var xhr = new XMLHttpRequest()
    xhr.open('GET', url, true)
    xhr.onload = function() {
      var users = JSON.parse(xhr.responseText);
      if (xhr.readyState == 4 && xhr.status == "200") {
        var table = "<table id='table-rest' class='table-rest'><tr> <th>Servicio</th> <th>Ciclo</th> <th>Sede</th> <th>Inicio</th> <th>Fin</th> <th>Pago contado</th> <th>C1</th> <th>C2</th> <th>C3</th> <th>C4</th> <th>Pago mensual</th> <th>Horario</th> <th>Turno</th> </tr>";
        var tr = "";
        var tableend = "</table>";
        var SERVICIO, NIVEL_ESTUDIO_DESCRIPCION, BLDG_DESCRIPCION, FECHA_INICIO, FECHA_FIN, PAGO_CONTADO, PAGO_CUOTA1, PAGO_CUOTA2, PAGO_CUOTA3, PAGO_CUOTA4, PAGO_MENSUAL, HORARIO_SEMANAL1, TURNO;

        for (var i = 0; i < users.length; i++) {
          SERVICIO = users[i]["SERVICIO"];
          NIVEL_ESTUDIO_DESCRIPCION = users[i]['NIVEL_ESTUDIO_DESCRIPCION'];
          BLDG_DESCRIPCION = users[i]['BLDG_DESCRIPCION'];
          FECHA_INICIO = users[i]['FECHA_INICIO'];
          FECHA_FIN = users[i]['FECHA_FIN'];
          PAGO_CONTADO = users[i]['PAGO_CONTADO'];
          PAGO_CUOTA1 = users[i]['PAGO_CUOTA1'];
          PAGO_CUOTA2 = users[i]['PAGO_CUOTA2'];
          PAGO_CUOTA3 = users[i]['PAGO_CUOTA3'];
          PAGO_CUOTA4 = users[i]['PAGO_CUOTA4'];
          PAGO_MENSUAL = users[i]['PAGO_MENSUAL'];
          HORARIO_SEMANAL1 = users[i]['HORARIO_SEMANAL1'];
          TURNO = users[i]['TURNO'];

          tr += "<tr><td>" + SERVICIO + "</td><td>" + NIVEL_ESTUDIO_DESCRIPCION + "</td><td>" + BLDG_DESCRIPCION + "</td><td>" + FECHA_INICIO + "</td><td>" + FECHA_FIN + "</td><td>" + PAGO_CONTADO + "</td><td>" + PAGO_CUOTA1 + "</td><td>" + PAGO_CUOTA2 + "</td><td>" + PAGO_CUOTA3 + "</td><td>" + PAGO_CUOTA4 + "</td><td>" + PAGO_MENSUAL + "</td><td>" + HORARIO_SEMANAL1 + "</td><td>" + TURNO + "</td></tr>";

        }
        var finaltable = table + tr + tableend;
        document.getElementById('ciclos').innerHTML = finaltable;

        console.log(users);
        console.log(typeof users)
        console.table(users);
      } else {
        console.error(users);
      }
    }
    xhr.send(null);
  </script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
    $("tr:contains('ACASM')").addClass('acasm');
  </script>
  <script>
    $("tr:contains('ACAUN')").addClass('acaun');
  </script>
  <script>
    $("tr:contains('ACACA')").addClass('acaca');
  </script>
  <script>
    $("tr:contains('Semestral')").addClass('semestral');
  </script>
  <script>
    $("tr:contains('Anual')").addClass('anual');
  </script>
  <script>
    $("tr:contains('Repaso')").addClass('repaso');
  </script>
  <script>
    $("tr:contains('Verano')").addClass('verano');
  </script>