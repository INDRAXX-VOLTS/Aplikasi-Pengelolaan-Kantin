<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">data pemasukan tenant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus"></i> Tambah Data Pemasukan Tenant</button>

        <a class="btn btn-danger" href=" <?php echo base_url('datapemasukantenant/print') ?>"> <i class="fa fa-print"></i> PRINT </a>

 <!-- form pencarian data -->
<form action="<?php echo base_url('datapemasukantenant/search_by_date'); ?>" method="post">
    <div class="form-group">
        <label>Tanggal</label>
        <select class="form-control" style="width: 500px;" name="tanggal">
            <?php foreach ($datapemasukantenant as $row) { ?>
                <option value="<?php echo $row->tanggal; ?>"><?php echo $row->tanggal; ?></option>
            <?php 
          } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cari</button>
</form>



        <table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama Tenant</th>
            <th>Total Pemasukan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datapemasukantenant as $row) { ?>
        <tr>
            <td><?php echo $row->tanggal; ?></td>
            <td><?php echo $row->nama_tenant; ?></td>
            <td>Rp. <?php echo number_format($row->total_pemasukantenant, 0, ',', '.'); ?></td>
            <td>
                <a href="<?php echo base_url('datapemasukantenant/edit_data3/' . $row->id); ?>" class="btn btn-sm btn-primary fa fa-edit"></a>
                <a href="<?php echo base_url('datapemasukantenant/hapus/' . $row->id); ?>" class="btn btn-sm btn-danger " onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php 
      } ?>
    </tbody>
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PEMASUKAN TENANT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'datapemasukantenant/tambah_aksi' ?>">

             <div class="form-group">
              <label>Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Nama Tenant</label>
                <select name="nama_tenant" class="form-control"required>
                <option value="">-----Pilih Tenant-----</option>
                <?php foreach ($data_tenant as $tenant) : ?>
                  <option value="<?php echo $tenant['id']; ?>"><?php echo $tenant['nama']; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Total</label>
                <input type="text" name="total_pemasukantenant" class="form-control"required>
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
        
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>