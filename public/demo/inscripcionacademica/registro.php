<?php

include 'conexion.php';

$dni_alumno = $_POST["dni_alumno"];
$tipo_preparacion = $_POST["tipo_preparacion"];
$ciclo = $_POST["ciclo"];
$turno = $_POST["turno"];
$sede = $_POST["sede"];
$nombres = $_POST["nombres"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$departamento = $_POST["departamento"];
$provincia = $_POST["provincia"];
$distrito = $_POST["distrito"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];
$genero = $_POST["genero"];
$ano_termino_colegio = $_POST["ano_termino_colegio"];
$colegio = $_POST["colegio"];
$universidad_postula = $_POST["universidad_postula"];
$carrera = $_POST["carrera"];
$academia_anterior = $_POST["academia_anterior"];
$dato_apoderado = $_POST["dato_apoderado"];
$nombres_apoderado = $_POST["nombres_apoderado"];
$dni_apoderado = $_POST["dni_apoderado"];
$telefono_apoderado = $_POST["telefono_apoderado"];
$celular_apoderado = $_POST["celular_apoderado"];
$correo_apoderado = $_POST["correo_apoderado"];
$centro_trabajo = $_POST["centro_trabajo"];
$telefono_trabajo = $_POST["telefono_trabajo"];
$ocupacion = $_POST["ocupacion"];
$contacto_emergencia = $_POST["contacto_emergencia"];

// INSERTAR
$insertar = "INSERT INTO inscripciones(dni_alumno, tipo_preparacion, ciclo, turno, sede, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, departamento, provincia, distrito, direccion, telefono, celular, correo, genero, ano_termino_colegio, colegio, universidad_postula, carrera, academia_anterior, dato_apoderado, nombres_apoderado, dni_apoderado, telefono_apoderado, celular_apoderado, correo_apoderado, centro_trabajo, telefono_trabajo, ocupacion, contacto_emergencia) VALUES ('$dni_alumno', '$tipo_preparacion', '$ciclo', '$turno', '$sede', '$nombres', '$apellido_paterno', '$apellido_materno', '$fecha_nacimiento', '$departamento', '$provincia','$distrito', '$direccion', '$telefono', '$celular', '$correo', '$genero', '$ano_termino_colegio', '$colegio', '$universidad_postula', '$carrera', '$academia_anterior', '$dato_apoderado', '$nombres_apoderado', '$dni_apoderado', '$telefono_apoderado', '$celular_apoderado', '$correo_apoderado', '$centro_trabajo', '$telefono_trabajo', '$ocupacion', '$contacto_emergencia')";

//CONSULTA
$resultado = mysqli_query($conexion, $insertar);

require_once __DIR__."/ficha/ficha.php";