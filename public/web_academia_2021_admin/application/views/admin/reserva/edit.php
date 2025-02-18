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
              



<!-- Fecha_inicio Start -->

<div class="form-group">

  <label for="fecha_inicio" class="col-sm-3 control-label"> Fecha_inicio </label>

  <div class="col-sm-4">

    <input type="text" class="form-control span2 datepicker" id="fecha_inicio" name="fecha_inicio" 

    

    value="<?php echo set_value("fecha_inicio",$reserva->fecha_inicio); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("fecha_inicio","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Fecha_inicio End -->







<!-- Fecha_fin Start -->

<div class="form-group">

  <label for="fecha_fin" class="col-sm-3 control-label"> Fecha_fin </label>

  <div class="col-sm-4">

    <input type="text" class="form-control span2 datepicker" id="fecha_fin" name="fecha_fin" 

    

    value="<?php echo set_value("fecha_fin",$reserva->fecha_fin); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("fecha_fin","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Fecha_fin End -->







	<!-- Hora_inicio Start -->

	<div class="form-group">

	  <label for="hora_inicio" class="col-sm-3 control-label"> Hora_inicio </label>

	  <div class="col-sm-4 clockpicker" data-autoclose="true">

	 <input type="text" class="form-control" value="<?php echo set_value("hora_inicio",$reserva->hora_inicio); ?>" name="hora_inicio" id="hora_inicio">

	  </div>

	  <div class="col-sm-5" >

	    <?php echo form_error("hora_inicio","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Hora_inicio End -->



	



	<!-- Hora_fin Start -->

	<div class="form-group">

	  <label for="hora_fin" class="col-sm-3 control-label"> Hora_fin </label>

	  <div class="col-sm-4 clockpicker" data-autoclose="true">

	 <input type="text" class="form-control" value="<?php echo set_value("hora_fin",$reserva->hora_fin); ?>" name="hora_fin" id="hora_fin">

	  </div>

	  <div class="col-sm-5" >

	    <?php echo form_error("hora_fin","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Hora_fin End -->



	



	<!-- Id_usuario Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_usuario </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_usuario" id="id_usuario">

              <option value="">Select Id_usuario</option>

      <?php 

      if(isset($usuario) && !empty($usuario)):

      foreach($usuario as $key => $value): ?>

          <option value="<?php echo $value->id_usuario; ?>" <?php echo $value->id_usuario==$reserva->id_usuario?'selected="selected"':""; ?>>

            <?php echo $value->usuario; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_usuario End -->







	<!-- Idprofesional Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Idprofesional </label>

          <div class="col-md-4">

              <select class="form-control select2" name="idprofesional" id="idprofesional">

              <option value="">Select Idprofesional</option>

      <?php 

      if(isset($usuario) && !empty($usuario)):

      foreach($usuario as $key => $value): ?>

          <option value="<?php echo $value->id_usuario; ?>" <?php echo $value->id_usuario==$reserva->idprofesional?'selected="selected"':""; ?>>

            <?php echo $value->usuario; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Idprofesional End -->







<!-- Total Start -->

<div class="form-group">

  <label for="total" class="col-sm-3 control-label"> Total </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="total" name="total" 

    

    value="<?php echo set_value("total",html_entity_decode($reserva->total)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("total","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Total End -->







	<!-- Id_medio_pago Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_medio_pago </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_medio_pago" id="id_medio_pago">

              <option value="">Select Id_medio_pago</option>

      <?php 

      if(isset($medio_pago) && !empty($medio_pago)):

      foreach($medio_pago as $key => $value): ?>

          <option value="<?php echo $value->id_medio_pago; ?>" <?php echo $value->id_medio_pago==$reserva->id_medio_pago?'selected="selected"':""; ?>>

            <?php echo $value->medio_pago; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_medio_pago End -->







	<!-- Id_estado Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_estado </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_estado" id="id_estado">

              <option value="">Select Id_estado</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>" <?php echo $value->id_estado==$reserva->id_estado?'selected="selected"':""; ?>>

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_estado End -->




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