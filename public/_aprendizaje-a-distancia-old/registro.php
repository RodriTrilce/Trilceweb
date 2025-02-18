<?php

include 'conexion.php';

$_status = $_POST["_status"];
$name_apoderado = $_POST["name_apoderado"];
$dni_apoderado = $_POST["dni_apoderado"];
$name = $_POST["name"];
$dni = $_POST["dni"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$venue = $_POST["venue"];
$grade = $_POST["grade"];
$comment = $_POST["comment"];
$method_contact = $_POST["method_contact"];

// INSERTAR
$insertar = "INSERT INTO form_colegio_2020(_status, name_apoderado, dni_apoderado, name, dni, phone, email, venue, grade, comment, method_contact) VALUES ('$_status', '$name_apoderado', '$dni_apoderado', '$name', '$dni', '$phone', '$email', '$venue', '$grade', '$comment', '$method_contact')";

//CONSULTA
$resultado = mysqli_query($conexion, $insertar);

require_once __DIR__."/gracias.php";