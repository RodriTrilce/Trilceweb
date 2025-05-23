<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Banner_home</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Banner_home</strong>
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



    <!-- Icono Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Icono </label>

	 </td>

	 <td>

	 <?php if (isset($banner_home->icono) && $banner_home->icono!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $banner_home->icono; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Icono End -->



	

	<tr>

	 <td>

	   <label for="titulo" class="col-sm-3 control-label"> Titulo </label>

	 </td>

	 <td> 

	   <?php echo set_value("titulo",html_entity_decode($banner_home->titulo)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="subtitulo" class="col-sm-3 control-label"> Subtitulo </label>

	 </td>

	 <td> 

	   <?php echo set_value("subtitulo",html_entity_decode($banner_home->subtitulo)); ?>

	 </td>

	</tr>

	



    <!-- Imagen Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Imagen </label>

	 </td>

	 <td>

	 <?php if (isset($banner_home->imagen) && $banner_home->imagen!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $banner_home->imagen; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Imagen End -->



	

	<tr>

	 <td>

	   <label for="formulario" class="col-sm-3 control-label"> Formulario </label>

	 </td>

	 <td> 

	   <?php echo set_value("formulario",html_entity_decode($banner_home->formulario)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="orden" class="col-sm-3 control-label"> Orden </label>

	 </td>

	 <td> 

	   <?php echo set_value("orden",html_entity_decode($banner_home->orden)); ?>

	 </td>

	</tr>

	



    <!-- Fecha_registro Start -->

	<tr>

	 <td>

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_registro", html_entity_decode($banner_home->fecha_registro)); ?>

	 </td>

	</tr>

    <!-- Fecha_registro End -->



	



    <!-- Id_estado Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_estado </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id==$banner_home->id_estado)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_estado End -->



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