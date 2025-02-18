<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Usuario_detalle</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Usuario_detalle</strong>
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
              



    <!-- Antecedentes_penales Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Antecedentes_penales </label>

      <div class="col-sm-6">

      <input type="file" name="antecedentes_penales" />

      <input type="hidden" name="old_antecedentes_penales" value="<?php if (isset($antecedentes_penales) && $antecedentes_penales!=""){echo $antecedentes_penales; } ?>" />

        <?php if(isset($antecedentes_penales_err) && !empty($antecedentes_penales_err)) 

        { foreach($antecedentes_penales_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Antecedentes_penales End -->



    



	<!-- Estado_ap Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado_ap </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado_ap" id="estado_ap">

              <option value="">Select Estado_ap</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>">

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado_ap End -->







    <!-- Verificacion_domociliaria Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Verificacion_domociliaria </label>

      <div class="col-sm-6">

      <input type="file" name="verificacion_domociliaria" />

      <input type="hidden" name="old_verificacion_domociliaria" value="<?php if (isset($verificacion_domociliaria) && $verificacion_domociliaria!=""){echo $verificacion_domociliaria; } ?>" />

        <?php if(isset($verificacion_domociliaria_err) && !empty($verificacion_domociliaria_err)) 

        { foreach($verificacion_domociliaria_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Verificacion_domociliaria End -->



    



	<!-- Estado_vd Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado_vd </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado_vd" id="estado_vd">

              <option value="">Select Estado_vd</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>">

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado_vd End -->







    <!-- Ruc_personal Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Ruc_personal </label>

      <div class="col-sm-6">

      <input type="file" name="ruc_personal" />

      <input type="hidden" name="old_ruc_personal" value="<?php if (isset($ruc_personal) && $ruc_personal!=""){echo $ruc_personal; } ?>" />

        <?php if(isset($ruc_personal_err) && !empty($ruc_personal_err)) 

        { foreach($ruc_personal_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Ruc_personal End -->



    



	<!-- Estado_rp Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado_rp </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado_rp" id="estado_rp">

              <option value="">Select Estado_rp</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>">

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado_rp End -->







    <!-- Entrevista Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Entrevista </label>

      <div class="col-sm-6">

      <input type="file" name="entrevista" />

      <input type="hidden" name="old_entrevista" value="<?php if (isset($entrevista) && $entrevista!=""){echo $entrevista; } ?>" />

        <?php if(isset($entrevista_err) && !empty($entrevista_err)) 

        { foreach($entrevista_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Entrevista End -->



    



	<!-- Estado_e Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado_e </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado_e" id="estado_e">

              <option value="">Select Estado_e</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>">

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado_e End -->







    <!-- Evaluacion_destrezas Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Evaluacion_destrezas </label>

      <div class="col-sm-6">

      <input type="file" name="evaluacion_destrezas" />

      <input type="hidden" name="old_evaluacion_destrezas" value="<?php if (isset($evaluacion_destrezas) && $evaluacion_destrezas!=""){echo $evaluacion_destrezas; } ?>" />

        <?php if(isset($evaluacion_destrezas_err) && !empty($evaluacion_destrezas_err)) 

        { foreach($evaluacion_destrezas_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Evaluacion_destrezas End -->



    



	<!-- Estado_ed Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado_ed </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado_ed" id="estado_ed">

              <option value="">Select Estado_ed</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>">

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado_ed End -->







    <!-- Corroborar_referencia Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Corroborar_referencia </label>

      <div class="col-sm-6">

      <input type="file" name="corroborar_referencia" />

      <input type="hidden" name="old_corroborar_referencia" value="<?php if (isset($corroborar_referencia) && $corroborar_referencia!=""){echo $corroborar_referencia; } ?>" />

        <?php if(isset($corroborar_referencia_err) && !empty($corroborar_referencia_err)) 

        { foreach($corroborar_referencia_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Corroborar_referencia End -->



    



	<!-- Estado_cr Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado_cr </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado_cr" id="estado_cr">

              <option value="">Select Estado_cr</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id_estado; ?>">

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado_cr End -->







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



	



	<!-- Fecha_actualizacion Start -->

	<div class="form-group">

	  <label for="fecha_actualizacion" class="col-sm-3 control-label"> Fecha_actualizacion </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control datetimepicker" id="fecha_actualizacion"  name="fecha_actualizacion"/>

	  </div>

	  <div class="col-sm-5" >

	    <?php echo form_error("fecha_actualizacion","<span class='label label-danger'>","</span>")?>

	  </div>

	</div>

	<!-- Fecha_actualizacion End -->



	



	<!-- Id_usuario Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_usuario </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_usuario" id="id_usuario">

              <option value="">Select Id_usuario</option>

      <?php 

      if(isset($usuario) && !empty($usuario)):

      foreach($usuario as $key => $value): ?>

          <option value="<?php echo $value->id_usuario; ?>">

            <?php echo $value->usuario; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_usuario End -->




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