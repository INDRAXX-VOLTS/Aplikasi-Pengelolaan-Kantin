  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('admin/dashboard') ?>" class="brand-link">
      <center>
      <img src="<?php echo base_url() ?>assets/dist/img/LogoKeuangan.png" alt="LogoKeuangan">
      <br>
      <h6><b>Aplikasi Pengelolaan Kantin</b></h5> 
      <h6>SMKN 1 BATAM</h6>
      </center>
    </a>


      <!-- QUERY MENU -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo site_url('laporan2/index') ?>" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan
                </p>
              </a>
              <li class="nav-item position-bottom">
                <a href="<?php echo site_url('formlogin') ?>" class="nav-link ">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Logout
                  </p>
                </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>