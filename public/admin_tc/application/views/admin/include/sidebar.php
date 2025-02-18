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
				<p>&nbsp;</p>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->

		<ul class="sidebar-menu">
			<li id="users" class="treeview">
				<a href="<?= base_url('admin/users'); ?>">
					<i class="fa fa-user"></i> <span>Administradores</span>
				</a>
			</li>
			<li id="students" class="treeview">
				<a href="<?= base_url('admin/students'); ?>">
					<i class="fa fa-users"></i> <span>Aceptaciones</span>
				</a>
			</li>
		</ul>
	</section>
<!-- /.sidebar -->
</aside>

<script>
    $("#<?= $cur_tab; ?>").addClass('active');
</script>