
<?php
   $user = $_POST['user'];
   $password = $_POST['password'];

   if (($user == "mDigital") AND (md5($password)== "54ace58a3938f445cd0e8e6e6558e9cc")) {
      echo "Descargar el Excel: <a href=excel.php>Click Aquí</a>";
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="index.php">Volver</a>';
   }
?>