<?php

$conexion = mysqli_connect("localhost", "c1user_lp", "uj_GG9MBrQew", "c1landing_pages");
mysqli_set_charset($conexion, "utf8");

// Check connection
if (!$conexion) {
  die("Connection failed: " . mysqli_connect_error());
}

?>