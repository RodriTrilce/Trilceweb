<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Contacto_academia</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Contacto_academia</strong>
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

	   <?php echo set_value("nombres_apellidos",html_entity_decode($contacto_academia->nombres_apellidos)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="correo" class="col-sm-3 control-label"> Correo </label>

	 </td>

	 <td> 

	   <?php echo set_value("correo",html_entity_decode($contacto_academia->correo)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

	 </td>

	 <td> 

	   <?php echo set_value("telefono",html_entity_decode($contacto_academia->telefono)); ?>

	 </td>

	</tr>

	



    <!-- Consulta Start -->

	<tr>

	 <td>

	  <label for="consulta" class="col-sm-3 control-label"> Consulta </label>

	 </td>

	 <td> 

	   <?php echo set_value("consulta",  html_entity_decode($contacto_academia->consulta)); ?>

	 </td>

	</tr>

    <!-- Consulta End -->



	



    <!-- Fecha_registro Start -->

	<tr>

	 <td>

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_registro", html_entity_decode($contacto_academia->fecha_registro)); ?>

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