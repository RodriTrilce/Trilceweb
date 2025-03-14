<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Usuario_medio_pago</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Usuario_medio_pago</strong>
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
              



	<!-- Id_medio_pago Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_medio_pago </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_medio_pago" id="id_medio_pago">

              <option value="">Select Id_medio_pago</option>

      <?php 

      if(isset($medio_pago) && !empty($medio_pago)):

      foreach($medio_pago as $key => $value): ?>

          <option value="<?php echo $value->id_medio_pago; ?>" <?php echo $value->id_medio_pago==$usuario_medio_pago->id_medio_pago?'selected="selected"':""; ?>>

            <?php echo $value->medio_pago; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_medio_pago End -->







	<!-- Id_usuario Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_usuario </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_usuario" id="id_usuario">

              <option value="">Select Id_usuario</option>

      <?php 

      if(isset($usuario) && !empty($usuario)):

      foreach($usuario as $key => $value): ?>

          <option value="<?php echo $value->id_usuario; ?>" <?php echo $value->id_usuario==$usuario_medio_pago->id_usuario?'selected="selected"':""; ?>>

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
<?php $this->load->view('footer'); 