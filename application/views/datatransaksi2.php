<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">data transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus"></i> Tambah data transaksi</button>

        <a class="btn btn-danger" href=" <?php echo base_url('datatransaksi/print') ?>"> <i class="fa fa-print"></i> PRINT </a>

 <!-- form filter tanggal -->
 <div class="row mt-3">
  <div class="col">
    <form method="post" class="form-inline">
      <input type="date" name="tgl_mulai" class="form-control" value="<?php echo isset($_POST['tgl_mulai']) ? $_POST['tgl_mulai'] : '' ?>">
      <input type="date" name="tgl_selesai" class="form-control ml-3" value="<?php echo isset($_POST['tgl_selesai']) ? $_POST['tgl_selesai'] : '' ?>">
      <button type="submit" name="filter_tgl" class="btn btn-info ml-3">Filter</button>
    </form>
  </div>
</div>


        <table class="table table-bordered table-striped">
  <tr>
    <th>NO</th>
    <th>KODE PRODUK</th>
    <th>NAMA PRODUK</th>
    <th>HARGA JUAL</th>
    <th>TANGGAL</th>
    <th>TOTAL</th>
    <th>DIBAYAR</th>
    <th>KEMBALI</th>
    <th style="padding-left: 60px" colspan="2">OPSI</th>
  </tr>
  <?php
  $no = 1;
  foreach ($datatransaksi as $dpt) : ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $dpt->kodeProduk ?></td>
      <td><?php echo $dpt->namaProduk ?></td>
      <td><?php echo $dpt->harga_jual ?></td>
      <td><?php echo $dpt->tanggal ?></td>
      <td>Rp <?php echo number_format($dpt->total, 0, ',', '.') ?></td>
      <td>Rp <?php echo number_format($dpt->dibayar, 0, ',', '.') ?></td>
      <td>Rp <?php echo number_format($dpt->kembali, 0, ',', '.') ?></td>
      <td><?php echo anchor('datatransaksi/detail/' . $dpt->id, '<div class="btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
      <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('datatransaksi/hapus/' . $dpt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
      <td><?php echo anchor('datatransaksi/edit_data/' . $dpt->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT data transaksi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'datatransaksi/tambah_aksi' ?>">

            
            <div class="form-group">
                <label>kodeProduk</label>
                <input type="text" id="kodeProduk" name="kodeProduk" class="form-control"required>
                <style>
                   .scan-keterangan {
                    font-weight: bold;
                    color: red;
                                    }
                </style>

                <small class="scan-keterangan">Mohon scan barangnya disini</small>
            </div>

            <div class="form-group">
                <label>namaProduk</label>
                <input type="text" name="total" class="form-control"readonly >
            </div>

            <div class="form-group">
              <label>Harga Jual</label>
            <div class="input-group">
              <span class="input-group-addon">Rp</span>
              <input type="text" name="harga_jual" class="form-control" readonly>
            </div>

            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control"readonly >
            </div>
            
            <div class="form-group">
                <label>Dibayar</label>
                <input type="text" name="dibayar" class="form-control"readonly >
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            
        </form>
      </div>
     
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
      
      <!-- Barcode Reader -->
<script src="<?php echo base_url('assets/vendor/quaggaJS/dist/quagga.min.js') ?>"></script>
<script>
  $(document).ready(function() {
    // Konfigurasi QuaggaJS
    Quagga.init({
      inputStream: {
        name: "Live",
        type: "LiveStream",
        target: document.querySelector('#barcodeScanner') // ID elemen div untuk menampilkan pemindaian
      },
      decoder: {
        readers: ["ean_reader"] // Jenis barcode yang akan dipindai (misalnya: EAN-13)
      }
    }, function(err) {
      if (err) {
        console.error(err);
        return;
      }
      console.log("QuaggaJS siap.");

      // Mulai pemindaian barcode
      Quagga.start();
    });

    // Tangkap hasil pemindaian
    Quagga.onDetected(function(result) {
      var code = result.codeResult.code;
      $("#barcodeInput").val(code); // Mengisi nilai barcode ke input dengan ID 'barcodeInput'
    });
  });
</script>

<script>
  // Mendapatkan referensi elemen input
  var kodeProdukInput = document.getElementById('kodeProduk');

  // Mendengarkan peristiwa pemindaian
  Quagga.onDetected(function(result) {
    // Mendapatkan nilai pemindaian
    var barcodeValue = result.codeResult.code;

    // Mengisi nilai input dengan hasil pemindaian
    kodeProdukInput.value = barcodeValue;

    // Mematikan pemindaian setelah berhasil mengisi nilai
    Quagga.stop();
  });
</script>

<script>
  function mulaiPemindaian() {
    // Memulai pemindaian
    Quagga.start();
  }
</script>

<!-- autofill form input data transaksi -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#kodeProduk").on("change", function() {
      var kodeProduk = $(this).val();
      if (kodeProduk !== "") {
        // Send an AJAX request to fetch the product data based on the entered kodeProduk
        $.ajax({
  url: "your-api-endpoint-url", // Replace with your actual API endpoint URL
  method: "GET",
  data: { kodeProduk: kodeProduk },
  success: function(response) {
    if (response.success) {
      $("#namaProduk").val(response.data.namaProduk);
      $("#harga_jual").val(response.data.harga_jual);
    } else {
      $("#namaProduk").val("");
      $("#harga_jual").val("");
    }
  },
  error: function() {
    console.error("Error occurred while fetching product data.");
  }
});

      } else {
        // Clear the namaProduk and harga_jual fields if kodeProduk is empty
        $("#namaProduk").val("");
        $("#harga_jual").val("");
      }
    });
  });
</script>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<small>
            
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>
 

