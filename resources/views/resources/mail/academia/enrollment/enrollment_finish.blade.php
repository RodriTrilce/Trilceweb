
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Trilce - inscripción de matrícula en linea</title>
</head>
<body>
  <center>
    <a href="{{ env('APP_URL') }}/academia/preinscripcion/descargar-pdf?token={{ encrypt($data->step1_dni) }}" target="_blank">
      <img src="{{ $message->embed($image) }}" alt="">
    </a>
  </center>
</body>
</html>
