<?php include('db.php');?>

<?php

 header('Content-Type: text/html; charset=ISO-8859-1');

 
if (isset($_POST['sede_id'])) {
  
  $qry = "select * from prepa where sede_id=".mysqli_real_escape_string($con,$_POST['sede_id'])." and active=1 order by nombre";
  $res = mysqli_query($con, $qry);
  if(mysqli_num_rows($res) > 0) {
    echo '<option value="">Preparación</option>';
    while($row = mysqli_fetch_object($res)) {
      echo '<option value="'.$row->id.'">'.utf8_encode($row->nombre).'</option>';
    }
  } else {
    echo '<option value="">No hay data</option>';
  }
}

if(isset($_POST['prepa_id'])) {
  $qry = "select * from ciclos where prepa_id=".mysqli_real_escape_string($con,$_POST['prepa_id'])." and active=1 order by nombre";
  $res = mysqli_query($con, $qry);
  if(mysqli_num_rows($res) > 0) {
    echo '<option value="">Ciclo</option>';
    while($row = mysqli_fetch_object($res)) {
      echo '<option value="'.$row->id.'">'.utf8_encode($row->nombre).'</option>';
    }
  } else {
    echo '<option value="">No hay data</option>';
  }
} 

else if(isset($_POST['ciclo_id'])) {
  $qry = "select * from turnos where ciclo_id=".mysqli_real_escape_string($con,$_POST['ciclo_id'])." and active=1 order by nombre";
  $res = mysqli_query($con, $qry);
  if(mysqli_num_rows($res) > 0) {
    echo '<option value="">Turno</option>';
    while($row = mysqli_fetch_object($res)) {
      echo '<option value="'.$row->id.'">'.utf8_encode(
      $row->nombre).'</option>';
    }
  } else {
    echo '<option value="">No hay data</option>';
  }
}

?>