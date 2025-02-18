 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Lista de Aceptaciones de Términos de Condiciones</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Nombres y Apellidos</th>
          <th>DNI</th>
          <th>Email</th>
          <th>Acepto</th>
          <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_students as $row): ?>
          <tr>
            <td><?= $row['nombres_apellidos']; ?></td>
            <td><?= $row['dni']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?php if($row['acepto']=='1'){echo "Si";}else{echo "";} ?></td>
            <td><?php echo $date_for_database = date ('d-m-Y H:i:s', strtotime($row['fecha']));?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 
<script>
$("#view_users").addClass('active');
</script>        
