<?php

include 'cn/cn.php';

$select_herramientas_home = "SELECT * FROM herramientas_home";

$result_herramientas_home = mysqli_query($conexion, $select_herramientas_home);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>