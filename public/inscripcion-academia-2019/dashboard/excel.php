<?php
header('Content-type:application/xls');
header('Content-disposition: attachment; filename=incritos-matriculas.xls');

include('db.php');
$query="SELECT * FROM inscritos_matricula";
$result=mysqli_query($con, $query);

function getSede($sede)
{
    global $con;
    $query = "SELECT * FROM sedes WHERE id=$sede";
    $response = mysqli_query($con, $query);
    if(mysqli_num_rows($response) > 0) {
       
        while($row = mysqli_fetch_object($response)) {
            echo $row->nombre;
        }
    } else {
        echo 'No hay data';
    }
}

function getPreparacion($prepa)
{
    global $con;
    $query = "SELECT * FROM prepa WHERE id=$prepa";
    $response = mysqli_query($con, $query);
    if(mysqli_num_rows($response) > 0) {
       
        while($row = mysqli_fetch_object($response)) {
            echo $row->nombre;
        }
    } else {
        echo 'No hay data';
    }
}

function getCiclo($ciclo)
{
    global $con;
    $query = "SELECT * FROM ciclos WHERE id=$ciclo";
    $response = mysqli_query($con, $query);
    if(mysqli_num_rows($response) > 0) {
       
        while($row = mysqli_fetch_object($response)) {
            echo $row->nombre;
        }
    } else {
        echo 'No hay data';
    }
}

function getTurno($turno)
{
    global $con;
    $query = "SELECT * FROM turnos WHERE id=$turno";
    $response = mysqli_query($con, $query);
    if(mysqli_num_rows($response) > 0) {
       
        while($row = mysqli_fetch_object($response)) {
            echo $row->nombre;
        }
    } else {
        echo 'No hay data';
    }
}

?>

<table border="1">
<tr style="background-color:orange;">
    <th>Estado</th>
    <th>DNI</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>E-mail</th>
    <th>Sede</th>
    <th>Preparación</th>
    <th>Ciclo</th>
    <th>Turno</th>
    <th>Comentario</th>
    <th>Medio</th>
    <th>Terminos</th>
    <th>Time</th>
</tr>
<?php
    while ($row=mysqli_fetch_assoc($result)) { 
        ?>
            <tr>
                <td><?php echo $row['_status']; ?></td>
                <td><?php echo $row['dni']; ?></td>
                <td><?php echo utf8_decode($row['nombre']); ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo getSede($row['sede']); ?></td>
                <td><?php echo getPreparacion($row['preparacion']); ?></td>
                <td><?php echo getCiclo($row['ciclo']); ?></td>
                <td><?php echo getTurno($row['turno']); ?></td>
                <td><?php echo $row['comentario']; ?></td>
                <td><?php echo $row['medio']; ?></td>
                <td><?php echo $row['terminos']; ?></td>
                <td><?php echo $row['time']; ?></td>
    </tr>
        <?php
    }
?>
</table>
