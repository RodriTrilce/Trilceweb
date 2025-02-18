<?php

include 'cn/cn.php';

$select_matricula_uni_anual = "SELECT * FROM matricula_uni_anual";

$result_matricula_uni_anual = mysqli_query($conexion, $select_matricula_uni_anual);
//mostrarDatos(mysqli_fetch_array($result));
//mysqli_free_result($result);
//mysqli_close($conexion);

/* cerrar la conexión */
//$conexion->close();
?>