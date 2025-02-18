<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Banner_uni_anual</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Banner_uni_anual</strong>
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

    

    value="<?php echo set_value("titulo",html_entity_decode($banner_uni_anual->titulo)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("titulo","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Titulo End -->







<!-- Opcion1 Start -->

<div class="form-group">

  <label for="opcion1" class="col-sm-3 control-label"> Opcion1 </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="opcion1" name="opcion1" 

    

    value="<?php echo set_value("opcion1",html_entity_decode($banner_uni_anual->opcion1)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("opcion1","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Opcion1 End -->







<!-- Opcion2 Start -->

<div class="form-group">

  <label for="opcion2" class="col-sm-3 control-label"> Opcion2 </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="opcion2" name="opcion2" 

    

    value="<?php echo set_value("opcion2",html_entity_decode($banner_uni_anual->opcion2)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("opcion2","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Opcion2 End -->







    <!-- Foto Start -->

    <div class="form-group">

      <label for="address" class="col-sm-3 control-label"> Foto </label>

      <div class="col-sm-6">

      <input type="file" name="foto" />

      <input type="hidden" name="old_foto" 

      value="<?php if (isset($foto) && $foto!=""){echo $foto; }?>" />  

        <?php if(isset($foto_err) && !empty($foto_err)) 

        {foreach($foto_err as $key => $error)

        {echo "<div class=\"error-msg\"></div>"; } }?>

        <?php if (isset($banner_uni_anual->foto) && $banner_uni_anual->foto!=""){?>

            <br>

  <img src="<?php echo $this->config->item("photo_url");?><?php echo $banner_uni_anual->foto; ?>" alt="pic" width="50" height="50" />

    <?php } ?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto End -->



    



<!-- Formulario Start -->

<div class="form-group">

  <label for="formulario" class="col-sm-3 control-label"> Formulario </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="formulario" name="formulario" 

    

    value="<?php echo set_value("formulario",html_entity_decode($banner_uni_anual->formulario)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("formulario","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Formulario End -->







	<!-- Estado Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Estado </label>

          <div class="col-md-4">

              <select class="form-control select2" name="estado" id="estado">

              <option value="">Select Estado</option>

      <?php 

      if(isset($estado) && !empty($estado)):

      foreach($estado as $key => $value): ?>

          <option value="<?php echo $value->id; ?>" <?php echo $value->id==$banner_uni_anual->estado?'selected="selected"':""; ?>>

            <?php echo $value->estado; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Estado End -->




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