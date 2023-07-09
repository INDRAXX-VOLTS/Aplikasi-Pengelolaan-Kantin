<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($datatenant as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datatenant/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                
            </div>
            <div class="for-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $mhs->keterangan ?>">
            </div>      
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>