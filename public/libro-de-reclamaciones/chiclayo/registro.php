<?php
session_start();
include 'conexion.php';

function generateCodigo($id) 
{
    $date_secon = date("s");
    $date       = date("YmdHm");
    $first_tag  = $id . $date_secon;
    return "RC" . $first_tag . "-". $date;
}

function updateCodigo($id, $codigo, $conexion) 
{
    $update = "UPDATE reclamaciones SET codigo='$codigo' WHERE id='$id'";
    //return $update;
    return mysqli_query($conexion, $update);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = "6Lf1P5cqAAAAADISABmV2WHv2dkCuBdZ_n3sRo4d";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
    $responseKeys = json_decode($response, true);
         
    // Verificamos el honeypot
    if (!empty($_POST['honeypot'])) {
        // Si el campo honeypot no está vacío, es un bot
        echo "Error: Bot detectado.";
        exit;
    }


    if (intval($responseKeys["success"]) !== 1) {
        echo "Por favor complete la verificación CAPTCHA.";
        header('Location: ./index.php');
    } 
	else {
        $razon_social       = isset($_POST["razon_social"]) ? $_POST["razon_social"] : null;
        $ruc                = isset($_POST["ruc"]) ? $_POST["ruc"] : null;
        $institucion        = isset($_POST["institucion"]) ? $_POST["institucion"] : null;
        $nombres_apellidos  = isset($_POST["nombres_apellidos"]) ? $_POST["nombres_apellidos"] : null;
        $genero             = isset($_POST["genero"]) ? $_POST["genero"] : null;
        $sede               = isset($_POST["sede"]) ? $_POST["sede"] : null;
        $grado              = isset($_POST["grado"]) ? $_POST["grado"] : null;
        $dni                = isset($_POST["dni"]) ? $_POST["dni"] : null;
        $celular            = isset($_POST["celular"]) ? $_POST["celular"] : null;
        $direccion          = isset($_POST["direccion"]) ? $_POST["direccion"] : null;
        $correo             = isset($_POST["correo"]) ? $_POST["correo"] : null;
        $nombres_apoderado  = isset($_POST["nombres_apoderado"]) ? $_POST["nombres_apoderado"] : null;
        $celular_apoderado  = isset($_POST["celular_apoderado"]) ? $_POST["celular_apoderado"] : null;
        $correo_apoderado   = isset($_POST["correo_apoderado"]) ? $_POST["correo_apoderado"] : null;
        $producto_servicio  = isset($_POST["producto_servicio"]) ? $_POST["producto_servicio"] : null;
        $monto_reclamado    = isset($_POST["monto_reclamado"]) ? $_POST["monto_reclamado"] : null;
        $descripcion        = isset($_POST["descripcion"]) ? $_POST["descripcion"] : null;
        $reclamo_queja      = isset($_POST["reclamo_queja"]) ? $_POST["reclamo_queja"] : null;
        $detalle            = isset($_POST["detalle"]) ? $_POST["detalle"] : null;
        $pedido_concreto    = isset($_POST["pedido_concreto"]) ? $_POST["pedido_concreto"] : null;

        if (
            $razon_social       === null || 
            $ruc                === null || 
            $institucion        === null || 
            $nombres_apellidos  === null ||
            $genero             === null || 
            $sede               === null || 
            $grado              === null || 
            $dni                === null || 
            $celular            === null ||
            $direccion          === null || 
            $correo             === null || 
            $nombres_apoderado  === null || 
            $celular_apoderado  === null ||
            $correo_apoderado   === null || 
            $producto_servicio  === null || 
            $monto_reclamado    === null ||
            $descripcion        === null || 
            $reclamo_queja      === null || 
            $detalle            === null || 
            $pedido_concreto    === null
        ) 
        {
            ?>
            <script type='text/javascript'>
                alert('No hay datos por procesar');
                document.location.href='https://www.trilce.edu.pe/libro-de-reclamaciones/chiclayo/';
            </script>
        <?php
        } 
        else 
        {
            $insertar = "INSERT INTO reclamaciones
            (
            razon_social,
            ruc,
            institucion,
            nombres_apellidos,
            genero,
            sede,
            grado,
            dni,
            celular,
            direccion,
            correo,
            nombres_apoderado,
            celular_apoderado,
            correo_apoderado,
            producto_servicio,
            monto_reclamado,
            descripcion,
            reclamo_queja,
            detalle,
            pedido_concreto) 
            VALUES (
            '$razon_social',
            '$ruc',
            '$institucion',
            '$nombres_apellidos',
            '$genero',
            '$sede',
            '$grado',
            '$dni',
            '$celular',
            '$direccion',
            '$correo',
            '$nombres_apoderado',
            '$celular_apoderado',
            '$correo_apoderado',
            '$producto_servicio',
            '$monto_reclamado',
            '$descripcion',
            '$reclamo_queja',
            '$detalle',
            '$pedido_concreto')";
        
            //CONSULTA
            $last_id = "0";
            $date = "0000";
            if (mysqli_query($conexion, $insertar)) 
            {
                $last_id                        = mysqli_insert_id($conexion);
                $codigo                         = generateCodigo($last_id);
                $registro                       = updateCodigo($last_id, $codigo, $conexion);
                $_SESSION["codigo"]             = $codigo;
                $_SESSION["razon_social"]       = $razon_social;
                $_SESSION["ruc"]                = $ruc;
                $_SESSION["institucion"]        = $institucion;
                $_SESSION["nombres_apellidos"]  = $nombres_apellidos;
                $_SESSION["genero"]             = $genero;
                $_SESSION["sede"]               = $sede;
                $_SESSION["grado"]              = $grado;
                $_SESSION["dni"]                = $dni;
                $_SESSION["celular"]            = $celular;
                $_SESSION["direccion"]          = $direccion;
                $_SESSION["correo"]             = $correo;
                $_SESSION["nombres_apoderado"]  = $nombres_apoderado;
                $_SESSION["celular_apoderado"]  = $celular_apoderado;
                $_SESSION["correo_apoderado"]   = $correo_apoderado;
                $_SESSION["producto_servicio"]  = $producto_servicio;
                $_SESSION["monto_reclamado"]    = $monto_reclamado;
                $_SESSION["descripcion"]        = $descripcion;
                $_SESSION["reclamo_queja"]      = $reclamo_queja;
                $_SESSION["detalle"]            = $detalle;
                $_SESSION["pedido_concreto"]    = $pedido_concreto;
            }
        
            //ENVIO
            require_once 'mail.php';
            require_once __DIR__."/gracias.php";
        }
    }
}

?>