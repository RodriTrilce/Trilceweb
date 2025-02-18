<?php

include 'cn/cn.php';

$select_preparacion_home = "SELECT * FROM preparacion_home";

$result_preparacion_home = mysqli_query($conexion, $select_preparacion_home);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>