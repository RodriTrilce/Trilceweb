<?php
define('HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','trilcemysql2018');
define('DB_NAME', 'inscripciones-academia');
$con = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");
// Check connection
if(mysqli_connect_errno($con))  echo "Failed to connect MySQL: " .mysqli_connect_error();
?>
