<?php

//session_start();
//$conexion = mysqli_connect("localhost", "root", "cYPS-m=gXoZVE6HkH0{6", "web_academia_2021");
$conexion = mysqli_connect("localhost", "root", "", "web_academia_2021");

mysqli_set_charset($conexion, "utf8");
// Check connection
if (!$conexion) 
{
	die("Connection failed: " . mysqli_connect_error());
}

?>