<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Usuario_servicio</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Usuario_servicio</strong>
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
              



	<!-- Id_usuario Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_usuario </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_usuario" id="id_usuario">

              <option value="">Select Id_usuario</option>

      <?php 

      if(isset($usuario) && !empty($usuario)):

      foreach($usuario as $key => $value): ?>

          <option value="<?php echo $value->id_usuario; ?>" <?php echo $value->id_usuario==$usuario_servicio->id_usuario?'selected="selected"':""; ?>>

            <?php echo $value->usuario; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_usuario End -->







	<!-- Id_servicio Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_servicio </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_servicio" id="id_servicio">

              <option value="">Select Id_servicio</option>

      <?php 

      if(isset($servicio) && !empty($servicio)):

      foreach($servicio as $key => $value): ?>

          <option value="<?php echo $value->id_servicio; ?>" <?php echo $value->id_servicio==$usuario_servicio->id_servicio?'selected="selected"':""; ?>>

            <?php echo $value->servicio; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_servicio End -->




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