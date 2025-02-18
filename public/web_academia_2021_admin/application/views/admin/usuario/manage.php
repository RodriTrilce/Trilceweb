<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Usuario</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Usuario</strong>
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
            <a href="<?php echo base_url(); ?>admin/usuario/add" class="btn btn-info">ADD NEW</a>
            <div class="form-group pull-right">
               <a href="<?php echo $csvlink; ?>" class="btn btn-info">CSV</a>
               <a href="<?php echo $pdflink; ?>" class="btn btn-info">PDF</a>
            </div>
            <form method="GET" action="<?php echo base_url().'admin/usuario/index'; ?>" class="form-inline ibox-content">
               <div class="form-group">
                  <select name="searchBy" class="form-control">
                  <option value="usuario" <?php echo $searchBy=="usuario"?'selected="selected"':""; ?>>Usuario</option><option value="clave" <?php echo $searchBy=="clave"?'selected="selected"':""; ?>>Clave</option><option value="email" <?php echo $searchBy=="email"?'selected="selected"':""; ?>>Email</option><option value="nombres" <?php echo $searchBy=="nombres"?'selected="selected"':""; ?>>Nombres</option><option value="apellidos" <?php echo $searchBy=="apellidos"?'selected="selected"':""; ?>>Apellidos</option><option value="experiencia" <?php echo $searchBy=="experiencia"?'selected="selected"':""; ?>>Experiencia</option><option value="anio" <?php echo $searchBy=="anio"?'selected="selected"':""; ?>>Anio</option><option value="distrito.distrito" <?php echo $searchBy=="distrito.distrito"?'selected="selected"':""; ?>>Id_distrito</option><option value="direccion" <?php echo $searchBy=="direccion"?'selected="selected"':""; ?>>Direccion</option><option value="telefono" <?php echo $searchBy=="telefono"?'selected="selected"':""; ?>>Telefono</option><option value="celular" <?php echo $searchBy=="celular"?'selected="selected"':""; ?>>Celular</option><option value="perfil.perfil" <?php echo $searchBy=="perfil.perfil"?'selected="selected"':""; ?>>Id_perfil</option>
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

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="usuario"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["usuario"]; ?>" class="link_css"> Usuario <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="clave"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["clave"]; ?>" class="link_css"> Clave <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="email"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["email"]; ?>" class="link_css"> Email <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="nombres"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["nombres"]; ?>" class="link_css"> Nombres <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="apellidos"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["apellidos"]; ?>" class="link_css"> Apellidos <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="experiencia"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["experiencia"]; ?>" class="link_css"> Experiencia <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="anio"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["anio"]; ?>" class="link_css"> Anio <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="distrito.distrito"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["distrito.distrito"]; ?>" class="link_css"> Id_distrito <?php echo $symbol ?></a></th>

   						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="direccion"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["direccion"]; ?>" class="link_css"> Direccion <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="telefono"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["telefono"]; ?>" class="link_css"> Telefono <?php echo $symbol ?></a></th>

						

				<?php $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="celular"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>

				<th> <a href="<?php echo $fields_links["celular"]; ?>" class="link_css"> Celular <?php echo $symbol ?></a></th>

						

				<?php

				 $symbol = isset($_GET["sortBy"]) && $_GET["sortBy"]=="perfil.perfil"?"<i class='fa fa-sort-$sortSym' aria-hidden='true'></i>": "<i class='fa fa-sort' aria-hidden='true'></i>"; ?>



				<th> <a href="<?php echo $fields_links["perfil.perfil"]; ?>" class="link_css"> Id_perfil <?php echo $symbol ?></a></th>

   						
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
                  <tr  id="hide<?php echo $value->id_usuario; ?>" >
                  <th><input name='input' id='del' onclick="callme('show')"  type='checkbox' class='del' value='<?php echo $value->id_usuario; ?>'/></th>

                              

            <th><?php if(!empty($value->id_usuario)){ echo $count; $count++; }?></th><th><?php if(!empty($value->usuario)){ echo $value->usuario; }?></th>

                <th><?php if(!empty($value->clave)){ echo $value->clave; }?></th>

                <th><?php if(!empty($value->email)){ echo $value->email; }?></th>

                <th><?php if(!empty($value->nombres)){ echo $value->nombres; }?></th>

                <th><?php if(!empty($value->apellidos)){ echo $value->apellidos; }?></th>

                <th><?php if(!empty($value->experiencia)){ echo $value->experiencia; }?></th>

                <th><?php if(!empty($value->anio)){ echo $value->anio; }?></th>

                <th><?php if(!empty($value->id_distrito)){ echo $value->id_distrito; }?></th>

                <th><?php if(!empty($value->direccion)){ echo $value->direccion; }?></th>

                <th><?php if(!empty($value->telefono)){ echo $value->telefono; }?></th>

                <th><?php if(!empty($value->celular)){ echo $value->celular; }?></th>

                <th><?php if(!empty($value->id_perfil)){ echo $value->id_perfil; }?></th>

                <th class="action-width">

		   <a href="<?php echo base_url()?>admin/usuario/view/<?php echo $value->id_usuario; ?>" title="View">

            <span class="btn btn-info " ><i class="fa fa-eye"></i></span>

           </a>

           <a href="<?php echo base_url()?>admin/usuario/edit/<?php echo $value->id_usuario; ?>" title="Edit">

            <span class="btn btn-info " ><i class="fa fa-edit"></i></span>

           </a>

           <a  title="Delete" data-toggle="modal" data-target="#commonDelete" onclick="set_common_delete('<?php echo $value->id_usuario; ?>','usuario');">

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
     url:'<?php echo base_url()."admin/usuario/deleteAll"; ?>',
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