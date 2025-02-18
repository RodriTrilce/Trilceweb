<?php

include 'cn/cn.php';

$select_banner_uni_anual = "SELECT * FROM banner_uni_anual";

$result_banner_uni_anual = mysqli_query($conexion, $select_banner_uni_anual);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>