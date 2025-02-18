<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Servicio</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Servicio</strong>
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

	   <label for="servicio" class="col-sm-3 control-label"> Servicio </label>

	 </td>

	 <td> 

	   <?php echo set_value("servicio",html_entity_decode($servicio->servicio)); ?>

	 </td>

	</tr>

	



    <!-- Descripcion Start -->

	<tr>

	 <td>

	  <label for="descripcion" class="col-sm-3 control-label"> Descripcion </label>

	 </td>

	 <td> 

	   <?php echo set_value("descripcion",  html_entity_decode($servicio->descripcion)); ?>

	 </td>

	</tr>

    <!-- Descripcion End -->



	

	<tr>

	 <td>

	   <label for="precio" class="col-sm-3 control-label"> Precio </label>

	 </td>

	 <td> 

	   <?php echo set_value("precio",html_entity_decode($servicio->precio)); ?>

	 </td>

	</tr>

	



    <!-- Id_tipo_servicio Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_tipo_servicio </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($tipo_servicio) && !empty($tipo_servicio)):



	      foreach($tipo_servicio as $key => $value): 

	       if($value->id_tipo_servicio==$servicio->id_tipo_servicio)

	             echo $value->tipo_servicio;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_tipo_servicio End -->



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