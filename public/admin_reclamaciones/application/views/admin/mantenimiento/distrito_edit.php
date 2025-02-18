<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Actualizar Distrito</h3>
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
           
                    <?php echo form_open(base_url('admin/mantenimiento/distrito_edit/'.$distrito['id_distrito']), 'class="form-horizontal"' )?> 
                    <div class="form-group">
                        <label for="distrito" class="col-sm-2 control-label">Distrito</label>
                        <div class="col-sm-9">
                            <input type="text" name="distrito" value="<?= $distrito['distrito']; ?>" class="form-control" id="distrito" placeholder="">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="provincia" class="col-sm-2 control-label">Provincia</label>
                        <div class="col-sm-9">
                            <select name="provincia" id="provincia" class="form-control">
                                <option value="">Seleccionar provincia</option>
                                <?php foreach ($all_provincias as $row) 
                                { 
                                ?>
                                    <option value="<?php echo $row['id_provincia']; ?>" <?php if($row['id_provincia']==$distrito['id_provincia']){echo "selected";}else{echo "";}?>><?php echo $row['provincia']; ?></option>
                                <?php 
                                } 
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-11">
                            <input type="submit" name="submit" value="Actualizar" class="btn btn-info pull-right">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>