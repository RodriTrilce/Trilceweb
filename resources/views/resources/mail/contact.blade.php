<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Mensaje de forulario</title>
</head>
<body>
    <p>[Enviado desde el formulario de contacto de Trilce - {{ $type }}</p>
    <p>
      <ul>
        <li>Nombre: {{ $name }}</li>
        <li>Email: {{ $email }}</li>
        <li>Teléfono: {{ $phone }}</li>
      </ul>
    </p>
    <hr>
    <p>
      {{ $content }}
    </p>
</body>
</html>
