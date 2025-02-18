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
              





	<!-- Usuario Start -->

	<div class="form-group">

	  <label for="usuario" class="col-sm-3 control-label"> Usuario </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="usuario" name="usuario" 

	    

	    value="<?php echo set_value("usuario"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("usuario","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Usuario End -->





	





	<!-- Clave Start -->

	<div class="form-group">

	  <label for="clave" class="col-sm-3 control-label"> Clave </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="clave" name="clave" 

	    

	    value="<?php echo set_value("clave"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("clave","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Clave End -->





	





	<!-- Email Start -->

	<div class="form-group">

	  <label for="email" class="col-sm-3 control-label"> Email </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="email" name="email" 

	    

	    value="<?php echo set_value("email"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("email","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Email End -->





	





	<!-- Nombres Start -->

	<div class="form-group">

	  <label for="nombres" class="col-sm-3 control-label"> Nombres </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="nombres" name="nombres" 

	    

	    value="<?php echo set_value("nombres"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("nombres","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Nombres End -->





	





	<!-- Apellidos Start -->

	<div class="form-group">

	  <label for="apellidos" class="col-sm-3 control-label"> Apellidos </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="apellidos" name="apellidos" 

	    

	    value="<?php echo set_value("apellidos"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("apellidos","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Apellidos End -->





	



				<!-- Experiencia Start -->

			<div class="form-group">

			  <label for="experiencia" class="col-sm-3 control-label"> Experiencia </label>

			  <div class="col-sm-4">

			    <textarea class="form-control" id="experiencia" name="experiencia"><?php echo set_value("experiencia"); ?></textarea>

			  </div>

			  <div class="col-sm-5" >

			 

			    <?php echo form_error("experiencia","<span class='label label-danger'>","</span>")?>

			  </div>

			</div> 

			<!-- Experiencia End -->



			





	<!-- Anio Start -->

	<div class="form-group">

	  <label for="anio" class="col-sm-3 control-label"> Anio </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="anio" name="anio" 

	    

	    value="<?php echo set_value("anio"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("anio","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Anio End -->





	



	<!-- Id_distrito Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_distrito </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_distrito" id="id_distrito">

              <option value="">Select Id_distrito</option>

      <?php 

      if(isset($distrito) && !empty($distrito)):

      foreach($distrito as $key => $value): ?>

          <option value="<?php echo $value->id_distrito; ?>">

            <?php echo $value->distrito; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_distrito End -->







				<!-- Direccion Start -->

			<div class="form-group">

			  <label for="direccion" class="col-sm-3 control-label"> Direccion </label>

			  <div class="col-sm-4">

			    <textarea class="form-control" id="direccion" name="direccion"><?php echo set_value("direccion"); ?></textarea>

			  </div>

			  <div class="col-sm-5" >

			 

			    <?php echo form_error("direccion","<span class='label label-danger'>","</span>")?>

			  </div>

			</div> 

			<!-- Direccion End -->



			





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





	





	<!-- Celular Start -->

	<div class="form-group">

	  <label for="celular" class="col-sm-3 control-label"> Celular </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="celular" name="celular" 

	    

	    value="<?php echo set_value("celular"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("celular","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Celular End -->





	



	<!-- Id_perfil Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_perfil </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_perfil" id="id_perfil">

              <option value="">Select Id_perfil</option>

      <?php 

      if(isset($perfil) && !empty($perfil)):

      foreach($perfil as $key => $value): ?>

          <option value="<?php echo $value->id_perfil; ?>">

            <?php echo $value->perfil; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_perfil End -->




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