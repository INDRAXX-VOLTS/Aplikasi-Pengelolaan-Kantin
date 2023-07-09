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
                <td>Rp <?php echo number_format($dpt->total_datapenjualan, 0, ',', '.') ?></td>
                <td>Rp <?php echo number_format($dpt->total_pemasukantenant, 0, ',', '.') ?></td>
                <td>Rp <?php echo number_format($dpt->total_datapengeluaran, 0, ',', '.') ?></td>
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
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>