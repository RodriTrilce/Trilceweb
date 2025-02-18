<?php

include 'cn/cn.php';

$select_opciones_mejoropcion_home = "SELECT * FROM opciones_mejoropcion_home";

$result_opciones_mejoropcion_home = mysqli_query($conexion, $select_opciones_mejoropcion_home);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>