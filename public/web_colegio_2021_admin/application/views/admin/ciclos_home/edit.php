<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Ciclos_home</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Ciclos_home</strong>
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
        <h5> Edit <small></small></h5>
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
              



    <!-- Imagen Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Imagen </label>

      <div class="col-sm-6">

      <input type="file" name="imagen" />

      <input type="hidden" name="old_imagen" 

      value="<?php if (isset($imagen) && $imagen!=""){echo $imagen; }?>" />  

        <?php if(isset($imagen_err) && !empty($imagen_err)) 

        {foreach($imagen_err as $key => $error)

        {echo "<div class=\"error-msg\"></div>"; } }?>

        <?php if (isset($ciclos_home->imagen) && $ciclos_home->imagen!=""){?>

            <br>

  <img src="<?php echo $this->config->item("photo_url");?><?php echo $ciclos_home->imagen; ?>" alt="pic" width="50" height="50" />

    <?php } ?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Imagen End -->



    



<!-- Titulo Start -->

<div class="form-group">

  <label for="titulo" class="col-sm-3 control-label"> Titulo </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="titulo" name="titulo" 

    

    value="<?php echo set_value("titulo",html_entity_decode($ciclos_home->titulo)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("titulo","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Titulo End -->







<!-- Subtitulo Start -->

<div class="form-group">

  <label for="subtitulo" class="col-sm-3 control-label"> Subtitulo </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="subtitulo" name="subtitulo" 

    

    value="<?php echo set_value("subtitulo",html_entity_decode($ciclos_home->subtitulo)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("subtitulo","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Subtitulo End -->







<!-- Enlace Start -->

<div class="form-group">

  <label for="enlace" class="col-sm-3 control-label"> Enlace </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="enlace" name="enlace" 

    

    value="<?php echo set_value("enlace",html_entity_decode($ciclos_home->enlace)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("enlace","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Enlace End -->







	<!-- Id_estado Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_estado </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_estado" id="id_estado">

              <option value="">Select Id_estado</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id; ?>" <?php echo $value->id==$ciclos_home->id_estado?'selected="selected"':""; ?>>

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_estado End -->







	<!-- Fecha_registro Start -->

	<div class="form-group">

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control datetimepicker" name="fecha_registro" id="fecha_registro" value="<?php echo set_value("fecha_registro",$ciclos_home->fecha_registro); ?>"/> 

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
<?php $this->load->view('footer'); 