<?php

 header('Content-Type: text/html; charset=ISO-8859-1');
 
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["dni"])) {
  $query = "SELECT * FROM inscritos_matricula WHERE dni='" . $_POST["dni"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='estado-no-disponible-usuario' id='error'>&iexcl;El DNI ya se encuentra registrado&#33;</span> <br> <span class='moreinfo'>Consulte m&aacute;s informaci&oacute;n <a href='https://api.whatsapp.com/send?phone=51922336565&text=Hola, %20me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Academias%20Trilce' target='_blank'>aqu&iacute;</a></span>";
      echo "<script>";
      echo "console.log('ERROR: DNI Duplicado')";
      echo "</script>";
      echo "<script>";
      echo "document.getElementById('submit').disabled = true;";
      echo "</script>";
      
  }else{
      echo "<span class='estado-disponible-usuario' id='exito'>&iexcl;El DNI no est&aacute; registrado&#33;</span>";
      echo "<script>";
      echo "console.log('EXITO: DNI Nuevo')";
      echo "</script>";
      echo "<script>";
      echo "document.getElementById('submit').disabled = false;";
      echo "</script>";
  }
}

?>
