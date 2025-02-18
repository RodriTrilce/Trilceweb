<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Lista_espera</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Lista_espera</strong>
         </li>
      </ol>
   </div>
   <div class="col-sm-8">
      <div class="title-action">
      </div>
   </div>
</div>
<!--  EO :heading -->
<div class="row">
   <div class="col-lg-12 row wrapper ">
      <div class="ibox ">
         <div class="ibox-title" >
            <h5>View <small></small></h5>
            <div class="ibox-tools">                           
            </div>
         </div>
         <!-- ............................................................. -->
         <!-- BO : content  -->
         <div class="col-sm-12 white-bg ">
            <div class="box box-info">
               <div class="box-header with-border">
                  <h3 class="box-title">  </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form action="" id="" class="form-horizontal " method="post" enctype="multipart/form-data">
                  <div class="box-body">
                     <?php if($this->session->flashdata('message')): ?>
                     <div class="alert alert-success">
                        <button type="button" class="close" data-close="alert"></button>
                        <?php echo $this->session->flashdata('message'); ?>
                     </div>
                     <?php endif; ?> 
                     

<table class='table table-bordered' style='width:70%;' align='center'>

	<tr>

	 <td>

	   <label for="nombres_apellidos" class="col-sm-3 control-label"> Nombres_apellidos </label>

	 </td>

	 <td> 

	   <?php echo set_value("nombres_apellidos",html_entity_decode($lista_espera->nombres_apellidos)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="nombres" class="col-sm-3 control-label"> Nombres </label>

	 </td>

	 <td> 

	   <?php echo set_value("nombres",html_entity_decode($lista_espera->nombres)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="apellido_paterno" class="col-sm-3 control-label"> Apellido_paterno </label>

	 </td>

	 <td> 

	   <?php echo set_value("apellido_paterno",html_entity_decode($lista_espera->apellido_paterno)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="apellido_materno" class="col-sm-3 control-label"> Apellido_materno </label>

	 </td>

	 <td> 

	   <?php echo set_value("apellido_materno",html_entity_decode($lista_espera->apellido_materno)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="dni" class="col-sm-3 control-label"> Dni </label>

	 </td>

	 <td> 

	   <?php echo set_value("dni",html_entity_decode($lista_espera->dni)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="email" class="col-sm-3 control-label"> Email </label>

	 </td>

	 <td> 

	   <?php echo set_value("email",html_entity_decode($lista_espera->email)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

	 </td>

	 <td> 

	   <?php echo set_value("telefono",html_entity_decode($lista_espera->telefono)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="sede" class="col-sm-3 control-label"> Sede </label>

	 </td>

	 <td> 

	   <?php echo set_value("sede",html_entity_decode($lista_espera->sede)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="grado" class="col-sm-3 control-label"> Grado </label>

	 </td>

	 <td> 

	   <?php echo set_value("grado",html_entity_decode($lista_espera->grado)); ?>

	 </td>

	</tr>

	



    <!-- Fecha_registro Start -->

	<tr>

	 <td>

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_registro", html_entity_decode($lista_espera->fecha_registro)); ?>

	 </td>

	</tr>

    <!-- Fecha_registro End -->



	<tr><td colspan="2"><a type="reset" class="btn btn-info pull-right" onclick="history.back()">Back</a></td></tr></table>
                     <div class="form-group">
                        <div class="col-sm-3" >                       
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-3" >                       
                        </div>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                  </div>
                  <!-- /.box-footer -->
               </form>
            </div>
            <!-- /.box -->
            <br><br><br><br>
         </div>
         <!-- EO : content  -->
         <!-- ...................................................................... -->
      </div>
   </div>
</div>
<?php $this->load->view('footer'); ?>