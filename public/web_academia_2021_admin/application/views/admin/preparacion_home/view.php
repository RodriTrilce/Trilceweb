<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
      <h2>Preparacion_home</h2>
      <ol class="breadcrumb">
         <li>
            <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
         </li>
         <li class="active">
            <strong>Preparacion_home</strong>
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



    <!-- Foto Start -->

	<tr>

	 <td>

	  <label for="address" class="col-sm-3 control-label"> Foto </label>

	 </td>

	 <td>

	 <?php if (isset($preparacion_home->foto) && $preparacion_home->foto!=""){?>

	            <br>

	    <img src="<?php echo $this->config->item("photo_url");?><?php echo $preparacion_home->foto; ?>" alt="pic" width="50" height="50" />

	    <?php } ?>

	 </td>

	</tr>

    <!-- Foto End -->



	

	<tr>

	 <td>

	   <label for="video" class="col-sm-3 control-label"> Video </label>

	 </td>

	 <td> 

	   <?php echo set_value("video",html_entity_decode($preparacion_home->video)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="titulo" class="col-sm-3 control-label"> Titulo </label>

	 </td>

	 <td> 

	   <?php echo set_value("titulo",html_entity_decode($preparacion_home->titulo)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="descripcion1" class="col-sm-3 control-label"> Descripcion1 </label>

	 </td>

	 <td> 

	   <?php echo set_value("descripcion1",html_entity_decode($preparacion_home->descripcion1)); ?>

	 </td>

	</tr>

	

	<tr>

	 <td>

	   <label for="descripcion2" class="col-sm-3 control-label"> Descripcion2 </label>

	 </td>

	 <td> 

	   <?php echo set_value("descripcion2",html_entity_decode($preparacion_home->descripcion2)); ?>

	 </td>

	</tr>

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