<?php

$conexion = mysqli_connect("localhost", "userreclamacion", "gPROthZfKfaXztnw", "c1libro-reclamaciones");
mysqli_set_charset($conexion, "utf8");

// Check connection
if (!$conexion) {
  die("Connection failed: " . mysqli_connect_error());
}

?>