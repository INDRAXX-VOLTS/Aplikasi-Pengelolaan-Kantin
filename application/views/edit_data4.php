<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($datapengeluaran as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datapengeluaran/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $mhs->tanggal ?>">
            </div>
            <div class="for-group">
                <label>tenant</label>
                <input type="text" name="tenant" class="form-control" value="<?php echo $mhs->tenant ?>">
                
            </div>
            <div class="for-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" value="<?php echo $mhs->total ?>">
            </div>      
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>