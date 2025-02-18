<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Plan_uni_anual</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Plan_uni_anual</strong>
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
              



<!-- Inicio Start -->

<div class="form-group">

  <label for="inicio" class="col-sm-3 control-label"> Inicio </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="inicio" name="inicio" 

    

    value="<?php echo set_value("inicio",html_entity_decode($plan_uni_anual->inicio)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("inicio","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Inicio End -->







<!-- Fin Start -->

<div class="form-group">

  <label for="fin" class="col-sm-3 control-label"> Fin </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="fin" name="fin" 

    

    value="<?php echo set_value("fin",html_entity_decode($plan_uni_anual->fin)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("fin","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Fin End -->







<!-- Turno Start -->

<div class="form-group">

  <label for="turno" class="col-sm-3 control-label"> Turno </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="turno" name="turno" 

    

    value="<?php echo set_value("turno",html_entity_decode($plan_uni_anual->turno)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("turno","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Turno End -->







<!-- Pago Start -->

<div class="form-group">

  <label for="pago" class="col-sm-3 control-label"> Pago </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="pago" name="pago" 

    

    value="<?php echo set_value("pago",html_entity_decode($plan_uni_anual->pago)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("pago","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Pago End -->







<!-- Estado Start -->

<div class="form-group">

  <label for="estado" class="col-sm-3 control-label"> Estado </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="estado" name="estado" 

    

    value="<?php echo set_value("estado",html_entity_decode($plan_uni_anual->estado)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("estado","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Estado End -->







<!-- Horario Start -->

<div class="form-group">

  <label for="horario" class="col-sm-3 control-label"> Horario </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="horario" name="horario" 

    

    value="<?php echo set_value("horario",html_entity_decode($plan_uni_anual->horario)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("horario","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Horario End -->







<!-- Whatsapp Start -->

<div class="form-group">

  <label for="whatsapp" class="col-sm-3 control-label"> Whatsapp </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="whatsapp" name="whatsapp" 

    

    value="<?php echo set_value("whatsapp",html_entity_decode($plan_uni_anual->whatsapp)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("whatsapp","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Whatsapp End -->







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

        <?php if (isset($plan_uni_anual->foto) && $plan_uni_anual->foto!=""){?>

            <br>

  <img src="<?php echo $this->config->item("photo_url");?><?php echo $plan_uni_anual->foto; ?>" alt="pic" width="50" height="50" />

    <?php } ?>

      </div>

        <div class="col-sm-3" >

      </div>

    </div>

    <!-- Foto End -->



    
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