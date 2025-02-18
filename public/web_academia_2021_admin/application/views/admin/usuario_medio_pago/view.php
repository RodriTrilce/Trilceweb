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
   <div class="col-lg-12 row wrapper ">
      <div class="ibox ">
         <div class="ibox-title" >
            <h5>View <small></small></h5>
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
                  <div class="box-body">
                     <?php if($this->session->flashdata('message')): ?>
                     <div class="alert alert-success">
                        <button type="button" class="close" data-close="alert"></button>
                        <?php echo $this->session->flashdata('message'); ?>
                     </div>
                     <?php endif; ?> 
                     

<table class='table table-bordered' style='width:70%;' align='center'>



    <!-- Id_medio_pago Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_medio_pago </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($medio_pago) && !empty($medio_pago)):



	      foreach($medio_pago as $key => $value): 

	       if($value->id_medio_pago==$usuario_medio_pago->id_medio_pago)

	             echo $value->medio_pago;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_medio_pago End -->



	



    <!-- Id_usuario Start -->

	<tr>

	 <td>

	  <label class="control-label col-md-3"> Id_usuario </label>

	 </td>

	 <td> 

	   <?php 

	      if(isset($usuario) && !empty($usuario)):



	      foreach($usuario as $key => $value): 

	       if($value->id_usuario==$usuario_medio_pago->id_usuario)

	             echo $value->usuario;



	       endforeach; 

	       endif; ?>

	 </td>

	</tr>

    <!-- Id_usuario End -->



	<tr><td colspan="2"><a type="reset" class="btn btn-info pull-right" onclick="history.back()">Back</a></td></tr></table>
                     <div class="form-group">
                        <div class="col-sm-3" >                       
                        </div>
                        <div class="col-sm-6">
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