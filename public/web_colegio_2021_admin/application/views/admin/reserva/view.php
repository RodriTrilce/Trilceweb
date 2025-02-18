<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
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



    <!-- Fecha_inicio Start -->

	<tr>

	 <td>

	  <label for="fecha_inicio" class="col-sm-3 control-label"> Fecha_inicio </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_inicio", html_entity_decode($reserva->fecha_inicio)); ?>

	 </td>

	</tr>

    <!-- Fecha_inicio End -->



	



    <!-- Fecha_fin Start -->

	<tr>

	 <td>

	  <label for="fecha_fin" class="col-sm-3 control-label"> Fecha_fin </label>

	 </td>

	 <td> 

	   <?php echo set_value("fecha_fin", html_entity_decode($reserva->fecha_fin)); ?>

	 </td>

	</tr>

    <!-- Fecha_fin End -->



	



    <!-- Hora_inicio Start -->

	<tr>

	 <td>

	  <label for="hora_inicio" class="col-sm-3 control-label"> Hora_inicio </label>

	 </td>

	 <td> 

	   <?php echo set_value("hora_inicio", html_entity_decode($reserva->hora_inicio)); ?>

	 </td>

	</tr>

    <!-- Hora_inicio End -->



	



    <!-- Hora_fin Start -->

	<tr>

	 <td>

	  <label for="hora_fin" class="col-sm-3 control-label"> Hora_fin </label>

	 </td>

	 <td> 

	   <?php echo set_value("hora_fin", html_entity_decode($reserva->hora_fin)); ?>

	 </td>

	</tr>

    <!-- Hora_fin End -->



	



    <!-- Id_usuario Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_usuario </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($usuario) && !empty($usuario)):



	      foreach($usuario as $key => $value): 

	       if($value->id_usuario==$reserva->id_usuario)

	             echo $value->usuario;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_usuario End -->



	



    <!-- Idprofesional Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Idprofesional </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($usuario) && !empty($usuario)):



	      foreach($usuario as $key => $value): 

	       if($value->id_usuario==$reserva->idprofesional)

	             echo $value->usuario;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Idprofesional End -->



	

	<tr>

	 <td>

	   <label for="total" class="col-sm-3 control-label"> Total </label>

	 </td>

	 <td> 

	   <?php echo set_value("total",html_entity_decode($reserva->total)); ?>

	 </td>

	</tr>

	



    <!-- Id_medio_pago Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_medio_pago </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($medio_pago) && !empty($medio_pago)):



	      foreach($medio_pago as $key => $value): 

	       if($value->id_medio_pago==$reserva->id_medio_pago)

	             echo $value->medio_pago;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_medio_pago End -->



	



    <!-- Id_estado Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_estado </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($estado) && !empty($estado)):



	      foreach($estado as $key => $value): 

	       if($value->id_estado==$reserva->id_estado)

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