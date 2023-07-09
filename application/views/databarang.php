<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">data barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus"></i> Tambah Data Barang</button>

        <div style="width: 500px;" class="navbar-form navbar-right">
          <?php echo form_open('databarang/search') ?>
          <input type="text" name="keyword" class="form-control"
          placeholder="Search">
          <button type="submit" class="btn btn-succes"></button>
          <?php echo form_close() ?>
        </div>

        <table class="table table-bordered table-striped">
            <tr>
                <th>NO</th>
                <th>NAMA PRODUK</th>
                <th>KODE PRODUK</th>
                <th>KATEGORI</th>
                <th>UNIT</th>
                <th>STOK</th>
                <th>HARGA JUAL</th>
                <th style="padding-left: 60px" colspan="2">OPSI</th>
            </tr>
            <?php 

            $no = 1;
            foreach ($databarang as $dpt) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dpt->namaProduk ?></td>
                <td><?php echo $dpt->kodeProduk ?></td>
                <td><?php echo $dpt->kategori ?></td>
                <td><?php echo $dpt->unit ?></td>
                <td><?php echo $dpt->stok ?></td>
                <td>Rp <?php echo number_format($dpt->harga_jual, 0, ',', '.') ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('databarang/hapus/' . $dpt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('databarang/edit_data8/' . $dpt->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BARANG</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'databarang/tambah_aksi' ?>">


            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="namaProduk" class="form-control">
            </div>

            <div class="form-group">
                <label>kodeProduk</label>
                <input type="text" id="kodeProduk" name="kodeProduk" class="form-control"required>
                <style>
                   .scan-keterangan {
                    font-weight: bold;
                    color: red;
                                    }
                </style>

                <small class="scan-keterangan">SCAN BARCODE DISINI</small>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control"required>
                  <option value="">--Pilih Kategori--</option>
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                  <option value="Voucher">Voucher</option>
                  <option value="Tap-Cash">Tap-Cash</option>
                </select>
            </div>
            
            <div class="form-group">
            <label>Unit</label>
            <select name="unit" class="form-control"required>
                  <option value="">--Pilih unit--</option>
                  <option value="Makanan">Perbuah</option>
                  <option value="Minuman">Pcs</option>
                  <option value="Voucher">Perbotol</option>
            </select>
            </div>
            
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control"required>
            </div>

            <div class="form-group">
              <label>Harga Jual</label>
            <div class="input-group">
              <span class="input-group-addon">Rp</span>
              <input type="text" name="harga_jual" class="form-control" required>
            </div>
</div>


          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
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