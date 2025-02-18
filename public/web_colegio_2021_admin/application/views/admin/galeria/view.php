<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Galeria</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Galeria</strong>
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



    <!-- Galeria Start -->

	<tr>

	 <td>

	  <label for="galeria" class="col-sm-3 control-label"> Galeria </label>

	 </td>

	 <td> 

	   <?php echo set_value("galeria",  html_entity_decode($galeria->galeria)); ?>

	 </td>

	</tr>

    <!-- Galeria End -->



	



    <!-- Foto_cover Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto_cover </label>

	 </td>

	 <td>

	 <?php if (isset($galeria->foto_cover) && $galeria->foto_cover!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $galeria->foto_cover; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto_cover End -->



	



    <!-- Foto1 Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto1 </label>

	 </td>

	 <td>

	 <?php if (isset($galeria->foto1) && $galeria->foto1!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $galeria->foto1; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto1 End -->



	



    <!-- Foto2 Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto2 </label>

	 </td>

	 <td>

	 <?php if (isset($galeria->foto2) && $galeria->foto2!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $galeria->foto2; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto2 End -->



	



    <!-- Foto3 Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto3 </label>

	 </td>

	 <td>

	 <?php if (isset($galeria->foto3) && $galeria->foto3!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $galeria->foto3; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto3 End -->



	



    <!-- Foto4 Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto4 </label>

	 </td>

	 <td>

	 <?php if (isset($galeria->foto4) && $galeria->foto4!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $galeria->foto4; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto4 End -->



	



    <!-- Id_servicio Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_servicio </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($servicio) && !empty($servicio)):



	      foreach($servicio as $key => $value): 

	       if($value->id_servicio==$galeria->id_servicio)

	             echo $value->servicio;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_servicio End -->



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