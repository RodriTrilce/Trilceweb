<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar Estudiante</h3>
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
           
            <?php echo form_open(base_url('admin/students/add'), 'class="form-horizontal"');  ?> 
              
              <div class="form-group">
                <label for="apellido_paterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-9">
                  <input type="text" name="apellido_paterno" class="form-control" id="apellido_paterno" placeholder="Apellido Paterno">
                </div>
              </div>

              <div class="form-group">
                <label for="apellido_materno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-9">
                  <input type="text" name="apellido_materno" class="form-control" id="apellido_materno" placeholder="Apellido Materno">
                </div>
              </div>
              
              <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-9">
                  <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres">
                </div>
              </div>

              <div class="form-group">
                <label for="domicilio" class="col-sm-2 control-label">Domicilio</label>
                <div class="col-sm-9">
                  <input type="text" name="domicilio" class="form-control" id="domicilio" placeholder="Domicilio">
                </div>
              </div>

              <div class="form-group">
                <label for="distrito" class="col-sm-2 control-label">Distrito</label>
                <div class="col-sm-9">
                  <input type="text" name="distrito" class="form-control" id="distrito" placeholder="Distrito">
                </div>
              </div>

              <div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
                <div class="col-sm-9">
                  <input type="text" name="estado_civil" class="form-control" id="estado_civil" placeholder="Estado Civil">
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