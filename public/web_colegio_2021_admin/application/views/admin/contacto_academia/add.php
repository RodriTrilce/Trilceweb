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
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox ">
      <div class="ibox-title" >
        <h5>Add <small></small></h5>
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
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="box-body">
              <?php if($this->session->flashdata('message')): ?>
              <div class="alert alert-success">
                <button type="button" class="close" data-close="alert"></button>
                <?php echo $this->session->flashdata('message'); ?>
              </div>
              <?php endif; ?> 
              





	<!-- Nombres_apellidos Start -->

	<div class="form-group">

	  <label for="nombres_apellidos" class="col-sm-3 control-label"> Nombres_apellidos </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="nombres_apellidos" name="nombres_apellidos" 

	    

	    value="<?php echo set_value("nombres_apellidos"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("nombres_apellidos","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Nombres_apellidos End -->





	





	<!-- Correo Start -->

	<div class="form-group">

	  <label for="correo" class="col-sm-3 control-label"> Correo </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="correo" name="correo" 

	    

	    value="<?php echo set_value("correo"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("correo","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Correo End -->





	





	<!-- Telefono Start -->

	<div class="form-group">

	  <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="telefono" name="telefono" 

	    

	    value="<?php echo set_value("telefono"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("telefono","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Telefono End -->





	



				<!-- Consulta Start -->

			<div class="form-group">

			  <label for="consulta" class="col-sm-3 control-label"> Consulta </label>

			  <div class="col-sm-4">

			    <textarea class="form-control" id="consulta" name="consulta"><?php echo set_value("consulta"); ?></textarea>

			  </div>

			  <div class="col-sm-5" >

			 

			    <?php echo form_error("consulta","<span class='label label-danger'>","</span>")?>

			  </div>

			</div> 

			<!-- Consulta End -->



			



	<!-- Fecha_registro Start -->

	<div class="form-group">

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control datetimepicker" id="fecha_registro"  name="fecha_registro"/>

	  </div>

	  <div class="col-sm-5" >

	    <?php echo form_error("fecha_registro","<span class='label label-danger'>","</span>")?>

	  </div>

	</div>

	<!-- Fecha_registro End -->



	
              <div class="form-group">
                <div class="col-sm-3" >                       
                </div>
                <div class="col-sm-6">
                  <button type="reset" class="btn btn-default ">Reset</button>
                  <button type="submit" class="btn btn-info ">Submit</button>
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