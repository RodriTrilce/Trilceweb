<?php

include 'cn/cn.php';

$select_guia_pago_bbva_app = "SELECT * FROM guia_pago_bbva_app";

$result_guia_pago_bbva_app = mysqli_query($conexion, $select_guia_pago_bbva_app);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>