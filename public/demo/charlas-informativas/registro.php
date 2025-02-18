<?php

session_start();

include 'conexion.php';

$_status = $_POST["_status"];
$name = $_POST["name"];
$dni = $_POST["dni"];
$name_apoderado = $_POST["name_apoderado"];
$dni_apoderado = $_POST["dni_apoderado"];
$venue = $_POST["venue"];
$grade = $_POST["grade"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// INSERTAR
$insertar = "INSERT INTO form_charlas_informativas(_status,  name, dni, name_apoderado, dni_apoderado, venue, grade, phone, email) VALUES ('$_status', '$name', '$dni', '$name_apoderado', '$dni_apoderado', '$venue', '$grade', '$phone', '$email')";

//CONSULTA
//$resultado = mysqli_query($conexion, $insertar);


if (mysqli_query($conexion, $insertar)) {
    $_SESSION["_status"]= $_status;
    $_SESSION["name"]= $name;
    $_SESSION["dni"]= $dni;
    $_SESSION["name_apoderado"]= $name_apoderado;
    $_SESSION["dni_apoderado"]= $dni_apoderado;
    $_SESSION["venue"]= $venue;
    $_SESSION["grade"]= $grade;
    $_SESSION["phone"]= $phone;
    $_SESSION["email"]= $email;

}


//ENVIO

require_once 'mail.php';

require_once __DIR__."/gracias.php";

?>