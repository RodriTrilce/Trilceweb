<?php
include('db.php');

//Retrieve form data. 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sede=$_POST['sede'];
$prepa=$_POST['prepa'];
$ciclo=$_POST['ciclo'];
$turno=$_POST['turno'];
$comentario=$_POST['comentario'];
$medio=$_POST['medio'];
$terminos=$_POST['terminos'];
$time= date("Y-m-d H:i:s");

if($nombre == '' && $apellido == '' && $dni == '' && $telefono == '' && $email == '' && $sede == '' && $prepa == '' && $ciclo == '' && $turno == '' && $comentario == '' && $medio == '' && $terminos == ''){
	return false;
 }else{
	$mysqli = mysqli_query($con,"INSERT INTO inscritos_matricula VALUES('','Pendiente','$nombre ' '$apellido','$dni','$telefono','$email','$sede','$prepa','$ciclo','$turno','$comentario','$medio','$terminos','$time')");
	if($mysqli->error){
		echo $mysqli->error;
	}else{
		return true;
	}
 }



//$mysqli = mysqli_query($con,"INSERT INTO inscritos_matricula VALUES('','Pendiente','$nombre','$dni','$telefono','$email','$sede','$prepa','$ciclo','$turno','$comentario','$medio','$terminos','$time')");
//$mysqli = mysqli_query($con,"INSERT INTO inscritos_matricula VALUES('','cris','47598190','965713138','christhisam@gmail.com','1','1','1','1','ddsfsfds','wha') ");

/*if($mysqli->error){
	echo $mysqli->error;
}else{
	echo '1';
}*/
