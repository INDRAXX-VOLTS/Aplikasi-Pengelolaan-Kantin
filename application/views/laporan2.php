<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        

        <a class="btn btn-danger" href=" <?php echo base_url('laporan/print') ?>"> <i class="fa fa-print"></i> PRINT </a>

        <div style="width: 500px;" class="navbar-form navbar-right">
          <?php echo form_open('laporan/search') ?>
          <input type="text" name="keyword" class="form-control"
          placeholder="Search">
          <button type="submit" class="btn btn-succes"></button>
          <?php echo form_close() ?>
        </div>

        <table class="table table-bordered table-striped">
            <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>TOTAL PENJUALAN</th>
                <th>TOTAL PEMASUKAN TENANT</th>
                <th>TOTAL PENGELUARAN</th>
                <th style="padding-left: 60px" colspan="2">OPSI</th>
            </tr>
            <?php 

            $no = 1;
            foreach ($laporan as $dpt) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dpt->tanggal ?></td>
                <td><?php echo $dpt->total_datapenjualan ?></td>
                <td><?php echo $dpt->total_pemasukantenant ?></td>
                <td><?php echo $dpt->total_datapengeluaran ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('laporan/hapus/' . $dpt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('laporan/edit_data9/' . $dpt->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT LAPORAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'laporan/tambah_aksi' ?>">


            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="total_datapenjualan" class="form-control">
            </div>

            <div class="form-group">
                <label>Total Pemasukan Tenant</label>
                <input type="text" name="total_pemasukantenant" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Total Pengeluaran</label>
                <input type="text" name="total_datapengeluaran" class="form-control">
            </div>
            

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>