<?php

include 'cn/cn.php';

$select_banner_home = "SELECT * FROM banner_home";

$result_banner_home = mysqli_query($conexion, $select_banner_home);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>