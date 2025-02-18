 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Libro de Reclamaciones</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped ">
				<thead>
					<tr>
						<th>ID</th>
						<th>Codigo</th>
						<th>Fecha Registro</th>
						<th>Razon Social</th>
						<th>RUC</th>
						<th>Institucion</th>
						<th>Nombres y Apellidos</th>
						<th>Genero</th>
						<th>Sede</th>
						<th>Grado</th>
						<th>DNI</th>
						<th>Celular</th>
						<th>Direccion</th>
						<th>Correo</th>
						<th>Nombres Apoderado</th>
						<th>Celular Apoderado</th>
						<th>Correo Apoderado</th>
						<th>Producto / Servicio</th>
						<th>Monto Reclamado</th>
						<th>Descripcion</th>
						<th>Reclamo / Queja</th>
						<th>Detalle</th>
						<th>Pedido Concreto</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($all_reclamaciones as $row): ?>
					<tr>
						<td><?= $row['id']; ?></td>
						<td><?= $row['codigo']; ?></td>
						<td><?= $row['fecha_registro']; ?></td>
						<td><?= $row['razon_social']; ?></td>
						<td><?= $row['ruc']; ?></td>
						<td><?= $row['institucion']; ?></td>
						<td><?= $row['nombres_apellidos']; ?></td>
						<td><?= $row['genero']; ?></td>
						<td><?= $row['sede']; ?></td>
						<td><?= $row['grado']; ?></td>
						<td><?= $row['dni']; ?></td>
						<td><?= $row['celular']; ?></td>
						<td><?= $row['direccion']; ?></td>
						<td><?= $row['correo']; ?></td>
						<td><?= $row['nombres_apoderado']; ?></td>
						<td><?= $row['celular_apoderado']; ?></td>
						<td><?= $row['correo_apoderado']; ?></td>
						<td><?= $row['producto_servicio']; ?></td>
						<td><?= $row['monto_reclamado']; ?></td>
						<td><?= $row['descripcion']; ?></td>
						<td><?= $row['reclamo_queja']; ?></td>
						<td><?= $row['detalle']; ?></td>
						<td><?= $row['pedido_concreto']; ?></td>
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable( {
		dom: 'Bfltip',
        buttons: [
            'excel'
        ],
        "order": [[ 0, "desc" ]]
    } );
  });
</script> 
<script>
$("#view_users").addClass('active');
</script>
