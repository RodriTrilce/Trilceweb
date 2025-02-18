<?php

include 'cn/cn.php';

$select_solucionarios_catolica = "SELECT * FROM solucionarios where categoria='3'";

$result_solucionarios_catolica = mysqli_query($conexion, $select_solucionarios_catolica);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>