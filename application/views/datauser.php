<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">data user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class ="fa fa-plus"></i> Tambah User</button>

        <div style="width: 500px;" class="navbar-form navbar-right">
          <?php echo form_open('datauser/search') ?>
          <input type="text" name="keyword" class="form-control"
          placeholder="Search"> 
          <button type="submit" class="btn btn-succes"></button>
          <?php echo form_close() ?>
        </div>
        
        <table class="table table-bordered table-striped">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">USERNAME</th>
                <th style="padding-left: 60px" colspan="2">OPSI</th>
            </tr>
            <?php 

            $no = 1;
            foreach ($datauser as $dpt) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dpt->username ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('datauser/hapus/' . $dpt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('datauser/edit' . $dpt->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            
        <?php endforeach; ?>
        </table>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA USER</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'datauser/tambah_aksi' ?>">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control"required>
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