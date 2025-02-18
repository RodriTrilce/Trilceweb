<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Lista_vacaciones_utiles</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Lista_vacaciones_utiles</strong>
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
              



<!-- Dni Start -->

<div class="form-group">

  <label for="dni" class="col-sm-3 control-label"> Dni </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="dni" name="dni" 

    

    value="<?php echo set_value("dni",html_entity_decode($lista_vacaciones_utiles->dni)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("dni","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Dni End -->







<!-- Nombre Start -->

<div class="form-group">

  <label for="nombre" class="col-sm-3 control-label"> Nombre </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="nombre" name="nombre" 

    

    value="<?php echo set_value("nombre",html_entity_decode($lista_vacaciones_utiles->nombre)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("nombre","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Nombre End -->







<!-- Paterno Start -->

<div class="form-group">

  <label for="paterno" class="col-sm-3 control-label"> Paterno </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="paterno" name="paterno" 

    

    value="<?php echo set_value("paterno",html_entity_decode($lista_vacaciones_utiles->paterno)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("paterno","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Paterno End -->







<!-- Materno Start -->

<div class="form-group">

  <label for="materno" class="col-sm-3 control-label"> Materno </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="materno" name="materno" 

    

    value="<?php echo set_value("materno",html_entity_decode($lista_vacaciones_utiles->materno)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("materno","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Materno End -->







<!-- Email Start -->

<div class="form-group">

  <label for="email" class="col-sm-3 control-label"> Email </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="email" name="email" 

    

    value="<?php echo set_value("email",html_entity_decode($lista_vacaciones_utiles->email)); ?>"

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

    

    value="<?php echo set_value("telefono",html_entity_decode($lista_vacaciones_utiles->telefono)); ?>"

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

    

    value="<?php echo set_value("sede",html_entity_decode($lista_vacaciones_utiles->sede)); ?>"

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

    

    value="<?php echo set_value("grado",html_entity_decode($lista_vacaciones_utiles->grado)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("grado","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Grado End -->




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