<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Servicio</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Servicio</strong>
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
              



<!-- Servicio Start -->

<div class="form-group">

  <label for="servicio" class="col-sm-3 control-label"> Servicio </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="servicio" name="servicio" 

    

    value="<?php echo set_value("servicio",html_entity_decode($servicio->servicio)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("servicio","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Servicio End -->





<!-- Descripcion Start -->



<div class="form-group">

  <label for="descripcion" class="col-sm-3 control-label"> Descripcion </label>

  <div class="col-sm-4">

    <textarea class="form-control" id="descripcion" name="descripcion"><?php echo set_value("descripcion",html_entity_decode($servicio->descripcion)); ?></textarea>

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

    

    value="<?php echo set_value("precio",html_entity_decode($servicio->precio)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("precio","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Precio End -->







	<!-- Id_tipo_servicio Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_tipo_servicio </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_tipo_servicio" id="id_tipo_servicio">

              <option value="">Select Id_tipo_servicio</option>

      <?php 

      if(isset($tipo_servicio) && !empty($tipo_servicio)):

      foreach($tipo_servicio as $key => $value): ?>

          <option value="<?php echo $value->id_tipo_servicio; ?>" <?php echo $value->id_tipo_servicio==$servicio->id_tipo_servicio?'selected="selected"':""; ?>>

            <?php echo $value->tipo_servicio; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_tipo_servicio End -->




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