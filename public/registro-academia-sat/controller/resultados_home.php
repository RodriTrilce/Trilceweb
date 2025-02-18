<?php

include 'cn/cn.php';

$select_resultados_home = "SELECT * FROM resultados_home";

$result_resultados_home = mysqli_query($conexion, $select_resultados_home);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>