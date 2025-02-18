<?php

$name = "Javier ";

if(isset($_POST['name'])){
    $name = $_POST['name'];
}

$message .= "<p>Hola, te envío una postal $name</p>";

$to_email = 'jastuvilca@trilce.edu.pe';
$subject = 'Mensaje de Navidad';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'De: Trilce  <comunicados@trilce.edu.pe>';

mail($to_email, $subject, $message, implode("\r\n", $headers));

?>