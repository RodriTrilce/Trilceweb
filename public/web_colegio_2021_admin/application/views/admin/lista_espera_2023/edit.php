<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Lista_espera_2023</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Lista_espera_2023</strong>
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
              



<!-- Nombres_apellidos Start -->

<div class="form-group">

  <label for="nombres_apellidos" class="col-sm-3 control-label"> Nombres_apellidos </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="nombres_apellidos" name="nombres_apellidos" 

    

    value="<?php echo set_value("nombres_apellidos",html_entity_decode($lista_espera_2023->nombres_apellidos)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("nombres_apellidos","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Nombres_apellidos End -->







<!-- Nombres Start -->

<div class="form-group">

  <label for="nombres" class="col-sm-3 control-label"> Nombres </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="nombres" name="nombres" 

    

    value="<?php echo set_value("nombres",html_entity_decode($lista_espera_2023->nombres)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("nombres","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Nombres End -->







<!-- Apellido_paterno Start -->

<div class="form-group">

  <label for="apellido_paterno" class="col-sm-3 control-label"> Apellido_paterno </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" 

    

    value="<?php echo set_value("apellido_paterno",html_entity_decode($lista_espera_2023->apellido_paterno)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("apellido_paterno","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Apellido_paterno End -->







<!-- Apellido_materno Start -->

<div class="form-group">

  <label for="apellido_materno" class="col-sm-3 control-label"> Apellido_materno </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" 

    

    value="<?php echo set_value("apellido_materno",html_entity_decode($lista_espera_2023->apellido_materno)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("apellido_materno","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Apellido_materno End -->







<!-- Dni Start -->

<div class="form-group">

  <label for="dni" class="col-sm-3 control-label"> Dni </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="dni" name="dni" 

    

    value="<?php echo set_value("dni",html_entity_decode($lista_espera_2023->dni)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("dni","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Dni End -->







<!-- Email Start -->

<div class="form-group">

  <label for="email" class="col-sm-3 control-label"> Email </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="email" name="email" 

    

    value="<?php echo set_value("email",html_entity_decode($lista_espera_2023->email)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("email","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Email End -->







<!-- Telefono Start -->

<div class="form-group">

  <label for="telefono" class="col-sm-3 control-label"> Telefono </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="telefono" name="telefono" 

    

    value="<?php echo set_value("telefono",html_entity_decode($lista_espera_2023->telefono)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("telefono","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Telefono End -->







<!-- Sede Start -->

<div class="form-group">

  <label for="sede" class="col-sm-3 control-label"> Sede </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="sede" name="sede" 

    

    value="<?php echo set_value("sede",html_entity_decode($lista_espera_2023->sede)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("sede","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Sede End -->







<!-- Grado Start -->

<div class="form-group">

  <label for="grado" class="col-sm-3 control-label"> Grado </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="grado" name="grado" 

    

    value="<?php echo set_value("grado",html_entity_decode($lista_espera_2023->grado)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("grado","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Grado End -->







	<!-- Fecha_registro Start -->

	<div class="form-group">

	  <label for="fecha_registro" class="col-sm-3 control-label"> Fecha_registro </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control datetimepicker" name="fecha_registro" id="fecha_registro" value="<?php echo set_value("fecha_registro",$lista_espera_2023->fecha_registro); ?>"/> 

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