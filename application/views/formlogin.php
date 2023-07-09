<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">

  


<body style="background-image: url('<?= base_url("assets/dist/img/bglogin.png") ?>'); background-size: cover;">   
  
  <div class="container">


  <br>
  <br>
  <br>
  <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5" style= "border-radius: 20px;">
            <div class="card-body p-0" style= "background-color: #909090; border-radius: 20px;">
                <!-- Nested Row within Card Body -->
                <div class="row">                            
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h4><b>APLIKASI KEUANGAN KANTIN</h4>
                                <h4><b>SMK NEGERI 1 BATAM</h4>
                            </div>
                            <br>
                            <br>
        <form class="user" method="POST" action="<?= base_url('auth'); ?>">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          </div>

          <!-- Username input -->
          <div class="form-outline mb-4 form-control-user d-flex align-items-center gap-3">
          <i class="fa fa-user" style= "font-size:30px;"></i> 
            <input type="text" style= "margin-left:20px; border-radius: 10px;"  autocomplete="off" action="/login" method="post" class="form-control form-control-lg" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Nama Pengguna" /><?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4 form-control-user d-flex align-items-center gap-3">
          <i class="fa fa-key" style= "font-size:30px;"></i>
            <input type="password" style= "margin-left:18px; border-radius: 10px;" class="form-control form-control-lg" id="password" name="password"
              placeholder="Kata Sandi"value="<?= set_value('password'); ?>" /><?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          
            <button type="submit" class="btn btn-primary btn-lg"
              style="
              padding-left: 9.6rem; 
              padding-right: 9.6rem; 
              margin-top: 10px; 
              border-radius: 20px ; 
              border-color:#0B1826; 
              background-color: #0B1826; 
              ">LOGIN</button>
          </div>  
        </form>
      </div>
    </div>
  </div>
</body>