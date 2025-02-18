<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Usuario_detalle</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Usuario_detalle</strong>
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
            <a href="<?php echo base_url(); ?>admin/usuario_detalle/add" class="btn btn-info">ADD NEW</a>
            <div class="form-group pull-right">
               <a href="<?php echo $csvlink; ?>" class="btn btn-info">CSV</a>
               <a href="<?php echo $pdflink; ?>" class="btn btn-info">PDF</a>
            </div>
            <form method="GET" action="<?php echo base_url().'admin/usuario_detalle/index'; ?>" class="form-inline ibox-content">
               <div class="form-group">
                  <select name="searchBy" class="form-control">
                  <option value="antecedentes_penales" <?php echo $searchBy=="antecedentes_penales"?'selected="selected"':""; ?>>Antecedentes_penales</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Estado_ap</option><option value="verificacion_domociliaria" <?php echo $searchBy=="verificacion_domociliaria"?'selected="selected"':""; ?>>Verificacion_domociliaria</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Estado_vd</option><option value="ruc_personal" <?php echo $searchBy=="ruc_personal"?'selected="selected"':""; ?>>Ruc_personal</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Estado_rp</option><option value="entrevista" <?php echo $searchBy=="entrevista"?'selected="selected"':""; ?>>Entrevista</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Estado_e</option><option value="evaluacion_destrezas" <?php echo $searchBy=="evaluacion_destrezas"?'selected="selected"':""; ?>>Evaluacion_destrezas</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Estado_ed</option><option value="corroborar_referencia" <?php echo $searchBy=="corroborar_referencia"?'selected="selected"':""; ?>>Corroborar_referencia</option><option value="estado.estado" <?php echo $searchBy=="estado.estado"?'selected="selected"':""; ?>>Estado_cr</option><option value="fecha_registro" <?php echo $searchBy=="fecha_registro"?'selected="selected"':""; ?>>Fecha_registro</option><option value="fecha_actualizacion" <?php echo $searchBy=="fecha_actualizacion"?'selected="selected"':""; ?>>Fecha_actualizacion</option><option value="usuario.usuario" <?php echo $searchBy=="usuario.usuario"?'selected="selected"':""; ?>>Id_usuario</option>
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

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="antecedentes_penales"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["antecedentes_penales"]; ?>" class="link_css"> Antecedentes_penales <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Estado_ap <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="verificacion_domociliaria"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["verificacion_domociliaria"]; ?>" class="link_css"> Verificacion_domociliaria <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Estado_vd <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="ruc_personal"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["ruc_personal"]; ?>" class="link_css"> Ruc_personal <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Estado_rp <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="entrevista"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["entrevista"]; ?>" class="link_css"> Entrevista <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Estado_e <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="evaluacion_destrezas"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["evaluacion_destrezas"]; ?>" class="link_css"> Evaluacion_destrezas <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Estado_ed <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="corroborar_referencia"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["corroborar_referencia"]; ?>" class="link_css"> Corroborar_referencia <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="estado.estado"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["estado.estado"]; ?>" class="link_css"> Estado_cr <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="fecha_registro"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["fecha_registro"]; ?>" class="link_css"> Fecha_registro <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="fecha_actualizacion"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["fecha_actualizacion"]; ?>" class="link_css"> Fecha_actualizacion <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="usuario.usuario"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["usuario.usuario"]; ?>" class="link_css"> Id_usuario <?php echo $symbol ?></a></th>

   						
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
                  <tr  id="hide<?php echo $value->id_usuario_detalle; ?>" >
                  <th><input name='input' id='del' onclick="callme('show')"  type='checkbox' class='del' value='<?php echo $value->id_usuario_detalle; ?>'/></th>

                              

            <th><?php if(!empty($value->id_usuario_detalle)){ echo $count; $count++; }?></th><th><?php if(!empty($value->antecedentes_penales)){ ?> 

                        <img src="<?php echo $this->config->item('photo_url');?><?php echo $value->antecedentes_penales; ?>" alt="pic" width="50" height="50" />

                         <?php }?></th><th><?php if(!empty($value->estado_ap)){ echo $value->estado_ap; }?></th>

                <th><?php if(!empty($value->verificacion_domociliaria)){ ?> 

                        <img src="<?php echo $this->config->item('photo_url');?><?php echo $value->verificacion_domociliaria; ?>" alt="pic" width="50" height="50" />

                         <?php }?></th><th><?php if(!empty($value->estado_vd)){ echo $value->estado_vd; }?></th>

                <th><?php if(!empty($value->ruc_personal)){ ?> 

                        <img src="<?php echo $this->config->item('photo_url');?><?php echo $value->ruc_personal; ?>" alt="pic" width="50" height="50" />

                         <?php }?></th><th><?php if(!empty($value->estado_rp)){ echo $value->estado_rp; }?></th>

                <th><?php if(!empty($value->entrevista)){ ?> 

                        <img src="<?php echo $this->config->item('photo_url');?><?php echo $value->entrevista; ?>" alt="pic" width="50" height="50" />

                         <?php }?></th><th><?php if(!empty($value->estado_e)){ echo $value->estado_e; }?></th>

                <th><?php if(!empty($value->evaluacion_destrezas)){ ?> 

                        <img src="<?php echo $this->config->item('photo_url');?><?php echo $value->evaluacion_destrezas; ?>" alt="pic" width="50" height="50" />

                         <?php }?></th><th><?php if(!empty($value->estado_ed)){ echo $value->estado_ed; }?></th>

                <th><?php if(!empty($value->corroborar_referencia)){ ?> 

                        <img src="<?php echo $this->config->item('photo_url');?><?php echo $value->corroborar_referencia; ?>" alt="pic" width="50" height="50" />

                         <?php }?></th><th><?php if(!empty($value->estado_cr)){ echo $value->estado_cr; }?></th>

                <th><?php if(!empty($value->fecha_registro)){ echo $value->fecha_registro; }?></th>

                <th><?php if(!empty($value->fecha_actualizacion)){ echo $value->fecha_actualizacion; }?></th>

                <th><?php if(!empty($value->id_usuario)){ echo $value->id_usuario; }?></th>

                <th class="action-width">

		   <a href="<?php echo base_url()?>admin/usuario_detalle/view/<?php echo $value->id_usuario_detalle; ?>" title="View">

            <span class="btn btn-info " ><i class="fa fa-eye"></i></span>

           </a>

           <a href="<?php echo base_url()?>admin/usuario_detalle/edit/<?php echo $value->id_usuario_detalle; ?>" title="Edit">

            <span class="btn btn-info " ><i class="fa fa-edit"></i></span>

           </a>

           <a  title="Delete" data-toggle="modal" data-target="#commonDelete" onclick="set_common_delete('<?php echo $value->id_usuario_detalle; ?>','usuario_detalle');">

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
     url:'<?php echo base_url()."admin/usuario_detalle/deleteAll"; ?>',
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