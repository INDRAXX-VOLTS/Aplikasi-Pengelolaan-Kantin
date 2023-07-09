  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="https://adminlte.io">Aplikasi Pengelolaan Kantin</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- Data Tables -->
<script src="./js/app.js"></script>
  <script src="<?php echo base_url() ?>https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="<?php echo base_url() ?>https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(function () {
      $("#example").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

  </script>
  <script>
  // Menambahkan event listener pada dropdown menu
  document.getElementById('nama_barang').addEventListener('change', function() {
    // Mengambil nilai dari dropdown menu
    var nama_barang = this.value;

    // Mengirim request ke server untuk mengambil harga_jual dari tabel tb_databarang
    $.ajax({
      url: '<?php echo base_url('index.php/barang/get_harga_jual'); ?>',
      type: 'POST',
      data: { nama_barang: nama_barang },
      success: function(response) {
        // Mengupdate nilai harga_barang di tabel tb_barang sesuai dengan harga_jual yang didapat
        $('#harga_barang').val(response);
      }
    });
  });
</script>
<script>
  // Menambahkan event listener pada dropdown menu
  document.getElementById('nama_barang').addEventListener('change', function() {
    // Mengambil nilai dari dropdown menu
    var nama_barang = this.value;
    // Mengirim request ke server untuk mengambil harga_jual dari tabel tb_databarang
$.ajax({
  url: '<?php echo base_url('index.php/barang/get_harga_jual'); ?>',
  type: 'POST',
  data: { nama_barang: nama_barang },
  success: function(response) {
    // Mengupdate nilai harga_barang di tabel tb_barang sesuai dengan harga_jual yang didapat
    $('#harga_barang').val(response);
  }
});
});
</script>
   