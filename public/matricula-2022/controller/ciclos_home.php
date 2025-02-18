<?php

include 'cn/cn.php';

$select_ciclos_home = "SELECT * FROM ciclos_home";

$result_ciclos_home = mysqli_query($conexion, $select_ciclos_home);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>