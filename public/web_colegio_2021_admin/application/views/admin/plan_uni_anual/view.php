<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Plan_uni_anual</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Plan_uni_anual</strong>
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

	   <label for="inicio" class="col-sm-3 control-label"> Inicio </label>

	 </td>

	 <td> 

	   <?php echo set_value("inicio",html_entity_decode($plan_uni_anual->inicio)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="fin" class="col-sm-3 control-label"> Fin </label>

	 </td>

	 <td> 

	   <?php echo set_value("fin",html_entity_decode($plan_uni_anual->fin)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="turno" class="col-sm-3 control-label"> Turno </label>

	 </td>

	 <td> 

	   <?php echo set_value("turno",html_entity_decode($plan_uni_anual->turno)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="pago" class="col-sm-3 control-label"> Pago </label>

	 </td>

	 <td> 

	   <?php echo set_value("pago",html_entity_decode($plan_uni_anual->pago)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="estado" class="col-sm-3 control-label"> Estado </label>

	 </td>

	 <td> 

	   <?php echo set_value("estado",html_entity_decode($plan_uni_anual->estado)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="horario" class="col-sm-3 control-label"> Horario </label>

	 </td>

	 <td> 

	   <?php echo set_value("horario",html_entity_decode($plan_uni_anual->horario)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="whatsapp" class="col-sm-3 control-label"> Whatsapp </label>

	 </td>

	 <td> 

	   <?php echo set_value("whatsapp",html_entity_decode($plan_uni_anual->whatsapp)); ?>

	 </td>

	</tr>

	



    <!-- Foto Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto </label>

	 </td>

	 <td>

	 <?php if (isset($plan_uni_anual->foto) && $plan_uni_anual->foto!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $plan_uni_anual->foto; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto End -->



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