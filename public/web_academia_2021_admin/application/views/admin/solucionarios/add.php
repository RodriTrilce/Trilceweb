<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Solucionarios</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Solucionarios</strong>
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





	





	<!-- Enlace_1 Start -->

	<div class="form-group">

	  <label for="enlace_1" class="col-sm-3 control-label"> Enlace_1 </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="enlace_1" name="enlace_1" 

	    

	    value="<?php echo set_value("enlace_1"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("enlace_1","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Enlace_1 End -->





	





	<!-- Enlace_2 Start -->

	<div class="form-group">

	  <label for="enlace_2" class="col-sm-3 control-label"> Enlace_2 </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="enlace_2" name="enlace_2" 

	    

	    value="<?php echo set_value("enlace_2"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("enlace_2","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Enlace_2 End -->





	





	<!-- Color Start -->

	<div class="form-group">

	  <label for="color" class="col-sm-3 control-label"> Color </label>

	  <div class="col-sm-4">

	    <input type="text" class="form-control" id="color" name="color" 

	    

	    value="<?php echo set_value("color"); ?>"

	    >

	  </div>

	  <div class="col-sm-5" >

	 

	    <?php echo form_error("color","<span class='label label-danger'>","</span>")?>

	  </div>

	</div> 

	<!-- Color End -->





	



	<!-- Categoria Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Categoria </label>

          <div class="col-md-4">

              <select class="form-control select2" name="categoria" id="categoria">

              <option value="">Select Categoria</option>

      <?php 

      if(isset($categoria_solucionarios) && !empty($categoria_solucionarios)):

      foreach($categoria_solucionarios as $key => $value): ?>

          <option value="<?php echo $value->id; ?>">

            <?php echo $value->categoria; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Categoria End -->







	<!-- Subcategoria Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Subcategoria </label>

          <div class="col-md-4">

              <select class="form-control select2" name="subcategoria" id="subcategoria">

              <option value="">Select Subcategoria</option>

      <?php 

      if(isset($subcategoria_solucionarios) && !empty($subcategoria_solucionarios)):

      foreach($subcategoria_solucionarios as $key => $value): ?>

          <option value="<?php echo $value->id; ?>">

            <?php echo $value->subcategoria; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Subcategoria End -->




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