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
          <li class="nav-item menu-open">
            <a href="<?php echo site_url('admin/dashboard') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Daftar Barang
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url('unit/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('kategori/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('databarang/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('datapenjualan/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Data Penjualan
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo site_url('datatransaksi/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Data Transaksi
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo site_url('datapemasukantenant/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Data Pemasukan Tenant
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo site_url('datapengeluarantenant/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Data Pengeluaran Tenant
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo site_url('datapengeluaran/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Data Pengeluaran
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo site_url('datatenant/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Data Tenant
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo site_url('datauser/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data User
              </p>
            </a>
            <li class="nav-item">
              <a href="<?php echo site_url('laporan/index') ?>" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan
                </p>
              </a>
              <li class="nav-item">
                <a href="<?php echo site_url('datarekening/index') ?>" class="nav-link">
                  <i class="nav-icon fas fa-credit-card"></i>
                  <p>
                    Data Rekening
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