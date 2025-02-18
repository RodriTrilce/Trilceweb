<?php

include 'cn/cn.php';

$select_solucionarios_uni = "SELECT * FROM solucionarios where categoria='1'";

$result_solucionarios_uni = mysqli_query($conexion, $select_solucionarios_uni);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>