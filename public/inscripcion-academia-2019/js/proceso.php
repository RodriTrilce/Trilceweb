<?php
//include('db.php');

define('HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','cYPS-m=gXoZVE6HkH0{6');
define('DB_NAME', 'inscripciones-academia2');

$conexion = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");

//if(mysqli_connect_errno($conexion))  echo "Failed to connect MySQL: " .mysqli_connect_error();
if(mysqli_connect_errno($conexion))
{
    echo "Conexión fallida  a la base de datos: " . mysqli_connect_error();
}
else
{
    echo "Exito, registro exitoso";
}

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

$sql= mysqli_query($conexion,"SELECT COUNT(*) AS dni FROM inscritos_matricula WHERE dni='$dni'");

$row=mysqli_fetch_object($sql);

if(mysqli_num_rows($sql)>0){
$query = mysqli_query($conexion, "INSERT INTO inscritos_matricula VALUES('','Pendiente','$nombre ' '$apellido','$dni','$telefono','$email','$sede','$prepa','$ciclo','$turno','$comentario','$medio','$terminos','$time')");
}

else {
	echo "0 results";
}

mysqli_close($conexion);

?>