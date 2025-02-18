<?php

include 'cn/cn.php';

$select_solucionarios_san_marcos = "SELECT * FROM solucionarios where categoria='2'";

$result_solucionarios_san_marcos = mysqli_query($conexion, $select_solucionarios_san_marcos);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>