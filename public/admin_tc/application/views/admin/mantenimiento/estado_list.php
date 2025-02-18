<!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Mantenimiento de Estados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <a href="<?= base_url('admin/mantenimiento/estado_add/'); ?>" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Agregar</a>
            <br><br>
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Estado</th>
                        <th style="width: 150px;" class="text-right">Opción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_estados as $row): ?>
                    <tr>
                        <td><?= $row['id_estado']; ?></td>
                        <td><?= $row['estado']; ?></td>
                        <td class="text-right"><a href="<?= base_url('admin/mantenimiento/estado_edit/'.$row['id_estado']); ?>" class="btn btn-info btn-flat">Actualizar</a><br><a href="<?= base_url('admin/mantenimiento/estado_del/'.$row['id_estado']); ?>" class="btn btn-danger btn-flat ">Eliminar</a></td>
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
$(function() 
{
    $("#example1").DataTable({"bSort" : false});
});
</script> 
<script>
    $("#view_estados").addClass('active');
</script>