<?php

include 'cn/cn.php';

$select_guia_pago_scotiabank_web = "SELECT * FROM guia_pago_scotiabank_web";

$result_guia_pago_scotiabank_web = mysqli_query($conexion, $select_guia_pago_scotiabank_web);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>