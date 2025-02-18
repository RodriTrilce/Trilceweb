<?php

$conexion = mysqli_connect("localhost", "root", "cYPS-m=gXoZVE6HkH0{6", "tc_academia");
mysqli_set_charset($conexion, "utf8");

// Check connection
if (!$conexion) 
{
	die("Connection failed: " . mysqli_connect_error());
}

?>