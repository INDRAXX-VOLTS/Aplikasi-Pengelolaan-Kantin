<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($datapengeluaran as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datapengeluaran/update' ?>">
         
            <div class="for-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $mhs->tanggal ?>">
            </div>
            <div class="for-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $mhs->kategori ?>">
            <div class="for-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" value="<?php echo $mhs->total ?>">
            </div>
            
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>