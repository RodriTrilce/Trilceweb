<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Preparacion_home</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Preparacion_home</strong>
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
              



    <!-- Foto Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto </label>

      <div class="col-sm-6">

      <input type="file" name="foto" />

      <input type="hidden" name="old_foto" value="<?php if (isset($foto) && $foto!=""){echo $foto; } ?>" />

        <?php if(isset($foto_err) && !empty($foto_err)) 

        { foreach($foto_err as $key => $error)

        { echo "<div class=\"error-msg\"></div>"; } }?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto End -->



    





	<!-- Video Start -->

	<div class="form-group">

	  <label for="video" class="col-sm-3 control-label"> Video </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="video" name="video" 

	    

	    value="<?php echo set_value("video"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("video","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Video End -->





	





	<!-- Titulo Start -->

	<div class="form-group">

	  <label for="titulo" class="col-sm-3 control-label"> Titulo </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="titulo" name="titulo" 

	    

	    value="<?php echo set_value("titulo"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("titulo","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Titulo End -->





	





	<!-- Descripcion1 Start -->

	<div class="form-group">

	  <label for="descripcion1" class="col-sm-3 control-label"> Descripcion1 </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="descripcion1" name="descripcion1" 

	    

	    value="<?php echo set_value("descripcion1"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("descripcion1","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Descripcion1 End -->





	





	<!-- Descripcion2 Start -->

	<div class="form-group">

	  <label for="descripcion2" class="col-sm-3 control-label"> Descripcion2 </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="descripcion2" name="descripcion2" 

	    

	    value="<?php echo set_value("descripcion2"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("descripcion2","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Descripcion2 End -->





	
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