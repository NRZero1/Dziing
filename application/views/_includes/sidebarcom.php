 <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('company') ?>">
        <div class="sidebar-brand-icon"> <!--rotate-n-15-->
          <img src="img/Dziing_logo_Temp_White_Overlay.png" style="width: 35px; height: 35px;">
        </div>
        <div class="sidebar-brand-text mx-1"><?php echo SITE_NAME ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('company') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php
        if($_SESSION['level']=='admin')
        { 
      ?>
          <div class="sidebar-heading">
            Main Navigation
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item <?php echo $this->uri->segment(2) == 'manage' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Manage</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Data: </h6>
                <a class="collapse-item" href="<?php echo site_url('admin/manage/add') ?>">New Company</a>
                <a class="collapse-item" href="<?php echo site_url('admin/manage') ?>">Data Company</a>
              </div>
            </div>
          </li>

          <!-- Nav Item -->
          <li class="nav-item <?php echo $this->uri->segment(2) == 'users' ? 'active': '' ?>">
            <a class="nav-link" href="<?php echo site_url('admin/users') ?>">
              <i class="fas fa-fw fa-users"></i>
              <span>Users</span></a>
          </li>
          
          <li class="nav-item <?php echo $this->uri->segment(1) == 'change' ? 'active': '' ?>">
            <a class="nav-link" href="<?php echo site_url('change_pass_admin_company') ?>">
              <i class="fas fa-fw fa-pen-alt"></i>
              <span>Change Password</span></a>
          </li>   
        <?php 
        }
        if($_SESSION['level']=='company')
        { ?>

          <li class="nav-item <?php echo $this->uri->segment(1) == 'change' ? 'active': '' ?>">
            <a class="nav-link" href="<?php echo site_url('change_pass_admin_company') ?>">
              <i class="fas fa-fw fa-pen-alt"></i>
              <span>Change Password</span></a>
          </li>
   
        <?php
        }  
        ?>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>