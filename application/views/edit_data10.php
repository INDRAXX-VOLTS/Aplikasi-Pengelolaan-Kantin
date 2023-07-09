<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT NOMOR REKENING</h3>

    <?php foreach ($datarekening as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datarekening/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Nama Bank</label>
                <input type="text" name="nama_bank" class="form-control" value="<?php echo $mhs->nama_bank ?>">
            </div>   
            <div class="for-group">
                <label>NOMOR REKENING</label>
                <input type="text" name="no_rekening" class="form-control" value="<?php echo $mhs->no_rekening ?>">
            </div>   
            <div class="for-group">
                <label>Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $mhs->nama_pemilik ?>">
            </div> 
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>