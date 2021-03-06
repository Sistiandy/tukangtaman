<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo media_url() ?>/img/user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo ucfirst($this->session->userdata('ufullname')); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><br>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"><center>MENU</center></li><br>
            <li class="<?php echo ($this->uri->segment(2) == 'dashboard' OR $this->uri->segment(2) == NULL) ? 'active' : '' ?>">
                <a href="<?php echo site_url('admin') ?>">
                    <i class="fa fa-home text-lapak"></i> <span>Dashboard</span>   
                </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'slideshow') ? 'active' : '' ?> treeview">
                <a href="#">
                    <i class="fa fa-caret-square-o-right text-lapak"></i> <span>Slideshow</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(2) == 'slideshow' AND $this->uri->segment(3) != 'add') ? 'active' : '' ?> ">
                        <a href="<?php echo site_url('admin/slideshow') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'slideshow' AND $this->uri->segment(3) != 'add') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> Daftar Slideshow</a>
                    </li>
                    <li class="<?php echo ($this->uri->segment(2) == 'slideshow' AND $this->uri->segment(3) == 'add') ? 'active' : '' ?> ">
                        <a href="<?php echo site_url('admin/slideshow/add') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'slideshow' AND $this->uri->segment(3) == 'add') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> Tambah Slideshow</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'merchant') ? 'active' : '' ?> treeview">
                <a href="#">
                    <i class="fa fa-users text-lapak"></i> <span>Pedagang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(2) == 'merchant' AND $this->uri->segment(3) != 'add') ? 'active' : '' ?> ">
                        <a href="<?php echo site_url('admin/merchant') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'merchant' AND $this->uri->segment(3) != 'add') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> Daftar Pedagang</a>
                    </li>
                </ul>
            </li>
            <?php  if($this->session->userdata('uroleid') == ROLE_SUPERADMIN): ?>
                <li class="<?php echo ($this->uri->segment(2) == 'users') ? 'active' : '' ?> treeview">
                    <a href="#">
                        <i class="fa fa-users text-lapak"></i> <span>Pengguna</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(2) == 'users' AND $this->uri->segment(3) != 'add') ? 'active' : '' ?> ">
                            <a href="<?php echo site_url('admin/users') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'users' AND $this->uri->segment(3) != 'add') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> Daftar Pengguna</a>
                        </li>
                        <li class="<?php echo ($this->uri->segment(2) == 'users' AND $this->uri->segment(3) == 'add') ? 'active' : '' ?> ">
                            <a href="<?php echo site_url('admin/users/add') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'users' AND $this->uri->segment(3) == 'add') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> Tambah Pengguna</a>
                        </li>
                    </ul>
                </li>
            <li class="<?php echo ($this->uri->segment(2) == 'logs') ? 'active' : '' ?> treeview">
                <a href="#">
                    <i class="fa fa-clock-o text-lapak"></i> <span>Log Aktifitas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(2) == 'logs' AND $this->uri->segment(3) != 'add') ? 'active' : '' ?> ">
                        <a href="<?php echo site_url('admin/logs') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'logs' AND $this->uri->segment(3) != 'add') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> Daftar Log Aktifitas</a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>