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
            <h3 class="box-title">Reporte PIR</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
						<th>Usuario</th>
                        <th>Fecha creacion de cuenta</th>
						<th>Email</th>
						<th>Nombres y Apellidos</th>
						<th>DNI</th>
						<th>Pais</th>
						<th>Departamento</th>
						<th>Provincia</th>
						<th>Distrito</th>
						<th>Sector</th>
						<th>Niveles de Gobierno</th>
						<th>Entidad</th>
						<th>Tipo de curso</th>
						<th>Curso</th>
						<th>Estado</th>
						<th>Calificacion</th>
						<th>Estado evaluacion</th>
						<th>Fecha inicio</th>
						<th>Fecha fin</th>
						<th>Ultimo acceso</th>
						<th>Certificado</th>
                    </tr>
                    <tr>
						<th>Usuario</th>
                        <th>Fecha creacion de cuenta</th>
						<th>Email</th>
						<th>Nombres y Apellidos</th>
						<th>DNI</th>
						<th>Pais</th>
						<th>Departamento</th>
						<th>Provincia</th>
						<th>Distrito</th>
						<th>Sector</th>
						<th>Niveles de Gobierno</th>
						<th>Entidad</th>
						<th>Tipo de curso</th>
						<th>Curso</th>
						<th>Estado</th>
						<th>Calificacion</th>
						<th>Estado evaluacion</th>
						<th>Fecha inicio</th>
						<th>Fecha fin</th>
						<th>Ultimo acceso</th>
						<th>Certificado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_reportes2 as $row): ?>
                    <tr>
                        <td><?= $row['Nombre_usuario']; ?></td>
						<td><?= $row['Fecha_creacion_cuenta']; ?></td>
                        <td><?= $row['Correo']; ?></td>
						<td><?= $row['Nombres']; ?> <?= $row['Apellidos']; ?></td>
						<td><?= $row['DNI']; ?></td>
						<td><?= $row['Pais']; ?></td>
						<td><?= $row['Departamento']; ?></td>
						<td><?= $row['Provincia']; ?></td>
						<td><?= $row['Distrito']; ?></td>
						<td>
						    <?php 
                                $this->db->select('tab_sector.sector as sector');
                                $this->db->from('tab_entidad');
                                $this->db->join('tab_sector', 'tab_entidad.id_sector = tab_sector.id_sector');
                                $this->db->where('tab_entidad.entidad', $row['Entidad_labora']); 
                                $sector	=	$this->db->get()->result_array();
                                foreach($sector	as $valor):
                            ?>
                            <?php echo $valor['sector']; ?>
                            <?php endforeach; ?>
						</td>
						<td>
						    <?php 
                                $this->db->select('tab_gobierno.gobierno as gobierno');
                                $this->db->from('tab_entidad');
                                $this->db->join('tab_gobierno', 'tab_entidad.id_gobierno = tab_gobierno.id_gobierno');
                                $this->db->where('tab_entidad.entidad', $row['Entidad_labora']); 
                                $gobierno	=	$this->db->get()->result_array();
                                foreach($gobierno	as $valor):
                            ?>
                            <?php echo $valor['gobierno']; ?>
                            <?php endforeach; ?>
                        </td>
						<td><?= $row['Entidad_labora']; ?></td>
						<td><?= $row['Tipo_de_Curso']; ?></td>
						<td><?= $row['Curso']; ?></td>
						<td><?= $row['Estado']; ?></td>
						<td><?= $row['Calificacion']; ?></td>
						<td><?= $row['Estado_Evaluacion']; ?></td>
						<td><?= $row['Fecha_de_Inicio']; ?></td>
						<td><?= $row['Fecha_Final']; ?></td>
						<td><?= $row['Ultimo_acceso']; ?></td>
						<td><?= $row['Tiene_certificado']; ?></td>
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
            {
                extend: 'excelHtml5',
                title: 'Reporte del curso Procedimientos para elaborar el Plan Integral de Reconstrucción'
            }
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