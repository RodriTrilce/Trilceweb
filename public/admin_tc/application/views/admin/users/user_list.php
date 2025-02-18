 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Lista de Administradores</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
        <a href="<?= base_url('admin/users/add'); ?>" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Agregar</a>
            <br><br>
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Usuario</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>DNI</th>
          <th>Email</th>
          <th>Perfil</th>
          <th style="width: 150px;" class="text-right">Opciones</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_users as $row): ?>
          <tr>
            <td><?= $row['usuario']; ?></td>
            <td><?= $row['nombres']; ?></td>
            <td><?= $row['apellidos']; ?></td>
            <td><?= $row['dni']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['perfil']; ?></td>
            <td class="text-right"><a href="<?= base_url('admin/users/edit/'.$row['id_usuario']); ?>" class="btn btn-info btn-flat">Actualizar</a><a href="<?= base_url('admin/users/del/'.$row['id_usuario']); ?>" class="btn btn-danger btn-flat <?= ($row['id_perfil'] == 1)? 'disabled': ''?>">Eliminar</a></td>
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
