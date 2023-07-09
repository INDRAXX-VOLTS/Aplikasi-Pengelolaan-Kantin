<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT LAPORAN</h3>

    <?php foreach ($laporan as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'laporan/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $mhs->tanggal ?>">
            </div>   
            <div class="for-group">
                <label>Total Penjualan</label>
                <input type="text" name="total_datapenjualan" class="form-control" value="<?php echo $mhs->total_datapenjualan ?>">
            </div>   
            <div class="for-group">
                <label>Total Pemasukan Tenant</label>
                <input type="text" name="total_pemasukantenant" class="form-control" value="<?php echo $mhs->total_pemasukantenant ?>">
            </div>   
            <div class="for-group">
                <label>Total Pengeluaran</label>
                <input type="text" name="total_datapengeluaran" class="form-control" value="<?php echo $mhs->total_datapengeluaran ?>">
            </div>   
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>