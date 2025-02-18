<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
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



    <!-- Antecedentes_penales Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Antecedentes_penales </label>

	 </td>

	 <td>

	 <?php if (isset($usuario_detalle->antecedentes_penales) && $usuario_detalle->antecedentes_penales!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $usuario_detalle->antecedentes_penales; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Antecedentes_penales End -->



	



    <!-- Estado_ap Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Estado_ap </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$usuario_detalle->estado_ap)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Estado_ap End -->



	



    <!-- Verificacion_domociliaria Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Verificacion_domociliaria </label>

	 </td>

	 <td>

	 <?php if (isset($usuario_detalle->verificacion_domociliaria) && $usuario_detalle->verificacion_domociliaria!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $usuario_detalle->verificacion_domociliaria; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Verificacion_domociliaria End -->



	



    <!-- Estado_vd Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Estado_vd </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$usuario_detalle->estado_vd)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Estado_vd End -->



	



    <!-- Ruc_personal Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Ruc_personal </label>

	 </td>

	 <td>

	 <?php if (isset($usuario_detalle->ruc_personal) && $usuario_detalle->ruc_personal!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $usuario_detalle->ruc_personal; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Ruc_personal End -->



	



    <!-- Estado_rp Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Estado_rp </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$usuario_detalle->estado_rp)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Estado_rp End -->



	



    <!-- Entrevista Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Entrevista </label>

	 </td>

	 <td>

	 <?php if (isset($usuario_detalle->entrevista) && $usuario_detalle->entrevista!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $usuario_detalle->entrevista; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Entrevista End -->



	



    <!-- Estado_e Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Estado_e </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$usuario_detalle->estado_e)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Estado_e End -->



	



    <!-- Evaluacion_destrezas Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Evaluacion_destrezas </label>

	 </td>

	 <td>

	 <?php if (isset($usuario_detalle->evaluacion_destrezas) && $usuario_detalle->evaluacion_destrezas!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $usuario_detalle->evaluacion_destrezas; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Evaluacion_destrezas End -->



	



    <!-- Estado_ed Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Estado_ed </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$usuario_detalle->estado_ed)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Estado_ed End -->



	



    <!-- Corroborar_referencia Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Corroborar_referencia </label>

	 </td>

	 <td>

	 <?php if (isset($usuario_detalle->corroborar_referencia) && $usuario_detalle->corroborar_referencia!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $usuario_detalle->corroborar_referencia; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Corroborar_referencia End -->



	



    <!-- Estado_cr Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Estado_cr </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$usuario_detalle->estado_cr)

	             echo $value->estado;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Estado_cr End -->



	



    <!-- Fecha_registro Start -->

	<tr>

	 <td>

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_registro", html_entity_decode($usuario_detalle->fecha_registro)); ?>

	 </td>

	</tr>

    <!-- Fecha_registro End -->



	



    <!-- Fecha_actualizacion Start -->

	<tr>

	 <td>

	  <label for="fecha_actualizacion" class="col-sm-3 control-label"> Fecha_actualizacion </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_actualizacion", html_entity_decode($usuario_detalle->fecha_actualizacion)); ?>

	 </td>

	</tr>

    <!-- Fecha_actualizacion End -->



	



    <!-- Id_usuario Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_usuario </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($usuario) && !empty($usuario)):



	      foreach($usuario as $key => $value): 

	       if($value->id_usuario==$usuario_detalle->id_usuario)

	             echo $value->usuario;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_usuario End -->



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