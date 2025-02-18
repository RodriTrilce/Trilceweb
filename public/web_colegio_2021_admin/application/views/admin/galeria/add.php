<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Galeria</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Galeria</strong>
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
              



				<!-- Galeria Start -->

			<div class="form-group">

			  <label for="galeria" class="col-sm-3 control-label"> Galeria </label>

			  <div class="col-sm-4">

			    <textarea class="form-control" id="galeria" name="galeria"><?php echo set_value("galeria"); ?></textarea>

			  </div>

			  <div class="col-sm-5" >

			 

			    <?php echo form_error("galeria","<span class='label label-danger'>","</span>")?>

			  </div>

			</div> 

			<!-- Galeria End -->



			



    <!-- Foto_cover Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto_cover </label>

      <div class="col-sm-6">

      <input type="file" name="foto_cover" />

      <input type="hidden" name="old_foto_cover" value="<?php if (isset($foto_cover) && $foto_cover!=""){echo $foto_cover; } ?>" />

        <?php if(isset($foto_cover_err) && !empty($foto_cover_err)) 

        { foreach($foto_cover_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto_cover End -->



    



    <!-- Foto1 Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto1 </label>

      <div class="col-sm-6">

      <input type="file" name="foto1" />

      <input type="hidden" name="old_foto1" value="<?php if (isset($foto1) && $foto1!=""){echo $foto1; } ?>" />

        <?php if(isset($foto1_err) && !empty($foto1_err)) 

        { foreach($foto1_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto1 End -->



    



    <!-- Foto2 Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto2 </label>

      <div class="col-sm-6">

      <input type="file" name="foto2" />

      <input type="hidden" name="old_foto2" value="<?php if (isset($foto2) && $foto2!=""){echo $foto2; } ?>" />

        <?php if(isset($foto2_err) && !empty($foto2_err)) 

        { foreach($foto2_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto2 End -->



    



    <!-- Foto3 Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto3 </label>

      <div class="col-sm-6">

      <input type="file" name="foto3" />

      <input type="hidden" name="old_foto3" value="<?php if (isset($foto3) && $foto3!=""){echo $foto3; } ?>" />

        <?php if(isset($foto3_err) && !empty($foto3_err)) 

        { foreach($foto3_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto3 End -->



    



    <!-- Foto4 Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto4 </label>

      <div class="col-sm-6">

      <input type="file" name="foto4" />

      <input type="hidden" name="old_foto4" value="<?php if (isset($foto4) && $foto4!=""){echo $foto4; } ?>" />

        <?php if(isset($foto4_err) && !empty($foto4_err)) 

        { foreach($foto4_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto4 End -->



    



	<!-- Id_servicio Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_servicio </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_servicio" id="id_servicio">

              <option value="">Select Id_servicio</option>

      <?php 

      if(isset($servicio) && !empty($servicio)):

      foreach($servicio as $key => $value): ?>

          <option value="<?php echo $value->id_servicio; ?>">

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
<?php $this->load->view('footer'); ?>