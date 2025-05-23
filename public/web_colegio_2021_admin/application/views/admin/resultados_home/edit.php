<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Resultados_home</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Resultados_home</strong>
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

        <?php if (isset($resultados_home->foto) && $resultados_home->foto!=""){?>

            <br>

  <img src="<?php echo $this->config->item("photo_url");?><?php echo $resultados_home->foto; ?>" alt="pic" width="50" height="50" />

    <?php } ?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto End -->



    



<!-- Descripcion1 Start -->

<div class="form-group">

  <label for="descripcion1" class="col-sm-3 control-label"> Descripcion1 </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="descripcion1" name="descripcion1" 

    

    value="<?php echo set_value("descripcion1",html_entity_decode($resultados_home->descripcion1)); ?>"

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

    

    value="<?php echo set_value("descripcion2",html_entity_decode($resultados_home->descripcion2)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("descripcion2","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Descripcion2 End -->







<!-- Descripcion3 Start -->

<div class="form-group">

  <label for="descripcion3" class="col-sm-3 control-label"> Descripcion3 </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="descripcion3" name="descripcion3" 

    

    value="<?php echo set_value("descripcion3",html_entity_decode($resultados_home->descripcion3)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("descripcion3","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Descripcion3 End -->




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