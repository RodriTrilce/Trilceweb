<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Membresia</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Membresia</strong>
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
              



<!-- Titulo Start -->

<div class="form-group">

  <label for="titulo" class="col-sm-3 control-label"> Titulo </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="titulo" name="titulo" 

    

    value="<?php echo set_value("titulo",html_entity_decode($membresia->titulo)); ?>"

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

    

    value="<?php echo set_value("subtitulo",html_entity_decode($membresia->subtitulo)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("subtitulo","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Subtitulo End -->





<!-- Descripcion Start -->



<div class="form-group">

  <label for="descripcion" class="col-sm-3 control-label"> Descripcion </label>

  <div class="col-sm-4">

    <textarea class="form-control" id="descripcion" name="descripcion"><?php echo set_value("descripcion",html_entity_decode($membresia->descripcion)); ?></textarea>

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("descripcion","<span class='label label-danger'>","</span>")?>

  </div>

</div> 



<!-- Descripcion End -->





<!-- Precio Start -->

<div class="form-group">

  <label for="precio" class="col-sm-3 control-label"> Precio </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="precio" name="precio" 

    

    value="<?php echo set_value("precio",html_entity_decode($membresia->precio)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("precio","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Precio End -->







	<!-- Id_periodo_membresia Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_periodo_membresia </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_periodo_membresia" id="id_periodo_membresia">

              <option value="">Select Id_periodo_membresia</option>

      <?php 

      if(isset($periodo_membresia) && !empty($periodo_membresia)):

      foreach($periodo_membresia as $key => $value): ?>

          <option value="<?php echo $value->id_periodo_membresia; ?>" <?php echo $value->id_periodo_membresia==$membresia->id_periodo_membresia?'selected="selected"':""; ?>>

            <?php echo $value->periodo; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_periodo_membresia End -->







	<!-- Id_tipo_membresia Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_tipo_membresia </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_tipo_membresia" id="id_tipo_membresia">

              <option value="">Select Id_tipo_membresia</option>

      <?php 

      if(isset($tipo_membresia) && !empty($tipo_membresia)):

      foreach($tipo_membresia as $key => $value): ?>

          <option value="<?php echo $value->id_tipo_membresia; ?>" <?php echo $value->id_tipo_membresia==$membresia->id_tipo_membresia?'selected="selected"':""; ?>>

            <?php echo $value->tipo_membresia; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_tipo_membresia End -->







	<!-- Id_estado Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_estado </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_estado" id="id_estado">

              <option value="">Select Id_estado</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>" <?php echo $value->id_estado==$membresia->id_estado?'selected="selected"':""; ?>>

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

    <input type="text" class="form-control span2 datepicker" id="fecha_registro" name="fecha_registro" 

    

    value="<?php echo set_value("fecha_registro",$membresia->fecha_registro); ?>"

    >

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