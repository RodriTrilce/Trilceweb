
<script type="text/javascript" src="<?= base_url() ?>public/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/jszip.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/pdfmake.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">

<link href="<?= base_url() ?>public/css/fixedHeader.dataTables.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url() ?>public/js/dataTables.fixedHeader.js"></script>
	
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Certificados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="display nowrap" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
						<th>Usuario</th>
                        <th>Nombres y Apellidos</th>
						<th>Email</th>
						<th>Curso</th>
						<th>Código</th>
						<th>Certificado</th>
                    </tr>
                    <tr>
                        <th>ID</th>
						<th>Usuario</th>
                        <th>Nombres y Apellidos</th>
						<th>Email</th>
						<th>Curso</th>
						<th>Código</th>
						<th>Certificado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_certificados as $row): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
						<td><?= $row['usuario']; ?></td>
                        <td><?= ucwords($row['nombre_completo']); ?></td>
						<td><?= $row['email']; ?></td>
						<td><?= $row['fullname']; ?></td>
						<td><?= $row['code']; ?></td>
                        <td><?php if ($row['idcourse']=='4')
						{
						?>
						<a href="https://aulavirtual.cenepred.gob.pe/cenepred/pluginfile.php/2881/mod_certificate/issue/<?= $row['idissue']; ?>/Lineamientos%20T%C3%A9cnicos%20en%20Gesti%C3%B3n%20Prospectiva%20y%20Correctiva_Certificado.pdf" class="btn btn-info btn-flat">Descargar</a>
						<?php
						}
						elseif($row['idcourse']=='16')
						{
						?>
						<a href="https://aulavirtual.cenepred.gob.pe/cenepred/pluginfile.php/9462/mod_certificate/issue/<?= $row['idissue']; ?>/Procedimientos%20para%20elaborar%20el%20Plan%20Integral%20de%20Reconstrucci%C3%B3n%20%28PIR%29_Certificado.pdf" class="btn btn-info btn-flat">Descargar</a>
						<?php
						}
						elseif($row['idcourse']=='15')
						{
						?>
						<a href="https://aulavirtual.cenepred.gob.pe/cenepred/pluginfile.php/9464/mod_certificate/issue/<?= $row['idissue']; ?>/Procedimientos%20para%20elaborar%20el%20PPRRD_Certificado.pdf" class="btn btn-info btn-flat">Descargar</a>
						<?php
						}
						elseif($row['idcourse']=='13')
						{
						?>
						<a href="https://aulavirtual.cenepred.gob.pe/cenepred/pluginfile.php/9467/mod_certificate/issue/<?= $row['idissue']; ?>/Procedimientos%20metodol%C3%B3gicos%20para%20la%20formulaci%C3%B3n%20del%20Informe%20del%20Impacto%20de%20emergencias%20o%20desastres_Certificado.pdf" class="btn btn-info btn-flat">Descargar</a>
						<?php
						}
						elseif($row['idcourse']=='3')
						{
						?>
						<a href="https://aulavirtual.cenepred.gob.pe/cenepred/pluginfile.php/2878/mod_certificate/issue/<?= $row['idissue']; ?>/Procedimientos%20Metodol%C3%B3gicos%20para%20la%20Evaluaci%C3%B3n%20del%20Riesgo_Certificado.pdf" class="btn btn-info btn-flat">Descargar</a>
						<?php
						}
						elseif($row['idcourse']=='5')
						{
						?>
						<a href="https://aulavirtual.cenepred.gob.pe/cenepred/pluginfile.php/2880/mod_certificate/issue/<?= $row['idissue']; ?>/Procedimientos%20para%20el%20Reasentamiento%20Poblacional%20de%20Zonas%20de%20muy%20Alto%20Riesgo%20no%20Mitigable_Certificado.pdf" class="btn btn-info btn-flat">Descargar</a>
						<?php
						}
						?>
						
						</td>
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
	$(document).ready(function() 
	{
	$('#example1 thead tr:eq(1) th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" class="column_search" />' );
    } );
    // DataTable
    var table = $('#example1').DataTable({
		orderCellsTop: true,
      fixedHeader: true,
      pageLength: 100,
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });
 
    // Apply the search
    $( '#example1 thead'  ).on( 'keyup', ".column_search",function () {
   
        table
            .column( $(this).parent().index() )
            .search( this.value )
            .draw();
    } );
} );
</script>
<script>
    $("#view_operaciones_mineras").addClass('active');
</script>