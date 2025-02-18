

  <header class="main-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Logo -->
    <a href="<?= base_url('admin');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>INTRANET</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INTRANET</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
             <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= ucwords($this->session->userdata('name')); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p style="font-size: 14px">
                  <?= ucwords($this->session->userdata('nombres')); ?> <?= ucwords($this->session->userdata('apellidos')); ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= site_url('admin/auth/logout'); ?>" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
                <div class="pull-left">
                  <a href="<?= site_url('admin/auth/change_pwd'); ?>" class="btn btn-default btn-flat">Cambiar Clave</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
 