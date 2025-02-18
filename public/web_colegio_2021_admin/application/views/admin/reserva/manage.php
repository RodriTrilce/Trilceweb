<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Reserva</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Reserva</strong>
         </li>
      </ol>
   </div>
   <div class="col-lg-2">
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      <div class="ibox ">
         <br>
         <div class="ibox-title">
            <?php if($this->session->flashdata('message')): ?>
            <div class="alert alert-success">
               <button type="button" class="close" data-close="alert"></button>
               <?php echo $this->session->flashdata('message'); ?>
            </div>
            <?php endif; ?>
            <a href="<?php echo base_url(); ?>admin/reserva/add" class="btn btn-info">ADD NEW</a>
            <div class="form-group pull-right">
               <a href="<?php echo $csvlink; ?>" class="btn btn-info">CSV</a>
               <a href="<?php echo $pdflink; ?>" class="btn btn-info">PDF</a>
            </div>
            <form method="GET" action="<?php echo base_url().'admin/reserva/index'; ?>" class="form-inline ibox-content">
               <div class="form-group">
                  <select name="searchBy" class="form-control">
                  <option value="fecha_inicio" <?php echo $searchBy=="fecha_inicio"?'selected="selected"':""; ?>>Fecha_inicio</option><option value="fecha_fin" <?php echo $searchBy=="fecha_fin"?'selected="selected"':""; ?>>Fecha_fin</option><option value="hora_inicio" <?php echo $searchBy=="hora_inicio"?'selected="selected"':""; ?>>Hora_inicio</option><option value="hora_fin" <?php echo $searchBy=="hora_fin"?'selected="selected"':""; ?>>Hora_fin</option><option value="usuario.usuario" <?php echo $searchBy=="usuario.usuario"?'selected="selected"':""; ?>>Id_usuario</option><option value="usuario.usuario" <?php echo $searchBy=="usuario.usuario"?'selected="selected"':""; ?>>Idprofesional</option><option value="total" <?php echo $searchBy=="total"?'selected="selected"':""; ?>>Total</option><option value="medio_pago.medio_pago" <?php echo $searchBy=="medio_pago.medio_pago"?'selected="selected"':""; ?>>Id_medio_pago</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Id_estado</option>
                  </select>
               </div>
               <div class="form-group">
                  <input type="text" name="searchValue" id="searchValue" class="form-control" value="<?php echo $searchValue; ?>">
               </div>
               <input type="submit" name="search" value="Search" class="btn btn-info">
               <div class="form-group pull-right">
                  <select name="per_page" class="form-control" onchange="this.form.submit()">
                     <option value="5" <?php echo $per_page=="5"?'selected="selected"':""; ?>>5</option>
                     <option value="10" <?php echo $per_page=="10"?'selected="selected"':""; ?>>10</option>
                     <option value="20" <?php echo $per_page=="20"?'selected="selected"':""; ?>>20</option>
                     <option value="50" <?php echo $per_page=="50"?'selected="selected"':""; ?>>50</option>
                     <option value="100" <?php echo $per_page=="100"?'selected="selected"':""; ?>>100</option>
                  </select>
               </div>
            </form>
         </div>
         <div class="ibox-content">
         <div class="table table-responsive">
            <table class="table table-striped table-bordered table-hover Tax" >
               <thead>
                  <tr>
                     <th><input onclick="toggle(this,'cbgroup1')" id="foo[]" name="foo[]" type="checkbox" value="" /></th>
                     <th> Sr No. </th>
                     <?php $sortSym=isset($_GET["order"]) && $_GET["order"]=="asc" ? "up" : "down"; ?>

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="fecha_inicio"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["fecha_inicio"]; ?>" class="link_css"> Fecha_inicio <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="fecha_fin"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["fecha_fin"]; ?>" class="link_css"> Fecha_fin <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="hora_inicio"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["hora_inicio"]; ?>" class="link_css"> Hora_inicio <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="hora_fin"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["hora_fin"]; ?>" class="link_css"> Hora_fin <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="usuario.usuario"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["usuario.usuario"]; ?>" class="link_css"> Id_usuario <?php echo $symbol ?></a></th>

   						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="usuario.usuario"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["usuario.usuario"]; ?>" class="link_css"> Idprofesional <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="total"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["total"]; ?>" class="link_css"> Total <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="medio_pago.medio_pago"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["medio_pago.medio_pago"]; ?>" class="link_css"> Id_medio_pago <?php echo $symbol ?></a></th>

   						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Id_estado <?php echo $symbol ?></a></th>

   						
                     <th> Action </th>
                  </tr>
               </thead>
               <tbody>
                  <?php if(isset($results) and !empty($results))
                     {
                     
                       $count=1;
                     
                       ?>
                  <?php 
                     foreach ($results as $key => $value) {
                     
                      ?>
                  <tr  id="hide<?php echo $value->id_reserva; ?>" >
                  <th><input name='input' id='del' onclick="callme('show')"  type='checkbox' class='del' value='<?php echo $value->id_reserva; ?>'/></th>

                              

            <th><?php if(!empty($value->id_reserva)){ echo $count; $count++; }?></th><th><?php if(!empty($value->fecha_inicio)){ echo $value->fecha_inicio; }?></th>

                <th><?php if(!empty($value->fecha_fin)){ echo $value->fecha_fin; }?></th>

                <th><?php if(!empty($value->hora_inicio)){ echo $value->hora_inicio; }?></th>

                <th><?php if(!empty($value->hora_fin)){ echo $value->hora_fin; }?></th>

                <th><?php if(!empty($value->id_usuario)){ echo $value->id_usuario; }?></th>

                <th><?php if(!empty($value->idprofesional)){ echo $value->idprofesional; }?></th>

                <th><?php if(!empty($value->total)){ echo $value->total; }?></th>

                <th><?php if(!empty($value->id_medio_pago)){ echo $value->id_medio_pago; }?></th>

                <th><?php if(!empty($value->id_estado)){ echo $value->id_estado; }?></th>

                <th class="action-width">

		   <a href="<?php echo base_url()?>admin/reserva/view/<?php echo $value->id_reserva; ?>" title="View">

            <span class="btn btn-info " ><i class="fa fa-eye"></i></span>

           </a>

           <a href="<?php echo base_url()?>admin/reserva/edit/<?php echo $value->id_reserva; ?>" title="Edit">

            <span class="btn btn-info " ><i class="fa fa-edit"></i></span>

           </a>

           <a  title="Delete" data-toggle="modal" data-target="#commonDelete" onclick="set_common_delete('<?php echo $value->id_reserva; ?>','reserva');">

           <span class="btn btn-info " ><i class="fa fa-trash-o "></i></span>

           </a>

            </th>
                  </tr>
                  <?php 
                     }
                     
                     
                     } else{
                     echo '<tr><td colspan="100"><h3 align="center" class="text-danger">No Record found!</center</td></tr>';
                     } ?>  
               </tbody>
            </table>
            </div>
            <?php echo $links; ?>
         </div>
      </div>
      <img onclick="callme('','item','')" src="<?php echo $this->config->item('accet_url')?>/img/mac-trashcan_full-new.png" id="recycle" style="width:90px;  display:none; position:fixed; bottom: 50px; right: 50px;"/>
   </div>
</div>
<script type="text/javascript">
   function delRow()
   {
   var confrm = confirm("Are you sure you want to delete?");
   if(confrm)
   {
   ids = values();
   $.ajax({
     type:"POST",
     url:'<?php echo base_url()."admin/reserva/deleteAll"; ?>',
     data:{
       allIds : ids,
       '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
     },
     success:function(){
       location.reload();
       },
     });
   }
   }
</script>
<?php $this->load->view('footer'); ?>