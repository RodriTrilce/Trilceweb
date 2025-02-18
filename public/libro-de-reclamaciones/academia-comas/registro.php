<?php

session_start();

include 'conexion.php';


function generateCodigo($id) {
    $date_secon = date("s");
    $date = date("YmdHm");
    $first_tag = $id . $date_secon;
    return "RC" . $first_tag . "-". $date;
}

function updateCodigo($id, $codigo, $conexion) {
    $update = "UPDATE reclamaciones SET codigo='$codigo' WHERE id='$id'";
    //return $update;
    return mysqli_query($conexion, $update);
}

$razon_social = $_POST["razon_social"];
$ruc = $_POST["ruc"];
$institucion = $_POST["institucion"];
$nombres_apellidos = $_POST["nombres_apellidos"];
$genero = $_POST["genero"];
$sede = $_POST["sede"];
$grado = $_POST["grado"];
$dni = $_POST["dni"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$nombres_apoderado = $_POST["nombres_apoderado"];
$celular_apoderado = $_POST["celular_apoderado"];
$correo_apoderado = $_POST["correo_apoderado"];
$producto_servicio = $_POST["producto_servicio"];
$monto_reclamado = $_POST["monto_reclamado"];
$descripcion = $_POST["descripcion"];
$reclamo_queja = $_POST["reclamo_queja"];
$detalle = $_POST["detalle"];
$pedido_concreto = $_POST["pedido_concreto"];

// INSERTAR
$insertar = "INSERT INTO reclamaciones(razon_social, ruc, institucion, nombres_apellidos, genero, sede, grado,  dni,  celular,  direccion,  correo,  nombres_apoderado,  celular_apoderado,  correo_apoderado,  producto_servicio,  monto_reclamado,  descripcion,  reclamo_queja,  detalle,  pedido_concreto) VALUES ('$razon_social',  '$ruc',  '$institucion',  '$nombres_apellidos',  '$genero',  '$sede',  '$grado',  '$dni',  '$celular',  '$direccion',  '$correo',  '$nombres_apoderado',  '$celular_apoderado',  '$correo_apoderado',  '$producto_servicio',  '$monto_reclamado',  '$descripcion',  '$reclamo_queja',  '$detalle',  '$pedido_concreto')";

//CONSULTA
$last_id = "0";
$date = "0000";
if (mysqli_query($conexion, $insertar)) {
    $last_id = mysqli_insert_id($conexion);
    $codigo = generateCodigo($last_id);
    $registro = updateCodigo($last_id, $codigo, $conexion);
    $_SESSION["codigo"] = $codigo;
    $_SESSION["razon_social"] = $razon_social;
    $_SESSION["ruc"] = $ruc;
    $_SESSION["institucion"] = $institucion;
    $_SESSION["nombres_apellidos"] = $nombres_apellidos;
    $_SESSION["genero"] = $genero;
    $_SESSION["sede"] = $sede;
    $_SESSION["grado"] = $grado;
    $_SESSION["dni"] = $dni;
    $_SESSION["celular"] = $celular;
    $_SESSION["direccion"] = $direccion;
    $_SESSION["correo"] = $correo;
    $_SESSION["nombres_apoderado"] = $nombres_apoderado;
    $_SESSION["celular_apoderado"] = $celular_apoderado;
    $_SESSION["correo_apoderado"] = $correo_apoderado;
    $_SESSION["producto_servicio"] = $producto_servicio;
    $_SESSION["monto_reclamado"] = $monto_reclamado;
    $_SESSION["descripcion"] = $descripcion;
    $_SESSION["reclamo_queja"] = $reclamo_queja;
    $_SESSION["detalle"] = $detalle;
    $_SESSION["pedido_concreto"] = $pedido_concreto;
}

//ENVIO
 
require_once 'mail.php';

require_once __DIR__."/gracias.php"; 

?>
