<?php

session_start();

include 'conexion.php';

$nombre     = $_POST["nombre"];
$dni        = $_POST["dni"];
$email      = $_POST["email"];
$terminos   = $_POST["aceptar"];
$time       = date("Y-m-d H:i:s");


// INSERTAR

$insertar = "INSERT INTO tc (nombres_apellidos,dni,email,acepto,fecha) VALUES ('$nombre','$dni','$email','$terminos','$time')";
//var_dump($insertar);

//CONSULTA
//$resultado = mysqli_query($conexion, $insertar);

if (mysqli_query($conexion, $insertar)) 
{
    $_SESSION["nombre"]     = $nombre;
    $_SESSION["dni"]        = $dni;
    $_SESSION["email"]      = $email;
    $_SESSION["terminos"]   = $terminos;
    $_SESSION["time"]       = $time;

}

//ENVIO
require_once 'mail.php';
//require_once __DIR__."/gracias.html";

?>