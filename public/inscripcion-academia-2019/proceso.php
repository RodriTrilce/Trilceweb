<?php
//include('db.php');

 header('Content-Type: text/html; charset=ISO-8859-1');

define('HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','cYPS-m=gXoZVE6HkH0{6');
define('DB_NAME', 'inscripciones-academia');

$conexion = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");

if(mysqli_connect_errno($conexion))  echo "Failed to connect MySQL: " .mysqli_connect_error();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$sede = $_POST['sede'];
$prepa = $_POST['prepa'];
$ciclo = $_POST['ciclo'];
$turno = $_POST['turno'];
$comentario = $_POST['comentario'];
$medio = $_POST['medio'];
$terminos = $_POST['terminos'];
$time = date("Y-m-d H:i:s");

$mysqli = mysqli_query($conexion, "INSERT INTO inscritos_matricula VALUES('','Pendiente','$nombre ' '$apellido','$dni','$telefono','$email','$sede','$prepa','$ciclo','$turno','$comentario','$medio','$terminos','$time')");


?>