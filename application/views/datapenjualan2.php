<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">data penjualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus"></i> Tambah Data Penjualan</button>

        <a class="btn btn-danger" href=" <?php echo base_url('datapenjualan/print') ?>"> <i class="fa fa-print"></i> PRINT </a>

        <div style="width: 500px;" class="navbar-form navbar-right">
          <?php echo form_open('datapenjualan/search') ?>
          <input type="text" name="keyword" class="form-control"
          placeholder="Search">
          <button type="submit" class="btn btn-succes"></button>
          <?php echo form_close() ?>
        </div>



        <table class="table table-bordered table-striped">
            <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>NAMA BARANG</th>
                <th>HARGA BARANG</th>
                <th>QTY</th>
                <TH>TOTAL</TH>
                <th style="padding-left: 60px" colspan="2">OPSI</th>
            </tr>
            <?php 

            $no = 1;
            foreach ($datapenjualan as $dpt) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dpt->tanggal ?></td>
                <td><?php echo $dpt->nama_barang ?></td>
                <td><?php echo $dpt->harga_barang ?></td>
                <td><?php echo $dpt->qty ?></td>
                <td>Rp <?php echo number_format($total = $dpt->harga_barang * $dpt->qty, 0, '', '.') ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('datapenjualan/hapus/' . $dpt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('datapenjualan/edit_data/' . $dpt->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            
        <?php endforeach; ?>

        </table>
    </section>
    <nav aria-label="Page navigation example" style="margin-left:85%">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENJUALAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'datapenjualan/tambah_aksi' ?>">

            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>


            <div class="form-group">
                <label>Nama Barang</label>
                <select name="nama_barang" class="form-control" required>
                <option value="">-----Pilih Barang-----</option>
                <?php foreach ($data_barang as $barang) : ?>
                  <option value="<?php echo $barang['namaProduk']; ?>"><?php echo $barang['namaProduk']; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Barang:</label><br>
                <input type="text" id="harga_barang" name="harga_barang" class="form-control"readonly>
            </div>

            
            <div class="form-group">
  <label>Qty</label>
  <input type="number" name="qty" id="qty" class="form-control" required>
</div>

<div class="form-group">
  <label>Total</label>
  <input class="form-control" type="text" id="total" name="total" placeholder="Total…" readonly>
</div>


            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            
        </form>
      </div>
      
      <!-- ISI AUTOMATIS (AUTOFILL) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
          $(document).ready(function() {
          $('select[name="nama_barang"]').change(function() {
            var nama_barang = $(this).val();

            $.ajax({
                url: "<?php echo site_url('datapenjualan/get_harga_jual'); ?>",
                method: "POST",
                data: {
                    nama_barang: nama_barang
                },
                dataType: "JSON",
                success: function(data) {
                    $('input[name="harga_barang"]').val(data.harga_jual);
                }
                });
               });
               });
        </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        var inputHargaBarang = document.getElementById("harga_barang");
        var inputQty = document.getElementById("qty");
        var inputTotal = document.getElementById("total");

        function hitungTotal() {
            var hargaBarang = parseFloat(inputHargaBarang.value) || 0;
            var qty = parseFloat(inputQty.value) || 0;

            var total = hargaBarang * qty;

            // Mengisi input total dengan hasil perkalian
            inputTotal.value = total.toFixed(2);
        }

        // Memanggil fungsi hitungTotal saat input harga barang atau qty berubah
        inputHargaBarang.addEventListener("input", hitungTotal);
        inputQty.addEventListener("input", hitungTotal);
    });
</script>


        
        <!-- ISI AUTOMATIS TANGGAL DEFAULT (AUTOFILL TANGGAL HARI INI) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
    document.addEventListener("DOMContentLoaded", function() {
        var inputTanggal = document.getElementById("tanggal");

        // Mendapatkan tanggal hari ini
        var today = new Date().toISOString().split("T")[0];

        // Mengisi nilai default pada elemen input tanggal
        inputTanggal.value = today;
    });
        </script>



      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>