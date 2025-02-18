<!-- Datatable style -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">

<link href="https://nightly.datatables.net/fixedheader/css/fixedHeader.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/fixedheader/js/dataTables.fixedHeader.js"></script>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Mantenimiento de Departamentos</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <a href="<?= base_url('admin/mantenimiento/departamento_add/'); ?>" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Agregar</a>
            <br><br>
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Departamento</th>
                        <th style="width: 150px;" class="text-right">Opción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_departamentos as $row): ?>
                    <tr>
                        <td><?= $row['id_departamento']; ?></td>
                        <td><?= $row['departamento']; ?></td>
                        <td class="text-right"><a href="<?= base_url('admin/mantenimiento/departamento_edit/'.$row['id_departamento']); ?>" class="btn btn-info btn-flat">Actualizar</a><br><a href="<?= base_url('admin/mantenimiento/departamento_del/'.$row['id_departamento']); ?>" class="btn btn-danger btn-flat ">Eliminar</a></td>
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
    
    // DataTable
    var table = $('#example1').DataTable({
		orderCellsTop: true,
      fixedHeader: true,
      pageLength: 100,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reporte de Departamentos'
            }
        ]
    });
});
</script>
<script>
    $("#view_departamentos").addClass('active');
</script>