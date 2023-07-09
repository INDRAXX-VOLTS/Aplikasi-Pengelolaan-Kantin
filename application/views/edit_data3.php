<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($datapemasukantenant as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datapemasukantenant/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $mhs->tanggal ?>">
            </div>
            <div class="for-group">
                <label>Nama Tenant</label>
                <input type="text" name="nama_tenant" class="form-control" value="<?php echo $mhs->nama_tenant ?>">            
            </div>
            <div class="for-group">
                <label>Total</label>
                <input type="text" name="total_pemasukantenant" class="form-control" value="<?php echo $mhs->total_pemasukantenant ?>">
            </div>      
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>