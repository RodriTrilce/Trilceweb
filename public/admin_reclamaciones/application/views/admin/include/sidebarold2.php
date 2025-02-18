<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= ucwords($this->session->userdata('name')); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li id="dashboard" class="treeview">
                <a href="<?= base_url('admin/dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Escritorio</span>
                </a>
            </li>
        </ul>
    
        <ul class="sidebar-menu">
            <li id="users" class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="add_user"><a href="<?= base_url('admin/users/add'); ?>"><i class="fa fa-circle-o"></i> Nuevo usuario</a></li>
                    <li id="view_users" class=""><a href="<?= base_url('admin/users'); ?>"><i class="fa fa-circle-o"></i> Ver usuarios</a></li>
                </ul>
            </li>
            <li id="tables" class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Data Total</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="reporte_general"><a href="<?= base_url('admin/reportes'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/reportes/acto_condicion'); ?>"><i class="fa fa-circle-o"></i> Acto / Condición Sub Estándar</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/reportes/acto_condicion_contar'); ?>"><i class="fa fa-circle-o"></i> Contar Acto / Condición</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/reportes/tipo_riesgo_contar'); ?>"><i class="fa fa-circle-o"></i> Contar Tipo de Riesgo</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/reportes/area_responsable'); ?>"><i class="fa fa-circle-o"></i> Área Responsable</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/reportes/estado'); ?>"><i class="fa fa-circle-o"></i> Estado</a></li>
                </ul>
            </li>
            <li id="tables" class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Gráficas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="reporte_general"><a href="<?= base_url('admin/graficas/acto_condicion'); ?>"><i class="fa fa-circle-o"></i> Acto / Condición Sub Estándar</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/graficas/tipo_riesgo'); ?>"><i class="fa fa-circle-o"></i> Tipo de Riesgo</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/graficas/area_responsable'); ?>"><i class="fa fa-circle-o"></i> Área Responsable</a></li>
                    <li id="reporte_general"><a href="<?= base_url('admin/graficas/estado'); ?>"><i class="fa fa-circle-o"></i> Estado</a></li>
                </ul>
            </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>

<script>
    $("#<?= $cur_tab; ?>").addClass('active');
</script>