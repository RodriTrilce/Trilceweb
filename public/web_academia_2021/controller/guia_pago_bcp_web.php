<?php

include 'cn/cn.php';

$select_guia_pago_bcp_web = "SELECT * FROM guia_pago_bcp_web";

$result_guia_pago_bcp_web = mysqli_query($conexion, $select_guia_pago_bcp_web);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>