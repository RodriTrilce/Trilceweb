<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
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

	   <label for="usuario" class="col-sm-3 control-label"> Usuario </label>

	 </td>

	 <td> 

	   <?php echo set_value("usuario",html_entity_decode($usuario->usuario)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="clave" class="col-sm-3 control-label"> Clave </label>

	 </td>

	 <td> 

	   <?php echo set_value("clave",html_entity_decode($usuario->clave)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="email" class="col-sm-3 control-label"> Email </label>

	 </td>

	 <td> 

	   <?php echo set_value("email",html_entity_decode($usuario->email)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="nombres" class="col-sm-3 control-label"> Nombres </label>

	 </td>

	 <td> 

	   <?php echo set_value("nombres",html_entity_decode($usuario->nombres)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="apellidos" class="col-sm-3 control-label"> Apellidos </label>

	 </td>

	 <td> 

	   <?php echo set_value("apellidos",html_entity_decode($usuario->apellidos)); ?>

	 </td>

	</tr>

	



    <!-- Experiencia Start -->

	<tr>

	 <td>

	  <label for="experiencia" class="col-sm-3 control-label"> Experiencia </label>

	 </td>

	 <td> 

	   <?php echo set_value("experiencia",  html_entity_decode($usuario->experiencia)); ?>

	 </td>

	</tr>

    <!-- Experiencia End -->



	

	<tr>

	 <td>

	   <label for="anio" class="col-sm-3 control-label"> Anio </label>

	 </td>

	 <td> 

	   <?php echo set_value("anio",html_entity_decode($usuario->anio)); ?>

	 </td>

	</tr>

	



    <!-- Id_distrito Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_distrito </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($distrito) && !empty($distrito)):



	      foreach($distrito as $key => $value): 

	       if($value->id_distrito==$usuario->id_distrito)

	             echo $value->distrito;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_distrito End -->



	



    <!-- Direccion Start -->

	<tr>

	 <td>

	  <label for="direccion" class="col-sm-3 control-label"> Direccion </label>

	 </td>

	 <td> 

	   <?php echo set_value("direccion",  html_entity_decode($usuario->direccion)); ?>

	 </td>

	</tr>

    <!-- Direccion End -->



	

	<tr>

	 <td>

	   <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

	 </td>

	 <td> 

	   <?php echo set_value("telefono",html_entity_decode($usuario->telefono)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="celular" class="col-sm-3 control-label"> Celular </label>

	 </td>

	 <td> 

	   <?php echo set_value("celular",html_entity_decode($usuario->celular)); ?>

	 </td>

	</tr>

	



    <!-- Id_perfil Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_perfil </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($perfil) && !empty($perfil)):



	      foreach($perfil as $key => $value): 

	       if($value->id_perfil==$usuario->id_perfil)

	             echo $value->perfil;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_perfil End -->



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