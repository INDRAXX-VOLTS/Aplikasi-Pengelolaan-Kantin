<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Rekening</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus"></i> Tambah Nomor Rekening</button>

        <div style="width: 500px;" class="navbar-form navbar-right">
          <?php echo form_open('datarekening/search') ?>
          <input type="text" name="keyword" class="form-control"
          placeholder="Search"> 
          <button type="submit" class="btn btn-succes"></button>
          <?php echo form_close() ?>
        </div>
        
        <table class="table table-bordered table-striped">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NAMA BANK</th>
                <th class="text-center">NOMOR REKENING</th>
                <th class="text-center">NAMA PEMILIK</th>
                <th style="padding-left: 60px" colspan="2">OPSI</th>
            </tr>
            <?php 

            $no = 1;
            foreach ($datarekening as $dpt) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dpt->nama_bank ?></td>
                <td><?php echo $dpt->no_rekening ?></td>
                <td><?php echo $dpt->nama_pemilik ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('datarekening/hapus/' . $dpt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('datarekening/edit_data10/' . $dpt->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            
        <?php endforeach; ?>
        </table>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM TAMBAH NO REKENING</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'datarekening/tambah_aksi' ?>">

            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" name="nama_bank" class="form-control">
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" name="no_rekening" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control">
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