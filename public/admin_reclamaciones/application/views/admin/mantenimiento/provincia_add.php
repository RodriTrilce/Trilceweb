<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Provincia</h3>
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
           
                    <?php echo form_open(base_url('admin/mantenimiento/provincia_add'), 'class="form-horizontal"');  ?> 
                    <div class="form-group">
                        <label for="provincia" class="col-sm-2 control-label">Provincia</label>
                        <div class="col-sm-9">
                            <input type="text" name="provincia" class="form-control" id="provincia" placeholder="">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="departamento" class="col-sm-2 control-label">Departamento</label>
                        <div class="col-sm-9">
                            <select name="departamento" id="departamento" class="form-control">
                                <option value="">Seleccionar departamento</option>
                                <?php foreach ($all_departamentos as $row) 
                                { 
                                ?>
                                    <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
                                <?php 
                                } 
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-11">
                            <input type="submit" name="submit" value="Agregar" class="btn btn-info pull-right">
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
    $("#add_provincia").addClass('active');
</script>