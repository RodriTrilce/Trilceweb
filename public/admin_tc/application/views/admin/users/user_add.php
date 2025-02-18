<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar Usuario</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/users/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-9">
                  <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres">
                </div>
              </div>

              <div class="form-group">
                <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>

                <div class="col-sm-9">
                  <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
                </div>
              </div>
              
              <div class="form-group">
                <label for="dni" class="col-sm-2 control-label">DNI</label>

                <div class="col-sm-9">
                  <input type="text" name="dni" class="form-control" id="dni" placeholder="DNI">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Clave</label>
                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Clave">
                </div>
              </div>
              
                <div class="form-group">
                    <label for="perfil" class="col-sm-2 control-label">Perfil</label>
                        <div class="col-sm-9">
                            <select name="perfil" id="perfil" class="form-control">
                                <option value="">Seleccionar perfil</option>
                                <?php foreach ($all_perfiles as $row) 
                                { 
                                ?>
                                <option value="<?php echo $row['id_perfil']; ?>"><?php echo $row['perfil']; ?></option>
                                <?php 
                                } 
                                ?>
                            </select>
                        </div>
                </div>
                
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Agregar Usuario" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


<script>
$("#add_user").addClass('active');
</script>    