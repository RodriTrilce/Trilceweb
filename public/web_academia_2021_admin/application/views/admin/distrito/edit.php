<?php $this->load->view('header'); ?>
<!--  BO :heading -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Distrito</h2>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url().'admin/'?>">Dashboard</a>
      </li>
      <li class="active">
        <strong>Distrito</strong>
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
              



<!-- Distrito Start -->

<div class="form-group">

  <label for="distrito" class="col-sm-3 control-label"> Distrito </label>

  <div class="col-sm-4">

    <input type="text" class="form-control" id="distrito" name="distrito" 

    

    value="<?php echo set_value("distrito",html_entity_decode($distrito->distrito)); ?>"

    >

  </div>

  <div class="col-sm-5" >

 

    <?php echo form_error("distrito","<span class='label label-danger'>","</span>")?>

  </div>

</div> 

<!-- Distrito End -->







	<!-- Id_provincia Start -->

	<div class="form-group">

        <label class="control-label col-md-3"> Id_provincia </label>

          <div class="col-md-4">

              <select class="form-control select2" name="id_provincia" id="id_provincia">

              <option value="">Select Id_provincia</option>

      <?php 

      if(isset($provincia) && !empty($provincia)):

      foreach($provincia as $key => $value): ?>

          <option value="<?php echo $value->id_provincia; ?>" <?php echo $value->id_provincia==$distrito->id_provincia?'selected="selected"':""; ?>>

            <?php echo $value->provincia; ?>

          </option>

      <?php endforeach; ?>

      <?php endif; ?>

      </select>

        </div>

    </div>

      <!-- Id_provincia End -->




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